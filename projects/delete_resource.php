<?php
   include('database/confiq.inc.php');
 session_start();

session_start();




         $id  = $_GET['id'];
         $query = "DELETE FROM `resources` WHERE `id`='$id'";
                if ($query_run = mysql_query($query)) {
                 $_SESSION['alert'] ='<div class="alert alert-success">Post deleted successfully.</div>';
                  header('Location:watch_resource.php');

             }else{
               $_SESSION['alert'] ='<div class="alert alert-danger">Post could not be deleted at this time!.</div>';
               header('Location:watch_resource.php');
            }


  ?>
       