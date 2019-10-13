 <?php include('register.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="about.css">
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
<div class="first">
	<h1 style="text-align: center;font-size: 50px;">About</h1>
	<div class="left1">
		<img src="1.jpg">
	</div>
	<div class="right1">
		<h1>Why us!</h1>
		<h3>About Us</h3>
		<p>There are a lot of Online portals providing courses , but what makes us special is our variety in course contents and the Top Notch Faculties from Worlds most reputed Universities around the globe.
		<br>
		 We give students the opportunity to plan study time around the rest of their day, instead of the other way around. Students can study and work at their convenience. ... All of these benefits help students balance work and family commitments with their education..Also we offer value for money and time on our portal# </p>
	</div>
</div>
<div class="partner">
	<div class="left6">
		<h1>10</h1>
		<h3>Partners</h3>
	</div>
	<div class="right6">
		<h1>100</h1>
		<h3>Courses</h3>
	</div>
	<div class="right7">
		<h1>2000</h1>
		<h3>Students</h3>
	</div>
	<div class="right8">
		<h1>4</h1>
		<h3>Members</h3>
	</div>
</div>
<div class="brands">
<img src="harvard.jpg">
<img src="3.png".png height="170" width="280">
<img src="2.png">
<img src="stand.png">
</div>
</body>
</html>
