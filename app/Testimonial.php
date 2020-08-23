<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
      // one Testimonial belongs to one user 
      public function User(){
        return $this->belongsTo('App\User');
    }
      // one testimonail belongs to one user 
   
}
