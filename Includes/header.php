<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/dbb41ba882.js" crossorigin="anonymous"></script>
<script>
 function togglemenu() {
  var menu = document.querySelector('.navbar-links');
  menu.classList.toggle('active');
}

window.addEventListener('load', function() {
  setTimeout(function() {
    // Check if user is logged in and there are any items in the cart
    if (<?php echo json_encode(isset($_SESSION['email']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])); ?>) {
      // Check if this is the first reminder or not
      if (sessionStorage.getItem('cartReminderShown')) {
        // Show the subsequent reminder message
        alert('You still have an item in your cart! Please complete your purchase.');
      } else {
        // irst reminder message
        alert('You have items remaining in your cart! Please checkout!');
        sessionStorage.setItem('cartReminderShown', true);
      }
    }
  }, 95000); // 15 seconds
  setInterval(function() {
    // Check if user is logged in and there are any items in the cart
    if (<?php echo json_encode(isset($_SESSION['email']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])); ?>) {
      // Show the reminder message
      alert('You still have an item in your cart! Please complete your purchase.');
    }
  }, 30000); // 30 seconds
});
</script>
<script>
  // Set the amount of time before the user is logged out
  const timeout = 160000; // 1 minute

  let timeoutId;

  function resetTimer() {
    // Clear any existing timer
    clearTimeout(timeoutId);

    // Start a new timer
    timeoutId = setTimeout(function() {
      // Redirect the user to the logout page
      window.location.href = '../register_login/logout_backend.php';
    }, timeout);
  }

  // Reset the timer when the user interacts with the page
  window.addEventListener('click', resetTimer);
  window.addEventListener('mousemove', resetTimer);
  window.addEventListener('keypress', resetTimer);
  window.addEventListener('scroll', resetTimer);
</script>

   <style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1.1em;
        line-height: 1.5;
      }

      html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
      }

      .Navigation-Bar {
        display: grid;
        grid-template-columns: repeat(3, auto);
        align-items: center;
        justify-content: space-between;
        padding: 50px;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);
      }

      .logo {
        max-width: 50%;
        height: auto;
        margin-right: auto;
      }

      .second-logo {
        max-width: 50%;
        height: auto;
        margin-left: 50%;
      }

      .navbar-links {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50%;
        flex: 1;
      }

      .navbar-links ul {
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
      }

      .navbar-links li {
        padding: 0 1rem;
      }

      .navbar-links a {
        color: black;
        text-decoration: none;
        font-size: 1.2rem;
      }

      .anav {
        color: #333;
        text-decoration: none;
        font-size: 16px;
      }

      li a:hover {
        color: maroon;
      }

      .toggle-button {
        display: none;
      }

      @media (max-width: 768px) {
        .Navigation-Bar {
          grid-template-columns: auto 1fr auto;
          grid-gap: 10px;
          align-items: center;
        }

        .logo {
          max-width: 40%;
        }

          .navbar-links {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 80px;
    right: 30px;
    width: 30%;
    background-color: #fff;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0,0,0,0.3);
    z-index: 1;
  }

  .navbar-links ul {
    flex-direction: column;
    padding: 10px;
  }

  .navbar-links li {
    margin: 5px 0;
    padding: 0;
  }

  .navbar-links a {
    font-size: 1rem;
    padding: 5px;
  }


        
.navbar-links.active {
display: flex;
}
.second-logo{
  display: none;
}
    .toggle-button {
      display: block;
      position: absolute;
      top: 20px;
      right: 20px;
      background-color: transparent;
      border: black;
      cursor: pointer;
      z-index: 2;
    }


    .fa-bars {
      font-size: 1.5rem;
      color: #333;
    }
  }
</style>
</head>
<header>
<div class="wrapper">
  <nav class="Navigation-Bar" >
    <div>
      <a href="../home_page/home_page.php"><img class="logo" src="../Images/UOLOGO3.png"></a>
    </div>
    <button class="toggle-button">
    <i class="fa fa-bars"></i>
  </button>
    <div class="navbar-links">
      <ul class="No">
        <li><a class="anav" href="../home_page/home_page.php">Home</a></li>
        <li><a class="anav" href="../courses_page/courses_page.php">Courses</a></li>
        <li><a class="anav" href="../FAQ/FAQ.php">FAQ</a></li>
        <li><a class="anav" href="../contact_page/contact_page.php">Contact</a></li>
        <?php
          if (isset($_SESSION['email'])) {
            echo "<li><a class='anav' href='../account_profile/Courses.php'>Profile</a></li>";
            echo "<li><a class='anav' href='../courses_page/checkout.php'><i class='fas fa-shopping-cart'></i> ";
            if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
                echo "<span class='cart-count'>$count</span>";
            }
            echo "</a></li>";
            echo "<li><a class='anav' href='../register_login/logout_backend.php'>Logout</a></li>";
          }
          else {
            echo "<li><a class='anav' href='../register_login/login.php'>Login/Register</a></li>";
          }
        ?>
      </ul>
    </div>
    <div>
      <a href="../home_page/home_page.php"><img class="second-logo" src="../Images/UOLOGO3.png"></a>
    </div>
  </nav>
</div>
</header>
</html>
<script>
  const toggleButton = document.querySelector('.toggle-button');
  const navbarLinks = document.querySelector('.navbar-links');

  toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active');
  });
</script>
