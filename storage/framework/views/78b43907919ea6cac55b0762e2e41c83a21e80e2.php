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
			
	
			<h2>Match Ride</h2>
			
					<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="well">
                <div class="row" >
                    <div class="col-md-4 col-sm-4">
                    	
                        <div class="card" >
                               <?php if($q->user->cover_image=="team2.jpg"): ?>
                    	<img alt="John" class="img-circle" alt="Cinque Terre" width="200px" height="200px" style=" -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);" src="<?php echo e(asset('images/team2.jpg')); ?>">
                    	
                    	<?php else: ?>

                        <img alt="John" class="img-circle" alt="Cinque Terre" width="200px" height="200px" style=" -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);" src="/storage/cover_image/<?php echo e($q->user->cover_image); ?>">


                        <?php endif; ?>
                        <img style=" position:absolute;margin-top: -70px;margin-left:40px;border: 2px solid rgba(255, 255, 255, 0.5);" src="images/<?php echo e($q->cars->car); ?>.PNG" class="img-circle" alt="Cinque Terre" width="70px" height="70px"> 
                  <h3><?php echo e($q->DriverName); ?></h3>
                  <p class="title">Driver</p>
                  
                </div>
                    </div>
                    
                        <h3><a></a></h3>
                
                    <table class="table" style="width:500px; ">
                  <thead>
                    <tr>
                      <td><?php echo e($q->DriverName); ?></td>
                      <td><?php echo e($q->loc); ?></td>
                      <td><?php echo e($q->loc2); ?></td>
                    </tr>
                     <tr>
                     <th>Date</th>
                      <th>Start Time</th>
                      <th>Smoking</th>
                    </tr>
                    <tr>
                      <td><?php echo e($q->date); ?></td>
                      <td><?php echo e(\Carbon\Carbon::parse($q->stime)->format('h:i A')); ?></td>
                      <td><?php echo e($q->Smoking); ?></td>
                    </tr>
                      <tr>
                     <th>Car</th>
                      <th>Car_Model</th>
                      <th>Car_Number</th>
                    </tr>
                    <tr>
                      <td><?php echo e($q->cars->car); ?></td>
                      <td><?php echo e($q->cars->car_model); ?></td>
                      <td><?php echo e($q->cars->car_num); ?></td>
                    </tr>
                     <tr>
                     <th>Available_Seat</th>
                      <th>Trips Create</th>
                      <th>Car_Number</th>
                    </tr>
                    <tr>
                      <td><?php echo e(($q->cars->seat_num)-count($q->reservate)); ?></td>
                      <td><?php echo e($q->created_at->diffForHumans()); ?></td>
                      <td>woksok</td>
                    </tr>

                  </tbody>

                </table>

               <button ><a href="/trips/<?php echo e($q->id); ?>" style="color:#fff;text-decoration:none;">Reservate </a></button>
                </div>
            </div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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