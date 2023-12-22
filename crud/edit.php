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
    <title>Edit Book</title>
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
            <h1>Edit Book</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM books WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="Book Title:" value="<?php echo $row["title"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="author" placeholder="Author Name:" value="<?php echo $row["author"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Select Book Type:</option>
                    <option value="Romantis" <?php if($row["type"]=="Romantis"){echo "selected";} ?>>Romantis</option>
                    <option value="Fiksi Sejarah" <?php if($row["type"]=="Fiksi Sejarah"){echo "selected";} ?>>Fiksi Sejarah</option>
                    <option value="Fiksi Ilmiah" <?php if($row["type"]=="Fiksi Ilmiah"){echo "selected";} ?>>Fiksi Ilmiah</option>
                    <option value="Fantasi Epik" <?php if($row["type"]=="Fantasi Epik"){echo "selected";} ?>>Fantasi Epik</option>
                    <option value="Nonfiksi Pengetahuan" <?php if($row["type"]=="Nonfiksi Pengetahuan"){echo "selected";} ?>>Nonfiksi Pengetahuan</option>
                    <option value="Sastra Klasik" <?php if($row["type"]=="Sastra Klasik"){echo "selected";} ?>>Sastra Klasik</option>
                    <option value="Puisi Modern" <?php if($row["type"]=="Puisi Modern"){echo "selected";} ?>>Puisi Modern</option>
                    <option value="Bisnis dan Keuangan" <?php if($row["type"]=="Bisnis dan Keuangan"){echo "selected";} ?>>Bisnis dan Keuangan</option>
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Book Description:"><?php echo $row["description"]; ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Book" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Book Does Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>