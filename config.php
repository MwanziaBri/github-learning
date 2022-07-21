<?php
// Connecting the app and the database

$conn = new mysqli("localhost", "root", "brian", "cart");
if ($conn->connect_error) {
    die("Connection Failed!" . $conn->connect_error);
}

$stmt = $conn->prepare('SELECT * FROM products');
$stmt->execute();
$result = $stmt->get_result();
