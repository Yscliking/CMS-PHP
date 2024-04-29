<?php
if(!isset($_FILES['fff'])){
	die("No FIle,It is Too Big");
}

$file = $_FILES['fff'];
if($file['error']!=0){
	die("UpLoad Failed");
}
if($file['type']!="image/png"){
	die("Onlu Images Allow");
}
if($file['size'] > 5*1024*1024) {
	die("Limited 5MB");
}// 1MB
var_dump($file);

$name= $file['name'];


$time = time();

$path= "uploads/".$time.$name;

echo rename($file['tmp_name'],$path) ? "OK":"ERROR";
