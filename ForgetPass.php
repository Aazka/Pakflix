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

<meta name="viewport" content="width=device-width initial-scale=1.0">
<meta name="keywords" content="html,css,javascript,xml">
<meta name="discription" content="Pakflix films">
<meta name="author" content="Unbreen zafar, Aazka iqbal,Saman khan,Mayeda meraj,Adina mudassar,shams uz zaman">

<head>
    <title>Responsive Navigation Bar</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div id="wrapper">

    <div id="main-content">
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-8 col-lg-8 col-xl-5">
                    <form class="form-container1">
                        <h1>Forget Password</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required pattern="^[a-z\d.-_]{3,15}([a-z\d.-_]{0,10})?(@)[a-z]{5,10}(\.)[a-z]{3}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirmed Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmed Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                        </div>
                        <button type="submit" name="ForgetPass" class="btn btn-success btn-block">Submit</button>
                    </form>
                    </section>
                    </section>
                    </section>
                </div>
<?php require "Footer.php"?>
</div>
</body>
</html>