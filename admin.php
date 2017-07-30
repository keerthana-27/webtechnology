<html>
	<head>
		<title>
		 Admin Signin
		</title>
<style>
input[type=text],[type=password] select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

p.sansserif {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>
	</head>
	<body >
	<h1><center>ADMIN LOGIN PAGE</center></h1>
	<marquee><b><font color = "pink" size = "10"><i><u>Welcome to login page...!!!</u></i></font></b></marquee>


<p class="sansserif">Enter the username and password and click on SUBMIT button.</p>

<div>
  <form action="adminaccess.php" method = "POST">

    <label for="admin">USERNAME<br></label>
    <input type="text" name="admin"><br>


    <label for="pass">Username<br></label>
    <input type="text" name="pass"><br>

    
    <input type="submit" value="Submit">
  </form>
</div>


	</body>
</html>
