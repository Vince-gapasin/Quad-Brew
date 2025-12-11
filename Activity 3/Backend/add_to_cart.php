<?php
ob_start();
include 'db.php';

if (isset($_POST['add_to_cart'])) {

    // Clean and sanitize inputs fully
    $drink_id   = intval($_POST['drink_id']);
    $drink_name = trim($_POST['name']);
    $price      = floatval($_POST['price']);
    $image      = trim($_POST['image']);

    // Prepare clean query
    $sql = "INSERT INTO cart (drink_id, name, price, image)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isds", 
        $drink_id,
        $drink_name,
        $price,
        $image
    );

    if ($stmt->execute()) {
        header("Location: ../Pages/cart.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
