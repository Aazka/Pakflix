<?php
require "../Admin/db_connection.php";
$e = $_REQUEST["e"];
$sel_email = "select * from user_info where email = '$e'";
$run_email  = mysqli_query($con,$sel_email);
$count = mysqli_num_rows($run_email);
if($count>0)
    echo "Email verified";