<?php
$host ="us-cdbr-east-06.cleardb.net";
$uname = "b25c27a308a2d8";
$pwd = '5a7a6a1f';
$db_name = "heroku_ef3d00628febf50";
$conn = mysqli_connect($host, $uname, $pwd, $db_name);
mysqli_set_charset($conn, 'UTF8');

session_start()
?>