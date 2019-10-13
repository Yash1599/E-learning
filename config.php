<?php

$username="root";
$password="";
$dbname="carrent";

$conn=mysqli_connect("localhost",$username,$password,$dbname);

if (!$conn){
	die("connect failed".mysql_error());
}
else{
	echo "connected succeefully";
}
?>