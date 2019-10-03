<?php $__env->startSection('content'); ?>
     <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
        <div class="panel-heading">Create Trip</div>
        <div class="panel-body">
        <form method="POST" action="/trips">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('POST')); ?>

            
      <div class="form-row">
        <div class="form-group col-md-6">
         

       <label for="inputEmail4">Start Point</label>
      <select class="form-control" id="sel1" name="select" required>
        <option selected>Amman</option>
        <option>Zarqa </option>
        <option>Irbid</option>
        <option>Al Albayt University</option>
        <option>Jerash</option>
        <option>AlMafraq</option>
       


      </select>

        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">End Point</label>
          <select class="form-control" id="sel1" name="select1" required>
        <option >Amman</option>
        <option>Zarqa </option>
        <option>Irbid</option>
        <option selected>Al Albayt University</option>
        <option>Jerash</option>
        <option>AlMafraq</option>
       
        
      </select>
        </div>
      </div>
      <div class="form-group col-md-6"> 
      <label for="inputEmail4">Trip Date</label>
        <input type="date" class="form-control" name="date">
    </div>
     <div class="form-group col-md-6"> 
      <label for="inputEmail4">Trip Time</label>
        <input type="time" class="form-control" name="stime">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4">Smoking :: </label>
    <input type="radio" id="contactChoice1"
      name="Smoking" value="False"  checked>
    <label for="contactChoice1">False</label>

    <input type="radio" id="contactChoice2"
     name="Smoking"  value="True" class="">
    <label for="contactChoice2">True</label>
  </div>
     
      <button type="submit" class="btn btn-primary">New Trip</button>
    </form>
     </div>
                </div>
            </div>
        </div>
     </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
// define variables
var nativePicker = document.querySelector('.nativeTimePicker');
var fallbackPicker = document.querySelector('.fallbackTimePicker');
var fallbackLabel = document.querySelector('.fallbackLabel');

var hourSelect = document.querySelector('#hour');
var minuteSelect = document.querySelector('#minute');

// hide fallback initially
fallbackPicker.style.display = 'none';
fallbackLabel.style.display = 'none';

// test whether a new date input falls back to a text input or not
var test = document.createElement('input');
test.type = 'time';
// if it does, run the code inside the if() {} block
if(test.type === 'text') {
  // hide the native picker and show the fallback
  nativePicker.style.display = 'none';
  fallbackPicker.style.display = 'block';
  fallbackLabel.style.display = 'block';

  // populate the hours and minutes dynamically
  populateHours();
  populateMinutes();
}

function populateHours() {
  // populate the hours <select> with the 6 open hours of the day
  for(var i = 12; i <= 18; i++) {
    var option = document.createElement('option');
    option.textContent = i;
    hourSelect.appendChild(option);
  }
}

function populateMinutes() {
  // populate the minutes <select> with the 60 hours of each minute
  for(var i = 0; i <= 59; i++) {
    var option = document.createElement('option');
    option.textContent = (i < 10) ? ("0" + i) : i;
    minuteSelect.appendChild(option);
  }
}

// make it so that if the hour is 18, the minutes value is set to 00
// — you can't select times past 18:00
 function setMinutesToZero() {
   if(hourSelect.value === '18') {
     minuteSelect.value = '00';
   }
 }

 hourSelect.onchange = setMinutesToZero;
 minuteSelect.onchange = setMinutesToZero;
 </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>