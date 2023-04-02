<?php 
    require "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cửa hàng điện thoại di động The PS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo-banner/logotheps.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css.map">
    <link rel="stylesheet" href="assets/css_js/base.css">
    <link rel="stylesheet" href="assets/css_js/main.css">
    <link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="assets/css_js/style.js"></script>
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header_navbar">
                    <ul class="header__navbar--list">
                        <li class="list-item list-item-separate">
                            <a href="index.php" class="list-item-iconlink">Trang chủ</a>
                        </li>
                        <li class="list-item">
                            <span class="list-item-title">Liên hệ</span>
                            <a href="https://www.facebook.com/" class="list-item-iconlink">
                                <i  class="ti-facebook list-item-icon"></i>
                            </a>
                            <a href="https://www.google.com/gmail/" class="list-item-iconlink">
                                <i  class="ti-email list-item-icon"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__navbar--list">
                        <li class="list-item">
                            <a href="aboutus.php" class="list-item-iconlink">
                                <i class="ti-info list-item-icon"></i>
                                Giới thiệu
                            </a>
                        </li>
                        <a class="list-item list-item-bold list-item-separate" onclick="showDangKi()">Đăng kí</a>
                        <a class="list-item list-item-bold" onclick="showDangNhap()">Đăng nhập</a>
                    </ul>
                </nav>
               <div class="header_with-search">
                   <div class="header__logo">
                    <a href="index.php"><img src="assets/img/logo-banner/logotheps.png" class="header__logo-img"></a>
                   </div>
                   <div class="header_search">
                        <form action="timkiem.php" method="GET" class="search">
                            <input type="text" placeholder="Tìm kiếm điện thoại..." class="header_search-input" name="keyword">
                            <button class="header_search-button" type="submit">
                                <!-- <a href="timkiem.php" style="text-decoration: none;"></a> -->
                                <i class="ti-search header_search-icon"></i>
                            </button>
                        </form>
                    </div>
                 <div class="header_cart">
                    <a href="#" onclick="login_required()" style="text-decoration: none;"><i class="header_cart-icon ti-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- <header class="header2">
            <div class="grid">
                <nav class="brand">
                    <ul class="list_brand">
                        <li class="list_brand-item"><a href="#apple"><i class="ti-apple"></i> APPLE</a></li>
                        <li class="list_brand-item"><a href="#samsung">SAMSUNG</a></li>
                        <li class="list_brand-item"><a href="#xiaomi">XIAOMI</a></li>
                        <li class="list_brand-item"><a href="#oppo">OPPO</a></li>
                        <li class="list_brand-item"><a href="#vivo">VIVO</a></li>
                    </ul>
                 </nav>
            </div>
        </header> -->
        <div class="container">
           <div class="grid">
               <div class="content">
                <div id="banner">
                        <img src="assets/img/logo-banner/The PS logo (1).png" id="banner-img">
                    <div>
                        <img src="assets/img/logo-banner/banner2.jpg" id="banner-img" height="100%">
                    </div>
                   </div>
                </div>
                <div class="banner">
                    <img src="assets/img/logo-banner/banner.png" id="banner-img">
                </div>
                <div id="apple">
                    <div class="phone-heading">
                        <h3 class="phone-heading-text">Tất cả sản phẩm</h3>
                    </div>
                    <div class="phone-content">
                        
                        <?php
                            function currency_format($number, $suffix = 'đ') {
                                if (!empty($number)) {
                                    return number_format($number, 0, ',', '.') . "{$suffix}";
                                }
                            }
                            $sql = "SELECT * FROM sanpham";
                            $result = $conn->query($sql);
                            // $count = 0;
                            // $group = "<div class='phone-group-item'>";
                            while($row = $result->fetch_assoc()) {
                                $item = "<div class='phone-phone-item'>";
                                $item .= "<a href='chitietsanpham.php?id=".$row['ID']."'><img src=".$row["HINHANH"]." class='phone-img'></a>";
                                $item .= "<p  class='phone-name'><a href='chitietsanpham.php?id=".$row['ID']."'>".$row["TEN"]."</a></p>";
                                $item .= "<h3 class='phone-price'>".currency_format($row["GIA"]) ."</h3>";
                                $item .= "<div class='phone-vote'><p class='value'>".$row["DANHGIA"]."</p><i class='ti-star'></i></div>";
                                $item .= "<ul class='phone-parameter'>
                                    <li>Màn hình 6.7 inch, Chip Apple A15 Bionic</li>
                                    <li>RAM 6 GB, ROM 128 GB</li>
                                    <li>Camera sau: 3 camera 12 MP</li>
                                    <li>Camera trước: 12 MP</li>
                                    <li>Pin 4352 mAh, Sạc 20 W</li>
                                    </ul>";
                                $item .= "</div>";
                                echo $item;                                    
                            }
                        ?>
                        
                    </div>
                </div>
                    <!-- <div class="phone-heading">
                        <h3 class="phone-heading-text">XIAOMI</h3>
                    </div> -->
                    <!-- <div class="phone-content">
                        <div class="phone-group-item">
                            <div class="phone-phone-item">
                                <img src="assets/xiaomi/img/xiaomi-mi-11.jpg" class="phone-img">
                                <p class="phone-name">Xiaomi Mi 11 5G</p>
                                <h3 class="phone-price">21.990.000đ</h3>
                                <div class="phone-vote">
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <ul class="phone-parameter">
                                    <li>Màn hình 6.81", Chip Snapdragon 888</li>
                                    <li>RAM 8 GB, ROM 256 GB</li>
                                    <li>Camera sau: 108 MP, 13 MP, 5 MP</li>
                                    <li>Camera trước: 20 MP</li>
                                    <li>Pin 4600 mAh, Sạc 55 W</li>
                                </ul>
                            </div>
                            <div class="phone-phone-item">
                                <img src="assets/xiaomi/img/xiaomi-11t-pro.jpg" class="phone-img">
                                <p class="phone-name">Xiaomi Mi 11T Pro 5G</p>
                                <h3 class="phone-price">14.990.000đ</h3>
                                <div class="phone-vote">
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <ul class="phone-parameter">
                                    <li>Màn hình 6.67", Chip Snapdragon 888</li>
                                    <li>RAM 12 GB, ROM 256 GB</li>
                                    <li>Camera sau: 108 MP & 8 MP, 5 MP</li>
                                    <li>Camera trước: 16 MP</li>
                                    <li>Pin 5000 mAh, Sạc 120 W</li>
                                </ul>
                            </div>
                            <div class="phone-phone-item">
                                <img src="assets/xiaomi/img/xiaomi-11t-pro-5g-8gb.jpeg" class="phone-img">
                                <p class="phone-name">Xiaomi Mi 11T Pro 5G</p>
                                <h3 class="phone-price">13.990.000đ</h3>
                                <div class="phone-vote">
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <ul class="phone-parameter">
                                    <li>Màn hình 6.67", Chip Snapdragon 888</li>
                                    <li>RAM 8 GB, ROM 128 GB</li>
                                    <li>Camera sau: 108 MP 12 MP 10 MP 10 MP</li>
                                    <li>Camera trước: 16 MP</li>
                                    <li>Pin 5000 mAh, Sạc 120 W</li>
                                </ul>
                            </div>
                            <div class="phone-phone-item">
                                <img src="assets/xiaomi/img/xiaomi-11-lite-5g.jpg" class="phone-img">
                                <p class="phone-name">Xiaomi Mi 11 Lite 5G</p>
                                <h3 class="phone-price">9.490.000đ</h3>
                                <div class="phone-vote">
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <ul class="phone-parameter">
                                    <li>Màn hình 6.55", Chip Snapdragon 778G</li>
                                    <li>RAM 8 GB, ROM 128 GB</li>
                                    <li>Camera sau: Chính 64 MP & Phụ 8 MP, 5 MP</li>
                                    <li>Camera trước: 20 MP</li>
                                    <li>Pin 4250 mAh, Sạc 33 W</li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="phone-group-item">
                            <div class="phone-phone-item">
                                <img src="assets/xiaomi/img/xiaomi-redmi-note-10-projpg.jpg" class="phone-img">
                                <p class="phone-name">Xiaomi Redmi Note 10 Pro</p>
                                <h3 class="phone-price">7.490.000đ</h3>
                                <div class="phone-vote">
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <ul class="phone-parameter">
                                    <li>Màn hình 6.67", Chip Snapdragon 732G</li>
                                    <li>RAM 8 GB, ROM 128 GB</li>
                                    <li>Camera sau: 108 MP & 8 MP, 5 MP, 2 MP</li>
                                    <li>Camera trước: 16 MP</li>
                                    <li>Pin 5020 mAh, Sạc 33 W</li>
                                </ul>
                            </div>
                            <div class="phone-phone-item">
                                <img src="assets/xiaomi/img/xiaomi-redmi-note-10s.jpeg" class="phone-img">
                                <p class="phone-name">Xiaomi Remid Note 10S</p>
                                <h3 class="phone-price">6.490.000đ</h3>
                                <div class="phone-vote">
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <ul class="phone-parameter">
                                    <li>Màn hình 6.43", Chip MediaTek Helio G95</li>
                                    <li>RAM 8 GB, ROM 256 GB</li>
                                    <li>Camera sau: 64 MP &  8 MP, 2 MP, 2 MP</li>
                                    <li>Camera trước: 13 MP</li>
                                    <li>Pin 5000 mAh, Sạc 33 W</li>
                                </ul>
                            </div>
                            <div class="phone-phone-item">
                                <img src="assets/xiaomi/img/redmi-10.jpg" class="phone-img">
                                <p class="phone-name">Xiaomi Redmi 10</p>
                                <h3 class="phone-price">4.290.000đ</h3>
                                <div class="phone-vote">
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <ul class="phone-parameter">
                                    <li>Màn hình 6.5", Chip MediaTek Helio G88</li>
                                    <li>RAM 4 GB, ROM 128 GB</li>
                                    <li>Camera sau: 50 MP & 8 MP, 2 MP, 2 MP</li>
                                    <li>Camera trước: 8 MP</li>
                                    <li>Pin 5000 mAh, Sạc 18 W</li>
                                </ul>
                            </div>
                            <div class="phone-phone-item">
                                <img src="assets/xiaomi/img/redmi-9c.jpg" class="phone-img">
                                <p class="phone-name">Xiaomi Redmi 9C</p>
                                <h3 class="phone-price">3.490.000đ</h3>
                                <div class="phone-vote">
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <ul class="phone-parameter">
                                    <li>Màn hình 6.53", Chip MediaTek Helio G35</li>
                                    <li>RAM 4 GB, ROM 128 GB</li>
                                    <li>Camera sau: Chính 13 MP & Phụ 2 MP, 2 MP</li>
                                    <li>Camera trước: 5 MP</li>
                                    <li>Pin 5000 mAh, Sạc 10 W</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div> -->
                </div>
                <div class="next-page">
                    <div class="icon-page1">
                        <a href="index.html" title="Quay về đầu trang"><i class="ti-arrow-circle-left"></i></a>
                    </div>
                    <div class="page1" style="background-color: #cb1c22;">
                        <a href="index.html" style=" color: white;">1</a>
                    </div>
                    <div class="page2">
                        <a href="trangchu2.html">2</a>
                    </div>
                    <div class="icon-page2">
                        <a href="trangchu2.html" title="Qua trang kế"><i class="ti-arrow-circle-right"></i></a>
                    </div>
                </div>
             </div>
        </div>
        <?php require "footer.php"?>
    </div>
    <script src="./assets/slider/banner.js"></script>
    <div id="dangki" style="display: none;">
        <div class="modal">
            <div class="modal_overlay"></div>
            <div class="modal_body">    
            <div class="auth-form">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng kí</h3>
                        </div>
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" placeholder="Tên đăng nhập">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" placeholder="Mật khẩu">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                            </div>
                        </div>
                        <div class="auth-form__note">
                            <input type="checkbox" class="auth-form__policy-check">
                            <p class="auth-form__policy-text">Tôi đồng ý với các điều khoản và dịch vụ.</p>
                        </div>
                        <div class="auth-form__controls">
                            <button class="btn btn--back" onclick="hide()">TRỞ LẠI</button>
                            <button class="btn btn--primary" onclick="DangKiThanhCong()">ĐĂNG KÍ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Dang nhap -->
    <div id="dangnhap" style="display: none;">
        <div class="modal">
            <div class="modal_overlay"></div>
                <div class="modal_body">   
                    <div class="auth-form">
                        <div class="auth-form__container">
                            <div class="auth-form__header">
                                    <h3 class="auth-form__heading">Đăng nhập</h3>
                            </div>
                            <div class="auth-form__form">
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" placeholder="Tên đăng nhập">
                                </div>
                            <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" placeholder="Mật khẩu">
                            </div>
                        </div>
                        <div class="auth-form__note">
                            <p class="auth-form__policy-text2">Quên mật khẩu?</p>
                        </div>
                        <div class="auth-form__controls">
                            <button class="btn btn--back" onclick="hide()">TRỞ LẠI</button>
                            <button class="btn btn--primary" ><a href="demo/dangnhap.html" style="color: white; text-decoration: none;">ĐĂNG NHẬP</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Yeu cau dang nhap-->
    <div id="login_required" style="display: none;">
        <div class="modal">
            <div class="modal_overlay"></div>
            <div class="modal_body">    
                <div class="auth-form">
                    <div class="auth-form__container">
                        <div class="cart-icon-check">
                           <div  style="background-color: #cb1c22; border: 10px solid #cb1c22;"><i class="ti-alert"></i></div>
                        </div>
                        <div class="cart-notification">
                            <p>Vui lòng đăng nhập!</p>
                        </div>
                        <div class="cart-button-OK">
                            <button class="btn btn--primary" onclick="hide_login_required()">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>