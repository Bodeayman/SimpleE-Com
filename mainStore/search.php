<?php


session_start();

$hostname = "localhost";
$dbname = "users";
$password = "BODE@999BODE@999";
$username = "root";
$table = "products";
$WhoSigned = $_COOKIE["userName"];
$conn = mysqli_connect($hostname, $username, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $searchKey = $_POST["search"];
    $_SESSION["search"] = "select * from products where product_name like '%" . "$searchKey" . "%'";
    }

header("location:index.php");