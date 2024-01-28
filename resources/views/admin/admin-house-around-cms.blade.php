@extends('layout.admin-cms-layout')

@section('cms-title')
    Sekeliling
@endsection

@section('style')
<link
    href="https://unpkg.com/@yaireo/tagify/dist/tagify.css"
    rel="stylesheet"
    type="text/css"
/>
@endsection

@section('content')
<div>
    <form action="{{route('admin-around-house-cms-update')}}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        @method('PATCH')
        <div class="form-container vertical">
            <div class="mb-4">
                <div class="grid grid-cols-3 gap-[25px] mt-[22px]">
                    <div class="col-span-2">
                        <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Detail Info</p>
                        <div class="w-full mb-[17px]">
                            <label for="Tags" class="block mb-2 text-sm text-gray-600">Shopping <span class="text-red-500"> *</span></label>
                            <input
                                id="tag-input"
                                type="text"
                                class="w-full px-4 py-6 text-sm border border-gray-300 outline-none bg-white rounded-lg flex gap-[10px]"
                                name="shopping_list"
                                value="{{$content['content']->shopping_list}}"
                            />
                            <p class="mt-[7px] text-[#E11D46] text-[12px]">Max 10 facilities</p>
                        </div>
                        <div class="w-full mb-[17px]">
                            <label for="Tags" class="block mb-2 text-sm text-gray-600">Education <span class="text-red-500"> *</span></label>
                            <input
                                id="tag-input"
                                type="text"
                                class="w-full px-4 py-6 text-sm border border-gray-300 outline-none bg-white rounded-lg flex gap-[10px]"
                                name="school_list"
                                value="{{$content['content']->school_list}}"
                            />
                            <p class="mt-[7px] text-[#E11D46] text-[12px]">Max 10 facilities</p>
                        </div>
                        <div class="w-full mb-[17px]">
                            <label for="Tags" class="block mb-2 text-sm text-gray-600">Hospital <span class="text-red-500"> *</span></label>
                            <input
                                id="tag-input"
                                type="text"
                                class="w-full px-4 py-6 text-sm border border-gray-300 outline-none bg-white rounded-lg flex gap-[10px]"
                                name="hospital_list"
                                value="{{$content['content']->hospital_list}}"
                            />
                            <p class="mt-[7px] text-[#E11D46] text-[12px]">Max 10 facilities</p>
                        </div>
                        <div class="w-full">
                            <label for="Tags" class="block mb-2 text-sm text-gray-600">Tol Access <span class="text-red-500"> *</span></label>
                            <input
                                id="tag-input"
                                type="text"
                                class="w-full px-4 py-6 text-sm border border-gray-300 outline-none bg-white rounded-lg flex gap-[10px]"
                                name="express_way_list"
                                value="{{$content['content']->express_way_list}}"
                            />
                            <p class="mt-[7px] text-[#E11D46] text-[12px]">Max 10 facilities</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Image</p>
                        <x-image-input-single 
                            inputName="around_house_image_input" 
                            labelName=""
                            previewId="around_house_image_preview"
                            inputId="around_house_image_input"
                            filenameLabel="around_house_image_file_name"
                            fileImagePreview="{{ isset($content) ? $content['content']->around_house_image : '' }}"
                            fileDefaultValue="{{ isset($content) ? 'around_house_image' : '' }}"
                            formatInfo="PNG. JPG (Recomended. 770X520). max: 2MB."
                        />
                    </div>
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
<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<script>
    function tagTemplate(tagData) {
        return `
            <tag title="${tagData.value}"
                contenteditable='false'
                spellcheck='false'
                tabIndex="-1"
                class="flex items-center px-[16px] py-[6px] bg-[#DBD9D7] cursor-pointer gap-[10px] rounded-[16px]"
                ${this.getAttributes(tagData)}>
                <x title='' class='tagify__tag__removeBtn w-[20px] h-[20px]' role='button' aria-label='remove tag'></x>
                <div class="d-flex align-items-center">
                    <span class='text-[12px] font-medium text-[#344643]'>${tagData.value}</span>
                </div>
            </tag>
        `
    }

    // The DOM element you wish to replace with Tagify
    var inputs = document.querySelectorAll('#tag-input');
    inputs.forEach((input) => {
        // initialize Tagify on the above input node reference
        new Tagify(input, {
            maxTags: 10,
            templates: {
                tag: tagTemplate
            }
        });
    })
</script>
@endsection('script')