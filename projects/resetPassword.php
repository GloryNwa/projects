
<?php
ob_start();
session_start();
include('database/confiq.inc.php');

//  Password Reset Script
if (isset($_POST['password'])) {

    $password = mysql_real_escape_string($_POST['password']);

      if (!empty($password)) {

        $password_hash = md5($password);
          $email = $_SESSION['email'];

            $query = "UPDATE `users` SET `password` = '$password_hash' WHERE `email` = '$email'";

              if ($query_run = mysql_query($query)) {

                header('Location: login.php');
                   mail($username, 'Password reset', 'Hello your new password is '. $password);

                  }
                }
 
            }else{
              echo mysql_error();
            }

      ?>

 <!-- Top bar -->

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
    text-decoration:none;  
    color:  #009efb;               
  }
</style>

<body class="expand-data panel-data">
    
    <!-- Top bar -->




    <!-- side nav -->


   
  <!-- Options Panel -->
  <div class="panel-content">
    <div class="lgn-wrp grysh">
      <div class="bg-img" style="background-image: url(images/resource/bg-img1.png);"></div>
      <div class="lgn-innr">
       <?php 
       if (isset( $_SESSION['alert'])){
         echo  $_SESSION['alert']; 
         unset( $_SESSION['alert']);
       }
       ?>
        <div class="widget lgn-frm">
          <div class="frm-tl">
               <a href="#" title="">
                <img src="images/logo.png" alt=""/>
               </a>
                
             </div>
             <h5 style="color: #009efb">Reset your password here:</h5><br>
          <form class="form-horizontal" method="POST" action="resetPassword.php">            

            <div class="row mrg10">
              <div class="col-md-12 col-sm-12 col-lg-12">
                <input class="brd-rd5" type="password" placeholder="Enter New Password"  name="password" value="" required />               
              </div>                   
              <div class="col-md-12 col-sm-12 col-lg-12">
                <button type="submit" value="submit" class="brd-rd5 blue-bg act-btn">Reset Password</button>
              </div><br><br><br>
            </div>
          </form>   
        </div>
      </div>
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