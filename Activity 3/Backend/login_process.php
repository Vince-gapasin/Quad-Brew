<?php
session_start();
require_once 'db.php';

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query(
        "SELECT * FROM users WHERE email = '$email'"
    );

    if ($result && $result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // ✅ Login success
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['email'] = $user['email'];

            // --- ADD THIS LINE BELOW ---
            $_SESSION['address'] = $user['address'];
            // ---------------------------

            header("Location: ../Pages/index.php");
            exit();
        }
    }

    // ❌ Login failed
    $_SESSION['login_error'] = "Invalid credentials";
    $_SESSION['active_form'] = "login";

    header("Location: ../Pages/login.php");
    exit();
}
