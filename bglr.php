<html>
	<head>
		<title>
		 Bangalore
		</title>
	</head>
	<body bgcolor = "grey">
	<h1><center>JOB OFFERS IN BANGALORE</h1>

<?php
$a = $_POST['accno1'];
?>

<center><table border = "1" bordercolor = "blue" bgcolor = " white">
		<tr>
		<th> COMPANY NAME	</th>
		<th colspan = 2><center> CONTACT DETAILS</center></th>
		<th> DESIGNATION	</th>
		<th> ELIGIBILITY	</th>
		</tr>
		<tr>
		<td> HCL		</td>
		<td> VADAPALANI		</td>
		<td> 42345667		</td>
		<td> PA			</td>
		<td> M.SC 		</td>		
		</tr>
		<tr>
		<td> HCL		</td>
		<td> VADAPALANI		</td>
		<td> 42345667		</td>
		<td> RECEPTIONIST		</td>
		<td> DEGREE		</td>
		</tr>
		<tr>
		<td> CTS		</td>
		<td> PORUR		</td>
		<td> 26712535		</td>
		<td> PA			</td>
		<td> M.SC 		</td>
		</tr>
		<tr>
		<td> CTS		</td>
		<td> PORUR		</td>
		<td> 26712535		</td>
		<td> RECEPTIONIST		</td>
		<td> DEGREE 		</td>
		</tr>
		
		</table></center>
<form name = "company" method = "POST" action = "apply2.php">
	
	<pre>



Have a look at the vacancy positions available and select the company name and designation from the list given below.


<font color = "blue" size= "5"><i>
	
	COMPANY			: <select name = "company">			
				  <option value = " "> </option>					  
				  <option value = "HCL">HCL</option>					  
				  <option value = "CTS">CTS</option>					  
				  </select>
	DESIGNATION	    	: <select name = "designation">	
				  <option value = " "> </option>							  
				  <option value = "PA">PA</option>
				  <option value = "RECEPTIONIST">RECEPTIONIST</option>
				  </select>

	<input type = "submit" name = "submit" value = "APPLY">	
<input type = "text" name = "accno1" value = "<?php echo $a ?> "hidden>		  
				  
	</center>
	</pre>
	</form>
	</body>
</html>









