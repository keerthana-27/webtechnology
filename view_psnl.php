<html>
<head>
<title>display personal</title>
</head>
<body bgcolor = pink>

	<h1><center>PERSONAL INFO</center></h1>
	

<?php
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");
$a = $_POST['accno1'];

$select_query = "select * from useraccounts where account_num='$a'";
$result = mysql_query($select_query);

?>
<center>
<table border=1>
<tr>
<th> ACCOUNT NUMBER</th>
<th> FIRST NAME </th>
<th> LAST NAME</th>
<th> DATE OF BIRTH</th>
<th> GENDER</th>
<th> USERNAME</th>
<th> EMAIL-ID </th>
<th> CONTACT NUMBER</th>
<th> ADDRESS </th>
<th> EDUCATION </th>
</tr>
	<?php
	while($row = mysql_fetch_array($result,MYSQL_ASSOC))
	{
	?>
	<tr>
	<td><?php echo $row['account_num'];?></td>
	<td><?php echo $row['f_name'];?></td>
	<td><?php echo $row['l_name'];?></td>
	<td><?php echo $row['dob'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['username'];?></td>
	<td><?php echo $row['emailid'];?></td>
	<td><?php echo $row['mob_num'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['education'];?></td>
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



