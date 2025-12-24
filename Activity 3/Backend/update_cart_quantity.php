<?php
include("db.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data (since we are sending JSON from JS)
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['id']) && isset($data['action'])) {
        $id = (int)$data['id'];
        $action = $data['action'];

        // Get current quantity
        $query = "SELECT quantity FROM cart WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($row = $result->fetch_assoc()) {
            $currentQty = $row['quantity'];
            $newQty = $currentQty;

            if ($action === 'plus') {
                $newQty++;
            } elseif ($action === 'minus' && $currentQty > 1) {
                // Prevent quantity from going below 1
                $newQty--;
            }
            // Update the database
            $updateStmt = $conn->prepare("UPDATE cart SET quantity = ? WHERE id = ?");
            $updateStmt->bind_param("ii", $newQty, $id);
            
            if ($updateStmt->execute()) {
                echo json_encode(['status' => 'success', 'new_quantity' => $newQty]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Update failed']);
            }
            $updateStmt->close();
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Item not found']);
        }
        $stmt->close();
    }
}
$conn->close();
?>