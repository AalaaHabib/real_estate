<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\Counrty;
use App\Ctegory;
use App\Admin;
use App\User;
use App\Agency;
class HomePageController extends Controller
{
    //
    function index(){
        $data['properties']=Property::count('id');
        $data['cities']=Counrty::count('id');
        $data['cats']=Ctegory::count('id');
        $data['users']=User::count('id');
        $data['agencies']=Agency::count('id');
        $data['admin_name']=Admin::select('userName')->first();
        return view('Admin/index')->with($data);
    }
}
