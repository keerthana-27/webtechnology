<html>
	<head>
		<title>
		 Signup
		</title>
<style>
input[type=text] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}

input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}

input[type=date] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}

textarea {
    width: 60%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #3CBC8D;
    color: white;
    font-size: 16px;
    resize: none;
}

input[type=submit] {
    width: 20%;
    background-color: rgb(47, 139, 153);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: orange;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
p.groove {
	border-style: groove;
	color: green;
	width: 500px
}
</style>
	</head>
	<body bgcolor = "">
	<h1><center><p class="groove">Create a New Account</p></center></h1>
	<center><b><font color = "#3CBC8D" size = "3"><i>Come join our community!  Let's sign up your account.
 Already have one?<a href = "http://localhost/Project/signin.php"><u>Sign in here</a></u></i></font></b></center>
	<form name = "signup" method = "POST" action = "create.php">			<img src = "pro4.jpg" align = "right" width  = "600" height = "300">
	<font color = "rgb(47,139,153)" size= "2"><i>
	
	FIRST NAME 		:<br> <input type = "text" name = "fname" value = " "><br>
	LAST NAME		:<br> <input type = "text" name = "lname" value = " "><br>
	DATE OF BIRTH		:<br> <input type = "date" name = "dob" value = " "><br>
	GENDER			:<br> <input type = "radio" name = "gender" value = "FEMALE"><font color = "#3CBC8D" size= "2"><i>FEMALE</i></font>
			  	 <br> <input type = "radio" name = "gender" value = "MALE"><font color = "#3CBC8D" size= "2"><i>MALE</i></font><br><br>
	USERNAME		:<br> <input type = "text" name = "userid" value = " "><br>
	PASSWORD		:<br> <input type = "password" name = "pass" value = " "><br>
	RE ENTER PASSWORD 	: <br><input type = "password" name = "pass1" value = " "><br>
	EMAIL-ID		: <br><input type = "text" name = "email" value = " "><br>








	CONTACT NUMBER		: <br><input type = "text" name = "mobnum" value = " "><br>
	ADDRESS		  	:<br>
				 <textarea rows= "22" cols = "33" name = "address" value = " "></textarea><br>
	EDUCATIONAL QUALIFICATION:<br>
				<textarea rows= "22" cols = "33" name = "edu" value = " "></textarea><br>


<pre>				<input type = "submit" name = "submit" value = "CREATE">			<input type = "submit" name = "home" value = "HOME" formaction = "homepage.php">	</pre>		
	
	</form>
	</body>
</html>
