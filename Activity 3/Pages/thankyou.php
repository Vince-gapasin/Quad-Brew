<?php
session_start(); // Start session to retrieve data
include("../Backend/db.php");

$result = mysqli_query($conn, "SELECT * FROM cart");
$ress = mysqli_query($conn, "SELECT * FROM users");

// Check if form was submitted from cart.php and store in session
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Store Payment Method
    if (isset($_POST['payment-method'])) {
        $_SESSION['payment_method'] = $_POST['payment-method'];
    }

    // 2. Store Total Price
    if (isset($_POST['total_price'])) {
        $_SESSION['total_price'] = $_POST['total_price'];
    }

    // 3. GENERATE RANDOM ORDER ID (This was missing)
    // Generates a random number between 100000 and 999999 prefixed with QB-
    $random_id = "QB-" . rand(100000, 999999);
    $_SESSION['order_id'] = $random_id;
}

// Retrieve values from session (default to empty/0 if not set)
// ... existing code ...
$active_payment = isset($_SESSION['payment_method']) ? $_SESSION['payment_method'] : "Not Selected";
$final_total = isset($_SESSION['total_price']) ? $_SESSION['total_price'] : 0;
// Retrieve the ID we just generated
$order_id = isset($_SESSION['order_id']) ? $_SESSION['order_id'] : "#QB-000000";

// --- ADD THIS LINE BELOW ---
$address = isset($_SESSION['address']) ? $_SESSION['address'] : "Address not available";
// ---------------------------
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placed</title>

    <link rel="icon" type="image/png" href="../assets/images/index/logofavicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="../assets/CSS/thankyou.css">
</head>

<body>

    <nav class="navbar ">
        <div class="container-fluid">
            <form action="../Backend/clear_cart.php" method="post">
                <button type="submit" class="navbar-brand text-black ms-3" href="index.php">Back</button>
            </form>

            <h1 class="myCart">Order Placed</h1>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-logo"></span>
            </button>

            <div class="offcanvas offcanvas-end p-2 bg-light" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <div class="lc-block">
                        <div editable="rich">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        </div>
                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="row">
                        <div class="col">
                            <div class="lc-block mb-4">
                                <div lc-helper="shortcode" class="live-shortcode me-auto">
                                    <ul id="menu-menu-1" class="navbar-nav">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-32739"><a href="#" class="nav-link ">Home</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home nav-item nav-item-32738"><a href="#" class="nav-link ">Menu</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="row">
        <div class="cofbag col-lg-3 align-self-end" height="100%">
            <img src="../assets/images/index/coffee&bag.png" alt="Coffee&Bag" height="250px">
        </div>

        <div class="cart col-md-6">

            <div class="row justify-content-center">
                <div class="loading1 col-md-3 text-center">✔</div>
                <div class="string col-md-3"></div>
                <div class="loading col-md-3"></div>
            </div>

            <div class="row justify-content-center">
                <div class="move col-md-3 text-center">Order Placed</div>
                <div class="move col-md-3 text-center">Preparing</div>
            </div>

            <div class="order row mt-3">
                <div class="col-md-6">Order #<?php echo htmlspecialchars($order_id); ?></div>
                <div class="col-md-6 text-end">View Your Order</div>
            </div>

            <div class="box">
                <div class="info row text-center">
                    <div class="col-md-4">Receipt</div>
                    <div class="col-md-4">Brew Quad Coffee</div>
                    <div class="col-md-4"><?php echo date("m-d-Y"); ?></div>
                </div>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="row align-items-center">
                            <div class="product-name small col-md-3 text-center ms-5"><?php echo htmlspecialchars($row['id']); ?></div>
                            <div class="product-name small col-md-3 text-start"><?php echo htmlspecialchars($row['name']); ?></div>
                        </div>

                <?php
                    }
                }
                ?>

                <div class="row mt-3 ps-5 fw-bold">Shipping Address: <?php echo htmlspecialchars($address); ?></div>
                
                <div class="row ps-5 fw-bold">Mode of Payment: <?php echo htmlspecialchars($active_payment); ?></div>
                <div class="row ps-5 fw-bold">Total Paid: ₱<?php echo number_format($final_total, 2); ?></div>
            </div>

            <div class="thankyou row mt-2 justify-content-center">Thank You</div>

            <div class="row col-md-4 justify-content-center mx-auto mt-3">
                <form action="../Backend/clear_cart.php" method="post">
                    <button type="submit" class="back checkout-btn3 btn btn-success w-100">Back to Home</button>
                </form>
            </div>

        </div>
        <div class="broom col-lg-3 align-self-end">
            <img src="../assets/images/index/broom.png" alt="broom" height="230px">
        </div>
    </main>
</body>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>