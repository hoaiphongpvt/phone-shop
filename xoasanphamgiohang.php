<?php 
    include "connect.php";

    if (isset($_GET['idSP']) && isset($_GET['idND'])) {
        $idSP = $_GET['idSP'];
        $idND = $_GET['idND'];
        $sql = "DELETE FROM giohang WHERE ID_SP = '$idSP' AND ID_NGUOIDUNG = '$idND'";
        $result = mysqli_query($conn, $sql);
        header('Location: giohang.php');
    }
?>