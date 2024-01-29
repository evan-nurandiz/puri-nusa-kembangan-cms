<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Public\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'Home'])->name('home');
Route::middleware(['authMiddleware'])->group(function(){
    Route::get('/cms-login', [AuthController::class, 'LoginView'])->name('admin-login-cms');
    Route::post('/cms-login', [AuthController::class, 'loginAction'])->name('login-action');
});

Route::middleware(['verifiedAdmin'])->group(function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin-logout');
    Route::get('/admin/cms-banner', [BannerController::class, 'AdminBannerView'])->name('admin-banner-cms');
    Route::get('/admin/cms-banner/create', [BannerController::class, 'AdminBannerCreateView'])->name('admin-banner-create-cms');
    Route::post('/admin/cms-banner/create', [BannerController::class, 'AdminBannerStore'])->name('admin-banner-store-cms');
    Route::get('/admin/cms-banner/{id}/edit', [BannerController::class, 'AdminBannerEditView'])->name('admin-banner-edit-cms');
    Route::patch('/admin/cms-banner/{id}/edit', [BannerController::class, 'AdminBannerUpdate'])->name('admin-banner-update-cms');
    Route::delete('/admin/cms-banner/{id}/delete', [BannerController::class, 'AdminBannerDelete'])->name('admin-banner-delete-cms');
    Route::get('/admin/cms-concept', [CmsController::class, 'AdminConceptView'])->name('admin-concept-cms');
    Route::patch('/admin/cms-concept', [CmsController::class, 'AdminConceptUpdate'])->name('admin-concept-cms-update');
    Route::get('/admin/cms-benefit', [CmsController::class, 'AdminBenefitView'])->name('admin-benefit-cms');
    Route::patch('/admin/cms-benefit', [CmsController::class, 'AdminBenefitUpdate'])->name('admin-benefit-cms-update');
    Route::get('/admin/cms-house-type', [CmsController::class, 'AdminHouseTypeView'])->name('admin-house-type-cms');
    Route::get('/admin/cms-house-type/create', [CmsController::class, 'AdminHouseTypeCreateView'])->name('admin-house-type-cms-create');
    Route::get('/admin/cms-house-type/{id}/edit', [CmsController::class, 'AdminHouseTypeEditView'])->name('admin-house-type-cms-edit');
    Route::patch('/admin/cms-house-type', [CmsController::class, 'AdminHouseTypeUpdate'])->name('admin-house-type-cms-update');
    Route::post('/admin/cms-house-type/list', [CmsController::class, 'AdminHouseTypeStore'])->name('admin-house-type-cms-store');
    Route::patch('/admin/cms-house-type/list/{id}/update', [CmsController::class, 'AdminHouseTypeUpdateList'])->name('admin-house-type-cms-list-update');
    Route::delete('/admin/cms-house-type/list/{id}', [CmsController::class, 'AdminHouseTypeDelete'])->name('admin-house-type-cms-list-delete');
    Route::get('/admin/cms-house-layout', [CmsController::class, 'AdminHouseLayoutView'])->name('admin-house-layout-cms');
    Route::get('/admin/cms-house-layout/create', [CmsController::class, 'AdminHouseLayoutCreateView'])->name('admin-house-layout-cms-create');
    Route::get('/admin/cms-house-layout/{id}/edit', [CmsController::class, 'AdminHouseLayoutEditView'])->name('admin-house-layout-cms-edit');
    Route::patch('/admin/cms-house-layout', [CmsController::class, 'AdminHouseLayoutUpdate'])->name('admin-house-layout-cms-update');
    Route::post('/admin/cms-house-layout/list', [CmsController::class, 'AdminHouseLayoutStore'])->name('admin-house-layout-cms-store');
    Route::patch('/admin/cms-house-layout/list/{id}', [CmsController::class, 'AdminHouseLayoutUpdateList'])->name('admin-house-layout-cms-list-update');
    Route::delete('/admin/cms-house-layout/list/{id}', [CmsController::class, 'AdminHouseLayoutDelete'])->name('admin-house-layout-cms-list-delete');
    Route::get('/admin/general-cms', [CmsController::class, 'AdminGeneralView'])->name('admin-general-cms');
    Route::patch('/admin/general-cms', [CmsController::class, 'AdminGeneralUpdate'])->name('admin-general-cms-update');
    Route::get('/admin/gallery-cms', [CmsController::class, 'AdminGalleryView'])->name('admin-gallery-cms');
    Route::post('/admin/gallery-cms', [CmsController::class, 'AdminGalleryStore'])->name('admin-gallery-cms-store');
    Route::post('/admin/gallery-cms/edit', [CmsController::class, 'AdminGalleryUpdate'])->name('admin-gallery-cms-update');
    Route::delete('/admin/gallery-cms/{id}/delete', [CmsController::class, 'AdminGalleryDelete'])->name('admin-gallery-cms-delete');
    Route::get('/admin/award-cms', [CmsController::class, 'AdminAwardView'])->name('admin-award-cms');
    Route::get('/admin/award-cms/create', [CmsController::class, 'AdminAwardCreateView'])->name('admin-award-cms-create');
    Route::post('/admin/award-cms', [CmsController::class, 'AdminAwardStore'])->name('admin-award-cms-store');
    Route::get('/admin/award-cms/{id}/edit', [CmsController::class, 'AdminAwardEditView'])->name('admin-award-cms-edit');
    Route::patch('/admin/award-cms/{id}/edit', [CmsController::class, 'AdminAwardUpdate'])->name('admin-award-cms-update');
    Route::delete('/admin/award-cms/{id}/delete', [CmsController::class, 'AdminAwardDelete'])->name('admin-award-cms-delete');
    Route::get('/admin/around-house-cms', [CmsController::class, 'AdminAroundHouseView'])->name('admin-around-house-cms');
    Route::patch('/admin/around-house-cms', [CmsController::class, 'AdminAroundHouseUpdate'])->name('admin-around-house-cms-update');
    Route::get('/admin/article', [ArticleController::class, 'AdminArticleView'])->name('admin-article-cms');
    Route::get('/admin/article/create', [ArticleController::class, 'AdminArticleCreateView'])->name('admin-article-create-cms');
    Route::post('/admin/article/create', [ArticleController::class, 'AdminArticleStore'])->name('admin-article-store-cms');
    Route::get('/admin/article/{id}/edit', [ArticleController::class, 'AdminArticleEditView'])->name('admin-article-edit-cms');
    Route::patch('/admin/article/{id}/edit', [ArticleController::class, 'AdminArticleUpdate'])->name('admin-article-update-cms');
    Route::delete('/admin/article/{id}/delete', [ArticleController::class, 'AdminArticleDelete'])->name('admin-article-delete-cms');
});

