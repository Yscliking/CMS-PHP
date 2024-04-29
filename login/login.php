<style>
	a{
		color:white
	}
</style>

<?php
	echo '<body style="background-image:url(\'./img2.png\');text-align:center"></body>';
	if($_SERVER['REQUEST_METHOD']=='GET'){
		die("Error Method");
	}
	session_start();
	if(isset($_SESSION['id'])){
		header("Location: successful-login.php");
		exit();
	}
	session_destroy();

	if(!isset($_POST['username'])||!isset($_POST['password']))
	{
		echo "<a href='loginh.php'>No User Name GO Back</a>";
		exit;
	}
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	try{
		$conn = require __DIR__."/database.php";
		$sql = sprintf(" select username,password,id from user where username='%s' and password='%s'",$username,$password);
		$result = $conn->query($sql);
		$data = $result->fetch_array(MYSQLI_ASSOC);
		if($data==NULL)
		{
			echo "<a href='index.html'>Login Failed</a>";
			exit;
		}
		else if ($data['username']===$username && $data['password']===$password){
			session_start();
			$_SESSION['id'] = $data['id'];
			echo " <a href='successful-login.php'>Successful GO to H0me</a>";
			$conn->close();
			exit;
		}
		else{
			echo "<a href='index.html'>Login Failed</a>".var_dump($data);
		}
	}
	catch (mysqli_sql_exception $e)
	{
		echo $e->getSqlState();		
	}
	$conn->close();
	exit;
?>	
