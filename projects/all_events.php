<?php
include('includes/header_blade.php');
ob_start();
session_start();
include('database/confiq.inc.php');



?>

<style>
 a:hover{
    text-decoration:underline;                 
  }
</style>

<body class="expand-data panel-data">
    
 <?php
include ('includes/Top_bar.php');

include ('includes/nav.php');
  ?> 
        <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                       <div class="stat-box widget bg-clr4">
                        <i class="fa fa-calendar" style="font-size: 18px;"></i>
                        <div class="stat-box-innr">
                            <div style="text-align:center; color: #fff">EVENTS</div>
                            <h5></h5>
                        </div>
                        <span></span>
                    </div>
                </div> 
        <div class="widget proj-order" style="padding-bottom: 80px; padding-top: 15px">
        <!-- <i class="far fa-calendar-alt" style="font-size:50px";></i><br><br>
           <h2 class="widget-title" style="text-align: center; color: #009efb">EVENTS</h2> -->
        <!--   <a class="add-proj brd-rd5" href="#" data-toggle="tooltip" title="Add Project">+</a> -->
        
<style>

div {
    line-height: 20px;
  }


.resource-holder:hover{
    /*overflow: visible; 
    white-space:none; 
    width: auto;
    position: absolute;*/
    border:1px solid #D3D3D3;
   
}
#data:hover+div {
    margin-top:20px;
}
</style>
   <?php 
       if (isset( $_SESSION['alert'])){
         echo  $_SESSION['alert']; 
         unset( $_SESSION['alert']);
       }
       ?>
      <div class="table-wrap">
        <table class="table table-bordered style2">
            <thead>
            <tr>
                <th>S/N</th>
                <th style="width: 15%">Title</th>
                <th>Discription</th>
                <th>Date</th>
                <th style="width: 15%">Venue</th>
                <th style="width:15%">Action</th>

            </tr>
            </thead>
           <tbody>
          <?php

            $uid = $_SESSION['user_id'];
            $query = "SELECT * FROM `events` ORDER BY `id` DESC limit 11";      
              if ($query_run = mysql_query($query)) {
                 $x = 1;
                 while($query_row = mysql_fetch_assoc($query_run)){

                    $id          = $query_row['id'];
                    $title       = $query_row['title'];
                    $description = $query_row['description'];
                    $date       = $query_row['date'];
                    $venue        = $query_row['venue'];
                    $time  = $query_row['time']; 

                  ?>

                            
             <tr class="resource-holder">
                    <td>
                        <span class="blue-bg indx"><?php echo $x++;?> </span>
                    </td>
                    <td>
                        <h4 class="date"><?php echo $title ;?></h4>
                    </td>
                    <td>
                        <span class="name"><?php echo $description; ?></span>
                    </td>
                    <td>
                        <span class="ph#"><?php echo $date; ?></span>
                    </td>
                    <td>
                        <span class="addr"><?php echo $venue; ?></span>
                    </td>

                    <?php

                    $query2 = "SELECT * FROM `accept_event` WHERE `user_id` = '$uid' AND `event_id` = '$id ' ";
                    $num_rows = mysql_num_rows(mysql_query($query2));

                    if($num_rows ==0){
                     
                     echo '  <td>
                         <span><a href="acceptEvent.php?id='.$id.'"><button class="btn btn-primary active btn-xs">Accept</button></a></span>
                       </td>';

                    


                    }else{
                     if($num_rows ==1){
                       echo'<td>
                              <span><button class="btn btn-primary disabled btn-xs">Accepted</button></span>
                         </td>';

                   
                       }
                    }
                         
            

                    }
                   }
                 
                 ?>  
                   </tr>
                    </tbody>
                    </table>
                   </div>
                </div>
              </div>         
          </div>
        <!-- Filter Items -->
    </div>
</div>
<!-- Panel Content -->
 
<footer>
    <p>Copyright
        <a href="#" title="">LoveWorld Networks</a>   2018</p>
    <span></span>
</footer>


<!-- Vendor: Javascripts -->
<script src="js/jquery.min.js" type="text/javascript"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css" type="text/javascript"></script>


<!-- Vendor: Followed by our custom Javascripts -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/select2.min.js" type="text/javascript"></script>
<script src="js/slick.min.js" type="text/javascript"></script>

<!-- Our Website Javascripts -->
<script src="js/isotope.min.js" type="text/javascript"></script>
<script src="js/isotope-int.js" type="text/javascript"></script>
<script src="js/jquery.counterup.js" type="text/javascript"></script>
<script src="js/waypoints.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script src="js/exporting.js" type="text/javascript"></script>
<script src="js/highcharts-more.js" type="text/javascript"></script>
<script src="js/moment.min.js" type="text/javascript"></script>
<script src="js/jquery.circliful.min.js" type="text/javascript"></script>

<script src="js/jquery.downCount.js" type="text/javascript"></script>
<script src="js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="js/jquery.formtowizard.js" type="text/javascript"></script>
<script src="js/form-validator.min.js" type="text/javascript"></script>
<script src="js/form-validator-lang-en.min.js" type="text/javascript"></script>
<script src="js/cropbox-min.js" type="text/javascript"></script>
<script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="js/ion.rangeSlider.min.js" type="text/javascript"></script>
<script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
<script src="js/styleswitcher.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/fullcalendar.min.js" type="text/javascript"></script>