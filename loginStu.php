<?php
if (isset($_POST['update'])) {
  $username="mostafa";
      $pass="123";
      $db = new PDO("mysql:host=Localhost;dbname=studentmanagement;Charset=utf8;",$username,$pass);
      $login=$db->prepare("SELECT * FROM user WHERE Email=:Email AND Password=:Password");
      $login->bindparam("Email",$_POST['Email']);
      $login->bindparam("Password",$_POST['Password']);
      $login->execute();
      if ($login->rowcount()==1) {
           $user=$login->fetchObject();
      if ($user->ACTIVATED==="0") {
        session_start();
        $_SESSION['user']=$user;
      
        header("location:http://localhost/Student%20Managment%20System/stuProfie.php");
      }
      }

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
  <title>login student</title>
</head>
<body style="background-image: url('Images/School1.jpg');color: white;">
  <div class="container">
     <h1 style="color: white;text-align: center;">login Student</h1>
     <br><br> 
     <div > 
     <form method="POST" class="Form-group" > 
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label"> USERMANE</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="Email" >
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Password</label>
      <input type="Password" class="form-control" id="exampleFormControlInput1"name="Password">
    </div>
    
       
   <button type="submit" class="btn btn-success "name="update" >LOGIN</button>
   
     </form>  
   </div></div>
</body>
</html>