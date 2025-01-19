<?php
require "db-connection.php";
//$conn = new mysqli($servername, $username, $password, $dbname);
// Перевірка з'єднання  
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$charset = $conn -> character_set_name (); 
printf ( "Поточне кодування - %s\n" , $charset );

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
     // output data of each row
     while ($row = $result->fetch_assoc()) {
         echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " ";
     }
 } else {
     echo "0 results";
 } 
 
 $conn->close();