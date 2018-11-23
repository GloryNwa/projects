<?php
include('includes/header_blade.php');
ob_start();

session_start();



?>

<style>
 a:hover{
    text-decoration:underline;                 
  }
</style>

<body class="expand-data panel-data">
    
 <?php
include ('includes/Top_bar.php');

include ('includes/nav.php');
  ?> 
 <div class="container" style="max-width: 700px; padding-top:70px ">
  <div class="panel-content">

   <?php 
       if (isset( $_SESSION['alert'])){
         echo  $_SESSION['alert']; 
         unset( $_SESSION['alert']);
       }
   ?>
    <div class="widget pad40-50"> 
      <div class="widget-title2">
        <h4>Create Information</h4>
        <span>.</span>
      </div>
      <form class="form-wrp" method="POST" action="info_action.php" enctype="multipart/form-data">
  
       <div class="form-group">
       <!--   <input type="hidden" name="MAX_FILE_SIZE" value="1000000"> <br> -->
        <div class="row mrg15">
          <div class="col-md-12 col-sm-12 col-lg-12">
            <input class="brd-rd5" type="text" name="title" placeholder="Title*" required />
          </div>
          <div class="col-md-12 col-sm-12 col-lg-12">
            <textarea class="brd-rd5" type="text" name="text_body" placeholder="Info*" required/></textarea>
          </div>
          <div class="col-md-12 col-sm-12 col-lg-12">
           <div class="form-group">
            <label class="sr-only" for="name">File</label>
            <input class="form-control" type="file" id="file" name="file" accept="image/gif, image/jpeg, image/jpg,image/png" placeholder="file*"/>
            <p class="help-block text-danger"></p>
          </div>
          </div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-lg-12">
        <!--   <div class="col-md-6 col-md-offset-4"> -->
           <button type="submit" value="submit" class="btn btn-primary btn-large btn-block"style="border: none">
            Create
           </button>
          </div>
         </div>
        </div>
       </div>
      </form>
    </div>
  </div>
  <!-- Panel Content -->
 

  <!-- Vendor: Javascripts -->
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
<script type="text/javascript">
</script>
</body>