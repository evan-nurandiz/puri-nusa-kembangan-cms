<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\Admin\ArticleHandler;
use App\Helpers\UploadHelpers;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleHandlers;
    protected $uploadHelpers;

    public function __construct(ArticleHandler $articleHandlers, UploadHelpers $uploadHelpers)
    {
        $this->articleHandlers = $articleHandlers;
        $this->uploadHelpers = $uploadHelpers;
    }

    public function AdminArticleView() {
        try {
            $articles = $this->articleHandlers->getArticle();

            return view('admin.admin-article-cms', [
                'articles' => $articles
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

    public function AdminArticleCreateView() {
        try {
            return view('admin.admin-article-edit');
        } catch (Exception $e) 
        {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail load data cause'.$e->getMessage()
            );
        }
    }

    public function AdminArticleStore(Request $request) {
        $request->validate([
            'article_title' => 'required|max:80',
            'article_created_by' => 'required|max:50',
            'article_body' => 'required',
            'article_thumbnail_input' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'article_banner_input' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'article_main_image_input' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'article_link' => 'required'
        ]);

        $data = $request->only([
            'article_title',
            'article_created_by',
            'article_body',
            'article_link'
        ]);

        if ($request->hasFile('article_thumbnail_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'article_thumbnail_input');
            $data['article_thumbnail'] = $filename;
        }

        if ($request->hasFile('article_banner_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'article_banner_input');
            $data['article_banner'] = $filename;
        }

        if ($request->hasFile('article_main_image_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'article_main_image_input');
            $data['article_main_image'] = $filename;
        }

        try {
            $this->articleHandlers->create($data);
            return redirect()->route('admin-article-cms')->with(
                'status','success',
            )->with(
                'message','success create article'
            );
        } catch (Exception $e) {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail create article'.$e->getMessage()
            );
        }
    }

    public function AdminArticleEditView($id) {
        try {
            $article = $this->articleHandlers->getArticleById($id);
            return view('admin.admin-article-edit', [
                'article' => $article
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

    public function AdminArticleUpdate(Request $request, $id) {
        $request->validate([
            'article_title' => 'required|max:80',
            'article_created_by' => 'required|max:50',
            'article_body' => 'required',
            'article_thumbnail' => 'required',
            'article_thumbnail_input' => 'file|mimes:jpeg,png,jpg|max:2048',
            'article_banner_input' => 'file|mimes:jpeg,png,jpg|max:2048',
            'article_banner' => 'required',
            'article_main_image_input' => 'file|mimes:jpeg,png,jpg|max:2048',
            'article_main_image' => 'required',
            'article_link' => 'required'
        ]);

        $data = $request->only([
            'article_title',
            'article_created_by',
            'article_body',
            'article_banner',
            'article_thumbnail',
            'article_main_image'.
            'article_link'
        ]);

        if ($request->hasFile('article_thumbnail_input')) {
            $this->uploadHelpers->deleteSingleImage($data['article_thumbnail']);
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'article_thumbnail_input');
            $data['article_thumbnail'] = $filename;
        }

        if ($request->hasFile('article_banner_input')) {
            $this->uploadHelpers->deleteSingleImage($data['article_banner']);
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'article_banner_input');
            $data['article_banner'] = $filename;
        }

        if ($request->hasFile('article_main_image_input')) {
            $this->uploadHelpers->deleteSingleImage($data['article_main_image']);
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'article_main_image_input');
            $data['article_main_image'] = $filename;
        }

        try {
            $this->articleHandlers->update($id, $data);
            return redirect()->route('admin-article-cms')->with(
                'status','success',
            )->with(
                'message','success update article'
            );
        } catch (Exception $e) {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail update article cause: '.$e->getMessage()
            );
        }
    }

    public function AdminArticleDelete($id) {
        $article = $this->articleHandlers->getArticleById($id);
        try {
            $this->articleHandlers->delete($id);
            $this->uploadHelpers->deleteMultipleImage([$article->article_thumbnail, $article->article_banner, $article->article_main_image]);
            return redirect()->back()->with(
                'status','success',
            )->with(
                'message','success delete article'
            );
        } catch (Exception $e) {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail update article'.$e
            );
        }
    }
}
