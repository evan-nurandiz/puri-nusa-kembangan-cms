@extends('layout.admin-cms-layout')

@section('cms-title')
    Tambah Banner
@endsection
@section('content')
<div>
    <form action="{{route('admin-banner-store-cms')}}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        <div class="form-container vertical">
            <div class="grid grid-cols-3 gap-[32px]">
                <div class="col-span-2">
                    <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Detail Info</p>
                    <x-text-input
                    inputName="title"
                    labelName="Banner Title"
                    placeHolder="Enter Banner Title"
                    inputValue=""
                    isImportant="true"
                    />
                    <x-text-input
                        inputName="link"
                        labelName="Banner Link"
                        placeHolder="Enter Banner Link"
                        inputValue=""
                        isImportant="false"
                    />
                </div>
                <div class="col-span-1">
                    <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Image</p>
                    <x-image-input-single 
                        inputName="thumbnail_input" 
                        labelName=""
                        previewId="banner_preview"
                        inputId="banner_input"
                        filenameLabel="banner_file_name"
                        fileImagePreview=""
                        fileDefaultValue=""
                        formatInfo="PNG. JPG (Recomended. 1920X720). max: 2MB."
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