
<style>
.Navigation-Bar{
   margin-left: 200px
}
@media (max-width: 877px) {
        .Navigation-Bar {
          margin-left: 0px;
        }

    }
  .side-bar {
   position: fixed;
   top: 0; left: 0;
   width: 20rem;
   background-color: var(--white);
   height: 100%;
   border-right: var(--border);
  }

  .side-bar .profile {
    text-align: center;
    margin-bottom: 2rem;
  }

  .side-bar .profile .image {
    height: 10rem;
    width: 10rem;
    border-radius: 50%;
    object-fit: contain;
    margin-bottom: 1rem;
  }

  .side-bar .profile .name {
    font-size: 2rem;
    color: black;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .side-bar .navbar {
    display: flex;
    flex-direction: column;
    padding: 0;
    margin: 0;
    list-style: none;
  }

  .side-bar .navbar li {
    margin-bottom: 0.5rem;
  }

  .side-bar .navbar a {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 1rem;
    font-size: 1.5rem;
    color: var(--main-color);
    text-decoration: none;
    transition: background-color 0.2s linear;
  }

  .side-bar .navbar a:hover {
    background-color: var(--light-bg);
  }

  .side-bar .navbar a i {
    margin-right: 1.5rem;
  }

  .hamburger {
    display: none;
  }
@media only screen and (max-width: 875px) {
  .side-bar {
    width: 100%; /* Set the width to 100% for small screens */
    height: auto;
    position: relative;
    padding-top: 0;
  }
  .side-bar{
   margin-top:5px;
  }
  
  .navbar {
    display: none; /* Hide the navigation links */
  }
  
  /* Show the navigation links when the hamburger menu is clicked */
  .navbar.show {
    display: block;
  }
  
  /* Style the hamburger menu */
  .hamburger {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    padding: 12px;
    cursor: pointer;
  }
  
  /* Style the icon in the hamburger menu */
  .hamburger i {
    color: #333;
    font-size: 24px;
  }
}

</style>

<body>
<div class="side-bar">
   <div class="profile">
      <img src="../Images/p1.jpg" class="image" alt="">
      <h3 class="name"><?php echo $fullname ?></h3>
      <!-- <p class="role">student</p> -->
   </div>

   <nav class="navbar">
      <a href="../account_profile/Courses.php"><i class="fas fa-home"></i><span>My Courses</span></a>
      <!-- <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Course Catelogue</span></a> -->
      <a href="../courses_page/courses_page.php"><i class="fas fa-headset"></i><span>Course Catalogue</span></a>
      <a href="../account_settings/account_settings.php"><i class="fas fa-chalkboard-user"></i><span>Account Settings</span></a>
      <!-- <a href="about.html"><i class="fas fa-question"></i><span>About</span></a> -->
   </nav>
   <div class="hamburger">
        <i class="fas fa-bars"></i>
      </div>

</div>
</body>
<script>
  const hamburger = document.querySelector('.hamburger');
  const navbar = document.querySelector('.navbar');

  hamburger.addEventListener('click', function() {
    navbar.classList.toggle('show');
  });
</script>

