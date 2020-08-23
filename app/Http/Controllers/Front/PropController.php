<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\Counrty;
use App\Picture;
use App\Ctegory;
use Image; 

class PropController extends Controller
{
 
    public function index(Request $request){
        return view('Front.User.property.index-property');
    }
    public function create(Request $request){
        return view('Front.User.property.create-property');
    }
    public function store(Request $request){ 
        if($request->hasFile('main_imgx')){
            $filename=$this->upload_file( $request, 'main_imgx',  'properties' );
        }else{
            return back()->withError(['invalid image'=>'please put an image']);
        }   
        $request->merge([
            'city'=>'TEST',
            'user_id'=>\Auth::user()->id,
            'main_img'=>$filename
        ]);
        $request->validate([
              "title" => 'string|required|min:3|max:250',
              "desc" => 'string|required|min:3|max:1000',
              "category_id" => 'required|exists:ctegories,id',
              "status" => "required|in:rent,buy",
              "price" => "required|integer|min:500|max:1000000",
              "size" => "required|integer|min:5|max:1000",
              "Room_num" => "required|integer|min:1|max:10",
              "bathRoom_num" => "required|integer|min:1|max:4",
              "address" => 'string|required|min:3|max:250',
              "country_id" => 'required|exists:ctegories,id',
              "user_id"=>"required"
 
        ]);  
        $property=Property::create($request->except(['_token','main_imgx','image'])); 
        $file_names = $this->upload_file( $request, 'image',  'properties' ); 
        foreach($file_names as $file_name){ 
            $image = \App\Picture::create(
                [
                    'img'=>$file_name,
                    'prop_id'=>$property->id
                ]
            );
        }
        return redirect()->route('property.index')->with('data',['alert'=>'seccess']);
    }
    public function edit(Request $request,Property $prop){
        return view('Front.User.edit-property',compact('prop'));
    } 
    public function show(Request $request,Property $property){ 
        $id=$property->category->id;
        $prop_id=$property->id;
        $data['property']=Property::findOrFail($id);
        $data['firstPic']=Picture::where('prop_id',$prop_id)->first();
        $data['fourPic']=Picture::where('prop_id',$prop_id)->orderBy('id','desc')->take(4)->get();
        $data['categories']=Ctegory::get();
        $data['featured_prop']=Property::where('is_feature','1')->orderBy('id','desc')->take(5)->get();
        return view('Front.category.catpropSingle')->with($data); 
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

