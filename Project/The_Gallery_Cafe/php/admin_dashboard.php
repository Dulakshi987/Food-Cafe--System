<?php
session_start();
if (!isset($_SESSION["a_login"])) {
  header("Location: admin_login.php");
  exit();
}
$email = $_SESSION["email"];
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
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">The Gallery Cafe</a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item" style="color:aliceblue">
          <span class="navbar-text"> <?php echo $email; ?></span>
        </li>

      </ul>
    </div>
  </nav>

  <div class="container">
    <p class="aregister">Admin Dashboard</p>
  </div>

  <br />

  <div>
    <a href="viewadmin.php" class="buttondash">View admin</a>
  </div>
  <br />

  <div>
    <a href="add_meal.php" class="buttondash">Add meal</a>
  </div>
  <br />


  <div>
    <a href="update_meal.php" class="buttondash">Update meal</a>
  </div>
  <br />

  <div>
    <a href="delete_meal.php" class="buttondash">Delete meal</a>
  </div>
  <br />
  <div>
    <a href="view_meal.php" class="buttondash">View meal</a>
  </div>
  <br />


  <div>
    <a href="admin_logout.php" class="buttondash">Logout</a>
  </div>
  <br /><br />
</body>

<footer class="text-center">
  <p><b>********************************************************</b></p>
</footer>

</html>