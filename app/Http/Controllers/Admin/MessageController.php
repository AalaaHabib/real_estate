<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Messages;
class MessageController extends Controller
{
    //
    function index(){
        $data['messages']=Messages::orderBy('id','DESC')->get();
        return view('Admin.message.index')->with($data);
    }
    function show($id){
        $data['message']=Messages::findOrFail($id);
        return view('Admin.message.showMessage')->with($data);
    }
}
