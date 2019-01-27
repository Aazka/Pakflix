<?php
session_start();
require_once "db_connection.php";
if(!isset($_SESSION['user_email'])){
    header('location: Login.php?not_admin=You are not Admin!');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <title>Pakflix Admin Panel</title>
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <img src="../image/pakflix1.png" style="width: 100px"> <h3>Admin Panel</h3>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="index.php?insert_movie_data">
                    <i class="fas fa-plus"></i> Insert New Movie
                </a>
            </li>
            <li>
                <a href="index.php?View_Movie">
                    <i class="fas fa-sitemap"></i> View All Movies
                </a>
            </li>
            <li>
                <a href="Logout.php">
                    <i class="fa fa-sign-out-alt"></i> Admin logout</a>
            </li>
        </ul>
    </nav>
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
        <div class="container">
            <h2 class="text-center text-primary"><?php echo @$_GET['logged_in']?></h2>
            <?php
            if(isset($_GET['insert_movie_data'])){
                include ('insert_movie_data.php');
            }
            else if(isset($_GET['View_Movie'])){
                include ('view_movie.php');
            }
            else if(isset($_GET['Edit_Movie'])){
                include ('Edit_Movie.php');
            }
            else if(isset($_GET['Delete_Movie'])){
                include ('Delete_Movie.php');
            }
            ?>
        </div>
    </div>
</div>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
</script>
</body>
</html>