<?php
include('includes/header_blade.php');
ob_start();
// session_start();
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
  <div class="col-md-12 grid-item col-sm-12 col-lg-12">
      <div class="stat-box widget bg-clr3">
          <div class="wdgt-ldr">
          </div>

          <i class="fa fa-bullhorn" style="font-size: 18px;"></i>
          <div class="stat-box-innr">
           <div style="text-align:center;  color: #fff">INFORMATION DESK</div>
            <h4></h4>
          </div>
          <span></span>
      </div>
  </div>

  <div class="panel-content">
    <div class="widget pad50-40">
      <div class="timeline-wrp">
        <div class="timeline-innr">
          <div class="timeline-label">
        <!--     <span class="brd-rd5 blue-bg"></span> -->
          </div>


               <?php


                 $post_id  = $_GET['post'];
                  
               
                 $query = "SELECT `title`,`text_body`, `file`, `time` FROM `information` WHERE `id`='$post_id'";
                       global $post_id;
                if ($query_run = mysql_query($query)) {
                   while($query_row = mysql_fetch_assoc($query_run)){

                    
                        $title   = $query_row['title'];
                        $text_body= $query_row['text_body'];
                        $file  = $query_row['file'];            
                        $time = $query_row['time'];
                        ?>


          <div class="timeline-block">
            <span class="pst-tm">
             
 <span style="font-size:13px; color: gray"><i class="ion-clock">&nbsp;&nbsp;<?php echo date('M j, Y H:i', strtotime($time)) ?></i></span>
                 </span>

            <i class="sts away"></i>
            <div class="brd-rd5 act-pst">
               <div class="center " style="" class="img-thumbnail"><img src=<?php echo "InfoUploads/" .$file." style=width:100%;height:550px";?>></div><br><br>
              <div class="act-pst-inf">
                <div class="act-pst-inr"><br>
                  <h5>
                    <h4><?php echo $title ?></h4><br><br>
                  </h5>
                  <a href="#" title=""></a>
                </div>
                <div class="act-pst-dta">
                  <p style="font-size: 17px"><?php echo $text_body ?></p>
                </div>
              </div><br>
              <a href="all_info.php">
                 <button  class="btn btn-info btn-xs" style="text-align: center;background-color: #009efb;border:none;" >Go Back</button> 
             </a>

            </div>
          </div>
        </div>
   <?php

 }

}

   ?>
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