<?php
require_once("../Connection/DB.php");

if(isset($_GET['email'])) {
    $email = $_GET['email'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $results = mysqli_fetch_assoc($result);
  }

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['password_reset'])) {
  $phonenumberUser = $_POST['phonenumber'];
  $phonenumberDB = $_POST['phonenumberDB'];
  
  if($phonenumberDB == $phonenumberUser){
    header("Location:create_new_password.php?phonenumber=" . $phonenumberUser);
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE phone_number = '$phonenumberDB'";
    $result =mysqli_query($conn,$sql);
    $results = mysqli_fetch_assoc($result);
    $email = $results["email"];
    header("Location:password_reset.php?email=" . $email);
    exit();
  }
}
?>