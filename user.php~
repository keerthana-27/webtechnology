<html>
	<head>
		<title>
		 userpage
		</title>
	</head>
	<body bgcolor = "grey">
	<h1><center>WELCOME...!!!!</center></h1>


<?php
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");

$a = $_POST["accno"];
$b = $_POST["user"];
$c = $_POST["pass"];

$select_query = "select * from useraccounts where account_num = '$a' && pwd = '$c'";
$result = mysql_query($select_query,$conn);


if(mysql_num_rows($result) == 0)
	echo "Username or password is incorrect";
else

{ ?>

	<form name = "user" method = "POST">
	<pre>
	
	 	<input type = "text" name = "accno1" value = "<?php echo $a ?> " hidden >
				To apply online for a vacancy please click on APPLY NOW button below.
	<center><input type = "submit" name = "apply" value = "APPLY NOW" formaction = "city.php"></center>
				To have a look at your profile and application details please click on VIEW button below.
	<center><input type = "submit" name = "view" value = "VIEW" formaction = "view.php"></center>
				To update your profile info or application info click on UPDATE button below.		
	<center><input type = "submit" name = "update" value = "UPDATE" formaction = "update.php"></center>
				To delete your user account or application click on DELETE button below.
	<center><input type = "submit" name = "delete" value = "DELETE" formaction = "delete.php"></center>		
				To add comments on our website click on ADD COMMENTS button below.
	<center><input type = "submit" name = "delete" value = "ADD COMMENTS" formaction = "comments.php"></center>		

	


	<center><input type = "submit" name = "home" value = "HOME" formaction = "homepage.php"></center>		
	
	</pre>
	</form>

<?php }

mysql_close($conn);
?>

	</body>
</html>
	
	
