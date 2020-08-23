<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    //
    use Notifiable;
    protected $guarded=['id'];
    
    protected $fillable = [
        'UserName', 'email', 'password','is_Agent','img'
    ];

    protected $hidden = [
        'password', 
    ];
    //one user has many properties
    public function proprties(){
        return $this->hasMany('App\Property');
    }
    // one Testimonial belongs to one user 
    public function test(){
        return $this->belongsTo('App\Testimonial');
    }
    public function getUserAvatar(){

        if($this->img!=null)
            return '/storage/uploads/users/'.$this->img;
        return '/site_images/user.png';
    }
}

