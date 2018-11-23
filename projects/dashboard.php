<?php

session_start();


ob_start();

require_once('database/confiq.inc.php');


?><!DOCTYPE html>
<html>

<head>
  <!-- Meta-Information -->
  <title>LoveWorld Networks | Portal</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Vendor: Bootstrap 4 Stylesheets  -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

  <!-- Our Website CSS Styles -->
  <link rel="stylesheet" href="css/icons.min.css" type="text/css">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <link rel="stylesheet" href="css/responsive.css" type="text/css">

  <!-- Color Scheme -->
  <link rel="stylesheet" href="css/color-schemes/color.css" type="text/css" title="color3">
  <link rel="alternate stylesheet" href="css/color-schemes/color1.css" title="color1">
  <link rel="alternate stylesheet" href="css/color-schemes/color2.css" title="color2">
  <link rel="alternate stylesheet" href="css/color-schemes/color4.css" title="color4">
  <link rel="alternate stylesheet" href="/color-schemes/color5.css" title="color5">
</head>


<style>
 a:hover{
    text-decoration:none;  
    color:  #009efb;               
  }
</style>
<body class="expand-data panel-data">
<!-- Topbar -->

<?php

include ('includes/Top_bar.php');


include ('includes/nav.php');



?>
<!-- Side Header -->

<!-- Options Panel -->

<!-- Page Top -->

