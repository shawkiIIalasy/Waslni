<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Porfile</div>
<div class="card">
                  <img src="<?php echo e(asset('images/team2.jpg')); ?>" alt="John" style="width:100%">
                  <h1><?php echo e($user->name); ?></h1>
                  <p class="title">Driver</p>
                  <p><button>Contact</button></p>
                </div>

                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>