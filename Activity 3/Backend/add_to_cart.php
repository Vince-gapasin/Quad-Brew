<?php
ob_start();
include 'db.php';

if (isset($_POST['add_to_cart'])) {

    $drink_id   = intval($_POST['drink_id']);
    $drink_name = trim($_POST['name']);
    $price      = floatval($_POST['price']);
    $image      = trim($_POST['image']);

    // CHECK IF ITEM ALREADY EXISTS IN CART
    $check_sql = "SELECT quantity FROM cart WHERE drink_id = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("i", $drink_id);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if ($result->num_rows > 0) {
        // ITEM EXISTS → UPDATE QUANTITY +1
        $update_sql = "UPDATE cart SET quantity = quantity + 1 WHERE drink_id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("i", $drink_id);
        $update_stmt->execute();
        $update_stmt->close();

    } else {
        // ITEM DOES NOT EXIST → INSERT NEW
        $insert_sql = "INSERT INTO cart (drink_id, name, image, price, quantity)
                       VALUES (?, ?, ?, ?, 1)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param("issd", 
            $drink_id,
            $drink_name,
            $image,
            $price
        );
        $insert_stmt->execute();
        $insert_stmt->close();
    }

    $check_stmt->close();

    header("Location: ../Pages/cart.php");
    exit;
}

$conn->close();
?>
