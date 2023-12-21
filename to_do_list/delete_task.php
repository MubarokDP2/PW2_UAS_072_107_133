<?php
include("Config/db.php");
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Akun/masuk.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task_id'])) {
    $task_id = $_POST['task_id'];

    // // Lakukan sanitasi data jika diperlukan sebelum query
    $task_id = mysqli_real_escape_string($connection, $task_id);

    $query = "DELETE FROM todos WHERE id = '$task_id'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Task deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
} else {
    echo "Invalid task ID or task ID is missing.";
}
?>
