@extends('layout.admin-cms-layout')

@section('cms-title')
    General
@endsection

@section('content')
<div>
    <form action="{{route('admin-general-cms-update')}}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        @method('PATCH')
        <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px] mt-[22px]">Profil</p>
        <div class="form-container vertical">
            <div class="mb-4">
                <div class="grid grid-cols-2 gap-[25px]">
                    <x-text-input
                        inputName="contact_number"
                        labelName="Contact Number"
                        placeHolder="Enter Contact Number"
                        inputValue="{{$content['content']->contact_number}}"
                        isImportant="true"
                    />
                    <x-text-input
                        inputName="working_hour"
                        labelName="Working Hour"
                        placeHolder="Enter Working Hour"
                        inputValue="{{$content['content']->working_hour}}"
                        isImportant="true"
                    />
                </div>
                <div class="grid grid-cols-2 gap-[25px]">
                    <x-text-input
                        inputName="instagram_link"
                        labelName="Instagram Link"
                        placeHolder="Enter Instagram Link"
                        inputValue="{{$content['content']->instagram_link}}"
                        isImportant="true"
                    />
                    <x-text-input
                        inputName="facebook_link"
                        labelName="Facebook Link"
                        placeHolder="Enter Facebook Link"
                        inputValue="{{$content['content']->facebook_link}}"
                        isImportant="true"
                    />
                    <div class="-my-[25px]">
                        <x-text-input
                            inputName="twitter_link"
                            labelName="Twitter Link"
                            placeHolder="Enter Twitter Link"
                            inputValue="{{$content['content']->twitter_link}}"
                            isImportant="true"
                        />
                    </div>
                </div>
                <hr class="h-[1px] my-[32px] bg-[#D9D9D9]">
                <div>
                    <x-text-area-input
                        inputName="tiktok_pixel_script"
                        labelName="Tiktok Pixel Script"
                        placeHolder="Enter Tiktok Pixel Script"
                        inputValue="{!!$content['content']->tiktok_pixel_script!!}"
                        isImportant="true"
                    />
                </div>
                <div>
                    <x-text-area-input
                        inputName="metapixel_script"
                        labelName="Meta Pixel Script"
                        placeHolder="Enter Meta Pixel Script"
                        inputValue="{!!$content['content']->meta_pixel_script!!}"
                        isImportant=""
                    />
                </div>
                <div>
                    <x-text-area-input
                        inputName="google_tag_script"
                        labelName="Google Tag Script"
                        placeHolder="Enter Google Tag Script"
                        inputValue="{!!$content['content']->google_tag_script!!}"
                        isImportant=""
                    />
                </div>
                <div>
                    <x-text-area-input
                        inputName="custom_header_script"
                        labelName="Custom Header Script"
                        placeHolder="Enter Custom Header Script"
                        inputValue="{!!$content['content']->custom_header_script!!}"
                        isImportant=""
                    />
                </div>
            </div>
            <div class="form-item vertical mt-[64px]">
                <div class="flex justify-end">
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