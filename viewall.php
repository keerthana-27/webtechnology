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

$select_query = "select * from applications";
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
<pre>
<form name = "admin" method = "POST" action = "status.php">







To set status for the user click on SET STATUS button shown below.

<center><input type = "submit" name = "submit" value = "SET STATUS"></center>


</body>
</html>



