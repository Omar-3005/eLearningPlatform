<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="Stylesheet" href="genral.css">
    <style>

        form{
            position:absolute; top:20%;right:15%;border: 1px solid; width: 50%;
        } 
        table{
            width: 100%;
        }
        
        th,td{
            padding: 12px;
            text-align: center;
        }
        input{
            border-radius: 10px;
        }
        </style>
</head>

<body>
    <div class="container">
        <!-- Top Navigation Bar -->
        <nav class="Navigation-Bar">
            <div>
              <a href="../Home Page/Home Page.html"><img class="logo" src="UOLOGO3.png"></a>
            </div>
            <a href="#" class="toggle-button">
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
            </a>
            <div class="navbar-links">
              <ul>
                  <li><a href="/Home Page/Home Page.html">Home</a></li>
                  <li><a href="../courses page/CoursePageV2.html">Courses</a>
                  <li><a href="../FAQ/FAQ Attempt 3.html">FAQ</a></li>
                  <li><a href="../Contact Page1/contactpage0.html">Contact</a></li>
                  <li><a href="../Register Page/login.html" id="login/register">Login/Register</a></li>
              </ul>
            </div> 
         </nav>
        
        <!-- Box for Center -->
    
    <div class="box">
        <div class="sidenav">
            <img src="profile-icon-9n.jpg" alt="">
                    <h3> User Name </h3>
                    <div class="sidenav_links">
                        <ul>  
                        <li>
                                <a href="UserDetails.php"><i class='bx bxs-user-detail'></i>
                                <span class="baroption">User Details</span>
                                </a></li>
            
                            <li>
                                <a href=""><i class = "bx bxs-cog"></i>
                                <span class="baroption">Edit/Modify Details</span>
                                </a></li>
                    
                            <li>
                                <a href="PasswordReset.php"><i class='bx bxs-edit-alt'></i>
                                <span class="baroption"> Password Reset</span>
                                </a></li>
                    
                            <li>
                                <a href="TransactionHistory.php"><i class='bx bx-history' ></i>
                                <span class="baroption"> Transaction History</span>
                                </a></li>
                    
                            
                    
                            <li>
                                <a href="DeactivateAccount.php"><i class='bx bxs-message-square-x' ></i>
                                <span class="baroption"> Deactivate Account</span>
                                </a></li>
                    
                        </ul>  
                    </div>
        </div>
        <div class="content">
            <h1> Account Details</h1>
            <form>
                <table>
                    <tr>
                        <th>User Name</th><th> Email Adress</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="Fist Name" placeholder="First Name" required /></td>
                        <td> <input type ="email" name="email" required /></td>
                    </tr>
                    <tr>
                        <th> Region</th> <th>Phone Number</th>
                    </tr>
                    <tr>
                        <td><input type ="text" name="region" required /></td>
                        <td>
                            <input type ="number" name="phonenumber" required /></td>
                    </tr>
                    <tr>
                        <th>Gender</th><th>Upload Profile Photo</th>
                    <tr>
                        <td><input type ="radio" name="gender" value="Male" /> Male
                            <input type ="radio" name="gender" value="Female"/> Female
                            <input type ="radio" name="gender" value="Other"/> Other
                            
                        </td>
                        <td><input type="file" name= myfile></td>
                        
                    </tr>
                    

                </table>
                <input class="update" type="button" value="Update"/>
            </form>
             </div>
    </div>  
</div>
</body>

</html>