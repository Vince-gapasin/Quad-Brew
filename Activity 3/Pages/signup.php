<?php
session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'signup' => $_SESSION['signup_error'] ?? ''
];

// Add this line to capture success message
$signupSuccess = $_SESSION['signup_success'] ?? '';

$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm){
    return $formName === $activeForm ? 'active' : '';
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up | Quad Brew</title>
    <link rel="icon" type="image/png" href="../assets/images/index/logofavicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="../assets/CSS/signup.css">
</head>

<body>

    <nav class="navbar">
        <div class="container-fluid">
            <a editable="inline" class="brand" href="signup.php">Brew Quad Coffee</a>
        </div>
    </nav>

    <main class="row align-items-center" style="min-height: 80vh;">
        <div class="cofbag col-lg-3 d-none d-lg-block text-end">
            <img src="../assets/images/signup/brown coffee.png" alt="Coffee&Bag" class="img-fluid" style="max-height: 300px;">
        </div>

        <div class="signup col-md-12 col-lg-6 text-center">
            <h1 class="mb-3 mt-5">Sign Up</h1>
             

            <form action="../Backend/signup_process.php" method="POST" class="w-75 mx-auto">
                <?= showError($errors['signup']); ?>
                <div class="mb-3">
                    <input type="text" class="form-control custom-input" name="full_name" placeholder="Full Name:" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control custom-input" name="email" placeholder="Email:" required>
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control custom-input" name="phone_number" placeholder="Phone Number:" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control custom-input" name="password" placeholder="Password:" required>
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control custom-input" name="address" placeholder="Address:" required>
                </div>
                <button type="submit" name="signup" class="btn btn-signup mb-3">Sign Up</button>
            </form>

            <p class="mt-2">
                Already have an account? <a href="login.php" class="text-dark fw-bold">Log in</a>
            </p>
        </div>

        <div class="broom col-lg-3 d-none d-lg-block text-start">
            <img src="../assets/images/signup/top coffee.png" alt="broom" class="img-fluid" style="max-height: 300px;">
        </div>
    </main>

    <div id="statusPopup" class="popup-overlay" style="display: none;">
        <div class="popup-content">
            <h2 id="popupTitle">Notification</h2>
            <p id="popupMessage"></p>
            <button type="button" class="close" onclick="closePopup()">Close</button>
        </div>
    </div>

    <script>
        // Get messages from PHP
        const errorMessage = "<?= addslashes($errors['signup']) ?>";
        const successMessage = "<?= addslashes($signupSuccess) ?>";
        
        const popup = document.getElementById('statusPopup');
        const title = document.getElementById('popupTitle');
        const msg = document.getElementById('popupMessage');

        // Logic to show popup
        if (errorMessage) {
            title.innerText = "Ooops!";
            title.style.color = "#d9534f"; // Red color
            msg.innerText = errorMessage;
            popup.style.display = 'flex';
        } else if (successMessage) {
            title.innerText = "Success!";
            title.style.color = "#1fc10d"; // Green color
            msg.innerText = successMessage;
            popup.style.display = 'flex';
        }

        function closePopup() {
            popup.style.display = 'none';
            // Optional: Redirect to login if signup was successful
            if (successMessage) {
                window.location.href = 'login.php';
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>