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
        return view('Front.User.profile.index');
    }
    public function profile_edit(Request $request){
        return view('Front.User.profile.edit');
    }
    public function profile_edit_password(Request $request){
        return view('Front.User.profile.security');
    }
    public function profile_update_password(Request $request){
        $request->validate(
            [
                'old_password'=>'required|',
                'password'=>'required|min:1|max:20|confirmed'
            ]
        );
        //dd($request->password);
        $user=\App\User::where(['email'=>auth()->user()->email,'password'=>sha1($request->password)])->first();

        if($user==null)
            return back();
        else{
            auth()->user()->update(['password'=>sha1($request->password)]); 
        }
        
        return redirect()->route('my.profile')->with('data',['alert'=>'Success','alert-type'=>'success']);

    }
    public function profile_update(Request $request){
        
        $request->validate(
            [
                'UserName'=>'required|string|min:3|max:40',
                'email'=>'required|email',
                'is_Agent'=>'required|in:0,1',
                'postion'=>'nullable|string|min:3|max:40',
                'phone'=>'nullable|digits:11|regex:/^[0-9]+$/',
                'avatar'=>'nullable|mimes:jpeg,jpg,png,gif|max:10000'
            ]
        ); 
        auth()->user()->update($request->except(['_token','avatar']));
        if($request->hasFile('avatar'))
            auth()->user()->update(['img'=> $this->upload_file($request,'avatar','users') ]); 
        return view('Front.User.profile.index');
    }
    public function profile_contact(Request $request)
    {
        return view('Front.User.profile.contact');
    }
    
    
   
}
