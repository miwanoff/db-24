<?php

require "db-connection.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
try {
    $conn->query("UPDATE cities SET city_name = 'Берлін' WHERE city_name ='Берлин';");
} catch (Exception $e) {
    $e->getMessage();
}
mysqli_close($conn);