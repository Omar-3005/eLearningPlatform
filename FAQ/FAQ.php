<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ</title>
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

main{
  width: 40%;
  margin: 0 auto;
  /* text-align: center; */
}
.container {
  max-width: 800px; /* adjust the value as needed */
  margin: 0 auto;
  text-align: left;
}

h1 {
  font-size: 36px;
  margin-bottom: 40px;
  text-align: center;
  background: #c97793;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transition: all 0.3s ease-in-out;
}

h1:hover {
  transform: scale(1.1);
  color: #c97793;
}
.title-container {
  width: 40%;
  margin: 0 auto;
}

.title {
  text-transform: uppercase;
  border-bottom: 4px solid maroon;
  padding-bottom: 0px;
}
p {
  margin-bottom: 20px;
}

/* FAQ*/
details {
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
}

summary {
  padding: 10px;
  font-weight: bold;
  background-color: #f8f8f8;
  cursor: pointer;
}

summary:hover {
  background-color: #c97793;;
}
details{
  padding: 0px;
  border: none;
  background: none;

  transition: all 0.3s ease 0s;
}

details summary:hover {
    background: rgba(233, 30, 99, 0.1);
    padding-left: 10px;
}
details summary {
  width: 100%;
  padding: 0px;
  padding-left: 30px;
  padding-right: 30px;
  font-weight: 400;
  font-size: 15px;
  letter-spacing: 1px;
  transition: all 0.3s ease 0s;
  cursor: pointer;
  padding-top: 20px;
  padding-bottom: 20px;
}

details p {
  padding: 10px;
}
details:last-of-type {
  margin-bottom: 40px;
}
@media only screen and (max-width: 695px) {
  main{
  width: 100%;
  margin: 0 auto;
}

      }
/* FAQ END */

  </style>
</head>
<body>
  <div>
    <!-- PHP Includes Header-->
    <?php include("../Includes/Header.php") ?>
    <!-- PHP Includes Header -->
    <div class="title-container">
      <h1 class="title">UO Education Card FAQ</h1>
    </div>

      <main>
        <section class="container">
          <details>
            <summary>What is this website about?</summary>
            <p>This website provides users with tools and courses to help them develop the neccessary skills to become a programmer</p>
          </details>

          <details>
            <summary>How does the subscription work?</summary>
            <p>Simply select a course and confrim your enrollment. You will either be prompted to add a new method of payment or select the billing details already on your account.</p>
          </details>

          <details>
            <summary>What coding languages can I learn through courses that are offered on the website?</summary>
            <p>We offer courses on HTML, CSS, Java, SQL and Python.</p>
          </details>

          <details>
            <summary>Can users enrol in more than one course at the same time?</summary>
            <p>Yes, users may enroll in as many courses at once as they please.</p>
          </details>

          <details>
            <summary>Is there a deadline or a time limit by which users have to complete a course?</summary>
            <p>No, once enrolled, users can take all the time they need to complete a course. All the relevant material for any given course will available once users succe</p>
          </details>

          <details>
            <summary>How much do the courses cost?</summary>
            <p>Course registration fees are variable and depend on the level, course subject, and legnth.</p>
          </details>
        </section>
      </main>

      <!-- PHP Includes Footer -->
      <?php include("../Includes/Footer.php") ?>
      <!-- PHP Includes Footer -->
  </div>
</body>
</html>
