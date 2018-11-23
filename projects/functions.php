<?php 
function loggedin() {

  if(isset($_SESSION['user_id']) &&!empty($_SESSION['user_id'])) {

    return true;
  }  else {
    return false;
  }

}


function getuserId($id) {

 $query = "SELECT `$id` FROM `users` WHERE `id`='".$_SESSION['user_id']."'";
   if ($query_run = mysql_query($query)) {

    if($query_result = mysql_result($query_run, 0, $id)) {
      return $query_result;
    }
   }

}
// $query_result = mysql_result( $query_result, 0, 'column_name');
// $result = mysql_query("SELECT foo FROM bar WHERE foo = 1");
// if(!$result || !mysql_num_rows($result))
// {
//     die("Empty dataset.");
// }