<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.register{
			height: 70%;
			width: 40%;
			margin-left: 20%;
			position: relative;
			background-color: white;
		}
		.register h1{
			margin-left: 25px;
			display: inline-block; 
			border-bottom: 1px solid black;
			width: 450px;
		}
		/*.register{
			display: none;
		}*/
	@-webkit-keyframes fadeInDown {
  		from {
    		opacity: 0;
    		-webkit-transform: translate3d(0, -100%, 0);
    		transform: translate3d(0, -100%, 0);
  		}

  		to {
    		opacity: 1;
    		-webkit-transform: translate3d(0, 0, 0);
    		transform: translate3d(0, 0, 0);
  		}
	}
		.register{
  			-webkit-animation-name: fadeInDown;
  			animation-name: fadeInDown;
  			animation-duration: 0.5s;
		}
	</style>
</head>
<body>
<div class="register" id="register1">
<form action="register.php" method="POST">
	<?php include('error.php') ?>
	<h1>Sign Up</h1>
	<input type="text" name="name" placeholder="enter Full name">
	<input type="text" name="mobile" placeholder="enter Mobile number">
	<input type="email" name="email" placeholder="enter Email address">
	<input type="password" name="pass" placeholder="enter Password">
	<input type="submit" name="signup" value="Sign Up">
</form>
</div>
</body>
</html>