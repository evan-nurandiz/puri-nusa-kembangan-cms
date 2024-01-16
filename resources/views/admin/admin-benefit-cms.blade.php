@extends('layout.admin-cms-layout')

@section('content')
<div>
    <form action="{{route('admin-benefit-cms-update')}}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        @method('PATCH')
        <div class="form-container vertical">
            <div class="mb-4">
                <x-text-input
                    inputName="benefit_small_title"
                    labelName="Small Title"
                    placeHolder="Enter Small Title"
                    inputValue="{!!$content['content']->benefit_small_title!!}"
                    isImportant="true"
                />
                <x-text-input
                    inputName="benefit_title"
                    labelName="Big Title"
                    placeHolder="Enter Big Title"
                    inputValue="{!!$content['content']->benefit_title!!}"
                    isImportant="true"
                />
                <x-text-area-input
                    inputName="benefit_description"
                    labelName="Description"
                    placeHolder="Enter Description"
                    inputValue="{!!$content['content']->benefit_description!!}"
                    isImportant="true"
                />
                <x-text-input
                    inputName="benefit_vidio_youtube_url"
                    labelName="Youtube Vidio URL"
                    placeHolder="Enter Youtube Vidio URL"
                    inputValue="{!!$content['content']->benefit_vidio_youtube_url!!}"
                    isImportant="true"
                />
                <div class="grid grid-cols-2 gap-4">
                    <x-text-input
                        inputName="benefit_total_unit"
                        labelName="Total Unit"
                        placeHolder="Enter Total Unit"
                        inputValue="{!!$content['content']->benefit_total_unit!!}"
                        isImportant="true"
                    />
                    <x-text-input
                        inputName="benefit_total_area"
                        labelName="Total Area"
                        placeHolder="Enter Total Area"
                        inputValue="{!!$content['content']->benefit_total_area!!}"
                        isImportant="true"
                    />
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <x-text-input
                            inputName="benefit_1_title"
                            labelName="Benefit 1 Title"
                            placeHolder="Enter Benefit 1 Title"
                            inputValue="{{$content['content']->benefit_1_title}}"
                            isImportant="true"
                        />
                        <x-text-area-input
                            inputName="benefit_1_description"
                            labelName="Benefit 1 Description"
                            placeHolder="Enter Benefit 1 Description"
                            inputValue="{!!$content['content']->benefit_1_description!!}"
                            isImportant="true"
                        />
                    </div>
                    <div class="col-span-1">
                        <x-text-input
                            inputName="benefit_2_title"
                            labelName="Benefit 2 Title"
                            placeHolder="Enter Benefit 2 Title"
                            inputValue="{{$content['content']->benefit_2_title}}"
                            isImportant="true"
                        />
                        <x-text-area-input
                            inputName="benefit_2_description"
                            labelName="Benefit 2 Description"
                            placeHolder="Enter Benefit 2 Description"
                            inputValue="{!!$content['content']->benefit_2_description!!}"
                            isImportant="true"
                        />
                    </div>
                    <div class="col-span-1">
                        <x-text-input
                            inputName="benefit_3_title"
                            labelName="Benefit 3 Title"
                            placeHolder="Enter Benefit 3 Title"
                            inputValue="{{$content['content']->benefit_3_title}}"
                            isImportant="true"
                        />
                        <x-text-area-input
                            inputName="benefit_3_description"
                            labelName="Benefit 3 Description"
                            placeHolder="Enter Benefit 3 Description"
                            inputValue="{!!$content['content']->benefit_3_description!!}"
                            isImportant="true"
                        />
                    </div>
                    <div class="col-span-1">
                        <x-text-input
                            inputName="benefit_4_title"
                            labelName="Benefit 4 Title"
                            placeHolder="Enter Benefit 4 Title"
                            inputValue="{{$content['content']->benefit_4_title}}"
                            isImportant="true"
                        />
                        <x-text-area-input
                            inputName="benefit_4_description"
                            labelName="Benefit 4 Description"
                            placeHolder="Enter Benefit 4 Description"
                            inputValue="{!!$content['content']->benefit_4_description!!}"
                            isImportant="true"
                        />
                    </div>
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