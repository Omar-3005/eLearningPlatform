<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
  <script src="https://kit.fontawesome.com/dbb41ba882.js" crossorigin="anonymous"></script>
	<style>
  .nav {
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
        background: url(https://images.pexels.com/photos/5088017/pexels-photo-5088017.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);

      }

.contact-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  max-width: 800px;
  margin: 0 auto;
  padding: 50px 0;
}

.contact-box {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: calc(33.33% - 20px);
  height: 200px;
  background-color: #fff;
  border-radius: 1px;
  box-shadow: 0px 5px 10px rgba(135, 73, 73, 0.2);
  margin: 10px;
  transition: transform 0.3s ease-in-out;
  cursor: pointer
}

.contact-box:hover {
  transform: translateY(-5px);
}

.contact-icon {
  font-size: 3rem;
  margin-bottom: 20px;
  color: #3b3b3b;
}

.contact-title {
  font-size: 1.5rem;
  font-weight: bold;
  text-align: center;
  margin-bottom: 20px;
  color: black;
}

.contact-info {
  font-size: 1.2rem;
  text-align: center;
  color: #666;
  margin: 0;
}

@media screen and (max-width: 768px) {
  .contact-box {
    width: calc(50% - 20px);
    height: 250px;
  }
}

@media screen and (max-width: 480px) {
  .contact-box {
    width: calc(100% - 20px);
    height: 200px;
  }
}

.contact-form {
  border: none;
  padding: 10px;
  max-width: 1500px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  background: white;
}

.contact-form-row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  margin-bottom: 20px;
}

.contact-form-column {
  flex-basis: calc(50% - 10px);
  margin-right: 10px;
}

.contact-form-column:last-child {
  margin-right: 0;
}

.contact-form label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: black;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form input[type="tel"],
.contact-form textarea,
.contact-form select {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: none;
  border-bottom: 2px solid maroon;
  box-sizing: border-box;
  font-size: 16px;
  color: black;
  font-family: Arial, Helvetica, sans-serif;
}

.contact-form select {
  background-color: #fff;
  color: black;
}

.contact-form input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  padding: 10px;
  font-size: 16px;
  padding-right: 80%;
  align-items: center;
}

.contact-form input[type="submit"]:hover {
  background-color: #45a049;
}
.contact-form {
  margin: auto;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 5px;
}

    .back{
      margin-bottom: 10%;
      
    }

	</style>
</head>
<body>
  <div class="nav">
          <!-- PHP Includes Header-->
          <?php include("../Includes/Header.php") ?>
          <!-- PHP Includes Header -->
    </div>
<div class="back">
          <div class="contact-container">
            <div class="contact-box">
              <i class="fas fa-map-marker-alt contact-icon"></i>
              <h2 class="contact-title">Our Main Office</h2>
              <p class="contact-info">75 Laurier Ave. E, Ottawa, ON K1N 6N5</p>
            </div>
            
            <div class="contact-box">
              <i class="fas fa-phone-alt contact-icon"></i>
              <h2 class="contact-title">Phone Number</h2>
              <p class="contact-info">(613) 562-5700</p>
            </div>
            
            <div class="contact-box">
              <i class="fas fa-envelope contact-icon"></i>
              <h2 class="contact-title">Email</h2>
              <a class="contact-info" href="mailto:info@example.com?subject=Ask%20a%20Question">info@example.com</a>
            </div>
          </div>
          <form class="contact-form">
            <div class="contact-form-row">
              <div class="contact-form-column">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="full-name" placeholder="Your Full Name" required>
              </div>
              <div class="contact-form-column">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email Address" required>
              </div>
            </div>
            <div class="contact-form-row">
              <div class="contact-form-column">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Your Phone Number">
              </div>
            </div>
            <div class="contact-form-row">
              <div class="contact-form-column">
              <label for="inquiry-type">Inquiry Type:</label>
              <select id="inquiry-type" name="inquiry-type">
                <option value="general"></option>
                <option value="general">General</option>
                <option value="support">Support</option>
                <option value="billing">Billing</option>
              </select>
            </div>
            </div>
            <div class="contact-form-row">
              <div class="contact-form-column">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Please describe your request or inquiry" required></textarea>
              </div>
            </div>
            <div class="contact-form-row">
              <div class="contact-form-column">
                <input type="submit" value="Submit">
              </div>
            </div>
          </form>
</div>
      <!-- PHP Includes Footer -->
      <?php include("../Includes/Footer.php") ?>
      <!-- PHP Includes Footer -->
</body>
</html>

