<html>
<head>
<title>select account page</title>
</head>
<body>


<?php
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");

$query = "select accnum from applications";
$result = mysql_query($query,$conn);
?>
<form name = "status" method = "POST">
<pre>
Select the user id from the drop down list box and click on DELETE button.


Select the user id: <select name = "id">
<?php while($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
?>
<option value = "<?php echo $row['accnum']; ?> "> <?php echo $row['accnum']; ?> </option>
<?php
 } 
?>
</select>
<center><input type = "submit" name = "status" value = "DELETE" formaction = "delete1.php"></center>		
</pre>

	</form>
	</body>
</html>
		
	
