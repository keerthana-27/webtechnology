<html>
<head>
<title>display reviews</title>
</head>
<body bgcolor = lightblue>

	<h1><center>REVIEWS</center></h1>
	

<?php
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");

$select_query = "select * from reviews";
$result = mysql_query($select_query);
?>
<center>
<table border=1>
<tr>
<th> S.NO.</th>
<th> USERNAME </th>
<th> REVIEWS </th>
</tr>
	<?php
	while($row = mysql_fetch_array($result,MYSQL_ASSOC))
	{
	?>
	<tr>
	<td><?php echo $row['S.No.'];?></td>
	<td><?php echo $row['Username'];?></td>
	<td><?php echo $row['Comments'];?></td>
	</tr></center>
	<?php }; ?>
</table>
<pre>
<form name = "home" method = "POST" action = "homepage.php">








<center><input type = "submit" name = "submit" value ="HOME"></center>


</body>
</html>



