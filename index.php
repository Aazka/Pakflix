<?php
    require  "Header.php";
    require "Admin/function.php";
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<meta name="keywords" content="html,css,javascript,xml">
<meta name="discription" content="Pakflix films">
<meta name="author" content="Unbreen zafar, Aazka iqbal,Saman khan,Mayeda meraj,Adina mudassar,shams uz zaman">
<head>

    <title>Responsive Navigation Bar</title>
     <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div id="wrapper">
<div id="main-content">
    <div class="container-fluid con" style="padding-left: 0px; padding-bottom:  0px; width: 100%; padding-right: 0px"
    >
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-bottom: 10px solid white">
    <!-- Indicators -->

    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="col-12 d-inline" style="padding-left: 0px; padding-right: 0px">
                <img src="image/img.png" alt="Movie" class="img-responsive">
            </div>
        </div>
        <div class="item">
            <div class="col-12 d-inline" style="padding-left: 0px; padding-right: 0px">
                <img src="image/img1.png" alt="Movie" class="img-responsive">
            </div>
        </div>
        <div class="item">
            <div class="col-12 d-inline" style="padding-left: 0px; padding-right: 0px">
                <img src="image/img2.png" alt="Movie" class="img-responsive">
            </div>
        </div>
        <div class="item">
            <div class="col-12 d-inline" style="padding-left: 0px; padding-right: 0px">
                <img src="image/img3.png" alt="Movie" class="img-responsive">
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button" style="opacity: 50%">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button" style="opacity: 50%">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div >

    <div class="container-fluid MOVIE">
        <div class="row MovieFirstRow" >
       <!-- <a class=" col-lg-4 col-md-6 col-12 form-inline d-block MovieFirstCol" >
               <div class="row MovieSecondRow">
                <div class="MovieImage">
                    <img class="MovieImageStyle" src="Admin/Images/pic%201.jpg">
                </div>
                <div class="MovieDetail">
                    <table class ="MovieDetailTable">
                         <tr>
                            <th>
                                <span class="MovieTitle" >  Teefa in Trouble</span>
                            </th>
                        </tr>
                         <tr style="padding-top: 5px;">
                      <th>
                          <i class="fas fa-film MovieIcon"></i>  <span class="MovieDescription">Crime,Drama</span>
                      </th>
                  </tr>
                         <tr>
                            <th>
                                <i class="fas fa-clock  MovieIcon" ></i>  <span class="MovieDescription">2h 55min</span>
                            </th>
                        </tr>
                         <tr>
                       <th>
                           <i class="fas fa-star MovieIcon"></i>  <span class="MovieDescription"> 9.5</span>
                       </th>
                   </tr>
                         <tr>
                            <th>
                                <i class="fas fa-calendar-week MovieIcon"></i> <span class="MovieDescription"> 2018-08-22</span>
                            </th>
                        </tr>
                         <tr>
                            <th>
                                <i class="fas fa-desktop MovieIcon"></i> <span class="MovieDescription"> 2D,3D</span>
                            </th>
                        </tr>
                         <tr>
                            <th>
                                <i class="fas fa-pen MovieIcon"></i>   <span class="MovieDescription"> Ali</span>
                            </th>
                        </tr>
                         <tr>
                            <th>
                                <i class="fas fa-compass MovieIcon"></i>     <span class="MovieDescription">Nadeem Baig</span>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
               </a>-->
            <?php
                getMovies();
            ?>

        </div>

        </div>

</div>
    <?php require "Footer.php" ?>
</div>
</body>
</html>