    <!-- PHP Includes Header-->
    <?php include("../Includes/Header.php")?>
    <!-- PHP Includes Header -->
<!DOCTYPE html>
<html>
<head>
    <style>
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
/* .................................................................................... */

/* Section 1 "Your education awaits" */
      img {
        display: block;
        width: 100%;
        height: 500px;
        display: flex;
      }
      h1{
        margin: 0;
        padding: 1em 0;
        color: white;
        font-size: 4em;
      }
      .paragraph1 {
        margin: 0;
        padding: 1em 0;
        color: white;
        font-size: 4em;
      }
      .btn {
        background-color: #BC3838;
        color: white;
        text-decoration: none;
        padding: 1em 2em;
        border: 1px solid black;
        padding: .5vw 2vw;
        opacity: .9;
        margin: 50px;
      }
      /* When hovering over the button background changes to white and letters to black. Used the :hover pseudo class */
      .btn:hover{
        background-color: white;
        color: BLACK;
      }
      .First-Container {
        min-height: 600px;
        color: black;
        text-align: center;
      }
      .First-Container1 .First-Container{
        /* position: absolute; */
        background: black url('https://images.pexels.com/photos/2041540/pexels-photo-2041540.jpeg?cs=srgb&dl=pexels-rafael-cosquiere-2041540.jpg&fm=jpg&_gl=1*vfg6wr*_ga*NDgxOTM1MTE4LjE2NzUwMjEyOTg.*_ga_8JE65Q40S6*MTY3NTA4MTM1Ni40LjEuMTY3NTA4MTM4NC4wLjAuMA..');
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 450px;
        z-index: -1;
        opacity: .9;
      }
      .paragraph1{
        color: white;
        font-size: 20px
      }
      .FirstContainer, h1{
        padding-top: 200px;
        padding-bottom: 0;
      }
/* End Section 1 "Your education awaits" */

/* .................................................................................... */

/* Section 2 "Who are we?" */

.About-Us {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 30px;
  padding: 6rem;
  border: 1px black;
}

.About-Us img {
  width: 50%;
  max-width: 50%;
  height: auto;
}


.About-Us .about {
  flex: 1;
}

.header2 {
  font-size: 36px;
  margin-top: 1em;
  text-align: center;
  position: relative;
}

.header2:before {
  content: "";
  height: 10px;
  width: 80%;
  margin-left: 10%;
  background-color: #BC3838;
  position: absolute;
  top: -20px;
  left: 0;
}

.About-Us .paragraph2 {
        margin-top: 3em;
        margin-bottom: 1em;
        font-size: 25px;
}

.paragraph2 {
  margin-top: 1em;
  font-size: 25px;
  /* text-align: left; */
}

@media only screen and (max-width: 1149px) {
        .About-Us {
          flex-direction: column;
        }
        .About-Us img {
          width: 80%;
        }
        .About-Us .header2 {
          width: 100%;
        }
        .About-Us .paragraph2 {
          width: 100%;
        }
      }
/* End Section 2 "Who are we?" */

/* .................................................................................... */

