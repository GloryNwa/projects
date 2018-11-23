<?php
session_start();
include('includes/header_blade.php');
include('database/confiq.inc.php');
?>

<style>
 a:hover{
    text-decoration:underline;                 
  </style>

<body class="expand-data panel-data">
    
   <?php
include ('includes/Top_bar.php');



  include ('includes/nav.php');
  ?>
   
         <div class="col-md-12 grid-item col-sm-12 col-lg-12">
      <div class="stat-box widget bg-clr3">
          <div class="wdgt-ldr">
          </div>

            <i class="fa fa-bullhorn" style="font-size: 18px;"></i>
          <div class="stat-box-innr">
           <div style="text-align:center;  color: #fff">INFORMATION DESK</div>
            <h4></h4>
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
  
        <div class="table-wrap">

      
         
         <table class="table table-bordered style2 ">

    <?php 
       if (isset( $_SESSION['alert'])){
         echo  $_SESSION['alert']; 
         unset( $_SESSION['alert']);
       }

         ?>  
            <thead>
            <tr>
                <th>S/N</th>
                <th>Title</th>
                <th>Discription</th>
                <th>Photos</th>
              <!--   <th>Date</th> -->
            
               </tr>
              </thead>
              <tbody>
            <?php

         $query = "SELECT * FROM `information` ORDER BY `id`DESC";
                if ($query_run = mysql_query($query)) {

         $x = 1;
         while($query_row = mysql_fetch_assoc($query_run)){
             
              $title     = $query_row['title'];
              $text_body = $query_row['text_body'];
              $file = $query_row['file'];
              $id  = $query_row['id'];
            
          ?>


                <tr class="resource-holder">
                    <td>
                        <span class="blue-bg indx"><?php echo $x++ ?></span>         
                    </td>
                   
                    <td>
                        <h4 class="date"><?php echo (substr($title,0,100))?></h4>
                           <ul class="nav nav-pills">
                          <li role="presentation">
                             <a href="edit_info_blade.php?id=<?php echo $query_row['id']; ?>"
                              <span class="fa fa-pencil" style="color:#009efb;"> Edit</span>  
                              <!--   echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a>  -->
                             </a><br><br><br>
                          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <li role="presentation">
                              <a onclick="return confirm('Are you really sure?')" href="delete_info.php?id=<?php echo $query_row['id']; ?>">
                               <span class="fa fa-trash" style="color:red;"> Delete</span> 
                              </a>
                          </li>
                      </ul>
                
                    </td>
                    <td>
                        <span class="name"style="font-size: 16px;"><?php echo (substr($text_body,0,200)) ?></span>
                    </td>
                     <td>
                      <img src=<?php echo "InfoUploads/" .$file." style=width:100px; border:none";?>><br><br>
                   </td>
                    <!-- <td>
                        <span class="">{{$information->created_at}}</span>
                    </td>
                   -->
                   
                </tr>

           <!--  <div class="alert alert-info">No Information Found</div> -->
            <?php
              }

            }


            ?>
      
   
         
        </tbody>
    </table>
   
</div>
</div>   
</div>

<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-header">
   <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
    <h5 class="modal-title" text="center" id="myModalLabel">Delete</h5>
   </div>
  <div class="modal-dialog" role="document">
    <form class="delete" action='{{route('deletePost', 'manage_info')}}'method="POST">
      {{method_field('')}}
      {{csrf_field()}}
       <div class="modal-body">
         <p class="text-center">Are you sure you really want to delete this?</p>
        <input type="hidden" name="id" value="id">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="submit" value="Delete">

        <div class="modal-footer">
         <button type="button" class="btn btn-success" data-dismiss="modal">Yes</button> 
         <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
          

        </div>
    </form>
    </div>
    </div>




@include('includes/footer')

