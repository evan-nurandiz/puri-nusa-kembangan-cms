@extends('layout.admin-cms-layout')

@section('cms-title')
    Edit Banner
@endsection

@section('content')
<div>
    <form action="{{route('admin-banner-update-cms',[
            'id' => $banner->id    
        ])}}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        @method('PATCH')
        <div class="form-container vertical">
            <div class="grid grid-cols-3 gap-[32px]">
                <div class="col-span-2">
                    <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Detail Info</p>
                    <x-text-input
                        inputName="title"
                        labelName="Banner Title"
                        placeHolder="Enter Banner Title"
                        inputValue="{{$banner->title}}"
                        isImportant="true"
                    />
                    <x-text-input
                        inputName="link"
                        labelName="Banner Link"
                        placeHolder="Enter Banner Link"
                        inputValue="{{$banner->link}}"
                        isImportant="false"
                    />
                </div>
                <div class="col-span-1">
                    <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Image (Recomended 1512 × 694 px)</p>
                    <x-image-input-single 
                        inputName="thumbnail_input" 
                        labelName="Banner Image"
                        previewId="banner_preview"
                        inputId="banner_input"
                        filenameLabel="banner_file_name"
                        fileImagePreview="{{$banner->thumbnail}}"
                        fileDefaultValue="thumbnail"
                    />
                </div>
            </div>
            <div class="form-item vertical mt-[64px]">
                <div class="flex justify-end">
                    <a href="{{route('admin-banner-cms')}}">
                        <button class="btn bg-[#FFF7ED] text-[#E36004] mr-2 text-[16px] font-bold" type="button">Batal</button>
                    </a>
                    <button class="btn bg-[#11B980] text-[#FFFFFF] text-[16px] font-bold" type="submit">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection('content')

@section('script')
<script src="{{url('/js/single-input-image-script.js')}}"></script>
@endsection('script')