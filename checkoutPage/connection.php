<?php
$dbname = "users";

$table = "survey";
$hostname = getenv("DB_HOST");
$password = getenv(name: "DB_PASSWORD");
$username = getenv(name: "DB_USER");

$conn = mysqli_connect($hostname, $username, $password, $dbname);
