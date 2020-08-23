<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Counrty;
use Image; 
use Illuminate\Support\Facades\Storage;
class LocationController extends Controller
{
    //
    function index(){
        $data['locations']=Counrty::select('id','name','img')->orderBy('id','Desc')->paginate(3); 
        return view('Admin/location/locationIndex')->with($data);
    }
    function create(){
        return view('Admin/location/create');
    }
    function store(Request $request){
         //validate input Data
         $data=$request->validate([
            'name'=>'required|string|max:50',
            'img'=>'required|mimes:jpg,jpeg,png'
        ]);
        $newName=$data['img']->hashName();
        Image::make($data['img'])->save(public_path('uploads/cities/'.$newName));
        $data['img']=$newName;
        Counrty::create($data);
        return redirect(route('adminLocations.index'));
    }
    function edit($id){
        $data['city']=Counrty::findOrFail($id);
        return view('Admin/location/update')->with($data);
    }

    function update(Request $request, $id){
       //validate input Data
       $data=$request->validate([
        'name'=>'required|string|max:50',
        'img'=>'nullable|mimes:jpg,jpeg,png'
    ]);

    $oldName=Counrty::findOrFail($request->id)->img;
    if(!$request->hasFile('img')){
        $data['img']=$oldName;
        
    }
    else{
        Storage::disk('uploads')->delete('cities/'.$oldName);
        $newName=$data['img']->hashName();
        Image::make($data['img'])->save(public_path('uploads/cities/'.$newName));
        $data['img']=$newName;
    }
        Counrty::findOrFail($id)->update($data);
        return redirect(route('adminLocations.index'));
    }

    function delete($id){
        Counrty::findOrFail($id)->delete();
        return redirect(route('adminLocations.index'));
    }
}
