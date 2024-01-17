@extends('layout.admin-cms-layout')

@section('content')
<div>
    <form action="{{route('admin-general-cms-update')}}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        @method('PATCH')
        <div class="form-container vertical">
            <div class="mb-4">
                <div class="grid grid-cols-2 gap-4">
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
                <div class="grid grid-cols-3 gap-4">
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
                    <x-text-input
                        inputName="twitter_link"
                        labelName="Twitter Link"
                        placeHolder="Enter Twitter Link"
                        inputValue="{{$content['content']->twitter_link}}"
                        isImportant="true"
                    />
                </div>
                <div>
                    <x-text-area-input
                        inputName="tiktok_pixel_script"
                        labelName="Tiktok Pixel Script"
                        placeHolder="Enter Tiktok Pixel Script"
                        inputValue="{!!$content['content']->tiktok_pixel_script!!}"
                        isImportant="true"
                    />
                </div>
            </div>
            <div class="form-item vertical"><label class="form-label"></label>
                <div class="flex justify-end">
                    <button class="btn btn-default" type="submit">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection

@section('script')
<script src="{{url('/js/single-input-image-script.js')}}"></script>
@endsection('script')