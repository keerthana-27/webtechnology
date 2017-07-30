<html>
<head>
<title>insert page</title>
</head>
<body>


<?php
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("placements");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$userid = $_POST["userid"];
$pass = $_POST["pass"];
$pass1 = $_POST["pass1"];
$email = $_POST["email"];
$mobnum = $_POST["mobnum"];
$address = $_POST["address"];
$edu = $_POST["edu"];

if($pass==$pass1)
{

$insert_query = "insert into useraccounts(f_name,l_name,dob,gender,username,pwd,emailid,mob_num,address,education)values('$fname','$lname','$dob','$gender','$userid','$pass','$email','$mobnum','$address','$edu')";


if($fname== NULL OR $lname == NULL OR $dob == NULL OR $gender == NULL OR $userid == NULL OR $email == NULL OR $mobnum == NULL OR $address == NULL OR $edu == NULL)
	die('Please enter values for all the fields');
	
	else
	{
	if (!mysql_query($insert_query,$conn))
  	{
	  die('Error: ' . mysql_error());
  	}
	else{
		 ?><pre>	"Account Created Successfully!!"

	Congratulations, your account has been created.
	An email is being sent to the address you provided.
	Your account number is </pre><?php
$select_query = "select * from useraccounts where f_name = '$fname'";
$result = mysql_query($select_query);

	while($row = mysql_fetch_array($result,MYSQL_ASSOC))
	{
echo $row['account_num'];
	}
	}
	}
}

else
	die("Passwords do not match");

mysql_close($conn);
?>

<form name = "home" method = "POST" action = "homepage.php">
	<pre>


	<center><input type = "submit" name = "home" value = "HOME"></center>		
	</pre>
	</form>
	

</body>
</html>