<div class="panel-content">
    <div class="filter-items">
        <div class="row grid-wrap mrg20">




            <div class="col-md-3 grid-item col-sm-3 col-lg-3 col-xs-6">
                <a href="All_resources.php">
                <div class="stat-box widget bg-clr1">
                    <div class="wdgt-ldr">

                    </div>
                    <i class="fa fa-book" style="font-size:30px"></i>
                    
                    <div class="stat-box-innr">
                            <span style="color: #fff; max-height: 30px;">
                            </span>
                        <h5>Resources</h5>
                    </div>
                    <span></span>
                </div>
                </a>

            </div>


            <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                <a href="all_events.php">
                <div class="stat-box widget bg-clr4">
                    <div class="wdgt-ldr">

                    </div>
                    <i class="fa fa-calendar" style="font-size:30px"></i>
                    <div class="stat-box-innr">
                        <span style="color: #fff; max-height: 30px;"></span>
                        <h5>Events</h5>
                    </div>
                    <span></span>
                </div>
                </a>
            </div>
           
            <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                <a href="all_info.php">
                <div class="stat-box widget bg-clr3">
                    <div class="wdgt-ldr">
                    </div>

                    <i class="fa fa-bullhorn" style="font-size:30px"></i>
                    <div class="stat-box-innr">
                        <span><h5 style="color: #fff; max-height: 30px;"> </h5></span>
                        <h5>Info Desk</h5>
                    </div>
                    <span></span>
                </div>
                </a>
            </div>
             <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                 <a href="timeline.php">
                <div class="stat-box widget bg-clr2">
                    <div class="wdgt-ldr">

                    </div>
                    <i class="fa fa-list-ul"style="font-size:30px"></i>
                    <div class="stat-box-innr">
                            <span style="color: #fff; max-height: 30px;"> 
                               </span>
                        <h5>TimeLine</h5>
                    </div>
                    <span>
               </span>
            </div>
           </a>
      </div>
  

            <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                <div class="traffic-src widget">


                    <div class="row">
                       

                            <div class="col-md-5 col-sm-12 col-lg-5">
                       
                                <h5 class="widget-title "><a href="#" class="">Information Desk</a></h5>

                                <?php
                               
                                      // $post_id  = $_GET['post'];

                                      $query = "SELECT * FROM `information` ORDER BY `id`ASC LIMIT 1";
                                         if ($query_run = mysql_query($query)) {

                                       
                                         while($query_row = mysql_fetch_assoc($query_run)){
                                             
                                              $title     = $query_row['title'];
                                              $text_body = $query_row['text_body'];
                                              $file = $query_row['file'];
                                              $time  = $query_row['time'];
                                              $id  = $query_row['id'];
                                            
                                          ?>
                                  <div class="trfc-cnt">
                                    <h6><?php echo $title ?></h6>
                                    <p style="font-size: 17px"><?php echo (substr($text_body,0,200)) ?></p>
                                    <?php echo '<a href="single_info.php?post='.$id.'">';?>
                                   <br><button class="btn btn-info" style="background-color: #009efb;border:none;">Read More</button></a>
                              </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-lg-7">
                                <div class="traffic-chart-wrp"><br><br>
                               <div class="center " style="" class="img-thumbnail"><img src=<?php echo "InfoUploads/" .$file." style=width:90%";?>></div><br><br>
                                <div><img src="" style="height: 250px;"></div>
                                 
                                </div>
                            </div>
                  </div>

            <!--       <div class="alert alert-info"><!-- No information found --><!-- </div> -->
                    </div>
                        <?php
                    }

                }
                ?>
            </div>

            <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                <div class="widget pad50-65">
                    <div class="widget-title2">
                        <i class="fab fa-osi" style="font-size: 50px"></i>
                        <h4 class="widget-title">Training Resources</h4>
                    </div>


              <div class="rmv-ext6">
                <div class="row mrg20">


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

     $query = "SELECT * FROM `resources` ORDER BY `id` DESC LIMIT 6" ;
         if ($query_run = mysql_query($query)) {

    
           while($query_row = mysql_fetch_assoc($query_run)){
               
            $title = $query_row['title'];
               
            $file = $query_row['file'];
            $file_type = $query_row['file_type'];   
            $id  = $query_row['id'];

          
        
            if($file_type == 'video'){
                     
               $fonticon = "fa-file-video-o";
          
             
            }else if($file_type == 'audio'){
              $fonticon = "fa-file-audio-o";


            }else if($file_type == 'document'){

              $fonticon = "fa-file";  
               }  
            ?>

              <div class="col-md-4 col-sm-6 col-lg-4 resource-holder">
                <div class="serv-bx styl2 brd-rd5">
                  <i class="fa <?php echo $fonticon ; ?>" style="font-size:48px;color:black"></i>
                  <?php
                  
                  
                  ?>
                  <div class="serv-inkkkf">
                  <div id="data">            
                  
                  <p class="col"><?php echo (substr($title,0,60)) ; ?></p>
                  </div>
                <?php
                         
                
                   if($file_type == 'video'){
                      
                
                   echo'<a href="watch_resource.php?id='.$id.'"
                    <button  class="btn btn-danger btn-xs" style="background-color: #009efb;border:none; max-height: 70px">Play Video  <i class="fa fa-play"></i></button> 
                    </a>';
                   ?>
                     <?php
                     }else if($file_type == 'audio'){
                      echo'<a href="resource_audio.php?id='.$id.'">
                       <button class="btn btn-danger btn-xs">Listen &nbsp;&nbsp; <i class="fa fa-headphones" style="font-size:15px; color:#000"></i></button></a>';   
                    
                    

                     }else if($file_type == 'document'){
                     

                     ?>
                   <a href="<?php echo "ResourceUploads/" .$file.'' ;?>" " download="<?php echo $file ;?>"><button class="btn btn-danger btn-xs"  border: none ">Download&nbsp;&nbsp;<i class="fa fa-download"></i></button></a>
                     <?php
                      }

                    ?>
                  </div>
                </div>
               </div>
              <?php
                  } 
                }
             ?>
             <!--    <div class="alert alert-info"></div> -->      
        </div>
      </div>
     </div>    
   </div>
 </div>
