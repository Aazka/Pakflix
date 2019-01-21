<?php require "Header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

</head>
<body style="background: white; height: 100%">
<div id="wrapper">

    <div id= "maincontent">
        <div class="row login">
            <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-xs-12">
                <form class="form-container bg-white" action="Index.php">
                    <h1 style="margin: 18px 0px;font-weight: bold; font-size: 70px;font-family: 'sans-serif';color: #545b62"> Login</h1>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="login_exampleInputEmail1" class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'Hobo Std';color: #545b62">Email </label>
                        <input type="email" class="form-control" name="login_exampleInputEmail1" id="login_exampleInputEmail1" placeholder="Email"
                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="login_exampleInputPassword1"  class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'Hobo Std';color: #545b62">Password</label>
                        <input type="password" class="form-control" name="login_exampleInputPassword1" id="login_exampleInputPassword1" placeholder="Password"
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
                    </div>
                    <span style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62 ;">
            <a href="ForgetPass.php" style="float: left">Forgot Password</a><br>
            </span>

                    <a href="Index.php"><button type="submit" class="btn btn-warning btn-block" style=" margin-bottom: 10px; font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">Login</button></a>
                    <span style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #bd2130 ;">
            <a href="registration.php">Create an Account</a>
                </span>
                </form>
            </div>
        </div>
    </div>
    <?php require "Footer.php";
    ?>

</div>
</body>