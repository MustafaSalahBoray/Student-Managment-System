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
     <h1>Applied for  Addmission</h1>
     <br><br>  
     <table class="table ">
  <thead class="table-primary">
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
       <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    <?php 
  session_start();
      $username="mostafa";
      $pass="123";
      $db = new PDO("mysql:host=Localhost;dbname=studentmanagement;Charset=utf8;",$username,$pass);
      $show=$db->prepare("SELECT * FROM addmisstion");
      $show->execute();
      $x=1;
      foreach ($show as $key ) {
        // code...
   

    ?>
    <tr class="text-center">
      <th scope="row"><?php echo $x;?></th>
      <td><?php echo $key['Name'];?></td>
      <td><?php echo $key['Email'];?></td>
      <td><?php echo $key['Phone'];?></td>
      <td><?php echo $key['Messagee'];?></td>
        <?php $x++; } ?>
    </tr>
    
   
  </tbody>

</table>

   </div></center> 
 
</body>
</html>