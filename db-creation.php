<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
// Створення з'єднання
$conn = mysqli_connect($servername, $username, $password);
// Перевірка з'єднання
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// Створення бази даних
//$sql = "CREATE DATABASE dbtest2024";
$sql = "CREATE DATABASE dbtest24 CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);