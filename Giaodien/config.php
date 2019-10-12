<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "nghenhac";
$connect = mysqli_connect("$dbhost","$dbuser","$dbpass");
mysqli_select_db($connect,"$db");
?>
