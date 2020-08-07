<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded=['id'];
    //relation one property belongs  to one category
    public function category(){
        return $this->belongsTo('App\Ctegory');
    }
    //one property belongs to one location 
    public function country(){
        return $this->belongsTo('App\Counrty');
    }
    // one property belongs to one user 
    public function user(){
        return $this->belongsTo('App\User');
    }
    // one property belongs to one Agency 
    public function Agency(){
        return $this->belongsTo('App\Agency');
    }
}
