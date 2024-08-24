<?php
session_start();

if (!isset($_SESSION["orders"])) {
    header("Location: view_order1.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Gallery Cafe</title>
    <link rel="icon" type="image/x-icon" href="/project/The_Gallery_Cafe/images/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/project/The_Gallery_Cafe/css/style.css" />
    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-rounded/css/uicons-regular-rounded.css" />
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
    <br /><br />

    <div class="container">

        <center>
            <h1 style="font-size: 50px; font-weight:700; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman' ,
                serif; color:#3b46e7">SUCESSFULLY CONFIRM ORDER!!<i class="fi fi-rr-hand-wave"></i></h1>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">Customer Name:
                <?php echo htmlspecialchars($_SESSION["name"]); ?>
            </p>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">Address: <?php echo htmlspecialchars($_SESSION["address"]); ?>
            </p>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">email: <?php echo htmlspecialchars($_SESSION["email"]); ?>

            </p>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">tel: <?php echo htmlspecialchars($_SESSION["tel"]); ?></p>
            <br>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">Food Name:
                <?php echo htmlspecialchars($_SESSION["food_name"]); ?>
            </p>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">Quantity:
                <?php echo htmlspecialchars($_SESSION["quantity"]); ?>
            </p>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">Total: <?php echo htmlspecialchars($_SESSION["total"]); ?>
            </p>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">Get method:
                <?php echo htmlspecialchars($_SESSION["get_method"]); ?>
            </p>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">Payement method:
                <?php echo htmlspecialchars($_SESSION["payement_method"]); ?>
            </p>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">Cardholder Name:
                <?php echo htmlspecialchars($_SESSION["c_name"]); ?>
            </p>
        </center>
        <center>
            <p style="font-size: 30px; font-weight:400;">Expire Date:
                <?php echo htmlspecialchars($_SESSION["ex_date"]); ?>
            </p>
        </center>

    </div>

</body>

</html>