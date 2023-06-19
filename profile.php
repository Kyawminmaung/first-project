<?php

session_start();
if(!isset($_SESSION['user']))
{
    header('location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-3">Profile</h1>

        <?php if(file_exists("_actions/photos/profile.jpg")): ?>
            <img src="_actions/photos/profile.jpg" alt="Profile Picture" width="300">
        <?php endif ?>

        <form 
              action="_actions/upload.php"
              method="post"
              enctype="multipart/form-data"
              class="input-group my-4"
        >
              <input type="file" name="photo" class="form-control">
              <button class="btn btn-secondary">Uploads</button>

        </form>
        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b>kmm@gmail.com
            </li>
            <li class="list-group-item">
                <b>Phone:</b>(09) 243 867 645
            </li>
            <li class="list-group-item">
                <b>Address</b>No. 321, Main Street, West City 
            </li>
        </ul>
        <br>

        <a href="_actions/logout.php">Logout</a>
    </div>
</body>
</html>