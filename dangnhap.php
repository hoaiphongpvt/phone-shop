<?php
    include "connect.php";

    if (isset($_POST['tendangnhap']) && isset($_POST['matkhau'])) {
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau = $_POST['matkhau'];

        $sql = "SELECT * FROM nguoidung WHERE TENDANGNHAP = '".$tendangnhap."' AND MATKHAU='".$matkhau."'";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            // $err['msg'] = "Đăng nhập thành công";
            session_start();
            $_SESSION['user'] = $data;
            header('location: index.php');

        } else {
            $err['msg'] = "Tên tài khoản hoặc mật khẩu không đúng!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo-banner/logotheps.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css_js/base.css">
    <link rel="stylesheet" href="./assets/css_js/main.css">
    <title>Đăng nhập</title>
</head>
<body>
<div id="dangnhap">
        <div class="modal">
            <div class="modal_overlay"></div>
                <div class="modal_body">   
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="auth-form">
                        <div class="auth-form__container">
                            <div class="auth-form__header">
                                    <h3 class="auth-form__heading">Đăng nhập</h3>
                            </div>
                            <div class="auth-form__form">
                                <div class="auth-form__group">
                                    <input type="text" id="tendangnhap" name="tendangnhap" class="auth-form__input" placeholder="Tên đăng nhập">
                                    <p class="has-err" id="err-tendangnhap"></p>
                                </div>
                            <div class="auth-form__group">
                                    <input type="password" id="matkhau" name="matkhau" class="auth-form__input" placeholder="Mật khẩu">
                                    <p class="has-err" id="err-matkhau"></p>
                            </div>
                        </div>
                        <div class="auth-form__note">
                            <p class="auth-form__policy-text2">Quên mật khẩu?</p>
                        </div>
                        <div>
                            <p id="msg" class="has-err"><?php echo (isset($err['msg']) ? $err['msg'] : "")?></p>
                        </div>
                        <div class="auth-form__controls">
                            <a href="index.php" class="btn btn--back" onclick="hide()">TRỞ LẠI</a>
                            <button id="btn-dangnhap" type="submit" class="btn btn--primary">ĐĂNG NHẬP</a></button>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/checkdangnhap.js"></script>
</body>
</html>