<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

@extends('layouts.app')
<style type="text/css">
 .rating {
    float:left;
}

.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    margin-top: -20px;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:400%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}
.glyphicon { margin-right:5px;}
.rating .glyphicon {font-size: 22px;}
.rating-num { margin-top:0px;font-size: 54px; }
.progress { margin-bottom: 5px;}
.progress-bar { text-align: left; }
.rating-desc .col-md-3 {padding-right: 0px;}
.sr-only { margin-left: 5px;overflow: visible;clip: auto; }
</style>
@section('content')
@if(isset($user->cars->created_at))
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Porfile</div>
<div class="card">
                   @if(($user->cover_image)!='team2.jpg')
                                   <img src="/storage/cover_image/{{$user->cover_image}}" alt="John" style="width:100%">@else <img src="{{asset('images/team2.jpg')}}" alt="John" style="width:100%">@endif
                  <h1>{{$user->name}}</h1>
                  <p class="title">Driver</p>
                  <p><button>Contact</button></p>
                </div>

                <div class="panel-body">
                    <div class="col-xs-20 col-md-6">
       
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: 140px;">
                       <p style=" border-radius:100%;border: 2px solid #000;padding: 35px; width: 150px;height: 150px;  ">  Rating <span class="rating-num" style="font-size: 40px">
                      <?php $b=0;?>
                        @if(isset($user->rating))
                          @foreach($user->rating as $rat)
                           <?php $b=$b+(float)$rat->body;?>
                          

                        @endforeach 
                         <?php  if(count($user->rating)>0){$b=(float)$b/count($user->rating);
                            echo substr($b,0,3);}
                            ?>


                        @else 5.00 @endif
                       
                    </span></p>
                        <div class="rating">
                           @if($b>=5) <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star">
                             @elseif($b>=4)
                              <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star-empty">
                             @elseif($b>=3)
                              <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty">
                            </span><span class="glyphicon glyphicon-star-empty">  
                            @elseif($b>=2)
                             <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty">
                            </span><span class="glyphicon glyphicon-star-empty"> 
                            @elseif($b>=1)
                             <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty">
                            </span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty">
                            </span><span class="glyphicon glyphicon-star-empty">
                              @else
                              <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star">
                                @endif
                        </div>
                        
                    </div>
                  
                        <!-- end row -->
                 @if(count($user->rating)>0)
                  <?php $a=0; ?>
                @foreach ($user->rating as $rat)
                        
                        @if($rat->fuser_id == Auth::user()->id  )
                        <?php $a=0;?>
                        @break
                        @else 
                        <?php $a=$a+1;?>
                        @endif  
                        @endforeach
                    @else
                     <?php $a=1; ?>
                    @endif    
                </div>
                  <div>
                            <span class="glyphicon glyphicon-plus"></span>Join Us About : {{$user->cars->created_at->diffForHumans()}}
                           
                        </div>
                        <div>
                         <span class="glyphicon glyphicon-user"></span>{{count($user->trips)}} Trips 
                        </div>
                       
                        @if($a!=0)
                  <form method="post" action="/rating/{{$user->id}}">
                    {{csrf_field()}}
                  <fieldset class="rating" style="">
                    <legend>Please rate:</legend>
                    <input type="hidden" name="fuser_id" value="{{auth()->user()->id}}">
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                </fieldset>
                <button type="submit"onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();" style="width:75px;float:right; ">Rate</button>
               </form> @endif 
          <div> 
                            <h3 class="rating" style="" href="#{{$user->id}}" data-toggle="collapse">
                            Rider thank you notes</h3>
            

<div id="{{$user->id}}" class="collapse">


                 
            <h3>Notes&&</h3>
             <div class="Comment" id="comment-box">
                @foreach ($user->note as $note)
                @if(count($user->note)==5) @break @endif
           
                <div class="user-comment-box">
                    <div class="well"> 
                    {{$note->body}}
                  </div>
                </div>
                @endforeach
                 
              </div>
            
                           <!-- @foreach ( $user->trips as $comment)
                            <div class="alert alert-secondary " style="margin: 20px;">
                              <span class="glyphicon glyphicon-comment">{{$comment->body}}</span>
                            </div>
                            @endforeach-->
                        </div>
                        @if(count($user->note)>0)
                  <?php $b=0; ?>
                @foreach ($user->note as $no)
                        
                        @if($no->fuser_id == Auth::user()->id  )
                        <?php $b=0;?>
                        @break
                        @else 
                        <?php $b=$b+1;?>
                        @endif  
                        @endforeach
                    @else
                     <?php $b=1; ?>
                    @endif  
                          @if($b!=0 )     
                            <hr>
           
                <div class="card_block">
                    <form method="POST" action="/trips/{{$user->id}}/note">
                      {{ csrf_field() }}
                     

                        <div class="form-group">
                            <textarea name="body" placeholder="Add Comment Here" class="form-control"></textarea>


                        </div>
                        <div class="form-group">
                            <button type="submit" class="">Add Note 
                            </button>

                        </div>

                    </form>
                 
            </div>@endif
       
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
@section('script')
<script type="text/javascript">
    function myFunction(x) {
    x.classList.toggle("fa-thumbs-down");
}
</script>
<script type="text/javascript">
    $(function(){
       // select the first 5 hidden divs

    $( ".Comment" ).each(function( index ) {
 $(this).children(".user-comment-box").slice(-3).show();
});

        $(".see-more").click(function(e){ // click event for load more
            e.preventDefault();
            var done = $('<div class="see-more=done">done</div>');
            $(this).siblings(".user-comment-box:hidden").slice(-5).show(); // select next 5 hidden divs and show them
            if($(this).siblings(".user-comment-box:hidden").length == 0){ // check if any hidden divs
                $(this).replaceWith(done); // if there are none left
            }
        });
});
</script>
@endsection