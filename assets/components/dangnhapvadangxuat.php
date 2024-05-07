<?php 
    $user = [];
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    }
     $s = "";
     if ($user != NULL) {
         $s .= '<a href="thongtinkhachhang.php" class="list-item list-item-bold list-item-separate"> '.$user['HOTEN'].'</a>
         <a href="./functions/dangxuat.php" class="list-item list-item-bold">Đăng xuất</a>';
     } else {
         $s .= '<a href="dangki.php" class="list-item list-item-bold list-item-separate" onclick="showDangKi()">Đăng kí</a>
         <a href="dangnhap.php" class="list-item list-item-bold" onclick="showDangNhap()">Đăng nhập</a>';
     }
     echo $s;
?>