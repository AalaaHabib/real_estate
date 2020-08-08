<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
class SettingController extends Controller
{
    //
    function index(){
        $data['setting']=Setting::first();
        return view ('Admin.setting.index')->with($data);
    }
    function handle(Request $request){
        $data=$request->validate([
            'logo'=>'required|string|max:30',
            'email'=>'required|email',
            'city'=>'required|string',
            'address'=>'required|string',
            'phone'=>'required',
            'works_hour'=>'required|string',
            'fb'=>'required|string',
            'tiwitter'=>'required|string',
            'insta'=>'required|string',
            'prinst'=>'required|string',
        ]);
        Setting::find(1)->update($data);
        return back();
    }
}
