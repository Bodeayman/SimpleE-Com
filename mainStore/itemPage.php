<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Commerce</title>
        <link rel="stylesheet" href="mainS.css">
        <link rel="stylesheet" href="../master.css">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
    </head>

    <body>

        <?php include '../components/navbar.php' ?>


        <?php


        $id = urldecode($_GET['id']); // get the id from the link
        
        $hostname = "localhost";
        $dbname = "users";
        $password = "BODE@999BODE@999";
        $username = "root";
        $table = "products";
        $WhoSigned = $_COOKIE["userName"];
        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        $sql = "select * from products join userstable on userstable.customer_id  = products.person_id where product_id = '$id' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $proFetchN = $row['product_name'];
        $proFetchP = $row['product_price'];
        $proFetchD = $row['naming'];
        $proFetchI = $row['product_id'];
        $proFetchx = $row['product_image'];
        $proSeller = $row['person_id'];
        $found = true;
        if (
            $row['product_quantity'] > 0 && ($proFetchD != $WhoSigned)
        ) {
            $proFetchS = $row['product_quantity'];
            } else {
            $proFetchS = "You can't buy it right now either you'r the dealer or the item is out of stock";
            $found = false;
            }
        if ($found) {
            $buyingButton = '        
                <button class="buyElement btn btn-success">
                    Buy the product
                </button>';
            } else {
            $buyingButton = '';
            }

        echo <<<"ItemPage"
        <div style='display:flex;flex-direction:row;align-items:center;' class='itemPage'>
            <div>
                <img src="../loginPage/uploads/products/$proFetchx" style="width:350px;height:350px;border:5px solid black">
            </div>
            <div>    
                <div>
                    <h2>$proFetchN</h2>
                </div>
                <div>
                <p>The owner of this product is : $proFetchD  </p>
                    <p>The price of this product : $proFetchP$ </p>
                    <p>The remaining of the elements is : <span style='font-weight:bold;'>$proFetchS<span> </p>
                </div>
                <div>
                    $buyingButton
                </div>
            </div>
        </div>
        ItemPage;
        ?>


        <?php include '../components/footer.php' ?>

        <script src="../avaterCheck.js"></script>
        <!-- <script src="main.js"></script> -->
        <script src="../bootstrap.bundle.min.js"></script>
        <script>
            let buy = document.querySelector(".buyElement");
            buy.addEventListener("click", () => {
                let productIdToBuy = window.location.href.split("?")[1].substring(3);
                window.location.href = `buyProduct.php?id=${productIdToBuy}`;


            });
        </script>
    </body>

</html>