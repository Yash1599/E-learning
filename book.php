<?php
include('register.php');
$username="root";
$password="";
$dbname="carrent";

$conn=mysqli_connect("localhost",$username,$password,$dbname);

if (!$conn){
	die("connect failed".mysql_error());
}
if(isset($_POST['book'])){

	$user=$_SESSION['username'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	if (empty($from)) {
  	array_push($errors, "from date is required");
  	}
  	if (empty($to)) {
  	array_push($errors, "to date is required");
  	}
  	if(count($errors)==0){
		$sql="SELECT * FROM register WHERE name='$user'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_row($result);
		$email=$row['email'];
		$sql2="INSERT INTO booking(username,email,frmdate,todate) VALUES('$user','$email','$from','$to')";
		$result2=mysqli_query($conn,$sql2);
	}
	else{
		array_push($errors, "fill all the deatils");
	}
}
?>