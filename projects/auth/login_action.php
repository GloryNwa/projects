<?php
ob_start();
session_start();
include('../database/confiq.inc.php');


if(isset($_POST['email'])&&isset($_POST['password'])){
 
   $email = mysql_real_escape_string($_POST['email']);
   $password_hash = mysql_real_escape_string(md5($_POST['password']));
 
 
      if (!empty($email) &&!empty($password_hash)) {

        $query = "SELECT `id` FROM `login` WHERE `email`='$email' AND `password`='$password_hash'";
               
     
           if ($query_run = mysql_query($query)) {
            
                $query_num_rows = mysql_num_rows($query_run);

                  if ($query_num_rows==0) {

                     $_SESSION['alert'] = '<div class="alert alert-danger"></div>';

                      header('Location:login.php');exit;

                        }else if ($query_num_rows==1){  
                                         
                          header('Location:dashboard.php');
                       }

                    }else{
                     echo mysql_error();
                 }
             }

         
      }

?>

