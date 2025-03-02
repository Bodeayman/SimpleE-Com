<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add new Product</title>
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="stylesheet" href="../master.css">
        <link rel="stylesheet" href="newproduct.css">

    </head>

    <body>
        <?php include("../components/navbar.php"); ?>
        <div class="checkoutPage">
            <h2>
                Hello <?php echo $_COOKIE["userName"] ?> You want to add new Products?
            </h2>
        </div>
        <div class="buyingDiv">
            <form class="container" action="sellpro.php" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="Enter the name of the product" name="productName">
                <input type="number" placeholder="Enter the product price" name="productPrice">
                <input type="number" placeholder="Enter the number that you have" name="productQuantity">
                <input type="file" placeholder="Enter the image for your product" name="image" accept="image">
                <input type="submit" value="Sell you product" class="btn btn-success">
            </form>
        </div>

        <?php include "../components/footer.php"; ?>


        <script src="../avaterCheck.js"></script>
        <script src="../bootstrap.bundle.min.js"></script>
    </body>

</html>