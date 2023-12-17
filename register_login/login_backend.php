<?php
require_once("../Connection/DB.php");

// Check for form submission
if (isset($_POST['login'])) {
  
  // Retrieve database values based on what user entered
  $email = $_POST['username'];
  $password = $_POST['password'];
  
  // Query the database for email match
  $query = "SELECT * FROM users WHERE email = ?";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  
  if (mysqli_num_rows($result) == 1) {
    // Get the hashed password from the database
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['password'];
    // Verify the password
    if (password_verify($password, $hashed_password)) {
      // Set a session variable to indicate that the user is logged in and redirect them to the dashboard/homepage
      $last_login = $row['last_login'];
      date_default_timezone_set('America/New_York');
      $current_time = date("Y-m-d H:i:s");
      $query = "UPDATE users SET last_login = ? WHERE email = ?";
      $stmt = mysqli_prepare($conn, $query);
      mysqli_stmt_bind_param($stmt, "ss", $current_time, $email);
      mysqli_stmt_execute($stmt);
      session_start();
      $_SESSION['email'] = $email;
      header('Location: /Website-Building/account_profile/Courses.php');
      exit();
    } else{
      echo "email exists";
      header('Location: /Website-Building/register_login/login.php?InvalidPassword');
    }
  }else{
    header('Location: /Website-Building/register_login/login.php?InvalidEmail');
  }
  
  // Display an error message and prompt the user to try again
  echo "Invalid email or password. Please try again.";
}

?>
