<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
       // Table Name
    protected $table = 'trips';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
       public function user(){
        return $this->belongsTo('App\User');
    }
        public function cars(){
        return $this->hasOne('App\Car', 'user_id', 'user_id');
    }
          public function Reservate(){
        return $this->hasMany('App\Reservate', 'Trip_id');
    }
            public function comment(){
        return $this->hasMany('App\Comment', 'Trip_id');
    }
}
