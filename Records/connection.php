<?php
$dbname = "users";
$hostname = getenv("DB_HOST");
$password = getenv(name: "DB_PASSWORD");
$username = getenv(name: "DB_USER");
$table = "survey";
$person = $_COOKIE['userName'];

$conn = mysqli_connect($hostname, $username, $password, $dbname);
