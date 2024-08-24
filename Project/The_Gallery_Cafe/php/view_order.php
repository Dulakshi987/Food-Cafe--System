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
                    <a class="nav-link" href="operational_staff_dashboard.php">Dashboard</a>
                </li>
            </ul>
        </div>
    </nav>

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
                    <th>confirm</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                <?php
                session_start();
                include 'db.php';

                $query = "SELECT * FROM orders";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {

                    echo '<h1>View pre-order</h1>';

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

                            echo '<td> <button type="submit" class="btn btn-primary">confirmed</button></td>';
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
                        echo '<td><a class="btn btn-primary" href="confirm_order.php?id=' . $row['id'] . '"role="button">Confirm</a></td>';
                        echo '<td><a class="btn btn-primary" href="delete_order.php?id=' . $row['id'] . '"role="button">Delete</a></td>';

                        echo "</tr>";
                    }
                }
                $conn->close();
                ?>

            </tbody>
        </table>
    </section>

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