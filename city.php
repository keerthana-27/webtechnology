<html>
	<head>
		<title>
		 Homepage
		</title>
	</head>
	<body bgcolor = "grey">
<?php
$a = $_POST['accno1'];
?>


	<marquee><b><font color = "green" size = "12"><i><u>Choose your city ...!!!</u></i></font></b></marquee>
	<form name = "city" method = "POST">
	<pre>



India is a large country with many places to live, each with its own weather, culture, services and more.
Even if you have friends and family living in India, take time to think about what you want your new life to be like. 
Do you wish to live in a large city? 




									<input type = "submit" name = "chennai" value = "CHENNAI" formaction = "chennai.php">			<input type = "submit" name = "bglr" value = "BANGALORE" formaction = "bglr.php">
















	<center><input type = "submit" name = "home" value = "HOME" formaction = "homepage.php"></center>		
	
<input type = "text" name = "accno1" value = "<?php echo $a ?> " hidden>
		
	</pre>
	</form>
	</body>
</html>
	
