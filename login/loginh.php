<?php
	session_start();
	if(isset($_SESSION['id']))
	{
		header("Location: successful-login.html");
	}
	else{
		session_destroy();
	}
?>


<html>
<head>
	<link rel="stylesheet" href="../css/w3.css" />
	<title>Log Page</title>
</head>

<body style="color:white">
<div style="text-align:center">
    <p1>Login</p1>

    	
	<form  method="post" action="login.php">
		<div>
			username: <input type="text" id="username" name="username" class="username"></input></br></br></br>
			password: <input type="password" id="password" name="password"></input></br></br></br>
			<input type="submit" value="Login" name="Login">
    		</div>
	</form>
	<a href="signin.html">SignIn</a>
	<?php echo "Hi";?>
</div>
</body>
</html>
