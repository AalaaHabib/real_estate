<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //
    protected $guarded=['id'];
    //one Agency has many properties
    public function proprties(){
        return $this->hasMany('App\Property');
    }
}
