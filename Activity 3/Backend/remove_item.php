<?php
include("db.php");

// Check if the form was submitted via POST and if 'id' exists
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    
    // 1. Sanitize the Input (Security Measure)
    // Casting to (int) ensures only numbers are processed, preventing SQL injection
    $id = (int)$_POST['id'];

    // 2. Prepare the SQL Statement
    // We use a prepared statement to safely delete the specific item
    $stmt = $conn->prepare("DELETE FROM cart WHERE id = ?");
    $stmt->bind_param("i", $id); // "i" means the parameter is an integer

    // 3. Execute and Redirect
    if ($stmt->execute()) {
        // SUCCESS: Item removed. Redirect back to the cart page.
        // IMPORTANT: Make sure this path points to your actual cart file.
        // If your cart.php is in a "Frontend" folder, use: "../Frontend/cart.php"
        header("Location: ../Pages/cart.php");
        exit();
    } else {
        // If there is a database error
        echo "Error removing item: " . $conn->error;
    }

    $stmt->close();

} else {
    // If someone tries to visit this page directly without clicking the button,
    // send them back to the cart.
    header("Location: ../Pages/cart.php");
    exit();
}

$conn->close();
?>