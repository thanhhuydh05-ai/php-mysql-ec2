<?php

$host = "127.0.0.1";
$dbname = "website_db";
$username = "YOUR_DB_USER";
$password = "YOUR_DB_PASSWORD";

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {
    die("Database connection failed.");
}
?>
