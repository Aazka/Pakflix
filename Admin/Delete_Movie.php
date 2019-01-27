<?php
if(!isset($_SESSION['user_email'])){
    header('location: Login.php?not_admin=You are not Admin!');
}
if(isset($_GET['Delete_Movie'])){
    $get_id = $_GET['Delete_Movie'];
    $insert_category = "delete from movies_data where id = '$get_id'";
    $insert_cat = mysqli_query($con, $insert_category);
    if($insert_cat)
    {
        header("location: index.php?View_Movie");
    }

}