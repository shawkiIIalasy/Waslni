<?php $__env->startSection('content'); ?>
<?php if(!Auth::guest()): ?>

<?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        
<?php if(isset(Auth::user()->cars->user_id)): ?>
     
         
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
                                        <td><?php echo e($trip->stime); ?></td>
                                       
                                         <td>
                                         <?php if(isset($trip->end_at)): ?> End <?php else: ?> <form method="post" action="/trips/<?php echo e($trip->id); ?>/end">
                                            <?php echo e(method_field('PUT')); ?><?php echo e(csrf_field()); ?>

                                          <button type="submit" class="btn btn-default">Make As End</button></form><?php endif; ?>
                                        </td>
                                        <td><button href="/trips/<?php echo e($trip->id); ?>/edit" class="btn btn-default">Edit</button>
                                          
                                        </td><td><form method="post" action="/trips/<?php echo e($trip->id); ?>">
                                            <?php echo e(method_field('delete')); ?><?php echo e(csrf_field()); ?>

                                            <button class="btn btn-danger" >Delete</button> 
                                          </form>
                                            </td>
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
<?php break; ?>

     

<?php else: ?>
     
       
       <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
        <div class="panel-heading">Add Your Car</div>
        <div class="panel-body">
        <form method="POST" action="/cars">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('POST')); ?>

            
      <div class="form-row">
        <div class="form-group col-md-6">
         

       <label for="inputEmail4">Car Name</label>
      <select class="form-control" id="sel1" name="select" required>
        <option>Kia</option>
        <option>Honda </option>
        <option>Toyota</option>
        <option>Meresedes Benz</option>
        <option>BMW</option>
        <option>volks Wagen</option>
            <option>Hyundai</option>
          <option>Daewoo</option>
                    <option>Other</option>


      </select>

        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Car Model</label>
          <select class="form-control" id="sel1" name="select1" required>
        <option>1990</option> 
         <option>1991</option>
          <option>1992</option>
           <option>1993</option>
            <option>1994</option>
             <option>1995</option>
              <option>1996</option>
               <option>1997</option>
                <option>1998</option>
                 <option>1999</option>

                         <option>2000</option>
                          <option>2001</option>
                          <option> 2002</option>
                          <option>  2003</option>
                           <option>  2004</option>
                             <option> 2005</option>
                             <option>  2006</option>
                             <option>   2007</option>
                               <option>  2008</option>
                                <option>  2009</option>
                                <option>2010</option>
        <option>  2011</option>
      <option> 2012</option>
      <option>  2013</option>
      <option>   2014</option>
        <option>  2015</option>
         <option>  2016</option>
         <option>   2017</option>
        
      </select>
        </div>
      </div>
      <div class="form-group col-md-6"> 
      <label for="inputEmail4">Car Number</label>
       <input  class="form-control" type="number"  name="car_num1" min="0" value="00" max="99" style="width:75px;">
        <input type="number" min="0" value="" max="99999" class="form-control" name="car_num" style="width: 200px;float:right;margin-top:-37px;">
    </div>
     <div class="form-group col-md-6"> 
      <label for="inputEmail4">Car Seat</label>
        <input type="tel" class="form-control" name="seat_num">
    </div>
     
      <button type="submit" class="btn btn-primary">Add My Car</button>
    </form>
     </div>
                </div>
            </div>
        </div>
     </div>
<script>
      $( function() {
  $(document).on('input', '.form-control', function() {
    
    var allowedDigits = 2;
    var length = $(this).val().length;
    var max = parseInt($(this).attr("max"));
    
    // appears there is a bug in the latest version of Chrome. When there are multiple decimals,
    // the value of a number type field can no longer be accessed. For now, all we can do is clear it
    // when that happens
    if($(this).val() == ""){
      $(this).val("");
    }
    
    if ($(this).val().indexOf('.') != -1) {
      allowedDigits = 3;
    }
    
    if(length > allowedDigits){
      $(this).val($(this).val().substring(1));
  }
    
    if($(this).val() > max && max > 0){
      $(this).val($(this).val().substring(1));
    }
  });  
});
    </script>
<?php break; ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>