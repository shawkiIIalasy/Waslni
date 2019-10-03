<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservate;
use App\Trips;
use App\User;
use Illuminate\Support\Facades\Notification;
use StreamLab\StreamLabProvider\Facades\StreamLabFacades;
use Illuminate\Support\Facades\DB;
use App\Notifications\NotifyTripReservate;

class ReservateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       $reservates=new Reservate;
        $reservates->user_id=auth()->user()->id;
      
       $reservates->Trip_id=$request->input('trips_id');
       $reservates->seat=$request->input('seat');
       $reservates->save();
    $user= DB::table('Trips')
                ->select('user_id')
                ->where('id', '=', ($reservates->Trip_id))
                ->get();
                $b=$user[0]->user_id;
                $use=User::find($b);
        Notification::send($use,new NotifyTripReservate($reservates));
     
       return back()->with('success', 'Reservate Created');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
