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
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">The Gallery Cafe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php

    session_start();
    include 'db.php';

    // Retrieve all food items from the database
    $query = "SELECT * FROM food_items";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<br><br><br>';
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
            echo '<center><h3 class="Name" style="color:#3b46e7; text-align:center;">' . htmlspecialchars($row["name"]) . '</h3></center>';
            echo '<p class="Cuisine_type">' . htmlspecialchars($row["cuisine_type"]) . '</p>';
            echo '<p class="Description">' . htmlspecialchars($row["description"]) . '</p>';
            echo '<p class="Price">' . htmlspecialchars($row["price"]) . '</p>';
            echo '</div>';
            echo '<a href="/Project/The_Gallery_Cafe/php/' . htmlspecialchars($row["order_url"]) . '">';
            echo '<button class="order_url">Order</button>';
            echo '</a>';
            echo '<a href="delete_meal.php" >';
            echo '<button>Delete</button>';
            echo '</a>';
            echo '</div>';
            echo '</div>';

            $counter++;


            if ($counter % 4 == 0) {
                echo '</div></br></br></br><br><br><br><div class="row">';
            }
        }

        echo '</div>';
    } else {
        echo "No items found.";
    }

    mysqli_close($conn);
    ?>

    <footer class="text-center">
        <p><b>********************************************************</b></p>
    </footer>


</body>

</html>