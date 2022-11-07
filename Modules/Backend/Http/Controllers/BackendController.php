<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Booking;

class BackendController extends BaseController
{
   public function booking()
   {
      $data = Booking:: all();
    return view('backend::layouts.booking', compact('data'));
   }
   public function delete($id)
   {
       $data = Booking::find($id);
       $data->delete();
       return redirect()->back();
   }
}
