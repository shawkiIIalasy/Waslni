@extends('layouts.app')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">*{font-family: 'Roboto', sans-serif;}

@keyframes click-wave {
  0% {
    height: 40px;
    width: 40px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    height: 200px;
    width: 200px;
    margin-left: -80px;
    margin-top: -80px;
    opacity: 0;
  }
}

.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 13.33333px;
  right: 0;
  bottom: 0;
  left: 0;
  height: 40px;
  width: 40px;
  transition: all 0.15s ease-out 0s;
  background: #9faab7;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  position: relative;
  z-index: 1000;
}
.option-input:hover {
  background: #9faab7;
}
.option-input:checked {
  background: #40e0d0;
}
.option-input:checked::before {
  height: 40px;
  width: 40px;
  position: absolute;
  content: '✔';
  display: inline-block;
  font-size: 26.66667px;
  text-align: center;
  line-height: 40px;
}
.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}
.option-input.radio {
  border-radius: 50%;
}
.option-input.radio::after {
  border-radius: 50%;
}

</style>
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
                   @if(($trips->user->cover_image)!='team2.jpg')
                                    <img src="/storage/cover_image/{{$trips->user->cover_image}}" alt="John" height="270px" width="300px">@else <img src="{{asset('images/team2.jpg')}}"alt="John" height="270px" width="300px">@endif
                
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
                     <th>Date</th>
                      <th>Start Time</th>
                      <th>Smoking</th>
                    </tr>
                    <tr>
                      <td>{{$trips->date}}</td>
                      <td>{{\Carbon\Carbon::parse($trips->stime)->format('h:i A')}}</td>
                      <td>{{$trips->Smoking}}</td>
                    </tr>
                      <tr>
                     <th>Car</th>
                      <th>Car_Model</th>
                      <th>Car_Number</th>
                    </tr>
                    <tr>
                      <td>{{$trips->cars->car}}</td>
                      <td>{{$trips->cars->car_model}}</td>
                      <td>{{$trips->cars->car_num}}</td>
                    </tr>
                     <tr>
                     <th>Available_Seat</th>
                      <th>Trips Create</th>
                      <th>Car_Number</th>
                    </tr>
                    <tr>
                      <td>{{($trips->cars->seat_num)-count($trips->reservate)}}</td>
                      <td>{{$trips->created_at->diffForHumans()}}</td>
                      <td>woksok</td>
                    </tr>

                  </tbody>
                </table>
                
                 <button class="col-md-5 col-sm-5" style="width:140px;margin-right: 2px;font-size:15px; padding: 10px" type="submit"  data-toggle="collapse" data-target="#demo"><i class=" glyphicon glyphicon-comment"></i> Comment<span class="badge badge-light">{{count($trips->comment)}}</span></button>
                <button class="col-md-5 col-sm-5" style="width:140px;margin-right: 2px;font-size:15px; padding: 10px" type="submit" data-toggle="collapse" data-target="#demo1"><i class="glyphicon glyphicon-user"></i>Passengers<span class="badge badge-light">{{count($trips->reservate)}}</span></button>
                </div>

                    <div class="col-md-5 col-sm-5">
                        <small style="float:right;"></small> 
                  </div>
                </div>
            </div>
        </div>


<div id="demo" class="collapse">



<h3 style="margin-left: 20px;">Comment</h3>
@foreach ( $trips->comment as $comment)
<div class="alert alert-secondary " style="margin: 20px;">
  {{$comment->body}}
</div>
@endforeach



  <div class="form-group" style="margin:15px;">
    <form method="POST" action="/trips/{{$trips->id}}/comment">
      {{csrf_field()}}
  <label for="comment">Comment:</label>
  <textarea class="form-control" name="body" rows="5" id="comment"></textarea>
  <button class="btn btn-primary" type="submit" style="width:200px;">Comment</button></form>
</div>
</div>
<div id="demo1" class="collapse">
  <div class="panel-body">
           
 @foreach($trips->reservate as $reservate)
        <div class="card" style="width: 175PX;margin:10px">
  <img src="{{asset('images/team2.jpg')}}" alt="John" style="width:100%">
  <h6>{{$reservate->user->name}}</h6>
  <h6 >0{{$reservate->user->phone}}</h6>
  <p>Passnger</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>About</button></p>
</div>
@endforeach
  </div>
        </div>
    </div>
