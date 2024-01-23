<section class="w-full mx-auto items-center">
    <label class="form-label mb-2">{{$labelName}}</label>
    <div class="overflow-hidden items-center">
        <div id="{{$previewId}}" class="bg-white h-72 {{ !empty($fileImagePreview) ? '' : 'p-14 border-dashed border-2 border-gray-400' }}
        rounded-lg items-center mx-auto text-center cursor-pointer">
            @if(!empty($fileImagePreview))
                <label for="{{$inputId}}" class="cursor-pointer">
                <div class="flex items-center h-full">
                    <img src="{{asset('storage/images/'.$fileImagePreview)}}" class="max-h-72 rounded-lg mx-auto bg-contain" alt="Image preview" />
                </div>
            @else
                <label for="{{$inputId}}" class="cursor-pointer">
                <img src="{{url('/assets/icon/upload.svg')}}" alt="" class="mx-auto">
                <p class="font-bold text-[16px] text-[#32343B] md:px-6">Drop your image here, or <span class="text-[#0DA5E9]">browse</span></p>
                <p class="font-normal text-[14px] text-[#8A898E] md:px-6">Support: jpeg, png Max: 2MB</p>
                <span id="{{$filenameLabel}}" class="text-gray-500 bg-gray-200 z-50"></span>
                </label>
            @endif
        </div>
    </div>
    @if(!empty($fileDefaultValue))
    <input type="hidden" name="{{$fileDefaultValue}}" value="{{$fileImagePreview}}">
    @endif
    <input id="{{$inputId}}" type="file" class="hidden" accept="image/*" name="{{$inputName}}"
        onchange="onChangeImage(
        event,
        {{json_encode($inputId)}},
        {{json_encode($filenameLabel)}},
        {{json_encode($previewId)}}
    )"/>
</section>