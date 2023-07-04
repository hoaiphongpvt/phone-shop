<?php 
    include "../connect.php";
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];
        $ngaysinh=$_POST['ngaysinh'];
        $hinhanh = "";
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau = $_POST['matkhau'];
        $trangthai = 1;

        $query = "SELECT * FROM nguoidung WHERE TENDANGNHAP='$tendangnhap'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $err['msg'] = "Tài khoản đã tồn tại!";
        } else {
            $err['msg'] = "Đăng kí thành công";
            $sql = "INSERT INTO nguoidung (HOTEN, EMAIL, DIENTHOAI, DIACHI, NGAYSINH, HINHANH, TENDANGNHAP, MATKHAU, TRANGTHAI) VALUES ('$hoten', '$email', '$sdt',  '$diachi', '$ngaysinh', '$hinhanh', '$tendangnhap', '$matkhau', '$trangthai')";
            $result = mysqli_query($conn, $sql);

            header('Location: customer.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/logo-banner/logotheps.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <title>Thêm khách hàng</title>
</head>
<body>
<div id="dangki" style="display: block;">
        <div class="modal">
            <div class="modal_overlay"></div>
            <div class="modal_body">    
            <div class="auth-form">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">ĐĂNG KÍ KHÁCH HÀNG</h3>
                        </div>
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" id="hoten" class="auth-form__input" name="hoten" placeholder="Họ và tên">
                                <p class="has-err" id="err-hoten"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="email" id="email" class="auth-form__input" name="email" placeholder="Email">
                                <p class="has-err" id="err-email"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="number" id="sdt" class="auth-form__input" name="sdt" placeholder="Điện thoại">
                                <p class="has-err" id="err-sdt"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="text" id="diachi" class="auth-form__input" name="diachi" placeholder="Địa chỉ">
                                <p class="has-err" id="err-diachi"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="date" id="diachi" class="auth-form__input" name="ngaysinh" placeholder="Ngày sinh">
                                <p class="has-err" id="err-ngaysinh"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="text" id="tendangnhap" class="auth-form__input" name="tendangnhap" placeholder="Tên đăng nhập">
                                <p class="has-err" id="err-tendangnhap"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="password" id="matkhau" class="auth-form__input" name="matkhau" placeholder="Mật khẩu">
                                <p class="has-err" id="err-matkhau"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="password" id="re-matkhau" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                                <p class="has-err" id="err-re-matkhau"></p>
                            </div>
                        </div>
                        <!-- <div class="auth-form__note">
                            <div class="cbDieuKhoan">
                                <input type="checkbox" id="dieukhoan" class="auth-form__policy-check">
                                <p class="auth-form__policy-text">Tôi đồng ý với các điều khoản và dịch vụ.</p>
                            </div>
                            <div>
                                <p class="has-err" id="err-dieukhoan"></p>
                            </div>
                        </div> -->
                        <div>
                            <p class="has-err"><?php echo (isset($err['msg']) ? $err['msg'] : "")?></p>
                        </div>
                        <div class="auth-form__controls">
                            <a href="customer.php" class="btn btn--back">Trở lại</a>
                            <button type="submit" class="btn btn--primary" id="btn-dangki">Đăng kí</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/checkdangki.js"></script>
</body>
</html>

