<?php require "Header.php";
require "Admin/db_connection.php";
if(isset($_POST['ForgetPass']))
{
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $password2=$_POST['cpass'];
    $reg_email='^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$';
    $reg_pass='^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$';
     if(!(preg_match($reg_email, $email) AND preg_match($reg_pass, $password) AND preg_match($reg_pass, $password2)))
    {
        echo "plz follow the format";
    }

    else
    {
        if($password == $password2)
        {
            $insert = "update user_info set password = '$password' where email = '$email'";
            $inserts = mysqli_query($con, $insert);
            header('location:login.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">+
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>

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
    if (str.length == 0) {
    document.getElementById("hint").innerHTML = "";
    return;
    } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("hint").innerHTML = this.responseText;
    }
    };
    xmlhttp.open("POST", "server/CheckEmail2.php?e=" + str, true);
    xmlhttp.send();
    }
    }
    </script>


</head>
<body>
<div id="wrapper">

    <div id= "main-content">

        <div class="row forget">
            <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-xs-12">
                <form class="form-containerss bg-white"  method="post" enctype="multipart/form-data">
                    <h1 style="margin: 18px 0px;font-weight: bold; font-size: 65px;font-family: 'sans-serif';color: #545b62">Forget Password</h1>

                    <div class="form-group" style="margin: 0px 0px">
                        <label for="exampleInputEmail1" class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color:
">Email </label>
                        <input type="email" class="form-control" name="email" id="email" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" placeholder="Email" onkeyup="checkEmail(this.value)"
                        style=" font-weight: lighter; font-size: 15px;font-family: 'sans-serif';color: #545b62 ">
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


                    <button type="submit" class="btn btn-warning btn-block" name="ForgetPass" id="ForgetPass" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62"> Submit</a></button>

                </form>
            </div>
        </div>
    </div>
    <?php require "Footer.php";
    ?>

</div>

</body>
: 9:56 AM
 */