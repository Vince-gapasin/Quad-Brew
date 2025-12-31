<?php

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'signup' => $_SESSION['signup_error'] ?? ''
];

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

    <title>Login | Quad Brew</title>
    <link rel="icon" type="image/png" href="../assets/images/index/logofavicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="../assets/CSS/login.css">
</head>


<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a editable="inline" class="brand" href="login.php">Brew Quad Coffee</a>
        </div>
    </nav>

    <main class="row" style="min-height: 80vh;">

        <!-- Left side: text content here-->
        <div class="col-lg-6 d-flex flex-column p-5">

            <!-- Welcome text -->
            <div style="margin-top: -30px;">
                <h1 style="font-family: fantasy;">Welcome!</h1>
                <h2 style="font-family: cursive;">Brewing comfort, one cup at a time</h2>
            </div>


            <!-- What's your brew mood text-->
            <div class="d-flex flex-column justify-content-center brewmood mt-4 mb-auto">
                <h1 class="text-center">What's your brew mood today?</h1>
                <h4 class="text-center custom-heading"><strong>Order Now!</strong></h4>


                <!-- form eto about login-->
                <form action="../Backend/login_process.php" method="POST" class="w-75 mx-auto">
                    <?= showError($errors['login']); ?>
                    <div class="mb-3">
                        <input type="email" class="form-control custom-input" name="email" placeholder="Email:" required>
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control custom-input" name="password" placeholder="Password:" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="login" class="btn btn-login mb-3" style="font-family:'Times New Roman', Times, serif; font-weight:bold;">Log In</button>

                        <p style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">
                            Don't have an account? <a href="signup.php" class="text-dark fw-bold">Sign up</a>
                        </p>
                    </div>
                </form>

            </div>
        </div>

        <!-- Right side: image part cafe -->
        <div class="col-lg-6 d-none d-lg-block">
            <img src="../assets/images/login/cafelogin.png"
                alt="logincafe"
                class="img-fluid h-100 object-fit-cover">
        </div>

    </main>

</body>

</html>