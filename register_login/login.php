
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
   <style>
      body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1.1em;
      line-height: 1.5;
      }

      .container2 {
      min-height: 100vh;
      }

  /* "Retrieved from stackoverflow to fix a spill issue with our page: " */
      html, body{
        width: 100%;
        height: 100%;
        margin: 0px;
        padding: 0px;
        overflow-x: hidden;
      }

.forms-container{
    display: grid;
    grid-template-areas: 'left-side right-side';
}

.left-side{
    padding: 9rem;
    background: url(https://images.pexels.com/photos/5088017/pexels-photo-5088017.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
    background-position: center;
    background-size: cover;

}

form {
    height: 460px;
    width: 80%;
    border-radius: 10px;
    border: 2px solid rgba(255, 255, 255, 0.1);
    /* box-shadow: 0 0 40px rgba(8, 7, 16, 0.6); */
    padding: 50px 35px;
    }
    form * {
    font-family: "Inter", sans-serif;
    color: #ffffff;
    outline: none;
    border: none;
    }
    form h3 {
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
    }

    label {
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
    }
    input {
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.07);
    border-radius: 5px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
    }
    ::placeholder {
    color: rgb(200, 200, 200);
    }
    button {
    margin-top: 40px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 1em;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    }

    form{
        background: #BC3838;
    }

  .right-side{
    height: 100vh;
    background: linear-gradient(to bottom, #BC3838 0%, #BC3838 70%);
    opacity: 1;
  }
  .content {
    color: white;
    text-align: center;
    padding: 9rem;
    margin-top: 10%;

  }
  @media (max-width: 1173px) {
    form {
  height: 460px;
  width: 400px;
  background-color: #BC3838;
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  border-radius: 10px;
  border: 2px solid rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
  padding: 50px 35px;
}

  .forms-container {
    background: url(https://images.pexels.com/photos/5239564/pexels-photo-5239564.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
  }
  .right-side {
    background: none;
  }
  .left-side{
    background: none;
  }
  .content{
    display: none;
  }
}
.password-input-container {
  position: relative;
}

.password-toggle {
  position: absolute;
  top: 15px;
  right: 10px;
  color: #ccc;
  cursor: pointer;
}

.password-toggle:hover {
  color: #333;
}

.show-password {
  display: block;
}

.hide-password {
  display: none;
}

.Invalid{
  	color:rgb(255, 162, 0);
  	font-style: italic;
}

.InvalidE{
  	color:rgb(255, 162, 0);
  	font-style: italic;
}
</style>

</head>
  <body>
      <div class="container2">
          <!-- PHP Includes Header-->
          <?php include("../Includes/Header.php") ?>
          <!-- PHP Includes Header -->
            <div class="forms-container">
                    <div class="left-side">
                    <form method="post" action="login_backend.php" onsubmit="return validateForm()">
                      <div class="input-container">
                        <h3>Login</h3>
                        <label for="username">Username</label>
                        <?php
                          $url ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                          if(strpos($url,"InvalidEmail") == true){
                            echo"<p class = 'InvalidE'>Invaild Email!</p>";
                          }
                        ?>
                        <input type="text" name="username" placeholder="Email" id="username"  />
                        <span id="emailError" class="error-message"></span>
                        <label for="password">Password</label>
                        <?php
                          $url ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                          if(strpos($url,"InvalidPassword") == true){
                            echo"<p class = 'Invalid'>Invaild Password!</p>";
                          }
                        ?>
                        <div class="password-input-container">
                          <input type="password" name="password" placeholder="Password" id="password">
                          <i class="fa fa-eye password-toggle"></i>
                          </div>
                        <span id="passwordError" class="error-message"></span>
                        <div class="Forgot"><a href="../register_login/forgot_password.php">Forgot your password?</a></div>
                        <button type="submit" name="login">Log In</button>
                      </div>
                    </form>
                  </div>
                  <div class="right-side">
                    <div class="content">
                            <h1 class="register-header">Register</h1>
                            <p class="register-text">Don't have an account? Register here!</p>
                            <a href="../register_login/register.php"><button>Register an account</button></a>
                    </div>
                </div>
            </div>
      </div>
      <!-- PHP Includes Footer -->
      <?php include("../Includes/Footer.php") ?>
      <!-- PHP Includes Footer -->
      <script>  
  function validateForm() {
    const email = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const emailError = document.getElementById("emailError");
    const passwordError = document.getElementById("passwordError");
    
    if (email.trim() === "") {
      emailError.textContent = "Email is required";
      setTimeout(function() {
        emailError.textContent = "";
      }, 3000); // Clear error message after 3 seconds
      return false;
    } else {
      emailError.textContent = "";
    }
    
    if (password.trim() === "") {
      passwordError.textContent = "Password is required";
      setTimeout(function() {
        passwordError.textContent = "";
      }, 3000); // Clear error message after 3 seconds
      return false;
    } else {
      passwordError.textContent = "";
    }
    
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#^])[A-Za-z\d@$!%*?&#^]{6,}$/;
    if (!passwordRegex.test(password)) {
      passwordError.textContent = "Password must be at least 6 characters long and contain one lowercase, one uppercase letter, one number, and one special character";
      setTimeout(function() {
        passwordError.textContent = "";
      }, 3000); // Clear error message after 3 seconds
      return false;
    } else {
      passwordError.textContent = "";
    }
  }
  const passwordInput = document.getElementById("password");
const passwordToggle = document.querySelector(".password-toggle");

passwordToggle.addEventListener("click", function () {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    passwordToggle.classList.remove("fa-eye");
    passwordToggle.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = "password";
    passwordToggle.classList.remove("fa-eye-slash");
    passwordToggle.classList.add("fa-eye");
  }
});
</script>
  </body>
</html>
