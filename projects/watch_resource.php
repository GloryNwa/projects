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


                        <div class="col-md-9">
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
                        <div class="traffic-chart-wrp" style="background: #272c33;">
                          <div align="center" class="embed-responsive embed-responsive-16by9">
                            <video autoplay shuffle class="embed-responsive-item" controls  style="width:100%border-radius: 15px;">
                               <source  src=<?php echo "ResourceUploads/" .$file." style=width:40%";?> type="video/mp4">
                            </video>                            
                             </div><br>
                            </div> <br>
                             <h6 style=""><?php echo $title; ?></h6>                        
                            <?php
                               }
                              }
                            }
                          ?>
                         <hr>
                        </div>
                        <style>
                            .comment_box{
                                padding-top:30px;
                            }
                        </style>
          <?php
           if(isset($_POST['comment']) &&isset($_POST['postid'])){                   
                $comment = $_POST['comment'];
                $post_id = $_POST['postid'];
                $time =  time();

                if(!empty($comment)&&!empty($post_id)) {
                  $user_id = $_SESSION['user_id'];
                  $name= $_SESSION['firstname']; 
                  $query = "INSERT INTO `resource_comments` VALUES('','$user_id','$post_id','".mysql_real_escape_string($comment)."','$time')";

                  if($query_run = mysql_query($query)){

                        $_SESSION['alert'] ='<div class="alert alert-success">Thanks for leaving us a comment!</div>';
                        header('Location: watch_resource.php?id='.$post_id);exit;
                  }else {
                       $_SESSION['alert'] ='<div class="alert alert-danger">Submission failed, try again later!</h4>';
                        header('Location: watch_resource.php?id='.$post_id);exit;
                   
                        }


                       }

                     }
                 
                  ?>
             
                        <div class="col-md-3">

                          <div class="comment_box_holder" style="background: #272c33;padding:20px;border-radius: 7px;">
                            <div style="min-height:200px;max-height:390px;overflow: scroll;overflow-x: hidden">

                             
                             <?php

// $query = "SELECT table1.ColA, table2.ColC FROM table1, 
//             table2 WHERE table1.uid = table2.uid and table1.value=$value";
// OR

// $query = "SELECT table1.ColA, table2.ColC FROM table1 INNER JOIN table2 
//                ON (table1.uid = table2.uid) WHERE table1.value=$value";
              $id = $_GET['id'];

                  $query = "SELECT `comments`,`profile_pic`,`name`,`resource_comments`.`time` FROM `resource_comments` LEFT JOIN `profiles` ON `resource_comments`.`user_id` = `profiles`.`user_id`  WHERE `post_id`='$id'";

                   if ($query_run = mysql_query($query)) {

                   
                                            
                        while($query_row = mysql_fetch_assoc($query_run)){
                         
                          $comments = $query_row['comments'];
                          $profile_pic = $query_row['profile_pic'];
                          $name        = $query_row['name'];
                          $time = $query_row['time']; 

                         
                               
                           ?>
                           
                           <div class="comment_box row">
                           <div class="col-md-3">  

                           </div>    
                            <div class="col-md-9 ">
                            <?php 
                              if(!empty($profile_pic)){
                                ?>

                                 <img class="brd-rd50 img-responsive" id="image" src=<?php echo "profile_picsFolder/" .$profile_pic." style=width:40px";?>>&nbsp;&nbsp;&nbsp;&nbsp;

                                 <?php

                              }else{
                                ?>

                               <img class="brd-rd50 avatar" id="image" src="images/anonny.jpg" style="width:40px"/>';

                                 <?php

                              }
                              ?>
                            
                               <div style="color:#b1bfd2;font-size:13px;"><?php echo $name; ?> <br>
                                <span style="font-size:11px; color: gray"><i class="ion-clock"> <?php echo $time; ?></i></span>
                                 </div>
                                 <p style="line-height: 120%;padding-top: 10px;"><?php echo $comments; ?>
                                 </div>
                                  <hr />
                                 </div>                             
                                <?php                               
                                
                                 }
                               }
                            ?>
                             </div>
                           
                             <form method="POST" action='watch_resource.php'>
                               <input class="form-control" type="hidden" value=<?php echo  $_GET["id"]?>  name="postid"/>
                               <div class="form-group">
                                   <textarea class="form-control" id="comment" name="comment" value="comment"  placeholder="Add comments"></textarea>
                               </div>
                                <div class="form-group">
                                  <button type="submit" class="btn btn-danger btn-xs" style="">
                                    Post Comment
                                  </button>
                                   </div>
                                </form>
                            </div>
                            <i class="fa fa-calendar-alt" style="font-size:50px" ;></i><br><br>
                        </div>
                    </div>
                </div>
            </div>
<div class="col-md-12 grid-item col-sm-12 col-lg-12" style="background-color:">
<div class="traffic-src widget">
<h4 class="widget-title "><a href="#" class=""></a></h4>
 <div class="trfc-cnt">
<div class="row">
 <?php
  // This script is selecting and fetching only videos from resources table//
         
     $query = "SELECT * FROM `resources` ORDER BY `id` DESC LIMIT 9" ;
         if ($query_run = mysql_query($query)) {

    
           while($query_row = mysql_fetch_assoc($query_run)){
               
            $title = $query_row['title'];
               
            $file = $query_row['file'];
            $file_type = $query_row['file_type'];   
            $id  = $query_row['id'];

             
            if($file_type == 'video'){
                     
               $fonticon = "fa-file-video-o";
               
            ?>

              <div class="col-md-4 col-sm-6 col-lg-4 resource-holder">
                <div class="serv-bx styl2 brd-rd5">
                  <i class="fa <?php echo $fonticon ; ?>" style="font-size:48px;color:black"></i>
                    <p class="col"><?php echo (substr($title,0,60)) ; ?></p>
                   <div class="serv-inkkkf">
                    <div id="data">            
                    </div>
                  <?php
                   if($file_type == 'video'){              
                   echo'<a href="?id='.$id.'">
                    <button  class="btn btn-info btn-xs" style="background-color: #009efb;border:none; max-height: 70px">Play Video  <i class="fa fa-play"></i></button> 
                    </a>';
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
              
             </div>        
            </div>
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







































