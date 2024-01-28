<section class="w-full mx-auto items-center">
    <label class="form-label mb-2">{{$labelName}}</label>
    <div class="overflow-hidden items-center">
        <div id="{{$previewId}}" class="bg-white h-72 {{ !empty($fileImagePreview) ? '' : 'p-14 border-dashed border-2 border-gray-400' }}
        rounded-lg items-center mx-auto text-center cursor-pointer">
            @if(!empty($fileImagePreview))
                <label for="{{$inputId}}" class="cursor-pointer">
                <div class="flex items-center h-full relative">
                    <div class="backdrop-opacity-30 bg-[#0000004D] absolute w-full h-72 rounded-lg flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none" class="mx-auto my-auto">
                            <g opacity="0.5">
                                <path d="M24.2953 21.5156C24.2602 21.4708 24.2154 21.4345 24.1642 21.4096C24.1131 21.3847 24.0569 21.3717 24 21.3717C23.9431 21.3717 23.8869 21.3847 23.8357 21.4096C23.7846 21.4345 23.7398 21.4708 23.7047 21.5156L18.4547 28.1578C18.4114 28.2131 18.3845 28.2794 18.3772 28.3492C18.3698 28.419 18.3823 28.4895 18.4131 28.5526C18.4439 28.6157 18.4918 28.6688 18.5514 28.7059C18.611 28.743 18.6798 28.7626 18.75 28.7625H22.2141V40.125C22.2141 40.3312 22.3828 40.5 22.589 40.5H25.4016C25.6078 40.5 25.7765 40.3312 25.7765 40.125V28.7672H29.25C29.564 28.7672 29.7375 28.4062 29.5453 28.1625L24.2953 21.5156Z" fill="white"/>
                                <path d="M38.0344 17.1891C35.8875 11.5266 30.4172 7.5 24.0094 7.5C17.6016 7.5 12.1313 11.5219 9.98438 17.1844C5.96719 18.2391 3 21.9 3 26.25C3 31.4297 7.19531 35.625 12.3703 35.625H14.25C14.4563 35.625 14.625 35.4562 14.625 35.25V32.4375C14.625 32.2313 14.4563 32.0625 14.25 32.0625H12.3703C10.7906 32.0625 9.30469 31.4344 8.19844 30.2953C7.09687 29.1609 6.51094 27.6328 6.5625 26.0484C6.60469 24.8109 7.02656 23.6484 7.79062 22.6688C8.57344 21.6703 9.67031 20.9437 10.8891 20.6203L12.6656 20.1562L13.3172 18.4406C13.7203 17.3719 14.2828 16.3734 14.9906 15.4688C15.6894 14.5721 16.5171 13.7838 17.4469 13.1297C19.3734 11.775 21.6422 11.0578 24.0094 11.0578C26.3766 11.0578 28.6453 11.775 30.5719 13.1297C31.5047 13.7859 32.3297 14.5734 33.0281 15.4688C33.7359 16.3734 34.2984 17.3766 34.7016 18.4406L35.3484 20.1516L37.1203 20.6203C39.6609 21.3047 41.4375 23.6156 41.4375 26.25C41.4375 27.8016 40.8328 29.2641 39.7359 30.3609C39.198 30.902 38.5581 31.331 37.8533 31.6231C37.1484 31.9151 36.3926 32.0645 35.6297 32.0625H33.75C33.5438 32.0625 33.375 32.2313 33.375 32.4375V35.25C33.375 35.4562 33.5438 35.625 33.75 35.625H35.6297C40.8047 35.625 45 31.4297 45 26.25C45 21.9047 42.0422 18.2484 38.0344 17.1891Z" fill="white"/>
                            </g>
                        </svg>
                    </div>
                    <img src="{{asset('storage/images/'.$fileImagePreview)}}" class="max-h-72 rounded-lg mx-auto bg-contain" alt="Image preview" />
                </div>
            @else
                <label for="{{$inputId}}" class="cursor-pointer">
                <img src="{{url('/assets/icon/upload.svg')}}" alt="" class="mx-auto">
                <p class="font-bold text-[16px] text-[#32343B] md:px-6">Drop your image here, or <span class="text-[#0DA5E9]">browse</span></p>
                <p class="font-normal text-[14px] text-[#8A898E] md:px-6">Support: jpeg, png</p>
                <span id="{{$filenameLabel}}" class="text-gray-500 bg-gray-200 z-50"></span>
                </label>
            @endif
        </div>
    </div>
    @if(!empty($formatInfo))
        <p class="mt-[10px] text-[12px] text-[#E11D46]">{{$formatInfo}}</p>
    @endif
    @if(!empty($fileDefaultValue))
    <input type="hidden" name="{{$fileDefaultValue}}" value="{{$fileImagePreview}}">
    @endif
    @error($inputName)
    <div class="alert alert-danger">
        <div class="alert-content">
            <span class="alert-icon">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                </svg>
            </span>
            <div>{{$message}}</div>
        </div>
    </div>
    @enderror
    <input id="{{$inputId}}" type="file" class="hidden" accept="image/*" name="{{$inputName}}"
        onchange="onChangeImage(
        event,
        {{json_encode($inputId)}},
        {{json_encode($filenameLabel)}},
        {{json_encode($previewId)}}
    )"/>
</section>