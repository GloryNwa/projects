
 <!-- Top bar -->

<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
  <!-- Meta-Information -->
  <title>LoveWorld Networks | Portal</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Vendor: Bootstrap 4 Stylesheets  -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

  <!-- Our Website CSS Styles -->
  <link rel="stylesheet" href="css/icons.min.css" type="text/css">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <link rel="stylesheet" href="css/responsive.css" type="text/css">

  <!-- Color Scheme -->
  <link rel="stylesheet" href="css/color-schemes/color.css" type="text/css" title="color3">
  <link rel="alternate stylesheet" href="css/color-schemes/color1.css" title="color1">
  <link rel="alternate stylesheet" href="css/color-schemes/color2.css" title="color2">
  <link rel="alternate stylesheet" href="css/color-schemes/color4.css" title="color4">
  <link rel="alternate stylesheet" href="/color-schemes/color5.css" title="color5">
</head>



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

  <div class="container" style="max-width: 800px; padding-top:70px ">
  <div class="panel-content">

    <div class="widget pad50-65">
     <?php 
       if (isset( $_SESSION['alert'])){
         echo  $_SESSION['alert']; 
         unset( $_SESSION['alert']);
       }
       ?>
      <div class="widget-title2">
        <h4>Create Event</h4>
        <span></span>
      </div>
      <form class="form-wrp" method="POST" action="event_action.php">
       
        <div class="row mrg20">
          <div class="col-md-6 col-sm-6 col-lg-6">
            <input class="brd-rd5" type="text" name="title" maxlength="70" placeholder="Title*" />
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6">
            <input class="brd-rd5" type="text" name="description" maxlength="300" placeholder="Description*" required="requred" />
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6">
            <input class="brd-rd5" type="text" name="date" placeholder="Date*" required="required" />
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6">
            <input class="brd-rd5" type="text" name="venue" placeholder="Venue*" required="required" />
          </div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-lg-12">
        <!--   <div class="col-md-6 col-md-offset-4"> -->
           <button type="submit" class="btn btn-primary btn-large btn-block" style="border: none">
            Submit
           </button>
          </div>
      </div>
      </form>
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
          <a href="#" title="" >LoveWorld Networks</a> - 2018</p>
      </footer>
    </div>
    <!-- Login Wrapper -->
  </div>
  <!-- Panel Content -->


  <!-- Vendor: Javascripts -->
  <script src="js/jquery.min.js" type="text/javascript"></script>
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
  <script src="js/fullcalendar.min.js" type="text/javascript"></script>
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
</body>

</html>