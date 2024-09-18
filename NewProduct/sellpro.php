<?php
session_start();

// this is the php code information
$hostname = "localhost";
$dbname = "users";
$password = "BODE@999BODE@999";
$username = "root";
$table = "products";
$WhoSigned = $_COOKIE["userName"];
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if ($conn) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productQ = $_POST['productQuantity'];
        // 

        $productImgName = $_FILES["image"]['name'];
        $productImgTemp = $_FILES["image"]['tmp_name'];

        $profileImageExt = array("jpg", "jpeg", "png", "gif");
        // $profileImageExten = strtolower(end(explode('.', $profileImageName)));
        $productNameA = rand(0, 100000) . "_" . $productImgName;
        move_uploaded_file($productImgTemp, "../loginPage/uploads/products/" . $productNameA);
        // 
        $listArgs = array($productImgName, $productImgTemp, $productNameA);

        $sqlfindId = "SELECT customer_id from userstable where naming = '$WhoSigned'";
        $result = $conn->query($sqlfindId);
        $person_id = $result->fetch_assoc()['customer_id'];

        $sqlInsert = "INSERT INTO products (product_id,	person_id,product_name,product_price,product_quantity,product_image) values (" . rand(0, 10000) . ", 
        '$person_id','$productName','$productPrice','$productQ','$productNameA')";
        $selling = $conn->query($sqlInsert);
        header("Location: ../index.php");
    }

} else {
    header("Location: index.php");
}