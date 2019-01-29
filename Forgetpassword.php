<?php require "Header.php";
if(isset($_POST['ForgetPass']))
{
    $email=$_POST['exampleInputEmail1'];
    $password=$_POST['exampleInputPassword1'];
    $password2=$_POST['exampleInputPassword1'];
    $reg_email='/[a-z\d.-_]{3,15}([a-z\d.-_]{0,10})?(@)[a-z]{5,10}(\.)[a-z]{3}/';
    $reg_pass='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}';
    if(!(preg_match($reg_email, $email) AND preg_match($reg_pass, $password)AND preg_match($reg_pass, $password2)))
    {
        echo "plz follow the format";
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

    <div id= "main-content">

        <div class="row forget">
            <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-xs-12">
                <form class="form-containerss bg-white" action="registration.php" method="post" enctype="multipart/form-data">
                    <h1 style="margin: 18px 0px;font-weight: bold; font-size: 65px;font-family: 'sans-serif';color: #545b62">Forget Password</h1>

                    <div class="form-group" style="margin: 0px 0px">
                        <label for="exampleInputEmail1" class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color:
">Email </label>
                        <input type="email" class="form-control" name="email" id="email" required pattern="^[a-z\d.-_]{3,15}([a-z\d.-_]{0,10})?(@)[a-z]{5,10}(\.)[a-z]{3}" placeholder="Email" style=" font-weight: lighter; font-size: 15px;font-family: 'sans-serif';color: #545b62  /*pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$"*/>
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="exampleInputPassword1"  class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">Password</label>
                        <input type="password" class="form-control" name="pass" id="pass" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" style=" font-weight: lighter; font-size: 15px;font-family: 'Hobo Std';color: #545b62"> <!--pattern="^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$">-->
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="exampleInputPassword2"  class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62">Confirmed Password</label>
                        <input type="password" class="form-control" name="cpass" id="cpass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="confirmed Password" style=" font-weight: lighter; font-size: 15px;font-family: 'Hobo Std';color: #545b62"><!-- pattern="^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$"-->

                    </div>


                    <button type="submit" class="btn btn-warning btn-block" name="ForgetPass" id="sign_up" style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: #545b62"> Submit</a></button>

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