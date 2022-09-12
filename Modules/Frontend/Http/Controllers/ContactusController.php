<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Contact;

class ContactusController extends BaseController
{
    public function contact()
    {
        return view('layouts.page.contactus');
    }
   
    public function contactus()
    {
        return view ('layouts.page.contactus');
    }
    public function store(Request $request)
    {
        $data = new Contact();
        $data->name = $request->name ;
        $data->email = $request->email ;
        $data->message = $request->message ;
        $data->save();
        return redirect()->back();
    }
}
