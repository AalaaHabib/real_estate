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
