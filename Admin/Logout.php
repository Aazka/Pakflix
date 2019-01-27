<?php
session_start();
session_destroy();
header('location:Login.php?logged_out=You have logged out');
?>