/* Start Section 3 "Our services" */

      *{
        margin: 0;
        padding: 0;
        font-family: "montserrat", sans-serif;
      }
      .services{
        background: #f1f1f1;
        text-align: center;
        background: url(https://images.pexels.com/photos/5239564/pexels-photo-5239564.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)

      }
      .services h6{
        display: inline-block;
        text-transform: uppercase;
        border-bottom: 4px solid maroon;
        font-size: 20px;
        padding-bottom: 0px;
        margin-top: 10px;
      }
      .Services-Container{
        max-width: 1200px;
        margin: auto;
        overflow: hidden;
        padding: 20px;
        /* display: flex;
        flex-direction: row; */
      }
      .service, .service1, .service2{
        display: inline-block;
        /* width calc(100% /3); */
        margin: 0 -2px;
        padding: 20px;
        box-sizing: border-box;
        cursor: pointer;
        transition: 0.4s;
        color: black;
        font-weight: 700px;
        background-color: white;
        margin: 10px;
      }

      
/* End Section 3 "Our services" */


/* Start Section 4 "Testimonials" */
      *{
        margin: 0;
        padding: 0;
        font-family: "montserrat", sans-serif;
      }
      .testimonials{
        padding: 40px 0;
        background: #F1f1f1;
        color: #a32323;
        text-align: center;
      }
      .inner {
        max-width: 1200px;
        margin: auto;
        overflow: hidden;
        padding: 0 20px;
      }
      .border{
        width: 160px;
        height: 5px;
        background: black;
        margin: 26px auto;
      }
      .row{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }
      .col{
        flex: 33.33%;
        max-width: 33.33%;
        box-sizing: border-box;
        padding: 15px;
      }
      .student-testimonial{
        background: #fff;
        padding: 30px;
      }
      .Profile-image{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-left: 35%;
      }
      .name{
        font-size: 20px;
        text-transform: uppercase;
        margin: 20px 0;
      }
      .stars{
        color: maroon;
        margin-bottom: 20px;
      }
      h5{
        font-size: 1.5rem;
      }
      @media (max-width: 768px) {
  .col {
    flex: 100%;
    max-width: 100%;
  }
  .Profile-image{

        margin-left: 42%;
      }
}
  </style>
</head>
<body>
    <div>
       <section class="First-Container1">
        <header class="First-Container">
            <h1>Your Education Awaits!</h1>
            <h3 class="paragraph1">Feed your mind with knowledge and expertise. Learn from trusted experts to elevate your education to the next level.</h3>
            <a href="../courses_page/courses_page.php" class="btn">Explore</a>
        </header>
       </section>       
        <!-- This will be for the second top section of the website below the nav bar -->
        <section class="About-Us">
            <img src="../Images/pexels-olia-danilevich-5088008.jpg">
            <div class="about">
                <h2 class="header2">Who are we?</h2>
                <p class="paragraph2">Our goal is to provide accessible and high-quality education to individuals from all walks of life. We believe that everyone should have the opportunity to learn and grow, regardless of their location, background, or circumstances.</p>
            </div>
        </section>
        <section class="services">
          <h6>Our Services</h6>
          <div class="Services-Container">
            <div class="service">
              <h7>Math</h7>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, accusamus, labore aliquam eum vero mollitia similique voluptas nulla minus temporibus maiores. Praesentium totam, amet ducimus quos esse rerum saepe quidem incidunt accusamus provident! Nemo nobis iusto iste, eveniet provident earum.</p>
            </div>
            <div class="service1">
              <h7>English</h7>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, accusamus, labore aliquam eum vero mollitia similique voluptas nulla minus temporibus maiores. Praesentium totam, amet ducimus quos esse rerum saepe quidem incidunt accusamus provident! Nemo nobis iusto iste, eveniet provident earum.</p>
            </div>
            <div class="service2">
              <h7>Coding</h7>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, accusamus, labore aliquam eum vero mollitia similique voluptas nulla minus temporibus maiores. Praesentium totam, amet ducimus quos esse rerum saepe quidem incidunt accusamus provident! Nemo nobis iusto iste, eveniet provident earum.</p>
            </div>
          </div>
        </section>
        <section class="testimonials">
          <div class="inner">
            <h5>Testimonials</h5>
            <div class="border"></div>
            <div class="row">
              <div class="col">
                <div class="student-testimonial">
                  <img class= "Profile-image" src="../Images/p1.jpg" alt="">
                  <div class="name">Tom Cruise</div>
                    <p> 
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore reiciendis vel a ipsam cum unde nihil commodi perferendis est qui!
                    </p>
                  </div>
              </div>
              <div class="col">
                <div class="student-testimonial">
                  <img class= "Profile-image" src="../Images/p1.jpg" alt="">
                  <div class="name">Will Smith</div>
                    <p> 
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore reiciendis vel a ipsam cum unde nihil commodi perferendis est qui!
                    </p>
                  </div>
              </div>
              <div class="col">
                <div class="student-testimonial">
                  <img class= "Profile-image" src="../Images/p1.jpg" alt="">
                  <div class="name">Hillary Clinton</div>
                    <p> 
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore reiciendis vel a ipsam cum unde nihil commodi perferendis est qui!
                    </p>
                  </div>
              </div>
            </div>
          </div>
        </section>
      <!-- PHP Includes Footer -->
      <?php include("../Includes/Footer.php") ?>
      <!-- PHP Includes Footer -->
    </div>
</body>
</html>

