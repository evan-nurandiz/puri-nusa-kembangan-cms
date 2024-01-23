@extends('layout.admin-cms-layout')

@section('add-new-content')
<div class="flex gap-4">
    <button type="button" data-bs-toggle="modal" data-bs-target="#edit-house-type-title" class="btn btn-solid">
        Edit House Type Title
    </button>
    <button type="button" data-bs-toggle="modal" data-bs-target="#create-edit-house-type" class="btn btn-solid" id="create-modal" onclick="createModal(event)">
        Create New House Type
    </button>
</div>
@endsection

@section('content')
<div>
    <table class="table-default table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>House Type Image</th>
                <th>House Type </th>
                <th>House Type Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($content['content']->house_types_list as $house_type)
            <tr>
                <td class="w-[10%]">{{$loop->iteration}}</td>
                <td class="w-[40%]">
                    <img src="{{asset('storage/images/'.$house_type->house_type_image)}}" alt="">
                </td>
                <td class="w-[30%]">{{$house_type->house_type}}</td>
                <td class="w-[30%]">{{$house_type->house_type_description}}</td>
                <td class="w-[20%]">
                    <div class="mb-3 flex">
                        <button data-bs-toggle="modal" data-bs-target="#create-edit-house-type" class="btn bg-sky-50 dark:bg-sky-500 dark:bg-opacity-20 
                        hover:bg-sky-100 dark:hover:bg-sky-500 dark:hover:bg-opacity-30 
                        active:bg-sky-200 dark:active:bg-sky-500 dark:active:bg-opacity-40 
                        text-sky-800 dark:text-sky-50 mr-2" 
                        data-bs-id="{{$loop->iteration}}" data-bs-image="{{$house_type->house_type_image}}"
                        data-bs-house-type="{{$house_type->house_type}}" data-bs-house-type-description="{{$house_type->house_type_description}}" data-bs-house-type-link="{{$house_type->house_link}}" 
                        id="edit-modal" onclick="editModal(event)">Edit</button>
                        <form action="{{route('admin-house-type-cms-list-delete',[
                                'id' => $loop->iteration    
                            ])}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn bg-rose-50 dark:bg-rose-500 dark:bg-opacity-20 hover:bg-rose-100 dark:hover:bg-rose-500 dark:hover:bg-opacity-30 
                            active:bg-rose-200 dark:active:bg-rose-500 dark:active:bg-opacity-40 
                            text-rose-600 dark:text-rose-50 mr-2">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<div class="modal fade" id="edit-house-type-title" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog dialog h-[320px]">
        <div class="dialog-content">
            <form action="{{route('admin-house-type-cms-update')}}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="type" value="edit-title">
                <x-text-input
                    inputName="house_type_small_title"
                    labelName="House Type Small Title"
                    placeHolder="Enter House Type Small Title"
                    inputValue="{!!$content['content']->house_type_small_title!!}"
                    isImportant="true"
                />
                <x-text-input
                    inputName="house_type_big_title"
                    labelName="House Type Big Title"
                    placeHolder="Enter House Type Small Title"
                    inputValue="{!!$content['content']->house_type_big_title!!}"
                    isImportant="true"
                />
                <div class="form-item vertical"><label class="form-label"></label>
                    <div class="flex justify-end">
                        <button class="btn btn-default" type="submit">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="create-edit-house-type" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog dialog h-[720px]">
        <div class="dialog-content">
            <form action="" id="form-edit-create-list" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" id="_method" value="">
                <input type="hidden" name="house_type_id" value="">
                <x-text-input
                    inputName="house_type"
                    labelName="House Type"
                    placeHolder="Enter House Type"
                    inputValue=""
                    isImportant="true"
                />
                <x-text-input
                    inputName="house_type_description"
                    labelName="House Type Description"
                    placeHolder="Enter Big Title"
                    inputValue=""
                    isImportant="true"
                />
                <div id="image-upload-container">
                </div>
                <x-text-input
                    inputName="house_link"
                    labelName="House Type Link"
                    placeHolder="Enter House Link"
                    inputValue=""
                    isImportant=""
                />
                <div class="form-item vertical"><label class="form-label"></label>
                    <div class="flex justify-end">
                        <button class="btn btn-default" type="submit">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@section('script')
<script src="{{url('/js/single-input-image-script.js')}}"></script>
<script>
    const editModal = (event) => {
        const image =  event.target.getAttribute("data-bs-image");
        document.getElementById('form-edit-create-list').action = '{{route("admin-house-type-cms-list-update")}}'
        document.querySelector('input[name="house_type_id"]').value = event.target.getAttribute("data-bs-id");
        document.querySelector('input[name="house_type"]').value = event.target.getAttribute("data-bs-house-type");
        document.querySelector('input[name="house_type_description"]').value = event.target.getAttribute("data-bs-house-type-description");
        document.getElementById("image-upload-container").innerHTML = `
                <x-image-input-single 
                    inputName="house_type_image_input" 
                    labelName="House Type Image"
                    previewId="house_type_image_preview"
                    inputId="house_type_image_input"
                    filenameLabel="house_type_image_file_name"
                    fileImagePreview="${image}"
                />
        `
        document.querySelector('input[name="house_link"]').value = event.target.getAttribute("data-bs-house-type-link");
    }

    const createModal = (event) => {
        document.getElementById('form-edit-create-list').action = '{{route("admin-house-type-cms-store")}}'
        document.querySelector('input[name="house_type_id"]').value = 0;
        document.querySelector('input[name="house_type"]').value = null;
        document.querySelector('input[name="house_type_description"]').value = null;
        document.getElementById("image-upload-container").innerHTML = `
            <x-image-input-single 
                inputName="house_type_image_input" 
                labelName="House Type Image"
                previewId="house_type_image_preview"
                inputId="house_type_image_input"
                filenameLabel="house_type_image_file_name"
                fileImagePreview=""
            />
        `
        document.querySelector('input[name="house_link"]').value = null;
    }
</script>
@endsection('script')