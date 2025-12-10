<?php include("../Backend/db.php");
    $result = mysqli_query($conn,"SELECT * FROM products WHERE category = 'praf'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew Quad Coffee – Products</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/CSS/style.css">
</head>

<body>

<!-- NAVIGATION -->
<?php include('nav.php'); ?>
<!-- END NAV -->

<p class="text-center mt-4 section-title">ICED COFFEE</p>

<div class="container mt-5 p-5">
    <div class="row justify-content-center text-center">

        <!-- Item 1 -->
        <div class="row">
            <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-3">
                <img src="../assets/images/menu/<?= htmlspecialchars($row['image']) ?>" class="product-img img-fluid mb-2">
                <div class="product-name"><?= htmlspecialchars($row['name']) ?></div>
                <div class="price-tag mt-1">$<?= htmlspecialchars($row['price']) ?></div>
                <button class="btn btn-success btn-sm mt-2" id="addtocart"><a href="cart.php" style="text-decoration: none; color: inherit;">Add to cart</a></button>
            </div>
            <?php
        }
        ?>
        </div>
            
        
    </div>
</div>

<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>