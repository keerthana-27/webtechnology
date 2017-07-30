<html>
<head>
<title>delete accounts</title>
</head>
<body bgcolor = pink>

	<h1><center>Delete account</center></h1>
	

<?php
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");

$a = $_POST["accno1"];
$query = "delete from useraccounts where account_num = '$a'";
if (!mysql_query($query,$conn))
  	{
	  die('Error: ' . mysql_error());
  	}
	else{?>
	 <pre>
Account deleted.
Your account has been permanently deleted.

You no longer have any information on our website and you have been permananently signed out of HAPPY PLACEMENTS. If you decide to join us again you have to re-register.

Thankyou for using HAPPY PLACEMENTS.<?php }

mysql_close($conn);
?>

<form name = "home" method = "POST" action = "homepage.php">
	<pre>
	<center><input type = "submit" name = "home" value = "HOME"></center>		
	</pre>
	</form>
	</body>
</html>

