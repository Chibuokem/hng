<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <title>HNG STAGE 1</title>
  </head>
  <body>
    <div class="jumbotron">
    <h1 class="text-center">HNG INTERNSHIP 4.0</h1>
    <h4 class="text-center ">Todays date is 
          <?php
          date_default_timezone_set('Africa/Lagos');

            $todays_date = date('Y-m-d');
            echo $todays_date;
           ?>
             
          </h4>
         <h4 class="text-center " >The time is </h4>
         <h5 class="hng text-center" style="color: #80476c; text-align:center" id="clock"></h5>
    </div> 


   
   
    <script>
var d = new Date(<?php echo time() * 1000 ?>);
function digitalClock() {
  d.setTime(d.getTime() + 1000);
  var hrs = d.getHours();
  var mins = d.getMinutes();
  var secs = d.getSeconds();
  mins = (mins < 10 ? "0" : "") + mins;
  secs = (secs < 10 ? "0" : "") + secs;
  var apm = (hrs < 12) ? "am" : "pm";
  hrs = (hrs > 12) ? hrs - 12 : hrs;
  hrs = (hrs == 0) ? 12 : hrs;
  var ctime = hrs + ":" + mins + ":" + secs + " " + apm;
  document.getElementById("clock").innerHTML = ctime;
  
}
window.onload = function() {
  digitalClock();
  setInterval('digitalClock()', 1000);
}
</script>
  </body>
</html>