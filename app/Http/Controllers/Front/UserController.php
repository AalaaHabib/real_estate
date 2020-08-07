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
        //dd($request->password);
        $user=new User();
        $user->UserName=$request->UserName;
        $user->email=$request->email;
        $user->password=sha1($request->password);
        if($request->is_Agent!=null)
        $user->is_Agent=$request->is_Agent;
        $user->save();
        //dd($user);
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
        $user=User::where(['email'=>$request->email , 'password'=> sha1($request->password) ])->first();
        if(null!=$user){
            //dd($user->id);

            \Auth::loginUsingId($user->id);
 
            return redirect(route('homepage'));
        }
        else
        return back(); 
    }

    function logout(){
        Auth::logout();
        return redirect(route('homepage'));
    }
   
}
