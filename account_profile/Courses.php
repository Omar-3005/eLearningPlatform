<!-- PHP Includes Header-->
<?php include("../Includes/Header.php"); ?>
<?php include("../account_settings/Profile.php"); ?>
<?php include("../courses_page/Payment.php"); ?>
<!-- PHP Includes Header -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>watch</title>

   <style>
     @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap');

     :root{
   --main-color:#BC3838;
   --red:#e74c3c;
   --orange:#f39c12;
   --light-color:#888;
   --light-bg:#eee;
   --black:#2c3e50;
   --white:#fff;
   --border:.1rem solid rgba(0,0,0,.2);
}

*{
   font-family: 'Nunito', sans-serif;
   text-decoration: none;
}


html{
   font-size: 72.5%;
   overflow-x: hidden;
}

/* * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  font-size: 72.5%;
  line-height: 1.5;
  background-color: #eee;
} */



body{
   background-color: #eee;
   font-family: 'Nunito', sans-serif;
   text-decoration: none;
   font-size: 62.5%;

}

.courses{
   padding:2rem;
   margin: 0 auto;
   max-width: 1200px;
   margin-bottom: 10%;
}

.CoursesContainer{
   margin-left: 30%;
   margin-right: 10%;
}

.heading{
   font-size: 2.5rem;
   color:var(--black);
   margin-bottom: 2.5rem;
   border-bottom: var(--border);
   padding-bottom: 1.5rem;
   text-transform: capitalize;
}



.courses .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:1.5rem;
   justify-content: center;
   align-items: flex-start;
}

.courses .box-container .box{
   border-radius: .5rem;
   background-color: var(--white);
   padding: 2rem;
}


.courses .box-container .box .thumb{
   position: relative;
}


.courses .box-container .box .thumb img{
   width: 100%;
   height: 20rem;
   object-fit: cover;
   border-radius: .5rem;
}

.courses .box-container .box .title{
   font-size: 2rem;
   padding-bottom: .5rem;
   padding-top: 1rem;
}

.Navigation-Bar ul{
   font-size: 7px;
}
.View{
  display: inline-block;
  padding: 1rem 2rem;
  background-color: var(--main-color);
  color: var(--white);
  font-size: 1.5rem;
  border-radius: 0.5rem;
  border: none;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
}

.View:hover {
  background-color: var(--red);
}

*{

}

z-index: 1000;
/* padding-bottom: 9.5rem; */
.about-us {
   padding:2rem;
   margin: 0 auto;
   max-width: 1200px;
   }
   .about-us p {
      font-size: 24px;
      line-height: 1.5;
   }

@media (max-width: 768px) {
  .box {
   flex-direction: column;
    width: 100%;
    max-height: none;
    height: auto;
    border-radius: 0;
    box-shadow: none;
  }
}


@media (max-width:991px){

   html{
      font-size: 55%;
   }

}
.about-us {
   padding:2rem;
   margin: 0 auto;
   max-width: 1200px;
   }
   .about-us p {
      font-size: 24px;
      line-height: 1.5;
   }

   @media (max-width: 875px){
      .CoursesContainer{
   margin-left: 0%;
}
   }
   .footer{
   position: sticky;

}
.Navigation-Bar{
   position:sticky;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
  font-size: 20px;
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
   </style>

</head>
<body>
<?php include("../Includes/Side-Bar.php") ?>

<section class="CoursesContainer">
   <section class="CourseContainer2">
      <section class="about-us">
         <div class="description">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur tellus ac lorem rutrum, id ullamcorper lacus bibendum. Nam imperdiet sodales luctus. Aenean ac nunc sem. Fusce et sapien auctor, molestie velit eu, commodo est. Nunc accumsan justo et sem consectetur, eu pharetra risus dictum. In nec semper eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
         </div>
      </section>
      <section class="courses">

         <h1 class="heading">My courses</h1>

         <div class="box-container">

            <div class="box">
               <div class="thumb">
                  <img src="https://images.pexels.com/photos/270360/pexels-photo-270360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                  <!-- <span>10 videos</span> -->
               </div>
               <h3 class="title">Web Tutorials</h3>
               <a href="playlist.php" class="View Courses">View Courses</a>
            </div>

            <div class="box">
               <div class="thumb">
                  <img src="https://images.pexels.com/photos/6238297/pexels-photo-6238297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                  <!-- <span>10 videos</span> -->
               </div>
               <h3 class="title">Math Tutorials</h3>
               <a href="playlistmath.php" class="View Courses">View Courses</a>
            </div>

            <div class="box">
               <div class="thumb">
                  <img src="https://images.pexels.com/photos/256417/pexels-photo-256417.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                  <!-- <span>10 videos</span> -->
               </div>
               <h3 class="title">Enlglish Tutorials</h3>
               <a href="playlistenglish.php" class="View Courses">View Courses</a>
            </div>

            <div class="box">
               <div class="thumb">
                  <img src="https://images.pexels.com/photos/2529187/pexels-photo-2529187.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                  <!-- <span>10 videos</span> -->
               </div>
               <h3 class="title">Skateboarding Tutorials</h3>
               <a href="playlistskate.php" class="View">View Courses</a>
            </div>

         </div>

      </section>
  </section>
</section>
<?php
// Check if transaction data is present in the URL
if (isset($_GET['total_cost']) && isset($_GET['courses'])) {
  // Check if modalShown variable is set in a session
    // Show the modal
    echo '
    <!-- Display modal -->
    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h3>Your order has been completed!</h3>
        <p>Your order total was $' . $_GET['total_cost'] . '.</p>
        <h3> Your purchased Items are below: </h3>
          <ul>
             <li>' . $_GET['courses'] . '</li>
          </ul>
      </div>
    </div>
    ';
  
}
?>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Show the modal
modal.style.display = "block";

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<!-- PHP Includes Footer -->
<?php include("../Includes/Footer.php"); ?>
<!-- PHP Includes Footer -->  
</body>
</html>