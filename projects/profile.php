<?php
// include('functions.php');
include('database/confiq.inc.php');

include('includes/header_blade.php');
session_start();
ob_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['firstname'])) {
   $id = $_SESSION['user_id'];
   $firstname = $_SESSION['firstname'];
}
else {
echo "You have not signed in";
}
?>
<?php
  $id = $_SESSION['user_id'];

  //var_dump($id);exit;
  $sql = "SELECT * FROM `users` WHERE `id`='$id' ";

$row = mysql_fetch_assoc(mysql_query($sql));
$firstname= $row["firstname"];
$lastname = $row["lastname"];
$email = $row["email"];
$network = $row["network"];


?>
<?php
 $id = $_SESSION['user_id'];






?>






<style type="text/css">
    .avatar{
        border-radius: 100%;
        max-width: 100px;
    }

</style>

<body class="expand-data panel-data">
<!-- Topbar -->
<?php
include ('includes/Top_bar.php');

include ('includes/nav.php');
 ?>
  <!-- Options Panel -->


<?php

if(isset($_SESSION['user_id'])&&isset($_SESSION['firstname'])&&isset($_FILES['file'])&&isset($_POST['about'])){
  
       $user_id = $_SESSION['user_id'];
       $name = $_SESSION['firstname'];
       $file = $_FILES['file'];
       $about = $_POST['about'];

  if(!empty($_FILES['file']["name"])){

      
      $tmp_file = $_FILES['file']['tmp_name'];
      $target_file= basename($_FILES['file'] ['name']);
      $upload_dir = "profile_picsFolder/";

      
       if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){

           $query = "INSERT INTO `profiles` VALUES ('','$user_id','".mysql_real_escape_string($name)."','".mysql_real_escape_string($target_file)."','".mysql_real_escape_string($about)."',now())";

           if($query_run = mysql_query($query)) {
             $_SESSION['alert'] ='<div class="alert alert-success">Post submitted successfully.</div>';
             header('Location:profile.php');exit;           
            } else {
              $_SESSION['alert'] ='<div class="alert alert-danger"> "An error occurred somewhere. Try again or contact the admin".</div>';
               header('Location:profile.php');exit;
              // echo mysql_error();exit;
        
       }

   }
   }
  }



  ?>

  <div class="pg-tp">
    <i class="ion-android-contact"></i>
    <div class="pr-tp-inr">
      <h5>Profile Page</h5>
    </div>
  </div>
  <!-- Page Top -->

  <div class="panel-content">
    <div class="widget pad50-65">
      <div class="profile-wrp">
        <div class="row">



          <div class="col-md-6 col-sm-12 col-lg-6">

            <div class="profile-info-wrp">

              <div class="insta-wrp">


          
                 
             <?php

            // Fetch profile picture
       
           
            $user_id = $_SESSION['user_id'];           
            $query = " SELECT `profile_pic`, `about`, `name` FROM `profiles` WHERE `user_id`= '$user_id' LIMIT 1 ";
               if($query_run = mysql_query($query)){
                 while($query_row = mysql_fetch_assoc($query_run)){
               
                 $profile_pic = $query_row['profile_pic'];
                 $about       = $query_row['about'];
                if(!empty($profile_pic)){ 
            ?>
          
              
                     <img class="brd-rd50 img-responsive" id="image" src=<?php echo "profile_picsFolder/" .$profile_pic." style=width:100px";?>>
               <?php
                } else{

                   
                   echo'<img class="brd-rd50 avatar" id="image" src="images/anonny.jpg" style="hieght:2%"/>';

                }
                }
                }
               
                
                ?>
                <div class="insta-inf">
                  <h5>
                    <a href="#" title="" style="color:"><?php echo $firstname.'  '.$lastname; ?></a>

                  </h5>
                  <p><h6 class="desg"style="color:"><?php echo $network; ?></h6></p>
                </div>
               <br><br><br>
              <div style="margin-right: 100px; margin-top: 50px">
               <form method="POST" action="profile.php" enctype="multipart/form-data" >                     
                <div class="cnt-opt">
                  <div class="cnt-opt-lst">
                    <span>
                      <label class="fileContainer">
                        <i class="fa fa-picture-o"></i>
                       <input type="file" required name="file" id="files" value="file" placeholder="upload Profile" />
                       
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" required name="about" id="about" value="" placeholder="About Me" />
                       <input type="hidden" required name="name" id="name" value="name" placeholder="" /></label>
                        <input type="hidden" required name="user_id" id="user_id" value="" placeholder="" /></label>
                    </span>
                  </div>

                  <button class="btn btn-success btn-xs green-bg"  type="submit" name="submit" value="submit" style="border: none;">Change Profile</button>
                </div>
              </form>
              </div>
              </div>



               <script>
                    document.getElementById("files").onchange = function () {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            // get loaded data and render thumbnail.
                            document.getElementById("image").src = e.target.result;
                        };

                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                    };
                </script>



                

                

              <div class="usr-abut">
                <h5 class="prf-edit-tl">About Me </h5>
                <p><?php echo $about; ?></p>
               
                <p style="max-width:300px;"><!-- {{Auth::user()->about}} --></p>
              </div>
              <div class="usr-gnrl-inf">
                <h5 class="prf-edit-tl">General Info

                </h5>
                <div class="grn-inf-lst">
                  <i class="fa fa-home"></i>Name:
                  <span class="green-clr"><?php echo $firstname; ?></span>
                </div>
                <div class="grn-inf-lst">
                  <i class="fa fa-envelope"></i> Email:
                  <span><?php echo $email; ?></span>
                </div>
                <div class="grn-inf-lst">
                  <i class="fa fa-building"></i>
                  <span><?php echo $network; ?></span>
                </div>
              </div>
              </div>
              </div>
            






 <?php
  // Edit Profile Script//

 if(isset($_POST['firstname'])&&isset($_POST['lastname'])){

     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];

   $user_id= $_SESSION['user_id'];
     $query = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname' WHERE `id`='$user_id' ";
 
     if($query_run = mysql_query($query)) {
             $_SESSION['alert'] ='<div class="alert alert-success">Profile updated successfully.</div>';
             header('Location:profile.php');exit;           
     } else {
              $_SESSION['alert'] ='<div class="alert alert-danger"> "An error occurred somewhere. Try again or contact the admin".</div>';
               header('Location:profile.php');exit;
             
        
        }

     }
 
  

