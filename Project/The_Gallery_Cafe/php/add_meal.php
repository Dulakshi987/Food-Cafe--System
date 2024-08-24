<?php
session_start();
if (isset($_SESSION["food_items"])) {
    header("Location: view_meal.php");
    exit();
}

// Establish a MySQL connection
include 'db.php';



// Retrieve user input from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $description = $_POST['Description'];
    $cuisine_type = $_POST['Cuisine_type'];
    $price = $_POST['Price'];
    $image_url = $_POST['image_url'];
    $order_url = $_POST['order_url'];

    // Insert user data into the database
    $query = "INSERT INTO food_items (name, description, cuisine_type, price, image_url,order_url) VALUES ('$name', '$description', '$cuisine_type', '$price' ,'$image_url' ,'$order_url')";

    if (mysqli_query($conn, $query)) {
        echo "Meal added successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
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
    <link rel="icon" type="image/x-icon" href="/project/The_Gallery_Cafe/images/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/project/The_Gallery_Cafe/css/style.css" />
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

    <div class="container">
        <h2 class="text-center">Add Menu Item</h2>

        <form action="add_meal.php" method="post">

            <input type="hidden" name="action" value="add">
            <div class="form-group mx-sm-3 mb-2">

                <label for="Name"><b>Name</b></label>
                <input type="text" placeholder="Enter  Name" name="Name"><br /><br />
            </div>
            <div class="form-group mx-sm-3 mb-2">

                <label for="Description"><b>description</b></label>
                <input type="text" placeholder="Enter description" name="Description" required /><br /><br />
            </div>
            <div class="form-group mx-sm-3 mb-2">

                <label for="Cuisine_type"><b>Cuisine Type</b></label>
                <input type="text" placeholder="Enter cuisine type" name="Cuisine_type" required /><br /><br />
            </div>
            <div class="form-group mx-sm-3 mb-2">

                <label for="Price"><b>Price</b></label>
                <input type="text" placeholder="Enter Price" name="Price" required /><br /><br />
            </div>
            <div class="form-group mx-sm-3 mb-2">

                <label for="image_url"><b>Image_url</b></label>
                <input type="text" placeholder="Enter image_url" name="image_url" required /><br /><br />
            </div>

            <div class="form-group mx-sm-3 mb-2">

                <label for="order_url"><b>order_url</b></label>
                <input type="text" placeholder="Enter order_url" name="order_url" required /><br /><br />
            </div>
            <button type="submit" name="add">Add meal</button><br /><br />


            <div class="container" style="background-color: #f1f1f1"></div>
        </form>
    </div>

    <footer class="text-center">
        <p><b>********************************************************</b></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
</body>

</html>