<html>
<head>
<title>application page</title>
</head>
<body>


<?php
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");

$accnum = $_POST["accnum"];
$company = $_POST["company"];
$designation = $_POST["designation"];
$experience = $_POST["exp"];
$salary = $_POST["salary"];
$status = $_POST["status"];
$a = $_POST['accno1'];



$insert_query = "insert into applications(accnum,company,designation,experience,salary,status)values('$accnum','$company','$designation','$experience','$salary','$status')";


if($accnum == NULL OR $experience == NULL OR $salary == NULL)
	die('Please enter values for all the fields');
	
	else
	{
	if (!mysql_query($insert_query,$conn))
  	{
	  die('Error: ' . mysql_error());
  	}
	else
		echo "Your application is inserted successfully and is under scrutiny. Status will be updated in next 24 hours";
	}



mysql_close($conn);
?>

<form name = "home" method = "POST" action = "homepage.php">
	<pre>

<input type = "text" name = "accno1" value = "<?php echo $a ?> " hidden>
	<center><input type = "submit" name = "home" value = "HOME"></center>		
	</pre>
	</form>
	

</body>
</html>

