<html>
	<head>
		<title>
		 Chennai
		</title>
	</head>
	<body bgcolor = "grey">
	<h1><center>JOB OFFERS IN CHENNAI</h1>

<?php
$a = $_POST['accno1'];
?>

<center><table border = "2" bordercolor = "blue" bgcolor = " white">
		<tr>
		<th> COMPANY NAME	</th>
		<th colspan = 2><center> CONTACT DETAILS</center></th>
		<th> DESIGNATION	</th>
		<th> ELIGIBILITY	</th>
		</tr>
		<tr>
		<td> IBM		</td>
		<td> PERUNGULATHUR	</td>
		<td> 90999999		</td>
		<td> HR			</td>
		<td> M.SC 		</td>		
		</tr>
		<tr>
		<td> IBM		</td>
		<td> PERUNGULATHUR	</td>
		<td> 90999999		</td>
		<td> MANAGER		</td>
		<td> PHD 		</td>
		</tr>
		<tr>
		<td> TCS		</td>
		<td> ANNA NAGAR		</td>
		<td> 26712515		</td>
		<td> HR			</td>
		<td> M.SC 		</td>
		</tr>
		<tr>
		<td> TCS		</td>
		<td> ANNA NAGAR		</td>
		<td> 26712515		</td>
		<td> MANAGER		</td>
		<td> PHD 		</td>
		</tr>
		
		</table></center>

<form name = "company" method = "POST" action = "apply1.php">
	
	<pre>



Have a look at the vacancy positions available and select the company name and designation from the list given below.


<font color = "blue" size= "5"><i>
	COMPANY			: <select name = "company">			
				  <option value = " "> </option>					  
				  <option value = "IBM">IBM</option>					  
				  <option value = "TCS">TCS</option>					  
				  </select>
	DESIGNATION	    	: <select name = "designation">	
				  <option value = " "> </option>							  
				  <option value = "HR">HR</option>
				  <option value = "HR">MANAGER</option>
				  </select>

	<input type = "submit" name = "submit" value = "APPLY">	
<input type = "text" name = "accno1" value = "<?php echo $a ?> "hidden>		  
				  
	</center>
	</pre>
	</form>
	</body>
</html>









