<?php
$db_server = "group14_webprogramming-db-1";
$db_user = "root";
$db_pass = "password";
$db_name = "wp_db";

// Attempt to connect to the database
try {
    $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
} catch (Exception $e) {
    echo "Could not connect to the database. Error: " . $e;
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>