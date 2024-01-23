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
                <th>House Total Area</th>
                <th>House Floor</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($content['content']->house_layout_list as $house_layout)
            <tr>
                <td class="w-[10%]">{{$loop->iteration}}</td>
                <td class="w-[40%]">
                    <img src="{{asset('storage/images/'.$house_layout->house_layout_image)}}" alt="">
                </td>
                <td class="w-[30%]">{{$house_layout->house_area_total}}</td>
                <td class="w-[30%]">{{$house_layout->house_floor}}</td>
                <td class="w-[20%]">
                    <div class="mb-3 flex">
                        <button data-bs-toggle="modal" data-bs-target="#create-edit-house-type" class="btn bg-sky-50 dark:bg-sky-500 dark:bg-opacity-20 
                        hover:bg-sky-100 dark:hover:bg-sky-500 dark:hover:bg-opacity-30 
                        active:bg-sky-200 dark:active:bg-sky-500 dark:active:bg-opacity-40 
                        text-sky-800 dark:text-sky-50 mr-2" 
                        data-bs-id="{{$loop->iteration}}" 
                        data-bs-house-layout-image="{{$house_layout->house_layout_image}}"
                        data-bs-house-area-total="{{$house_layout->house_area_total}}" 
                        data-bs-house-floor="{{$house_layout->house_floor}}" 
                        data-bs-house-bedroom="{{$house_layout->house_bedroom}}" 
                        data-bs-house-bathroom="{{$house_layout->house_bathroom}}" 
                        data-bs-house-carport="{{$house_layout->house_carport}}" 
                        data-bs-house-status="{{$house_layout->house_status}}" 
                        id="edit-modal" onclick="editModal(event)">Edit</button>
                        <form action="{{route('admin-house-layout-cms-list-delete',[
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
<div class="modal fade" id="edit-house-type-title" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog dialog h-[520px]">
        <div class="dialog-content">
            <form action="{{route('admin-house-layout-cms-update')}}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="type" value="edit-title">
                <x-text-input
                    inputName="house_layout_small_title"
                    labelName="House Layout Small Title"
                    placeHolder="Enter House Layout Small Title"
                    inputValue="{!!$content['content']->house_layout_small_title!!}"
                    isImportant="true"
                />
                <x-text-input
                    inputName="house_layout_big_title"
                    labelName="House Layout Big Title"
                    placeHolder="Enter House Layout Small Title"
                    inputValue="{!!$content['content']->house_layout_big_title!!}"
                    isImportant="true"
                />
                <x-text-area-input
                    inputName="house_layout_description"
                    labelName="House Layout Description"
                    placeHolder="Enter House Layout Description"
                    inputValue="{!!$content['content']->house_layout_description!!}"
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
    <div class="modal-dialog dialog h-[1060px]">
        <div class="dialog-content">
            <form action="" id="form-edit-create-list" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="house_layout_id" value="">
                <x-text-input
                    inputName="house_area_total"
                    labelName="House Area Total"
                    placeHolder="Enter House Area Total"
                    inputValue=""
                    isImportant="true"
                />
                <x-text-input
                    inputName="house_floor"
                    labelName="House Floor"
                    placeHolder="Enter House Floor"
                    inputValue=""
                    isImportant="true"
                />
                <x-text-input
                    inputName="house_status"
                    labelName="House Status"
                    placeHolder="Enter House Status"
                    inputValue=""
                    isImportant="true"
                />
                <x-text-input
                    inputName="house_bedroom"
                    labelName="House Bedroom"
                    placeHolder="Enter House Bedroom"
                    inputValue=""
                    isImportant="true"
                />
                <x-text-input
                    inputName="house_bathroom"
                    labelName="House Bathroom"
                    placeHolder="Enter House Bathroom"
                    inputValue=""
                    isImportant="true"
                />
                <x-text-input
                    inputName="house_carport"
                    labelName="House Carport"
                    placeHolder="Enter House Caport"
                    inputValue=""
                    isImportant="true"
                />
                <div id="image-upload-container">
                </div>
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
@endsection



@section('script')
<script src="{{url('/js/single-input-image-script.js')}}"></script>
<script>
    const editModal = (event) => {
        const image =  event.target.getAttribute("data-bs-house-layout-image");
        document.querySelector('input[name="house_layout_id"]').value = event.target.getAttribute("data-bs-id");
        document.querySelector('input[name="house_area_total"]').value = event.target.getAttribute("data-bs-house-area-total");
        document.querySelector('input[name="house_floor"]').value = event.target.getAttribute("data-bs-house-floor");
        document.querySelector('input[name="house_bedroom"]').value = event.target.getAttribute("data-bs-house-bedroom");
        document.querySelector('input[name="house_bathroom"]').value = event.target.getAttribute("data-bs-house-bathroom");
        document.querySelector('input[name="house_carport"]').value = event.target.getAttribute("data-bs-house-carport");
        document.querySelector('input[name="house_status"]').value = event.target.getAttribute("data-bs-house-status");
        document.getElementById("image-upload-container").innerHTML = `
                <x-image-input-single 
                    inputName="house_layout_image_input" 
                    labelName="House Layout Image"
                    previewId="house_layout_image_preview"
                    inputId="house_layout_image_input"
                    filenameLabel="house_layout_image_file_name"
                    fileImagePreview="${image}"
                    fileDefaultValue=""
                />
        `
    }

    const createModal = (event) => {
        document.getElementById('form-edit-create-list').action = '{{route("admin-house-type-cms-store")}}'
        document.querySelector('input[name="house_layout_id"]').value = 0;
        document.querySelector('input[name="house_area_total"]').value = null;
        document.querySelector('input[name="house_floor"]').value = null;
        document.querySelector('input[name="house_bedroom"]').value = null;
        document.querySelector('input[name="house_bathroom"]').value = null;
        document.querySelector('input[name="house_carport"]').value = null;
        document.querySelector('input[name="house_status"]').value = null;
        document.getElementById("image-upload-container").innerHTML = `
        <x-image-input-single 
                    inputName="house_layout_image_input" 
                    labelName="House Layout Image"
                    previewId="house_layout_image_preview"
                    inputId="house_layout_image_input"
                    filenameLabel="house_layout_image_file_name"
                    fileImagePreview=""
                    fileDefaultValue=""
                />
        `
    }
</script>
@endsection('script')