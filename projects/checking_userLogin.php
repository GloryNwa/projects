
<?php
# start the session
	set_include_path($_SERVER['DOCUMENT_ROOT']);
	include("/lib/always-https.php");	
# check if session variable login is set
if ($_SESSION['login']=="ok")
{
include "header.php";

} else {
?>
	You are not logged in. Please <a href="index.php">log in</a>.
<?php
}
?>
   
    
<?php
try{
   $database = "openwell_edouble";
    $username = "root";
    $password = "";
 // connect to database
$db = new PDO("mysql:host=localhost;dbname=$database",$username,$password);
$query = "SELECT id, qnty, price, category, brand, name, code, imageURL, weight, part_number, model FROM edoubleurl2_laptop_ac_adapter WHERE id < 30;";
$value = (isset($_GET[value])) ? $_GET[value] : 'NOTHING POSTED';
$sql = "SELECT imageURL FROM edoubleurl2_laptop_ac_adapter WHERE imageURL = $value";
$table =$db->query($query);
echo "<table style='background-color:white; width: 1170px; text-align: left'>";
foreach($table as $row)
{
echo "<tr id='row'>\n";
echo "<form method='post' action='updateLaptopAdaptor.php'>";
echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
 echo "<td><img src=\"" . $row['imageURL'] . "\" alt=\"\" width=\"180\" height=\"120\" />" . " &nbsp; </td>";
 echo "<td>code: <font style='color:#f00'> " . $row['code'] . "</font> &nbsp; ";
 echo "price: <input type='text'size='5' name='price' value='" . $row['price'] . "'>&nbsp;";
 echo "qnty: <input type='text'size='3' name='qnty' value='" . $row['qnty'] . "'>&nbsp;";
 echo "brand: <input type='text' size='6' name='brand' value='" . $row['brand'] . "'>&nbsp;";
 echo "weight: <input type='text' size='3' name='weight' value='" . $row['weight'] . "'>&nbsp;";
 echo "part#: <input type='text' size='137' name='part_number' value='" . $row['part_number'] . "'><br />";
 echo "model: <input type='text' size='136' name='model' value='" . $row['model'] . "'></td>";
  
 echo "<td style='float:right; margin-right:10px'><br /><br /><input type='submit' name='updateProduct' value='UPDATE' style='color:#00f;'>";
 echo "</form><br /><br />";
 echo "<form method='post' action='deleteProduct1.php'>";
 echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
 echo "<input type='submit' value='DELETE' style='color:#f00;'/></form></td>";
 echo "</tr>";
}
echo "</table>";

//destroy the PDO object
$db = null;
//if connection fails throw a PDO exception
}catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die(); }
  
    echo "<br />";
    include "footer.php";
?>