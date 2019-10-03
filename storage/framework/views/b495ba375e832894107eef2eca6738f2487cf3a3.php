<?php $__env->startSection('content'); ?>
<?php if(!Auth::guest()): ?>
      <?php if(Auth::user()->id): ?>
      <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Porfile</div>
                <div class="card">
                  <img src="<?php echo e(asset('images/team2.jpg')); ?>" alt="John" style="width:100%">
                  <h1><?php echo e(Auth::user()->name); ?></h1>
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
                     
                      <td><?php echo e(Auth::user()->name); ?></td>
                    </tr>
                      <tr>
                     <th><br>Email</th>
                      
                    </tr>
                    <tr>
                      <td><?php echo e(Auth::user()->email); ?></td>
                     
                    </tr>
                     <tr>
                     <th><br>Phone Number</th>
                     
                    </tr>
                    <tr>
                      <td><?php echo e(Auth::user()->phone); ?></td>
                      
                    </tr>
                  </tbody>
                </table>
                <form method='POST' action="/Myprofile/photo/<?php echo e(Auth::user()->id); ?>">
                      <?php echo e(csrf_field()); ?>

                      <?php echo e(method_field('PUT')); ?>

                <input type="file" size="60" name="cover_image"/>
                <button style="margin-bottom:5px; " type="submit" >Add Photo</button></form>
                <button>Edit</button>
              </div>
            </div>
            </div>
        </div>
    </div>
</div>

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
                     
                      <td><?php echo e(Auth::user()->cars->car); ?></td>
                    </tr>
                      <tr>
                     <th><br>Car Model</th>
                      
                    </tr>
                    <tr>
                      <td><?php echo e(Auth::user()->cars->car_model); ?></td>
                     
                    </tr>
                     <tr>
                     <th><br>Car Number</th>
                     
                    </tr>
                    <tr>
                      <td><?php echo e(Auth::user()->cars->car_num); ?></td>
                      
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

<?php endif; ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>