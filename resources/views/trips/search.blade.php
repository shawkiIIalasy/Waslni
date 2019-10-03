@extends('layouts.app')

@section('content')
 <br>
			<div class="container" style="width:1000px;">
				<div class="well" style="width:1000px;height:100px ">
			 		<form method="get" action="/search">
                            <input type="text" name="from" class="form-control" style="width:200px;float:left;" placeholder="From" required>
                            <input type="text" name="to" class="form-control" style="width:200px;float:left;margin-left:50px;" placeholder="To" required>
                            <input type="date" name="date" class="form-control" style="width:200px;float:left;margin-left:50px;" placeholder="Date" required>
                            <button type="submit" class="btn btn-primary" style="float:left;margin-left:50px;width:200px;">Find A Ride</button></form>
                        </div>
			 	</div>
	<div class="container" style="width:800px;">	
			@if(isset($details))
			
	
			<h2>Match Ride</h2>
			
					@foreach($details as $q)
					<div class="well">
                <div class="row" >
                    <div class="col-md-4 col-sm-4">
                    	
                        <div class="card" >
                               @if($q->user->cover_image=="team2.jpg")
                    	<img alt="John" class="img-circle" alt="Cinque Terre" width="200px" height="200px" style=" -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);" src="{{asset('images/team2.jpg')}}">
                    	
                    	@else

                        <img alt="John" class="img-circle" alt="Cinque Terre" width="200px" height="200px" style=" -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);" src="/storage/cover_image/{{$q->user->cover_image}}">


                        @endif
                        <img style=" position:absolute;margin-top: -70px;margin-left:40px;border: 2px solid rgba(255, 255, 255, 0.5);" src="images/{{$q->cars->car}}.PNG" class="img-circle" alt="Cinque Terre" width="70px" height="70px"> 
                  <h3>{{$q->DriverName}}</h3>
                  <p class="title">Driver</p>
                  
                </div>
                    </div>
                    
                        <h3><a></a></h3>
                
                    <table class="table" style="width:500px; ">
                  <thead>
                    <tr>
                      <td>{{$q->DriverName}}</td>
                      <td>{{$q->loc}}</td>
                      <td>{{$q->loc2}}</td>
                    </tr>
                     <tr>
                     <th>Date</th>
                      <th>Start Time</th>
                      <th>Smoking</th>
                    </tr>
                    <tr>
                      <td>{{$q->date}}</td>
                      <td>{{\Carbon\Carbon::parse($q->stime)->format('h:i A')}}</td>
                      <td>{{$q->Smoking}}</td>
                    </tr>
                      <tr>
                     <th>Car</th>
                      <th>Car_Model</th>
                      <th>Car_Number</th>
                    </tr>
                    <tr>
                      <td>{{$q->cars->car}}</td>
                      <td>{{$q->cars->car_model}}</td>
                      <td>{{$q->cars->car_num}}</td>
                    </tr>
                     <tr>
                     <th>Available_Seat</th>
                      <th>Trips Create</th>
                      <th>Car_Number</th>
                    </tr>
                    <tr>
                      <td>{{($q->cars->seat_num)-count($q->reservate)}}</td>
                      <td>{{$q->created_at->diffForHumans()}}</td>
                      <td>woksok</td>
                    </tr>

                  </tbody>

                </table>

               <button ><a href="/trips/{{$q->id}}" style="color:#fff;text-decoration:none;">Reservate </a></button>
                </div>
            </div>
					@endforeach

			@elseif(isset($message))
			<br>
			 <div class="form-group">
			 	<div class="well">
			 		<img src="{{asset('images/search.png')}}" width="75px;" height="75px;" style="float:left; margin:0px 10px 0px 5px;">
			 	<h4>{{ $message }}<a>{{ $query }} </a></h4>
			 	<h6>We’ve found no rides matching your search.</h6>
			 </div>
			 </div>
			@endif
		</div>

@endsection