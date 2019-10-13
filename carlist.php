<?php include('register.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="carlist.css">
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
            <!--<li><a><?php  if (isset($_SESSION['username'])) : ?>
                    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <?php endif ?>
            </a></li>-->
            <li><?php  if (isset($_SESSION['username'])) : ?>
                <a href="index.php?logout='1'">logout</a>
            <?php endif ?></li>
        </ul>
    </div>
</div>
<h1 class="car">Courses Offered</h1>
<div class="carbox">
 	<div class="column">
 		<div class="card">
 			<img src="img/1.png">
 			<div class="overlay">
    			<div class="text">
                    <p>Python</p>
    				<p>Duration:4 weeks</p>
    				<p>Fees:1000Rs</p>
    				
                    <input type="button" name="book" value="Enroll Now" onclick=load3()>
    			</div>
  			</div>
 		</div>
 	</div>
 	<div class="column">
 		<div class="card">
 			<img src="img/2.png">
 			<div class="overlay">
    			<div class="text">
                    <p>C#</p>
    				<p>Duration:4 weeks</p>
    				<p>Fees:1000Rs</p>
    				
                    <input type="button" name="book" value="Enroll Now" onclick=load3()>
    			</div>
  			</div>
 		</div>
 	</div>
 	<div class="column">
 		<div class="card">
 			<img src="img/3.png">
 			<div class="overlay">
    			<div class="text">
                    <p>JavaScript</p>
    				<p>Duration:3 Weeks</p>
    				<p>Fees:1100Rs</p>
    				
                    <input type="button" name="book" value="Enroll Now" onclick=load3()>
    			</div>
  			</div>
 		</div>
 	</div>
 	<div class="column">
 		<div class="card">
 			<img src="img/4.jpg">
 			<div class="overlay">
    			<div class="text">
                    <p>Java</p>
    				<p>Duration:5 weeks</p>
    				<p>Fees:2000Rs</p>
    				
                    <input type="button" name="book" value="Enroll Now" onclick=load3()>
    			</div>
  			</div>
 		</div>
 	<div class="column">
 		<div class="card">
 			<img src="img/5.jpg">
 			<div class="overlay">
    			<div class="text">
                    <p>Html5/CSS3</p>
    				<p>Duration:2 weeks</p>
    				<p>Fees:750Rs</p>
    				
                    <input type="button" name="book" value="Enroll Now" onclick=load3()>
    			</div>
  			</div>
 		</div>
 	</div>
 	<div class="column">
 		<div class="card">
 			<img src="img/6.png">
 			<div class="overlay">
    			<div class="text">
                    <p>R Programming</p>
    				<p>Duration:4 weeks</p>
    				<p>Fees:1800Rs</p>
    				
                    <input type="button" name="book" value="Enroll Now" onclick=load3()>
    			</div>
  			</div>
 		</div>
 	</div>	
 	<div class="column">
 		<div class="card">
 		<img src="img/7.jpg">
 		<div class="overlay">
    			<div class="text">
                    <p>CISEH-CPTE</p>
    				<p>Duration:3 months</p>
    				<p>Fees:10000Rs</p>
    				
                    <input type="button" name="book" value= "Enroll Now" onclick=load3()>
    			</div>
  			</div>
 		</div>
 	<div class="column">
 		<div class="card">
 			<img src="img/8.jpg">
 			<div class="overlay">
    			<div class="text">
                    <p>C/C++</p>
    				<p>Duration:3 weeks</p>
    				<p>Fees:900Rs</p>
    			
                    <input type="button" name="book" value="Enroll Now" onclick=load3()>
    			</div>
  			</div>
 		</div>
 	</div>
 	<div class="column">
 		<div class="card">
 			<img src="img/9.jpg">
 			<div class="overlay">
    			<div class="text">
                    <p>Swift</p>
    				<p>Duration:3weeks</p>
    				<p>Fees:2000Rs</p>
    				
                    <input type="button" name="book" value="Enroll Now" onclick=load3()>
    			</div>
                <script type="text/javascript">
                    function load3(){
                        document.getElementById('bkform').style.display="block";
                    function closeform1(){
                            document.getElementById('bkform').style.display="none";
                            window.moveTo("carlist.php");
                        }
                    }
                </script>
  			</div>
 		</div>
 	</div>
 </div>

Book form code here:-
    <script type="text/javascript">
    /*    function validateform(){
            var x = document.forms["myForm"]["from"].value;
            var y=document.forms["myform"]["to"].value;
        if (x == "" && y=="") {
            alert("fill from and to date");
            return false;
            }
        else if(x == ""){
            alert("fill from date");
            return false;
        }
        else if(y ==""){
            alert("fill to date");
            return false;
        }
     }*/
    </script>
</div>
</body>
</html>