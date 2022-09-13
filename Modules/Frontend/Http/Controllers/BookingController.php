<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Booking;

class BookingController extends BaseController
{
    public function store(Request $request)
    {
        $data = new Booking();
        $data->date = $request->date ;
        $data->time = $request->time ;
        $data->people_ammount = $request->people_ammount ;
        $data->name = $request->name ;
        $data->message = $request->message ;
        
        $data->save();
        return redirect()->back();
    }
}
