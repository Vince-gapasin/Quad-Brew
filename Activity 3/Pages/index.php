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
            
                <li class="nav-links" style="list-style-type: none;">
                    <a href="#" onclick="openLogoutPopup(); return false;">
                        <img src="../assets/images/index/logoutwhite.png" alt="Logout" width="30" height="30">
                    </a>
                </li>
            </div>

            <div id="logoutModal" class="logout-modal">
                <div class="modal-content">
                    <h3>Confirm Logout</h3>
                    <p>Are you sure you want to log out?</p>
                    <div class="modal-buttons">
                        <button onclick="confirmLogout()" class="btn-yes">Yes, Logout</button>
                        <button onclick="closeLogoutPopup()" class="btn-no">Cancel</button>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            <div class="container-fluid">

                <div class="categ row">
                    <div class="bdy-txt1 col-lg-4 text-start ">Featured Drinks
                        <p class="text-start">Sip and enjoy at your own pace</p>
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

        <script>
        // Function to show the popup
        function openLogoutPopup() {
            // Change display from 'none' to 'flex' to show it
            document.getElementById("logoutModal").style.display = "flex";
        }

        // Function to close the popup
        function closeLogoutPopup() {
            document.getElementById("logoutModal").style.display = "none";
        }

        // Function to actually log out
        function confirmLogout() {
            // REPLACE 'logout.php' with the actual path to your logout script
            window.location.href = "login.php";
        }

        // Optional: Close modal if user clicks outside the box
        window.onclick = function(event) {
            var modal = document.getElementById("logoutModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>