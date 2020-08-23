<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 
    public function upload_file(
    	Request $request,
        $input_field, 
        $path_to_save
    ){    
        if ($request->hasFile("$input_field")) {
            $file       = $request->file("$input_field");
            $path       = $path_to_save; // '/uploads/portfolios/'; 
            $filename =  uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
            return basename($request->file("$input_field")->store('public/uploads/'.$path)); 
        } 
    }


    



}
