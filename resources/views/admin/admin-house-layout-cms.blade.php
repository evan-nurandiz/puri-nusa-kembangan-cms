@extends('layout.admin-cms-layout')

@section('cms-title')
    Layout
@endsection
@section('add-new-content')
<div class="flex gap-[21px]">
    <div>
        <button class="px-[16px] py-[13px] rounded-[6px] bg-[#CEAE92] flex items-center gap-[10px]"  data-bs-toggle="modal" data-bs-target="#edit-house-type-title">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M11.2411 2.99111L12.3661 1.86612C12.8543 1.37796 13.6457 1.37796 14.1339 1.86612C14.622 2.35427 14.622 3.14573 14.1339 3.63388L7.05479 10.713C6.70234 11.0654 6.26762 11.3245 5.78993 11.4668L4 12L4.53319 10.2101C4.67548 9.73239 4.93456 9.29767 5.28701 8.94522L11.2411 2.99111ZM11.2411 2.99111L13 4.74999M12 9.33333V12.5C12 13.3284 11.3284 14 10.5 14H3.5C2.67157 14 2 13.3284 2 12.5V5.49999C2 4.67157 2.67157 3.99999 3.5 3.99999H6.66667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="text-[#FFF] text-[16px] font-bold tracking-[0.5px]">Edit Title</span>
        </button>
    </div>
    <a href="{{route('admin-house-layout-cms-create')}}">
        <button class="px-[16px] py-[13px] rounded-[6px] bg-[#344643] flex items-center gap-[10px]">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M8 3V13M13 8L3 8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="text-[#FFF] text-[16px] font-bold tracking-[0.5px]">Tambah</span>
        </button>
    </a>
</div>
@endsection

@section('content')
<div>
    <table class="">
        <thead class="bg-[#D9D9D9]">
            <tr>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[14px] font-semibold leading-[1rem]">NO</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[14px] font-semibold leading-[1rem]">IMAGE</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[14px] font-semibold leading-[1rem]">TOTAL AREA</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[14px] font-semibold leading-[1rem]">TYPE</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[14px] font-semibold leading-[1rem]">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($content['content']->house_layout_list as $house_layout)
            <tr class="bg-[#FFF]">
                <td class="px-[1rem] py-[1.5rem] w-[10%]">{{$loop->iteration}}</td>
                <td class="px-[1rem] py-[1.5rem] w-[40%]">
                    <img src="{{asset('storage/images/'.$house_layout->house_layout_image)}}" alt="">
                </td>
                <td class="px-[1rem] py-[1.5rem] w-[30%]">{{$house_layout->house_area_total}}</td>
                <td class="px-[1rem] py-[1.5rem] w-[30%]">{{$house_layout->house_floor}} Lantai</td>
                <td class="px-[1rem] py-[1.5rem] w-[20%]">
                    <div class="mb-3 flex">
                        <a href="{{route('admin-house-layout-cms-edit', [
                            'id' => $loop->iteration - 1   
                        ])}}">
                            <button class="btn text-[#029764] text-[16px] font-bold">Edit</button>
                        </a>
                        <form action="{{route('admin-house-layout-cms-list-delete',[
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
            <form action="{{route('admin-house-layout-cms-update')}}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="type" value="edit-title">
                <div class="flex justify-between items-center mb-[33px]">
                    <p class="text-[20px] font-bold text-[#32343B] leading-[28px]">Edit Title - Tipe Rumah</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none" class="cursor-pointer" data-bs-dismiss="modal">
                        <path d="M17.0608 17.066L24.9358 24.941M24.9358 17.066L17.0608 24.941M36.7483 21.0035C36.7483 29.702 29.6968 36.7535 20.9983 36.7535C12.2998 36.7535 5.24829 29.702 5.24829 21.0035C5.24829 12.3051 12.2998 5.25354 20.9983 5.25354C29.6968 5.25354 36.7483 12.3051 36.7483 21.0035Z" stroke="#8A898E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <x-text-input
                    inputName="house_layout_small_title"
                    labelName="House Layout Small Title"
                    placeHolder="Enter House Layout Small Title"
                    inputValue="{!!$content['content']->house_layout_small_title!!}"
                    isImportant="true"
                />
                <x-text-input
                    inputName="house_layout_big_title"
                    labelName="House Layout Big Title"
                    placeHolder="Enter House Layout Small Title"
                    inputValue="{!!$content['content']->house_layout_big_title!!}"
                    isImportant="true"
                />
                <x-text-area-input
                    inputName="house_layout_description"
                    labelName="House Layout Description"
                    placeHolder="Enter House Layout Description"
                    inputValue="{!!$content['content']->house_layout_description!!}"
                    isImportant="true"
                />
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
