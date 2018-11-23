<?php
ob_start();
session_start();
require_once('../database/confiq.inc.php');

//Registration Validation

if (isset($_POST['firstname']) &&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['network'])&&isset($_POST['password']) &&isset($_POST['confirm_password'])) {

  $firstname  = $_POST['firstname'];  
  $lastname   = $_POST['lastname'];
  $email      = $_POST['email'];
  $network    = $_POST['network'];
  $password_hash = md5($_POST ['password']);
  $confirm_password = md5($_POST['confirm_password']);


  if(!empty($firstname)&&!empty($lastname)&&!empty($email)&&!empty($network)&&!empty($password_hash)&&!empty($confirm_password)) {

    if($password_hash !=$confirm_password) {

     $_SESSION['alert'] ='<h4 style="text-align:center; color:red; font-size:15px";>Password did not match!</h4>';
      header('Location:register.php');exit;
       }else{

         if(strlen($password_hash) >= 8 && preg_match("/^[a-zA-Z0-9]*$/", $password_hash)){
           $query = "SELECT `id` FROM `registration` WHERE `email`='$email'AND `firstname`='$firstname'";
            $query_run = mysql_query($query);

             if (mysql_num_rows($query_run)==1){

                  $_SESSION['alert'] ='<h4 style="text-align:center; color:red; font-size:15px";>Email has already been taken!</h4>';
                  
                   header('Location:register.php'); exit;

                   }else {

                     $query = "INSERT INTO `registration` VALUES ('','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($network)."','".mysql_real_escape_string($password_hash)."')";

                       if($query_run = mysql_query($query)) {

                         header('Location: dashboard.php');exit;

                         } else {
                          
                         echo mysql_error(); 
                  }
        



            }
       
                 // $query = "SELECT `username` FROM `login` WHERE `$email`='$email'";
                 // $query_run = mysql_query($query);

                 //    if (mysql_num_rows($query_run)==1){

                 //       $_SESSION['alert'] =' Email '.$email.' already exist.';
       //      } else {
                 //   }
                 // }
                     
             }

           }
         }
 
      }
  ?>