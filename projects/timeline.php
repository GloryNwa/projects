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

<div class="panel-content" style="margin-right: 10px; margin-left: auto; padding-left:70px;padding-right: 50px;">
    <div class="widget pad50-65">
        <div class="profile-wrp">
            <div class="row">
                <div class="col-md-6">
                  <div class="usr-actvty-wrp widget pad50-40">
                   <img src="" class="" alt="" id="image" style="display:none;width:100px;"/>
                 </div>
                    <!--      <div style="padding-right: 900px"> -->
                 <form method="post" action="timeline_action.php" enctype="multipart/form-data">
                      
                  <textarea name="text_body" placeholder="What's in your mind" required="required"
                       maxlength="20000"           style="width:100% !important;"></textarea>
                 <div class="cnt-opt">
                   <div class="cnt-opt-lst">
                    <span>
                       <div class="col-md-6 col-sm-6 col-lg-6">
                       <div class="form-group">
                        <label class="sr-only" for="name">File</label>
                        <input class="form-control" type="file" id="file" name="file" accept="image/gif, image/jpeg, image/jpg,image/png" />
                       
                      </div>
                      </div>
                    </span>
                   </div>
                    
                   </div>
                     <button class="btn btn-success btn-xs green-bg"  type="submit" name="submit" value="submit">Post</button>
                  </form>
                 <br><br><br><br><br>
                    <!--    </div> -->
                    <!--    </div> -->

               <script>
                  document.getElementById("files").onchange = function () {
                      var reader = new FileReader();

                      reader.onload = function (e) {
                          // get loaded data and render thumbnail.
                          $("#image").show();
                          document.getElementById("image").src = e.target.result;
                      };

                      // read the image file as a data URL.
                      reader.readAsDataURL(this.files[0]);
                  };
               </script>
           
          <?php
             
                  $query = "SELECT `timeline`.`id`,`text_body`,`file`,`name`,`timeline`.`time`, `profile_pic` FROM `timeline` LEFT JOIN `profiles` ON `timeline`.`user_id` = `profiles`.`user_id` ORDER BY `id` DESC ";

                   if ($query_run = mysql_query($query)) {

                   
                                            
                        while($query_row = mysql_fetch_assoc($query_run)){
                         
                          $text_body = $query_row['text_body'];
                          $profile_pic = $query_row['profile_pic'];
                          $name  = $query_row['name'];
                          $file  = $query_row['file'];
                          $time = $query_row['time']; 
                          $id = $query_row['id']; 

                          if(!empty($profile_pic)){
          // ?>
                              
                           <img class="brd-rd50 img-responsive" id="image" src=<?php echo "profile_picsFolder/" .$profile_pic." style=width:70px";?>><br>   
                        <?php
                         }else{
                               ?>
                                <img class="brd-rd50 avatar" id="image" src="images/anonny.jpg" style="width:40px"/>';
                             <?php                               
                             }

                            ?>
                             <div style="color:#009efb;font-size:18px;"><?php echo $name; ?><br>
                               <span style="font-size:13px; color: gray"><i class="ion-clock">&nbsp;&nbsp;<?php echo date('M j, Y H:i', strtotime($time)) ?></i></span><br><br>
                               <?php echo '<a style="line-height: 120%;padding-top: 10px;font-size:19px"
                                href="single_timeline.php?post='.$id.'"><strong>'.$text_body.'</strong></a>';?>
                               <img class=" img-responsive" id="image" src=<?php echo "timelineUploads/" .$file." style=width:95%";?>>                                     
                            </div>                                 
                            <hr />
                                 
                         <?php
                                    
                           }
                                   
                         }

                     ?> 
                            
                  </div>

                <div class="col-md-2 col-sm-2 col-lg-3 xs-hidden" style="position:fixed; margin:0 0 0 550px;">
                 <div class="col-md-7 offset-2" >
                    <?php
                  // Side bar script , fetching from information table!!
                     
                     $query = "SELECT * FROM `information` ORDER BY `id` DESC LIMIT 2";

                      if($query_run = mysql_query($query)){
                      
                    
                        while($query_row = mysql_fetch_assoc($query_run)){
                                       
                          $title     = $query_row['title'];
                          $text_body = $query_row['text_body'];
                          $file = $query_row['file'];
                          $time  = $query_row['time'];
                          $id  = $query_row['id'];


                          ?>  
                    <div class="timeline-block resource-holder">
                     <div class="pst-tm">                                                                      
                        <div  style="background: #2c3e50; text-align:center">
                          <div class="act-pst-inf">
                             <div class="act-pst-inr">
                                         <br />
                                  <p>
                                   <div class="center " style="" class=""><img src=<?php echo "InfoUploads/" .$file." style=width:60%; height:10px";?>></div>
                                     <?php echo '<a href="single_info.php?post='.$id.'" style="color:#fff; font-size:12px"><strong>'.$title.'</strong></a>';?>
                                  </p>
                                  <a href="#" title=""></a>
                                  <div class="act-pst-dta">
                                   <span style="float:right"><i class="ion-clock"></i><?php echo date('M j, Y H:i', strtotime($time)) ?></span>
                                  </div> 
                                     <?php echo '<a href="single_info.php?post='.$id.'">
                                      <span class="fa fa-eye"style="text-align: center;color: #009efb;"> View More</span></a>';?>
                                       </div>
                                          
                                       </div>                                     
                                
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
                          
                  </div>

              </div>                    
           </div><br><br>


        
<!-- Panel Content -->

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