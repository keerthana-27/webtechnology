<html>
	<head>
		<title>
		 Updatepsnl
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
$select_query = "select * from useraccounts where account_num = '$a'";
$result = mysql_query($select_query);
?>
	<h1><center>UPDATE PERSONAL PAGE</center></h1>
	<marquee><b><font color = "blue" size = "15"><i><u>Welcome to update personal page...!!!</u></i></font></b></marquee>
	<form name = "signup" method = "POST" action = "modified1.php">
	<font color = "blue" size= "5"><i>
	<pre>
	<?php
	while($row = mysql_fetch_array($result,MYSQL_ASSOC))
	{
	?>
ACCOUNT NUMBER		: <input type = "text" name = "accno" value = "<?php echo $row['account_num']; ?> " disabled>
	FIRST NAME 		: <input type = "text" name = "fname" value = "<?php echo $row['f_name']; ?> " >
	LAST NAME		: <input type = "text" name = "lname" value = "<?php echo $row['l_name']; ?> " >
	DATE OF BIRTH		: <input type = "text" name = "dob" value = "<?php echo $row['dob']; ?>" disabled>
	GENDER			: <input type = "text" name = "gender" value = "<?php echo $row['gender']; ?>"disabled>
	USERNAME		: <input type = "text" name = "userid" value = "<?php echo $row['username']; ?> ">
	PASSWORD		: <input type = "password" name = "pass" value = " <?php echo $row['pwd']; ?>"disabled>
	EMAIL-ID		: <input type = "text" name = "email" value = "<?php echo $row['emailid']; ?> ">
	CONTACT NUMBER		: <input type = "text" name = "mobnum" value = " <?php echo $row['mob_num']; ?>">
	ADDRESS		  	:
				 <textarea rows= "22" cols = "33" name = "address" value = ""><?php echo $row['address']; ?></textarea>
	EDUCATIONAL QUALIFICATION:
				<textarea rows= "22" cols = "33" name = "edu" value = ""><?php echo $row['education']; ?></textarea>

	<?php }; ?>
<input type = "text" name = "accno1" value = "<?php echo $a ?> " hidden >
	<center><input type = "submit" name = "submit" value = "UPDATE"></center>		
	</pre>
	</form>
	</body>
</html>
