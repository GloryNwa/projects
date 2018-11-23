<?php
ob_start();
session_start();
include('database/confiq.inc.php');



 if(isset($_POST['about'])&&isset($_FILES['file'])){
  

        $file = $_FILES['file'];
        $about= $_POST['about'];

      if(!empty($_FILES['file']["name"])){


            
            $tmp_file = $_FILES['file']['tmp_name'];
            $target_file= basename($_FILES['file'] ['name']);
            $upload_dir = "profile_picsFolder/";

      if(!empty(move_uploaded_file($tmp_file, $upload_dir."/".$target_file))){

          $user_id= $_SESSION['user_id'];
          $query = "UPDATE `profiles` SET `profile_pic`='$target_file',`about`='$about' WHERE `user_id`='$user_id' ";
     
         if($query_run = mysql_query($query)) {
                $_SESSION['alert'] ='<div class="alert alert-success">Profile picture updated successfully.</div>';
                header('Location:profile.php');exit;           
         } else {
                   $_SESSION['alert'] ='<div class="alert alert-danger"> "An error occurred somewhere. Try again or contact the admin".</div>';
                   header('Location:profile.php');exit;
//             //  echo mysql_error();exit;
              
        }

      }
    } 


}

?>

















 