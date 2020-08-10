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

    public function index(Request $request){
        return view('Front.User.index-property');
    }
    public function create(Request $request){
        return view('Front.User.create-property');
    }
    public function store(Request $request){
        Property::create($request->except('_token'));
        return route('property.index')->with('data',['alert'=>'seccess']);
    }
    public function edit(Request $request,Property $prop){
        return view('Front.User.edit-property',compact('prop'));
    } 
    public function show(Request $request,Property $prop){
        return view('Front.User.show-property',compact('prop'));
    }
    public function update(Request $request,Property $prop){
        $prop->update($request->except('_token'));
        return route('property.index')->with('data',['alert'=>'seccess']);
    }
    public function delete(Request $request,Property $prop){
        $prop->delete();
        return route('property.index')->with('data',['alert'=>'seccess']);
    }













    function  allProperties(){
        $data['properties']=property::paginate(6);
        return view('Front/Property/allProperties')->with($data);
    }

    function countryProp($id)
    {   //  proprty select from property where cat_id = var id and pignate 3 if they are alot
        $data['properties']=property::where('country_id',$id)->paginate(3);
        //pring counrty name
        $data['coun_name']=Counrty::select('name')->where('id',$id)->first();
        return view('Front/country/property')->with($data);
    }
    function singleProperty($id,$p_id){
        $data['property']=property::findOrFail($p_id);
        $data['firstPic']=Picture::where('prop_id',$id)->first();
        $data['fourPic']=Picture::where('prop_id',$id)->orderBy('id','desc')->take(4)->get();
        $data['categories']=Ctegory::get();
        $data['featured_prop']=Property::where('is_feature','1')->orderBy('id','desc')->take(5)->get();
        return view('Front/country/singleProperty')->with($data);
    }

    function catProp($id){
        $data['properties']=property::where('category_id',$id)->paginate(3);
        //pring counrty name
        $data['cat_name']=Ctegory::select('name')->where('id',$id)->first();
        return view('Front/category/catProperty')->with($data);
    }

    function catpropSingle($id,$p_id){
        $data['property']=property::findOrFail($p_id)->with(['firstPic','fourPic']);
        $data['firstPic']=Picture::where('prop_id',$id)->first();
        $data['fourPic']=Picture::where('prop_id',$id)->orderBy('id','desc')->take(4)->get();
        $data['categories']=Ctegory::get();
        $data['featured_prop']=Property::where('is_feature','1')->orderBy('id','desc')->take(5)->get();
        return view('Front.category.catpropSingle')->with($data);
    }
    function createProp(){
        
    }
}

