<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
require 'db_connection.php';
if(isset($_GET['Edit_Movie']))
{
    $id = $_GET['Edit_Movie'];
    $get_movie = "select * from movies_data where id = '$id'";
    $run_movie = mysqli_query($con, $get_movie);
    $row_movie = mysqli_fetch_array($run_movie);
    $title = $row_movie['Title'];
    $rating=$row_movie['Rating'];
    $m_image = $row_movie['Image'];
    $rd= $row_movie['Release_Date'];
    $dir= $row_movie['Director'];
    $wri= $row_movie['Writer'];
    $r= $row_movie['Running_Time'];
    $genre = $row_movie['Genre'];
    $st =$row_movie['Screening_Type'];
}
if(isset($_POST['update_movie'])) { // && isset($_POST['delete'])
    $titles = $_POST['m_title'];
    $genre = NULL;
    if (!empty($_POST['genre'])) {
        foreach ($_POST['genre'] as $value) {
            if ($genre != NULL) {
                $genre = $genre . ',' . $value;
            } else {
                $genre = $genre . $value;
            }
        }
    }

    $rds = $_POST['date'];
    $d = $_POST['duration'];
    $dirs = $_POST['d_name'];
    $wris = $_POST['w_name'];
    $screen_type = NULL;


    if (!empty($_POST['st'])) {
        foreach ($_POST['st'] as $value) {
            if ($screen_type != NULL) {
                $screen_type = $screen_type . ',' . $value;
            } else {
                $screen_type = $screen_type . $value;
            }
        }
    }
   // $rs = $_POST['rating'];
    $rs = $_POST['rating'];
    $images = $_FILES['m_image']['name'];
    $images = $_FILES['m_image']['name'];
   /* $regex_title = '/([a-zA-Z0-9]+\s?)+/';
    $regex_rating = '/[1-9]0?\.[0-9]/';
    $regex_director = '/([A-Z]{1}?|[a-z]+(\s|-|_|\.)?)+/';
    $regex_writer = '/(([A-Z]{1}?|[a-z]+(\s|-|_|\.)?)+,?)+/';
    $regex_running_time = '/[1-9]+(0{1,2})?\s(minutes|m|mint|min)/';//125 m, 125.365!,120 min
    $regex_image = '/.+(png|jpg|jpeg)/';*/

    /*$rs = $_POST['rating'];
    $images = $_FILES['m_image']['name'];
    $images = $_FILES['m_image']['name'];*/
/*if (preg_match($regex_title, $titles) AND preg_match($regex_rating, $rs)
    AND preg_match($regex_director, $dirs)
    AND preg_match($regex_writer, $wris)
    AND preg_match($regex_running_time, $d)
    AND preg_match($regex_image, $images)) {*/

    $image_tmp = $_FILES['m_image']['tmp_name'];
    move_uploaded_file($image_tmp, "Images/$images");

    $insert = "update movies_data set Title='$titles', Rating='$rs',Release_Date='$rds',Director='$dirs',
                        Writer='$wris',
                        Running_Time='$d'
                        where id = '$id' ";
    $inserts = mysqli_query($con, $insert);


    if ($images != NULL) {
        $inserss = "update movies_data set Image = '$images'
                      where id = '$id'";
        mysqli_query($con, $inserss);
    }
    if ($genre != NULL) {
        $insertsss = "update movies_data set Genre = '$genre'
                      where id = '$id'";
        mysqli_query($con, $insertsss);
    }
    if ($screen_type != NULL) {
        $insrt = "update movies_data set Screening_Type = '$screen_type'
                      where id = '$id'";
        mysqli_query($con, $insrt);
    }
    header("location: index.php?View_Movie");
//    }

}

?>

<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Edit & Update Product </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="m_title">Movie Title</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="m_title" name="m_title" placeholder="Title" value="<?php echo $title; ?>"
                           onkeyup="checkTitle(this.value)" required pattern="^([a-zA-Z0-9]+\s?)+$">
                    <span class="text-danger" id="hint"></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="rating">Rating</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="rating" name="rating" placeholder="Rating" value="<?php echo $rating; ?>"
                    required pattern="^[1-9]0?\.[0-9]$">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3  d-none d-sm-block" for="date">Release Date</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="date" name="date" placeholder="Release Date"value="<?php echo $rd; ?>"
                    >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="pro_price">Director</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="d_name" name="d_name" placeholder="Director" value="<?php echo $dir; ?>"

                    required pattern="^([A-Z]{1}?|[a-z]+(\s|-|_|\.)?)+$">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="pro_desc">Writer</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control"  name="w_name" id="w_name" placeholder="writer" value="<?php echo $wri; ?>"
                    required pattern="^(([A-Z]{1}?|[a-z]+(\s|-|_|\.)?)+,?)+$">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="genre">Genre</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <h4><?php echo $genre;?></h4>
                    <input type='checkbox' name='genre[]' value='comedy'>Comedy
                    <input type='checkbox' name='genre[]' value='action'>Action
                    <input type='checkbox' name='genre[]' value='drama'>Drama
                    <input type='checkbox' name='genre[]' value='romance'>Romance
                    <input type='checkbox' name='genre[]' value='fanatcy'>Fantacy
                    <input type='checkbox' name='genre[]' value='crime'>Crime
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="st">Screening type</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <h4><?php echo $st;?></h4>
                    <input type='checkbox' name='st[]' value='2d'>2D
                    <input type='checkbox' name='st[]' value='3d'>3D

                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="duration">Running Time</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control"  name="duration" id="duration" placeholder="Duration" value="<?php echo $r; ?>"
                   required pattern="^[1-9]+(0{1,2})?\s(minutes|m|mint|min$" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="pro_image">Product Image</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control-file" type="file" id="m_image" name="m_image" required pattern="^.+(png|jpg|jpeg)$">
                    <img src= 'Images/<?php echo $m_image;?>'  class='w-50 h-50'>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="update_movie" name="update_movie"
                           value="Update Movie Now">
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function checkTitle(str) {
        if (str.length == 0) {
            document.getElementById("hint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("hint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("POST", "check_title.php?e=" + str, true);
            xmlhttp.send();
            //document.getElementById('hint').innerHTML = 'loading...';
        }
    }
</script>