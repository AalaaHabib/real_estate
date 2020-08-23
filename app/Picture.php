<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
   	public $guarded=[];
	public function property(){
        return $this->belongsTo('App\Property');
    }
    public function getImagePath(){ 
    	return '/storage/uploads/properties/'.$this->img;
    }
}
