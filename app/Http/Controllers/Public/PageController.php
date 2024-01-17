<?php

namespace App\Http\Controllers\Public;

use App\Handlers\Admin\CmsHandler;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    protected $cmsHandlers;

    public function __construct(CmsHandler $cmsHandlers)
    {
        $this->cmsHandlers = $cmsHandlers;
    }

    public function Home() {
        $general = $this->cmsHandlers->getContentBySection('general');
        $general['content'] = json_decode($general['content']);
        return view('public.home', [
            'general' => $general
        ]);
    }
}
