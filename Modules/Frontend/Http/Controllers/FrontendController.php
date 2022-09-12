<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontendController extends BaseController
{
    public function index()
    {
        return view('layouts.index');
    }
    public function booking()
    {
        return view('layouts.page.booking');
    }
    public function menu()
    {
        return view('layouts.page.menu');
    }
    public function aboutus()
    {
        return view('layouts.page.aboutus');
    }

}
