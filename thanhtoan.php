<?php 
    include 'connect.php';
    $user = $_SESSION['user'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idND = $user['ID'];
        $nguoinhan = $_POST['hoten'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];
        $phuongthuc = $_POST['pttt'];
        $tongtien = $_POST['tongtien'];
        $trangthai = "Đang xử lý";
        $ngaylap = date('Y-m-d');

        $sql = "INSERT INTO hoadon (ID_NGUOIDUNG, NGAYLAP, NGUOINHAN, SDT, DIACHI, PHUONGTHUCTT, TONGTIEN, TRANGTHAI) 
                VALUES ('$idND', '$ngaylap', '$nguoinhan', '$sdt', '$diachi', '$phuongthuc', '$tongtien', '$trangthai')";
        $result = mysqli_query($conn, $sql);
        $idHD = mysqli_insert_id($conn);

        $query = "SELECT * FROM giohang WHERE ID_NGUOIDUNG=".$user['ID'];
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $idSP = $row['ID_SP'];
                $soluong = $row['SOLUONG'];
                $dongia = '';

                $sql = "INSERT INTO chitiethoadon (ID_HOADON, ID_SP, SOLUONG, DONGIA)
                        VALUES ('$idHD', '$idSP', '$soluong', '$dongia')";
                $result = mysqli_query($conn, $sql);

            }
        } else {
            echo "Không có dữ liệu";
        }
    }
?>