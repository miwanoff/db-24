<?php
require "db-connection.php";
require "tables-names.php";

if (! $conn) {
    die("Connection failed: " . mysqli_connect_error());
}

try {
    $sql1   = "SELECT user_id, name,  last_updated, date_created,  DATE_FORMAT(NOW(),'%b %d %Y %h:%i %p') AS PerDate  FROM $users";
    $result = $conn->query($sql1);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["user_id"] . "\nName: " . $row["name"] . "\nlast_updated:" . $row["last_updated"] . "\ndate_created:" . $row["date_created"] . "\nNOW:" . $row["PerDate"] . "
";
        }
    } else {
        echo "0 results";
    }
} catch (Exception $e) {
    $e->getMessage();
}
mysqli_close($conn);