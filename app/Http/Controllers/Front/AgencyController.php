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
    public function showAgencies(){
        $data['agencies']=Agency::paginate(4);
        $data['count']=Property::where('agency_id','1')->count();
           
        $data['agencies']=Agency::paginate(4);
        $data['categories']=Ctegory::get();
        $data['featured_prop']= Property::where('is_feature','1')->orderBy('id','desc')->limit(5)->get();//->take(5);//1.5 ms
        //->take(5);//1000

        
       
        return view('Front.Agency.showAgencies')->with($data);
    }

    
}
