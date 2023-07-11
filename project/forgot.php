<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <style>
        .forgot-password-form {
	width: 300px;
	margin: 0 auto;
	padding: 20px;
	border: 1px solid #ccc;
    background: #7c06b3;
	text-align: center;
    box-shadow: 25px 25px 75px rgba(0, 0, 0, 0.25),
  10px 10px 70px rgba(0, 0, 0, 0.25),
  inset 5px 5px 10px rgba(0, 0, 0, 0.5),
  inset 5px 5px 20px rgba(255, 255, 255, 0.2),
  inset -5px -5px 15px rgba(0, 0, 0, 0.75);
  border-radius: 10px;

}

h1 {
	margin-top: 0;
}

form input[type="email"], form input[type="submit"] {
	display: block;
	width: 100%;
	margin-bottom: 10px;
	padding: 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid #ccc;
}

form input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	cursor: pointer;
}

form input[type="submit"]:hover {
	background-color: #45a049;
}

a {
    color: #FF5f00;
	text-decoration: none;
}

a:hover {
	color: #000;
}

    </style>
	<div class="forgot-password-form">
		<h1>Forgot Password?</h1>
		<form>
			<input type="email" name="email" placeholder="Email">
			<input type="submit" name="btn" value="Submit">
		</form>
		<p>Remembered your password? <a href="log.php">Login</a></p>
		<p>Don't have an account? <a href="Register.php">Register</a></p>
	</div>
</body>
</html>