@extends('layout.admin-cms-layout')

@section('cms-title')
    Tipe Rumah
@endsection

@section('content')
<div>
    <form action="{{ isset($content) ? route('admin-house-layout-cms-list-update', [
        'id' =>  $content->house_type_id 
    ]) : route('admin-house-layout-cms-store') }}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        @if(isset($content))
            @method('PATCH')
        @endif
        <div class="form-container vertical">
            <div class="grid grid-cols-3 gap-[32px]">
                <div class="col-span-2">
                    <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Detail Info</p>
                    <div class="grid grid-cols-2 gap-[21px]">
                        <div class="col-span-1">
                            <x-text-input
                                inputName="house_area_total"
                                labelName="Total Area"
                                placeHolder="Enter Total Area"
                                inputValue="{{ isset($content) ? $content->house_area_total : '' }}"
                                isImportant="true"
                            />
                        </div>
                        <div class="col-span-1">
                            <x-text-input
                                inputName="house_floor"
                                labelName="Type"
                                placeHolder="Enter House Type"
                                inputValue="{{ isset($content) ? $content->house_floor : '' }}"
                                isImportant="true"
                            />
                        </div>
                        <div class="col-span-1 -mt-[21px]">
                            <x-text-input
                                inputName="house_status"
                                labelName="Status"
                                placeHolder="Enter House Status"
                                inputValue="{{ isset($content) ? $content->house_status : '' }}"
                                isImportant="true"
                            />
                        </div>
                        <div class="col-span-1 -mt-[21px]">
                            <x-text-input
                                inputName="house_bedroom"
                                labelName="Bedroom"
                                placeHolder="Enter House Bedroom"
                                inputValue="{{ isset($content) ? $content->house_bedroom : '' }}"
                                isImportant="true"
                            />
                        </div>
                        <div class="col-span-1 -mt-[21px]">
                            <x-text-input
                                inputName="house_bathroom"
                                labelName="Bathroom"
                                placeHolder="Enter House Bathroom"
                                inputValue="{{ isset($content) ? $content->house_bathroom : '' }}"
                                isImportant="true"
                            />
                        </div>
                        <div class="col-span-1 -mt-[21px]">
                            <x-text-input
                                inputName="house_carport"
                                labelName="Carport"
                                placeHolder="Enter House Carport"
                                inputValue="{{ isset($content) ? $content->house_carport : '' }}"
                                isImportant="true"
                            />
                        </div>
                    </div>
                    <div>
                        <x-text-input
                            inputName="house_link_url"
                            labelName="Link"
                            placeHolder="Enter House Link"
                            inputValue="{{ isset($content) ? $content->house_link_url : '' }}"
                            isImportant="true"
                        />
                    </div>
                </div>
                <div class="col-span-1">
                    <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Image (Recomended 808 × 500 px)</p>
                    <x-image-input-single 
                        inputName="house_layout_image_input" 
                        labelName=""
                        previewId="house_layout_image_preview"
                        inputId="house_layout_image_input"
                        filenameLabel="house_layout_image_file_name"
                        fileImagePreview="{{ isset($content) ? $content->house_layout_image : '' }}"
                        fileDefaultValue="{{ isset($content) ? 'house_layout_image' : '' }}"
                        formatInfo="PNG. JPG (Recomended. 680X317). max: 2MB."
                    />
                </div>
            </div>
            <div class="form-item vertical mt-[64px]">
                <div class="flex justify-end">
                    <a href="{{route('admin-house-layout-cms')}}">
                        <button class="btn bg-[#FFF7ED] text-[#E36004] mr-2 text-[16px] font-bold" type="button">Batal</button>
                    </a>
                    <button class="btn bg-[#0DA5E9] text-[#FFFFFF] text-[16px] font-bold" type="submit">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
<script src="{{url('/js/single-input-image-script.js')}}"></script>
@endsection('script')
