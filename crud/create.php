<?php
include('auth.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add New Book</title>
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

        table td, table th {
            vertical-align: middle;
            text-align: center;
            padding: 20px!important;
            background-color: #f2e4c6;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Add New Book</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="Book Title:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="author" placeholder="Author Name:">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Select Book Type:</option>
                    <option value="Romantis">Romantis</option>
                    <option value="Fiksi Sejarah">Fiksi Sejarah</option>
                    <option value="Fiksi Ilmiah">Fiksi Ilmiah</option>
                    <option value="Fantasi Epik">Fantasi Epik</option>
                    <option value="Nonfiksi Pengetahuan">Nonfiksi Pengetahuan</option>
                    <option value="Sastra Klasik">Sastra Klasik</option>
                    <option value="Puisi Modern">Puisi Modern</option>
                    <option value="Bisnis dan Keuangan">Bisnis dan Keuangan</option>
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Book Description:"></textarea>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create"  class="btn btn-primary" value="Add Book">
            </div>
        </form>
        
        
    </div>
</body>
</html>