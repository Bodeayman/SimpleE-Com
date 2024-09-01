<?php
// this is the beginning of the php code
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST["logout"] == "Checkout") {
        setcookie("userName", $_COOKIE["userName"], strtotime("+1 months"));

        header("Location: ../checkoutPage/index.php");
    } else if ($_POST["logout"] == "Logout") {
        setcookie("userName", $_COOKIE["userName"], time() - 1);
        header("Refresh:1; url='index.php'");
    }
}

?>