<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["password_reset_submit"])) {
  require_once("../Connection/DB.php");

  $newpassword = $_POST["newpassword"];
  $confirmpassword = $_POST["confirmpassword"];
  $phonenumber = $_POST["phonenumber"];

  if ($newpassword == $confirmpassword) {
    // update password for user with given phone number
    $password = password_hash($newpassword, PASSWORD_BCRYPT);
    $sql = "UPDATE users SET password = ? WHERE phone_number = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $password, $phonenumber);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    // redirect to login page
    header("Location:../register_login/login.php");
    exit();
  } else {
    // redirect back to create new password page with phone number parameter
    header("Location:create_new_password.php?phonenumber=" . $phonenumber);
    exit();
  }
}
?>

