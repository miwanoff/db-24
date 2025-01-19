<?php
$db = new mysqli('localhost', 'root', '', 'dbtest2024');
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
$sql = "DROP DATABASE dbtest2024";

if (!$result = $db->query($sql)) {
    die('There was an error running the query [' . $db->error . ']');
}