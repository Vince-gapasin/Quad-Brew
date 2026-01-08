<?php
session_start(); // Start session to handle data flow
include("../Backend/db.php");

// 1. IMPROVED QUERY: Ideally, you should filter by session_id or user_id here.
$result = mysqli_query($conn, "SELECT * FROM cart");

$total_price = 0; // Initialize total variable
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Quad Brew</title>
    <link rel="icon" type="image/png" href="../assets/images/index/logofavicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="../assets/CSS/cart.css">
    <script src="../assets/JS/add_to_cart.js" defer></script>
</head>

<body>

    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand text-black ms-3" href="coffee.php">&lt; Back to Menu</a>
        </div>
    </nav>

    <main class="row">
        <div class="coffeeart col-lg-3 align-self-end d-none d-lg-block">
            <img src="../assets/images/index/CoffeeArt.png" alt="coffeeart" class="img-fluid" style="max-height: 250px;">
        </div>

        <div class="cart col-md-12 col-lg-6 text-center">

            <div class="row justify-content-center mb-3 fw-bold d-none d-md-flex">
                <div class="col-md-3">Product</div>
                <div class="col-md-2">Price</div>
                <div class="col-md-3">Quantity</div>
                <div class="col-md-2">Subtotal</div>
                <div class="col-md-1"></div>
            </div>

            <div class="row justify-content-center">
                <div class="list overflow-x-hidden overflow-y-auto">

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $qty = isset($row['quantity']) ? $row['quantity'] : 1;
                            $subtotal = $row['price'] * $qty;
                            $total_price += $subtotal;
                    ?>

                            <div class="item row align-items-center border-bottom py-2">

                                <div class="col-md-1">
                                    <form action="../Backend/remove_item.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" class="btn btn-danger btn-sm">x</button>
                                    </form>
                                </div>

                                <div class="col-md-3 d-flex align-items-center flex-column flex-md-row">
                                    <img src="../assets/images/menu/<?php echo htmlspecialchars($row['image']); ?>" class="product-img img-fluid m-2">
                                    <div class="product-name small"><?php echo htmlspecialchars($row['name']); ?></div>
                                </div>

                                <div class="price-tag col-md-2">₱<?php echo htmlspecialchars($row['price']); ?></div>

                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                    <button class="qty-btn btn btn-sm btn-outline-secondary" onclick="updateQty(<?php echo $row['id']; ?>, 'minus')">-</button>
                                    <span class="qty-number mx-2" id="qty-<?php echo $row['id']; ?>"><?php echo $qty; ?></span>
                                    <button class="qty-btn btn btn-sm btn-outline-secondary" onclick="updateQty(<?php echo $row['id']; ?>, 'plus')">+</button>
                                </div>

                                <div class="col-md-2">₱<?php echo number_format($subtotal, 2); ?></div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "<p class='mt-5'>Your cart is empty.</p>";
                    }
                    ?>
                </div>

                <div class="payment row mt-4 p-3 bg-light rounded">
                    <div class="col-md-12 text-end mb-3">
                        <h3>Total: ₱<?php echo number_format($total_price, 2); ?></h3>
                    </div>

                    <div class="col-md-12 text-start">
                        <h5>Payment Method</h5>

                        <form id="checkoutForm" action="thankyou.php" method="POST">
                            <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment-method" id="credit" value="Credit Card" checked>
                                <label class="form-check-label" for="credit">Credit Card</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment-method" id="paypal" value="Paypal">
                                <label class="form-check-label" for="paypal">Paypal</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment-method" id="otc" value="Over The Counter">
                                <label class="form-check-label" for="otc">Over The Counter</label>
                            </div>
                        </form>
                    </div>

                    <div class="row mt-4 g-2">
                        <div class="col-md-4">
                            <form action="../Backend/clear_cart.php" method="post">
                                <button type="submit" class="btn btn-danger w-100">Clear Cart</button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <a href="coffee.php" class="btn btn-primary w-100">Add Items</a>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" form="checkoutForm" class="btn btn-success w-100"
                                <?php if ($total_price <= 0) echo "disabled"; ?>>
                                Checkout
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="barista col-lg-3 align-self-end d-none d-lg-block">
            <img src="../assets/images/index/barista.png" alt="barista" class="img-fluid" style="height: 250px;">
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>