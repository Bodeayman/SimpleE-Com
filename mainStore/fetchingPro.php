<?php
session_start();

// this is the php code information
$hostname = "localhost";
$dbname = "users";
$password = "BODE@999BODE@999";
$username = "root";
$table = "products";
$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (isset($_COOKIE['userName'])) {
    $WhoSigned = $_COOKIE["userName"];

    if (!isset($_SESSION["search"])) {
        $sql = "select * from products join userstable on userstable.customer_id  = products.person_id ";
        } else {
        $sql = $_SESSION["search"];
        }
    $result = $conn->query($sql);

    echo "<div class='products'>";
    while ($row = $result->fetch_assoc()) {

        $proFetchImg = $row["product_image"];
        if ($proFetchImg == null) {
            $proFetchImgLink = $imageTest;
            } else {
            $proFetchImgLink = "../loginPage/uploads/products/$proFetchImg";
            }
        $proFetchN = $row['product_name'];
        $proFetchP = $row['product_price'];
        $proFetchD = $row['person_id'];
        $proFetchS = $row['product_quantity'];
        $proFetchI = $row['product_id'];

        echo <<<"fetchingPro"
        <div class='singlePro' id='$proFetchI'>
            <img class='productImg' src='$proFetchImgLink' style="width:75%;height:75%;">
            <div class='nameAndPrice'> 
            <div>
                $proFetchN
    
            </div>
            <div>
                Price: $proFetchP$
            </div>
            </div>
                <div style='display:none;'>
            $proFetchD : $proFetchS : 
        </div>
        <div style='display:none;' id='$proFetchI'>
        $proFetchI
        </div>
        </div> 
    
        fetchingPro;
        }
    echo "</div>";
    } else {
    echo '<div class="container text-center">
    <div class="alert alert-danger" role="alert">
  You didn\'t sign in , please sign in
</div></div>';
    }

?>