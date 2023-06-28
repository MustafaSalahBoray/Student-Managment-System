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
     <h1>  View All Teacher Data</h1>
     <br><br>  
     <table class="table ">
  <thead class="table-primary">
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Name Teacher</th>
      <th scope="col">About Teacher</th>
      <th scope="col">Image</th>
      <th scope="col"></th>
   
    </tr>
  </thead>
  <tbody>
    <?php 

      $username="mostafa";
      $pass="123";
      $db = new PDO("mysql:host=Localhost;dbname=studentmanagement;Charset=utf8;",$username,$pass);
      $show=$db->prepare("SELECT * FROM  teacher");
      $show->execute();
      $x=1;
      foreach ($show as $key ) {
        // code...
   

    ?>
    <tr class="text-center">
      <th scope="row"><?php echo $x;?></th>
      <td><?php echo $key['Name'];?></td>
      <td><?php echo $key['Discription'];?></td>
      <td>
        <img height="100px" width="100px" src="<?php echo $key['Image'];?>">
      </td>
   <td>
        <form method="POST">
          <a href="editeTeacher.php?id=<?php echo $key['id'];?>" class="btn btn-info">Edite</a>
          <button type="submit" value="<?php echo $key['id'] ;?>" name="remove" class="btn btn-danger">Delete</button>
          
        </form>
      </td>
         
        <?php $x++; } ?>
    </tr>
    
   
  </tbody>

</table>

   </div></center> 
 
</body>
</html>
<?php 
if (isset($_POST['remove'])) {
   $dal=$db->prepare("DELETE FROM teacher WHERE id=:id ");
   $dal->bindparam("id",$_POST['remove']);
   $dal->execute();
}

?>

