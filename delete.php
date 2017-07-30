<html>
	<head>
		<title>
		 Delete page
		</title>
	</head>
	<body bgcolor = "grey">
	<b><font color = "white" size = "15"><i><u>Do you want to delete ??</u></i></font></b>
<?php
$a = $_POST["accno1"];
?>
	<form name = "view" method = "POST">
	<pre>
<input type = "text" name = "accno1" value = "<?php echo $a ?> " hidden >

		To delete your account in HAPPY PLACEMENTS click on Personal Info button shown below.

	<input type = "submit" name = "psnl" value = "Personal Info" formaction = "delete_psnl.php">


		To delete your account in HAPPY PLACEMENTS click on Application Info button shown below.
	
	<input type = "submit" name = "app" value = "Application Info" formaction = "delete_app.php">
		
	</pre>
	</form>
	</body>
</html>
	
