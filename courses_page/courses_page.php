<html>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
    <title>Course Homepage</title>
    <link rel="stylesheet" href="project_style.css">
    
</head>

<body>
          <!-- PHP Includes Header-->
          <?php include("../Includes/Header.php") ?>
          <!-- PHP Includes Header -->
   <br>
    <div class="buttons">
        <input type="radio" id="courseweb" name="buttons" checked="checked">
        <label for="courseweb">Web</label>
        <div class="selected">
            <br>
            <hr>
            
            <div class="picture">
               <h3>Learn everything there is to creating a website!</h3>
                <div class="column"
                <p><a href="../course_description/course_description0.php"><img src="../Images/HTML.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Introduction to HTML</h4>
                </div>

                <div class="column"
                <p><a href="../course_description/course_description1.php"><img src="../Images/CSS.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Introduction to Web-design</h4>
                </div>

                <div class="column"
                <p><a href="../course_description/course_description2.php"><img src="../Images/Java.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>JavaScript</h4>
                </div>

                <div class="column"
                <p><a href="../course_description/course_description3.php"><img src="../Images/Sql.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>NoSql</h4>
                </div>
            </div>

        </div>

        <input type="radio" id="math" name="buttons">
        <label for="math">Math</label>
        <div class="selected">
            <br>
            <hr>
            <h3>Your Math problems end here!</h3>
            <div class="picture">
                <div class="column"
                <p><a href="../course_description/course_description4.php"><img src="../Images/calc1.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Calculus 1 - Introduction to Limits</h4>
                </div>

                <div class="column"
                <p><a href="../course_description/course_description5.php"><img src="../Images/calc2.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Calculus 2 - Integration</h4>
                </div>

                <div class="column"
                <p><a href="../course_description/course_description6.php"><img src="../Images/Lin.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Linear Algebra</h4>
                </div>

                <div class="column"
                <p><a href="../course_description/course_description7.php"><img src="../Images/Geo.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Geometry</h4>
                </div>
            </div>
        </div>

        <input type="radio" id="english" name="buttons">
        <label for="english">English</label>
        <div class="selected">
            <br>
            <hr>
            <h3>English courses for beginners</h3>
            <div class="picture">
                <div class="column"
                <p><a href="../course_description/course_description8.php"><img src="../Images/Gram.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Introduction to Grammar</h4>
                </div>

                <div class="column"
                <p><a href="../course_description/course_description9.php"><img src="../Images/Vocab.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>English Vocabulary</h4>
                </div>

                <div class="column"
                <p><a href="../course_description/course_description10.php"><img src="../Images/writing.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Essay Writing</h4>
                </div>

                <div class="column"
                <p><a href="../course_description/course_description11.php"><img src="../Images/Poetry.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Poetry</h4>
                </div>
            </div>
        </div>

        <input type="radio" id="skateboarding" name="buttons">
        <label for="skateboarding">Skateboarding</label>
        <div class="selected">
            <br>
            <hr>
            <h3>Learn how to skateboard!</h3>
            <div class="picture">
                <div class="column"
                <p><a href="../course_description/course_description12.php"><img src="../Images/Beginnersk.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Skateboarding for beginners</h4>
                </div>

                <div class="column"
                <p><a href="../course_description/course_description13.php"><img src="../Images/Intermedskate.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Intermediate level skateboarding</h4>
                </div>

                <div class="column"
                <p><a href="../course_description/course_description14.php"><img src="../Images/Advanced.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Advanced level skateboarding</h4>
                </div>

                <div class="column"
                <p><a href="../course_description/course_description15.php"><img src="../Images/Skateboard design.jpg" width="100%" style="border:2px solid rgb(41, 39, 39) ;"/></a></p>
                <h4>Skateboard design and maintenance</h4>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<br>
<body>
    <h2>All Courses Available:</h2>
    <div>
    <label for="search-box">Search:</label>
    <input type="text" id="search-box" placeholder="Search...">
    <label for="category-dropdown">Category:</label>
    <select id="category-dropdown">
        <option value="">All Categories</option>
        <option value="Web">Web</option>
        <option value="Math">Math</option>
        <option value="English">English</option>
        <option value="Skateboarding">Skateboarding</option>
    </select>
</div>
    <hr class="one">
    <ul class="all_courses" id="course-list">
    <?php include("../courses_page/course_details.php") ?>
    </ul>

<!-- PHP Includes Footer -->
<?php include("../Includes/Footer.php") ?>
<!-- PHP Includes Footer --> 
</body>
<script>
const searchBox = document.getElementById('search-box');
const categoryDropdown = document.getElementById('category-dropdown');
const courseList = document.getElementById('course-list');

function searchCourses() {
  const searchTerm = searchBox.value.toLowerCase();
  const selectedCategory = categoryDropdown.value.toLowerCase();

  // Make AJAX request to server with search parameters
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      courseList.innerHTML = xhr.responseText;
    }
  };
  xhr.open('POST', 'course_details.php');
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send(`searchTerm=${searchTerm}&selectedCategory=${selectedCategory || ''}`);

}

searchBox.addEventListener('input', searchCourses);
categoryDropdown.addEventListener('change', searchCourses);
</script>
</html>
