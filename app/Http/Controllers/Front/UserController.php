<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    // Default Auth
    public function showLoginForm(){
        return view('Front.User.login');
     //register a new user
    }

    public function showRegistrationForm(){
        return view('Front.User.register');
     //register a new user
    }























    public function register(){
        return view('Front.User.register');
    }
    public function handleRegister(Request $request){
        $data=$request->validate([
            'email'=>'required|email',
            'password'=>'required|string',
        ]);
        $user=new User();
        $user->UserName=$request->UserName;
        $user->email=$request->email;
        $user->password=sha1($request->password);
        if($request->is_Agent!=null)
        $user->is_Agent=$request->is_Agent;
        $user->save();
        return redirect(route('user.login'));
    }
    public function login(){
        return view('Front.User.login');
    }
    public function handleLogin(Request $request){
        $data=$request->validate([
            'email'=>'required|email',
            'password'=>'required|string',
        ]); 
        $user=User::where(['email'=>$request->email , 'password'=> sha1($request->password) ])->first();
        if(null!=$user){
            \Auth::loginUsingId($user->id);
            return redirect(route('homepage'));
        }
        else
        return back(); 
    }

    public function logout(){
        Auth::logout();
        return redirect(route('homepage'));
    }













    public function profile(Request $request){
        return view('Front.User.profile');
    }
   
}
