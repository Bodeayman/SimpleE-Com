<?php
$dbname = "users";
$hostname = "localhost";
$username = "root";
$table = "survey";
$password = "BODE@999BODE@999";
$person = $_COOKIE['userName'];

$conn = mysqli_connect($hostname, $username, $password, $dbname);
