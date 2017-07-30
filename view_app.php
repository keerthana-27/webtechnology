<html>
<head>
<title>display applications</title>
</head>
<body bgcolor = pink>

	<h1><center>APPLICATION INFO</center></h1>
	

<?php
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");

$a = $_POST['accno1'];
$select_query = "select * from applications where accnum = '$a'";
$result = mysql_query($select_query);
?>
<center>
<table border=1>
<tr>
<th> ACCOUNT NUMBER</th>
<th> COMPANY NAME </th>
<th> DESIGNATION </th>
<th> EXPERIENCE </th>
<th> SALARY </th>
<th> STATUS </th>
</tr>
	<?php
	while($row = mysql_fetch_array($result,MYSQL_ASSOC))
	{
	?>
	<tr>
	<td><?php echo $row['accnum'];?></td>
	<td><?php echo $row['company'];?></td>
	<td><?php echo $row['designation'];?></td>
	<td><?php echo $row['experience'];?></td>
	<td><?php echo $row['salary'];?></td>
	<td><?php echo $row['status'];?></td>
	</tr></center>
	<?php }; ?>

</table>
<pre><form name = "home" method = "POST" action = "homepage.php">
	


	<center><input type = "submit" name = "home" value = "HOME"></center>		
	</pre>
	</form>
	
<input type = "text" name = "accno1" value = "<?php echo $a ?> " hidden>


</body>
</html>



