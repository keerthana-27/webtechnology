<html>
<head>
<title>delete accounts</title>
</head>
<body bgcolor = pink>

	<h1><center>Delete application</center></h1>
	

<?php
$id = $_POST['id'];
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");

$query = "delete from applications where accnum = '$id'";
if (!mysql_query($query,$conn))
  	{
	  die('Error: ' . mysql_error());
  	}
	else
		echo "Application is deleted Successfully!!";

mysql_close($conn);
?>

<form name = "home" method = "POST" action = "homepage.php">
	<pre>
	<center><input type = "submit" name = "home" value = "HOME"></center>		
	</pre>
	</form>
	</body>
</html>

