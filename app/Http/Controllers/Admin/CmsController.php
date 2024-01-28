<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Handlers\Admin\CmsHandler;
use App\Helpers\GeneralHelpers;
use App\Helpers\UploadHelpers;
use Exception;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    protected $cmsHandlers;
    protected $uploadHelpers;
    protected $generalHelper;

    public function __construct(CmsHandler $cmsHandlers, UploadHelpers $uploadHelpers, GeneralHelpers $generalHelper)
    {
        $this->cmsHandlers = $cmsHandlers;
        $this->uploadHelpers = $uploadHelpers;
        $this->generalHelper = $generalHelper;
    }

    public function AdminConceptView() {
        try {
            $content = $this->cmsHandlers->getContentBySection('concept');
            $content['content'] = json_decode($content['content']);

            return view('admin.admin-concept-cms', [
                'content' => $content
            ]);
        } catch (Exception $e) 
        {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail load data cause'.$e->getMessage()
            );
        }
    }

    public function AdminConceptUpdate(Request $request) {
        $request->validate([
            'concept_small_title' => 'required|max:50',
            'concept_title' => 'required|max:50',
            'concept_description' => 'required|max:300',
            'concept_usp_1_description' => 'required|max:50',
            'concept_usp_2_description' => 'required|max:50',
            'concept_usp_3_description' => 'required|max:50',
            'concept_small_image' => 'required',
            'concept_big_image' => 'required',
            'concept_small_image_input' => 'file|mimes:jpeg,png,jpg|max:2048',
            'concept_big_image_input' => 'file|mimes:jpeg,png,jpg|max:2048',
            'concept_description_1_icon' => 'required',
            'concept_description_1_count' => 'required|max:4',
            'concept_description_1_description' => 'required|max:50',
            'concept_description_2_icon' => 'required',
            'concept_description_2_count' => 'required|max:4',
            'concept_description_2_description' => 'required|max:50',
            'concept_description_3_icon' => 'required',
            'concept_description_3_count' => 'required|max:4',
            'concept_description_3_description' => 'required|max:50',
            'concept_description_4_icon' => 'required',
            'concept_description_4_count' => 'required|max:4',
            'concept_description_4_description' => 'required|max:50',
        ]);

        $data = $request->only([
            'concept_small_title',
            'concept_title',
            'concept_description',
            'concept_usp_1_description',
            'concept_usp_2_description',
            'concept_usp_3_description',
            'concept_small_image',
            'concept_big_image',
            'concept_description_1_icon',
            'concept_description_1_count',
            'concept_description_1_description',
            'concept_description_2_icon',
            'concept_description_2_count',
            'concept_description_2_description',
            'concept_description_3_icon',
            'concept_description_3_count',
            'concept_description_3_description',
            'concept_description_4_icon',
            'concept_description_4_count',
            'concept_description_4_description',
        ]);

        if ($request->hasFile('concept_small_image_input')) {
            $this->uploadHelpers->deleteSingleImage($data['concept_small_image']);
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'concept_small_image_input');
            $data['concept_small_image'] = $filename;
        }

        if ($request->hasFile('concept_big_image_input')) {
            $this->uploadHelpers->deleteSingleImage($data['concept_big_image']);
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'concept_big_image_input');
            $data['concept_big_image'] = $filename;
        }

        try {
            $this->cmsHandlers->updateContentBySection($data, 'concept');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success update concept'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail update concept' .$e->getMessage()
            );
        }
    }

    public function AdminBenefitView() {
        try {
            $content = $this->cmsHandlers->getContentBySection('benefit');
            $content['content'] = json_decode($content['content']);

            return view('admin.admin-benefit-cms', [
                'content' => $content
            ]);
        } catch (Exception $e) 
        {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail load data cause'.$e->getMessage()
            );
        }
    }

    public function AdminBenefitUpdate(Request $request) {
        $request->validate([
            'benefit_small_title' => 'required|max:50',
            'benefit_title' => 'required|max:50',
            'benefit_description' => 'required|max:300',
            'benefit_vidio_youtube_url' => 'required|max:50',
            'benefit_total_unit' => 'required|max:50',
            'benefit_total_area' => 'required|max:50',
            'benefit_1_title' => 'required|max:50',
            'benefit_1_description' => 'required|max:100',
            'benefit_2_title' => 'required|max:50',
            'benefit_2_description' => 'required|max:100',
            'benefit_3_title' => 'required|max:50',
            'benefit_3_description' => 'required|max:100',
            'benefit_4_title' => 'required|max:50',
            'benefit_4_description' => 'required|max:100',
        ]);

        $data = $request->only([
            'benefit_small_title',
            'benefit_title',
            'benefit_description',
            'benefit_vidio_youtube_url',
            'benefit_total_unit',
            'benefit_total_area',
            'benefit_1_title',
            'benefit_1_description',
            'benefit_2_title',
            'benefit_2_description',
            'benefit_3_title',
            'benefit_3_description',
            'benefit_4_title',
            'benefit_4_description',
        ]);

        try {
            $this->cmsHandlers->updateContentBySection($data, 'benefit');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success update benefit'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail update benefit' .$e->getMessage()
            );
        }
    }

    public function AdminHouseTypeView() {
        try {
            $content = $this->cmsHandlers->getContentBySection('houseType');
            $content['content'] = json_decode($content['content']);

            return view('admin.admin-house-type-cms', [
                'content' => $content
            ]);
        } catch (Exception $e) 
        {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail load data cause'.$e->getMessage()
            );
        }
    }

    public function AdminHouseTypeUpdate(Request $request) {
        if ($request->get('type') === 'edit-title') {
            $request->validate([
                'house_type_small_title' => 'required|max:50',
                'house_type_big_title' => 'required|max:100'
            ]);

            $content = $this->cmsHandlers->getContentBySection('houseType');
            $content['content'] = json_decode($content['content']);

            $data = $content['content'];
            $data->house_type_small_title = $request->get('house_type_small_title');
            $data->house_type_big_title = $request->get('house_type_big_title');
        }
    
        try {
            $this->cmsHandlers->updateContentBySection($data, 'houseType');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success update house type'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail update house type' .$e->getMessage()
            );
        }
    }

    public function AdminHouseTypeDelete(Request $request, $id) {
        try {
            $content = $this->cmsHandlers->getContentBySection('houseType');
            $content['content'] = json_decode($content['content']);
    
            $data = $content['content'];
    
            $this->uploadHelpers->deleteSingleImage($data->house_types_list[$id - 1]->house_type_image);
            array_splice($data->house_types_list, ($id - 1), 1);

            $this->cmsHandlers->updateContentBySection($data, 'houseType');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success delete house type'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail delete house type' .$e->getMessage()
            );
        }
    }

    public function AdminHouseTypeCreateView() {
        return view('admin.admin-house-type-edit', [
            'content' => null
        ]);
    }

    public function AdminHouseTypeEditView($id) {
        try {
            $content = $this->cmsHandlers->getContentBySection('houseType');
            $content['content'] = json_decode($content['content']);

            $content['content']->house_types_list[$id]->house_type_id = $id;

            return view('admin.admin-house-type-edit', [
                'content' => $content['content']->house_types_list[$id]
            ]);
        } catch (Exception $e) 
        {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail load data cause'.$e->getMessage()
            );
        }
    }

    public function AdminHouseTypeStore(Request $request) {
        $request->validate([
            'house_type' => 'required|max:50',
            'house_type_description' => 'required|max:100',
            'house_type_image_input' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'house_link' => 'max:50'
        ]);

        $payload = $request->only([
            'house_type',
            'house_type_description',
            'house_link'
        ]);

        $payload = $this->generalHelper->object_to_array($payload);

        if ($request->hasFile('house_type_image_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'house_type_image_input');
            $payload['house_type_image'] = $filename;
        }

        try {
            $content = $this->cmsHandlers->getContentBySection('houseType');
            $content['content'] = json_decode($content['content']);
    
            $data = $content['content'];
            array_push($data->house_types_list, $payload);

            $this->cmsHandlers->updateContentBySection($data, 'houseType');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success create house type'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail create house type' .$e->getMessage()
            );
        }
    }

    public function AdminHouseTypeUpdateList(Request $request, $id) {
        $request->validate([
            'house_type' => 'required|max:50',
            'house_type_description' => 'required|max:100',
            'house_type_image_input' => 'file|mimes:jpeg,png,jpg|max:2048',
            'house_type_image' => 'required',
            'house_link' => 'max:50'
        ]);

        $payload = $request->only([
            'house_link',
            'house_type',
            'house_type_image',
            'house_type_description'
        ]);

        if ($request->hasFile('house_type_image_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'house_type_image_input');
            $payload['house_type_image'] = $filename;
        }

        try {
            $content = $this->cmsHandlers->getContentBySection('houseType');
            $content['content'] = json_decode($content['content']);
    
            $data = $content['content'];
            $data->house_types_list[$id] = $payload;

            $this->cmsHandlers->updateContentBySection($data, 'houseType');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success create house type'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail create house type' .$e->getMessage()
            );
        }
    } 


    public function AdminGeneralView() {
        try {
            $content = $this->cmsHandlers->getContentBySection('general');
            $content['content'] = json_decode($content['content']);

            return view('admin.admin-general-cms', [
                'content' => $content
            ]);
        } catch (Exception $e) 
        {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail load data cause'.$e->getMessage()
            );
        }
    }

    public function AdminGeneralUpdate(Request $request) {
        $request->validate([
            'contact_number' => 'required|max:50',
            'working_hour' => 'required|max:100',
            'instagram_link' => 'required|max:100',
            'facebook_link' => 'max:100',
            'twitter_link' => 'max:100',
            'tiktok_pixel_script' => 'required'
        ]);

        $data = $request->only([
            'contact_number',
            'working_hour',
            'instagram_link',
            'facebook_link',
            'twitter_link',
            'tiktok_pixel_script',
            'meta_pixel_script',
            'google_tag_script',
            'custom_header_script'
        ]);
    
        try {
            $this->cmsHandlers->updateContentBySection($data, 'general');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success update general'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail update general' .$e->getMessage()
            );
        }
    }

    public function AdminHouseLayoutView() {
        try {
            $content = $this->cmsHandlers->getContentBySection('houseLayout');
            $content['content'] = json_decode($content['content']);

            return view('admin.admin-house-layout-cms', [
                'content' => $content
            ]);
        } catch (Exception $e) 
        {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail load data cause'.$e->getMessage()
            );
        }
    }

    public function AdminHouseLayoutCreateView() {
        return view('admin.admin-house-layout-edit', [
            'content' => null
        ]);
    }

    public function AdminHouseLayoutEditView($id) {
        try {
            $content = $this->cmsHandlers->getContentBySection('houseLayout');
            $content['content'] = json_decode($content['content']);

            $content['content']->house_layout_list[$id]->house_type_id = $id;

            return view('admin.admin-house-layout-edit', [
                'content' => $content['content']->house_layout_list[$id]
            ]);
        } catch (Exception $e) 
        {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail load data cause'.$e->getMessage()
            );
        }
    }

    public function AdminHouseLayoutUpdate(Request $request) {
        if ($request->get('type') === 'edit-title') {
            $request->validate([
                'house_layout_small_title' => 'required|max:50',
                'house_layout_big_title' => 'required|max:100',
                'house_layout_description' => 'required|max:400'
            ]);

            $content = $this->cmsHandlers->getContentBySection('houseLayout');
            $content['content'] = json_decode($content['content']);

            $data = $content['content'];
            $data->house_type_small_title = $request->get('house_layout_small_title');
            $data->house_type_big_title = $request->get('house_layout_big_title');
            $data->house_layout_description = $request->get('house_layout_description');
        }
    
        try {
            $this->cmsHandlers->updateContentBySection($data, 'houseLayout');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success update house layout'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail update house layout' .$e->getMessage()
            );
        }
    }
    
    public function AdminHouseLayoutDelete($id) {
        try {
            $content = $this->cmsHandlers->getContentBySection('houseLayout');
            $content['content'] = json_decode($content['content']);
    
            $data = $content['content'];
    
            $this->uploadHelpers->deleteSingleImage($data->house_layout_list[$id - 1]->house_type_image);
            array_splice($data->house_layout_list, ($id - 1), 1);

            $this->cmsHandlers->updateContentBySection($data, 'houseLayout');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success delete house layout'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail delete house layout' .$e->getMessage()
            );
        }
    }
    
    public function AdminHouseLayoutStore(Request $request) {
        $request->validate([
            'house_area_total' => 'required|max:50',
            'house_floor' => 'required|max:100',
            'house_status' => 'required|max:50',
            'house_bedroom' => 'required|max:100',
            'house_bathroom' => 'required|max:50',
            'house_carport' => 'required|max:100',
            'house_layout_image_input' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'house_link_url' => 'max:50'
        ]);

        $payload = $request->only([
            'house_area_total',
            'house_floor',
            'house_status',
            'house_bedroom',
            'house_bathroom',
            'house_carport',
            'house_link_url'
        ]);

        $payload = $this->generalHelper->object_to_array($payload);

        if ($request->hasFile('house_layout_image_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'house_layout_image_input');
            $payload['house_layout_image'] = $filename;
        }

        try {
            $content = $this->cmsHandlers->getContentBySection('houseLayout');
            $content['content'] = json_decode($content['content']);
    
            $data = $content['content'];
            array_push($data->house_layout_list, $payload);

            $this->cmsHandlers->updateContentBySection($data, 'houseLayout');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success create house type'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail create house type' .$e->getMessage()
            );
        }
    }

    public function AdminHouseLayoutUpdateList(Request $request, $id) {
        $request->validate([
            'house_area_total' => 'required|max:50',
            'house_floor' => 'required|max:100',
            'house_status' => 'required|max:50',
            'house_bedroom' => 'required|max:100',
            'house_bathroom' => 'required|max:50',
            'house_carport' => 'required|max:100',
            'house_layout_image' => 'required',
            'house_layout_image_input' => 'file|mimes:jpeg,png,jpg|max:2048',
            'house_link_url' => 'max:50'
        ]);

        $payload = $request->only([
            'house_area_total',
            'house_floor',
            'house_status',
            'house_bedroom',
            'house_bathroom',
            'house_carport',
            'house_link_url',
            'house_layout_image'
        ]);

        if ($request->hasFile('house_layout_image_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'house_layout_image_input');
            $payload['house_layout_image'] = $filename;
        }

        try {
            $content = $this->cmsHandlers->getContentBySection('houseLayout');
            $content['content'] = json_decode($content['content']);
    
            $data = $content['content'];
            $data->house_layout_list[$id] = $payload;

            $this->cmsHandlers->updateContentBySection($data, 'houseLayout');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success create house type'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail create house type' .$e->getMessage()
            );
        }
    } 

    public function AdminGalleryView() {
        try {
            $content = $this->cmsHandlers->getContentBySection('gallery');
            $content['content'] = json_decode($content['content']);

            return view('admin.admin-gallery-cms', [
                'content' => $content
            ]);
        } catch (Exception $e) 
        {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail load data cause'.$e->getMessage()
            );
        }
    }

    public function AdminGalleryStore(Request $request) {
        $request->validate([
            'gallery_image_input' => 'required|file|mimes:jpeg,png,jpg|max:2048'
        ]);

        $image = null;
        if ($request->hasFile('gallery_image_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'gallery_image_input');
            $image = $filename;
        }

        try {
            $content = $this->cmsHandlers->getContentBySection('gallery');
            $content['content'] = json_decode($content['content']);
    
            $data = $content['content'];
            array_push($data->gallery_list, $image);

            $this->cmsHandlers->updateContentBySection($data, 'gallery');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success Create gallery'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail Create gallery' .$e->getMessage()
            );
        }
    }

    public function AdminGalleryUpdate(Request $request) {
        $request->validate([
            'gallery_image_id' => 'required',
            'gallery_image_input' => 'required|file|mimes:jpeg,png,jpg|max:2048'
        ]);

        $payload = $request->only([
            'gallery_image_id'
        ]);

        if ($request->hasFile('gallery_image_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'gallery_image_input');
            $payload['image'] = $filename;
        }

        try {
            $content = $this->cmsHandlers->getContentBySection('gallery');
            $content['content'] = json_decode($content['content']);
    
            $data = $content['content'];
            $data->gallery_list[$payload['gallery_image_id']] = $payload['image'];

            $this->cmsHandlers->updateContentBySection($data, 'gallery');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success edit gallery'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail edit gallery' .$e->getMessage()
            );
        }
    }

    public function AdminGalleryDelete($id) {
        try {
            $content = $this->cmsHandlers->getContentBySection('gallery');
            $content['content'] = json_decode($content['content']);
    
            $data = $content['content'];
    
            $this->uploadHelpers->deleteSingleImage($data->gallery_list[$id - 1]);
            array_splice($data->gallery_list, ($id - 1), 1);

            $this->cmsHandlers->updateContentBySection($data, 'gallery');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success delete house layout'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail delete house layout' .$e->getMessage()
            );
        }
    }
}
