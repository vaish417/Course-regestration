<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Animated Registration Form</title>
	<link rel="stylesheet" type="text/css" href="CSS/registerp.css">
</head>
<body>
	<form class="box" action="registration.php" method="post">
		<h1>Register</h1>
		<input type="text" name="name" placeholder="Enter Name" required>
		<input type="text" name="user" placeholder="Username" required>
		<input type="password" name="password" placeholder="Password" required>
		<input type="password" name="passwordc" placeholder="Confirm Password" required>
		<input type="tel" name="mobile" placeholder="Mobile" required>
		<input type="email" name="email" placeholder="Email" required>
		<input type="submit" name="" value="Register">
		<h4>Already Registered?</h4><a href="loginp11.php"><button type="button" class="btn">Login</button></a>
	</form>

</body>
</html>