<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Agency;
use App\Ctegory;
use App\Property;
class AgencyController extends Controller
{
    //
    function showAgencies(){
        $data['agencies']=Agency::paginate(4);
        $data['count']=Property::where('agency_id','=','1')->count();
           
        $data['agencies']=Agency::paginate(4);
        $data['categories']=Ctegory::get();
        $data['featured_prop']=Property::where('is_feature','=','1')->orderBy('id','desc')->take(5)->get();
       
        return view('Front/Agency/showAgencies')->with($data);
    }

    
}
