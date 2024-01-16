<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\Admin\BannerHandler;
use App\Helpers\UploadHelpers;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    protected $bannerHandlers;
    protected $uploadHelpers;

    public function __construct(BannerHandler $bannerHandlers, UploadHelpers $uploadHelpers)
    {
        $this->bannerHandlers = $bannerHandlers;
        $this->uploadHelpers = $uploadHelpers;
    }

    public function AdminBannerView() {
        $banners = $this->bannerHandlers->getBanner();
        return view('admin.admin-banner-cms', [
            'banners' => $banners
        ]);
    }

    public function AdminBannerCreateView() {
        return view('admin.admin-banner-create-cms');
    }

    public function AdminBannerStore(Request $request) {
        $request->validate([
            'title' => 'required|max:50',
            'thumbnail_input' => 'file|mimes:jpeg,png,jpg|max:2048',
            'link' => 'max:50'
        ]);

        $data = $request->only([
            'title',
            'link'
        ]);

        if ($request->hasFile('thumbnail_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'thumbnail_input');
            $data['thumbnail'] = $filename;
        }

        try {
            $this->bannerHandlers->create($data);
            return redirect()->route('admin-banner-cms')->with(
                'status','success',
            )->with(
                'message','success create banner'
            );
        } catch (Exception $e) {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail update banner'.$e->getMessage()
            );
        }
    }

    public function AdminBannerEditView($id) {
        $banner = $this->bannerHandlers->getBannerById($id);
        return view('admin.admin-banner-edit-cms', [
            'banner' => $banner
        ]);
    }

    public function AdminBannerUpdate(Request $request, $id) {
        $request->validate([
            'title' => 'required|max:50',
            'thumbnail' => 'required',
            'thumbnail_input' => 'file|mimes:jpeg,png,jpg|max:2048',
            'link' => 'max:50'
        ]);

        $data = $request->only([
            'title',
            'thumbnail',
            'link'
        ]);

        if ($request->hasFile('thumbnail_input')) {
            $request->validate([
                'thumbnail_input' => 'file|mimes:jpeg,png,jpg|max:2048',
            ]);
            $this->uploadHelpers->deleteSingleImage($data['thumbnail']);
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'thumbnail_input');
            $data['thumbnail'] = $filename;
        }

        try {
            $this->bannerHandlers->update($id, $data);
            return redirect()->route('admin-banner-cms')->with(
                'status','success',
            )->with(
                'message','success create banner'
            );
        } catch (Exception $e) {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail update banner cause: '.$e->getMessage()
            );
        }
    }

    public function AdminBannerDelete($id) {
        $banner = $this->bannerHandlers->getBannerById($id);
        try {
            $this->bannerHandlers->delete($id);
            $this->uploadHelpers->deleteSingleImage($banner->thumbnail);
            return redirect()->back()->with(
                'status','success',
            )->with(
                'message','success delete banner'
            );
        } catch (Exception $e) {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail update banner'.$e
            );
        }
    }
}
