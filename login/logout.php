
<html>
<style>
	a{
	color:white;
	size:26
}
h1{
	color:white
}
</style>
<body style="text-align:center;background-image:url('./img5.png')">

</body>

</html>
<?php


session_start();
if(isset($_SESSION['id'])){
	session_destroy();
	echo '<a href="index.html">Back</a>';	

}
else{
	echo "<h1>You Had Never Login</br>";
	echo '<a href="index.html">Back</a>';	
}
?>

