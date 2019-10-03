<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rating;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Response;

class RatingController extends Controller
{
    public function rating(Request $request,$id)
    {

          $this->validate($request, [
            'rating' => 'required',
          
        ]);

    	$orders = DB::table('rating')
                ->select('user_id')
                ->where('user_id', '=', $id)
                ->get();

    	$rating=new Rating;
    	$rating->user_id=$request->id;
    	$rating->body=$request->input('rating');
    	 $rating->fuser_id=$request->input('fuser_id');
    	 $rating->save();

    	return back();
    	
    		
    }
      public function index($id)
    {
        $user=User::find($id);
        return view('pages.rating')->with('user',$user);
      
            
    }
}
