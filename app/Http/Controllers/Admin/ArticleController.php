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
}
