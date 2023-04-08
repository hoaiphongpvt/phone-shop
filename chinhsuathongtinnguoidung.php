<?php 
    include "connect.php";

    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $user = $_SESSION['user'];
        $hinhanh = $_GET['hinhanh'];
        $hoten = $_GET['hoten'];
        $ngaysinh = $_GET['ngaysinh'];
        $sdt = $_GET['sdt'];
        $email = $_GET['email'];
        $diachi = $_GET['diachi'];

        $sql = "UPDATE nguoidung SET HOTEN= '$hoten', HINHANH='$hinhanh', NGAYSINH='$ngaysinh', DIENTHOAI='$sdt', DIACHI='$diachi', EMAIL='$email' WHERE ID = ".$user['ID'];
        $result = $conn->query($sql);
        header('Location: thongtinkhachhang.php');
    }
?>