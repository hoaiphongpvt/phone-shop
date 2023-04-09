<?php 
    include "connect.php";

    if (isset($_GET['idsanpham']) && isset($_GET['idnguoidung']) && isset($_GET['value'])) {
        $idSP = $_GET['idsanpham'];
        $idND = $_GET['idnguoidung'];
        $value = $_GET['value'];

        $sql = "SELECT * FROM giohang WHERE ID_SP = $idSP AND ID_NGUOIDUNG = $idND";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if ($value == "-") {
                $soLuongHienTai = $row['SOLUONG'];
                if ($soLuongHienTai == 1) {
                    header("Location: giohang.php");
                    return;
                }
                $soLuongMoi = $soLuongHienTai - 1;
                $sql = "UPDATE giohang SET SOLUONG = $soLuongMoi WHERE ID_SP = $idSP AND ID_NGUOIDUNG = $idND";
                $conn->query($sql);
            } else {
                $soLuongHienTai = $row['SOLUONG'];
                $soLuongMoi = $soLuongHienTai + 1;
                $sql = "UPDATE giohang SET SOLUONG = $soLuongMoi WHERE ID_SP = $idSP AND ID_NGUOIDUNG = $idND";
                $conn->query($sql);
            }
           
        }

        header("Location: giohang.php");
    }
?>