?>



          <div class="col-md-6 col-sm-12 col-lg-6">
           <div class="profile-info-wrp edit-prf">
             <h4> Edit Profile</h4>

            <form action="profile.php" method="post">
             <?php 
                   if (isset( $_SESSION['alert'])){
                   echo  $_SESSION['alert']; 
                   unset( $_SESSION['alert']);
                 }

                   ?>  
                   <div class="insta-wrp">
                    <div class="insta-inf">
                      <div class="grn-inf-lst">
                        <i class="fa fa-user"></i> First Name:
                        <input type="text" class="brd-rd5" placeholder="" value="<?php echo $firstname ; ?>" name="firstname" required/>
                      </div> <div class="grn-inf-lst">
                        <i class="fa fa-user"></i> Last Name:
                        <input type="text" class="brd-rd5" placeholder=""value="<?php echo $lastname ; ?>"  name="lastname" required/>
                      </div>
                    </div>
                  </div>
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Update</button>
                  </form><br>
                  <br>
              <h4></h4>


             
                   <form action="update_profile_pic.php" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                      <label class="sr-only" for="name">File</label>
                      <input class="form-control" type="file" id="" name="file" value="" placeholder="file*" required="required" data-validation-required-message="Please chose a photo."/>
                  </div>
                  <div class="usr-abut">
                    <h5 class="prf-edit-tl">About 
                      <i class="fa fa-pencil edit-btn"></i>
                    </h5>
                    <textarea class="brd-rd5" placeholder="Write about yourself..." name="about" ></textarea>
                  </div>

                  <button type="submit" name="submit" value="submit" class="btn btn-success">Update</button>
                </form><br><br>
                
          </div>







 <?php
// Change Password Script//

if (isset($_POST['oldPassword'])&&isset($_POST['newPassword'])&&isset($_POST['confirmPassword'])){


     $oldPass = mysql_real_escape_string($_POST['oldPassword']);
     $newPass = mysql_real_escape_string($_POST['newPassword']);
     $confirmPass = mysql_real_escape_string($_POST['confirmPassword']);
  
  if(!empty($oldPass)&&!empty($newPass)&&!empty($confirmPass)){

    if($newPass != $confirmPass) {

     $_SESSION['alert'] ='<div class="alert alert-danger">Password did not match!</div>';
       header('Location:profile.php');exit;
   }else{

   if(strlen($newPass) >= 8){
 
      $password_hash = md5($newPass);
      $id = $_SESSION['user_id'];
      
     $query = "UPDATE `users` SET `password`='$password_hash' WHERE `id` = '$id'";

  if ($query_run = mysql_query($query)) {
 
       $_SESSION['alert'] ='<div class="alert alert-success">Password updated successfully.</div>';
       header('Location:profile.php');exit;      

  }else {
        $_SESSION['alert'] ='<div class="alert alert-danger"> "An error occurred. Try again or contact the admin".</div>';
        header('Location:profile.php');   
        
         }

        }
    
       }
      }
    }

 ?>
 

           <div class="profile-info-wrp">
                <h4> Change Password</h4>
                <form action="profile.php" method="post">
                <?php 
                   if (isset( $_SESSION['alert'])){
                   echo  $_SESSION['alert']; 
                   unset( $_SESSION['alert']);
                 }

                ?>  
                  <div class="insta-wrp">
                    <div class="insta-inf">
                     
                       <div class="grn-inf-lst">
                        <i class="fa fa-pencil"></i> Old Password:
                        <input type="password" class="brd-rd5" placeholder="" name="oldPassword" required/>
                      </div>
                    </div>
                  </div>
                  <div class="grn-inf-lst">
                        <i class="fa fa-pencil"></i>New Password:
                        <input type="password" class="brd-rd5" placeholder="" name="newPassword" required/>
                      </div>
                 <div class="grn-inf-lst">
                        <i class="fa fa-pencil"></i>Confirm Password:
                        <input type="password" class="brd-rd5" placeholder="" name="confirmPassword" required/>
                      </div>
                  <button class="btn btn-success">Change Password</button>
                </form><br><br>                
           </div>
         </div>
        </div>
     </div>
    </div>
  </div>
</body>

  <!--ssssssssss -->