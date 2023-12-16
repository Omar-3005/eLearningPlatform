<?php

// Check if user is logged in
if (!isset($_SESSION['email'])) {
   header("Location: ../register_login/login_backend.php");
}
// Connect to database
require_once("../Connection/DB.php");


// Check if form has been submitted
if (isset($_POST['update'])) {
   // Get the form input values
   $current_password = $_POST['current_password'];
   $new_password = $_POST['new_password'];
   $confirm_password = $_POST['confirm_password'];

   // Validate the form input
   if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
      // Display an error message if any field is empty
      $error_msg = "Please fill in all fields.";
   } elseif ($new_password != $confirm_password) {
      // Error message if new password and confirm password don't match
      $error_msg = "New password and confirm password do not match.";
   } else {
      // Check if the current password matches the one in the database
      $email = $_SESSION['email'];
      $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $results = $stmt->get_result();


      if ($results->num_rows > 0) {
         $result = $results->fetch_assoc();
         $pw_from_db = $result["password"];

         if (password_verify($current_password, $pw_from_db)) {
            // Hash the new password
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            

            // Update the user's password
            $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
            $stmt->bind_param("ss", $hashed_password, $email);
            $result = $stmt->execute();

            if ($result) {
               // Set the status variable to true if the password update was successful
               $status = true;
               // Set the success message
               echo "Password updated successfully.";
            } else {
               // Set the error message if the password update failed
               echo  "Password update failed.";
            }
         }
      }
   }
}