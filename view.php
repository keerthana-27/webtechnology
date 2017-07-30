<html>
	<head>
		<title>
		 Viewpage
		</title>
	</head>
	<body bgcolor = "grey">
<?php
$a = $_POST['accno1'];


	//<marquee><b><font color = "blue" size = "15"><i><u>Welcome ...!!!</u></i></font></b></marquee>?>

		

	<form name = "view" method = "POST">
	<pre>

					Have a glance at your profile or application.




		To view your personal details click on Personal Info button shown below.

				<input type = "submit" name = "psnl" value = "Personal Info" formaction = "view_psnl.php">


		To view your application details click on Application Info button shown below.

				<input type = "submit" name = "app" value = "Application Info" formaction = "view_app.php">
	
<input type = "text" name = "accno1" value = "<?php echo $a ?> " hidden>	
	</pre>
	</form>
	</body>
</html>
	
