<?php $__env->startSection('content'); ?>

    
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
        <input type="tel" class="form-control" name="car_num">
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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>