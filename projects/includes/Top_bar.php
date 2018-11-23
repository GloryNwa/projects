<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include('database/confiq.inc.php');
include('functions.php');


?>


<div class="topbar">
    <div class="logo">
        <h6 >
            <h5 style="color: #009efb;">LoveWorld Networks Portal</h5>
               
            </a>
        </h6>
    </div>
    <div class="topbar-data">
        <div class="usr-act">
        <?php
        if(loggedin()) {

      $fname = getuserId('firstname');
?>
            <i>Hello, <a href=""><?php echo $fname ?>!</a></i>
            <?php
        }
        ?>

  <span>
       

          
                 
             <?php

            // <?php
         if(isset($_SESSION['user_id'])&&isset($_SESSION['firstname'])){ 
           
            $user_id = $_SESSION['user_id'];
            $name = $_SESSION['firstname'];


            if(!empty($user_id)&&!empty( $name )) {


            $query = " SELECT `profile_pic`, `about`, `name` FROM `profiles` WHERE `user_id`= '$user_id' LIMIT 1 ";
               if($query_run = mysql_query($query)){
                 while($query_row = mysql_fetch_assoc($query_run)){
               
                 $profile_pic = $query_row['profile_pic'];
                 $about       = $query_row['about'];
                if(!empty($profile_pic)){ 
            ?>

           
              
                    <img class="brd-rd50 img-responsive" id="image" src=<?php echo "profile_picsFolder/" .$profile_pic." style=width:55px";?>>
               <?php
                } else{

                   
               echo'<img class="brd-rd50 avatar" id="image" src="images/anonny.jpg" style="hieght:2%"/>';

            
                }
                }
                }
                }
                }
                ?>
          <i class="sts away"></i>
        </span>
            <div class="usr-inf">
                <div class="usr-thmb brd-rd50">
                  <span>
           
                    <i class="sts away"></i>
                    <a class="green-bg brd-rd5" href="{{route("loadProfile")}}" title="">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
                <h5>
                    <a href="{{route("loadProfile")}}" title=""><!-- {{ucfirst(strtolower(Auth::user()->first_name))}} --></a>
                </h5>
                <!-- <span>{{Auth::user()->network}}</span>
                <i><a href="#">{{Auth::user()->email}}</a></i>
 -->
                    <div class="usr-ft">
                        <a class="btn-danger" href="/logout" title="">
                            <i class="fa fa-sign-out"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="topbar-bottom-colors">
        <i style="background-color: #2c3e50;"></i>
        <i style="background-color: #9857b2;"></i>
        <i style="background-color: #2c81ba;"></i>
        <i style="background-color: #5dc12e;"></i>
        <i style="background-color: #feb506;"></i>
        <i style="background-color: #e17c21;"></i>
        <i style="background-color: #bc382a;"></i>
    </div>
</div>