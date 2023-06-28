 
<?php
 require 'Side.php';
  $username="mostafa";
  $pass="123";
  $db = new PDO("mysql:host=Localhost;dbname=studentmanagement;Charset=utf8;",$username,$pass);
 
  if (isset($_POST['submit'])) {
    // code...
        $Course=$_POST['Course'];
       $Years=$_POST['Years'];
      $insertData=$db->prepare("INSERT INTO  course (Name,Years) VALUES (:name,:Years)");
      $insertData->bindparam("name",$Course);
      $insertData->bindparam("Years",$Years);

     if ($insertData->execute()) {
       echo "Done";
     }
}

 

?>

 <div class="container">
     <h1>Add Course </h1>
     <br><br> 
     <div > 
     <form method="POST" class="Form-group">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Name Course</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="Course" >
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Years</label>
      <input type="text" class="form-control" id="exampleFormControlInput1"name="Years">
    </div>
    
       
   <button type="submit" class="btn btn-success "name="submit">submit</button>

     </form>  
   </div></div>
