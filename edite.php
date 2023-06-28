<?php
 include 'Side.php';
if ($_GET['id']) {
	  $username="mostafa";
      $pass="123";
      $db = new PDO("mysql:host=Localhost;dbname=studentmanagement;Charset=utf8;",$username,$pass);
	$getData=$db->prepare("SELECT * FROM user WHERE id=:id");
	$getData->bindparam("id",$_GET['id']);
	$getData->execute();
	foreach ($getData as $key ) {
		// code...
	

?>
<div class="container">
     <h1>Edite Data </h1>
     <br><br> 
     <div > 
     <form method="POST" class="Form-group">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">UserName</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="UserName" placeholder="UserName" value="<?php echo $key['UserName'];?>">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput1"name="Email" placeholder="name@example.com"value="<?php echo $key['Email'];?>">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Phone</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="Phone" placeholder="" value="<?php echo $key['Phone'];?>">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Password</label>
      <input type="Password" class="form-control" id="exampleFormControlInput1" name="Password" placeholder="Password" value="<?php echo $key['Password'];?>">
    </div>
       
   <button type="submit" class="btn btn-success "name="update" value="<?php echo $key['id'];?>">Edite</button>
   <?php }}?>

     </form>  
   </div></div>
   <?php 
     
      if (isset($_POST['update'])) {
	$update=$db->prepare("UPDATE user SET UserName=:Name , Email=:Email , Phone=:Phone , Password=:Password WHERE id=:id");
	$update->bindparam("Name",$_POST['UserName']);
	$update->bindparam("Email",$_POST['Email']);
	$update->bindparam("Phone",$_POST['Phone']);
	$update->bindparam("Password",$_POST['Password']);
	$update->bindparam("id",$_POST['update']);
	$update->execute();
	     
	}
  ?>