<html>
	<head>
		<title>
		 Comments page
		</title>
	</head>
	<body>


<?php
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");

$a = $_POST["userid"];
$b = $_POST["comments"];

$insert_query = "insert into reviews(Username,Comments)values('$a','$b')";

if($a == NULL OR $b == NULL)
	die('Please enter values for all the fields');
	
	else
	{
	if (!mysql_query($insert_query,$conn))
  	{
	  die('Error: ' . mysql_error());
  	}
	else
		echo "Your comments are inserted successfully.";
	}



mysql_close($conn);
?>

<form name = "home" method = "POST" action = "homepage.php">
	<pre>

	<center><input type = "submit" name = "home" value = "HOME"></center>		
	</pre>
	</form>
	

</body>
</html>

