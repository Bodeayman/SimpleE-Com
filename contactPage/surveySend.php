<link rel="stylesheet" href="../bootstrap.min.css">
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
    $sql = "insert into survey (survey_id, surveyText,person_id ) values (" . rand(0, 10000) . ",'$survey',$resultFirst)";
    $conn->query($sql);
    thanksforLogin();


    }



function thanksforLogin()
    {
    echo <<<"Log"
        <div class="alert alert-success">Your Comment was sent thank you</div>
        <div class="spinner-border" role="status" style="text-align: center; margin-left: 50%; margin-top: 10%;"><span class="visually-hidden text-warning">Loading...</span></div>
        Log;

    header("Refresh:1;url='index.php'");


    exit;
    // the Refresh will work after the login and register success message with 3 sedconds

    }

?>
<script src="bootstrap.bundle.min.js"></script>