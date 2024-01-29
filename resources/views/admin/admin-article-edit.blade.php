@extends('layout.admin-cms-layout')

@section('cms-title')
    @if(isset($article))
        Tambah Artikel
    @else
        Edit Artikel
    @endif
@endsection
@section('content')
<div class="mt-[22px]">
    <form action="{{
        isset($article) ? route('admin-article-update-cms', [
            'id' => $article->id    
        ]) : route('admin-article-store-cms')
    }}" enctype="multipart/form-data" 
    method="POST">
        @csrf
        @if(isset($article))
            @method('PATCH')
        @endif
        <div class="form-container vertical">
            <div class="grid grid-cols-3 gap-[32px]">
                <div class="col-span-2">
                    <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Detail Info</p>
                    <x-text-input
                        inputName="article_title"
                        labelName="Title"
                        placeHolder="Enter Title"
                        inputValue="{{ isset($article) ? $article->article_title : '' }}"
                        isImportant="true"
                    />
                    <div class="grid grid-cols-2 gap-[36px]">
                        <x-text-input
                            inputName="article_link"
                            labelName="Link"
                            placeHolder="Enter Article Link"
                            inputValue="{{ isset($article) ? $article->article_link : '' }}"
                            isImportant="true"
                        />
                        <x-text-input
                            inputName="article_created_by"
                            labelName="Created By"
                            placeHolder="Enter Created By"
                            inputValue="{{ isset($article) ? $article->article_created_by : '' }}"
                            isImportant="true"
                        />
                    </div>
                    <div class="mb-4">
                        <label for="large-input" class="mb-2 text-[14px] text-[#8A898E] font-medium">Body Text<span class="text-red-500"> *</span></label>
                        <div class="mt-2">
                            <textarea class="ckeditor form-control mt-[10px]" name="article_body">{{ isset($article) ? $article->article_body : ''}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="mb-[32px]">
                        <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Image</p>
                        <x-image-input-single 
                            inputName="article_thumbnail_input" 
                            labelName=""
                            previewId="article_thumbnail_preview"
                            inputId="article_thumbnail_input"
                            filenameLabel="article_thumbnail_file_name"
                            fileImagePreview="{{ isset($article) ? $article->article_thumbnail : '' }}"
                            fileDefaultValue="{{ isset($article) ? 'article_thumbnail' : '' }}"
                            formatInfo="PNG. JPG (Recomended. 1920X720). max: 2MB."
                        />
                    </div>
                    <div class="mb-[32px]">
                        <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Image-Banner</p>
                        <x-image-input-single 
                            inputName="article_banner_input" 
                            labelName=""
                            previewId="article_banner_preview"
                            inputId="article_banner_input"
                            filenameLabel="article_banner_file_name"
                            fileImagePreview="{{ isset($article) ? $article->article_banner : '' }}"
                            fileDefaultValue="{{ isset($article) ? 'article_banner' : '' }}"
                            formatInfo="PNG. JPG (Recomended. 1920X720). max: 2MB."
                        />
                    </div>
                    <div>
                        <p class="text-[20px] text-[#8A898E] font-bold leading-[28px] mb-[32px]">Image-Body</p>
                        <x-image-input-single 
                            inputName="article_main_image_input" 
                            labelName=""
                            previewId="article_main_image_preview"
                            inputId="article_main_image_input"
                            filenameLabel="article_main_image_file_name"
                            fileImagePreview="{{ isset($article) ? $article->article_main_image : '' }}"
                            fileDefaultValue="{{ isset($article) ? 'article_main_image' : '' }}"
                            formatInfo="PNG. JPG (Recomended. 1920X720). max: 2MB."
                        />
                    </div>
                </div>
            </div>
            <div class="form-item vertical mt-[64px]">
                <div class="flex justify-end">
                    <a href="{{route('admin-banner-cms')}}">
                        <button class="btn bg-[#FFF7ED] text-[#E36004] mr-2 text-[16px] font-bold" type="button">Batal</button>
                    </a>
                    <button class="btn bg-[#11B980] text-[#FFFFFF] text-[16px] font-bold" type="submit">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection('content')

@section('script')
<script src="{{url('/js/single-input-image-script.js')}}"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endsection('script')