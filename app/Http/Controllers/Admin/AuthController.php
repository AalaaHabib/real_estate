<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
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
        //dd(sha1($request->password));
        $admin=Admin::where(['email'=>$request->email , 'password'=> sha1($request->password) ])->first();
        
        if(null!=$admin){ 
            \Auth::guard('admin')->loginUsingId($admin->id);
            //dd($admin->id);
            /*$x= \Auth::guard('admin')->loginUsingId($admin->id); 
            dd($x);*/
            if(\Auth::guard('admin')->check()) 
                return redirect(route('admin.index'));
            else 
                dd('fail');
        }
        else
        return back();  
    }

    function logout(){
        auth()->logout();
        return redirect(route('admin.loginview'));
    }
}
