<html>
<head>
<title>update-query page</title>
</head>
<body>


<?php
$id = $_POST["accno"];
$a = $_POST["company"];
$b = $_POST["desig"];
$c = $_POST["exp"];
$d = $_POST["sal"];
$e = $_POST["status"];
echo $id;

$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");


$update_query = "update applications set company='$a',designation='$b',experience='$c',salary='$d' where accnum='$id'";

	if (!mysql_query($update_query,$conn))
  	
	  	die('Error: ' . mysql_error());
  	
	else
		echo "Values updated Successfully!!";

mysql_close($conn);
?>
<form name = "home" method = "POST" action = "homepage.php">
<center><input type = "submit" name = "submit" value = "HOME"></center>
</form>
	
