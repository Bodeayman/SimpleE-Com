<?php

$dbname = "users";
$hostname = "localhost";
$username = "root";
$table = "survey";
$password = "BODE@999BODE@999";
$person = $_COOKIE['userName'];

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sqlFinding = "select * from userstable where naming = '$person'";
    $resultFirst = mysqli_query($conn, $sqlFinding)->fetch_assoc()["customer_id"];
    $survey = $_POST["surveyText"];
    $sql = "insert into survey (surveyText,survey_id ) values ('$survey','$resultFirst')";
    $conn->query($sql);
    header("location:index.php");
    // surveyText surveyText
    //     echo <<<"Java"
    //     <script>
    //     window.alert("Your feedback has been sent successfully");
    //     </script>
    //     Java;
    // } else {
    //     echo <<<"Java"
    //     <script>
    //     window.alert("Your feedback isn't sent , Try again");
    //     </script>
    //     Java;
    // }


}




?>