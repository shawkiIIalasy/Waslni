<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Rating;
use App\Trips;
use App\User;
use DB;
class TopDriver extends Controller
{
    public function search()
    {
       $trips=Trips::distinct()->whereNotNull('DriverName')->get(['DriverName']);
       $rating=rating::all();
      $x=Trips::distinct()->get(['user_id']);
     $user=User::all();
    
       $cars=Car::all();
       return view ('pages.Top')->with('x',$x)->with('trips',$trips)->with('rating',$rating)->with('user',$user);
     
    }
}
