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
        $file_names=array(); 
        if ($request->hasFile("$input_field")) { 
            $path       = $path_to_save;
            if(is_array($request->file("$input_field"))){
                $files=$request->file("$input_field");  
                foreach ($files as $my_file) { 
                    array_push($file_names, basename($my_file->store('public/uploads/'.$path)) );
                }  
                    return $file_names; 
            }
            else{
                $file       = $request->file("$input_field");
                return basename($file->store('public/uploads/'.$path));
            }
            
        } 

        
    }


    



}
