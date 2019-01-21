<?php
require 'db_connection.php';
if(isset($_POST['update']))
{
    $titles = $_POST['m_title'];
    $genre  = NULL;
    if(!empty($_POST['genre']))
    {
        foreach($_POST['genre'] as $value)
        {
            if($genre!=NULL)
            {
                $genre=$genre.','.$value;
            }
            else{
                $genre=$genre.$value;
            }
        }
    }

    $rds =$_POST['date'];
    $ds =$_POST['duration'];
    $dirs =$_POST['d_name'];
    $wris =$_POST['w_name'];
    $screen_type = NULL;

    if(!empty($_POST['st']))
    {
        foreach($_POST['st'] as $value)
        {
            if($screen_type !=NULL)
            {
                $screen_type =$screen_type .','.$value;
            }
            else{
                $screen_type =$screen_type .$value;
            }
        }
    }
    $rs =$_POST['rating'];
    $images = $_FILES['pro_image']['name'];
    $image_tmp = $_FILES['pro_image']['tmp_name'];
    move_uploaded_file($image_tmp,"Images/$images");

    $insert = "update movies_data set Title='$titles', Rating='$rs',Release_Date='$rds',Director='$dirs',
                        Writer='$wris',
                        Running_Time='$ds'
                        where id = '$_POST[MID]' ";
    $inserts = mysqli_query($con, $insert);

    if($images!=NULL)
    {
        $inserss = "update movies_data set Image = '$images'
                      where id = '$_POST[MID]'";
        mysqli_query($con, $inserss);
    }
    if($genre!=NULL)
    {
        $insertsss = "update movies_data set Genre = '$genre'
                      where id = '$_POST[MID]'";
        mysqli_query($con, $insertsss);
    }
    if($screen_type!=NULL)
    {
        $insrt = "update movies_data set Screening_Type = '$screen_type'
                      where id = '$_POST[MID]'";
        mysqli_query($con, $insrt);
    }
}
if(isset($_POST['delete'])) {
    $delete = "delete from movies_data where id = '$_POST[MID]'";
    mysqli_query($con,$delete);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Update Category</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="container-fluid align-content-center"  style="float:left;width:2500px;overflow: auto;overflow-y: auto;">
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <h1 class="fas fa-plus fa-md">Delete/Update Category</h1>
            </div>
        </div>
    </div>
</div>
<table style="float:left;width:2500px;overflow: auto;overflow-y: auto;">
    <tr>
        <th align="left" valign="middle" >Title</th>
        <th align="left" valign="middle" >Rating</th>
        <th align="left" valign="middle" >Releasing_Date</th>
        <th align="left" valign="middle" >Director</th>
        <th align="left" valign="middle" >Writer</th>
        <th align="left" valign="middle" >Genre</th>
        <th align="left" valign="middle" >Screening_Type</th>
        <th align="left" valign="middle" >Running_Type</th>
        <th align="left" valign="middle" >Image</th>
        <th align="left" valign="middle" >Update</th>
        <th align="left" valign="middle" >Delete</th>
    </tr>
    <?php
    require "db_connection.php";
    global $con;
    $get = "select * from movies_data";
    $getResult = mysqli_query($con,$get);
    while($row = mysqli_fetch_assoc($getResult)) {
        $MID = $row['id'];
        $title = $row['Title'];
        $r= $row['Rating'];
        $rd =$row['Release_Date'];
        $dir =$row['Director'];
        $wri=$row['Writer'];
        $g = $row['Genre'];
        $st=$row['Screening_Type'];
        $d=$row['Running_Time'];
        $image= $row['Image'];
        echo
        "
            <tr>
                  <form action='deleteupdate.php' method = 'post' enctype='multipart/form-data'>
                   <input type='hidden' class='form-control' id='MID' name='MID' value='$MID'>
                  <th>
                      <input type='text' class='form-control' id='m_title' name='m_title' placeholder='Enter Movie Title' value='$title'>
                   </th>
                   
                   <th>
                          <input class='form-control' id='rating' name='rating' placeholder='Enter Rating' value='$r'>
                    </th>
                    
                    <th>
                       <input class='form-control' type='date' id='date' name='date' placeholder='Enter Release Date' value='$rd'>
                    </th>
                    
                    <th>
                       <input class='form-control' type='text' id='d_name' name='d_name' placeholder='Enter Director Name' value='$dir'>
                    </th> 
                   
                    <th>
                       <input class='form-control' type='text' id='w_name' name='w_name' placeholder='Enter Writer Name' value='$wri'>
                    </th> 
                    <th>
                       || $g||
                         <input type='checkbox' name='genre[]' value='comedy'>Comedy</input>
                         <input type='checkbox' name='genre[]' value='action'>Action</input>
                         <input type='checkbox' name='genre[]' value='drama'>Drama</input>
                          <input type='checkbox' name='genre[]' value='romance'>Romance</input>
                         <input type='checkbox' name='genre[]' value='fanatcy'>Fantacy</input>
                         <input type='checkbox' name='genre[]' value='crime'>Crime</input>
                    </th>
                     <th>
                       || $st||
                         <input type='checkbox' name='st[]' value='2d'>2D</input>
                         <input type='checkbox' name='st[]' value='3d'>3D</input>     
                    </th>
                    <th>
                         <input class='form-control' type='text' id='duration' name='duration' placeholder='Enter Running Time' value='$d'>
                    </th>
                    <th>
                      <span> 
                       <img src= 'images/$image' class='w-50 h-50'>
                       <input class=form-control type=file id=pro_image name=pro_image>
                       </span>
                    </th>
                    <th>
                          <button type='submit' name='update' class='btn btn-primary btn-block'>Update</button>
                    </th>
                     <th>
                          <button type='submit' name='delete' class='btn btn-primary btn-block'>Delete</button>
                    </th>
                  </form>
            </tr>
        ";
    }
    ?>

</table>
</body>
