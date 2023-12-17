<?php
session_start();
if (!isset($_SESSION['email'])) {
   header("Location: ../register_login/login.php");
}

if (isset($_GET['id'])) {
  require_once("../Connection/DB.php");

  $id = $_GET['id'];
  $sql = "SELECT course_id, course_title, course_image, price FROM coursedetails WHERE course_id=$id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cart_item = array(
      'id' => $row['course_id'],
      'title' => $row['course_title'],
      'price' => $row['price'],
      'image' => $row['course_image']
    );

    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }

    // Check if item is already in cart
    $item_in_cart = false;
    foreach ($_SESSION['cart'] as $item) {
      if ($item['id'] == $cart_item['id']) {
        $item_in_cart = true;
        break;
      }
    }

    if ($item_in_cart) {
      // Item already in cart, set session message
      $_SESSION['message'] = "Item already added to cart.";

    } else {
      // Item not in cart, add to cart
      array_push($_SESSION['cart'], $cart_item);
    }
  }

  $conn->close();
}

// Create a comma-separated list of purchased course titles
$course_titles = '';
foreach ($_SESSION['cart'] as $item) {
  $course_titles .= $item['title'] . ', ';
}
$course_titles = rtrim($course_titles, ', ');

// Redirect to checkout page with course titles as query string parameter
header("Location: ../courses_page/checkout.php?courses=$course_titles");
exit;

?>