<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>

    <!--logo favicon-->
    <link rel="icon" type="image/png" href="../assets/images/index/logofavicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="../assets/CSS/index.css">
</head>

<body>
    <header>

        <nav class="navbar">
            <div class="container-fluid">
                <a editable="inline" class="brand" href="index.php">Brew Quad Coffee</a>

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
                                        </ul>
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

        <main>
            <div class="container-fluid">

                <div class="categ row">
                    <div class="bdy-txt1 col-lg-4 text-start ">Featured Drinks
                        <p class="text-start">Enjoy your drink at your place</p>
                        <a href="coffee.php" class="ordr-btn btn btn-success">Order Now</a>
                    </div>

                    <div class="pics col-md-2 text-center"><img src="../assets/images/index/latte.png" alt="Iced Latte" width="180px" height="300px">
                        <div class="product-name">Coffee</div>
                    </div>
                    <div class="pics col-md-2 text-center"><img src="../assets/images/index/dragonfruit.png" alt="Dragon Fruit" width="200px" height="360px">
                        <div class="product-name">Milktea</div>
                    </div>
                    <div class="pics col-md-2 text-center"><img src="../assets/images/index/chocolate.png" alt="Chocolate" width="200px" height="360px">
                        <div class="product-name">Frappe</div>
                    </div>
                    <div class="pics col-md-2 text-center"><img src="../assets/images/index/GreenApple.png" alt="Green Apple" width="200px" height="360px">
                        <div class="product-name">Fruit Tea</div>
                    </div>
                </div>

            </div>
        </main>
    </header>

    <footer>
        <div class="container-fluid">
            <div class="row text-start">

                <div class="col-md-4">
                    <img src="../assets/images/index/brewlogodark.png" alt="logo" width="140" height="120" class="align-middle me-1 img-fluid">
                </div>

                <div class="col-md-5 align-self-end">
                    <p>©2025 All Rights Reserved. BrewQuadCoffee Food and Beverages Inc.</p>
                </div>

                <div class="col-md-3"></div>
            </div>
        </div>
    </footer>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>