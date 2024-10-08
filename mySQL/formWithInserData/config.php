<?php
// Database connection variables
$host = "localhost";
$userName = "root"; // By default MySQL username.
$password = null; // By default MySQL password.
$dbname = "students"; // Database name.

// Create connection with PDO
try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    echo "Connection failed. Please try again later.";
    exit();
}

?>