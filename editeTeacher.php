<?php
require 'Side.php';
 $username="mostafa";
 $pass="123";
 $db = new PDO("mysql:host=Localhost;dbname=studentmanagement;Charset=utf8;",$username,$pass);
 if ($_GET['id']) {
 	$show=$db->prepare("SELECT * FROM teacher WHERE id=:id");
 	$show->bindparam("id",$_GET['id']);
 	$show->execute();
 	foreach ($show as $key) {

?>
 <div class="container">
     <h1>Ubdate data about teacher</h1>
     <br><br> 
     <div > 
     <form method="POST" class="Form-group" enctype="multipart/form-data"> 
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Teacher Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="teachName"value="<?php echo $key['Name'];?>" >
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Discription</label>
      <input type="text" class="form-control" id="exampleFormControlInput1"name="Dis"value="<?php echo $key['Discription'];?>">
    </div>
    
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Image</label>
      <input type="file"  id="exampleFormControlInput1"name="file" value=" <?php echo $key['Image'];?>"  >
    </div>
       
   <button type="submit" class="btn btn-success "name="update" value="<?php echo $key['id'];?>">Edite</button>
    <?php }}?>
     </form>  
   </div></div>
   <?php 
  
   if (isset($_POST['update'])) {
     $file=$_FILES['file']['name'];
   move_uploaded_file($_FILES['file']['tmp_name'],$file);
if ($file) {
  
  $update=$db->prepare("UPDATE teacher SET Name=:Name ,   Discription=:Discription , Image=:Image WHERE id=:id");}
  $update->bindparam("Name",$_POST['teachName']);
  $update->bindparam("Discription",$_POST['Dis']);
  $update->bindparam("Image",$_POST['file']);
  $update->bindparam("id",$_POST['update']);
  $update->execute();}

  
   ?>