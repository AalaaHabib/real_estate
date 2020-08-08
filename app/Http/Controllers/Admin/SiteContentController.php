<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
class SiteContentController extends Controller
{
    //
    function index(){
        $data['setting']=Setting::first();
        return view ('Admin.setting.index');
    }
}
