@extends('layouts.app')

@section('content')
@if(!Auth::guest())
      @if(Auth::user()->id)
      <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Porfile</div>
                <div class="card">
 @if((Auth::user()->cover_image)!='team2.jpg')
               <img src="/storage/cover_image/{{Auth::user()->cover_image}}" alt="John" style="width:100%;" height="300px;">@else <img src="{{asset('images/team2.jpg')}}" alt="John" style="width:100%;" height="300px;">@endif
                  <h1>{{Auth::user()->name }}</h1>
                  <p class="title">User</p>
                  
                </div>

                <div class="panel-body">
                <div class="col-md-7 col-sm-15">
                <table class="table">
                
                  <tbody>
                    <tr>
                     <th>Your Name</th>
                    </tr>
                    <tr>
                     
                      <td>{{Auth::user()->name}}</td>
                    </tr>
                      <tr>
                     <th><br>Email</th>
                      
                    </tr>
                    <tr>
                      <td>{{Auth::user()->email}}</td>
                     
                    </tr>
                     <tr>
                     <th><br>Phone Number</th>
                     
                    </tr>
                    <tr>
                      <td>0{{Auth::user()->phone}}</td>
                      
                    </tr>
                  </tbody>
                </table>
                
                <form method='POST' action="/Myprofile/photo/{{Auth::user()->id}}" enctype="multipart/form-data">
                      {{ csrf_field() }} 

                <input type="file" size="60" class="form-control" style="margin-bottom: 10px" name="cover_image"/>
                <button type="submit" name="submit" class="col-md-5 col-sm-5" style="margin-bottom:5px;margin-right: 5px;">Add Photo</button>
              </form>
                <button class="col-md-5 col-sm-5">Edit</button>
              </div>
            </div>
            </div>
        </div>
    </div>
</div>
@if(isset(Auth::user()->cars))
<!--my car-->
      <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Car</div>
                <div class="panel-body">
                <div class="col-md-15 col-sm-15">
                <table class="table">
                
                  <tbody>
                    <tr>
                     <th>Car Name</th>
                    </tr>
                    <tr>
                     
                      <td>{{Auth::user()->cars->car}}</td>
                    </tr>
                      <tr>
                     <th><br>Car Model</th>
                      
                    </tr>
                    <tr>
                      <td>{{Auth::user()->cars->car_model}}</td>
                     
                    </tr>
                     <tr>
                     <th><br>Car Number</th>
                     
                    </tr>
                    <tr>
                      <td>{{Auth::user()->cars->car_num}}</td>
                      
                    </tr>
                  </tbody>
                </table>

                

                <button>Edit</button>
              </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endif
@endif
@endif
@endsection