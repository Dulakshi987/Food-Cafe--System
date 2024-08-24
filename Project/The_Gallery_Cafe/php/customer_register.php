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
</head>

<body>
  <!--navigation bar of login-->
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">The Gallery Cafe</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="customer_login.php">Login</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--admin register form-->

  <div class="container">
    <?php
    if (isset($_POST["submit"])) {
      $fName = $_POST["fname"];
      $lName = $_POST["lname"];
      $email = $_POST["email"];
      $password = $_POST["password"];

      $passwordHash = password_hash($password, PASSWORD_DEFAULT);

      $errors = array();

      if (empty($fName) || empty($lName) || empty($email) || empty($password)) {
        array_push($errors, "All fields are required");
      }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
      }

      if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
      }

      require_once "db.php";

      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "SELECT * FROM c_login WHERE email = ?";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        die("MySQL statement error: " . mysqli_stmt_error($stmt));
      }
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $rowCount = mysqli_stmt_num_rows($stmt);

      if ($rowCount > 0) {
        array_push($errors, "Email already exists!");
      }

      if (count($errors) > 0) {
        foreach ($errors as $error) {
          echo "<div class='alert alert-danger'>$error</div>";
        }
      } else {
        $sql = "INSERT INTO c_login (fName, lName, email, password) VALUES (?, ?, ?, ?)";
        if (mysqli_stmt_prepare($stmt, $sql)) {
          mysqli_stmt_bind_param($stmt, "ssss", $fName, $lName, $email, $passwordHash);
          mysqli_stmt_execute($stmt);
          echo "<div class='alert alert-success'>You are registered successfully.</div>";
        } else {
          die("Something went wrong: " . mysqli_stmt_error($stmt));
        }
      }

      mysqli_stmt_close($stmt);
      mysqli_close($conn);
    }
    ?>

    <form action="customer_register.php " method="post">

      <p class="cregister">
        <i class="fi fi-rr-hand-wave"></i>Welcome New customer!!<br />
        Register Form
      </p>
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" required /><br /><br />

      <label for="lname"><b>Last name</b></label>
      <input type="text" placeholder="Enter Last name" name="lname" required /><br /><br />

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required /><br /><br />

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required /><br /><br />

      <button type="submit" name="submit">Register</button><br /><br />

      <label>
        <input type="checkbox" checked="checked" name="remember" /> Remember
        me </label><br /><br />

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