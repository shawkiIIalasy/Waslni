<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class PageController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

 
        
       public function profile($id)
    {
        $user = User::find($id);
      
        return view('pages/profile')->with('user',$user);
    }
        public function Myprofile()
    {
         $user_id = auth()->user()->id;
        $user = User::find($user_id);
      
         return view('pages/Myprofile')->with('user', $user->name);
     }
}
