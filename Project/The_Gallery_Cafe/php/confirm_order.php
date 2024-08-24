<?php
session_start();
if (isset($_SESSION["c_orders"])) {
    header("Location: confirm_order.php");
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


    // Insert user data into the database
    $query = "INSERT INTO c_orders (customer_name, address, email, tel, food_name, quantity, total, get_method, payament_method, cardholder_name,card_Number) 
    VALUES ('$customer_name', '$address', '$email', '$tel', '$food_name', '$quantity', '$total', '$get_method', '$payament_method', '$cardholder_name', '$card_Number')";

    if (mysqli_query($conn, $query)) {
        echo "confirmed order!";
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

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">The Gallery Cafe</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="view_order.php">View order</a>
            </li>
        </ul>
    </div>

</nav>
<br /><br />

<div class="container">
    <h2 class="text-center" style="background-color:black; color:#3b46e7; font-weight:800; font-size:38px;">
        confirmed Pre-Order
        Details
    </h2><br>

    <form action="confirm_order.php" method="post">


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

        <button type="submit" name="add">confirm order</button><br /><br />

        <div class="container" style="background-color: #f1f1f1"></div>
    </form>
</div>

<!--footer-->
<footer id="footer">
    ******************************************
</footer>
</body>

</html>