@extends('layout.admin-cms-layout')

@section('content')
<div>
    <form action="{{route('admin-banner-store-cms')}}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        <div class="form-container vertical">
            <x-image-input-single 
                inputName="thumbnail_input" 
                labelName="Banner Image"
                previewId="banner_preview"
                inputId="banner_input"
                filenameLabel="banner_file_name"
                fileImagePreview=""
            />
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
@endsection('content')

@section('script')
<script src="{{url('/js/single-input-image-script.js')}}"></script>
@endsection('script')