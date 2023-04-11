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
        $ngaylap = date('Y-m-d H:i:s');

        //Thêm hóa đơn
        $sql = "INSERT INTO hoadon (ID_NGUOIDUNG, NGAYLAP, NGUOINHAN, SDT, DIACHI, PHUONGTHUCTT, TONGTIEN, TRANGTHAI) 
                VALUES ('$idND', '$ngaylap', '$nguoinhan', '$sdt', '$diachi', '$phuongthuc', '$tongtien', '$trangthai')";
        $result = mysqli_query($conn, $sql);
        $idHD = mysqli_insert_id($conn);

        //Thêm chi tiết hóa đơn
        $query = "SELECT * FROM giohang WHERE ID_NGUOIDUNG=".$user['ID'];
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $idSP = $row['ID_SP'];
            $soluong = $row['SOLUONG'];
            $dongia = 0; // Khởi tạo biến đơn giá với giá trị mặc định là 0
            $query = "SELECT GIA FROM sanpham WHERE ID=$idSP";
            $result2 = mysqli_query($conn, $query);
            if (mysqli_num_rows($result2) > 0) {
                $row2 = mysqli_fetch_assoc($result2);
                $dongia = $row2['GIA'];
            }

            echo "IDHD:".$idHD." IDSP: ".$idSP. " Số lượng: ".$soluong. " Đơn giá: ".$dongia."<br/>";
        
            $sql = "INSERT INTO chitiethoadon (ID_HOADON, ID_SP, SOLUONG, DONGIA)
                    VALUES ('$idHD', '$idSP', '$soluong', '$dongia')";
            $exe = mysqli_query($conn, $sql);
        }
        
    }
?>