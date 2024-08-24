<?php
session_start();
if (isset($_SESSION["orders"])) {
    header("Location: view_order.php");
    exit();
}

// Establish a MySQL connection
include 'db.php';

// Retrieve user input from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $food_name = $_POST['food_name'];
    $quantity = $_POST['quantity'];
    $total = $_POST['total'];
    $get_method = $_POST['get_method'];
    $payament_method = $_POST['payament_method'];
    $cardholder_name = $_POST['c_name'];
    $card_Number = $_POST['c_no'];
    $ex_date = $_POST['ex_date'];
    $cvv = $_POST['cvv'];

    // Insert user data into the database
    $query = "INSERT INTO orders (customer_name, address, email, tel, food_name, quantity, total, get_method, payament_method, cardholder_name,card_Number, ex_date, cvv) 
    VALUES ('$customer_name', '$address', '$email', '$tel', '$food_name', '$quantity', '$total', '$get_method', '$payament_method', '$cardholder_name', '$card_Number', '$ex_date', '$cvv')";

    if (mysqli_query($conn, $query)) {
        echo "order added successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
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
<br /><br /><br><br>
<br></br><br><br>

<div class="container">
    <h2 class="text-center" style="background-color:black; color:#3b46e7; font-weight:800; font-size:38px;">
        Pre-Order
        Details
    </h2><br>

    <form action="order.php" method="post">


        <input type="hidden" name="action" value="add">

        <h3 style="font-size:28px; color:#3b46e7">Customer Details</h3><br>
        <div class="form-group mx-sm-3 mb-2">

            <label for="name"><b>customer Name</b></label>
            <input type="text" placeholder="Enter customer Name" name="name"><br /><br />
        </div>
        <div class="form-group mx-sm-3 mb-2">

            <label for="address"><b>address</b></label>
            <input type="text" placeholder="Enter address" name="address" required /><br /><br />
        </div>
        <div class="form-group mx-sm-3 mb-2">

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter email" name="email" required /><br /><br />
        </div>
        <div class="form-group mx-sm-3 mb-2">

            <label for="tel"><b></b>Tel</label>
            <input type="text" placeholder="Enter Tel" name="tel" required /><br /><br />
        </div>


        <h3 style="font-size:28px; color:#3b46e7">Order Details</h3><br>

        <div class="form-group mx-sm-3 mb-2">

            <label for="food_name"><b>Food Name</b></label>
            <input type="text" placeholder="Enter Food name" name="food_name" required /><br /><br />
        </div>

        <div class="form-group mx-sm-3 mb-2">

            <label for="quantity"><b>Quantity</b></label>
            <input type="text" placeholder="Enter quantity" name="quantity" required /><br /><br />
        </div>

        <div class="form-group mx-sm-3 mb-2">

            <label for="total"><b>Total</b></label>
            <input type="text" placeholder="Enter price" name="total" required /><br /><br />
        </div>

        <h3 style="font-size:28px; color:#3b46e7">Payement Details</h3><br>

        <div class="form-group mx-sm-3 mb-2">

            <label for="get_method"><b>Get method</b></label>
            <input type="text" placeholder="Enter Get method" name="get_method" required /><br /><br />
        </div>

        <div class="form-group mx-sm-3 mb-2">

            <label for="payament_method"><b>Payament method</b></label>
            <input type="text" placeholder="Enter payament method" name="payament_method" required /><br /><br />
        </div>

        <div class="form-group mx-sm-3 mb-2">

            <label for="c_name"><b>Cardholder Name</b></label>
            <input type="text" placeholder="Enter Cardholder name" name="c_name" required /><br /><br />
        </div>

        <div class="form-group mx-sm-3 mb-2">

            <label for="c_no"><b>Card Number</b></label>
            <input type="text" placeholder="Enter Card Number" name="c_no" required /><br /><br />
        </div>

        <div class="form-group mx-sm-3 mb-2">

            <label for="ex_date"><b>Expire Date</b></label>
            <input type="text" placeholder="Enter Ex date" name="ex_date" required /><br /><br />
        </div>

        <div class="form-group mx-sm-3 mb-2">

            <label for="cvv"><b>CVV</b></label>
            <input type="text" placeholder="Enter CVV" name="cvv" required /><br /><br />
        </div>

        <button type="submit" name="add">Add order</button><br /><br />
        <section>
            <table class="table table-boarded">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>address</th>
                        <th>Email</th>
                        <th>contact</th>
                        <th>Food Name</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Get Method</th>
                        <th>Payement Method</th>
                        <th>cardholder name</th>
                        <th>card number</th>

                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'db.php';

                    $query = "SELECT * FROM orders";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {

                        echo '<h1>Manage Order</h1>';

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            if (isset($_GET['id']) && $row['id'] == $_GET['id']) {

                                echo '<form class="form-inline m-2" action="confirm_reservation" method="POST">';
                                echo '<td> <input type="text" name="name" value="' . $row['customer_name'] . '"></td>';
                                echo '<td> <input type="text" name="address" value="' . $row['address'] . '"></td>';
                                echo '<td> <input type="text" name="email" value="' . $row['email'] . '"></td>';
                                echo '<td> <input type="text" name="tel" value="' . $row['tel'] . '"></td>';
                                echo '<td> <input type="text" name="food_name" value="' . $row['food_name'] . '"></td>';
                                echo '<td> <input type="text" name="quantity" value="' . $row['quantity'] . '"></td>';
                                echo '<td> <input type="text" name="total" value="' . $row['total'] . '"></td>';
                                echo '<td> <input type="text" name="get_method" value="' . $row['get_method'] . '"></td>';
                                echo '<td> <input type="text" name="payement_method" value="' . $row['payament_method'] . '"></td>';
                                echo '<td> <input type="text" name="c_name" value="' . $row['cardholder_name'] . '"></td>';
                                echo '<td> <input type="text" name="c_Number" value="' . $row['Card_Number'] . '"></td>';


                                echo '<td> <input type="hidden" name="id" value="' . $row['id'] . '"></td>';
                                echo '</form>';
                            } else {
                                echo "<td>" . $row['customer_name'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['tel'] . "</td>";
                                echo "<td>" . $row['food_name'] . "</td>";
                                echo "<td>" . $row['quantity'] . "</td>";
                                echo "<td>" . $row['total'] . "</td>";
                                echo "<td>" . $row['get_method'] . "</td>";
                                echo "<td>" . $row['payament_method'] . "</td>";
                                echo "<td>" . $row['cardholder_name'] . "</td>";
                                echo "<td>" . $row['card_Number'] . "</td>";

                            }

                            echo '<td><a class="btn btn-primary" href="delete_order.php?id=' . $row['id'] . '"role="button">Delete</a></td>';

                            echo "</tr>";
                        }
                    }
                    $conn->close();
                    ?>

                </tbody>
            </table>
        </section>




        <div class="container" style="background-color: #f1f1f1"></div>
    </form>
</div>

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