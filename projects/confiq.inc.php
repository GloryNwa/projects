
<?php

$Connection_error ='Connection Failed.';


$mysql_host ='localhost';
$mysql_user ='root';
$mysql_pass ='';

$mysql_db = 'procedural_php';


if (mysql_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db)){

echo 'connected';
}else {
 echo $Connection_error;
}


//  }else {











?>