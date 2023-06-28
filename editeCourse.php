<?php 
   require 'Side.php';
   if (isset($_GET['id'])) {
      $username="mostafa";
      $pass="123";
      $db = new PDO("mysql:host=Localhost;dbname=studentmanagement;Charset=utf8;",$username,$pass);
      $edite=$db->prepare("SELECT * FROM course WHERE id =:id");
      $edite->bindparam("id",$_GET['id']);
      $edite->execute();
      foreach($edite as $key){

?>

 <div class="container">
     <h1>Edite Course </h1>
     <br><br> 
     <div > 
     <form method="POST" class="Form-group">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Name Course</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="Course" value="<?php echo $key['Name'];?>" >
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Years</label>
      <input type="text" class="form-control" id="exampleFormControlInput1"name="Years"value="<?php echo $key['Years'];?>">
    </div>
    
       
   <button type="submit" class="btn btn-success "name="submit" value="<?php echo $key['id'];?>">Edite</button>
     <?php   }}?>
     </form>  
   </div></div>
   <?php 
       if (isset($_POST['submit'])) {
       	    $update=$db->prepare("UPDATE course SET Name=:Name,Years=:Years WHERE id=:id");
            $update->bindparam("Name",$_POST['Course']);
             $update->bindparam("Years",$_POST['Years']);
              $update->bindparam("id",$_POST['submit']);
              $update->execute();
       }


   ?>
