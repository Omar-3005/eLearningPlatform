<!-- PHP Includes Footer -->
<?php include("../Includes/Header.php"); ?>
<?php include("../account_settings/Profile.php"); ?>
<?php include("../account_settings/transactions.php"); ?>
<!-- PHP Includes Footer -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>video playlist</title>

   <!-- font awesome cdn link  -->

   <style>
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
   font-size: 62.5%;
   overflow-x: hidden;
}


body{
   background-color: var(--light-bg);
}

section{
   padding:2rem;
   margin: 0 auto;
   max-width: 1200px;
}

.heading{
   font-size: 2.5rem;
   color:var(--black);
   margin-bottom: 2.5rem;
   border-bottom: var(--border);
   padding-bottom: 1.5rem;
   text-transform: capitalize;
}

.playlist-videos{
   width: 50%;
   margin-left: 30%;
}

.playlist-videos .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:1.5rem;
   justify-content: center;
   align-items: flex-start;
}

.playlist-videos .box-container .box{
   background-color: var(--white);
   border-radius: .5rem;
   padding: 2rem;
   position: relative;
}

.playlist-videos .box-container .box i{
   position: absolute;
   top: 2rem; left: 2rem; right: 2rem;
   height: 20rem;
   border-radius: .5rem;
   background-color: rgba(0,0,0,.3);
   display: flex;
   align-items: center;
   justify-content: center;
   font-size: 5rem;
   color: #fff;
   display: none;
}

.playlist-videos .box-container .box:hover i{
   display: flex;
}

.playlist-videos .box-container .box img{
   width: 100%;
   height: 20rem;
   object-fit: cover;
   border-radius: .5rem;
}

.playlist-videos .box-container .box h3{
   margin-top: 1.5rem;
   font-size: 1.8rem;
   color: var(--black);
}

.playlist-videos .box-container .box:hover h3{
   color: var(--main-color);
}

.watch-video .video-container{
   background-color: var(--white);
   border-radius: .5rem;
   padding: 2rem;
}

   </style>

</head>
<body>

<!-- PHP Includes Footer -->
<?php include("../Includes/Side-Bar.php") ?>
<!-- PHP Includes Footer -->


<section class="playlist-videos">
   <h1 class="heading">Your Math videos</h1>

   <div class="box-container">

      <?php

      // Get user ID from session
      $user_id = $_SESSION['email'];

            // Get database connection
            require_once("../Connection/DB.php");

  // Get user ID from database based on email
  $email = $_SESSION['email'];
  $sql = "SELECT id FROM users WHERE email = '$email'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_id = $row['id'];
  } 
  
      // Get user's active courses with course_topic = 'web' from enrollment table
$sql = "SELECT
coursedetails.course_id,
coursedetails.course_title,
coursedetails.course_image
FROM enrollment
INNER JOIN coursedetails ON enrollment.course_id = coursedetails.course_id
WHERE enrollment.id = $user_id AND coursedetails.course_topic = 'math'";
$result = $conn->query($sql);

// Display the courses
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $course_id = $row["course_id"];
    $course_title = $row["course_title"];
    $course_image = $row["course_image"];
    
    echo '<div class="box-container">';
    echo '<a class="box" href="watch_video.php?course_id=' . $course_id . '">';
    echo '<img src="' . $course_image . '" alt="">';
    echo '<h3>' . $course_title . '</h3>';
    echo '</a>';
    echo '</div>';
    }
    } else {
    echo "No active courses found.";
    }

// Close database connection
$conn->close();
?>

   </div>
</section>
</body>
</html>