<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservate;
use App\Trips;
class PastandUpController extends Controller
{
    public function past()
    {
    	$trips=Trips::all();
    	$reservates=Reservate::all();
    	
    	return view('trips.pasttrip')->with('trips',$trips)->with('reservates',$reservates);

    }
     public function Up()
    {
    	$trips=Trips::all();
    	$reservates=Reservate::all();
    	
    	return view('trips.Up')->with('trips',$trips)->with('reservates',$reservates);

    }
}
