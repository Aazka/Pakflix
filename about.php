<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<meta name="keywords" content="html,css,javascript,xml">
<meta name="discription" content="Pakflix films">
<meta name="author" content="Unbreen zafar, Aazka iqbal,Saman khan,Mayeda meraj,Adina mudassar,shams uz zaman">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="wrapper">


    <?php
    require "Header.php"
    ?>
    <div id="main-content">
        <div id="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </div>
            </div>
        </div>
        <div>



        </div>
        <div class="aboutus">
            <div class="container">
                <hr>
                <div class="col-sm-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <img src="image/7.jpg" class="img-responsive " style="padding-top: 100px">
                    <h3 class="slogan"><b>Watch, Rate and Buy</b></h3>
                    <h2>Who We Are?</h2>
                    <p>We are Bachelors students of Computer Sciences in
                        <br>the University of Central Punjab.
                        And this website is <br> our project for a course, Web Application Development, <br>in our degree.   </p>
                    <h2> Why We Are Doing This?</h2>
                    <p>We wanted to create a website that will help users choose movies <br> from the vast collection of
                        Pakistani movies provided and choose<br> which  are worth their time and money through reading descriptions<br>
                        and ratings provided . Additionally  our website will enable users to<br> book tickets for the movie they want to watch
                        (that is in cinemas). </p>
                </div>
                <div class="col-sm-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="skill">
                        <img src="image/diff.jpg" class="img-responsive" style="padding-top: 100px">
                        <h2>What makes us different?</h2>

                        <p>While all the other websites that deal with this specific category<br>
                            do not have the services for booking movie tickets ,but this one<br>
                            does and while other websites deal with movies all around the<br>
                            world, ours is exclusively for Pakistani movies only. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-team">
            <div class="container">
                <h3>Our Team</h3>
                <div class="text-center">
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <img src="image/1.png" width="300" height="300" alt="Amber">
                        <h4>Amber <a href=  " https://github.com/unbreenzafar"> <i class="fab fa-github"></i></a>
                            <a href=  "https://www.facebook.com/amber.malik.96199"><i class="fab fa-facebook-f"></i></a>      </h4>
                        <p></p>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <img src="image/2.jpg" width="300" height="300" alt="Mayeda">
                        <h4>Mayeda <a href=  "https://github.com/MayedaMeraj"> <i class="fab fa-github"></i></a>
                            <a href=  "https://www.facebook.com/mayeda.meraj"><i class="fab fa-facebook-f"></i></a></h4>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <img src="image/3.jpg" width="300" height="300" alt="Saman">
                        <h4>Saman   <a href=  "https://github.com/SamanKhann"> <i class="fab fa-github"></i></a>
                            <a href=  "https://www.facebook.com/profile.php?id=100006636043966"><i class="fab fa-facebook-f"></i></a></h4>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <img src="image/4.png" width="300" height="300"alt="Shams">
                        <h4>Shams <a href=  "https://github.com/shamsi434"> <i class="fab fa-github"></i></a>
                            <a href=  "https://www.facebook.com/shams.zam"><i class="fab fa-facebook-f"></i></a></h4>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <img src="image/5.png" width="300" height="300" alt="Aazka">
                        <h4>Aazka <a href=  "https://github.com/Aazka"> <i class="fab fa-github"></i></a>
                            <a href=  "https://facebook.com/aazka.iqbal"><i class="fab fa-facebook-f"></i></a>
                        </h4>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <img src="image/6.png" width="300" height="300"  alt="Adina">
                        <h4>Adina <a href=  "https://github.com/adinaMudassar"> <i class="fab fa-github"></i></a>
                            <a href=  "https://facebook.com/adina.mudassar"><i class="fab fa-facebook-f"></i></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require "Footer.php"
    ?>
</div>
</body>
</html>