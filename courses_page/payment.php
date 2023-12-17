<?php 
if (!isset($_SESSION['id'])) 

// Check if 'Pay Now' button was clicked and all billing fields are filled out
if (isset($_POST['submit'])
    && !empty($_POST['name'])
    && !empty($_POST['email'])
    && !empty($_POST['address'])
    && !empty($_POST['cardnumber'])
    && !empty($_POST['expdate'])
  ) {
  // Get cart items from session
  $cart_items = $_SESSION['cart'];

  // Get user ID from session
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

// Loop through cart items and insert into enrollment table
foreach ($cart_items as $cart_item) {
  $course_id = $cart_item['id'];
  $price = $cart_item['price'];
  date_default_timezone_set('America/New_York');
  $enrollment_date = date("Y-m-d H:i:s"); // get current date
  $sql = "INSERT INTO enrollment (id, course_id, enrollment_date, transaction_price) VALUES ($user_id, $course_id, '$enrollment_date', $price)";
  $result = $conn->query($sql);
}
$total_cost = 0; // initialize the total cost to zero
  foreach($_SESSION['cart'] as $cart_item) { // loop through each item in the cart
    $total_cost += $cart_item['price']; // add the price of the item to the total cost
  }

  // Create a comma-separated list of purchased course titles
$course_titles = '';
foreach ($_SESSION['cart'] as $item) {
  $course_titles .= $item['title'] . ', ';
}
$course_titles = rtrim($course_titles, ', ');

    // Reset the session cart and modalShown variable
    $_SESSION['cart'] = array();
    $_SESSION['modalShown'] = True;

    // Redirect to confirmation page
    header("Location: ../account_profile/Courses.php?total_cost=$total_cost&courses=$course_titles");
    exit();
}

?>