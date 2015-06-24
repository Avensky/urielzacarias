<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Avensky</title>
</head>
<?php include("header.php"); ?>
<body>
<form action="signup.php" method="POST">
	First Name:	<input type="txt" name="firstname" value=""><br />
	Last Name: <input type="txt" name="lastname" value=""><br />
	Username: <input type="txt" name="username" value=""><br />
	Password: <input type="password" name="password" value=""><br />
	Retype Password:<input type="password" name="retypepassword" value=""><br />
	Adress line 1: <input type="txt" name="address1" value=""><br />
	Address line 2: <input type="txt" name="address2" value=""><br />
	Apt Number: <input type="txt" name="apt" value=""><br />
	City: <input type="txt" name="city" value=""><br />
	Zip Code: <input type="txt" name="zipcode" value=""><br />
	Country: <input type="txt" name="country" value=""><br />
	<br />
	<input type="submit" name="submit" value="Sign Up!">
</form>
</body>
<?php include("footer.php"); ?>
</html>