
<?php

$Connection_error ='Connection Failed.';


$mysql_host ='localhost';
$mysql_user ='root';
$mysql_pass ='';

$mysql_db = 'procedural_php';


if (!@mysql_connect($mysql_host, $mysql_user, $mysql_pass)|| !@mysql_select_db($mysql_db)){


 exit($Connection_error);

//  }else {
//  	echo 'Connected';
 }








  // $connection = mysql_connect('localhost', 'root', '', 'procedural_php');
    
  //   if($connection){

  //   	echo "<h3><center>Connected</centr></h3>";

  //   } else {


  //   	echo"Connection Failed";
  //   }








?>