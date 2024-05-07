<?php 
    include "../functions/connect.php";
    unset($_SESSION['admin']);
    header('location: login.php')
?>