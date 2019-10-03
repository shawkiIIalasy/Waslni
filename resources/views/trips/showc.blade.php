@extends('layouts.app')

@section('content')
  @if(!Auth::guest())
      @if(Auth::user()->id)
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Trips</h4></div>

                <div class="panel-body">
           
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <div class="well">
                <div class="row">
                <div class="card">
                  <img src="{{asset('images/team2.jpg')}}" alt="John" style="width:100%">
                  <h1>{{$trips->DriverName}}</h1>
                  <p class="title">Driver</p>
                  <p><button>Contact</button></p>
                </div>
                    <div class="col-md-7 col-sm-7">
                        <h3><a></a></h3>
                
                              <table class="table">
                  <thead>
                    <tr>
                       <th>Driver Name</th>
                      <th>Location Start</th>
                      <th>Location End</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{$trips->DriverName}}</td>
                      <td>{{$trips->loc}}</td>
                      <td>{{$trips->loc2}}</td>
                    </tr>
                    <tr>
                     <th>Time Start</th>
                      <th>Time End</th>
                      <th>Smoking</th>
                    </tr>
                    <tr>
                      <td>{{$trips->stime}}</td>
                      <td>{{$trips->etime}}</td>
                      <td>true</td>
                    </tr>
                      <tr>
                     <th>Car</th>
                      <th>Car_Model</th>
                      <th>Car_Number</th>
                    </tr>
                    <tr>
                      <td>{{$cars->car}}</td>
                      <td>w;ls;</td>
                      <td>w;l;l</td>
                    </tr>
                     <tr>
                     <th>Available_Seat</th>
                      <th>Trips Create</th>
                      <th>Car_Number</th>
                    </tr>
                    <tr>
                      <td>w;;l</td>
                      <td>{{$trips->created_at}}</td>
                      <td>woksok</td>
                    </tr>

                  </tbody>
                </table>
                <button class="">Reservate</button>
                </div>
                    <div class="col-md-5 col-sm-5">
                        <small style="float:right;"></small> 
                  </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>

    @else
       
        <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Trips</div>

                <div class="panel-body">
                    <p>No posts found</p> 
                </div>
            </div>
        </div>
    </div>
</div>
    @endif
    @endif



@endsection