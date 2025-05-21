<?php
// vulnerable_sql.php

$conn = new mysqli("localhost", "user", "password", "database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_GET['user_id'];  // UNSAFE: user input directly used in query

$sql = "SELECT * FROM users WHERE id = $user_id";  // vulnerable to SQL Injection
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "User: " . $row["username"] . "<br>";
    }
} else {
    echo "No user found";
}

$conn->close();
?>