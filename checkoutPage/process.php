<link rel="stylesheet" href="../bootstrap.min.css">
<?php

include_once(
    'connection.php'
);
$person = $_COOKIE["userName"];
$tableTemp = 'checkout';
$tableReport = 'records';
$sqlCurrent = "select * from userstable where naming = '$person' ";
$result = $conn->query($sqlCurrent);
$row = $result->fetch_assoc();
$current_person_id = $row['customer_id'];
$sqlTransfering = "select * from $tableTemp where buyer_id = $current_person_id";
$productsMovedToRecords = $conn->query($sqlTransfering);
while ($row = $productsMovedToRecords->fetch_assoc()) {
    $productName = $row['product'];
    $quantity = $row['quantity'];
    $dateofPur = $row['dateofPur'];
    $seller_id = $row['seller_id'];
    $buyer_id = $row['buyer_id'];
    $productId = $row['record_id'];
    $img = $row['product_image_rec'];
    $sqlInsertIntoRecords = "insert into records (record_id,product,quantity,dateofPur,seller_id,buyer_id,product_image_rec)

     values($productId,'$productName',$quantity,current_timestamp(),$seller_id,$buyer_id,'$img')";
    //the part of the date we need to update date() => up here
    $conn->query($sqlInsertIntoRecords);
    // So we here finsihed the part of transfering Time to delete
    $sqlDelete = "delete from checkout where record_id = $productId";
    $conn->query($sqlDelete);

    }

thanksforLogin();
function thanksforLogin()
    {
    echo <<<"Log"
        <div class="alert alert-success">Checkout Success</div>
        <div class="spinner-border" role="status" style="text-align: center; margin-left: 50%; margin-top: 10%;"><span class="visually-hidden text-warning">Loading...</span></div>
        Log;

    header("Refresh:2;url='index.php'");


    exit;
    }
