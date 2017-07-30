<html>
<head>
<title>status-query page</title>
</head>
<body>


<?php
$id1 = $_POST['userid'];
$status = $_POST['status'];
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");


$update_query = "update applications set status = '$status' where accnum = '$id1'";

	if (!mysql_query($update_query,$conn))
  	
	  	die('Error: ' . mysql_error());
  	
	else
		echo "Status updated Successfully!!";

mysql_close($conn);
?>
<form name = "home" method = "POST" action = "homepage.php">
<center><input type = "submit" name = "submit" value = "HOME"></center>
</form>
	
