<?php
session_start();
ob_start();
 include('database/confiq.inc.php');

if (isset($_POST['title'])&&isset($_FILES['file'])){
  
   $title = $_POST['title'];
   $file = $_FILES['file'];

  
  if(!empty($title)&&!empty('$file')){
  

        $video = array('mp4');
        $audio = array('mp3');
        $document = array('docx', 'pdf', 'doc');



        $tmp_file = $_FILES['file']['tmp_name'];
        $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $max_size  = 300000;
        $target_file = basename($_FILES['file'] ['name']);
        $upload_dir = "ResourceUploads/";
        
               

  if (in_array( $extension, $video)) {
      $file_type = "video";
      

  }else if(in_array( $extension, $audio)){
    $file_type = "audio";

 

  }else if(in_array( $extension, $document)){
    $file_type = "document";

  }else{

      $_SESSION['alert'] = '<div class="alert alert-danger>Sorry the file you uploaded is unsupported!</div>';
        header('Location: create_resource_blade.php');exit;
}

   if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){    

       $query = "INSERT INTO `resources` VALUES ('','".mysql_real_escape_string($title)."','".mysql_real_escape_string($target_file)."','".mysql_real_escape_string($file_type)."',now())";  
      
  	   if($query_run = mysql_query($query)){

  	 	        
        $_SESSION['alert'] ='<div style="background-color:#58a758; color:#fff; text-align:center; font-size:17px; height: 50px">File uploaded successfully !</div>';
           header('Location:create_resource_blade.php');exit;
   

}else{
       $_SESSION['alert'] ='<div style="background-color:#CA3433; color:#fff; text-align:center; font-size:17px; height: 50px">File could not be uploaded at this time, try again later !</div>';
         header('Location:create_resource_blade.php');exit;
   
            }

          }



	      }    

     }
  

?>







