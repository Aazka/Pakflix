<?php
require "db_connection.php";
if(isset($_POST['insert_Movie']))
{
    /*this is for insertion*/
    $title = $_POST['m_title'];
    $g  = NULL;
    if(!empty($_POST['genre']))
    {
        foreach($_POST['genre'] as $value)
        {
            if($g!=NULL)
            {
                $g=$g.','.$value;
            }
            else{
                $g=$g.$value;
            }
        }
    }
    $rd =$_POST['date'];
    $d =$_POST['duration'];
    $dir =$_POST['d_name'];
    $wri =$_POST['w_name'];
    $s = NULL;

    if(!empty($_POST['st']))
    {
        foreach($_POST['st'] as $value)
        {
            if($s!=NULL)
            {
                $s=$s.','.$value;
            }
            else{
                $s=$s.$value;
            }
        }
    }
    $r =$_POST['rating'];
    $image = $_FILES['pro_image']['name'];
    $regex_title = '/([a-zA-Z0-9]+\s?)+/';
    $regex_rating = '/[1-9]0?\.[0-9]/';
    $regex_director = '/([A-Z]{1}?|[a-z]+(\s|-|_|\.)?)+/';
    $regex_writer = '/(([A-Z]{1}?|[a-z]+(\s|-|_|\.)?)+,?)+/';
    $regex_running_time = '/[1-9]+(0{1,2})?\s(minutes|m|mint|min)/';//125 m, 125.365!,120 min
    $regex_image = '/.+(png|jpg|jpeg)/';
    //  if(!preg_match($regex_running_time,$d))
    // {
    // echo"<script>alert('hello $d')</script>";

    //}
    if (preg_match($regex_title, $title) AND preg_match($regex_rating, $r)
        AND preg_match($regex_director, $dir)
        AND preg_match($regex_writer, $wri)
        AND preg_match($regex_running_time, $d)
        AND preg_match($regex_image, $image)) {
        $image_tmp = $_FILES['pro_image']['tmp_name'];
        move_uploaded_file($image_tmp,"image/$image");
        $insertQuery = "insert into movies_data(Title,Rating,Release_Date,Director,Writer,Genre,Screening_Type,Running_Time,Image) values('$title','$r','$rd','$dir','$wri','$g','$s','$d','$image')";
        $result = mysqli_query($con , $insertQuery);
        //echo
        //echo $insertQuery;
        if (!$result)
        {
            echo "not executed";
        }
    }
    else{
        echo "server side validation invalid";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Product</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
        /*input[name='movie_title']:invalid {
            background-color: red;
        }
        input[name='rating']:invalid {
            background-color: red;
        }
        input[name='d_name']:invalid {
            background-color: red;
        }
        input[name='w_name']:invalid {
            background-color: red;
        }
        input[name='duration']:invalid {
            background-color: red;
        }*/
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Movie </h1>
    <form action="insert_movie_data.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Movie</span> Title:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="m_title" name="m_title" placeholder="Enter Movie Title" required pattern="^([a-zA-Z0-9]+\s?)+$">
                    <!-- <div>< /*echo $mov_title */</div>-->
                </div>
            </div>
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_cat" class="float-md-right"><span class="d-sm-none d-md-inline"> Genre</span> </label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                    </div>
                    <table>
                        <tr>
                            <th><input type="checkbox" name="genre[]" value="comedy">Comedy</th>
                            <th><input type="checkbox" name="genre[]" value="action">Action</th>
                            <th><input type="checkbox" name="genre[]" value="drama">Drama</th>

                        </tr>
                        <tr>
                            <th><input type="checkbox" name="genre[]" value="romance">Romance</th>
                            <th><input type="checkbox" name="genre[]" value="fantacy">Fantacy</th>
                            <th><input type="checkbox" name="genre[]" value="crime">crime</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_brand" class="float-md-right"> <span class="d-sm-none d-md-inline"> Screening Type </span> </label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-stamp"></i></div>
                    </div>

                    <table>
                        <tr>
                            <th><input type="checkbox" name="st[]" value="2d">2D</th>
                        </tr>
                        <tr>
                            <th><input type="checkbox" name="st[]" value="3d">3D</th>
                        </tr>
                    </table>


                </div>
            </div>
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_img" class="float-md-right"><span class="d-sm-none d-md-inline"> Movie </span> Image:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-image"></i></div>
                    </div>
                    <input class="form-control" type="file" id="pro_image" name="pro_image" required pattern="^.+(png|jpg|jpeg)$">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_price" class="float-md-right"> <span class="d-sm-none d-md-inline"> Rating </span> </label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-money-bill"></i></div>
                    </div>
                    <input class="form-control" id="rating" name="rating" placeholder="Enter Rating" required pattern="^[1-9]0?\.[0-9]$">
                </div>
            </div>
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_kw" class="float-md-right"><span class="d-sm-none d-md-inline"> Running Time</span></label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                    </div>
                    <input class="form-control" type="text" id="duration" name="duration" placeholder="Enter Running Time" required pattern="^[1-9]+(0{1,2})?\s(minutes|m|mint)$">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Release Date </span> </label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                    </div>
                    <input class="form-control" type="date" id="date" name="date" placeholder="Enter Release Date">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Director </span> </label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                    </div>
                    <input class="form-control" type="text" id="d_name" name="d_name" placeholder="Enter Director Name" required pattern="^([A-Z]{1}?|[a-z]+(\s|-|_|\.)?)+$">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Writer Name </span> </label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                    </div>
                    <input class="form-control" type="text" id="w_name" name="w_name" placeholder="Enter Writer Name" required pattern="^(([A-Z]{1}?|[a-z]+(\s|-|_|\.)?)+,?)+$">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" name="insert_Movie" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
            </div>
        </div>
    </form>
</div>
<!--<script>
    function processingString()
    {
        var inputString = document.getElementById("duration").value;
        var regex = /[1-9]+(0{1,2})?\s(minutes|m|mint)/g;
        var result = inputString.match(regex);

        if (result != null) {
            // Add the retrieved numbers to the textarea element
            for (var i = 0; i < result.length; i++) {
                result[i]=result[i].replace("minutes","m");
                result[i]=result[i].replace("mint","m");

                document.getElementById("duration").value=result[i];
            }
        }
        else {
            document.getElementById("duration").value ='Result is null';
        }
    }
    }
</script>
--></body>
</html>

