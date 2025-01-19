<?php

require "db-connection.php";
require "tables-names.php";

if (! $conn) {
    die("Connection failed: " . mysqli_connect_error());
}

try {
    //$conn->query("DROP TABLE IF EXISTS MyDate;");
    $sql = "CREATE TABLE $users (user_id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(30) NOT NULL, last_updated DATE, date_created DATETIME);";
    $conn->query($sql);
    $sql1 = "INSERT INTO  $users (user_id, name, last_updated,  date_created  ) VALUES (5, 'alvin', now(), '2021/01/19' );";
    $conn->query($sql1);
} catch (Exception $e) {
    $e->getMessage();
}
mysqli_close($conn);