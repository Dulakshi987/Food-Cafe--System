<?php
session_start();
if (isset($_SESSION["c_login"])) {
  header("Location: customer_dashboard.php");
  exit();
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
  <link rel="stylesheet"
    href="https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-rounded/css/uicons-regular-rounded.css" />
</head>

<body>
  <!--navigation bar of customer login-->
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">The Gallery Cafe</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">

          <a class="nav-link" href="customer_register.php">Register</a>
        </li>
      </ul>
    </div>
  </nav>

  <!--Customer Login-->
  <div class="container">
    <?php
    if (isset($_POST["login"])) {
      $fName = $_POST['fname'];
      $lName = $_POST['lname'];
      $email = $_POST["email"];
      $password = $_POST["password"];
      require_once "db.php";
      $sql = "SELECT * FROM c_login  WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        die("Query failed: " . mysqli_error($conn));
      }
      $c_login = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if ($c_login) {
        if (password_verify($password, $c_login["password"])) {
          session_start();
          $_SESSION["c_login"] = "yes";
          $_SESSION["fname"] = $fName;
          $_SESSION["lname"] = $lName;
          $_SESSION["email"] = $email;
          header("Location: customer_register.php");
          die();
        } else {
          echo "<div class='alert alert-danger'>Password does not match</div>";
        }
      } else {
        echo "<div class='alert alert-danger'>Email does not match</div>";
      }
    }
    ?>

    <form action="customer_login.php" method="post">

      <div class="container">
        <p class="cregister">
          <i class="fi fi-rr-hand-wave"></i>
          Hii! Customer Login Form
        </p>
        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" required /><br /><br />

        <label for="lname"><b>Last name</b></label>
        <input type="text" placeholder="Enter Last name" name="lname" required /><br /><br />

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required /><br /><br />

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required /><br /><br />

        <button type="submit" name="login">Login</button><br /><br />




        <div class="container" style="background-color: #f1f1f1"></div>
    </form>
  </div>

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