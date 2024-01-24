<?php

namespace App\Http\Controllers\Public;

use App\Handlers\Admin\BannerHandler;
use App\Handlers\Admin\CmsHandler;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    protected $cmsHandlers;
    protected $bannerHandlers;

    public function __construct(CmsHandler $cmsHandlers, BannerHandler $bannerHandlers)
    {
        $this->cmsHandlers = $cmsHandlers;
        $this->bannerHandlers = $bannerHandlers;
    }

    public function Home() {
        $general = $this->cmsHandlers->getContentBySection('general');
        $concept = $this->cmsHandlers->getContentBySection('concept');
        $benefit = $this->cmsHandlers->getContentBySection('benefit');
        $houseType = $this->cmsHandlers->getContentBySection('houseType');
        $banners = $this->bannerHandlers->getBanner();
        $general['content'] = json_decode($general['content']);
        $concept['content'] = json_decode($concept['content']);
        $benefit['content'] = json_decode($benefit['content']);
        $houseType['content'] = json_decode($houseType['content']);
        return view('public.home', [
            'general' => $general,
            'banners' => $banners,
            'concept' => $concept,
            'benefit' => $benefit,
            'houseType' => $houseType
        ]);
    }
}
