<?php
session_start();
$dbusername="root";
$dbpassword="";
$dbname="carrent";

$conn=mysqli_connect("localhost",$dbusername,$dbpassword,$dbname);

if (!$conn){
	die("connect failed".mysqli_error());
}
if(isset($_POST['message'])){
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$message=mysqli_real_escape_string($conn,$_POST['message']);
	$to = "murugesanyugesh@gmail.com";
	$subject = "My subject";
	$headers = "From: $email";
	mail($to,$subject,$message,$headers);
}