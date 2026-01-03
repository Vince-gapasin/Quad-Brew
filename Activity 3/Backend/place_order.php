<?php
session_start();
include("db.php");

// 1. Get items from the Database
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
$add = "SELECT * FROM users";
$ress = $conn->query($add);

if ($result->num_rows > 0) {
    $order_items = [];
    $total_price = 0;

    // 2. Loop through database items and save them to a list
    while ($roww = $ress->fetch_assoc()) {
            $address = $roww['address'];
        }

    while ($row = $result->fetch_assoc()) {
        $qty = isset($row['quantity']) ? $row['quantity'] : 1;
        $subtotal = $row['price'] * $qty;
        $total_price += $subtotal;

        $order_items[] = [
            'name' => $row['name'],
            'quantity' => $qty,
            'price' => $row['price'],
            'subtotal' => $subtotal
        ];
    }

    

    // 3. Create a Receipt ID and Date
    $order_id = "QB-" . rand(1000, 9999);
    $date = date("F j, Y"); // e.g., December 24, 2025

    // 4. SAVE EVERYTHING TO SESSION (This is what thankyou.php reads)
    $_SESSION['receipt'] = [
        'order_id' => $order_id,
        'date' => $date,
        'items' => $order_items,
        'total' => $total_price,
        'address' => $address
    ];

    // 5. Empty the Database Cart
    $conn->query("DELETE FROM cart");

    // 6. Go to the Receipt Page
    header("Location: ../Pages/thankyou.php");
    exit();
} else {
    // If cart is empty, go back to menu
    header("Location: ../Pages/coffee.php");
    exit();
}
?>