<?php ob_start(); ?>
<?php include("../Includes/header.php"); ?>
<?php include('payment.php'); ?>
<?php
if (!isset($_SESSION['email'])) {
   header("Location: ../register_login/login.php");
}

// Check for session message
if (isset($_SESSION['message'])) {
  echo "<script>alert('{$_SESSION['message']}');</script>";
  unset($_SESSION['message']);
}
?>


  <title>Cart Checkout</title>
  <link rel="stylesheet" type="text/css" href="cart-checkout.css">
  <style>
    /* Container for the entire section */
body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1.1em;
      line-height: 1.5;
      }

  /* "Retrieved from stackoverflow to fix a spill issue with our page: " */
      html, body{
        width: 100%;
        height: 100%;
        margin: 0px;
        padding: 0px;
        overflow-x: hidden;
      }
    /* Set up basic styling for the page */
    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

.card {
  display: flex;
  flex-direction: row;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0px 0px 5px #ccc;
  width: 60%;
  height: auto;
  margin: 0 auto;
  margin-top:150px;
  margin-bottom: 150px;
  background-color: #fff;
}

.col-md-6 {
  flex: 1;
  padding: 20px;
}

.cart-item {
  display: flex;
  flex-direction: row;
  margin-bottom: 10px;
  padding-bottom: 10px;
  border-bottom: 1px solid #ccc;
}

.item-image {
  flex: 1;
  margin-right: 20px;
}

.item-image img {
  max-width: 100%;
}

.item-details {
  flex: 2;
  margin-left: 70px;
}

.item-details h4 {
  margin-top: 0;
  justify-content: right: ;;
}



.remove-item {
  margin-top: 10px;
  padding: 5px 10px;
  background-color: #dc3545;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.remove-item:hover {
  background-color: #c82333;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: #333;
}

.form-control {
  width: 80%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: inset 0px 0px 5px #ccc;
}

.form-control:focus {
  outline: none;
  box-shadow: inset 0px 0px 5px #007bff;
}

.btn {
  padding: 15px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  width: 100%;
  margin-top: 20px;
  font-size: 20px; /* added */
}

.btn:hover {
  background-color: #800000; /* changed */
}


@media only screen and (max-width: 768px) {
  .car-container {
    flex-wrap: wrap;
  }
}
.cart-items-wrapper {
    height: 500px; /* set your desired height */
    overflow-y: auto;
}

#carderror{
  color:red;
  font-style:italic;
}
#experror{
  color:red;
  font-style:italic;
}

#nameerror{
  color:red;
  font-style:italic;
}

</style>
<body>
<div class="container card">

  <div class="col-md-6">
  <div class="back-to-products">
            <a href="../courses_page/courses_page.php" class="btn btn-secondary">Back to Products</a>
        </div>
    <h3>Items in Cart:</h3>
      <!-- Calculate the total cost of items in cart -->
<?php 
  $total_cost = 0; // initialize the total cost to zero
  foreach($_SESSION['cart'] as $cart_item) { // loop through each item in the cart
    $total_cost += $cart_item['price']; // add the price of the item to the total cost
  }
?>

<!-- Display the total cost of items in cart -->
<div class="total-cost">
  <hr>
  <h4>Total Cost: $<?php echo number_format($total_cost, 2); ?></h4>
</div>
    <hr>
    <div class="cart-items-wrapper">
  <div class="cart-items">
    <!-- Checks for 'cart' key in the session and if cart has items.'isset' function checks if $_SESSION['cart'] variable is set, and the 'count' function to check if it has any items.
    If items in cart, code loops through each item using a 'foreach' loop. Cart item is stored in the $cart_item variable. -->

    <?php if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
  $keys = array_keys($_SESSION['cart']); // get array of keys
  foreach($keys as $index) {
    $cart_item = $_SESSION['cart'][$index]; // get current cart item
?>
    <div class="cart-item">
      <div class="item-image">
        <img src="<?php echo $cart_item['image'];?>" alt="Course Image">
      </div>
      <div class="item-details">
        <h4><?php echo $cart_item['title'];?></h4>
        <p>Price: $<?php echo $cart_item['price'];?></p>
        <form method="POST" action="remove_from_cart.php">
          <input type="hidden" name="index" value="<?php echo $index; ?>">
          <button class="remove-item" type="submit">Remove Item</button>
        </form>
      </div>
    </div>
<?php }
} else {?>
  <p>Your cart is empty.</p>
<?php } ?>
  </div>
</div>
    <hr>
  </div>
  <div class="col-md-6">
  <h3>Billing Information:</h3>
    <hr>
    <form method="POST" action="" onsubmit = "return submitted()">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
      </div>
      <div class="form-group">
        <label for="cardnumber">Card Number:</label>
        <p id="carderror"></p>
        <input type="tel" maxlength=16 class="form-control" id="cardnumber" name="cardnumber" placeholder="Enter your card number" value="" required>
      </div>
      <div class="form-group">
        <label for="expdate">Expiration Date:</label>
        <p id="experror"></p>
        <input type="tel" maxlength=4 class="form-control" id="expdate" name="expdate" placeholder="MM/YY" value=""  required>
      </div>
      <button type="submit" class="btn btn-primary" name="submit" >Pay Now</button>
    </form>
  </div>
</div>

<script type="text/javascript">
  var input = document.getElementById("name");
  input.addEventListener('input', function(){
    this.value = this.value.replace(/[^A-Za-z]/,'')
  })

  var input = document.getElementById("cardnumber");
  input.addEventListener('input', function(){
    this.value = this.value.replace(/[^0-9]/,'')
  })

  var input = document.getElementById("expdate");
  input.addEventListener('input', function(){
    this.value = this.value.replace(/[^0-9]/,'')
  })


  function submitted(){
    var cardnumber = document.getElementById("cardnumber")
    var cardvalue = cardnumber.value
    var expdate = document.getElementById("expdate")
    var expvalue = expdate.value
    var name = document.getElementById("name")
    var namevalue = name.value

    if(cardvalue.length!=16){
      var carderror = document.getElementById("carderror")
      carderror.innerText="Card number must be 16 digits!"
      return false
    }

    if(expvalue.length!=4){
      var experror = document.getElementById("experror")
      experror.innerText="Expiration date must be 4 digits!"
      return false
    }

    else{return true}
    
  }

</script>

   <!-- PHP Includes Footer -->
   <?php include("../Includes/Footer.php") ?>
    <!-- PHP Includes Footer -->  
    <?php ob_end_flush(); ?>
