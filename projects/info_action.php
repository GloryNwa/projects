<?php
ob_start();
session_start();
include('database/confiq.inc.php');






 if(isset($_POST['title'])&&isset($_POST['text_body'])&&isset($_FILES['file'])){

      $title = $_POST['title'];
      $text = $_POST['text_body'];
      $file = $_FILES['file'];


  if(!empty($_FILES['file']["name"])){
      
      $tmp_file = $_FILES['file']['tmp_name'];
      $target_file= basename($_FILES['file'] ['name']);
      $upload_dir = "InfoUploads/";

      
       if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){

           $query = "INSERT INTO `information` VALUES ('','".mysql_real_escape_string($title)."','".mysql_real_escape_string($text)."','".mysql_real_escape_string($target_file)."',now())";

           if($query_run = mysql_query($query)) {
             $_SESSION['alert'] ='<div class="alert alert-success">Post submitted successfully.</div>';
              header('Location:create_info_blade.php');             
            } else {
              $_SESSION['alert'] ='<div class="alert alert-danger"> "An error occurred somewhere. Try again or contact the admin".</div>';
               header('Location:create_info_blade.php');   
        
       }

   }
   }
}



































// if(isset($_POST['title'])&&isset($_POST['text_body'])&&isset($_FILES['file'])){

//       $title = $_POST['title'];
//       $text = $_POST['text_body'];
//       $file = $_FILES['file'];


//       // $fileExtension =  array('gif','png' ,'jpg', 'jpeg');
   
//       // $extension = pathinfo($file, PATHINFO_EXTENSION);
//       $type      =  $_FILES['file']['type'];
//       $fileSize = $_FILES['file']['size'];     
//       $tmp_name = $_FILES['file']['tmp_name'];
//       $max_size = 200000;
//  $fileExtension  = array(
//         'image/jpeg',
//         'image/jpg',
//         'image/gif',
//         'image/png'
//     );

//        if(!empty($_FILES['file']["name"])){
      
//           $tmp_file = $_FILES['file']['tmp_name'];
//           $target_file= basename($_FILES['file'] ['name']);
//           $upload_dir = "uploads/";

//             if (!empty($file)) {


//               if((!in_array($_FILES['file']['type'], $fileExtension)) && (!empty($_FILES["file"]["type"]))) {
//                 // $_SESSION['alert'] = '<div class="alert alert-danger"> Invalid file type. Only JPG, GIF and PNG types are accepted.</div>';
//                 }
//                  // header('Location:create_info_blade.php');  

//                 if(($_FILES['file']['size'] >= $max_size) || ($_FILES["file"]["size"] == 0)) {
//                    // $_SESSION['alert'] = '<div class="alert alert-danger"> File too large. File must be less than 2 megabytes.</div>';
//                  }
//                  // header('Location:create_info_blade.php');  
//                  }else{
//                   if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
                
//                    $query = "INSERT INTO `information` VALUES ('','".mysql_real_escape_string($title)."','".mysql_real_escape_string($text)."','".mysql_real_escape_string($target_file)."',now())";
//  echo 'i got here!';exit;
//                       if($query_run = mysql_query($query)) {

//                          $_SESSION['alert'] ='<div class="alert alert-success">Post submitted successfully.</div>';
//                           header('Location:create_info_blade.php');
//                          } else {
//                           $_SESSION['alert'] ='<div class="alert alert-danger"> "An error occurred somewhere. Try again or contact the admin".</div>';
//                              header('Location:create_info_blade.php');     
//                      }

//                  }
//              }
//          }
//     }
   
   // }  
 // }
// }


      // if(isset($_POST['title'])&&isset($_POST['text_body'])&&isset($_POST['file'])){
//     if (isset($_POST['submit'])){
// echo "I got here";

//       $title     = $_POST['title'];
//       $text_body = $_POST['text_body'];
//           $file = $_FILES['file']['name'];
//           $extension = strtolower(substr($name, strpos($name, '.') + 1));
//           $type = $_FILES['file']['type'];
//           $size = $_FILES['file']['size'];
        
//         $tmp_name = $_FILES['file']['tmp_name'];
//             $max_size = 100000;

// //         // die(); 2097152

     

//         if (!empty($file)) {
//             if (($extension=='jpg'||$extension=='jpeg')&&($type=='image/jpg' || $type=='image/jpeg')&& $size<=$max_size) {



//          $location = 'uploads/';

//          if (move_uploaded_file($tmp_name, $location.$file)){

//              $query = "INSERT INTO `information` VALUES ('','".mysql_real_escape_string($title)."','".mysql_real_escape_string($text_body)."','".mysql_real_escape_string($target_file)."', now())";


//                 if($query_run = mysql_query($query)) {

//                    $_SESSION['alert'] = '<div class="alert alert-success">File uploaded successfully!</div>';
             
//                     } else {

//                   echo mysql_error();
       //    }else{
               // $_SESSION['alert'] = '<div class="alert alert-danger">The file selected is unsupported, you can only upload png, gif, jpeg or jpg!</div>';
  //             }

  //          }
  //       }

  //    }
  // }
// }
      //     echo 'File uploaded!';
      //    }  else {

      //     echo ' File Error!';
      //    }
        
          
      //     }else {
      //      echo 'File must be jpg/jpeg and must be 2mb or less.';
      //     }
      //   }

      // }
      // }
    ?>






















<!-- if (isset($_POST['submit'])){
echo "I got here";exit;

      $title     = $_POST['title'];
      $text_body = $_POST['text_body'];
      $file      = $_FILES['file'];

  if(!empty($_FILES['file']["name"])){
      
      $tmp_file = $_FILES['file']['tmp_name'];
      $target_file= basename($_FILES['file'] ['name']);
      $location = "uploads/";

      
       if(move_uploaded_file($tmp_file, $location."/".$target_file)){
        

           $query = "INSERT INTO `information` VALUES ('','".mysql_real_escape_string($title)."','".mysql_real_escape_string($text_body)."','".mysql_real_escape_string($target_file)."', now())";


           if($query_run = mysql_query($query)) {

              $_SESSION['alert'] = '<div class="alert alert-success">File uploaded successfully!</div>';
             
            } else {

               echo mysql_error();
       //    }else{
               // $_SESSION['alert'] = '<div class="alert alert-danger">The file selected is unsupported, you can only upload png, gif, jpeg or jpg!</div>';
       }

      }
     }

    }


?>
 -->