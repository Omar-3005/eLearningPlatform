<?php include('phone_display_backend.php') ?>
<html>
<head>
    <title>Reset password</title>
   <style>

body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        /* background-color: #fff; */
        font-size: 1.1em;
        line-height: 1.5;
        text-align: center;
        background: black url('https://images.pexels.com/photos/2041540/pexels-photo-2041540.jpeg?cs=srgb&dl=pexels-rafael-cosquiere-2041540.jpg&fm=jpg&_gl=1*vfg6wr*_ga*NDgxOTM1MTE4LjE2NzUwMjEyOTg.*_ga_8JE65Q40S6*MTY3NTA4MTM1Ni40LjEuMTY3NTA4MTM4NC4wLjAuMA..');
        background-size: cover; /* or "contain" depending on what you want */
        background-position: center center;
        background-repeat: no-repeat;
            }
    /* "Retrieved from stackoverflow to fix a spill issue with our page: " */
    html, body{
        width: 100%;
        height: 100%;
        margin: 0px;
        padding: 0px;
        overflow-x: hidden;
      }

  .heading1{
        margin-top: 150px;
        font-size: 40px;
        text-align: center;
        color:#BC3838;
        font-family:Arial, Helvetica, sans-serif;
  }

  .subtext1{
      text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        color: black;
        padding: 18px;
  }

  .form1{
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        width: 50%;
        padding: 1pvw;
        margin: 100 auto;
        text-align: center;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: white;
  }
  .form1{
    padding-bottom: 10%;
  }
  input{
        width: 35%;
        margin: 15px;
        padding: 8px;
        font-size: 16px;
    }

    .halflogo{
      width: 250px;
      object-position: 20% 80%;
      
    }


  </style>
</head>
  
  <body>
    <div>
          <!-- PHP Includes Header-->
          <?php include("../Includes/Header.php") ?>
          <!-- PHP Includes Header -->
    <div>
    <main>
    <form action="phone_display_backend.php" method="post" class="form1">
        <img class="halflogo" src="../Images/UOLOGO3.png" />
        <div class="heading1">
            <h9> Forgot your Password? </h9>
        </div>
        <div class="subtext1">
          <h10>Enter the fullnumber of the number provided with the missing digits</h10>
          <h9>
              <span><?php echo substr($results["phone_number"], 0, 1); ?>*********</span>
              <input type="hidden" name="phonenumberDB" value="<?php echo $results["phone_number"]; ?>">
          </h9>
        </div>
        <div>
            <input type="phonenumber" name="phonenumber" placeholder="Phonenumber" /> <br />
            <input class="submit" type="submit" name="password_reset" />
         </div>
    </form>
            
    </main>
      <!-- PHP Includes Footer -->
      <?php include("../Includes/Footer.php") ?>
      <!-- PHP Includes Footer -->
</body>
</html>