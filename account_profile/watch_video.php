<!-- PHP Includes Header-->
<?php 
include("../Includes/Header.php");
include("../account_settings/Profile.php"); 

// Retrieve the course_id passed from the previous page
if(isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];
    
    // Retrieve course information from the database based on course_id
    $sql = "SELECT course_title, course_description, course_video_source FROM coursedetails WHERE course_id = '$course_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Update iframe src, title, and description based on retrieved course information
    $video_src = $row['course_video_source'];
    $video_title = $row['course_title'];
    $video_description = $row['course_description'];
} else {
    // If course_id is not set, redirect back to the previous page
    header("Location: playlistenglish.php");
    exit();
}

?>
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
body {
margin: 0;
font-family: Arial, Helvetica, sans-serif;
font-size: 1.1em;
line-height: 1.5;
background-color: #eee;

   }
/* "Retrieved from stackoverflow to fix a spill issue with our page: " */
html, body{
padding: 0px;
overflow-x: hidden;
font-size: 62.5%;

}
/* Reset default margin and font */
/* * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
} */

/* Set base font and line-height */
/* body {
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  line-height: 1.5;
  background-color: #eee;
} */

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


.watch-video{
   margin-left: 25%;
   margin-bottom:250px;
   margin-top: 100px;
   margin-right: 15%;
}
.video iframe {
  width:100%;
  height:500px;
 
}
.watch-video .video-container{
   background-color: var(--white);
   border-radius: .5rem;
   padding: 2rem;
}


.watch-video .video-container .title{
   font-size: 2rem;
   color: var(--black);
}

.watch-video .video-container .info{
   display: flex;
   margin-top: 1.5rem;
   margin-bottom: 2rem;
   border-bottom: var(--border);
   padding-bottom: 1.5rem;
   gap: 2.5rem;
   align-items: center;
}

.watch-video .video-container .info p{
   font-size: 1.6rem;
}

.watch-video .video-container .info p span{
   color: var(--light-color);
}

.watch-video .video-container .info i{
   margin-right: 1rem;
   color: var(--main-color);
}

.watch-video .video-container .tutor{
   display: flex;
   align-items: center;
   gap: 2rem;
   margin-bottom: 1rem;
}

.watch-video .video-container .tutor img{
   border-radius: 50%;
   height: 5rem;
   width: 5rem;
   object-fit: cover;
}

.watch-video .video-container .tutor h3{
   font-size: 2rem;
   color: var(--black);
   margin-bottom: .2rem;
}

.watch-video .video-container .tutor span{
   font-size: 1.5rem;
   color: var(--light-color);
}

.watch-video .video-container .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap: 1.5rem;
}


.watch-video .video-container .description{
   line-height: 1.5;
   font-size: 1.7rem;
   color: var(--light-color);
   margin-top: 2rem;
}


*{

}
footer{
   position:sticky;
}
z-index: 1000;
/* padding-bottom: 9.5rem; */


@media (max-width:991px){

   html{
      font-size: 55%;
   }

}
@media (max-width: 866px) {
  .watch-video {
    margin-left: 0;
    margin-right: 0;
    width: 100%;
    margin-top:40px;
  }
}
   </style>

</head>
<body>
<!-- PHP Includes Footer -->
<?php include("../Includes/Side-Bar.php") ?>
<!-- PHP Includes Footer -->

<section class="watch-video">
   <div class="video-container">
      <div class="video">
         <p class="aspect-ratio"><iframe class="test" src="<?php echo $video_src; ?>" width="560" height="315" frameborder="0" allowfullscreen="" ></iframe></p>
      </div>
      <h3 class="title"><?php echo $video_title; ?></h3>
      <div class="info">
         <p><span><?php echo date('d-m-Y'); ?></span></p>
      </div>
      <div class="tutor">
         <img src="../Images/p2.jpg" alt="">
         <div>
            <h3>Placeholder</h3>
            <span>developer</span>
         </div>
      </div>

      <h3>Description</h3>
      <p class="description">
         <?php echo $video_description; ?>
      </p>
   </div>
</section>

<!-- PHP Includes Footer -->
<?php include("../Includes/Footer.php") ?>
<!-- PHP Includes Footer -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>