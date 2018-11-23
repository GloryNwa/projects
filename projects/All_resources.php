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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
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


    <div class="panel-content">
        <div class="filter-items">
            <div class="row grid-wrap mrg20">
                <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                    <div class="stat-box widget bg-clr1">
                       
                           <i class="fa fa-book" style="font-size: 18px;"></i>
                        <div class="stat-box-innr">
                            <div style="text-align:center;  color: #fff">RESOURCE CENTER</div>
                            <h5></h5>
                        </div>
                        <span></span>
                    </div>
                </div>  
               <div class="widget pad50-65">
                 <div class="widget-title2">
                  <!--  <i class="fab fa-osi" style="font-size: 50px"></i>
                    <h4 class="widget-title">Resource Center</h4> -->
              </div>
              <div class="rmv-ext6">
                <div class="row mrg20">

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

     $query = "SELECT * FROM `resources` ORDER BY `id` DESC LIMIT 21" ;
         if ($query_run = mysql_query($query)) {

    
           while($query_row = mysql_fetch_assoc($query_run)){
               
            $title = $query_row['title'];
               
            $file = $query_row['file'];
            $file_type = $query_row['file_type'];   
            $id  = $query_row['id'];

          
        
            if($file_type == 'video'){
                     
               $fonticon = "fa-file-video-o";
          
             
            }else if($file_type == 'audio'){
              $fonticon = "fa-file-audio-o";


            }else if($file_type == 'document'){

              $fonticon = "fa-file";  
               }  
            ?>

              <div class="col-md-4 col-sm-6 col-lg-4 resource-holder">
                <div class="serv-bx styl2 brd-rd5">
                  <i class="fa <?php echo $fonticon ; ?>" style="font-size:48px;color:black"></i>
                  <?php
                  
                  
                  ?>
                  <div class="serv-inkkkf">
                  <div id="data">            
                  
                  <p class="col"><?php echo (substr($title,0,60)) ; ?></p>
                  </div>
                <?php
                         
                
                   if($file_type == 'video'){
                      
                
                   echo'<a href="watch_resource.php?id='.$id.'"
                    <button  class="btn btn-danger btn-xs" style="background-color: #009efb;border:none; max-height: 70px">Play Video  <i class="fa fa-play"></i></button> 
                    </a>';
                   ?>
                     <?php
                     }else if($file_type == 'audio'){

                   echo'<a href="resource_audio.php?id='.$id.'">
                       <button class="btn btn-danger btn-xs">Listen &nbsp;&nbsp; <i class="fa fa-headphones" style="font-size:15px; color:#000"></i></button></a>';   
                    

                     }else if($file_type == 'document'){
                     

                     ?>
                   <a onclick="return confirm('Are you sure?')" href="<?php echo "ResourceUploads/" .$file.'' ;?>" " download="<?php echo $file ;?>"><button class="btn btn-danger btn-xs"  border: none ">Download&nbsp;&nbsp;<i class="fa fa-download"></i></button></a>
                     <?php
                      }

                    ?>
                  </div>
                </div>
               </div>
              <?php
                } 
             }
           ?>
             <!--    <div class="alert alert-info"></div> -->      
        </div>
      </div>
     </div>    
   </div>
 </div>
</div>

    <!-- Panel Content -->
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