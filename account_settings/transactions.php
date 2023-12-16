<?php
// Start session
  $user_id = $_SESSION['email'];

  // Get database connection
  require_once("../Connection/DB.php");


  // Get user ID from database based on email
$email = $_SESSION['email'];
$sql = "SELECT id FROM users WHERE email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $user_id = $row['id'];
} 

  // Get user's enrolled courses from database
  $sql = "SELECT 
  enrollment.enrollment_date, 
  enrollment.transaction_price, 
  coursedetails.course_id, 
  coursedetails.course_title,
  users.id
FROM enrollment
INNER JOIN coursedetails ON enrollment.course_id = coursedetails.course_id
INNER JOIN users ON enrollment.id = users.id
WHERE enrollment.id = $user_id";
  $result = $conn->query($sql);
?>