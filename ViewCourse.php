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
   
<center>
  <div class="container">
     <h1> Data Course</h1>
     <br><br>  
     <table class="table ">
  <thead class="table-primary">
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Name Course</th>
      <th scope="col">Years</th>
       <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $username="mostafa";
      $pass="123";
      $db = new PDO("mysql:host=Localhost;dbname=studentmanagement;Charset=utf8;",$username,$pass);
      $show=$db->prepare("SELECT * FROM course");
      $show->execute();
      $x=1;
      foreach ($show as $key ) {
      
    ?>
    <tr class="text-center">
      <th scope="row"><?php echo $x;?> </th>
      <td> <?php echo $key['Name']; ?></td>
      <td> <?php echo $key['Years']; ?></td>
      <td>
        <form method="POST">
          <a class="btn btn-info" href="editeCourse.php?id=<?php echo $key['id'];?>">Edite</a>
          <button class="btn btn-danger" value="<?php echo $key['id'];?>" name="remove">Delete</button>
        </form>
      </td>

     <?php $x++;}?>
    </tr>
  </tbody>
  <?php  
      if (isset($_POST['remove'])) {
        $Del=$db->prepare("DELETE FROM course WHERE id=:id");
        $Del->bindparam("id",$_POST['remove']);
        $Del->execute();
      }



  ?>