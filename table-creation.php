<?php
require "db-connection.php";
// Створення з'єднання
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Перевірка з'єднання
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// запит SQL для створення таблиці
$sql = "CREATE TABLE MyGuests (
id INT AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);