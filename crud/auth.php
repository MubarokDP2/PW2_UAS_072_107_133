<?php
session_start();



# Check if the user is not logged in, then redirect to login
if (!isset($_SESSION["loggedin"])) {
    header("Location: ./login.php");
    exit();
}
?>
