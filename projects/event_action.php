<?php
ob_start();
session_start();
include('database/confiq.inc.php');


if(isset($_POST['title']) &&isset($_POST['description']) &&isset($_POST['date']) &&isset($_POST['venue'])){

  $title = $_POST['title'];
  $description = $_POST['description'];
  $date = $_POST['date'];
  $venue = $_POST['venue'];

  if(!empty($title) &&!empty($description)&&!empty($date)&&!empty($venue)){

  	 $query = "INSERT INTO `events` VALUES ('','".mysql_real_escape_string($title)."','".mysql_real_escape_string($description)."','".mysql_real_escape_string($date)."','".mysql_real_escape_string($venue)."',now())";

  	     if($query_run = mysql_query($query)){

  	 	     $_SESSION['alert'] = '<div class="alert alert-success>Post Inserted Successfully</div>';
  	 	         header('Location: create_event_blade.php');exit;
  	             }else{
                   $_SESSION['alert'] = '<div class="alert alert-danger>Service time out, please try again later!</div>';
                      header('Location: create_event_blade.php');exit;
  	         } 
 
         }
      }

?>


