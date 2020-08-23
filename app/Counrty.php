<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counrty extends Model
{
    protected $guarded=['id'];
    //one counrty has many properties
    public function proprties(){
        return $this->hasMany('App\Property');
    }
}
