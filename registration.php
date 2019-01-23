<?php
require "Header.php";
require "db_connection.php";
//require "Footer.php";
if(isset($_POST['sign_up'])){
    print_r($_POST);
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $gender = "gender";
    $reg_pass = "/(\d|\w|\.|-){0,15}[a-z|A-Z]?(\d|\w|\.|-){0,15}/";
    $reg_email = "/(\d|\w|\.|-){1,30}@(gmail|yahoo|hotmail)\.com/";
    $insert = "insert into users_info(first_name, last_name, email, password, gender)
                                values('$fname','$lname','$email','$pass','$gender')";
    echo $insert;
    mysqli_query($con, $insert);
    if(mysqli_query($selectresult)>0)
    {
        $msg = 'email already exists';
    }
    elseif($password != $cpassword){
        $msg = "passwords doesn't match";
    }
    else{
        $query = "INSERT INTO `register` (username, password,confirmpassword, email) VALUES ('$username', '$password', '$cpassword', '$email')";
        $result = mysql_query($query);
        if($result){
            $msg = "User Created Successfully.";
        }
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<div id="wrapper">

    <div id= "maincontent">

        <div class="row signin">
            <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-xs-12">
                <form class="form-containers bg-white" action="Index.php" method="post" enctype="multipart/form-data">
                    <h1 style="margin: 18px 0px;font-weight: bold; font-size: 65px;font-family: 'sans-serif';color: #545b62">SignIn</h1>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="signin_username" class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">First Name</label>
                        <input type="text" class="form-control" required pattern = "[A-Za-z](\d|\w|\.|-){2,30}" name="first_name" id="first_name"  placeholder="First Name" pattern="^[a-zA-z]+[^#&<>\~;$^%{}?,]$" >
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="signin_username" class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">Last Name</label>
                        <input type="text" class="form-control" required pattern = "[A-Za-z](\d|\w|\.|-){2,30}" name="last_name" id="last_name" placeholder="Last Name"pattern="^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$" >
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="exampleInputEmail1" class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">Email </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" style=" font-weight: lighter; font-size: 15px;font-family: 'sans-serif';color: #545b62  pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="exampleInputPassword1"  class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">Password</label>
                        <input type="password" class="form-control" name="pass" id="pass" required pattern="(\d|\w|\.|-){0,15}[A-Z](\d|\w|\.|-){0,15}" id="signin_exampleInputPassword1" placeholder="Password" style=" font-weight: lighter; font-size: 15px;font-family: 'Hobo Std';color: #545b62">
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="exampleInputPassword2"  class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">Confirmed Password</label>
                        <input type="password" class="form-control" id="pass" required pattern="(\d|\w|\.|-){0,15}[a-zA-Z]?(\d|\w|\.|-){0,15}" id="signin_exampleInputPassword2" placeholder="confirmed Password" style=" font-weight: lighter; font-size: 15px;font-family: 'Hobo Std';color: #545b62" <!--pattern="^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$"-->>
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'Hobo Std';color: #545b62">Choose Gender</label>
                        <select class="form-control">
                            <option value="Female" ">Female</option>
                            <option value=Male">Male</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-warning  btn-block" name="SignInButton" id="SignInButton" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">SignIn</button>

                </form>
            </div>
        </div>
    </div>
    <?php require "Footer.php";
    ?>

</div>

</body>