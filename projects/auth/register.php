
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

<body class="expand-data panel-data">
    
    <!-- Top bar -->




    <!-- side nav -->


   
  <!-- Options Panel -->
  <div class="panel-content">
    <div class="lgn-wrp grysh">
      <div class="bg-img" style="background-image: url(../images/resource/bg-img1.png);"></div>
      <div class="lgn-innr">
        <div class="widget lgn-frm">

         <?php 
              if(isset( $_SESSION['alert'])){

                  echo  $_SESSION['alert']; 

                  unset( $_SESSION['alert']);
               }
         ?>
          <div class="frm-tl">
               <a href="#" title="">
                <img src="../images/logo.png" alt=""/>
               </a>
                  <h4 >Welcome to Loveworld Networks Portal</h4>
             </div>
             <h5 style="color: #009efb">Fill in your details:</h5><br>
          <form  method="POST" action="register_action.php">
            <div class="row mrg10">
             <!--    <form class="form-horizontal" method="POST" action="register_action.php"> -->
                
                   <div style="">
                    <div class="form-group">
                            <!-- <label for="name" class="col-md-4 control-label" style="">First Name</label> -->

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="firstname" placeholder="First Name"value=""
                                   required autofocus>
                             <span class="help-block">
                                 <strong></strong>
                          </span>
                        </div>
                    </div>

                    <div class="form-group">
                       <!--  <label for="name" class="col-md-4 control-label">Last Name</label> -->

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="lastname"placeholder="Last Name" value=""
                                   required autofocus>
                         
                            <span class="help-block">
                                   <strong></strong>
                           </span>
                        </div>
                    </div>
                    <div class="form-group">
                      <!--   <label  class="col-md-6 control-label">E-Mail Address</label>
 -->
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email"placeholder=" Email" value=""
                                   required>
                                <span class="help-block">
                                     <strong></strong>
                             </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="network"></label>
                         <div class="col-md-12">
                                <span class="help-block">
                                 <strong></strong>
                               </span>
                            </div>
                                <select name="network" required class="form_control">
                                    <option value="">Select Network</option>
                                    <option value="">Loveworld USA</option>
                                    <option value="">Loveworld NEWS</option>
                                    <option value="">Loveworld TV</option>
                                    <option value="">Loveworld Radio</option>
                                    <option value="">Loveworld India</option>   
                                </select>
                              <span class="help-block">
                                <strong></strong>
                           </span>          
                        </div>
                    </div><br><br>

                    <div class="form-group">
                      <!--   <label for="password" class="col-md-4 control-label">Password</label> -->

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password"placeholder=" Password" required>
                                <span class="help-block">
                                 <strong></strong>
                               </span>
                        </div>
                    </div>
                    <div class="form-group">
                      <!--   <label class="col-md-6 control-label">Confirm Password</label> -->
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div>
                    <div class="form-group">
                        <div class="col-md-12 ">
                            <button type="submit" class="btn btn-primary" style="background-color: #009efb;" value="submit">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
                <div class="col-md-12 col-sm-12 col-lg-12">
                    Already have an account ?<a class="n" href="login.php" title=""style="color:#009efb; ">Login</a>
                </div>

            </div>
        </div>
        <footer>
            <p>Copyright
                <a href="#" title="">LoveWorld Networks</a>  - 2018</p>
        </footer>
    </div>
    <!-- Login Wrapper -->
</div>

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
