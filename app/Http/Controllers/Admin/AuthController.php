<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    function loginview(){
        return view('Admin/login');
    }
    function login(Request $request){
        $data=$request->validate([
            'email'=>'required|email',
            'password'=>'required|string',
        ]);

        if(!auth()->attempt(['email'=>$data['email'],'password'=>$data['password']])){
            return back();
        }
        else{
           return redirect(route('admin.index'));
        }
    }

    function logout(){
        auth()->logout();
        return redirect(route('admin.loginview'));
    }
}
