<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['password_reset']))  {
    require_once("../Connection/DB.php");
    $email = $_POST['email'];
    
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if(mysqli_num_rows($result) > 0){ 
        echo "email exists";
        header("Location:password_reset.php?email=" . $email);
        exit();
    } else {
        header("Location:forgot_password.php"); 
        exit();  
    }

}
?>