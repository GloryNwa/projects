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
<!-- Topbar -->

<?php

include ('includes/Top_bar.php');


include ('includes/nav.php');



?>
<!-- Topbar -->
  <!-- Side Header -->

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
         <!-- <i class="fas fa-bullhorn" style="font-size: 50px"></i>

          <h2 class="widget-title" style="text-align: center; color: #009efb">Information Desk</h2><br><br> -->
       <style>

div {
    line-height: 20px;
  }


.resource-holder:hover{
    /*overflow: visible; 
    white-space:none; 
    width: auto;
    position: absolute;*/
    border:1px solid #D3D3D3;
   
}
#data:hover+div {
    margin-top:20px;
}
</style>
     


 <?php
  // $post_id  = $_GET['post'];

         $query = "SELECT * FROM `information` ORDER BY `id`DESC LIMIT 20";
                if ($query_run = mysql_query($query)) {


         while($query_row = mysql_fetch_assoc($query_run)){
             
              $title     = $query_row['title'];
              $text_body = $query_row['text_body'];
              $file = $query_row['file'];
              $time  = $query_row['time'];
             $id  = $query_row['id'];

          ?>
          <div class="timeline-block resource-holder">
          <span style="font-size:13px; color: gray"><i class="ion-clock">&nbsp;&nbsp;<?php echo date('M j, Y H:i', strtotime($time)) ?></i></span>
   

            <i class="sts away"></i>
            <div class="brd-rd5 act-pst">
              <img src=<?php echo "InfoUploads/" .$file."  style=width:80px;height:50px"?>>
              <div class="act-pst-inf">
                <div class="act-pst-inr">
                 
                  <?php echo '<a href="single_info.php?post='.$id.'"><strong>'.$title.'</strong>';?>
                   <!--  <a href=' '><?php echo $title ?></a><br><br> -->
                
                  <a href="#" title="">
                </div>
                <div class="act-pst-dta">
                  <p><?php echo(substr($text_body, 0,300))?></p>
                </div>
              </div>
              <?php echo '<a href="single_info.php?post='.$id.'">';?>
               <button  class="btn btn-info btn-xs" style="text-align: center;background-color: #009efb;border:none;"><span class="fa fa-eye"> View More</span></button></a>
                    
            </div>

          </div>

          <?php

        }
      }

          ?>

       <!--  @endforeach

        @else
            <div><img src="{{ URL::to("/")}}/images/sneeze1.png" style="height: 50px;"></div>
     @endif  
       {{$informations->links()}} -->
        </div>

  
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