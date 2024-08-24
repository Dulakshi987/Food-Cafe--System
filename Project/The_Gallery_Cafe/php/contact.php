<?php
session_start();
include 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $tel = $_POST['contact'];
  $post = $_POST['message'];


  $stmt = $conn->prepare("INSERT INTO contacts (name, email, tel, post) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $email, $tel, $post);


  if ($stmt->execute()) {
    echo "Message added successfully.";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Gallery Cafe</title>
  <link rel="icon" type="image/x-icon" href="/Project/The_Gallery_Cafe/images/favicon.ico" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/Project/The_Gallery_Cafe/css/style.css" />
</head>


<body>
  <!-- public Navigation section-->

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h3 class="logo">
        <a href="#"> The Gallery Cafe</a>
      </h3>
      <br /><br />
      <nav class="nav-menu">
        <ul>
          <li class="nav_item">
            <a class="nav_link" href="/Project/The_Gallery_Cafe/assests/index.html">Home</a>
          </li>
          <li>
            <a href="/Project/The_Gallery_Cafe/assests/about.html">About</a>
          </li>
          <li>
            <a href="/Project/The_Gallery_Cafe/php/view_meal.php">Menu</a>
          </li>
          <li>
            <a href="/Project/The_Gallery_Cafe/php/reservation.php">Reservation</a>
          </li>
          <li>
            <a href="/Project/The_Gallery_Cafe/php/order.php">order</a>
          </li>
          <li>
            <a href="/Project/The_Gallery_Cafe/php/booking.php">Booking</a>
          </li>
          <li>
            <a href="/Project/The_Gallery_Cafe/php/contact.php">Contact</a>
          </li>
          <li>
            <a href="/Project/The_Gallery_Cafe/php/customer_dashboard.php">Login</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>


  <br /><br /></br><br>

  <!--contact section-->

  <section id="contact">
    <div class="container">
      <div class="section-header">
        <h3>Contact Us</h3>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="contact-col-1">
            <div class="contact-detail">
              <div class="contact-hours">
                <h4>Opening Hours</h4>
                <p>Monday-Friday: 6am to 10pm</p>
                <p>Saturday: 7am to 12am</p>
                <p>Sunday: 6am to 12am</p>
              </div>

              <div class="contact-info">
                <h4>Location</h4>
                <p>795/A, Auklound place, Colombo, Sri Lanka</p>
                <p><a href="tel:+1-234-567-8900">+94 1134786542</a></p>
                <p>
                  <a href="mailto:info@example.com">thegallerycafe@gmail.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="contact-col-2">
            <div class="contact-form">
              <form>
                <div class="form-row">
                  <div class="form-group mx-sm-3 mb-2">

                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter name" name="name" required />
                  </div>

                  <div class="form-group mx-sm-3 mb-2">

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter email" name="email" required />
                  </div>

                  <div class="form-group mx-sm-3 mb-2">

                    <label for="message"><b>Messsage</b></label>
                    <input type="text" placeholder="Enter message" name="message" required />
                  </div>

                  <center>
                    <button type="submit" name="add">Send Message</button>
                  </center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="copyright">
            <p>
              &copy; Copyright <a href="">TheGalleryCafe.com</a>. <br />All
              Rights Reserved
            </p>

            <p>Assignment work</p>
          </div>
        </div>
        <div class="col-sm-6">
          <form class="form-inline">
            <label>send me feedback</label>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter Your Email" />
            </div>
            <button type="submit" class="btn">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>