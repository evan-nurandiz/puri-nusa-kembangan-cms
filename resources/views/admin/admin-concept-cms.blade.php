@extends('layout.admin-cms-layout')

@section('cms-title')
    Concept
@endsection

@section('content')
<div>
    <form action="{{route('admin-concept-cms-update')}}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        @method('PATCH')
        <input type="hidden" name="concept_description_1_icon" value="{{$content['content']->concept_description_1_icon}}">
        <input type="hidden" name="concept_description_2_icon" value="{{$content['content']->concept_description_2_icon}}">
        <input type="hidden" name="concept_description_3_icon" value="{{$content['content']->concept_description_3_icon}}">
        <input type="hidden" name="concept_description_4_icon" value="{{$content['content']->concept_description_4_icon}}">
        <div class="form-container vertical">
            <div class="grid grid-cols-3 gap-[32px]">
                <div class="col-span-2">
                    <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Detail Concept</p>
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
                    <div class="grid grid-cols-2 gap-4">
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
                        <div class="col-span-1 -mt-4">
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
                        <div class="col-span-1">
                                <x-text-input
                                inputName="concept_description_1_count"
                                labelName="Description 1 count"
                                placeHolder="Enter Descritpion 1 Count"
                                inputValue="{{$content['content']->concept_description_1_count}}"
                                isImportant="true"
                            />
                        </div>
                        <div class="col-span-1">
                            <x-text-input
                                inputName="concept_description_1_description"
                                labelName="Description 1 Description"
                                placeHolder="Enter Description 1"
                                inputValue="{{$content['content']->concept_description_1_description}}"
                                isImportant="true"
                            />
                        </div>
                        <div class="col-span-1 -mt-4">
                            <x-text-input
                                inputName="concept_description_2_count"
                                labelName="Description 2 count"
                                placeHolder="Enter Descritpion 2 Count"
                                inputValue="{{$content['content']->concept_description_2_count}}"
                                isImportant="true"
                            />
                        </div>
                        <div class="col-span-1 -mt-4">
                            <x-text-input
                                inputName="concept_description_2_description"
                                labelName="Description 2 Description"
                                placeHolder="Enter Description 2"
                                inputValue="{{$content['content']->concept_description_2_description}}"
                                isImportant="true"
                            />
                        </div>
                        <div class="col-span-1 -mt-4">
                            <x-text-input
                                inputName="concept_description_3_count"
                                labelName="Description 3 count"
                                placeHolder="Enter Descritpion 3 Count"
                                inputValue="{{$content['content']->concept_description_3_count}}"
                                isImportant="true"
                            />
                        </div>
                        <div class="col-span-1 -mt-4">
                            <x-text-input
                                inputName="concept_description_3_description"
                                labelName="Description 1 Description"
                                placeHolder="Enter Description 1"
                                inputValue="{{$content['content']->concept_description_3_description}}"
                                isImportant="true"
                            />
                        </div>
                        <div class="col-span-1">
                            <x-text-input
                                inputName="concept_description_4_count"
                                labelName="Description 4 count"
                                placeHolder="Enter Descritpion 4 Count"
                                inputValue="{{$content['content']->concept_description_4_count}}"
                                isImportant="true"
                            />
                        </div>
                        <div class="col-span-1">
                            <x-text-input
                                inputName="concept_description_4_description"
                                labelName="Description 4 Description"
                                placeHolder="Enter Description 4"
                                inputValue="{{$content['content']->concept_description_4_description}}"
                                isImportant="true"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div>
                        <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Concept Small Image (276 × 348 px)</p>
                        <x-image-input-single 
                            inputName="concept_small_image_input" 
                            labelName=""
                            previewId="concept_small_image_preview"
                            inputId="concept_small_image_input"
                            filenameLabel="concept_small_image_file_name"
                            fileImagePreview="{{$content['content']->concept_small_image}}"
                            fileDefaultValue="concept_small_image"
                        />
                    </div>
                    <div class="mt-[32px]">
                        <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Concept Big Image (470 × 689 px)</p>
                        <x-image-input-single 
                            inputName="concept_big_image_input" 
                            labelName=""
                            previewId="concept_big_image_preview"
                            inputId="concept_big_image_input"
                            filenameLabel="concept_big_image_file_name"
                            fileImagePreview="{{$content['content']->concept_big_image}}"
                            fileDefaultValue="concept_big_image"
                        />
                    </div>
                </div>
            </div>
            <div class="form-item vertical mt-[48px]">
                <div class="flex justify-end">
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