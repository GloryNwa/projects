
<?php
  $id = $_GET['id'];

$query = "SELECT `file` FROM `resources` WHERE id = $id";
 if ($query_run = mysql_query($query)) {

   while($query_row = mysql_fetch_assoc($query_run)){
             
          $file   = $query_row['file'];

          echo $file;

       ?>