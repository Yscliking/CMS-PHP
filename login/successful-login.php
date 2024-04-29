<?php
	session_start();
	if(!isset($_SESSION['id'])){
		die("You Had NEVER LOGIN");
		header("Location: index.html");
		session_destroy();
	}
?>
<head>
	<link rel="stylesheet" href="../css/w3.css" />
	<title>Home Page</title>
	<style>
	body {
  background-image: url('img1.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  margin: 0;
  font: var(--sans);
  font-weight: 400;
  font-style: normal;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  background-color: var(--c3);
  color: white;
  opacity:0.9;
  text-align:center
}
h1{
	color:white
}
img{
	opacity:0.5
}

	</style>
</head>
<body>
    <h1>Home</h1>
    <h1>Successful Login</h1></br>
    	    
	<a href="logout.php" style="color:black">LogOut</a>
	
</body>
