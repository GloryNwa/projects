<?php
session_start();
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
}
else {
echo "You have not signed in";
}
?>
<?php
include_once ("php_includes/db_conx.php");     
$sql = "SELECT * FROM users WHERE username='$u' AND activated='1' LIMIT 1";
$user_query = mysqli_query($db_conx, $sql);
while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
$username = $row["surname"];
$firstname = $row["firstname"];
$surname = $row["surname"];
$weight = $row["weight"];
$height = $row["height"];
}

function filter($date)
{
    return trim(htmlspecialchars($date));
}

$username = filter($_POST['username'])
$firstname = filter($_POST['firstname'])
$surname = filter($_POST['surname'])
$weight = filter($_POST['weight'])
$height = filter($_POST['height'])

if (username)
{

$sql = mysql_query ("UPDATE users SET username='$username', firstname='$firstname', surname='$surname', weight='$weight', height='$height' WHERE username='$username'")
or die (mysql_error());
}
?>


<form action="change.php" method="post"> 
    Username: <input type="text" name="username"><br />
    Firstname: <input type="text" name="firstname"><br />
    Surname: <input type="text" name="surname"><br />
    weight: <input type="text" name="weight"><br />
    height: <input type="text" name="height"><br />
    <input type="submit" value="Submit">
</form>