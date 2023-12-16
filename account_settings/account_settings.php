<!-- PHP Includes Footer -->
<?php ob_start();
include("../Includes/Header.php");
include("../account_settings/profile.php");
include("../account_settings/reset_password_loggedin.php");
include("../account_settings/destroy.php");
include("../account_settings/transactions.php");
?>
<!-- PHP Includes Footer -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
    function toggleDiv(id) {
      var div = document.getElementById(id);
      var content = document.getElementsByClassName('content')[0];
      for (var i = 0; i < content.children.length; i++) {
        content.children[i].style.display = 'none';
      }
      div.style.display = 'block';
    }
    </script>
    <script>
      setTimeout(function() {
         var errorMsg = document.getElementById("error-msg");
         if (errorMsg) {
            errorMsg.remove();
         }
      }, 5000);
   </script>
    <title>Account Details</title>
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <!-- <link rel="Stylesheet" href="genral.css"> -->
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
.box {
  display: flex;
  justify-content: center;
  margin-top:40px;
  margin-bottom: 40px;
}

/* Profile container */
.profile-container {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  width: 80%;
  height: auto;
  min-height: 70vh;
  max-height: 90vh;
  background-color: white;
  border-radius: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

/* Profile picture */
.profilepic {
  width: 100px;
  height: 100px;
  margin-top:20px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 20px;
}

/* Side nav */
.sidenav {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  width: 20%;
  height: 100%;
  background-color: #f5f5f5;
}


.sidenav_links {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  margin-top: 30px;
}

/* Links in side nav */
li {
  list-style: none;
  margin-bottom: 15px;
}

a {
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  color: #333;
  text-decoration: none;
  font-size: 18px;
}

a:hover {
  background-color: #e6e6e6;
  color: #111;
}
.sidenav_links li {
  display: block;
  width: 100%;
  text-align: left;
  font-size: 18px;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #fff;
  text-decoration: none;
}
.sidenav_links ul {
  padding: 2px;
}


/* Content section */
.content {
  width: 100%;
  height: 100%;
  padding: 0px;
  overflow: auto;
}

h1 {
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  font-weight: 700;
  color: #333;
}

/* Media Queries */
@media (max-width: 1200px) {
  .profile-container {
    width: 90%;
    max-height: 80vh;
  }
}

@media (max-width: 768px) {
  .box {
    flex-direction: column;
    align-items: center;
    margin-top:0px;
  }
.profilepic{
  margin-left:23%;
}
h3{
  margin-left:42%;
}
  .profile-container {
    flex-direction: column;
    width: 100%;
    max-height: none;
    height: auto;
    border-radius: 0;
    box-shadow: none;
  }

  .sidenav {
    width: 100%;
    height: auto;
    margin-bottom: 20px;
  }
  .sidenav_links li {
    display: block;
    width: 100%;
    text-align: center;
    border: none;
    margin-bottom: 10px;
  }
  
  .sidenav_links li:hover {
    border: 2px solid #000000 !important;
  }
  
  .sidenav_links li a {
    display: block;
    width: 100%;
    padding: 10px;
    color: #000000;
    font-size: 16px;
    text-decoration: none;
    /* border: 1px solid #000000; */
    box-sizing: border-box !important;
  }
}
/* Style for the Deactivate Account section */

#deactivate-account {
  margin-top: 50px;
  padding: 20px;
  border: 1px solid #ccc;
}

#deactivate-account h1 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

#deactivate-account label {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

#deactivate-account input[type="checkbox"] {
  margin-right: 10px;
}

#deactivate-account input[type="submit"] {
  background-color: #f44336;
  color: white;
  font-size: 18px;
  font-weight: bold;

  border: none;
  cursor: pointer;
  border-radius: 5px;
}

#deactivate-account input[type="submit"]:hover {
  background-color: #e53935;
}
.deact{
  margin-top: 30px;
}
        </style>
</head>

