<?php require "Header.php";
if(isset($_POST['Send']))
{
    $email=$_POST['email'];
    $name=$_POST['NAME'];
    $num=$_POST['Number'];
    $reg_email='/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/';
    $reg_name='[a-zA-Z\-\'\s]+';
    $reg_num='^(0092|\+92)(\s|-)?3\d{2}(\s|-)?(\d{7})|^03\d{2}(\s|-)?(\d{7})';
    if(!(preg_match($reg_email, $email) AND preg_match($reg_name, $name)  AND preg_match($reg_num, $num)))
    {
        echo "plz follow the format";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">




    <style>
        input[id="username"]:invalid {


            color:red;
        }
        input[id="username"]:valid
        {


        }
        input[id="email"]:invalid {
            background-color:red;

        }
        input[id="email"]:valid
        {
            background-color: lightgreen;

        }


    </style>



</head>
<body>
<div id="wrapper">
    <div id= "maincontent">
        <div class="row signin">
            <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-xs-12">
                <form class="form-containers bg-white" method="post" action="" style="height: 364px">
                    <h1 style="margin: 18px 0px;font-weight: bold; font-size: 52px;font-family: 'monospace';color: #545b62">Contact</h1>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="username" class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'monospace';color: #545b62">UserName</label>
                        <input type="text" class="form-control" id="username" placeholder="UserName" required pattern="[a-zA-Z\-'\s]+" style=" font-weight: lighter; font-size: 15px;font-family: 'Hobo Std';color: black">
                    </div>
                    <div class="form-group" style="margin: 0px 0px">
                        <label for="exampleInputEmail1" class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'monospace';color: #545b62">Email </label>
                        <input type="email" class="form-control" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}"placeholder="Email" style=" font-weight: lighter; font-size: 15px;font-family: 'Hobo Std';color: black">
                    </div>
                    <div class="form-group" style="margin: 0px 0px;padding-bottom: 14px">
                        <label for="exampleInputPassword1"  class="float-left" style=" font-weight: bold; font-size: 15px;font-family: 'monospace';color: #545b62">Message</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Message" style=" font-weight: lighter; font-size: 15px;font-family: 'Hobo Std';color: black;padding-bottom: 14px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning  btn-block " class="form-control" style=" font-weight: bold; font-size: 15px;font-family: 'Hobo Std';color: #545b62">Send</button>
                </form>
            </div>
        </div>
    </div>


    <?php require "Footer.php";
    ?>

</div>

</body>






