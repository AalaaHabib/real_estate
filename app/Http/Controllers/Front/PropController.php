<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\Counrty;
use App\Picture;
use App\Ctegory;
class PropController extends Controller
{

    function  allProperties(){
        $data['properties']=property::paginate(6);
        return view('Front/Property/allProperties')->with($data);
    }

    function countryProp($id)
    {   //  proprty select from property where cat_id = var id and pignate 3 if they are alot
        $data['properties']=property::where('country_id','=',$id)->paginate(3);
        //pring counrty name
        $data['coun_name']=Counrty::select('name')->where('id','=',$id)->first();
        return view('Front/country/property')->with($data);
    }
    function singleProperty($id,$p_id){
        $data['property']=property::findOrFail($p_id);
        $data['firstPic']=Picture::where('prop_id','=',$id)->first();
        $data['fourPic']=Picture::where('prop_id','=',$id)->orderBy('id','desc')->take(4)->get();
        $data['categories']=Ctegory::get();
        $data['featured_prop']=Property::where('is_feature','=','1')->orderBy('id','desc')->take(5)->get();
        return view('Front/country/singleProperty')->with($data);
    }

    function catProp($id){
        $data['properties']=property::where('category_id','=',$id)->paginate(3);
        //pring counrty name
        $data['cat_name']=Ctegory::select('name')->where('id','=',$id)->first();
        return view('Front/category/catProperty')->with($data);
    }

    function catpropSingle($id,$p_id){
        $data['property']=property::findOrFail($p_id);
        $data['firstPic']=Picture::where('prop_id','=',$id)->first();
        $data['fourPic']=Picture::where('prop_id','=',$id)->orderBy('id','desc')->take(4)->get();
        $data['categories']=Ctegory::get();
        $data['featured_prop']=Property::where('is_feature','=','1')->orderBy('id','desc')->take(5)->get();
        return view('Front/category/catpropSingle')->with($data);
    }
    function createProp(){
        
    }
}

