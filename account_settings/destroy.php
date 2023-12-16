<?php

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: ../register_login/login_backend.php");
}
 // Connect to database
 require_once("../Connection/DB.php");


// Get user's information
$sql = "SELECT id FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_SESSION['email']);
$stmt->execute();
$stmt->bind_result($user_id);
$stmt->fetch();
$stmt->close();

// or $user_id = $conn->query("SELECT id FROM users WHERE email = '{$_SESSION['email']}'")->fetch_object()->id;


// Deactivate user's account if the "Deactivate" button has been clicked
if (isset($_POST['submit']) && $_POST['submit'] == 'Deactivate' && isset($_POST['agree'])) {
    
// Delete user's account
    $sql = "DELETE FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_SESSION['email']);
    $stmt->execute();
    $stmt->close();

// Destroy session
    session_destroy();

// Redirect user to login page
    header("Location: /Website-Building/register_login/login.php");
    exit();
}
?>
