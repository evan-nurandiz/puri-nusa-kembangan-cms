<div class="form-item vertical">
    <label class="form-label mb-2">{{$labelName}} 
        @if($isImportant === 'true')
        <span class="text-red-500"> *</span>
        @endif
    </label>
    <div class="mb-2">
        <input class="input" type="text" name="{{$inputName}}" placeholder="{{$placeHolder}}" value="{{ isset($inputValue) ? $inputValue : ''}}" >
    </div>
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
</div>