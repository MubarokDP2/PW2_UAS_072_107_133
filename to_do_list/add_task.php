<?php
include("Config/db.php");
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Akun/masuk.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {
    $task = $_POST['task'];
    $query = "INSERT INTO todos (todo) VALUES ('$task')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Task added successfully!";
    } else {
        echo "Failed to add task.";
    }
} else {
    echo "Invalid request.";
}
?>