<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Contact;

class ContactusController extends BaseController
{
    public function contactus()
    {
        $data = Contact:: all();
        return view('backend::layouts.contactus', compact('data'));
    }
}
