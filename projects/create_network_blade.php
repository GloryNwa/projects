<?php
include('includes/header_blade.php');
ob_start();
session_start();
include('database/confiq.inc.php');



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
<div class="pg-tp">
    <!-- <i class="ion-cube"></i> -->
    <!-- <div class="pr-tp-inr"> -->
    <!-- <h4>LoveWorld Networks</h4> -->
  

    <!-- @if(session('response'))
        <div class="alert alert-{{session('type')}}">{{session('response')}}</div>
    @endif -->
    <span></span>
</div>

</div><br><br>
<!-- Page Top -->

<!-- Page Top -->
<div class="container" style="max-width: 700px; padding-top:70px ">
    <div class="panel-content">
        <div class="widget pad40-50">
            <div class="widget-title2">
                <h4>Create Networks</h4>
                <span></span>
            </div>
            <form class="form-wrp" method="POST" action="create_network_blade.php">
              
        <div class="form-group">
         <div class="row mrg20">
          <div class="col-md-12 col-sm-12 col-lg-12">
            <input class="brd-rd5" type="text" name="network_name" placeholder="Networks*" required="required" />
          </div>
          
          
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-lg-12">
        <!--   <div class="col-md-6 col-md-offset-4"> -->
           <button type="submit" class="btn btn-primary btn-large btn-block" style="border: none">
           Create
           </button>
          </div>
      </div>
      </div>
    </div>
   </form>
  </div>
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