<body>
    <div class="container">
    
        <section class="box">
            <div class="profile-container">
                <div class="sidenav">
                    <div class="">
                        <img class="profilepic" src="../Images/profile-icon-9n.jpg" alt="">
                        <h3><?php echo $fullname ?></h3>
                    </div>
                    <div class="sidenav_links">
                        <ul>  
                            <li class="li">
                                <a href="#" onclick="toggleDiv('user-details')">
                                <i class='bx bxs-user-detail'></i>
                                <span class="baroption">User Details</span>
                                </a>
                            </li>
                            <li class="li">
                                <a href="#" onclick="toggleDiv('edit-modify')">
                                <i class="bx bxs-cog"></i>
                                <span class="baroption">Edit/Modify Details</span>
                                </a>
                            </li>
                            <li class="li">
                                <a href="#" onclick="toggleDiv('password-reset')">
                                <i class='bx bxs-edit-alt'></i>
                                <span class="baroption"> Password Reset</span>
                                </a>
                            </li>
                            <li class="li">
                                <a href="#" onclick="toggleDiv('transaction-history')">
                                <i class='bx bx-history'></i>
                                <span class="baroption"> Transaction History</span>
                                </a>
                            </li>
                            <li class="li">
                                <a href="#" onclick="toggleDiv('deactivate-account')">
                                <i class='bx bxs-message-square-x'></i>
                                <span class="baroption"> Deactivate Account</span>
                                </a>
                            </li>
                            <li class="li">
                                <a href="../account_profile/Courses.php" >
                                <span class="baroption"> Back</span>
                                </a>
                            </li>
                        </ul>  
                    </div>
                </div>
                <div class="content">
                    <div class="Account-details"id="user-details">
                        <h1> Account Details</h1>
                                <table>
                                    <tr>
                                        <th>Full Name </th>
                                        <td><?php echo $fullname ?></td> 
                                    </tr>
                                    <tr>
                                        <th>Account Number </th> 
                                        <td><?php echo $id ?></td> 
                                    </tr>
                                    <tr>               
                                    <tr>
                                        <th>Date of Birth</th> 
                                        <td><?php echo $dateofbirth ?></td> 
                                    </tr>
                                    <tr>
                                        <th>Email Adress</th>
                                        <td><?php echo $email ?></td> 
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td><?php echo $phone_number ?></td> 
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td><?php echo $Gender ?></td> 
                                    </tr>
                                </table>   
                    </div>
                    <div name="edit-modify" id="edit-modify" style="display: none">
                        <h1> User Details</h1>
                            <form method="post" action="">
                                <table>
                                <tr>
                                        <th>Full Name</th>
                                        <td><input type="text" id = "fullname" name="fullname" placeholder="Name" /></td>
                                        <script>
                                          var input = document.getElementById("fullname");
                                          input.addEventListener('input', function(){
                                            this.value = this.value.replace(/[^A-Za-z]/,'')
                                          })
                                        </script>
                                    </tr>
                                    <tr>
                                        <th>Date of Birth</th>
                                        <td><input type ="date" name="dateofbirth"  /></td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td><input type ="number" name="phone_number" placeholder="Phone Number" /></td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>
                                            <select name="Gender" >
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Upload Profile Photo</th>
                                        <td><input type="file" name= myfile></td>
                                    </tr>
                                </table>
                                <input type="Submit" name="submit" value="Save Changes">
                            </form>
                    </div>
                    <div id="password-reset" style="display: none">
                        <h1> Password Reset</h1>
                        <form method="post" action=""  class="password-reset-form" >
                            <table>
                                <tr>
                                    <th> Current Password</th>
                                    <td><input type="password" name="current_password" placeholder="Current Password" required/></td>
                                </tr>
                                <tr>
                                    <th> New Password</th>
                                    <td><input type="password" name="new_password" placeholder="New Password" required/></td>
                                </tr>
                                <tr>
                                    <th> Re-enter New Password</th>
                                    <td><input type="password" name="confirm_password" placeholder="Re-enter New Password" required/></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input class="update" type="submit" name="update" value="Update"/></td>
                                </tr>
                            </table>
                        </form>
                        <?php
                                if (!empty($error_msg)) {
                                  echo "<span id='error-msg'>$error_msg</span>";
                                }

                                if (!empty($success_msg)) {
                                  echo "<span id='success-msg'>$success_msg</span>";
                          }
                          ?>
                    </div>
                    <div id="transaction-history" style="display: none">
                    <h2>Transaction History</h2>
                    <?php if ($result->num_rows > 0) { ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Enrollment Date</th>
                                <th>Transaction Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['course_title']; ?></td>
                                <td><?php echo $row['enrollment_date']; ?></td>
                                <td>$<?php echo $row['transaction_price']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php } else { ?>
                    <p>No courses enrolled.</p>
                    <?php } ?>
                    </div>
                    <div id="deactivate-account" style="display: none">
                    <p>Are you sure you want to deactivate your account? This process cannot be undone once deactivated.</p>
                    <form method="post" action="">
                            <input type="checkbox" name="agree" id="agree" required>
                            <label for="agree">I agree to deactivate my account</label>
                            <br>
                            <input type="submit" name="submit" value="Deactivate" class="deact">
                        </form>
                    </div>
                </div>
            </div>
        </section> 
   </div>
   <!-- PHP Includes Footer -->
  <?php 
  include("../Includes/Footer.php"); 
  ob_end_flush(); 
  ?>
    <!-- PHP Includes Footer -->  
