<?php
$host ="localhost";
$uname = "root";
$pwd = '';
$db_name = "store";
$conn = mysqli_connect($host, $uname, $pwd, $db_name);
mysqli_set_charset($conn, 'UTF8');

session_start()
?>