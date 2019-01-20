<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="description" content="Free Web tutorials">
<meta name="author" content="Unbreen,Shams,Mayda,Saman,Adhina,Aazka">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style2.css">

    <style>
        body{
            background-image: url("image/login.jpg");
        }
        .footer .widgets h4
        {
            color: #dee2e6;
        }
        .footer .widgets p
        {
            color:#dee2e6;
        }
    </style>

</head>
<body>
<div id="wrapper">
    <?php
    require "Header.php"
    ?>
    <!--<div id="header">
        <header class="header">
              NavBar Area
            <nav class="navbar navbar-expand-md navbar-dark bg-warning navbar-fixed-top websiteheader"  >
                <div>
                    <img src="image/pakflix1.png" alt="logo" style="width: 75px;height:75px">
                </div>
                <span class=" navbar-text navbar-left d-inline websiteheader2 ">
          <a class="websitename" href="Index.html" style="color: brown"> PakFlix </a>
        </span>
                <button class="navbar-toggler navbar-right navbarbutton" type="button" data-toggle="collapse" data-target="#collapse_target" >
                    <span class="sr-only">Togggle navigation</span>
                    <div  class="fa fa-align-justify fa-2x nav navbar-right navigationicon"></div>
                </button>
                <div class=" collapse navbar-collapse" id="collapse_target">
                    <ul class= "nav navbar-nav navbar-right navbarcolumn" >

                        <li ><a href="index.html" class="fa fa-sign-in-alt" > Home</a></li>
                        <li></i> <a href="about.php" class="fa fa-user"> About</a></li>
                        <li><a href="#" class="fa fa-envelope"> Contact</a></li>
                        <li><a href="registration.html" class="fa fa-sign-in-alt" > Register</a></li>
                        <li >
                            <a href="login.php" class="fa fa-sign-in-alt" style="padding-right: 30px" > Login</a>
                        </li>


                    </ul>
                </div>

            </nav>
        </header>
    </div>-->
    <div id="main-content">
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-3">
                    <form class="form-container">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </section>
            </section>
        </section>
    </div>
    <!--<div id="footer">
        <div class="footer">
            <div class="widget-footer">
                <div class="wrap-container">
                    <div class="widgets">
                        <h4>Contact information:</h4>
                        <p> Contact information so that you can get in touch with us is easily.</p>
                        <p><strong>Phone:</strong> 03054799126</p>
                        <p><strong>Email:</strong> ambermalik205@gmail.com</p>
                    </div>
                    <div class="widgets">
                        <h4>Sign up for newspaper</h4>
                        <p> For latest news and updates sign up below and stay updated.....</p>
                        <p><strong>Email</strong></p>
                        <input type="text" class="subscribe-text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br>
                        <input type="text" value="Subscribe" class="subscribe-btn">
                        <button type="Subscribe" class="subscribe-btn">Subscribe</button>
                    </div>
                    <div class="widgets">
                        <h4>Follow on social media</h4>

                        <li><a href="https://www.facebook.com"><span class="fab fa-facebook-square fa-2x "></span>Facebook</a></li>
                        <li><a href="https://www.twitter.com"><span class="fab fa-twitter fa-2x"></span>Twitter</a></li>
                        <li> <a href="https://www.instagram.com"><span class="fab fa-instagram fa-2x"></span>Instagram</a></li>

                    </div>
                    <div class="widgets">
                        <h4>Recent comments</h4>
                        <p><strong>Aazka:</strong>  This is an awesome website.</p>
                        <p><strong>Amber:</strong>  very helpful.</p>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <p>copyright &copy; 2018</p>
            </div>
        </div>
    </div>-->
    <?php
    require "Footer.php"
    ?>
</div>
</body>
</html>