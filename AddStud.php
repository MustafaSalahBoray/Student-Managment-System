<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style.css">
  <script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script>
  <title>Admmision</title>
</head>
<body>
  <?php 
  include 'Side.php';
  
  ?>
   

  <div class="container">
     <h1>Add Student </h1>
     <br><br> 
     <div > 
     <form method="POST" class="Form-group">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">UserName</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="UserName" placeholder="UserName">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput1"name="Email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Phone</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="Phone" placeholder="">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Password</label>
      <input type="Password" class="form-control" id="exampleFormControlInput1" name="Password" placeholder="Password">
    </div>
       
   <button type="submit" class="btn btn-success "name="submit">submit</button>

     </form>  
   </div></div>
 
</body>
</html>
<?php

  $username="mostafa";
  $pass="123";
  $db = new PDO("mysql:host=Localhost;dbname=studentmanagement;Charset=utf8;",$username,$pass);
 
  if (isset($_POST['submit'])) {
    // code...
        $username=$_POST['UserName'];
       $Email=$_POST['Email'];
       $phone=$_POST['Phone'];
       $Password=$_POST['Password'];
        $UserType="Student";
    
       
      $insertData=$db->prepare("INSERT INTO user (UserName,Email,Phone,Password,UserType) VALUES (:name,:Email,:Phone,:Password,:Type)");
      $insertData->bindparam("name",$username);
      $insertData->bindparam("Email",$Email);
      $insertData->bindparam("Phone",$phone);
      $insertData->bindparam("Password",$Password);
      $insertData->bindparam("Type",$UserType);
     if ($insertData->execute()) {
       echo "Done";
     }
}

 

?>