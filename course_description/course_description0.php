<!-- PHP Includes Header-->
<?php 
include("../Includes/Header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <style>
      body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #fff;
        font-size: 1.1em;
        line-height: 1.5;
        text-align: center;
        background: black url('https://images.pexels.com/photos/2041540/pexels-photo-2041540.jpeg?cs=srgb&dl=pexels-rafael-cosquiere-2041540.jpg&fm=jpg&_gl=1*vfg6wr*_ga*NDgxOTM1MTE4LjE2NzUwMjEyOTg.*_ga_8JE65Q40S6*MTY3NTA4MTM1Ni40LjEuMTY3NTA4MTM4NC4wLjAuMA..');
        background-size: cover; /* or "contain" depending on what you want */
        background-position: center center;
        background-repeat: no-repeat;
        fill-opacity: 11;
            }
  /* "Retrieved from stackoverflow to fix a spill issue with our page: " */
        html, body{
        width: 100%;
        height: 100%;
        margin: 0px;
        padding: 0px;
        overflow-x: hidden;
      }

/* Nav Bar CSS beginning*/

      .Navigation-Bar{
        display: flex;
        align-items: center;
        flex-direction: row;
        justify-content: space-between;
        background-color: white;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.15)
      }
      .logo {
        width: 200px;
        height: 80px;
        padding: 1.5vw 7vw;
        padding-top: 4px;
      }
        /* Turns the ul vertically instead of horizantally */
      ul{
       display: flex;
       justify-content: flex-end;
       align-items: center; 
       list-style: none;
       padding: 1vw 7vw;
      }
        /* This deals with the vertical spacing  of the li on the nav bar */
       nav ul li a {
      display: inline-block;
      padding: 5%;
      position: relative;
        /* text-decoration: none; */
      color: #000;
      }
      
      /* This deals with the easeing in/out of the li underline */
      nav ul li a::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 2px;
      bottom: -5px;
      left: 0;
      background-color: #BC3838;
      visibility: hidden;
      transform: scaleX(0);
      transition: all 0.3s ease-in-out 0s;
      }
        /*  */
      nav ul li a:hover::before {
      visibility: visible;
      transform: scaleX(1);
      }
      /* End:This deals with the easeing in/out of the li underline */

      /* li a CSS adds spacing to the li and removes the underlining. Changes the color to black and other small formating */
      li a{
        margin-left: 80px; /* This changes the spacing between the li*/
        text-decoration: none;
        font-size: 20px;
        font-weight: 500px;
        color: black;
      }
      li a:hover{
        color: maroon; /* When hovering over a list element in the nav bar this highlight the element maroon */
      }

      /* Hamburger menu begins */
      .toggle-button {
        position: absolute;
        top: 2.5rem;
        right: 1rem;
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 30px;
        height: 21px;

      }
      .toggle-button .bar {
        height: 3px;
        width: 100%;
        background-color: black;
        border-radius: 10px;

      }

      @media (max-width: 700px){
        .toggle-button{
          display: flex;

        }
        .navbar-links {
          display: none;
          width: 100%;
        }
      }
      /* Hamburger menu ends */

/* Nav Bar CSS End*/

    `.container {
        width: 100%;
        margin: 0 auto;
        text-align: center;
        }

        .header {
        background-color: black;
        color: white;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 50px;
        }

        .course-name {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 20px;
        }

        .slogan {
        font-size: 18px;
        margin-bottom: 20px;
        }

        .buy-now {
        padding: 10px 20px;
        background-color: green;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        }

        .course-description-container {
        width: 30%;
        margin: 0 auto;
        /* height: 1000px; */
        background-color: white;
        padding: 20px;
        border-radius: 0px;
        box-shadow: 0px 0px 10px #ccc;
        }

        .course-description {
        font-size: 18px;
        text-align: justify;
        margin-bottom: 20px;
        }

        .course-details {
        margin-top: 20px;
        font-size: 16px;
        text-align: left;
        list-style-type: square;
        margin-left: 20px;
        }

        .course-details li {
        margin-bottom: 10px;
        text-align: left;
        }
        /* Footer */
      .element {
        all: none;
      }
      footer{
        padding: 5vw;
        background-color: black;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        margin-top: 40px;
      }
      footer .footer-col{
        padding-bottom: 0px;
      }
      footer h9{
        color: white;
        font-weight: 600;
        padding-bottom: 20px;
      }
      footer li{
        list-style: none;
        color: grey;
        padding: 10px 0;
        font-size: 15px;
        cursor:pointer
      }
</style>
</head>

<body>
    <div>
    <div class="container">
        <div class="header">
          <h1 class="course-name">Web: Introduction to HTML</h1>
          <p class="slogan">Feed your mind with knowledge and expertise. Learn from trusted experts to elevate your education to the next level.</p>
          <a class="buy-now"href="../courses_page/courses_page.php" class="btn">Back to Courses Page</a>
        </div>
        <div class="course-description-container">
          <h2 class="section-head">Description</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae deserunt pariatur quaerat consectetur alias architecto officiis optio rerum, accusantium nobis?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, asperiores!</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias perspiciatis facilis harum assumenda amet dolores ad, qui velit necessitatibus quod autem numquam aperiam reprehenderit quas tempora magni error! Recusandae, quod..</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus error sunt, numquam illum delectus natus.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur.:</p>
        </div>
      </div>

    <!-- PHP Includes Footer -->
    <?php include("../Includes/Footer.php") ?>
    <!-- PHP Includes Footer -->  
</body>
