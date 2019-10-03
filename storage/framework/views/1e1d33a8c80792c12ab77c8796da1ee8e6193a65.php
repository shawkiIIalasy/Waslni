

<?php $__env->startSection('content'); ?>
<?php if(!Auth::guest()): ?>
      <?php if(Auth::user()->id): ?>
     
       <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
        <div class="panel-heading">Top Driver</div>
        <div class="panel-body"> <?php $i=0 ?>
       
        <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="well">
                <div class="row">

          
                      
                  
                 <?php $__currentLoopData = $rating; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($rat->user->name==$trip->DriverName ): ?>
                   <?php if($rat->user->cover_image != 'team2.jpg'): ?>
                                <img src="/storage/cover_image/<?php echo e($rat->user->cover_image); ?>" alt="John" class="img-circle" alt="Cinque Terre" width="100px" height="100px" style=" -webkit-border-radius: 50%;margin:25px;margin-bottom: 0px;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);">  <?php else: ?> <img src="/images/team2.jpg" alt="John" class="img-circle" alt="Cinque Terre" width="100px" height="100px" style=" -webkit-border-radius: 50%;
    -moz-border-radius: 50%;margin:25px;margin-bottom: 0px;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);"> <?php endif; ?>
                          <?php ++$i;?> <?php break; ?> 

                          
                          <?php endif; ?> 
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <span style="font-size: 20px;padding:10px; "><?php echo e($trip->DriverName); ?><span>
         
          

          

         <?php $t=0.0;$c=0.0;?>
        <?php $__currentLoopData = $rating; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <?php if($rat->user->name==$trip->DriverName): ?>
          <?php $t=(float)$t+(float)$rat->body; $c++;?>
        <?php endif; ?>
          
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php  if($c>0){$t=(float)$t/$c;}?>
        <p style="float: right; border-radius:100%;border: 2px solid #000;padding:20px; width:100px;height: 100px;margin-right: 50px;margin-bottom: 0px;margin-top: 25px;  ">  Rating<br>
     <span  class="rating-num" style="font-size: 20px;padding: 20px;"> <?php   echo substr($t,0,3)?></span>
      <div class="rating" style="float: right;margin-top: 125px;margin-right:-100px;" >
                           <?php if($t>=5): ?> <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star">
                             <?php elseif($t>=4): ?>
                              <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star-empty">
                             <?php elseif($t>=3): ?>
                              <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty">
                            </span><span class="glyphicon glyphicon-star-empty">  
                            <?php elseif($t>=2): ?>
                             <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty">
                            </span><span class="glyphicon glyphicon-star-empty"> 
                            <?php elseif($t>=1): ?>
                             <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty">
                            </span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty">
                            </span><span class="glyphicon glyphicon-star-empty">
                              <?php else: ?>
                              <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star">
                                <?php endif; ?>
                        </div></p>
      </div>
    </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </div>
          </div>
          </div>
          </div>
          </div>

<?php endif; ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>