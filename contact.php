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
<html lang="en" xmlns:margin-left="http://www.w3.org/1999/xhtml">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="description" content="Free Web tutorials">
<meta name="author" content="Unbreen,Shams,Mayda,Saman,Adhina,Aazka">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">

<head>
    <title>PAKFLIX</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>



    <style>
        input[id="namee"]:invalid {


            color:red;
        }
        input[id="namee"]:valid
        {


        }
        input[id="email"]:invalid {
            background-color: lightgreen;
            color:red;

        }
        input[id="email"]:valid
        {
            background-color: lightgreen;

        }
        input[id="Number"]:invalid {
            background-color: lightgreen;
            color:red;

        }
        input[id="Number"]:valid
        {
            background-color: lightgreen;

        }
        .backg
        {
            background-color: lightgreen;
            width: 30%;
            margin-left:35%;
        }


        

        .contact {
            background-color:lightgreen;
            color: black;
            text-align:center;
            margin-top:10%;
            width:98%;
            position: relative;
            /*
                        width: fit-content;
            */
        }
        .info {
            color: black;
            font-size:100%;
            margin-left:44%;
            text-align:center;
            width:fit-content;

            /*  background: #505050;*/
        }
        .container {
            display: inline-block ;
        }

        .eminfo {
            margin-left:0%;
            margin-bottom:5%;
            text-align:center;
            margin-top:3%;
            width:99%;
            display:block;
        }
        .column {
            float: left;
            width: 50%;
        }
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>

</head>
<body>

<div id="wrapper">
<div id="main-content">
<div class="row" >
    <div class=" col-12 ">
        <div class="contact">
            <h2> <strong> Contact us </strong> <i class="fas fa-phone-square"></i> </h2>
        </div>
        <div class="container">
            <div class=" info "class=" col-12 col-sm-8">
                <p>
                    <strong> Address: </strong> 1 - Khayaban-e-Jinnah Johar Town, Lahore Pakistan  <br>
                    <strong> Phone: </strong> +92 203412345 <br>
                    <strong> Email: </strong> samankhan@ucp.edu.pk
                </p>
            </div>
        </div>
        <div>
            <img src="image/location.jpg" style="max-width:25%; max-height:10%; margin-left:40%; display: inline-block ; " >
        </div>
    </div>

    <div class="eminfo"class=" col-12 col-sm-8 col-md-8 col-lg-8 col-xl-6">
        <form class="form-container">
            <h2 style="background-color:lightgreen; width:100%"> <strong> Email us: </strong> <i class="fas fa-envelope-open"></i> </h2>
            <span >
                <div class="backg">
                <input style="background-color: lightgreen; " class="form-control" size="5%"
                       id="namee" placeholder="NAME" required pattern="[a-zA-Z\-'\s]+">
                </div>
                <br><br>
                 <div class="backg">
                    <input style="background-color: lightgreen;" margin-top="-1%"  margin-left="20%" size="45%" class="form-control"
                           id="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}">
                    </div>
                <br><br>
         <div class="backg">
        <input  style="background-color: lightgreen;"  size="45%" class="form-control"
                id="Number" placeholder="Mobile Number" required pattern="^(0092|\+92)(\s|-)?3\d{2}(\s|-)?(\d{7})|^03\d{2}(\s|-)?(\d{7})">
              </div>
             </span>

            <br><br>
            <span>
              <textarea style="background-color:lightgreen;width:30%;" margin-left="10%"placeholder="Your Message Here"  cols="47" rows="10"></textarea >
            </span>
            <br>
            <input  type="submit" name="Send" value="Send" class="wpcf7-form-control wpcf7-submit send-btn">
        </form>
    </div>
</div>
</div>
    <?php require "Footer.php"?>
</div>



</body>
</html>


