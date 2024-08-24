<?php
session_start();
include 'db.php';

$food_item = null; // Initialize $food_item to null

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM food_items WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $food_item = mysqli_fetch_assoc($result);
}

$error = ''; // Initialize error variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['Name'];
    $description = $_POST['Description'];
    $cuisine_type = $_POST['Cuisine_type'];
    $price = $_POST['Price'];

    $sql = "UPDATE food_items SET name='$name', description='$description', cuisine_type='$cuisine_type', price='$price' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: view_meal1.php?success=Item_updated_successfully");
        exit;
    } else {
        $error = "Error updating item: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu Item - The Gallery Cafe</title>
    <link rel="icon" type="image/x-icon" href="/Project/The_Gallery_Cafe/images/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Project/The_Gallery_Cafe/css/style.css">
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
        <h2 class="text-center">Update Menu Item</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <form action="update_meal.php" method="POST">
            <?php if ($food_item): ?>
                <input type="hidden" name="id" value="<?php echo $food_item['id']; ?>">
                <div class="form-group >
                    <label for=" Name">Name</label>
                    <input type="text" name="Name" value="<?php echo $food_item['name']; ?>" required>
                </div>
                <div class="form-group ">
                    <label for="Description">Description</label>
                    <input type="text" name="Description" value="<?php echo $food_item['description']; ?>" required>
                </div>
                <div class="form-group ">
                    <label for="Cuisine_type">Cuisine Type</label>
                    <input type="text" name="Cuisine_type" value="<?php echo $food_item['cuisine_type']; ?>" required>
                </div>
                <div class="form-group ">
                    <label for="Price"><b>Price</b></label>
                    <input type="text" placeholder="Enter Price" name="Price" value="<?php echo $food_item['price']; ?>"
                        required>
                </div>
                <button type="submit" class="btn btn-primary">Update Menu Item</button>
            <?php else: ?>
                <div class="alert alert-warning">No menu item found.</div>
            <?php endif; ?>
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