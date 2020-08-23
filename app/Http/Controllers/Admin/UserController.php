<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Agency;
class UserController extends Controller
{
    function index(){
        $data['users']=User::paginate(6);
        return view('Admin.users.index')->with($data);
    }
    function sort($type){
        
    }
    function sortAsc(){
        $data['users']=User::orderBy('UserName')->paginate(6);
        return view('Admin.users.index')->with($data);
    }
    function sortDesc(){
        $data['users']=User::orderBy('UserName','DESC')->paginate(6);
        return view('Admin.users.index')->with($data);
    }
    function search(Request $request){
        $data['users']=User::where('UserName','LIKE','%'.$request->name.'%')->paginate(6);
        return view('Admin.users.index')->with($data);
    }
    function showAgnets(){
        $data['agents']=User::where('is_Agent','1')->get();
        return view('Admin.users.agents')->With($data);
    }
    function showCompanies(){
        $data['companies']=Agency::get();
        return view('Admin.users.companies')->With($data);
    }
    function destroy($id){
        User::findOrFail($id)->delete();
        return back();
    }
    public function destroyCompany($id)
    {
        Agency::findOrFail($id)->delete();
        return back();
    }
}
