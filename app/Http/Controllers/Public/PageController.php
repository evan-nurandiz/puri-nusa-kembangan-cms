<?php

namespace App\Http\Controllers\Public;

use App\Handlers\Admin\ArticleHandler;
use App\Handlers\Admin\BannerHandler;
use App\Handlers\Admin\CmsHandler;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    protected $cmsHandlers;
    protected $bannerHandlers;
    protected $articleHandlers;

    public function __construct(CmsHandler $cmsHandlers, BannerHandler $bannerHandlers, ArticleHandler $articleHandlers)
    {
        $this->cmsHandlers = $cmsHandlers;
        $this->bannerHandlers = $bannerHandlers;
        $this->articleHandlers = $articleHandlers;
    }

    public function Home() {
        $contents = $this->cmsHandlers->getAllContent();
        $webContent = [];

        foreach($contents as $content) {
            $webContent[$content->section] = $content;
            $webContent[$content->section]['content'] = json_decode($content->content);
        }
        $banners = $this->bannerHandlers->getBanner();
        $articles = $this->articleHandlers->getArticleWithLimit(3);
        return view('public.home', [
            'general' => $webContent['general'],
            'banners' => $banners,
            'articles' => $articles,
            'concept' => $webContent['concept'],
            'benefit' => $webContent['benefit'],
            'houseType' => $webContent['houseType'],
            'houseLayout' => $webContent['houseLayout'],
            'aroundHouse' => $webContent['aroundHouse'],
            'galleries' => $webContent['gallery'],
            'awards' => $webContent['award']
        ]);
    }
}
