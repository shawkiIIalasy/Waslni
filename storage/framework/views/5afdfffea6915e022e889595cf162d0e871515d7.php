<?php $__env->startSection('content'); ?>
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
			<?php if(isset($details)): ?>
			
	
			<h2>Match Post</h2>
			<table class="table table-striped" >
				
				<tbody>
					<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">

                        <img style="width:50%" src="/storage/cover_image/<?php echo e($post->cover_image); ?>">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($q->loc); ?></a></h3>
                        <h5><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($q->loc2); ?></a></h5>
                        <hr><br><small>Written on<?php echo e($q->created_at); ?> by <?php echo e($q->user->name); ?></small>
                    </div>
                </div>
            </div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			<?php elseif(isset($message)): ?>
			<br>
			 <div class="form-group">
			 	<div class="well">
			 		<img src="<?php echo e(asset('images/search.png')); ?>" width="75px;" height="75px;" style="float:left; margin:0px 10px 0px 5px;">
			 	<h4><?php echo e($message); ?><a><?php echo e($query); ?> </a></h4>
			 	<h6>We’ve found no rides matching your search.</h6>
			 </div>
			 </div>
			<?php endif; ?>
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>