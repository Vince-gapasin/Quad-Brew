<?php

    include_once("Backend/db.php");

    $result = mysqli_query($conn, "SELECT * FROM products");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    while($row = mysqli_fetch_assoc($result)){
        echo "<div>";
        echo "<img src='assets/images/menu/" . $row['image'] . "' class='product-img img-fluid mb-2'>";
        echo "<div class='product-name'>" . $row['name'] . "</div>";
        echo "<div class='price-tag mt-1'>₱" . $row['price'] . "</div>";
        echo "<button class='btn btn-success btn-sm mt-2'>Add to cart</button>";
        echo "</div>";
    }
    ?>

</body>
</html>