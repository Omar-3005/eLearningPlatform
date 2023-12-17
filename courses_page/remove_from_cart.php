<?php
session_start();
if (isset($_POST['index']) && isset($_SESSION['cart'])) {
  $index = $_POST['index'];
  unset($_SESSION['cart'][$index]);
}
header("Location: ../courses_page/checkout.php");
?>