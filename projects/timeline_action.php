<?php
ob_start();
session_start();
include('database/confiq.inc.php');




 
 if(isset($_POST['text_body'])&&isset($_FILES['file'])){

      // $user_id = $_SESSION['user_id'];
      // $network_id = $_SESSION['network_id'];
      $text = $_POST['text_body'];
      $file = $_FILES['file'];
     

  if(!empty($_FILES['file']["name"])){
      
      $tmp_file = $_FILES['file']['tmp_name'];
      $target_file= basename($_FILES['file'] ['name']);
      $upload_dir = "timelineUploads/";

    
       if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){

      $user_id =  $_SESSION['user_id'] ;
      $network_id =  $_SESSION['network_id'] ;


        $query = "INSERT INTO `timeline` VALUES ('','$user_id','$network_id','".mysql_real_escape_string($text)."','".mysql_real_escape_string($target_file)."',now())";
     
 
         if($query_run = mysql_query($query)) {
          
             $_SESSION['alert'] ='<div class="alert alert-success">Post submitted successfully.</div>';
              header('Location:timeline.php');             
        }else {
              echo mysql_error();
       }

     }
   }
}
