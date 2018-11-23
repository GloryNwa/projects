<?php
ob_start();
session_start();
include('database/confiq.inc.php');

//Registration Validation

if (isset($_POST['firstname']) &&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['network'])&&isset($_POST['password']) &&isset($_POST['confirm_password'])) {

   $firstname  = $_POST['firstname'];  
   $lastname   = $_POST['lastname'];
   $email     = $_POST['email'];
   $network   = $_POST['network'];
   $password = $_POST ['password'];
   $confirm_password = $_POST['confirm_password'];


  if (!empty($firstname) &&!empty($lastname) &&!empty($email) &&!empty($network) &&!empty($password) &&!empty($confirm_password)) {

    if($password != $confirm_password) {

     $_SESSION['alert'] ='<div class="alert alert-danger">Password did not match!</div>';
      header('Location:register.php');exit;
       }else{

         if(strlen($password) >= 8){
          
           $query = "SELECT `id` FROM `users` WHERE `email`='$email'";
          
            
            $query_run = mysql_query($query);

                $query_num_rows = mysql_num_rows($query_run);
             if ($query_num_rows > 0) {  
                  $_SESSION['alert'] ='<div class="alert alert-danger">Email has already been taken, choose another email.</div>';
                  
                   header('Location:register.php'); exit;

                   }else {


                    $password_hash = md5($password);

                     $query = "INSERT INTO `users` VALUES ('','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($network)."','".mysql_real_escape_string($password_hash)."', now())";
                    }
                    
                       if($query_run = mysql_query($query)) {
                 
                          $_SESSION['alert'] = '<div class="alert alert-success">Registration Successful, please login!</div>';

                          header('Location:login.php');exit;
                         
                       }else{

                           $_SESSION['alert'] ='<div class="alert alert-danger">Registration was unsuccessful, please try again later!</div>';
                  
                           header('Location:register.php'); exit;
                       }

                        /***
                        Start the login process if the user was registered successfully

                        */

                       //     $query = "SELECT * FROM `users` WHERE `firstname`='$firstname' AND `password`='$password_hash'";
               
     
                       //       if ($query_run = mysql_query($query)) {
                              
                       //            $query_num_rows = mysql_num_rows($query_run);

                       //              if ($query_num_rows < 1) {

                       //                 $_SESSION['alert'] = '<div class="alert alert-danger">Invalid email or password combination, please try again later!</div>';

                       //                  header('Location:login.php');exit;
                                          
                       //                    }else if ($query_num_rows==1){  
                                                           
                       //                      header('Location:dashboard.php');
                       //                   }

                       //                }else{
                       //                 $_SESSION['alert'] = '<div class="alert alert-danger">Invalid email or password combination, please try again later!</div>';

                       //                header('Location:register.php');exit;
                       //             }
                       //           }         
                       //       }else{    

                       //        $_SESSION['alert'] ='<div class="alert alert-danger">Password must be eight characters or more!</div>';
                       //           header('Location:register.php');exit;
                          }
           
                       }
                   }
              }
  
   ?>