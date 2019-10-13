 <?php include('register.php') ?>
 <!--<?php
 if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
 ?>-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	.right p{
		display: inline;
		padding-right: 10px;
		text-decoration: none;
	}
	</style>
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
			<li><a><?php  if (isset($_SESSION['username'])) : ?>
    				<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    				
    			<?php endif ?>
    		</a></li>
    		<li><?php  if (isset($_SESSION['username'])) : ?>
    			<a href="index.php?logout='1'">logout</a>
    		<?php endif ?></li>
		</ul>
	</div>
</div>
<div  class="image">
	<h3>FIND THE BEST  COURSE FOR YOU</h3>
	<h5>we have options of courses to choose from</h5>

</div>
<div class="base">
	<h1>Find The Best Course for you</h1>
	<p>Students satisfaction is our satisfaction<br>
	we provide best in class experience to our students</p>
</div>
<div class="chooseus">
	<h1>Why Choose Us</h1>
	<div class="left4">
		<h3>Premnium service</h3>
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