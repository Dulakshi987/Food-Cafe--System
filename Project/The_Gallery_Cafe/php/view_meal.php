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

                    <?php if (isset($_SESSION["email"])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $_SESSION["email"]; ?></a>
                        </li>
                        <li>
                            <a href="/Project/The_Gallery_Cafe/php/logout.php">Logout</a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="/Project/The_Gallery_Cafe/php/customer_login.php">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
    <br /><br />



    <?php

    session_start();

    include 'db.php';

    // Retrieve all food items from the database
    $query = "SELECT * FROM food_items";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<br /><br /><br /><br />';
        echo '<h1 style="color:#3b46e7; background-color:black; text-weight:800; text-align:center">Menu List</h1>';

        $counter = 0;
        echo '<div class="row">'; // Start the first row container
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-sm-6 col-md-4 col-lg-3">'; // Each food item as a column
            echo '<div class="card swiper-slide" style="width: 250px; height: 350px;">';

            echo '<div class="image box">';
            echo '<img src="/Project/The_Gallery_Cafe/images/' . htmlspecialchars($row["image_url"]) . '" style="width:250px; height:200px"/>';
            echo '</div>';
            echo '<div class="profile details">';
            echo '<center><h3 class="name" style="color:#3b46e7; text-align:center;">' . htmlspecialchars($row["name"]) . '</h3></center>';
            echo '<p class="cuisine_type">' . htmlspecialchars($row["cuisine_type"]) . '</p>';
            echo '<p class="description">' . htmlspecialchars($row["description"]) . '</p>';
            echo '<p class="price">' . htmlspecialchars($row["price"]) . '</p>';

            echo '<a href="/Project/The_Gallery_Cafe/php/' . htmlspecialchars($row["order_url"]) . '">';
            echo '<button class="order_url">Order</button>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            $counter++;


            if ($counter % 4 == 0) {
                echo '</div></br></br></br></br><br><div class="row">';
            }
        }

        echo '</div>';
    } else {
        echo "No items found.";
    }

    mysqli_close($conn);
    ?>


    <br><br><br><br>
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