<html>
<head>
<title>update-query page</title>
</head>
<body>


<?php
$id = $_POST['accno'];
$a = $_POST['fname'];
$b = $_POST['lname'];
$c = $_POST['userid'];
$d = $_POST['email'];
$e = $_POST['mobnum'];
$f = $_POST['address'];
$g = $_POST['edu'];
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");


$update_query = "update useraccounts set f_name = '678' where account_num='$id'";

	if (!mysql_query($update_query,$conn))
  	
	  	die('Error: ' . mysql_error());
  	
	else
		echo "Values updated Successfully!!";

mysql_close($conn);
?>
<form name = "home" method = "POST" action = "homepage.php">
<center><input type = "submit" name = "submit" value = "HOME"></center>
</form>
	
