<?php
//to show error
error_reporting(E_ALL);
ini_set('display_errors', 1);


//process starts here
session_start();
require_once 'db.php';

if (!isset($_POST['signup'])) {
    die("Form not submitted");
}

$full_name = $_POST['fullname'];
$email = $_POST['email'];
$phone_number = $_POST['phone'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$address = $_POST['address'];

$checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'")
    or die("Check failed: " . $conn->error);

if ($checkEmail->num_rows > 0) {
    $_SESSION['signup_error'] = "Email already exists!";
} else {
    $insert = $conn->query(
        "INSERT INTO users (full_name, email, phone_number, password, address)
         VALUES ('$full_name', '$email', '$phone_number', '$password', '$address')"
    ) or die("Insert failed: " . $conn->error);
}

header("Location: ../Pages/signup.php");
exit();

?>