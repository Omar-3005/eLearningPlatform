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

       
        table{
            position:absolute; top:30%;right:15%;border: 1px solid;
            width: 40%;
        }
        
         th,td{
            padding: 12px;
            text-align: center;
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
                                <a href=""><i class='bx bxs-user-detail'></i>
                                <span class="baroption">User Details</span>
                                </a></li>
                            <li>
                                <a href="Modify.php"><i class = "bx bxs-cog"></i>
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
            <table>
                <tr>
                <th>Full Name </th> <td> User </td> </tr>
                <tr>
                <th>Account Number </th> <td> User </td> </tr>
                <tr>
                <th>Email Adress</th> <td> User </td> </tr>
                <tr>
                <th> Region </th> <td> User </td> </tr>
                <tr>
                <th> Gender </th> <td> M/F</td> </tr>
            </table>
           
             </div>
    </div>  
</div>
</body>

</html>