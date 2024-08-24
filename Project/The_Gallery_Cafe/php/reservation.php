<?php
session_start();
if (isset($_SESSION["reservation"])) {
  header("Location: reservation.php");
  exit();
}


include 'db.php';




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $date = $_POST['date'];
  $time = $_POST['time_duration'];
  $party_type = $_POST['party_type'];
  $contact = $_POST['tel'];
  $party_size = $_POST['party_size'];


  $query = "INSERT INTO reservation (name, date, time, party_type, contact,party_size) VALUES ('$name', '$date', '$time', '$party_type' ,'$contact' ,'$party_size')";

  if (mysqli_query($conn, $query)) {
    echo "Reservation added successfully.";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
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
  <br><br><br><br><br>
  <!--Reservation section-->

  <section id="reservations">
    <div class="container">
      <div class="container">
        <h2 class="text-center">Add Reservation</h2>

        <form action="reservation.php" method="post">


          <input type="hidden" name="action" value="add">

          <div class="form-group mx-sm-3 mb-2">

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter  Name" name="name"><br /><br />
          </div>

          <div class="form-group mx-sm-3 mb-2">

            <label for="tel"><b>Contcat</b></label>
            <input type="text" placeholder="Enter  Contcat" name="tel"><br /><br />
          </div>

          <div class="form-group mx-sm-3 mb-2">

            <label for="time_duration"><b>Time Duration</b></label>
            <input type="time" placeholder="Enter Time duration" name="time_duration"><br /><br />
          </div>

          <div class="form-group mx-sm-3 mb-2">

            <label for="date"><b>Date</b></label>
            <input type="text" placeholder="Enter Date" name="date"><br /><br />
          </div>

          <div class="form-group mx-sm-3 mb-2">

            <label for="party_size"><b>Party size</b></label>
            <input type="text" placeholder="Enter Party size" name="party_size"><br /><br />
          </div>


          <div class=" form-group mx-sm-3 mb-2">

            <label for="party_type"><b>Party Type</b></label>
            <input type="text" placeholder="Enter Party type" name="party_type"><br /><br />
          </div>

          <button type="submit" name="add">Add reservation</button>

          <section>
            <table class="table table-boarded">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>contact</th>
                  <th>Time</th>
                  <th>Date</th>
                  <th>Pary_size</th>
                  <th>party_type</th>
                  <th>Delete table reservation</th>
                </tr>
              </thead>
              <tbody>
                <?php


                $query = "SELECT * FROM reservation";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {

                  echo '<h1>Manage Table reservation</h1>';

                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    if (isset($_GET['id']) && $row['id'] == $_GET['id']) {

                      echo '<form class="form-inline m-2" action="" method="POST">';
                      echo '<td> <input type="text" name="name" value="' . $row['name'] . '"></td>';
                      echo '<td> <input type="text" name="tel" value="' . $row['contact'] . '"></td>';
                      echo '<td> <input type="text" name="time_duration" value="' . $row['time'] . '"></td>';
                      echo '<td> <input type="text" name="date" value="' . $row['date'] . '"></td>';
                      echo '<td> <input type="text" name="party_size" value="' . $row['party_size'] . '"></td>';
                      echo '<td> <input type="text" name="party_type" value="' . $row['party_type'] . '"></td>';

                      echo '<td> <input type="hidden" name="id" value="' . $row['id'] . '"></td>';
                      echo '</form>';
                    } else {


                      echo "<td>" . $row['name'] . "</td>";
                      echo "<td>" . $row['contact'] . "</td>";
                      echo "<td>" . $row['time'] . "</td>";
                      echo "<td>" . $row['date'] . "</td>";
                      echo "<td>" . $row['party_size'] . "</td>";
                      echo "<td>" . $row['party_type'] . "</td>";

                    }
                    echo '<td><a class="btn btn-primary" href="delete_booking.php?id=' . $row['id'] . '"role="button">Delete</a></td>';

                    echo "</tr>";
                  }
                }
                $conn->close();
                ?>

              </tbody>
            </table>
          </section>
        </form>
      </div>
    </div>
    </div>
    </div>
  </section>

  <!--footer-->
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