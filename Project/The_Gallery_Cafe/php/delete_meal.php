<?php
session_start();
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);


    $query = "DELETE FROM food_items WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Item deleted.";
    } else {
        echo "Error deleting item.";
    }

    $stmt->close();
    $conn->close();


    header("Location: view_meal1.php");
    exit();
} else {
    echo "Invalid request.";
}
?>