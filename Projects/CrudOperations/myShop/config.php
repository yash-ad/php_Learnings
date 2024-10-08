<?php
// MySQL connection using MySQLi

// 1: Variables Initialization
$host = "localhost";
$username = 'root';
$password = null;
$database = "myshop";

// 2: Create connection with MySQLi class
$connection = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);  // Use a user-friendly error message in production
} else {
    // echo "Connected successfully";
}

// Query execution
$result = $connection->query("SHOW TABLES");

