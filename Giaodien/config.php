<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "mp3";
$connect = mysqli_connect("$dbhost","$dbuser","$dbpass");
mysqli_select_db($connect,"$db");
?>
