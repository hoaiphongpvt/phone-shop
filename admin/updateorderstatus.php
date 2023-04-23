<?php 
    include "../connect.php";

    if(isset($_GET['ID']) && isset($_GET['status'])) {
        $id = $_GET['ID'];
        $status = $_GET['status'];
        $date = date('Y-m-d');

        echo $status;

        if ($status == "Đã giao") {
            $sql = "UPDATE hoadon SET TRANGTHAI='$status', NGAYGIAO='$date' WHERE ID_HOADON='$id'";
            $result = mysqli_query($conn, $sql);
        } else {
            $sql = "UPDATE hoadon SET TRANGTHAI='$status' WHERE ID_HOADON='$id'";
            $result = mysqli_query($conn, $sql);
        }
        
        header('Location: bill.php');
    }
?>