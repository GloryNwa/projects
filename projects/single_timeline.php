

<?php
ob_start();
include('includes/header_blade.php');

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
                <div class="col-md-12">
                 <?php

                 if(isset($_GET['post'])){
                 $post_id  = $_GET['post'];
                  
               
                 $query = "SELECT `text_body`, `file`, `time` FROM `timeline` WHERE `id`='$post_id'";
                       global $post_id;
                if ($query_run = mysql_query($query)) {
                   while($query_row = mysql_fetch_assoc($query_run)){

                    
                        $text_body= $query_row['text_body'];
                        $file  = $query_row['file'];            
                        $time = $query_row['time'];
                        ?>
         <div class="usr-actvty-wrp widget pad50-40">           
          <span style="font-size:13px; color: gray"><i class="ion-clock">&nbsp;&nbsp;<?php echo date('M j, Y H:i', strtotime($time)) ?></i></span>
                 </span>
            <br><br>
            <i class="sts away"></i>
            <div class="brd-rd5 act-pst">
               <div class="center " style="" class="img-thumbnail"><img src=<?php echo "timelineUploads/" .$file." style=width:70%;";?>></div>
              <div class="act-pst-inf">
                <div class="act-pst-inr">
                  <h5>
               
                  </h5>
                  <a href="#" title=""></a>
                </div>
                <div class="act-pst-dta">
                  <p style="font-size: 17px"><?php echo $text_body ?></p>
                </div>
              </div>
              <a href="timeline.php">
                 <button  class="btn btn-info btn-xs" style="text-align: center;background-color: #009efb;border:none;" >Go Back</button> 
             </a>

            </div>
             <?php

             }
             }
            }

           ?>
          </div>
        <?php

// This script is inserting comments into timeline comments table
 
           if(isset($_POST['comment']) &&isset($_POST['post_id'])){                   
                $comment = $_POST['comment'];
                $post_id = $_POST['post_id'];
             

                if(!empty($comment)&&!empty($post_id)) {
                  $user_id = $_SESSION['user_id'];
                  $name = $_SESSION['firstname']; 
                 
               
                  $query = "INSERT INTO `timeline_comments` VALUES('','$user_id',' $post_id ','".mysql_real_escape_string($comment)."',now())";

                  if($query_run = mysql_query($query)){

                        echo'<div class="alert alert-success">Thanks for leaving us a comment!</div>';//
                        header("Location:single_timeline.php?post=".$post_id);exit;
                  }else {
                       $_SESSION['alert'] ='<div class="alert alert-danger">Submission failed, try again later or contact the admin!</h4>';
                        header('Location: single_timeline.php?post='.$post_id);exit;
                   
                   
                        }


                       }

                     }
                 
                  ?>
             
               
                           <div class="col-md-11 col-sm-10 col-lg-9">
                                    
                             <form method="POST" action='single_timeline.php'>
                               <input class="form-control" type="hidden" value="<?php echo $_GET["post"];?>"  name="post_id"/>
                               <div class="form-group">
                                   <textarea class="form-control" id="comment" name="comment" value="comment"  placeholder="Add comments"></textarea>
                               </div>
                                <div class="form-group">
                                  <button type="submit" class="btn btn-danger btn-xs" style="">
                                    Post Comment
                                  </button>
                                   </div>
                                </form>


                                   <?php
                                    
                                     $id = $_GET['post'];

                                      $query = "SELECT `comments`,`users`.`firstname`,`timeline_comments`.`time` FROM `timeline_comments` LEFT JOIN `users` ON `timeline_comments`.`user_id` = `users`.`id`  WHERE `post_id`='$id'";

                                       if ($query_run = mysql_query($query)) {

                                       
                                                                
                                            while($query_row = mysql_fetch_assoc($query_run)){
                                             
                                              $comments = $query_row['comments'];
                                              $name  = $query_row['firstname'];
                                              $time = $query_row['time'];                                            
                                                   
                                               ?>
                                                <p style="color: black"><?php echo $comments ;?></p>
                                                <p style="color: red">Posted By: <?php echo $name ;?></p>                                                    
                                                <span style="font-size:13px; color: gray"><i class="ion-clock">&nbsp;&nbsp;<?php echo date('M j, Y H:i', strtotime($time)) ?></i></span><br><br>
                                                <hr>
                                               
                                                <?php
                                                  }

                                                }
                                                
                                                ?>
                                        </div>
                                   
                                </div>
                        </div>                           
                
                      </div>
                          
                  </div>

              </div>                    
           </div>
        
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