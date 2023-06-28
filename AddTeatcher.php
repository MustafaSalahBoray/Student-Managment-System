<?php 
 require 'Side.php';
     $username="mostafa";
      $pass="123";
      $db = new PDO("mysql:host=Localhost;dbname=studentmanagement;Charset=utf8;",$username,$pass);
      if (isset($_POST['submit'])) {
      	$name=$_POST['teachName'];
      	$Discription=$_POST['Dis'];
      	$imge=$_FILES['file']['name'];
      	$fles=$_FILES['file']['tmp_name'];
      	$insert=$db->prepare("INSERT INTO  teacher (Name,Discription,Image) VALUES(:name,:Discription,:Image)");
      	$insert->bindparam("name",$name);
      	$insert->bindparam("Discription",$Discription);
      	$insert->bindparam("Image",$imge);
      	if ($insert->execute()) {
      		move_uploaded_file($fles,$imge);
      	}
      }
?>
 <div class="container">
     <h1>Add Teacher </h1>
     <br><br> 
     <div > 
     <form method="POST" class="Form-group" enctype="multipart/form-data">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Teacher Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="teachName" >
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Discription</label>
      <input type="text" class="form-control" id="exampleFormControlInput1"name="Dis">
    </div>
    
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Image</label>
      <input type="file"  id="exampleFormControlInput1"name="file">
    </div>
       
   <button type="submit" class="btn btn-success "name="submit">submit</button>

     </form>  
   </div></div>
 
