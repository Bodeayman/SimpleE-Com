<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checkout | <?php if (isset($_COOKIE["userName"])) {
            echo $_COOKIE["userName"];
            }
        ?></title>
        <link rel="stylesheet" href="../master.css">
        <link rel="stylesheet" href="mainRecords.css" />
        <link href="../bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">

    </head>


    <?php include '../components/navbar.php' ?>



    <div style="display:flex;flex-direction:column;text-align:center;justify-content:center;align-items:center;"
        class="m-5">
        <h3>Records</h3>
        <h5>Here you will find all the elements that you bought</h5>
    </div>
    <?php
    include_once "connection.php";
    $sqlCurrent = "select * from userstable where naming = '$person' ";
    $result = $conn->query($sqlCurrent);
    $row = $result->fetch_assoc();
    $current_person_id = $row['customer_id'];
    $sql = "select * from records where buyer_id = $current_person_id";
    $allProducts = $conn->query($sql);
    echo "<div class='products'>";
    if ($allProducts->num_rows) {
        while ($row = $allProducts->fetch_assoc()) {
            $productName = $row['product'];
            $quantity = $row['quantity'];
            $dateofPur = $row['dateofPur'];
            $seller_id = $row['seller_id'];
            $buyer_id = $row['buyer_id'];
            $img = $row["product_image_rec"];
            echo <<<"div"
                    <div class='singlePro'>
                        <img class='productImg' src='../loginPage/uploads/products/$img' style="width:75%;height:75%;">
                        <div class='nameAndPrice'> 
                            <div>
                                $productName
                            </div>
                            <div>
                                Quantity = $quantity
                            </div>
                            <div>
                            Bought in $dateofPur
                            </div>
                            <div>
                            The Seller $seller_id
                            </div>
                        </div>  
                    </div> 
                    div;
            }

        } else {
        echo <<<"No"
                <div class='text-center'>
                <h2>There are no products that you bought </h2>
                </div>
                No;
        }


    echo "</div>";
    ?>


    <?php include '../components/footer.php' ?>

    </div>


    <script src="../avaterCheck.js"></script>
    <script src="../bootstrap.bundle.min.js"></script>


    </body>

</html>