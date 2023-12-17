<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

.dropdown{
  color: white;
  background-color: rgba(255, 255, 255, 0.07);
}
.dropdown option{
  color: white;
  background-color: #BC3838;
}

form {
    height: 750px;
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
     margin-top: 10px;  /*Use to be 30px */
    font-size: 16px;
    font-weight: 500;
    }
    input {
    display: block;
    height: 40px;
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
    height: 100%;
    background: linear-gradient(to bottom, #BC3838 0%, #BC3838 100%);
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
  .content{
    display: none;
  }
}
.password-input-container {
  position: relative;
}

.password-toggle {
  position: absolute;
  top: 10px;
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
/* CSS */
@keyframes loading {
  0% {
    content: ".";
  }
  33% {
    content: "..";
  }
  66% {
    content: "...";
  }
}

#email-availability-status.loading::after {
  content: "...";
  animation: loading 1s infinite;
}

#nameerror{
  color:rgb(255, 162, 0);
  font-style:italic;
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
                <form method="post" action="register_backend.php" onsubmit="return validateForm()">
      <div class="input-container">
        <h3>Register</h3>
        <label for="fullname">Full Name</label>
        <input type="text" name="fullname" placeholder="Full Name" id="fullname" onkeypress="return letter(this)" value="" required>
        <script>
        var input = document.getElementById("fullname");
        input.addEventListener('input', function(){
          this.value = this.value.replace(/[^A-Za-z]/,'')
        })
        </script>
        <span id="fullnameError" class="error-message"></span>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email" id="email" >
        <span id="email-availability-status"></span>
        <span id="emailError" class="error-message"></span>
        <span id="emailAvailabilityStatus"></span>
        <label for="phone_number">Phone Number</label>
        <input type="phone-number" name="phone_number" placeholder="Phone" >
        <label for="password">Password</label>
        <div class="password-input-container">
  <input type="password" name="password" placeholder="Password" id="password">
  <i class="fa fa-eye password-toggle"></i>
</div>
        <span id="passwordError" class="error-message"></span> 
        <label for="birthdate">Date of Birth</label>
        <input type="date" name="dateofbirth" >
        <label for="gender">Gender</label>
        <select class="dropdown"name="Gender" >
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
        <div class="input-container">
          <button type="submit" name="submit" value="submit">Register</button>
        </div>
      </div>
    </form>
            </div>
            <div class="right-side">
                <div class="content">
                        <h1 class="register-header">Login</h1>
                        <p class="register-text">Already have an account? Login here!</p>
                        <a href="../register_login/login.php"><button>Login to your account</button></a>
                </div>
            </div>
        </div>
 </div>

    <!-- PHP Includes Footer -->
    <?php include("../Includes/Footer.php") ?>
    <!-- PHP Includes Footer -->
<script>

  function validateForm() {
    const fullname = document.getElementById("fullname").value;
    const fullnameError = document.getElementById("fullnameError");
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const emailError = document.getElementById("emailError");
    const passwordError = document.getElementById("passwordError");

  
    if (fullname.trim() === "") {
      fullnameError.textContent = "Full Name is required";
      setTimeout(function() {
        fullnameError.textContent = "";
      }, 4000); // Clear error message after 3 seconds
      return false;
    } else {
      fullnameError.textContent = "";
    }
    if (email.trim() === "") {
      emailError.textContent = "Email is required";
      setTimeout(function() {
        emailError.textContent = "";
      }, 4000); // Clear error message after 3 seconds
      return false;
    } else {
      emailError.textContent = "";
    }
    
    if (password.trim() === "") {
      passwordError.textContent = "Password is required";
      setTimeout(function() {
        passwordError.textContent = "";
      }, 4000); // Clear error message after 3 seconds
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
<script>
// JavaScript
$(document).ready(function() {
  $('#email').keyup(function() {
    var email = $('#email').val();
    var validDomains = ['.ca', '.com']; // add any additional valid domains here
    var valid = false;

    // check if email ends with a valid domain
    for(var i=0; i<validDomains.length; i++) {
      if(email.endsWith(validDomains[i])) {
        valid = true;
        break;
      }
    }

    if(valid) {
      $('#email-availability-status').addClass('loading').html('Checking availability');
      $.ajax({
        type: "POST",
        url: "check_username.php",
        data: { email: email },
        success: function(response) {
          setTimeout(function() {
            $('#email-availability-status').removeClass('loading').html(response);
          }, 3000); // display the response after 3 seconds
        }
      });
    } else if(email.length > 0) { // only display the error message if there's something in the email field
      $('#email-availability-status').html('Please enter a valid email ending with .ca or .com');
    } else {
      $('#email-availability-status').html('');
    }
  });
});

</script>
</body>
</html>
