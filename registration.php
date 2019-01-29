<?php

require "Header.php";
require "Admin/db_connection.php";
require "Admin/function.php";



session_start();

// initializing variables
$first_name = "";
$last_name = "";
$email    = "";
$pass1 = "";
$pass2 = "";
//$gender= "";
$errors = array();

// connect to the database

// REGISTER USER
if (isset($_POST['sign_up'])) {
    // receive all input values from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass'];
    $pass2 = $_POST['cpass'];
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

        $query = "INSERT INTO users_info (first_name, last_name, email, password, gender) 
  			  VALUES('$first_name', '$last_name', '$email', '$pass1,', '$s')";
        mysqli_query($con, $query);
        $_SESSION['useremail'] = $email;
        setcookie('useremail', $email, time() + (10 * 365 * 24 * 60 * 60));
        setcookie('userpassword', $pass1, time() + (10 * 365 * 24 * 60 * 60));
        header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function checkEmail(str) {
            if(str.length == 0) {
                document.getElementById("hint").innerHTML = "";
                return;
            }
            else{
                var check = new XMLHttpRequest();
                check.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200){
                        document.getElementById("hint").innerHTML = this.responseText;
                    }
                };
                check.open("POST", "CheckEmail.php?e=" + str, true);
                check.send();
            }
        }
    </script>


</head>
<body>
<div id="wrapper">

    <div id= "maincontent">

        <div class="row signin">
            <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-xs-12">
                <form class="form-containers bg-white" action="registration.php" method="post" enctype="multipart/form-data">
                    <h1 style="margin: 18px 0px;font-weight: bold; font-size: 65px;font-family: 'sans-serif';color: #545b62">SignIn</h1>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="signin_username" class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">First Name</label>
                        <input type="text" class="form-control" required pattern = "[A-Za-z](\d|\w|\.|-){2,30}" name="first_name" id="first_name"  placeholder="First Name"> <!--pattern="^[a-zA-z]+[^#&<>\~;$^%{}?,]$" >-->
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="signin_username" class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">Last Name</label>
                        <input type="text" class="form-control" required pattern = "[A-Za-z](\d|\w|\.|-){2,30}" name="last_name" id="last_name" placeholder="Last Name"> <!--pattern="^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$" >-->
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="exampleInputEmail1" class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">Email </label>
                        <input type="email" class="form-control" name="email" id="email" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" placeholder="Email" onkeyup="checkEmail(this.value)" style=" font-weight: lighter; font-size: 15px;font-family: 'sans-serif';color: #545b62";/>
                        <span id="hint"></span>
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="exampleInputPassword1"  class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">Password</label>
                        <input type="password" class="form-control" name="pass" id="pass" required pattern="^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$" placeholder="Password" style=" font-weight: lighter; font-size: 15px;font-family: 'Hobo Std';color: #545b62"> <!--pattern="^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$">-->
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="exampleInputPassword2"  class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">Confirmed Password</label>
                        <input type="password" class="form-control" name="cpass" id="cpass" required pattern="^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$" placeholder="confirmed Password" style=" font-weight: lighter; font-size: 15px;font-family: 'Hobo Std';color: #545b62"><!-- pattern="^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$"-->

                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'Hobo Std';color: #545b62">Choose Gender</label>
                        <input type='checkbox' name='st[]' value='Male'>Male
                        <input type='checkbox' name='st[]' value='Female'>Female
                    </div>

                    <div class="input-group">
                    <button type="submit" class="btn btn-warning btn-block" name="sign_up" id="sign_up" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62"><a <!--href = "index.php"--> Sign In</a></button>
                    </div>
                    <p>
                        Already have an account? <a href="login.php">Log In</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php require "Footer.php";
    ?>

</div>

</body>



