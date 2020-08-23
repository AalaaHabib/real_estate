<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\Picture;
use App\Ctegory;
//href="{{$pic->getImagePath()}}"
class PropertiesController extends Controller
{
    function index(){
        $data['properties']=Property::paginate(4);
        return view('admin.properties.index')->with($data);
    }
    function show($id){
        $data['property']=Property::findOrFail($id);
        return view('admin.properties.showProp')->with($data);
    }
    function delete($id){
        Property::findOrFail($id)->delete();
        return redirect(route('admin.properties.index'));
    }

}
