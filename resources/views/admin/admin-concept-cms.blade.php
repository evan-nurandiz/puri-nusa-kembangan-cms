@extends('layout.admin-cms-layout')

@section('content')
<div>
    <form action="{{route('admin-concept-cms-update')}}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        @method('PATCH')
        <div class="form-container vertical">
            <div class="flex justify-center gap-8 mb-4">
                <input type="hidden" name="concept_small_image" value="{{$content['content']->concept_small_image}}">
                <x-image-input-single 
                    inputName="concept_small_image_input" 
                    labelName="Concept Small Image"
                    previewId="concept_small_image_preview"
                    inputId="concept_small_image_input"
                    filenameLabel="concept_small_image_file_name"
                    fileImagePreview="{{$content['content']->concept_small_image}}"
                />
                <input type="hidden" name="concept_big_image" value="{{$content['content']->concept_big_image}}">
                <x-image-input-single 
                    inputName="concept_big_image_input" 
                    labelName="Concept Big Image"
                    previewId="concept_big_image_preview"
                    inputId="concept_big_image_input"
                    filenameLabel="concept_big_image_file_name"
                    fileImagePreview="{{$content['content']->concept_big_image}}"
                />
            </div>
            <div class="mb-4">
                <x-text-input
                    inputName="concept_small_title"
                    labelName="Small Title"
                    placeHolder="Enter Small Title"
                    inputValue="{{$content['content']->concept_small_title}}"
                    isImportant="true"
                />
                <x-text-input
                    inputName="concept_title"
                    labelName="Big Title"
                    placeHolder="Enter Big Title"
                    inputValue="{!!$content['content']->concept_title!!}"
                    isImportant="true"
                />
                <x-text-area-input
                    inputName="concept_description"
                    labelName="Description"
                    placeHolder="Enter Description"
                    inputValue="{{$content['content']->concept_description}}"
                    isImportant="true"
                />
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1">
                    <x-text-input
                        inputName="concept_usp_1_description"
                        labelName="USP 1"
                        placeHolder="Enter USP 1"
                        inputValue="{!!$content['content']->concept_usp_1_description!!}"
                        isImportant="true"
                    />
                </div>
                <div class="col-span-1">
                    <x-text-input
                        inputName="concept_usp_2_description"
                        labelName="USP 2"
                        placeHolder="Enter USP 2"
                        inputValue="{{$content['content']->concept_usp_2_description}}"
                        isImportant="true"
                    />
                </div>
                <div class="col-span-1">
                    <x-text-input
                        inputName="concept_usp_3_description"
                        labelName="USP 3"
                        placeHolder="Enter USP 3"
                        inputValue="{{$content['content']->concept_usp_3_description}}"
                        isImportant="true"
                    />
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <input type="hidden" name="concept_description_1_icon" value="{{$content['content']->concept_description_1_icon}}">
                    <x-text-input
                        inputName="concept_description_1_count"
                        labelName="description 1 count"
                        placeHolder="Enter Descritpion 1 Count"
                        inputValue="{{$content['content']->concept_description_1_count}}"
                        isImportant="true"
                    />
                    <x-text-input
                        inputName="concept_description_1_description"
                        labelName="Description 1 Description"
                        placeHolder="Enter Description 1"
                        inputValue="{{$content['content']->concept_description_1_description}}"
                        isImportant="true"
                    />
                </div>
                <div>
                    <input type="hidden" name="concept_description_2_icon" value="{{$content['content']->concept_description_2_icon}}">
                    <x-text-input
                        inputName="concept_description_2_count"
                        labelName="description 2 count"
                        placeHolder="Enter Descritpion 2 Count"
                        inputValue="{{$content['content']->concept_description_2_count}}"
                        isImportant="true"
                    />
                    <x-text-input
                        inputName="concept_description_2_description"
                        labelName="Description 2 Description"
                        placeHolder="Enter Description 2"
                        inputValue="{{$content['content']->concept_description_2_description}}"
                        isImportant="true"
                    />
                </div>
                <div>
                    <input type="hidden" name="concept_description_3_icon" value="{{$content['content']->concept_description_3_icon}}">
                    <x-text-input
                        inputName="concept_description_3_count"
                        labelName="description 3 count"
                        placeHolder="Enter Descritpion 3 Count"
                        inputValue="{{$content['content']->concept_description_3_count}}"
                        isImportant="true"
                    />
                    <x-text-input
                        inputName="concept_description_3_description"
                        labelName="Description 1 Description"
                        placeHolder="Enter Description 1"
                        inputValue="{{$content['content']->concept_description_3_description}}"
                        isImportant="true"
                    />
                </div>
                <div>
                    <input type="hidden" name="concept_description_4_icon" value="{{$content['content']->concept_description_4_icon}}">
                    <x-text-input
                        inputName="concept_description_4_count"
                        labelName="description 4 count"
                        placeHolder="Enter Descritpion 4 Count"
                        inputValue="{{$content['content']->concept_description_4_count}}"
                        isImportant="true"
                    />
                    <x-text-input
                        inputName="concept_description_4_description"
                        labelName="Description 4 Description"
                        placeHolder="Enter Description 4"
                        inputValue="{{$content['content']->concept_description_4_description}}"
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