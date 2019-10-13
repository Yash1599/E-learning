<?php
session_start();
$dbusername="root";
$dbpassword="";
$dbname="tutorials";

$conn=mysqli_connect("localhost",$dbusername,$dbpassword,$dbname);

if (!$conn){
	die("connect failed".mysqli_error());
}
$name=$mobile=$email=$pass="";

$errors=array();
if (isset($_POST['signup']))
{
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pass=mysqli_real_escape_string($conn,$_POST['pass']);
	if (empty($name)){
		array_push($errors, "username is required");
		
	}
	if (empty($mobile)){
		array_push($errors, "mobile no is required");
		
	}
	if (empty($email)){
		array_push($errors, "email is required");
		
	}
	if (empty($pass)){
		array_push($errors, "password is required");
		
	}
	$pass=md5($pass);
	if (count($errors)==0)
	{
		$sql="insert into register(name,mobile,email,password) values('$name','$mobile','$email','$pass')";
		if(mysqli_query($conn,$sql)){
			//echo "<script>alert('record added succeefully');</script>";
			$_SESSION['$username']=$name;
			$_SESSION['$success']="you are logged in";
			header("Location: home.php");
			exit();
		}
		else{
			echo "error not able to add record".mysqli_error($conn);
		}
	}
}	
// LOGIN USER
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['pwd']);

  if (empty($email)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  	if(count($errors)==0){
	  	$password = md5($password);
	  	$query = "SELECT * FROM register WHERE email ='$email' AND password ='$password'";
	  	$results = mysqli_query($conn, $query);
	  	if (mysqli_num_rows($results) == 1) {
	  	  $row=mysqli_fetch_array($results);
	  	  $_SESSION['username'] = $row['name'];
	  	  $_SESSION['success'] = "You are now logged in";
	  	  header('location: home.php');
	  	  exit();
	  	}
  	else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
//booking------------------
if(isset($_POST['book'])){
	if(isset($_SESSION['username'])){
		$user=$_SESSION['username'];
		$from=$_POST['from'];
		$to=$_POST['to'];
		echo $from."<br>";
		echo $to."<br>";
		if (empty($from)) {
	  	array_push($errors, "from date is required");
	  	}
	  	if (empty($to)) {
	  	array_push($errors, "to date is required");
	  	}
	  	if(count($errors)==0){
			$sql="SELECT * FROM register WHERE name='$user'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result);
			$email=$row['email'];
			$sql2="INSERT INTO booking(username,email,frmdate,todate) VALUES('$user','$email','$from','$to')";
			$result2=mysqli_query($conn,$sql2);
		}
		else{
			array_push($errors, "fill all the deatils");
			exit();
		}
	}
	else{
		header("Location:index.php");
		exit();		
	}
}
///check logged user.............

//.......logout..............
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("index.php");
}

?>