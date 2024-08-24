<?php
session_start();

if (!isset($_SESSION["c_login"])) {
    header("Location: view_customer.php");
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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">The Gallery Cafe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="customer_dashboard.php">Dashboard</a>
                </li>
            </ul>
        </div>

    </nav>


    <div class="container">
        <center>
            <h1 style="font-size: 50px; font-weight:700; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                color:#3b46e7">
                Hellow <i class="fi fi-rr-hand-wave"></i></h1>
        </center>
        <center>
            <h1 style="font-size: 50px; font-weight:700; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman' ,
                serif; color:#3b46e7">WELCOME to The Gallery Cafe <i class="fi fi-rr-hand-wave"></i></h1>
        </center>
        <center><img src="/Project/The_Gallery_Cafe/images/check.png" style="height:100px; "></center>
        <center>
            <p style="font-size: 30px; font-weight:400;">
                First
                Name:
                <?php echo htmlspecialchars($_SESSION["fname"]); ?>
            </p>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">Last Name: <?php echo htmlspecialchars($_SESSION["lname"]); ?>
            </p>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">Full Name: <?php echo htmlspecialchars($_SESSION["fname"]); ?>
                <?php echo htmlspecialchars($_SESSION["lname"]); ?>
            </p>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">email: <?php echo htmlspecialchars($_SESSION["email"]); ?></p>
            <br>
        </center>

    </div>


</body>