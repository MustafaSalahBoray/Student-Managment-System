<?php  
error_reporting(0);
session_start();
if ($_SESSION['message']) {
  $message=$_SESSION['message'];
  echo '<script type="text/javascript"> 
     alert($message)
  </script>';
}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script>
	<title>Student Manegment System</title>
</head>
<body>
<nav >
  
    <label class="logo">E_school</label>
   <ul>
   	<li><a  href="index.php">Home</a></li>
   	<li><a  href="contact.html">Contact</a></li>
    <li><a  href="loginAdmission.php">Admissition</a></li>
    <li><a   href="loginStu.php" class="btn btn-success">Login</a></li>
   </ul>
   
</nav>
<div class="Section">
	<label class="img_text"> We Teach Student With Care</label>
	<img src="Images/class.jpg" class="main_img">
</div>
<div class="container">
	<div class="row">
	<div class="col-md-4">
	
		<img src="Images/School1.jpg " class="welcome_sc" alt="...">
	</div>
	<div class="col-md-8">
		<h1>Welcome to E_School</h1>
		<p>A school is an educational institution designed to provide learning spaces and learning environments for the teaching of students under the direction of teachers. Most countries have systems of formal education, which is sometimes compulsory. In these systems, students progress through a series of schools.Pharr-San Juan-Alamo High School is a large school in the Lower Rio Grande Valley, where some of the poorest counties in the U.S. are located. Low income students make up 80 percent of the student population, 98% of whom are Hispanic (Texas Education Agency, 1993). In the 1991-92 school year, 31 percent of the students passed all tests for the Texas Assessment of Academic Skills (TAAS).
		</p>
	</div>
    </div>
  </div>
  <center>
  	<h1>Our Teacher</h1>
  </center>
  <div class="container">
  	<div class="row">
  	 <div class="card" style="width: 18rem;">
  <img src="Images/tech1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">The principal had previously held a variety of positions within the district. He taught both first grade and sixth grade before becoming the principal of an elementary school that served grades 3-6. This "intermediate campus</p>
  </div>
</div>
	 <div class="card" style="width: 20rem;margin-left: auto;">
  <img src="Images/tech2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    
    <p class="card-text">The principal had previously held a variety of positions within the district. He taught both first grade and sixth grade before becoming the principal of an elementary school that served grades 3-6. This "intermediate campus.</p>
  </div>
</div>
	 <div class="card" style="width: 18rem;margin-left: auto;">
  <img src="Images/tech3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">The principal had previously held a variety of positions within the district. He taught both first grade and sixth grade before becoming the principal of an elementary school that served grades 3-6. This "intermediate campus.</p>
  </div>
</div>

  </div>
  </div>
  <center class="cent center">
  	<h1>Our Cources</h1>
  </center>
  <div class="container">
  	<div class="row">
  		<div class="card" style="width: 18rem;">
  			<img src="Images/Web-Development.jpg" class="card-img-top" alt="...">
  			<br>
  			<h3 class="card-title">Web Development</h3>
  		</div>
  		<div class="card" style="width: 18rem;margin-left: auto;">
  			<img src="Images/graphic.jpg" class="card-img-top" alt="...">
  			<br>
  			<h3 class="card-title">Graphic Design </h3>
  		</div>
  		<div class="card" style="width: 18rem;margin-left: auto;">
  			<img src="Images/marking.jpg" class="card-img-top" alt="...">
  			<br>
  			<h3 class="card-title">Markiting</h3>
  		</div>
  		
  	</div>
  </div>
   <center class="cent">
  	<h1>Admission Form </h1>
  </center>
  <div align="center"class="Admission">
  	<form method="POST"action="sighn.php">
  		<div class="dev_f">
  			<label class="lebel_text">Name</label>
  			<input class="input_deg" type="text" name="Name">
  		</div>
  		<div class="dev_f">
  			<label class="lebel_text">Email</label>
  			<input class="input_deg"type="text" name="Email">
  		</div>
      <div class="dev_f">
        <label class="lebel_text">Phone</label>
        <input class="input_deg"type="text" name="phone">
      </div>
      <div class="dev_f">
        <label class="lebel_text">Password</label>
        <input class="input_deg"type="passed" name="password">
      </div>
  		<div class="dev_f">
  			<label  class="lebel_text">message</label>
  		    <textarea class="input_txt" name="message"></textarea>
  		</div>
       <button class="btn btn-primary"id="submit" name="submit" type="submit">Submit</button>
  	</form>
  </div>
  <footer>
  	<h3 class="footer_text"> All @CopyRight by Web teach Knowledgev</h3 >
  </footer>


</body>
</html>
