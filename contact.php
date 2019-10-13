<?php include('register.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="menu">
	<div class="left">
		<label>Online Learning</label>
	</div>
	<div class="right">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="carlist.php">Courses</a></li>
			<li><a href="contact.php">Contact us</a></li>
    		<li><?php  if (isset($_SESSION['username'])) : ?>
    			<a href="index.php?logout='1'">logout</a>
    		<?php endif ?></li>
		</ul>
	</div>
</div>
<div class="main">
	<h1 style="text-align: center;font-size: 50px;">Contact Us</h1>
	<div class="left2">
		<h1>Get in touch using the form below</h1>
		<form action="contact.php" method="POST">
		    <label for="name">Full Name</label>
		    <input type="text" id="fname" name="fname" placeholder="Your name..">

		    <label for="email">Email Address</label>
		    <input type="email" id="email" name="email" placeholder="email address....">

		    <label for="subject">Message</label>
		    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
		    <input type="submit" name="message" value="Send Message">
		</form>
	</div>
	<div class="right2">
		<h1>Contact Info</h1>
		Email:<p>elite@outlook.com</p>
		phone:<p>9876543214</p>
	</div>
</div>
</body>
</html>