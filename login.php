<?php require "Header.php";
//log_in
if(isset($_POST['log_in']))
{
    $email=$_POST['login_exampleInputEmail1'];
    $password=$_POST['login_exampleInputPassword1'];
    $reg_email='/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/';
    $reg_pass='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}';
    if(!(preg_match($reg_email, $email) AND preg_match($reg_pass, $password)))
    {
        echo "plz follow the format";
    }
    else {
        $login_user = "select * from user_info where login_exampleInputEmail1='$email' AND login_exampleInputPassword1='$password'";
        $run_user = mysqli_query($con, $login_user);
        $check_user = mysqli_num_rows($run_user);
        if ($check_user == 0) {
            $error_msg = 'Password or Email is wrong, try again';
        } else {
            header('location:index.php?logged_in=You have successfully logged in!');
        }
    }
}
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
                <form class="form-container bg-white" action="index.php">
                    <h1 style="margin: 18px 0px;font-weight: bold; font-size: 70px;font-family: 'sans-serif';color: #545b62"> Login</h1>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="login_exampleInputEmail1" class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'Hobo Std';color: #545b62">Email </label>
                        <input type="email" class="form-control" name="login_exampleInputEmail1" id="login_exampleInputEmail1" placeholder="Email"
                             required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="login_exampleInputPassword1"  class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'Hobo Std';color: #545b62">Password</label>
                        <input type="password" class="form-control" name="login_exampleInputPassword1" id="login_exampleInputPassword1" placeholder="Password"
                            required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
                    </div>
                    <span style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62 ;">
            <a href="ForgetPass.php" style="float: left">Forgot Password</a><br>
            </span>

                    <a href="index.php"><button type="submit" name="log_in" class="btn btn-warning btn-block" style=" margin-bottom: 10px; font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">Login</button></a>
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