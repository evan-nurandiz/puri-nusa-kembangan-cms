@extends('layout.admin-cms-layout')

@section('cms-title')
    Penghargaan
@endsection
@section('add-new-content')
<div class="flex gap-[21px]">
    <a href="{{route('admin-award-cms-create')}}">
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
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[14px] font-semibold leading-[1rem]">DESCRIPTION</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[14px] font-semibold leading-[1rem]">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($content['content']->award_list as $award)
                <tr class="bg-[#FFF]">
                    <td class="px-[1rem] py-[1.5rem] w-[10%]">{{$loop->iteration}}</td>
                    <td class="px-[1rem] py-[1.5rem] w-[40%]">
                        <img src="{{asset('storage/images/'.$award->award_image)}}" alt="">
                    </td>
                    <td class="px-[1rem] py-[1.5rem] w-[30%]">{{$award->award_description}}</td>
                    <td class="px-[1rem] py-[1.5rem] w-[20%]">
                        <div class="mb-3 flex">
                            <a href="{{route('admin-award-cms-edit',[
                                    'id' => $loop->iteration - 1
                                ])}}">
                                <button class="btn text-[#029764] text-[16px] font-bold" 
                                >Edit</button>
                            </a>
                            <form action="{{route('admin-award-cms-delete',[
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
            <form action="" method="POST" id="form-edit-create-list" enctype="multipart/form-data">
                @csrf
                <div class="flex justify-between items-center mb-[33px]">
                    <p id="modal-title" class="text-[20px] font-bold text-[#32343B] leading-[28px]"></p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none" class="cursor-pointer" data-bs-dismiss="modal">
                        <path d="M17.0608 17.066L24.9358 24.941M24.9358 17.066L17.0608 24.941M36.7483 21.0035C36.7483 29.702 29.6968 36.7535 20.9983 36.7535C12.2998 36.7535 5.24829 29.702 5.24829 21.0035C5.24829 12.3051 12.2998 5.25354 20.9983 5.25354C29.6968 5.25354 36.7483 12.3051 36.7483 21.0035Z" stroke="#8A898E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <input type="hidden" name="gallery_image_id">
                <div id="image-upload-container">
                </div>
                <div class="form-item vertical mt-[55px]">
                    <div class="flex justify-center">
                        <button class="btn bg-[#11B980] text-[#FFFFFF] text-[16px] font-bold" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection