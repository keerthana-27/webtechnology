<html>
<head>
<title>set status page</title>
</head>
<body>


<?php
$id = $_POST['id'];
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");
?>

<form name = "status" method = "POST" action = "set.php">
Set the status as OK or REJECTED for the user application you selected by selecting any one from the list shown below.

	<font color = "blue" size= "5"><i>
	<pre>



	SET STATUS		: <select name = "status">			
				  <option value = " "> </option>					  
				  <option value = "OK">OK</option>					  
				  <option value = "REJECTED">REJECTED</option>					  
				  </select>
	
	<input type = "submit" name = "submit" value = "SET">	
<input type = "text" name = "userid" value = "<?php echo $id ?> "hidden>	  
				  
	</center>
	</pre>
	</form>

