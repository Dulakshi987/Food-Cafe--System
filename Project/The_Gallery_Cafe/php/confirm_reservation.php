<?php
session_start();
if (isset($_SESSION["booking"])) {
    header("Location: confirm_reservation.php");
    exit();
}


include 'db.php';




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time_duration'];
    $party_type = $_POST['party_type'];
    $contact = $_POST['tel'];
    $party_size = $_POST['party_size'];


    $query = "INSERT INTO booking (name, date, time, party_type, contact,party_size) VALUES ('$name', '$date', '$time', '$party_type' ,'$contact' ,'$party_size')";

    if (mysqli_query($conn, $query)) {
        echo "Reservation confirmed!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
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
                    <a class="nav-link" href="view_booking.php">view table reservation</a>
                </li>
            </ul>
        </div>

    </nav>
    <br><br>
    <!--Reservation section-->

    <section id="reservations">
        <div class="container">
            <div class="container">
                <h2 class="text-center">confirm Reservation</h2>

                <form action="confirm_reservation.php" method="post">


                    <input type="hidden" name="action" value="add">

                    <div class="form-group mx-sm-3 mb-2">

                        <label for="name"><b>Name</b></label>
                        <input type="text" placeholder="Enter  Name" name="name"><br /><br />
                    </div>

                    <div class="form-group mx-sm-3 mb-2">

                        <label for="tel"><b>Contcat</b></label>
                        <input type="text" placeholder="Enter  Contcat" name="tel"><br /><br />
                    </div>

                    <div class="form-group mx-sm-3 mb-2">

                        <label for="time_duration"><b>Time Duration</b></label>
                        <input type="time" placeholder="Enter Time duration" name="time_duration"><br /><br />
                    </div>

                    <div class="form-group mx-sm-3 mb-2">

                        <label for="date"><b>Date</b></label>
                        <input type="text" placeholder="Enter Date" name="date"><br /><br />
                    </div>

                    <div class="form-group mx-sm-3 mb-2">

                        <label for="party_size"><b>Party size</b></label>
                        <input type="text" placeholder="Enter Party size" name="party_size"><br /><br />
                    </div>


                    <div class=" form-group mx-sm-3 mb-2">

                        <label for="party_type"><b>Party Type</b></label>
                        <input type="text" placeholder="Enter Party type" name="party_type"><br /><br />
                    </div>

                    <button type="submit" name="add">confirmed reservation</button>

</body>




</html>