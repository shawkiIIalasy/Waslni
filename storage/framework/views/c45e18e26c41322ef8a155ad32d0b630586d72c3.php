<!DOCTYPE html>
<?php echo e(date_default_timezone_set('Asia/Amman')); ?>

<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
 <link rel="shortcut icon"  href="/images/sublogo.png" >
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
     <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
     <!-- Styles -->
     <style type="text/css">.unread{

        background-color:#ccc;
     }</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top" >
            <div class="container">
                <div class="navbar-header">
                 
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Waslni')); ?>

                    </a>
                </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li ><a href="/trips">Reserve
a Trips <span class="sr-only">(current)</span></a></li>
                        <?php if(!Auth::guest()): ?> <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Trips <span class="caret"></span></a>

                            <ul class="dropdown-menu">
                            <li><a href="/past">Past</a></li>
                            <li><a href="/Up">Upcoming</a></li>
                          </ul>

                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Driver <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="/home">Make Trip</a></li>
                            <li><a href="/Top">Top Driver</a></li>
                            <li><a href="#"></a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="">Make A Trip</a></li>
                          </ul>
                        </li>
                       
                        <li><a href="/Myprofile">My Profile</a></li>
                        <?php endif; ?>
                      </ul>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <div id="clock">
    <p class="date"><?php echo e(date("Y/m/d")); ?></p>
    <p class="time"><?php echo e(date("H:i:s")); ?></p>
</div>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   <?php if((Auth::user()->cover_image)!='team2.jpg'): ?>
                                   <img src="/storage/cover_image/<?php echo e(Auth::user()->cover_image); ?>" class="img-circle" alt="Cinque Terre" width="30px" height="30px"><?php else: ?> <img src="<?php echo e(asset('images/team2.jpg')); ?>" class="img-circle" alt="Cinque Terre" width="30px" height="30px"><?php endif; ?> <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" >
                                    <li>
                                        <a href="/home" >
                                            My Profile
                                        </a>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown" style="float: right;">
                       
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
                          <span class="badge"><?php echo e(count(auth()->user()->unreadNotifications)); ?></span><span class="glyphicon glyphicon-globe"></span> 
                        </a>

                        <ul class="dropdown-menu notify-drop" style="width:300px;float: right" role="menu"> <div class="drop-content">
                            <?php if(count(auth()->user()->Notifications) >0): ?>
                            <?php $__currentLoopData = auth()->user()->Notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($note->type=='App\Notifications\NotifyTripReservate'): ?>
                                 <li><a href="">
                            <div class="col-md-3 col-sm-3 col-xs-3" class="<?php if(!isset($note->read_at)): ?> unread <?php endif; ?>"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <a href=""> 
                                <?php echo $note->data['user_name']; ?> has just Reservate on your trip 

                                 <a href=""></a><a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                            
                            <hr>
                            <a href="/trips/<?php echo e($note->data['trip_id']); ?>" class="btn btn-primary">See</a>
                            </div>
                            <?php $note->markAsRead(); ?>
                            </a></li>
                            <?php else: ?> 
                             <li><a href="">
                            <div class="col-md-3 col-sm-3 col-xs-3" class="<?php if(!isset($note->read_at)): ?> unread <?php endif; ?>"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                
                              
                                <?php if(isset( $note->data['user_name'])): ?> How was your trip with  <?php echo $note->data['user_name']; ?>? 
                               <small> <?php echo e(\Carbon\Carbon::parse($note->data['stime'])->format('l')); ?> to <?php echo $note->data['loc2']; ?></small>


                                <?php endif; ?>
                            
                                 <a href=""></a><a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                            
                            <hr>
                            <a href="/rating/<?php echo e($note->data['user_id']); ?>" class="btn btn-primary">trustee</a>
                            </div>
                            <?php $note->markAsRead(); ?>
                            </a></li>
                            <?php endif; ?>
                           

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                            <?php else: ?>
                               <div class="col-md-9 col-sm-9 col-xs-9 pd-l0">You dont have any notification<i class="fa fa-dot-circle-o"></i></a>
                          
                          
                            </div>
                            <?php endif; ?>
                        </div>
                         <div class="notify-drop-footer text-center">
                        <a href="" ><i class="fa fa-eye"></i>See All</a>
                        </div>
                    </ul>
                           
                    </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br>
        <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
