<?php
session_start();
require_once "db.php";


// 1. Clear session cart 
if (isset($_SESSION['cart'])) {
    unset($_SESSION['cart']);
}

// 2. Clear database cart 
$sql = "TRUNCATE TABLE cart";
$stmt = $conn->prepare($sql);
$stmt->execute();

// 3. Redirect back
header("Location: ../Pages/coffee.php");
exit();
