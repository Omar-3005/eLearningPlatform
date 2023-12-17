<?php
require_once("../Connection/DB.php");

$searchTerm = isset($_POST['searchTerm']) ? $_POST['searchTerm'] : '';
$selectedCategory = isset($_POST['selectedCategory']) ? $_POST['selectedCategory'] : '';


$sql = "SELECT course_topic, course_id, course_title, course_description_path, course_image, course_description, price FROM coursedetails";
if (!empty($searchTerm)) {
  $sql .= " WHERE LOWER(course_title) LIKE '%$searchTerm%' OR LOWER(course_description) LIKE '%$searchTerm%'";
}
if (!empty($selectedCategory)) {
  $sql .= " WHERE course_topic = '$selectedCategory'";
}
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <li class="alpha"><a href="<?php echo $row["course_description_path"]; ?>"><img src="<?php echo $row["course_image"]; ?>" width="60%" style="border:2px solid rgb(41, 39, 39) ;"/></a></li>
      <li class="alpha">
          <a href="<?php echo $row["course_description_path"]; ?>">
              <h4><?php echo $row["course_title"]; ?></h4>
          </a>
          <p><?php echo $row["course_description"]; ?></p>
      </li>
      <li class="beta">
        <b>Price:</b><?php echo "$" . $row["price"]; ?>
        <a href="add_to_cart.php?id=<?php echo $row['course_id']; ?>"  onclick="addToCart(0)"><button>Buy Now</button></a>
      </li> 
      <hr class="one">
      
    <?php
  }
} else {
  ?>
    <p>No Results Found</p>
  <?php
}
?>
