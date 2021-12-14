<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
	<form class="box" action="validation.php" method="post">
		<h1>Login</h1>
		<input type="text" name="user" placeholder="Username" required>
		<input type="password" name="passward" placeholder="Password" required>
		<input type="submit" name="" value="Login"><br/>
		<input type = "checkbox" class="check-box"><span>Remember Password</span>
		<h4>Dont have an account?</h4><button type="button" class="btn" onclick="register">Sign Up</button>
	</form>

</body>
</html> 