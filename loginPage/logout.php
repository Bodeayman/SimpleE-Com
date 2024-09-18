<link rel="stylesheet" href="../bootstrap.min.css">
<?php
session_start();

// this is the beginning of the php code
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST["logout"] == "Checkout") {


        header("Location: ../checkoutPage/index.php");
        } else if ($_POST["logout"] == "Logout") {
        setcookie("userName", $_COOKIE["userName"], time() - 1, "/");
        setcookie("userPhoto", $_COOKIE["userPhoto"], time() - 1, "/");
        session_unset();
        echo <<<"Log"
        <div class="alert alert-primary">Logging out Now</div>
        <div class="spinner-border" role="status" style="text-align: center; margin-left: 50%; margin-top: 10%;"><span class="visually-hidden text-warning">Loading...</span></div>
        Log;

        header("Refresh:1; url='index.php'");
        } else if ($_POST["logout"] == "NewItem") {
        header("Refresh:0; url = '../NewProduct/index.php'");
        } else if ($_POST["logout"] == "Record") {
        header("Refresh:0; url = '../Records/index.php");
        }
    }

?>