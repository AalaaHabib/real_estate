<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
     //register a new user
     function register(){
        return view('Front.User.register');
    }
    function handleRegister(Request $request){
        $data=$request->validate([
            'email'=>'required|email',
            'password'=>'required|string',
        ]);
        $user=new User();
        $user->UserName=$request->UserName;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->is_Agent=$request->is_Agent;
        $user->save();
        return redirect(route('user.login'));
    }
    //login user 
    function login(){
        return view('Front.User.login');
    }
    function handleLogin(Request $request){
        $data=$request->validate([
            'email'=>'required|email',
            'password'=>'required|string',
        ]);

$user=User::where(['email'=>$data['email']])->first();
dd($user);
        if(!Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
            return back();
        }
        else{
           return redirect(route('homepage'));
        }
    }

    function logout(){
        Auth::logout();
        return redirect(route('homepage'));
    }
   
}
