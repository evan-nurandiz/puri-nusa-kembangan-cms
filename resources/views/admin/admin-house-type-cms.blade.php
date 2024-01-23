@extends('layout.admin-cms-layout')

@section('cms-title')
    Tipe Rumah
@endsection
@section('add-new-content')
<div class="flex gap-[21px]">
    <div>
        <button class="px-[16px] py-[13px] rounded-[6px] bg-[#CEAE92] flex items-center gap-[10px]"  data-bs-toggle="modal" data-bs-target="#edit-house-type-title">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M8 3V13M13 8L3 8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="text-[#FFF] text-[16px] font-bold tracking-[0.5px]">Edit Title</span>
        </button>
    </div>
    <a href="{{route('admin-house-type-cms-create')}}">
        <button class="px-[16px] py-[13px] rounded-[6px] bg-[#344643] flex items-center gap-[10px]">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M8 3V13M13 8L3 8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="text-[#FFF] text-[16px] font-bold tracking-[0.5px]">Tambah</span>
        </button>
    </a>
</div>
@endsection

@section('add-new-content')
<div class="flex gap-4">
    <button type="button" data-bs-toggle="modal" data-bs-target="#edit-house-type-title" class="btn btn-solid">
        Edit House Type Title
    </button>
    <button type="button" data-bs-toggle="modal" data-bs-target="#create-edit-house-type" class="btn btn-solid" id="create-modal" onclick="createModal(event)">
        Create New House Type
    </button>
</div>
@endsection

@section('content')
<div>
    <table class="">
        <thead class="bg-[#D9D9D9]">
            <tr>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[14px] font-semibold leading-[1rem]">NO</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[14px] font-semibold leading-[1rem]">IMAGE</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[14px] font-semibold leading-[1rem]">TYPE</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[14px] font-semibold leading-[1rem]">DESCRIPTION</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[14px] font-semibold leading-[1rem]">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($content['content']->house_types_list as $house_type)
            <tr class="bg-[#FFF]">
                <td class="w-[10%] px-[1rem] py-[1.5rem]">{{$loop->iteration}}</td>
                <td class="w-[40%] px-[1rem] py-[1.5rem]">
                    <img src="{{asset('storage/images/'.$house_type->house_type_image)}}" alt="">
                </td>
                <td class="w-[20%] px-[1rem] py-[1.5rem]">{{$house_type->house_type}}</td>
                <td class="w-[30%] px-[1rem] py-[1.5rem]">{{$house_type->house_type_description}}</td>
                <td class="w-[20%] px-[1rem] py-[1.5rem]">
                    <div class="mb-3 flex">
                        <a href="{{route('admin-house-type-cms-edit', [
                            'id' => $loop->iteration - 1   
                        ])}}">
                            <button class="btn text-[#029764] text-[16px] font-bold">Edit</button>
                        </a>
                        <form action="{{route('admin-house-type-cms-list-delete',[
                                'id' => $loop->iteration    
                            ])}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button  onclick="return confirm('Are you sure?')" type="submit" class="btn text-[#E36004] text-[16px] font-bold">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="edit-house-type-title" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog dialog">
        <div class="dialog-content">
            <form action="{{route('admin-house-type-cms-update')}}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="type" value="edit-title">
                <div class="flex justify-between items-center mb-[33px]">
                    <p class="text-[20px] font-bold text-[#32343B] leading-[28px]">Edit Title - Tipe Rumah</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none" class="cursor-pointer" data-bs-dismiss="modal">
                        <path d="M17.0608 17.066L24.9358 24.941M24.9358 17.066L17.0608 24.941M36.7483 21.0035C36.7483 29.702 29.6968 36.7535 20.9983 36.7535C12.2998 36.7535 5.24829 29.702 5.24829 21.0035C5.24829 12.3051 12.2998 5.25354 20.9983 5.25354C29.6968 5.25354 36.7483 12.3051 36.7483 21.0035Z" stroke="#8A898E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="px-[52px]">
                    <x-text-input
                        inputName="house_type_small_title"
                        labelName="Small Title"
                        placeHolder="Enter House Type Small Title"
                        inputValue="{!!$content['content']->house_type_small_title!!}"
                        isImportant="true"
                    />
                    <x-text-input
                        inputName="house_type_big_title"
                        labelName="Big Title"
                        placeHolder="Enter House Type Small Title"
                        inputValue="{!!$content['content']->house_type_big_title!!}"
                        isImportant="true"
                    />
                </div>
                <div class="form-item vertical"><label class="form-label"></label>
                    <div class="flex justify-center">
                        <button class="btn bg-[#11B980] text-[#FFFFFF] text-[16px] font-bold" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
