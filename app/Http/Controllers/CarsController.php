<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=cars::all();
        return view('/home')->with('cars',$cars);
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
         $this->validate($request, [
            'select' => 'required',
            'select1' => 'required',
            'seat_num' => 'required',
            'car_num1' => 'required|max:99|min:0',
            'car_num'=>'required|max:99999|min:1'
        ]);
         $a=$request->car_num1.$request->car_num;

        // Create Post
        $cars= new Car;
         $cars->seat_num=$request->input('seat_num');
         $cars->car_num=$a;
        $cars->car = $request->input('select');
        $cars->car_model = $request->input('select1');
        $cars->user_id = auth()->user()->id;

        $cars->save();

        return redirect('/home')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars=Car::find($id);
        return redirect('/home')->with('cars',$cars);
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
