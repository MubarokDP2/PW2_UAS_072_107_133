<?php
$servername = "localhost"; // Change this to your database server name if different
$username = "root@localhost"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "your_database_name"; // Replace with your database name

// Create connection
$connection = mysqli_connect("localhost", "root", "","to_do_list");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
