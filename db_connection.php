<?php
//$conn = new mysqli($fname, $lname, $email, $pass, $dbname);
$conn = mysqli_connect("localhost","root","","movie_db");
if(!$conn)
    die("Connection failed");