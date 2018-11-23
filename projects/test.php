<?php 
include('database/confiq.inc.php');

              if(isset($_GET['id']) &&isset($_SESSION['user_id'])){ 
    echo "string";exit;
                    
                 $user_id   = $_SESSION['user_id'];

                    $id      = $_GET['id'];
     
                  
                if(!empty($user_id)&&!empty( $id )) {
                  $query = "SELECT * FROM `accept_event` WHERE `user_id`='$user_id' AND `event_id`='$id'";             
                   if ($query_run = mysql_query($query)) {

                    $query_num_rows = mysql_num_rows($query_run);

                      if ($query_num_rows < 0) {
                
                   echo '<td>
                           <span><a href="acceptEvent.php?id='.$id.'"><button class="btn btn-primary active btn-xs">Accept</button></a></span>
                        </td>';
                     
                     }else if ($query_num_rows > 0){
                     
                        echo'<td>
                             <span><a href="acceptEvent.php?id='.$id.'"><button class="btn btn-primary disabled btn-xs">Accepted</button></a></span>
                            </td>';
                          }
                         }
                        }                              
                       
                       }

                   ?>




                   if(!empty($user_id)&&!empty( $id )) {
                  $query = "SELECT * FROM `accept_event` WHERE `user_id`='$user_id' AND `event_id`='$id'";

                   if ($query_run = mysql_query($query)) {

                    $query_num_rows = mysql_num_rows($query_run);

                      if ($query_num_rows ==0) {
                
                        echo '<td>
                               <span><a href="acceptEvent.php?id='.$id.'"><button class="btn btn-primary active btn-xs">Accept</button></a></span>
                             </td>';
                     
                     }else if ($query_num_rows ==1){
                     
                        echo'<td>
                              <span><a href="acceptEvent.php?id='.$id.'"><button class="btn btn-primary disabled btn-xs">Accepted</button></a></span>
                            </td>';
                          }
                         }
                        }      