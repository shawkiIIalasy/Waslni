@extends('layouts.app')

@section('content')
  @if(!Auth::guest())
  @if(Auth::user()->id)
   @if(count($reservates) >0)

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Past Trips</h4></div>

                <div class="panel-body">
                  @foreach($trips as $trip)

      @foreach($trip->reservate as $reservate)
        @if(Auth::user()->id==$reservate->user_id)
        @if(date("Y-m-d") > $trip->date || isset($trip->end_at))
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <div class="well">
                <div class="row">
                <div class="card">
                  <img src="/storage/cover_image/{{$trip->user->cover_image}}" alt="John" style="width:200px;height: 100px;">
                  <h3>{{$trip->DriverName}}</h3>
                  <p class="title">Driver</p>
                  <p><button ><a href="/Profile/{{$trip->user_id}}" style="color:#fff;text-decoration:none;">Contact</a></button></p>
                </div>
                    <div class="col-md-7 col-sm-7">
                        <h3><a></a></h3>
                
                              <table class="table">
                  <thead>
                    <tr>
                      <td><img src="{{asset('images/amman.png')}}" height="260px" style="margin-top: -30px;" width="550px;"></td>
                    
                    </tr>
                  </thead>
                   </table>



               
                </div>
                    <div class="col-md-5 col-sm-5">
                        <small style="float:right;"></small> 
                  </div>
                    <table class="table">
                  <tbody>
                    <tr>
                     <th>Time Start</th>
                      <th>Time End</th>
                      <th>Reservate At</th>
                    </tr>
                    <tr>
                      <td>{{$trip->stime}}</td>
                      <td>{{$trip->end_at}}</td>
                      <td>{{$reservate->created_at->diffForHumans()}}</td>
                    </tr>
                  </tbody>
                </table> <button class="col-md-9 col-sm-9" style="width: 200px;"><a href="/trips/{{$reservate->id}}" style="color: #fff;text-decoration: none;">More</a></button>
                </div>
            </div>
          @else

     
            

                <div class="panel-body">
                    <img src="{{asset('images/no.png')}}" height="150px" width="150px" style="float: left;"><h1 style="margin-top: 60px">No Have Past Trips Yet</h1> 
                </div>
                 <?php break 2?>
         
@endif
@endif
        @endforeach
        @endforeach
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
                    <p>No Trips found</p> 
                </div>
            </div>
        </div>
    </div>
</div>
    @endif
    @endif
       
 @endif
@endsection

<!---->
