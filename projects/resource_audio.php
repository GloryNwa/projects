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


<div class="panel-content">
    <div class="filter-items">
        <div class="row grid-wrap mrg20" >
            <div class="col-md-12 grid-item col-sm-12 col-lg-12" >
                <div class="traffic-src widget" >
                    <div class="row">


                        <div class="col-md-11">
                   <?php
                    

                   
                    if(isset($_GET['id'])){   
                     $id = $_GET['id'];
                      $query = "SELECT * FROM `resources` WHERE `id` = $id" ;
                       if ($query_run = mysql_query($query)){

                    
                       while($query_row = mysql_fetch_assoc($query_run)){
                           
                            $title     = $query_row['title'];
                           
                            $file = $query_row['file'];
                            
                            $id  = $query_row['id'];

                        ?>
                   <!--     <div class="traffic-chart-wrp" style="background: #272c33;"> -->

                          <!--   <div align="center" class="embed-responsive embed-responsive-16by9"> -->
                             <audio autoplay loop="true" preload="auto" class="embed-responsive-item" controls  style="width:100%;border-radius: 15px; background-color: #000">
                               <source  src=<?php echo "ResourceUploads/" .$file." style=width:40%";?> id="audio" type="audio/mp3" autobuffer shuffle>
                              </audio>
                           <!--   </div>
 -->                                <br>
                  
                                <!-- </div> --> <br>
                                 <h6 style=""><?php echo $title; ?></h6>
                        
                            <?php

                               }
                              }
                            }
                          ?>
                         <hr>
                        </div>
                    <script>                      
                          document.addEventListener('play', function(e){
                          var audios = document.getElementsByTagName('audio');
                          for(var i = 0, len = audios.length; i < len;i++){
                              if(audios[i] != e.target){
                                  audios[i].pause();
                              }
                          }
                      }, true);

                  </script>
                     
               <style>
                  .comment_box{
                   padding-top:30px;
                }
              </style>

           <?php
          // This script is selecting and fetching only videos from resources table//
         
     $query = "SELECT * FROM `resources` ORDER BY `id` DESC LIMIT 9" ;
         if ($query_run = mysql_query($query)) {

    
           while($query_row = mysql_fetch_assoc($query_run)){
               
            $title = $query_row['title'];
               
            $file = $query_row['file'];
            $file_type = $query_row['file_type'];   
            $id  = $query_row['id'];

             
            if($file_type == 'audio'){
                     
               $fonticon = "fa-file-audio-o";
               
            ?>

              <div class="col-md-4 col-sm-6 col-lg-4 resource-holder">
                <div class="serv-bx styl2 brd-rd5">
                  <i class="fa <?php echo $fonticon ; ?>" style="font-size:48px;color:black"></i>
                    <p class="col"><?php echo (substr($title,0,60)) ; ?></p>
                   <div class="serv-inkkkf">
                    <div id="data">            
                    </div>
                  <?php
                   if($file_type == 'audio'){              
                   echo'<a href="?id='.$id.'">
                      <button class="btn btn-danger btn-xs">Listen&nbsp;&nbsp; <i class="fa fa-headphones" style="font-size:15px; color:#000"></i></button></a>';                
                  
                      }
                   ?>            
                   
                  </div>
                </div>
               </div>
              <?php
                }
                 }
                }
              ?>
            
             </div><br><br>
              Was this song made your day?<br><br><br><a href="https://www.stylecraze.com/articles/top-9-anti-aging-products-available-in-india/?ref=jpc_recommend" style="background-color:#c0c0c0; border-radius: 30px; padding: 20px">Yes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" style="background-color:#c0c0c0; border-radius: 35px; padding: 22px">No</a>      
            </div>
             <a href="https://answersafrica.com/african-quotes-sayings.html"> Hey</a>
        </div>

    </div>
</div>

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





















