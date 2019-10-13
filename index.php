<?php include('register.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="menu">
	<div class="left" id="lef">
		<label>Online Learning</label>
	</div>
	<div class="right">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="carlist.php">Courses</a></li>
			<li><a href="contact.php">Contact us</a></li>
			<li><button type="button" class="login" onclick=load2()>Login</button></li>
			<li><button type="button" class="signup" onclick=load1()>Sign Up</button></li>
		</ul>
	</div>
</div>
<div  class="image">
	<h3>From Courses to degrees.</h3>
	<h5>we have options of courses to choose from</h5>
</div>
<script type="text/javascript">
	function load1(){
		document.getElementById('register1').style.display='block';
		document.getElementById('form1').style.display='none';
	}
	function load2(){
		document.getElementById('register1').style.display='none';
		document.getElementById('form1').style.display='block';
	}
	
</script>
	<?php include('error.php') ?>
	<div class="form" id="form1">
		<form action="index.php" method="POST">
			
			<h1>Login</h1>
			<button class="btn" onclick="closeform1()"><i class="fa fa-close"></i></button>
			<input type="email" name="email" placeholder="enter Email address">
		 	<input type="password" name="pwd" placeholder="enter password">
			<input type="submit" name="login" value="login" >
		</form>
	</div>
	<div class="register" id="register1">
		<form action="index.php" method="POST">
			
			<h1>Sign Up</h1>
			<button class="btn" onclick="closeform2()"><i class="fa fa-close"></i></button>
			<input type="text" name="name" placeholder="enter Full name">
			<input type="text" name="mobile" placeholder="enter Mobile number">
			<input type="email" name="email" placeholder="enter Email address">
			<input type="password" name="pass" placeholder="enter Password">
			<input type="submit" name="signup" value="Sign Up">
		</form>
	</div>
<script type="text/javascript">
	function closeform2(){
		document.getElementById('register1').style.display="none";
	}
	function closeform1(){
		document.getElementById('form1').style.display="none";
	}
/*
window.addEventListener('mouseup', function(event) {
	var sourceElement;
	if(event.srcElement){
	sourceElement=event.srcElement;
	}	
	else{
	sourceElement=event.target;
	}
	var modal1=document.getElementById('form1');
	var modal2=document.getElementById('register1')
    if (sourceElement.parentNode == modal1 && sourceElement==modal1) {
        modal1.style.display = "none";
      //modal2.style.display="none";
    }
});*/
</script>
<div class="base">
	<h1>Find The Best Course For You</h1>
	<p>Students satisfaction is our satisfaction<br>
	we provide best in class experience to our students</p>
</div>
<div class="chooseus">
	<h1>Why Choose Us</h1>
	<div class="left4">
		<h3>Premium service</h3>
		<p>We provide proper guidance and coaching to students keen to learn.</p>
	</div>
	<div class="middle">
		<h3>Distance Learning</h3>
		<p>Our service is accesible all over the globe any time any place.</p>
	</div>
	<div class="right4">
		<h3>Qualified Team</h3>
		<p>You can fully rely on our team of professionals who are always ready to help you.</p>
	</div>
</div>
<footer>
	<h3>Online Learning Portal</h3>
</footer>
</body>
</html>