@extends('layout.admin-cms-layout')

@section('cms-title')
    Tipe Rumah
@endsection

@section('content')
<div>
    <form action="{{ isset($content) ? route('admin-house-type-cms-list-update', [
        'id' =>  $content->house_type_id 
    ]) : route('admin-house-type-cms-store') }}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        @if(isset($content))
            @method('PATCH')
        @endif
        <div class="form-container vertical">
            <div class="grid grid-cols-3 gap-[32px]">
                <div class="col-span-2">
                    <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Detail Info</p>
                    <x-text-input
                        inputName="house_type"
                        labelName="House Type"
                        placeHolder="Enter House Type"
                        inputValue="{{ isset($content) ? $content->house_type : '' }}"
                        isImportant="true"
                    />
                    <x-text-area-input
                        inputName="house_type_description"
                        labelName="Description"
                        placeHolder="Enter Description"
                        inputValue="{{ isset($content) ? $content->house_type_description : '' }}"
                        isImportant="true"
                    />
                    <x-text-input
                        inputName="house_link"
                        labelName="House Type Link"
                        placeHolder="Enter House Link"
                        inputValue="{{ isset($content) ? $content->house_link : '' }}"
                        isImportant=""
                    />
                </div>
                <div class="col-span-1">
                    <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Image (Recomended 808 × 500 px)</p>
                    <x-image-input-single 
                        inputName="house_type_image_input" 
                        labelName=""
                        previewId="house_type_image_preview"
                        inputId="house_type_image_input"
                        filenameLabel="house_type_image_file_name"
                        fileImagePreview="{{ isset($content) ? $content->house_type_image : '' }}"
                        fileDefaultValue="{{ isset($content) ? 'house_type_image' : '' }}"
                    />
                </div>
            </div>
            <div class="form-item vertical mt-[64px]">
                <div class="flex justify-end">
                    <a href="{{route('admin-house-type-cms')}}">
                        <button class="btn bg-[#FFF7ED] text-[#E36004] mr-2 text-[16px] font-bold" type="button">Batal</button>
                    </a>
                    <button class="btn bg-[#11B980] text-[#FFFFFF] text-[16px] font-bold" type="submit">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
<script src="{{url('/js/single-input-image-script.js')}}"></script>
@endsection('script')
