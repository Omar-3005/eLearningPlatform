<?php
// require_once("../Connection/DB.php");

// Check if user is logged in
if (!isset($_SESSION['email'])) {
   header("Location: ../register_login/login_backend.php");
}

// Connect to database
require_once("../Connection/DB.php");


// Get user's information
$sql = "SELECT fullname, phone_number, dateofbirth, Gender, id, email FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_SESSION['email']);
$stmt->execute();
$stmt->store_result();


// Get user's information
$stmt->bind_result($fullname, $phone_number, $dateofbirth, $Gender, $id, $email );
$stmt->fetch();

if(isset($_POST['submit'])){
// Retrieve form data
$fullname = !empty($_POST['fullname']) ? $_POST['fullname'] : $fullname;
$phone_number = !empty($_POST['phone_number']) ? $_POST['phone_number'] : $phone_number;
$dateofbirth = !empty($_POST['dateofbirth']) ? $_POST['dateofbirth'] : $dateofbirth;
$Gender = !empty($_POST['Gender']) ? $_POST['Gender'] : $Gender;

// SQL to update user's information
$sql = "UPDATE users SET fullname = ?, phone_number = ?, dateofbirth = ?, Gender = ? WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $fullname, $phone_number, $dateofbirth, $Gender, $_SESSION['email']);
$stmt->execute();

// Redirect user to Account-details class section
header("Location: /Website-Building/account_settings/account_settings.php");
}
?>