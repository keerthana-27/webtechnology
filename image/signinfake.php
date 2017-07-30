
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
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

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>
<body>

<h2><center>HAPPY PLACEMENTS</center></h2>

<div>
  <form action="user.php">
    <label for="fname">Account Number<br></label>
    <input type="text" id="acc" name="accno"><br>


    <label for="lname">Username<br></label>
    <input type="text" id="user" name="user"><br>


    <label for="pass">Password<br></label>
    <input type="text" id="pass" name="pass">

    
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

