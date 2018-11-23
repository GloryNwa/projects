
<?php
ob_start();
session_start();


include_once('database/confiq.inc.php');
include ('includes/header_blade.php');

?>
<body class="expand-data panel-data">
<?php 

include ('includes/Top_bar.php');


   include ('includes/nav.php');
   
?>

<?php

 
if(isset($_POST['update'])){    
    $id = $_POST['id'];
    
    $title     = mysql_real_escape_string($_POST['title']);
    $text_body = mysql_real_escape_string($_POST['text_body']);
    $file      = $_FILES['file'];    
    
    // checking empty fields
   if(!empty($_FILES['file']["name"])){
      
      $tmp_file = $_FILES['file']['tmp_name'];
      $target_file= basename($_FILES['file'] ['name']);
      $upload_dir = "InfoUploads/";

      
       if(!empty(move_uploaded_file($tmp_file, $upload_dir."/".$target_file))){


        //updating the table
        $query =  "UPDATE information SET `title`='$title', `text_body`='$text_body', `file`='$target_file' WHERE id=$id";
        if ($query_run = mysql_query($query)) {
           $_SESSION['alert'] ='<div class="alert alert-success">Post updated successfully.</div>';
             //redirectig to the display page. In our case, it is manage_info_blade.php
               header('Location:manage_info_blade.php');

       }else{
              if(empty(move_uploaded_file($tmp_file, $upload_dir."/".$target_file))){


        //updating the table
             $query =  "UPDATE information SET `title`='$title', `text_body`='$text_body', `file`='$target_file' WHERE id=$id";
              if ($query_run = mysql_query($query)) {
                $_SESSION['alert'] ='<div class="alert alert-success">Post updated successfully.</div>';
             //redirectig to the display page. In our case, it is manage_info_blade.php
               header('Location:manage_info_blade.php');
       }else{
               $_SESSION['alert'] ='<div class="alert alert-danger">Post could not be updated at this time, try later!.</div>';
               //redirectig to the display page. In our case, it is manage_info_blade.php
               header('Location:manage_info_blade.php');
            }
            }

          }
      }
    }
}

//getting id from url
$id = $_GET['id'];


 if(isset($_GET['id'])){    
             
        
//selecting data associated with this particular id
$query = "SELECT * FROM `information` WHERE `id`='$id'";
 if ($query_run = mysql_query($query)) {
    $query_row = mysql_fetch_assoc($query_run);
  
    $title     = mysql_real_escape_string($query_row['title']);
    $text_body = mysql_real_escape_string($query_row['text_body']);
    $file      = $query_row['file'];
   
   }else{
    echo mysql_error();
   }
 }

?>

<!-- 
//including the database connection file
include("config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:index.php");

   <!-- 
     if (isset($_GET['id'])){

        $id  = $_GET['id'];
     
         $query = "SELECT `title`,`text_body`,`file` FROM `information` WHERE `id`='$id'";
          if ($query_run = mysql_query($query)) {
              $title     = 'title';
              $text_body = 'text_body';
              $file = 'file';

      }

      }
    
             
            
     ?>
       
 -->
  
   <div class="container" style="max-width: 700px; padding-top:70px ">
    <div class="panel-content">
      <div class="widget pad40-50"> 
        <div class="widget-title2">
          <h4>Edit Information</h4>
        <span></span>
      </div>
      <form class="form-wrp" method="POST" action="" enctype="multipart/form-data">
     
       <div class="form-group">
       <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
         <input type="hidden" name="MAX_FILE_SIZE" value="1000000"> <br>
        <div class="row mrg15">
          <div class="col-md-12 col-sm-12 col-lg-12">
            <input class="brd-rd5" type="text" name="title" value="<?php echo $title; ?>" placeholder="Title*" required="required" />
          </div>
          <div class="col-md-12 col-sm-12 col-lg-12">
            <textarea class="brd-rd5" type="text" name="text_body" value="" placeholder="Message*" required="required"><?php echo $text_body; ?></textarea>
          </div>
          <div class="col-md-12 col-sm-12 col-lg-12">
           <div class="form-group">
            <label class="sr-only" for="name">File</label>
            <input class="form-control" type="file" id="file" name="file" placeholder="file*" value=<img src=<?php echo "InfoUploads/" .$file." style=";?>>
            <p class="help-block text-danger"></p>
          </div>
          </div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-lg-12">
        <!--   <div class="col-md-6 col-md-offset-4"> -->
           <button type="submit" name="update"class="btn btn-primary btn-large btn-block"style="border: none" value="Update">
            Update
           </button>
          </div>
         </div>
        </div>
       </div>
     <?php


    ?>
    </form>
    </div>
  </div><br><br><br><br>


    
   <!--  
    <div class="row">
    <div class="col-md-6 col-sm-6col-lg-6">
           <div class="form-group">
            <label class="sr-only" for="name">File</label>
            <input class="form-control" type="file" id="file" name="file" placeholder="file*" value=/>
            <p class="help-block text-danger"></p>
          </div>
          </div>
          </div> -->
  <!-- Panel Content -->
 

  <!-- Vendor: Javascripts -->







