<?php


session_start();


$dbname = "users";
$hostname = getenv("DB_HOST");
$password = getenv(name: "DB_PASSWORD");
$username = getenv(name: "DB_USER");
$table = "products";
$WhoSigned = $_COOKIE["userName"];
$conn = mysqli_connect($hostname, $username, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $searchKey = $_POST["search"];
    $_SESSION["search"] = "select * from products where product_name like '%" . "$searchKey" . "%'";
    }

header("location:index.php");