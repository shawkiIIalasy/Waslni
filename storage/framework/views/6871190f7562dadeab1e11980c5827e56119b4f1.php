    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php $__env->startSection('content'); ?>
  <?php if(!Auth::guest()): ?>
      <?php if(Auth::user()->id): ?>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Trips</h4></div>

                <div class="panel-body">
           
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <div class="well">
                <div class="row">
                <div class="card">
                   <?php if(($trips->user->cover_image)!='team2.jpg'): ?>
                                    <img src="/storage/cover_image/<?php echo e($trips->user->cover_image); ?>" alt="John" height="270px" width="300px"><?php else: ?> <img src="<?php echo e(asset('images/team2.jpg')); ?>"alt="John" height="270px" width="300px"><?php endif; ?>
                
                  <h1><?php echo e($trips->DriverName); ?></h1>
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
                      <td><?php echo e($trips->DriverName); ?></td>
                      <td><?php echo e($trips->loc); ?></td>
                      <td><?php echo e($trips->loc2); ?></td>
                    </tr>
                     <tr>
                     <th>Date</th>
                      <th>Start Time</th>
                      <th>Smoking</th>
                    </tr>
                    <tr>
                      <td><?php echo e($trips->date); ?></td>
                      <td><?php echo e(\Carbon\Carbon::parse($trips->stime)->format('h:i A')); ?></td>
                      <td><?php echo e($trips->Smoking); ?></td>
                    </tr>
                      <tr>
                     <th>Car</th>
                      <th>Car_Model</th>
                      <th>Car_Number</th>
                    </tr>
                    <tr>
                      <td><?php echo e($trips->cars->car); ?></td>
                      <td><?php echo e($trips->cars->car_model); ?></td>
                      <td><?php echo e($trips->cars->car_num); ?></td>
                    </tr>
                     <tr>
                     <th>Available_Seat</th>
                      <th>Trips Create</th>
                      <th>Car_Number</th>
                    </tr>
                    <tr>
                      <td><?php echo e(($trips->cars->seat_num)-count($trips->reservate)); ?></td>
                      <td><?php echo e($trips->created_at->diffForHumans()); ?></td>
                      <td>woksok</td>
                    </tr>

                  </tbody>
                </table>
                <?php if(Auth::user()->name != $trips->DriverName && count($trips->reservate)<$trips->cars->seat_num): ?>

                  <form method="post" action="/reservates">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="trips_id" value="<?php echo e($trips->id); ?>">
                <button class="col-md-5 col-sm-5" style="width:140px;margin-right: 2px;" type="submit">Reservate</button></form><?php endif; ?>
                 <button class="col-md-5 col-sm-5" style="width:140px;margin-right: 2px;font-size:15px; padding: 10px" type="submit"  data-toggle="collapse" data-target="#demo"><i class=" glyphicon glyphicon-comment"></i> Comment<span class="badge badge-light"><?php echo e(count($trips->comment)); ?></span></button>
                <button class="col-md-5 col-sm-5" style="width:140px;margin-right: 2px;font-size:15px; padding: 10px" type="submit" data-toggle="collapse" data-target="#demo1"><i class="glyphicon glyphicon-user"></i>Passengers<span class="badge badge-light"><?php echo e(count($trips->reservate)); ?></span></button>
                </div>

                    <div class="col-md-5 col-sm-5">
                        <small style="float:right;"></small> 
                  </div>
                </div>
            </div>
        </div>


<div id="demo" class="collapse">



<h3 style="margin-left: 20px;">Comment</h3>
<?php $__currentLoopData = $trips->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-secondary " style="margin: 20px;">
  <?php echo e($comment->body); ?>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



  <div class="form-group" style="margin:15px;">
    <form method="POST" action="/trips/<?php echo e($trips->id); ?>/comment">
      <?php echo e(csrf_field()); ?>

  <label for="comment">Comment:</label>
  <textarea class="form-control" name="body" rows="5" id="comment"></textarea>
  <button class="btn btn-primary" type="submit" style="width:200px;">Comment</button></form>
</div>
</div>
<div id="demo1" class="collapse">
  <div class="panel-body">
           
 <?php $__currentLoopData = $trips->reservate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 175PX;margin:10px">
  <img src="<?php echo e(asset('images/team2.jpg')); ?>" alt="John" style="width:100%">
  <h6><?php echo e($reservate->user->name); ?></h6>
  <h6 >0<?php echo e($reservate->user->phone); ?></h6>
  <p>Passnger</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>About</button></p>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>

    <?php else: ?>
       
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
    <?php endif; ?>
    <?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>