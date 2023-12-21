<?php
include("Config/db.php");
session_start();
$totalResult = null;

if (!isset($_SESSION['username'])) {
    header("Location: Akun/masuk.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="todolist.css">
    <title>To-Do List</title>
</head>
<body>
    <div class="container">
        <div class="todo-app">
            <h2>To-Do List</h2>
            <div class="row">
                <input type="text" id="input-box" placeholder="Add new task">
                <button onclick="addTask()">Add</button>
            </div>
            <ul id="list-container">
                
            </ul>
        </div>
    </div>
    <script src="todolist.js"></script>
</body>
</html>
