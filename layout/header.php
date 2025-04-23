<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Chỉ khởi động session nếu chưa có session nào chạy
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title site</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <ul class="nav navbar-nav">
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">List Products</a></li>
                        <li><a href="#">Add New Product</a></li>
                    </ul>
                </li>
                <li><a href="product">List product</a></li>
                <li><a href="Home">Home</a></li>
                <li><a href="create">Add product</a></li>
                <li><a href="about.php">About</a></li>
                <?php
                if (
                    isset($_SESSION['UserLogin'])
                    && $_SESSION['UserLogin'] == 'admin'
                ) {

                    echo "<li><a href='#'>Hello Admin</a></li>";
                    echo "<li><a href='logout.php'>Logout</a></li>";
                } else {
                    echo "<li><a href='Login.php'>Login</a></li>";
                }
                ?>


            </ul>
        </div>
    </nav>

    <div class="container"> <!-- Thẻ mở .container -->