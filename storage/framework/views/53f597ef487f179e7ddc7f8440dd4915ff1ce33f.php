<?php $__env->startSection('content'); ?>
  <?php if(!Auth::guest()): ?>
  <?php if(Auth::user()->id): ?>
   <?php if(count($reservates) >0): ?>

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Past Trips</h4></div>

                <div class="panel-body">
                  <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <?php $__currentLoopData = $trip->reservate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Auth::user()->id==$reservate->user_id): ?>
        <?php if(date("Y-m-d") > $trip->date || isset($trip->end_at)): ?>
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <div class="well">
                <div class="row">
                <div class="card">
                  <img src="/storage/cover_image/<?php echo e($trip->user->cover_image); ?>" alt="John" style="width:200px;height: 100px;">
                  <h3><?php echo e($trip->DriverName); ?></h3>
                  <p class="title">Driver</p>
                  <p><button ><a href="/Profile/<?php echo e($trip->user_id); ?>" style="color:#fff;text-decoration:none;">Contact</a></button></p>
                </div>
                    <div class="col-md-7 col-sm-7">
                        <h3><a></a></h3>
                
                              <table class="table">
                  <thead>
                    <tr>
                      <td><img src="<?php echo e(asset('images/amman.png')); ?>" height="260px" style="margin-top: -30px;" width="550px;"></td>
                    
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
                      <td><?php echo e($trip->stime); ?></td>
                      <td><?php echo e($trip->end_at); ?></td>
                      <td><?php echo e($reservate->created_at->diffForHumans()); ?></td>
                    </tr>
                  </tbody>
                </table> <button class="col-md-9 col-sm-9" style="width: 200px;"><a href="/trips/<?php echo e($reservate->id); ?>" style="color: #fff;text-decoration: none;">More</a></button>
                </div>
            </div>
          <?php else: ?>

     
            

                <div class="panel-body">
                    <img src="<?php echo e(asset('images/no.png')); ?>" height="150px" width="150px" style="float: left;"><h1 style="margin-top: 60px">No Have Past Trips Yet</h1> 
                </div>
                 <?php break 2?>
         
<?php endif; ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <p>No Trips found</p> 
                </div>
            </div>
        </div>
    </div>
</div>
    <?php endif; ?>
    <?php endif; ?>
       
 <?php endif; ?>
<?php $__env->stopSection(); ?>

<!---->

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>