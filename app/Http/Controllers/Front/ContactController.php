<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Setting;
use App\Subscriber;
use App\Messages;
use Illuminate\Http\Request;
class ContactController extends Controller
{

    function showContact(){
        $data['sett']=Setting::first();
        return view('Front/contact/showContact')->with($data);
    }

    function contactSubscribe(Request $request){
        $data=$request->validate([
            'email'=>'required|email',
        ]);

        Subscriber::create($data);
        return back();
    }

    function sendMessage(Request $request){
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|email',
            'title'=>'nullable|string|max:191',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'message'=>'required|string'
        ]);
        Messages::create($data);
        return back();
    }
}
