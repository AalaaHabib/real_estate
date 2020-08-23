<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ctegory;

class CategoryController extends Controller
{
    //
    function index(){
        $data['cats']=Ctegory::select('id','name')->orderBy('id','Desc')->get(); 
        return view('Admin/category/catIndex')->with($data);
    }
    function create(){
        return view('Admin/category/create');
    }
    function store(Request $request){
        $data=$request->validate([
            'name'=>'required|string|max:20'
        ]);
        Ctegory::create($data);
        return redirect(route('adminCats.index'));
    }
    function edit($id){
        $data['cat']=Ctegory::findOrFail($id);
        return view('Admin/category/update')->with($data);
    }

    function update(Request $request, $id){
        $data=$request->validate([
            'name'=>'required|string|max:20'
        ]);
        Ctegory::findOrFail($id)->update($data);
        return redirect(route('adminCats.index'));
    }

    function delete($id){
        Ctegory::findOrFail($id)->delete();
        return redirect(route('adminCats.index'));
    }
}
