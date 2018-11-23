
<?php
session_start();

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
  <link rel="stylesheet" href="../css/icons.min.css" type="text/css">
  <link rel="stylesheet" href="../css/main.css" type="text/css">
  <link rel="stylesheet" href="../css/responsive.css" type="text/css">

  <!-- Color Scheme -->
  <link rel="stylesheet" href="../css/color-schemes/color.css" type="text/css" title="color3">
  <link rel="alternate stylesheet" href="../css/color-schemes/color1.css" title="color1">
  <link rel="alternate stylesheet" href="../css/color-schemes/color2.css" title="color2">
  <link rel="alternate stylesheet" href="../css/color-schemes/color4.css" title="color4">
  <link rel="alternate stylesheet" href="../color-schemes/color5.css" title="color5">
</head>


<style>
 a:hover{
    text-decoration:none;  
    color:  #009efb;               
  }
</style>
<body class="expand-data panel-data">
<!-- Topbar -->

   
  <!-- Options Panel -->
  <div class="container">
  <div class="panel-content">
    <div class="lgn-wrp grysh">
      <div class="bg-img" style="background-image: url(../images/resource/bg-img1.png);"></div>
      <div class="lgn-innr">
     
        <div class="widget lgn-frm">
          <div class="frm-tl">
             <?php 
              if(isset( $_SESSION['alerte'])){

                  echo  $_SESSION['alert']; 

                  unset( $_SESSION['alert']);
               }
               ?>
               <a href="#" title="">
                <img src="../images/logo.png" alt=""/>
               </a>
                  <h4 >Welcome to Loveworld Networks Portal</h4>
             </div>
             <h5 style="color: #009efb">Fill in your details:</h5><br>
          <form  method="POST" action="login_action.php">
            <div class="row mrg10">
              <div class="col-md-12 col-sm-12 col-lg-12">
                <input class="brd-rd5" type="text" placeholder="Email"  name="email" value="" required />
              
                  <span class="help-block">
                   <p></p>
                 </span>                         
              </div>
              <div class="col-md-12 col-sm-12 col-lg-12">
                <input class="brd-rd5" type="password" placeholder="Password" name="password" value="" required />
                 <span class="help-block">
                  <p></p>
                </span>                        
              </div>
              <div class="col-md-12 col-sm-12 col-lg-12">
                <span class="chbx">
                  <input type="checkbox" />
                  <input type="checkbox" name="remember"  id="">
                  <label for="chk1">Remember Me</label>
                </span>
              </div>
              <div class="col-md-12 col-sm-12 col-lg-12">
                <button class="green-bg brd-rd5" type="submit">Login Now</button>
              </div>
              <div class="col-md-12 col-sm-12 col-lg-12">
                <a href="resetPassword.php" title="" class="frgt">Forget password?</a>
                
              </div>
              <div class="col-md-12 col-sm-12 col-lg-12">
                <a class="brd-rd5 blue-bg act-btn" href="register.php" title="">Create An Account</a>
              </div><br><br><br>

            </div>
          </form>
        </div>
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
  <script src="../public/js/jquery.min.js" type="text/javascript"></script>
  <!-- Vendor: Followed by our custom Javascripts -->
  <script src="../public/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../public/js/select2.min.js" type="text/javascript"></script>
  <script src="../public/js/slick.min.js" type="text/javascript"></script>

  <!-- Our Website Javascripts -->
  <script src="../public/js/isotope.min.js" type="text/javascript"></script>
  <script src="../public/js/isotope-int.js" type="text/javascript"></script>
  <script src="../public/js/jquery.counterup.js" type="text/javascript"></script>
  <script src="../public/js/waypoints.min.js" type="text/javascript"></script>
  <script src="../public/js/highcharts.js" type="text/javascript"></script>
  <script src="../public/js/exporting.js" type="text/javascript"></script>
  <script src="../public/js/highcharts-more.js" type="text/javascript"></script>
  <script src="../public/js/moment.min.js" type="text/javascript"></script>
  <script src="../public/js/jquery.circliful.min.js" type="text/javascript"></script>
  <script src="../public/js/fullcalendar.min.js" type="text/javascript"></script>
  <script src="../public/js/jquery.downCount.js" type="text/javascript"></script>
  <script src="../public/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
  <script src="../public/js/jquery.formtowizard.js" type="text/javascript"></script>
  <script src="../public/js/form-validator.min.js" type="text/javascript"></script>
  <script src="../public/js/form-validator-lang-en.min.js" type="text/javascript"></script>
  <script src="../public/js/cropbox-min.js" type="text/javascript"></script>
  <script src="../public/js/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="../public/js/ion.rangeSlider.min.js" type="text/javascript"></script>
  <script src="../public/js/jquery.poptrox.min.js" type="text/javascript"></script>
  <script src="../public/js/styleswitcher.js" type="text/javascript"></script>
  <script src="../public/js/main.js" type="text/javascript"></script>
</body>

</html>