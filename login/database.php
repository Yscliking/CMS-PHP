<?php

	$dbserver="localhost";
	$dbuser="root";
	$dbpasswd="root";
	$dbname="CMS";
	$conn = new mysqli($dbserver,$dbuser,$dbpasswd,$dbname);
	if($conn->connect_error){
		die("connceted failed".$conn->connect_error);
	}
	return $conn;
	
	
