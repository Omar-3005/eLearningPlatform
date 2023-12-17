<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {

    // Connect to database
    require_once("../Connection/DB.php");

    $email = $_POST['email'];

    // Check if email already exists in the database
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0) {
        echo "Email already exists. Please use a different email.";
    } else {
        echo "Email is available";
    }
}
?>