</div>
</div>
</div>



                  
          
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            

                <div class="panel-body">

                 @if(Auth::user()->name != $trips->DriverName && count($trips->reservate)<$trips->cars->seat_num)
   <form method="post" action="/reservates">
                    {{csrf_field()}}
                    <input type="hidden" name="trips_id" value="{{$trips->id}}">
                 @if(count($trips->reservate)>0) 
                 <div>
                    
                    @foreach($trips->reservate as $reservate)
                    
                    @if($reservate->seat == "left" )
                    @else
                    <div style="">
                <label>
                 <input type="radio" class="option-input radio" name="seat" value="left" checked /> <span style="float:left;margin-left:50px;margin-top: -20px;">Left</span>
                   </label></div>
                   
                   @endif
                   @endforeach
                    @foreach($trips->reservate as $reservate)
                    @if($reservate->seat != "center")
                <div style="">
                <label>
                
                 <input type="radio" class="option-input radio" name="seat" value="center"  /> <span style="float:left;margin-left:50px;margin-top: -20px;">Center</span></label>
                 @endif
                   @endforeach
                     @foreach($trips->reservate as $reservate)
                    @if($reservate->seat != "right")
                        <div style="">
                <label>
                
                 <input type="radio" class="option-input radio" name="seat" value="right"  /> <span style="float:left;margin-left:50px;margin-top: -20px;">Right</span>
                   </label></div> </div> @endif
                   @endforeach
               
                   @foreach($trips->reservate as $reservate)
                    @if($reservate->seat != "next to driver")
                <div style="">
                <label>
                
                 <input type="radio" class="option-input radio" name="seat" value="next to driver"  /> <span style="float:left;margin-left:50px;margin-top: -20px;">Next TO Driver</span>
                   </label></div>

                
                  @endif
                   @endforeach

 
                </div><button class="col-md-5 col-sm-5" style="width:140px;margin-right: 2px;" type="submit">Reservate</button></form>
                @else
                 <form method="post" action="/reservates">
                    {{csrf_field()}}
                    <input type="hidden" name="trips_id" value="{{$trips->id}}">
         
                 <div>
                  
                    <div style="">
                <label>
                 <input type="radio" class="option-input radio" name="seat" value="left" checked /> <span style="float:left;margin-left:50px;margin-top: -20px;">Left</span>
                   </label></div>
                  
                <div style="">
                <label>
                
                 <input type="radio" class="option-input radio" name="seat" value="center"  /> <span style="float:left;margin-left:50px;margin-top: -20px;">Center</span></label>
                
                        <div style="">
                <label>
                
                 <input type="radio" class="option-input radio" name="seat" value="right"  /> <span style="float:left;margin-left:50px;margin-top: -20px;">Right</span>
                   </label></div> </div
                  
               
                
                <div style="">
                <label>
                
                 <input type="radio" class="option-input radio" name="seat" value="next to driver"  /> <span style="float:left;margin-left:50px;margin-top: -20px;">Next TO Driver</span>
                   </label></div>

                

 
                </div><button class="col-md-5 col-sm-5" style="width:140px;margin-right: 2px;" type="submit">Reservate</button></form>
                @endif
                @endif
<table border="2px;" style="float: right;margin-top: -200px;">
  <tr>
     <th>Right</th>
    <th>Left</th>
    <th>Center</th>
    <th>Next to Driver</th>
  </tr>
   <tr>
       <th><img src="/images/chair.png"></th>
    <th><img src="/images/chair.png"></th>
    <th><img src="/images/chair.png"></th>
    <th><img src="/images/chair.png"></th>
  </tr>
<tr>
  <td>
       @foreach($trips->reservate as $reservate)
       @if($reservate->seat == "right")

          <div class="card" style="width:100PX;margin:10px">
  <img src="{{asset('images/team2.jpg')}}" alt="John" style="width:100%">
  <h6>{{$reservate->user->name}}</h6>
  <h6 >0{{$reservate->user->phone}}</h6>
  <p>Passnger</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>About</button></p>
</div>
       @endif
       @endforeach
</td>
  <td>       @foreach($trips->reservate as $reservate)
       @if($reservate->seat == "left")

          <div class="card" style="width:100PX;margin:10px">
  <img src="{{asset('images/team2.jpg')}}" alt="John" style="width:100%">
  <h6>{{$reservate->user->name}}</h6>
  <h6 >0{{$reservate->user->phone}}</h6>
  <p>Passnger</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>About</button></p>
</div>
       @endif
       @endforeach</td>
  <td>       @foreach($trips->reservate as $reservate)
       @if($reservate->seat == "center")

          <div class="card" style="width:100PX;margin:10px">
  <img src="{{asset('images/team2.jpg')}}" alt="John" style="width:100%">
  <h6>{{$reservate->user->name}}</h6>
  <h6 >0{{$reservate->user->phone}}</h6>
  <p>Passnger</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>About</button></p>
</div>
       @endif
       @endforeach</td>
  <td>       @foreach($trips->reservate as $reservate)
       @if($reservate->seat == "next to driver")

          <div class="card" style="width:100PX;margin:10px">
  <img src="{{asset('images/team2.jpg')}}" alt="John" style="width:100%">
  <h6>{{$reservate->user->name}}</h6>
  <h6 >0{{$reservate->user->phone}}</h6>
  <p>Passnger</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>About</button></p>
</div>
       @endif
       @endforeach</td>
</tr>


</table>

       @foreach($trips->reservate as $reservate)



       @endforeach

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