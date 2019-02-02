<?php
require "../Admin/db_connection.php";
$e = $_REQUEST["e"];
$check_email = "select * from user_info where  email='$e'";
$run_email = mysqli_query($con, $check_email);
$count = mysqli_num_rows($run_email);
if($count>0)
{
    echo "Email already exists" ;
}
