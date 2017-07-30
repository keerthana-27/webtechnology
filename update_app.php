<html>
	<head>
		<title>
		 Updateapp
		</title>
	</head>
	<body bgcolor = "grey">
<?php
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");

$a = $_POST["accno1"];
$select_query = "select * from applications where accnum = '$a'";
$result = mysql_query($select_query);
?>
	<h1><center>UPDATE MY APPLICATION</center></h1>
	<marquee><b><font color = "blue" size = "15"><i><u>Welcome to update application...!!!</u></i></font></b></marquee>
	<form name = "signup" method = "POST" action = "modified2.php">
	<font color = "blue" size= "5"><i>
	<pre>
	<?php
	while($row = mysql_fetch_array($result,MYSQL_ASSOC))
	{
	?>
ACCOUNT NUMBER		: <input type = "text" name = "accno" value = "<?php echo $row['accnum']; ?> " disabled>
	COMPANY 		: <input type = "text" name = "company" value = "<?php echo $row['company']; ?> ">
	DESIGNATION		: <input type = "text" name = "desig" value = "<?php echo $row['designation']; ?> ">
	EXPERIENCE		: <input type = "text" name = "exp" value = "<?php echo $row['experience']; ?>">
	SALARY			: <input type = "text" name = "sal" value = "<?php echo $row['salary']; ?>">
	STATUS			: <input type = "text" name = "status" value = "<?php echo $row['status']; ?> " disabled>
	
	<?php }; ?>
<input type = "text" name = "accno1" value = "<?php echo $a ?> " hidden >

	<center><input type = "submit" name = "submit" value = "UPDATE"></center>		
	</pre>
	</form>
	</body>
</html>
