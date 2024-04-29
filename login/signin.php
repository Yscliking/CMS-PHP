<html>
<head>
<style>
	body{
	text-align:center;
	background-image:url('./img3.png');
	color:black
}

</style>
</head>
<body>
	<h1 >White and Black is a constract </h1>
</body>
</html>

<?php
	if(empty($_POST['username'])||empty($_POST['password']))
	{
		echo "Data Is Empty";
		echo "<a href='signin.html'>Signin</a>";
		exit;
	}
	try
	{
		$conn = require __DIR__."/database.php";
		$sql = sprintf("insert into user (username,password) values ('%s','%s')",$_POST['username'],md5($_POST['password']));
		$conn->query($sql);	
	}
	catch(mysqli_sql_exception $e)
	{
		
		if($e->getSqlState()==23000)
		{
			echo "<p1> Arealdy Had A User</br>";
			echo "<a href='signin.html'>back</a>";
			exit;
		}
		{
			echo $e->getSqlState();
		}
		exit;
	}
	$conn->close();
	echo "Success Sign Up";
	echo "<a href='loginh.php'>Go To Login</a>";	
?>
