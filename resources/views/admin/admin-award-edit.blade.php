@extends('layout.admin-cms-layout')

@section('cms-title')
    Tambah Penghargaan
@endsection

@section('content')
<div class="mt-[22px]">
    <form action="{{ isset($content) ? route('admin-award-cms-update', [
        'id' =>  $content->house_award_id 
    ]) : route('admin-award-cms-store') }}" enctype="multipart/form-data" 
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
                        inputName="award_description"
                        labelName="Descritpion"
                        placeHolder="Enter Description"
                        inputValue="{{ isset($content) ? $content->award_description : '' }}"
                        isImportant="true"
                    />
                </div>
                <div class="col-span-1">
                    <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Image</p>
                    <x-image-input-single 
                        inputName="award_image_input" 
                        labelName=""
                        previewId="award_image_preview"
                        inputId="award_image_input"
                        filenameLabel="house_type_image_file_name"
                        fileImagePreview="{{ isset($content) ? $content->award_image : '' }}"
                        fileDefaultValue="{{ isset($content) ? 'award_image' : '' }}"
                        formatInfo="PNG. JPG (Recomended. 107X110). max: 2MB."
                    />
                </div>
            </div>
            <div class="form-item vertical mt-[64px]">
                <div class="flex justify-end">
                    <a href="{{route('admin-award-cms')}}">
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
