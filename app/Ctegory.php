<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ctegory extends Model
{
    // status: ['rent','buy'] 

    protected $guarded=['id'];
    //one category has many properties
    public function proprties(){
        return $this->hasMany('App\Property');
    }
}
