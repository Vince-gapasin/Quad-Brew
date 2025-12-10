<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="../assets/CSS/thankyou.css">
</head>
<body>
    
    <nav class="navbar ">
        <div class="container-fluid">
            <a editable="inline" class="navbar-brand text-black ms-3" href="index.php">>Back</a>

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
            <img src="../assets/images/index/coffee&bag.png" alt="Coffee&Bag" height="250px" >
        </div>
        
        <div class="cart col-md-6">

            <div class="row justify-content-center">
                <div class="loading1 col-md-3 text-center">✔</div>
                <div class="string col-md-1"></div>
                <div class="loading col-md-3"></div>
                <div class="string col-md-1"></div>
                <div class="loading col-md-3"></div>
            </div>

            <div class="row justify-content-center">
                <div class=" col-md-3 text-center">Order Placed</div>
                <div class=" col-md-3 text-center">Preparing</div>
                <div class=" col-md-3 text-center">Delivery</div>
            </div>

            <div class="order row mt-3">
                <div class="col-md-6">Order #SMLS56</div>
                <div class="col-md-6 text-end">View Your Order</div>
            </div>

            <div class="box">
                <div class="info row text-center">
                    <div class="col-md-4">Receipt</div>
                    <div class="col-md-4">Brew Quad Coffee</div>
                    <div class="col-md-4">xx-xx-2025</div>
                </div>

                    <div class="row ps-7">1 Iced Latte</div>
                    <div class="row ps-7">2 Straberry</div>

                    <div class="row ps-5 mt-3">Shipping Address</div>
                    <div class="row ps-5">Mode of Payment</div>
                    <div class="row ps-5">Total</div>
            </div>

            <div class="thankyou row mt-2 justify-content-center">Thank You</div>
            <div class="row col-md-4 justify-content-center mx-auto mt-3">
                <button class="back checkout-btn3 btn btn-success"><a href="index.php">Back to Home</a></button>
            </div>

        </div>
        <div class="broom col-lg-3 align-self-end">
            <img src="../assets/images/index/broom.png" alt="broom" height="230px" >
        </div>
    </main>
</body>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>