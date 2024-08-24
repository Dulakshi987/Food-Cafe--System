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
                    <th>contact</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Pary_size</th>
                    <th>party_type</th>
                    <th>Confirm reservation</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                session_start();
                include 'db.php';

                $query = "SELECT * FROM reservation";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {

                    echo '<h1>View table reservation</h1>';

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        if (isset($_GET['id']) && $row['id'] == $_GET['id']) {

                            echo '<form class="form-inline m-2" action="confirm_reservation" method="POST">';
                            echo '<td> <input type="text" name="name" value="' . $row['name'] . '"></td>';
                            echo '<td> <input type="text" name="tel" value="' . $row['contact'] . '"></td>';
                            echo '<td> <input type="text" name="time_duration" value="' . $row['time'] . '"></td>';
                            echo '<td> <input type="text" name="date" value="' . $row['date'] . '"></td>';
                            echo '<td> <input type="text" name="party_size" value="' . $row['party_size'] . '"></td>';
                            echo '<td> <input type="text" name="party_type" value="' . $row['party_type'] . '"></td>';
                            echo '<td> <button type="submit" class="btn btn-primary">confirmed</button></td>';
                            echo '<td> <input type="hidden" name="id" value="' . $row['id'] . '"></td>';
                            echo '</form>';
                        } else {


                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['contact'] . "</td>";
                            echo "<td>" . $row['time'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['party_size'] . "</td>";
                            echo "<td>" . $row['party_type'] . "</td>";

                        }
                        echo '<td><a class="btn btn-primary" href="confirm_reservation.php?id=' . $row['id'] . '"role="button">Confirm</a></td>';
                        echo '<td><a class="btn btn-primary" href="delete_booking.php?id=' . $row['id'] . '"role="button">Delete</a></td>';

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