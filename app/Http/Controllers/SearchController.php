<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Trips;
use DB;

class SearchController extends Controller
{
       public function search()
    {
    	$from= Input::get ( 'from' );
    	$to =Input::get ( 'to' );
    	$date=Input::get ( 'date' );
		$q = Trips::where ( 'loc', 'LIKE', '%' . $from. '%' )->where('loc2', 'LIKE', '%' . $to. '%')->whereDate('date', $date)->get ();
	

	 if (count ( $q ) > 0 )
		return view ( 'trips.search' )->withDetails ( $q )->withQuery ( $q );
	  else
		return view ( 'trips.search' )->withMessage ( "We’ve found no rides matching your search." )->withQuery (  $q ) ;
    }
}
