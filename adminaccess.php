<html>
	<head>
		<title>
		 admin login
		</title>
	</head>
	<body bgcolor = "grey">
<h1><center>WELCOME KEERTHANA</center></h1>
	

<?php
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');

$a = $_POST["admin"];
$b = $_POST["pass"];


if(!($a == "Keerthana" && $b == "Keets"))
	echo "Username or password is incorrect";
else

{ ?>

	<form name = "admin" method = "POST">
	<pre>




To view all the applications of users click on VIEWALL button below.
	
	<center><input type = "submit" name = "view" value = "VIEWALL" formaction = "viewall.php"></center>

To delete a particular user's application click on DELETE BY ID button below.

	<center><input type = "submit" name = "del_id" value = "DELTE BY ID" formaction = "chooseid.php"></center>

To delete all the rejected applications click on DELETE REJECTED button below.

	<center><input type = "submit" name = "del_rej" value = "DELETE REJECTED" formaction = "delrej.php"></center>		
	
	</pre>
	</form>

<?php }

mysql_close($conn);
?>

	</body>
</html>
	
	
