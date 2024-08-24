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




    <?php

    session_start();
    include 'db.php';


    $query = "SELECT * FROM booking";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<br /><br /><br /><br /><br /><br><br><br>';
        echo '<h1> All Booking</h1>';

        while ($row = mysqli_fetch_assoc($result)) {

            echo '<div class="profile details">';
            echo '<center><h3 class="name" style="color:black; background-color:#2fcfe4; text-align:center;">' . htmlspecialchars($row["name"]) . '</h3></center>';
            echo '<p class="date">' . htmlspecialchars($row["date"]) . '</p>';
            echo '<p class="time_duration">' . htmlspecialchars($row["time"]) . '</p>';
            echo '<p class="party_type">' . htmlspecialchars($row["party_type"]) . '</p>';
            echo '<p class="party_size">' . htmlspecialchars($row["party_size"]) . '</p>';
            echo '<p class="contact">' . htmlspecialchars($row["contact"]) . '</p>';


            echo '</div>';

            echo '</div>';





        }

        echo '</div>';
    } else {
        echo "No items found.";
    }

    mysqli_close($conn);
    ?>

</body>
<br><br>
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




</html>