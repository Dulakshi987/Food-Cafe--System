<?php
session_start();
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM orders WHERE id = ?";

    // Prepare the query
    $stmt = $conn->prepare($sql);

    // Bind the parameter
    $stmt->bind_param("i", $id);

    // Execute the query
    if ($stmt->execute()) {
        $conn->close();

        echo '<script>
            alert("Deleted successfully");
            setTimeout(function(){
                window.location.href = "view_order.php";
            }, 1000);
        </script>';
    } else {
        echo "Error deleting record: " . $conn->error;
        $conn->close();
    }
} else {
    header("Location:order.php");
    exit();
}
?>