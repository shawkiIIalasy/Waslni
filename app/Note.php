<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'note';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
       public function user(){
        return $this->belongsTo('App\User');
    }

}
