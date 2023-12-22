<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include('auth.php');


# Check if the user is not logged in, then redirect to login
if (!isset($_SESSION["loggedin"])) {
  header("Location: ./login.php");
  exit();
}

# Include the connection
require_once "./connect.php";

# Check if the user is not logged in and doesn't have a session, then redirect to login
if (!isset($_SESSION["username"])) {
  header("Location: ./login.php");
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login system</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
  <style>
    body {
      background-color: #fff5e1;
      color: #333;
    }

    .container {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      margin-top: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table td,
    table th {
      vertical-align: middle;
      text-align: center;
      padding: 10px;
      background-color: #f2e4c6;
      color: #333;
    }

    /* Hapus gaya tabel bawaan Bootstrap */
    table {
      margin-bottom: 0;
    }
  </style>

</head>

<body>
  <div class="container my-4">
    <header class="d-flex justify-content-between my-4">
      <h1>Book List</h1>
      <div>
        <a href="create.php" class="btn btn-primary">Add New Book</a>
        <a href="logout.php" class="btn btn-danger">Logout</a> <!-- Tambahkan tombol logout -->
      </div>
    </header>

    <?php
    if (isset($_SESSION["create"])) {
    ?>
      <div class="alert alert-success">
        <?php
        echo $_SESSION["create"];
        ?>
      </div>
    <?php
      unset($_SESSION["create"]);
    }
    ?>
    <?php
    if (isset($_SESSION["update"])) {
    ?>
      <div class="alert alert-success">
        <?php
        echo $_SESSION["update"];
        ?>
      </div>
    <?php
      unset($_SESSION["update"]);
    }
    ?>
    <?php
    if (isset($_SESSION["delete"])) {
    ?>
      <div class="alert alert-success">
        <?php
        echo $_SESSION["delete"];
        ?>
      </div>
    <?php
      unset($_SESSION["delete"]);
    }
    ?>

    <?php
    include('connect.php');
    $sqlSelect = "SELECT * FROM books";
    $result = mysqli_query($conn, $sqlSelect);
    ?>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Author</th>
          <th>Type</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($data = mysqli_fetch_array($result)) {
        ?>
          <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['title']; ?></td>
            <td><?php echo $data['author']; ?></td>
            <td><?php echo $data['type']; ?></td>
            <td>
              <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Read More</a>
              <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
              <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>
