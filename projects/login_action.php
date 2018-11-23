<?php
ob_start();
// session_start();
include('functions.php');
include('database/confiq.inc.php');
include('core_blade.php');


if(isset($_POST['firstname'])&&isset($_POST['password'])){
 
   $firstname = mysql_real_escape_string($_POST['firstname']);
   $password_hash = mysql_real_escape_string(md5($_POST['password']));
 
 
      if (!empty($firstname) &&!empty($password_hash)) {

        $query = "SELECT * FROM `users` WHERE `firstname`='$firstname' AND `password`='$password_hash'";
            

           if ($query_run = mysql_query($query)) {
             
            
                $query_num_rows = mysql_num_rows($query_run);

                  if ($query_num_rows < 0) {
                 
                     $_SESSION['alert'] = '<div class="alert alert-danger">Invalid name or password combination, please try again later!</div>';

                      header('Location:login.php');exit;
                        


                  }else if ($query_num_rows > 0){


                        $row = mysql_fetch_assoc($query_run);

                        $user_id = mysql_result($query_run, 0, 'id');
                       
                        $_SESSION['user_id'] = $user_id;
                        $_SESSION['network_id'] = $network_id;  
                        $_SESSION['firstname'] = $row['firstname'];
                        $_SESSION['lastname'] = $row['lastname'];
                        $_SESSION['email'] = $row['email'];

 
                     
                       if(loggedin()) {
                        $fname =  'firstname';         
                                  
                         header('Location:dashboard.php');
                       }

                    }else{
                    $_SESSION['alert'] = '<div class="alert alert-danger">Login was unsuccessful, please try again later!</div>';
                     header('Location:login.php');
                 }
             }

         
      }
}
?>

