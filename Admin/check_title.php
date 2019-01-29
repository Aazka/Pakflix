<?php
require "function.php";
$e = $_REQUEST["e"];
$sel_email = "select * from movies_data where Title= '$e'";
$run_email  = mysqli_query($con,$sel_email);
$count = mysqli_num_rows($run_email);
if($count>0)
    echo "Already entered";