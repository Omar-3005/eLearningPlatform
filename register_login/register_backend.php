<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

	// Connect to database
	require_once("../Connection/DB.php");

	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$password = $_POST['password'];
	$Gender = $_POST['Gender'];
	$dateofbirth = $_POST['dateofbirth'];

	// Check if email already exists in the database
	$sql = "SELECT * FROM users WHERE email = ?";
	$stmt = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($stmt, "s", $email);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);

	if(mysqli_num_rows($result) > 0) {
		echo "Email already exists. Please use a different email.";
		exit();
	} else {
		// Hash the password before storing it in the database
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		
		$sql = "INSERT INTO users (fullname, email, phone_number, password, Gender, dateofbirth) VALUES (?, ?, ?, ?, ?, ?)";
		$stmt = mysqli_prepare($conn, $sql);
		mysqli_stmt_bind_param($stmt, "ssssss", $fullname, $email, $phone_number, $hashed_password, $Gender, $dateofbirth);
	
		if(mysqli_stmt_execute($stmt)){
			// Set session variables to log the user in automatically
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['loggedin'] = true;
			// Redirect user to profile page
			header("Location: /Website-Building/account_profile/Courses.php");
			exit();
		} else {
			echo 'Error Occured';
		}
	}
}
?>