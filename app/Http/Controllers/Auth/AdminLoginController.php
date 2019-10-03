<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Car;
use App\Trips;
use App\Reservate;


class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
      return view('auth.admin-login');
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::user()->job == 'admin') {
          $users=User::all();
          $reservate=Reservate::all();
          $trips=Trips::all();
          $cars=Car::all();
        return view('admin.index')->with('users',$users)->with('cars',$cars)->with('trips',$trips)->with('reservate',$reservate);
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
