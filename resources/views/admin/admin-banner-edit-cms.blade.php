@extends('layout.admin-cms-layout')

@section('content')
<div>
    <form action="{{route('admin-banner-update-cms',[
            'id' => $banner->id    
        ])}}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        @method('PATCH')
        <div class="form-container vertical">
            <input type="hidden" name="thumbnail" value="{{$banner->thumbnail}}">
            <x-image-input-single 
                inputName="thumbnail_input" 
                labelName="Banner Image"
                previewId="banner_preview"
                inputId="banner_input"
                filenameLabel="banner_file_name"
                fileImagePreview="{{$banner->thumbnail}}"
            />
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