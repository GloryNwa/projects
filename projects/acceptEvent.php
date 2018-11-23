<?php
include('database/confiq.inc.php');
include('includes/header_blade.php');
ob_start();
session_start();

 	
	
if(isset($_GET['id'])){
   
	  $user_id = $_SESSION['user_id'];
	  $id      = $_GET['id'];
// var_dump($user_id );exit;
if(!empty($user_id)&&!empty( $id )) {

	 $query = "SELECT * FROM `accept_event` WHERE `user_id`='$user_id' AND `event_id`='$id'";             
       if ($query_run = mysql_query($query)) {

	      $query_num_rows = mysql_num_rows($query_run);

          if ($query_num_rows > 0) {
			       
             $_SESSION['alert'] ='<div class="alert alert-danger"style="text-align:center;">Event has already been accepted  :)</div>';            
              header('Location:all_events.php');exit();

          }else {

            

			 $query = "INSERT INTO `accept_event` VALUES('','$user_id ', '$id', now())";

			  if ($query_run = mysql_query($query)) {
			  	
			          $_SESSION['alert'] ='<div class="alert alert-success"style="text-align:center;">Event accepted successfully.</div>';
			          header('Location:all_events.php');exit;

			  }else{
			        $_SESSION['alert'] ='<div class="alert alert-danger" style="text-align:center;"style="text-align:center;">An error occured, please try again later or contact the admin!</div>';
			          header('Location:all_events.php');exit();
                    }
			      }
			   }
			 }
		 }
	?>











	
<footer>
    <p>Copyright
        <a href="#" title="">LoveWorld Networks</a>   2018</p>
    <span></span>
</footer>


<!-- Vendor: Javascripts -->
<script src="js/jquery.min.js" type="text/javascript"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css" type="text/javascript"></script>


<!-- Vendor: Followed by our custom Javascripts -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/select2.min.js" type="text/javascript"></script>
<script src="js/slick.min.js" type="text/javascript"></script>

<!-- Our Website Javascripts -->
<script src="js/isotope.min.js" type="text/javascript"></script>
<script src="js/isotope-int.js" type="text/javascript"></script>
<script src="js/jquery.counterup.js" type="text/javascript"></script>
<script src="js/waypoints.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script src="js/exporting.js" type="text/javascript"></script>
<script src="js/highcharts-more.js" type="text/javascript"></script>
<script src="js/moment.min.js" type="text/javascript"></script>
<script src="js/jquery.circliful.min.js" type="text/javascript"></script>

<script src="js/jquery.downCount.js" type="text/javascript"></script>
<script src="js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="js/jquery.formtowizard.js" type="text/javascript"></script>
<script src="js/form-validator.min.js" type="text/javascript"></script>
<script src="js/form-validator-lang-en.min.js" type="text/javascript"></script>
<script src="js/cropbox-min.js" type="text/javascript"></script>
<script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="js/ion.rangeSlider.min.js" type="text/javascript"></script>
<script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
<script src="js/styleswitcher.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/fullcalendar.min.js" type="text/javascript"></script>