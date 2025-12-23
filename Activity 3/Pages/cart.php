<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <!--logo favicon-->
    <link rel="icon" type="image/png" href="../assets/images/index/logofavicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="../assets/CSS/cart.css">
    <script src="../assets/JS/add_to_cart.js"></script>
</head>

<body>

    <nav class="navbar ">
        <div class="container-fluid">
            <a editable="inline" class="navbar-brand text-black ms-3" href="coffee.php">>Back</a>

            <h1 class="myCart">MyCart - Work In Progress - for finals</h1>

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
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-32739"><a href="https://library.livecanvas.com/starters" class="nav-link ">BS5 Page Templates</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home nav-item nav-item-32738"><a href="https://library.livecanvas.com/sections/" class="nav-link ">BS5 Snippets</a></li>
                                    </ul> <!-- /lc_nav_menu -->
                                </div>


                            </div>
                            <div class="lc-block">
                                <a class="btn btn-primary" href="#" role="button">Buy Now</a>
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
        <div class="cart col-md-6 text-center">
            <div class="row col-md-12 justify-content-center ">
                <div class="name col-md-3    text-center">Product</div>
                <div class="name col-md-2 text-center">Price</div>
                <div class="name col-md-2 text-center">Quantity</div>
            </div>

            <div class="row justify-content-center">
                <div class="overflow-x-hidden overflow-y-scroll">

                    <div class="item row col-md-8 align-items-center">
                        <div class="col-md-1 text-end">
                            <button class="remove-btn btn btn-danger">x</button>
                        </div>
                        <div class="col-md-4 text-start">
                            <img src="../assets/images/index/GreenApple.png" alt="Green Apple" width="50px" height="80px" class="name">Fruit tea</img>
                        </div>
                        <div class="col-md-3 text-center">$4.00</div>
                        <div class="col-md-4 text-center">
                            <button class="qty-btn">-</button>
                            <span class="qty-number mx-2">1</span>
                            <button class="qty-btn">+</button>
                        </div>
                    </div>

                    <div class="item row col-md-8 align-items-center">
                        <div class="col-md-1 text-end">
                            <button class="remove-btn btn btn-danger">x</button>
                        </div>
                        <div class="col-md-4 text-start">
                            <img src="../assets/images/index/latte.png" alt="Iced Latte" width="50px" height="80px" class="name">Iced Latte</img>
                        </div>
                        <div class="col-md-3 text-center">$4.00</div>
                        <div class="col-md-4 text-center">
                            <button class="qty-btn">-</button>
                            <span class="qty-number mx-2">1</span>
                            <button class="qty-btn">+</button>
                        </div>
                    </div>

                </div>


                <div class="payment row">
                    <div class="col-md-12 text-start">
                        <h3>Payment Method</h3>
                    </div>

                    <div class="method row">
                        <div class="payment-method col-md-12 text-start">
                            <input type="radio" name="payment-method" value="credit-card"> Credit Card
                        </div>
                        <div class="payment-method col-md-12 text-start">
                            <input type="radio" name="payment-method" value="paypal"> Paypal
                        </div>
                        <div class="payment-method col-md-12 text-start">
                            <input type="radio" name="payment-method" value="cash-on-delivery"> Cash on Delivery
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="buttons col-md-4">
                            <button class="checkout-btn1 btn btn-danger"><a href="coffee.php">Clear Shopping Cart</a></button>
                        </div>
                        <div class="buttons col-md-4">
                            <button class="checkout-btn2 btn btn-primary"><a href="coffee.php">Add Another Order</a></button>
                        </div>
                        <div class="buttons col-md-4">
                            <button class="checkout-btn3 btn btn-success"><a href="conf.php">Proceed to Checkout</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="broom col-lg-3 align-self-end">
            <img src="../assets/images/index/broom.png" alt="broom" height="230px">
        </div>
    </main>
</body>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>