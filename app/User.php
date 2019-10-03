<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function trips(){
        return $this->hasMany('App\Trips');
    }
    public function cars(){
        return $this->hasOne('App\Car', 'user_id', 'id');
    }
      public function resevates(){
        return $this->hasMany('App\Reservate');
    }
       public function comment(){
        return $this->hasMany('App\Comment');
    }
         public function rating(){
        return $this->hasMany('App\Rating');
    }
           public function note(){
        return $this->hasMany('App\Note');
    }
}
