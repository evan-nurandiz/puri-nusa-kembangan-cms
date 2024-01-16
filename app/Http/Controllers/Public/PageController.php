<?php

namespace App\Http\Controllers\Public;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function Home() {
        return view('public.home');
    }
}
