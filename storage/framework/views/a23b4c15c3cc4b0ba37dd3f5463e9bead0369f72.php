<?php $__env->startSection('content'); ?>
<?php if(!Auth::guest()): ?>
<?php if(Auth::user()->id): ?>
     
         
           <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My trips</div>

                    <div class="panel-body">
      
                        <a href="/trips/create" class="btn btn-primary">Create Trips</a>
                        <h3>My Trips</h3>
                        <?php if(count($trips) > 0): ?>
                            <table class="table table-striped">
                                <tr>
                                    <th>Start Location</th>
                                  <th>End Location</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($trip->loc); ?></td>
                                        <td><?php echo e($trip->loc2); ?></td>
                                        <td><?php echo e($trip->time); ?></td>
                                        <td><?php echo e($trip->time); ?></td>
                                        <td><a href="/trips/<?php echo e($trip->id); ?>/edit" class="btn btn-default">Edit</a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        <?php else: ?>
                            <p>You have no posts</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


     

<?php endif; ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>