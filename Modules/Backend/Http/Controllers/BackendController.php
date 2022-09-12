<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BackendController extends BaseController
{
   public function booking()
   {
    return view('backend::layouts.booking');
   }
}
