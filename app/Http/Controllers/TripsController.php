<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trips;
use App\Car;
use App\Reservate;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;
use StreamLab\StreamLabProvider\Facades\StreamLabFacades;
use Illuminate\Support\Facades\DB;
use App\Notifications\RatingNotify;
date_default_timezone_set('Asia/Amman');
class TripsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $trips = trips::all();
         $reservates=Reservate::all();
        return view('trips.index')->with('trips', $trips)->with('reservates',$reservates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('trips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sysdate=date("h:i:sa");
        $today = date("j, n, Y");
        $this->validate($request, [
            'select' => 'required',
            'select1' => 'required',
            'stime' => 'required|after:sysdate',
            'date' => 'required|after:yesterday',
            'Smoking'=>'required'
        ]);

        // Create Post
        $trips = new trips;

        $trips->DriverName=auth()->user()->name;
        $trips->stime=$request->input('stime');
         $trips->date=$request->input('date');
        $trips->loc = $request->input('select');
        $trips->loc2 = $request->input('select1');
        $trips->Smoking = $request->input('Smoking');
        $trips->user_id = auth()->user()->id;

        $trips->save();
        
       
        return redirect('/trips')->with('success', 'Trip Created');
    }

     public function end($id)
    {
        
        $today = date("j, n, Y");

      
        $trips =Trips::find($id);

        $trips->end_at= Carbon::now()->toDateTimeString();
       

        $trips->save();
          $user= DB::table('reservates')
                ->select('user_id')
                ->where('trip_id', '=', ($trips->id))
                ->get();
             
                $use=User::find($user[0]->user_id);
        Notification::send($use,new RatingNotify($trips));
        return redirect('/home')->with('success', 'End Trip');
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $trips = trips::find($id);
       $reservates=Reservate::all();
        return view('trips.show')->with('trips', $trips)->with('reservates',$reservates);
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
        $trips=Trips::find($id);
        if(auth()->user()->id !== $trips->user_id)
        {
            return redirect('/trips')->with('error','Unauthorized Page');
        }

       $r = DB::table('reservates')->select('id')->where('trip_id',$id)->get();
       if(count($r)>0 )
       {$r=Reservate::find($r[0]->id);
       $r->delete();}
        $trips->delete();
        return redirect('/home')->with('success','Trip Removed');
    }
}
