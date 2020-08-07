<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Ctegory;
use App\Property;
use App\User_Desc;
class AgentController extends Controller
{
    //
    function showAgents(){
        $data['agents']=User::select('id','UserName','email','img','office','taxNumber','faxNumber','phone')
        ->where('is_Agent','=','1')->paginate(2);
        $data['categories']=Ctegory::get();
        $data['featured_prop']=Property::where('is_feature','=','1')->orderBy('id','desc')->take(5)->get();
        return view('Front/Agent/agents')->with($data);
    }

    function agentDet($id){
        $data['agents']=User::select('id')->where('is_Agent','=','1')->get();
        
        $data['agent']=User::findOrFail($id);
        dd($data['agent']);
        return view('Front/Agent/agentDet');
    }



}
