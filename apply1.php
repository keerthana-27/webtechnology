<html>
	<head>
		<title>
		 Apply page
		</title>
	</head>
	<body bgcolor = "pink">
	<h1><center>Check the details and fill the fields</center></h1>
<?php
$company = $_POST['company'];
$designation = $_POST['designation'];
$a = $_POST['accno1'];
?>

<form name = "apply" method = "POST" action = "insert_ch.php">
	<font color = "blue" size= "5"><i>
	<pre>
	ACCOUNT NUMBER		: <input type = "text" name = "accnum" value = "">
	COMPANY 		: <input type = "text" name = "company" value = "<?php echo $company ?> ">
	DESIGNATION		: <input type = "text" name = "designation" value = "<?php echo $designation ?>">
	EXPERIENCE		: <input type = "text" name = "exp" value = " ">
	EXPECTED SALARY		: <input type = "text" name = "salary" value = " ">
				  <input type = "text" name = "status" value = " " hidden>

<input type = "text" name = "accno1" value = "<?php echo $a ?> " hidden>	

	<center><input type = "submit" name = "submit" value = "APPLY"></center>		
	</pre>
	</form>
	</body>
</html>