</div>


             <!--  <div class="rmv-ext6">
                <div class="row mrg20">
                  <div class="col-md-4 col-sm-6 col-lg-4 resource-holder">
                      <div class="serv-bx styl2 brd-rd5">
                          <i class="fa {{$fonticon}}" style="font-size:48px;color:black"></i>
                          <div class="serv-inkkkf">
                            <div id="data">
                              <p></p>
                              </div>
                                  <a href="" ><button class="btn btn-danger btn-xs" style="background-color: #009efb;border:none;">Play Video <i class="fa fa-play"></i></button></a>                                           
                                     <button class="btn btn-danger">Listen <i class="fa fa-earphone"></i></button>                                        
                                      <a href="URL::to("/")."/"." download="{{$resource->file}}"><button class="btn btn-danger btn-xs" style="background-color: #009efb;border:none;">Download  <i class="fa fa-download"></i></button></a>                                  
                                         </div>
                                       </div>
                                      </div>
                               <div class="alert alert-info"></div>                   
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                <div class="widget proj-order pad50-40"> 

                 <i class="fa fa-calendar-alt" style="font-size:50px";></i><br><br>
                    <h4 class="widget-title"><a href="#">Events</a></h4>
                    <!--   <a class="add-proj brd-rd5" href="#" data-toggle="tooltip" title="Add Project">+</a> -->

                 <div class="table-wrap">
                   <table class="table table-bordered style2">
                      <thead>
                      <tr>
                          <th>S/N</th>
                          <th>Title</th>
                          <th>Discription</th>
                          <th>Date</th>
                          <th>Venue</th>
                          <th>Action</th>

                      </tr>
                      </thead>
                     <tbody>
          <?php
          
          $uid = $_SESSION['user_id']; 
          $query = "SELECT * FROM `events` ORDER BY `id`ASC LIMIT 4";
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
                        <span class="blue-bg indx"><?php echo $x++?> </span>
                    </td>
                    <td>
                        <h4 class="date"><a href="all_events.php"><?php echo $title ?></a></h4>
                    </td>
                    <td>
                        <span class="name"><a href="all_events.php"style="font-size: 16px"><?php echo $description ?></a></span>
                    </td>
                    <td>
                        <span class="ph#"><?php echo $date ?></span>
                    </td>
                    <td>
                        <span class="addr"><?php echo $venue ?></span>
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
              <!-- <td>
                 <span class="addr"><a href=''><button class="btn btn-danger btn-xs" >Accept</button></a></span>
                            </td>

                            <td>
                                <span class="addr"><button class="btn btn-success btn-xs" >Accepted</button></span>
                            </td> -->


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
<script type="text/javascript">
    $(document).ready(function () {
        'use strict';

        Highcharts.chart('chrt2', {
            chart: {
                zoomType: 'xy'
            },
            title: {
                style: {
                    display: 'none'
                }
            },
            xAxis: [{
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                ],
                crosshair: true
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value}°C',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                },
                title: {
                    text: 'Temperature',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Rainfall',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                labels: {
                    format: '{value} mm',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'horizontal',
                align: 'left',
                x: 30,
                verticalAlign: 'bottom',
            },
            series: [{
                name: 'Rainfall',
                type: 'column',
                yAxis: 1,
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1,
                    95.6, 54.4
                ],
                tooltip: {
                    valueSuffix: ' mm'
                }

            }, {
                name: 'Temperature',
                type: 'spline',
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
                tooltip: {
                    valueSuffix: '°C'
                }
            }]
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('#chrt3').highcharts({
                chart: {
                    zoomType: 'xy'
                },
                title: {
                    style: {
                        display: 'none'
                    }
                },
                xAxis: [{
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                    ],
                    crosshair: true
                }],
                yAxis: [{ // Primary yAxis
                    labels: {
                        format: '{value}°C',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    },
                    title: {
                        text: 'Temperature',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    }
                }, { // Secondary yAxis
                    title: {
                        text: 'Rainfall',
                        style: {
                            color: Highcharts.getOptions().colors[0]
                        }
                    },
                    labels: {
                        format: '{value} mm',
                        style: {
                            color: Highcharts.getOptions().colors[0]
                        }
                    },
                    opposite: true
                }],
                tooltip: {
                    shared: true
                },
                legend: {
                    layout: 'horizontal',
                    align: 'left',
                    x: 30,
                    verticalAlign: 'bottom',
                },
                series: [{
                    name: 'Rainfall',
                    type: 'column',
                    yAxis: 1,
                    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5,
                        216.4, 194.1, 95.6, 54.4
                    ],
                    tooltip: {
                        valueSuffix: ' mm'
                    }

                }, {
                    name: 'Temperature',
                    type: 'spline',
                    data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3,
                        13.9, 9.6
                    ],
                    tooltip: {
                        valueSuffix: '°C'
                    }
                }]
            });
        });

        Highcharts.chart('chrt4', {
            title: {
                style: {
                    display: 'none'
                }
            },
            xAxis: {
                gridLineWidth: 1,
                title: {
                    enabled: true,
                    text: 'Height (cm)'
                },
                startOnTick: true,
                endOnTick: true,
                showLastLabel: true
            },
            yAxis: {
                title: {
                    text: 'Weight (kg)'
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            },
            series: [{
                name: 'Target',
                type: 'polygon',
                data: [
                    [153, 42],
                    [149, 46],
                    [149, 55],
                    [152, 60],
                    [159, 70],
                    [170, 77],
                    [180, 70],
                    [180, 60],
                    [173, 52],
                    [166, 45]
                ],
                color: Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0.5).get(),
                enableMouseTracking: false

            }, {
                name: 'Observations',
                type: 'scatter',
                color: Highcharts.getOptions().colors[1],
                data: [
                    [161.2, 51.6],
                    [167.5, 59.0],
                    [159.5, 49.2],
                    [157.0, 63.0],
                    [155.8, 53.6],
                    [170.0, 59.0],
                    [159.1, 47.6],
                    [166.0, 69.8],
                    [176.2, 66.8],
                    [160.2, 75.2],
                    [172.5, 55.2],
                    [170.9, 54.2],
                    [172.9, 62.5],
                    [153.4, 42.0],
                    [160.0, 50.0],
                    [147.2, 49.8],
                    [168.2, 49.2],
                    [175.0, 73.2],
                    [157.0, 47.8],
                    [167.6, 68.8],
                    [159.5, 50.6],
                    [175.0, 82.5],
                    [166.8, 57.2],
                    [176.5, 87.8],
                    [170.2, 72.8],
                    [174.0, 54.5],
                    [173.0, 59.8],
                    [179.9, 67.3],
                    [170.5, 67.8],
                    [160.0, 47.0],
                    [154.4, 46.2],
                    [162.0, 55.0],
                    [176.5, 83.0],
                    [160.0, 54.4],
                    [152.0, 45.8],
                    [162.1, 53.6],
                    [170.0, 73.2],
                    [160.2, 52.1],
                    [161.3, 67.9],
                    [166.4, 56.6],
                    [168.9, 62.3],
                    [163.8, 58.5],
                    [167.6, 54.5],
                    [160.0, 50.2],
                    [161.3, 60.3],
                    [167.6, 58.3],
                    [165.1, 56.2],
                    [160.0, 50.2],
                    [170.0, 72.9],
                    [157.5, 59.8],
                    [167.6, 61.0],
                    [160.7, 69.1],
                    [163.2, 55.9],
                    [152.4, 46.5],
                    [157.5, 54.3],
                    [168.3, 54.8],
                    [180.3, 60.7],
                    [165.5, 60.0],
                    [165.0, 62.0],
                    [164.5, 60.3],
                    [156.0, 52.7],
                    [160.0, 74.3],
                    [163.0, 62.0],
                    [165.7, 73.1],
                    [161.0, 80.0],
                    [162.0, 54.7],
                    [166.0, 53.2],
                    [174.0, 75.7],
                    [172.7, 61.1],
                    [167.6, 55.7],
                    [151.1, 48.7],
                    [164.5, 52.3],
                    [163.5, 50.0],
                    [152.0, 59.3],
                    [169.0, 62.5],
                    [164.0, 55.7],
                    [161.2, 54.8],
                    [155.0, 45.9],
                    [170.0, 70.6],
                    [176.2, 67.2],
                    [170.0, 69.4],
                    [162.5, 58.2],
                    [170.3, 64.8],
                    [164.1, 71.6],
                    [169.5, 52.8],
                    [163.2, 59.8],
                    [154.5, 49.0],
                    [159.8, 50.0],
                    [173.2, 69.2],
                    [170.0, 55.9],
                    [161.4, 63.4],
                    [169.0, 58.2],
                    [166.2, 58.6],
                    [159.4, 45.7],
                    [162.5, 52.2],
                    [159.0, 48.6],
                    [162.8, 57.8],
                    [159.0, 55.6],
                    [179.8, 66.8],
                    [162.9, 59.4],
                    [161.0, 53.6],
                    [151.1, 73.2],
                    [168.2, 53.4],
                    [168.9, 69.0],
                    [173.2, 58.4],
                    [171.8, 56.2],
                    [178.0, 70.6],
                    [164.3, 59.8],
                    [163.0, 72.0],
                    [168.5, 65.2],
                    [166.8, 56.6],
                    [172.7, 105.2],
                    [163.5, 51.8],
                    [169.4, 63.4],
                    [167.8, 59.0],
                    [159.5, 47.6],
                    [167.6, 63.0],
                    [161.2, 55.2],
                    [160.0, 45.0],
                    [163.2, 54.0],
                    [162.2, 50.2],
                    [161.3, 60.2],
                    [149.5, 44.8],
                    [157.5, 58.8],
                    [163.2, 56.4],
                    [172.7, 62.0],
                    [155.0, 49.2],
                    [156.5, 67.2],
                    [164.0, 53.8],
                    [160.9, 54.4],
                    [162.8, 58.0],
                    [167.0, 59.8],
                    [160.0, 54.8],
                    [160.0, 43.2],
                    [168.9, 60.5],
                    [158.2, 46.4],
                    [156.0, 64.4],
                    [160.0, 48.8],
                    [167.1, 62.2],
                    [158.0, 55.5],
                    [167.6, 57.8],
                    [156.0, 54.6],
                    [162.1, 59.2],
                    [173.4, 52.7],
                    [159.8, 53.2],
                    [170.5, 64.5],
                    [159.2, 51.8],
                    [157.5, 56.0],
                    [161.3, 63.6],
                    [162.6, 63.2],
                    [160.0, 59.5],
                    [168.9, 56.8],
                    [165.1, 64.1],
                    [162.6, 50.0],
                    [165.1, 72.3],
                    [166.4, 55.0],
                    [160.0, 55.9],
                    [152.4, 60.4],
                    [170.2, 69.1],
                    [162.6, 84.5],
                    [170.2, 55.9],
                    [158.8, 55.5],
                    [172.7, 69.5],
                    [167.6, 76.4],
                    [162.6, 61.4],
                    [167.6, 65.9],
                    [156.2, 58.6],
                    [175.2, 66.8],
                    [172.1, 56.6],
                    [162.6, 58.6],
                    [160.0, 55.9],
                    [165.1, 59.1],
                    [182.9, 81.8],
                    [166.4, 70.7],
                    [165.1, 56.8],
                    [177.8, 60.0],
                    [165.1, 58.2],
                    [175.3, 72.7],
                    [154.9, 54.1],
                    [158.8, 49.1],
                    [172.7, 75.9],
                    [168.9, 55.0],
                    [161.3, 57.3],
                    [167.6, 55.0],
                    [165.1, 65.5],
                    [175.3, 65.5],
                    [157.5, 48.6],
                    [163.8, 58.6],
                    [167.6, 63.6],
                    [165.1, 55.2],
                    [165.1, 62.7],
                    [168.9, 56.6],
                    [162.6, 53.9],
                    [164.5, 63.2],
                    [176.5, 73.6],
                    [168.9, 62.0],
                    [175.3, 63.6],
                    [159.4, 53.2],
                    [160.0, 53.4],
                    [170.2, 55.0],
                    [162.6, 70.5],
                    [167.6, 54.5],
                    [162.6, 54.5],
                    [160.7, 55.9],
                    [160.0, 59.0],
                    [157.5, 63.6],
                    [162.6, 54.5],
                    [152.4, 47.3],
                    [170.2, 67.7],
                    [165.1, 80.9],
                    [172.7, 70.5],
                    [165.1, 60.9],
                    [170.2, 63.6],
                    [170.2, 54.5],
                    [170.2, 59.1],
                    [161.3, 70.5],
                    [167.6, 52.7],
                    [167.6, 62.7],
                    [165.1, 86.3],
                    [162.6, 66.4],
                    [152.4, 67.3],
                    [168.9, 63.0],
                    [170.2, 73.6],
                    [175.2, 62.3],
                    [175.2, 57.7],
                    [160.0, 55.4],
                    [165.1, 104.1],
                    [174.0, 55.5],
                    [170.2, 77.3],
                    [160.0, 80.5],
                    [167.6, 64.5],
                    [167.6, 72.3],
                    [167.6, 61.4],
                    [154.9, 58.2],
                    [162.6, 81.8],
                    [175.3, 63.6],
                    [171.4, 53.4],
                    [157.5, 54.5],
                    [165.1, 53.6],
                    [160.0, 60.0],
                    [174.0, 73.6],
                    [162.6, 61.4],
                    [174.0, 55.5],
                    [162.6, 63.6],
                    [161.3, 60.9],
                    [156.2, 60.0],
                    [149.9, 46.8],
                    [169.5, 57.3],
                    [160.0, 64.1],
                    [175.3, 63.6],
                    [169.5, 67.3],
                    [160.0, 75.5],
                    [172.7, 68.2],
                    [162.6, 61.4],
                    [157.5, 76.8],
                    [176.5, 71.8],
                    [164.4, 55.5],
                    [160.7, 48.6],
                    [174.0, 66.4],
                    [163.8, 67.3]
                ]

            }],
        });

        Highcharts.chart('chart5', {
            chart: {
                type: 'column'
            },
            title: {
                style: {
                    display: 'none'
                }
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Rainfall (mm)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Tokyo',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1,
                    95.6, 54.4
                ]

            }, {
                name: 'New York',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6,
                    92.3
                ]

            }, {
                name: 'London',
                data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3,
                    51.2
                ]

            }, {
                name: 'Berlin',
                data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8,
                    51.1
                ]

            }]
        });


        //===== To DO List Add Task Field =====//
        $('.add-tsk-btn').on('click', function () {
            $('div.add-tsk').slideToggle();
            return false;
        });

        //===== To Do List =====//
        $('.td-lst > li').on('click', function () {
            $(this).toggleClass('completed');
            return false;
        });

        //===== To Do List Deleted =====//
        $('.td-lst > li > a').on('click', function () {
            $(this).parent('li').slideUp();
            return false;
        });

        $('.add-tsk form > button').on('click', function () {
            var task_list = $('ul.td-lst');
            var task_item = $('.add-tsk form > input').val();
            var date = new Date();
            var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul",
                "Aug", "Sep", "Oct", "Nov", "Dec"
            ];
            var current_date = date.getDate() + ' ' + months[date.getMonth()] + ' ' + date.getFullYear();
            if (task_item !== '' && task_item !== 'undefined') {
                $(task_list).prepend('<li><h5>' + task_item +
                    '</h5> <span><i class="ion-ios-stopwatch"></i>' + current_date +
                    '</span> <a href="#" title=""><i class="ion-android-delete"></i></a></li>');
                $('.td-lst > li').on("click", function () {
                    $(this).toggleClass('active');
                });
                $('.add-tsk form > input').addClass('null');
                $('.add-tsk form > input').val('');
                $('.add-tsk form > input').focus();
                var attribute = $("ul.td-lst").children('li').eq(0).children('i');
                return false;
            }
        });

        //===== Circliful =====//
        if ($.isFunction($.fn.circliful)) {
            $('#circl-prg').circliful({
                animation: 1,
                animationStep: 3,
                foregroundBorderWidth: 5,
                backgroundBorderWidth: 5,
                percent: 66,
                textSize: 35,
                foregroundColor: '#50b8aa',
                backgroundColor: "#96d5f7",
                textStyle: 'font-size: 20px;',
                textColor: '#555555',
            });
        }

        //===== Full Calendar =====//
        if ($.isFunction($.fn.fullCalendar)) {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev',
                    center: 'title',
                    right: 'next'
                },
                height: 530,
                defaultDate: '2017-09-12',
                editable: true,
                eventLimit: true,
                events: [{
                    title: 'Long Event...',
                    start: '2017-09-04'
                },
                    {
                        title: 'Repeating Event',
                        start: '2017-09-09',
                        end: '2017-09-10'
                    },
                    {
                        title: 'Word Show...',
                        start: '2017-09-21'
                    }
                ]
            });
        }
    });
</script>
</body>

</html>