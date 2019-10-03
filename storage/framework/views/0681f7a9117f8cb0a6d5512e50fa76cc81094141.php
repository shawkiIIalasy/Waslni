<?php $__env->startSection('content'); ?>
  <?php if(!Auth::guest()): ?>
      <?php if(Auth::user()->id): ?>
   <?php if(count($trips) >0): ?>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Trips</h4></div>

                <div class="panel-body">
      <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <div class="well">
                <div class="row">
                <div class="card">
                  <img src="<?php echo e(asset('images/team2.jpg')); ?>" alt="John" style="width:200px;height: 100px;">
                  <h3><?php echo e($trip->DriverName); ?></h3>
                  <p class="title">Driver</p>
                  <p><button ><a href="/Profile/<?php echo e($trip->user_id); ?>" style="color:#fff;text-decoration:none;">Contact</a></button></p>
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
                      <td><?php echo e($trip->DriverName); ?></td>
                      <td><?php echo e($trip->loc); ?></td>
                      <td><?php echo e($trip->loc2); ?></td>
                    </tr>
                    <tr>
                     <th>Time Start</th>
                      <th>Time End</th>
                      <th>Smoking</th>
                    </tr>
                    <tr>
                      <td><?php echo e($trip->stime); ?></td>
                      <td><?php echo e($trip->etime); ?></td>
                      <td>true</td>
                    </tr>
                  </tbody>
                </table>
                <button class="col-md-7 col-sm-7" style="margin-right:20px; ">Reservate</button>
                <button class="col-md-9 col-sm-9" style="width: 80px;"><a href="/trips/<?php echo e($trip->id); ?>" style="color: #fff;text-decoration: none;">More</a></button>
                </div>
                    <div class="col-md-5 col-sm-5">
                        <small style="float:right;"></small> 
                  </div>
                </div>
            </div>
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
                    <p>No posts found</p> 
                </div>
            </div>
        </div>
    </div>
</div>
    <?php endif; ?>
    <?php endif; ?>
        <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>