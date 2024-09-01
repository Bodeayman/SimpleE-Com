<?php

$dbname = "users";
$hostname = "localhost";
$username = "root";
$table = "usersTable";
$password = "BODE@999BODE@999";
$person = $_COOKIE['userName'];
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $survey = $_POST["surveyText"];
    $sql = "update $table set surveyText = $survey where naming = $person";
    if ($conn->query($sql)) {
        echo <<<"Java"
        <script>
        window.alert("Your feedback has been sent successfully");
        </script>
        Java;
    } else {
        echo <<<"Java"
        <script>
        window.alert("Your feedback isn't sent , Try again");
        </script>
        Java;
    }


}




?>