<?php
session_start();
$username="mostafa";
$pass="123";
$db = new PDO("mysql:host=Localhost;dbname=studentmanagement;Charset=utf8;",$username,$pass);
 if (isset($_POST['submit'])) {
  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $message=$_POST['message'];
  $phone=$_POST['phone'];
    $insertData=$db->prepare("INSERT INTO  addmisstion (Name,Email,Phone, Messagee) VALUES (:name,:email,:phone,:mess) ");
    $insertData->bindparam("name",$Name);
    $insertData->bindparam("email",$Email);
    $insertData->bindparam("phone",$phone);
    $insertData->bindparam("mess",$message);
    if ($insertData->execute()) {

      header("location:Addmission.php");
    }
 }
 

?>