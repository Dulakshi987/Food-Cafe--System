<?php
session_start();
if (isset($_SESSION["o_login"])) {
    header("Location: operational_staff_dashboard.php");
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

<d>

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">The Gallery Cafe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="operational_staff_register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <?php
        if (isset($_POST["login"])) {
            $fName = $_POST['fname'];
            $lName = $_POST['lname'];
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "db.php";
            $sql = "SELECT * FROM o_login  WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                die("Query failed: " . mysqli_error($conn));
            }
            $o_login = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($o_login) {
                if (password_verify($password, $o_login["password"])) {
                    session_start();
                    $_SESSION["a_login"] = "yes";
                    $_SESSION["fname"] = $fName;
                    $_SESSION["lname"] = $lName;
                    $_SESSION["email"] = $email;
                    header("Location: operational_staff_dashboard.php");
                    die();
                } else {
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
        <form action="operational_staff_login.php" method="post">

            <p class="aregister">Operational Satff Login Form</p>
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

    <footer class="text-center">
        <p><b>********************************************************</b></p>
    </footer>
    </body>

</html>