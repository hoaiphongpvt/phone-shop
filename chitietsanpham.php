<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Apple iPhone 13 Pro Max</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/apple/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css.map">
    <link rel="stylesheet" href="./assets/css_js/base.css">
    <link rel="stylesheet" href="./assets/css_js/main.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="./assets/css_js/style.js"></script>
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header_navbar">
                    <ul class="header__navbar--list">
                        <li class="list-item list-item-separate">
                        <a href="index.html" class="list-item-iconlink">Trang chủ</a> 
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
                            <a href="" class="list-item-iconlink">
                                <i class="ti-bell list-item-icon"></i>
                                Thông báo
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="" class="list-item-iconlink">
                                <i class="ti-help-alt list-item-icon"></i>
                                Trợ giúp
                            </a>
                        </li>
                        <a class="list-item list-item-bold list-item-separate" onclick="showDangKi()">Đăng kí</a>
                        <a class="list-item list-item-bold" onclick="showDangNhap()">Đăng nhập</a>
                    </ul>
                </nav>
               <div class="header_with-search">
                   <div class="header__logo">
                    <img src="./assets/img/logo-banner/logotheps.png" class="header__logo-img">
                   </div>
                   <div class="header_search">
                        <input type="text" placeholder="Tìm kiếm điện thoại..." class="header_search-input">
                        <button class="header_search-button">
                            <a href="timkiemtrangchu.html" style="text-decoration: none;"><i class="ti-search header_search-icon"></i></a>
                        </button>
                    </div>
                 <div class="header_cart">
                    <a href="#" onclick="login_required()" style="text-decoration: none;"><i class="header_cart-icon ti-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <header class="header2">
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
        </header>
        <div class="container-product">
            <div class="grid">
                <div class="banner">
                    <img src="./assets/apple/img/banner-product.png" class="banner-img">
                </div>
                <div class="name-product">
                    <p>Apple iPhone 13 Pro Max</p>
                </div>
                <div class="general-infomation">
                    <div class="img-product">
                        <img src="./assets/apple/img/iphone-13-pro-max.jpg" class="phone-img-product"> 
                    </div>
                    <div>
                        <div class="option-product">
                            <div class="price-product">
                                <span>Giá cực sốc:</span>
                                <p>32.990.000đ</p>
                            </div>
                            </div>
                            <div class="add-to-cart">
                                <button class="btn-add-to-cart" onclick="login_required()">THÊM VÀO GIỎ HÀNG</button>
                            </div>
                            <div class="buy-now">
                                <button class="btn-buy-now" onclick="order()">MUA NGAY</button>
                            </div>
                        </div>
                    </div>

                <div class="detailed-configuration">
                        <div class="detailed-configuration-info">
                            <h3>Cấu hình điện thoại iPhone 13 Pro Max</h3>
                            <ul class="detailed-configuration-info-list">
                                <li>Hệ điều hành: iOS 15</li>
                                <li>Chipset: Apple A15 Bionic (5 nm)</li>
                                <li>Độ phân giải: 1284 x 2778 pixels</li>
                                <li>Màn hình rộng: 6.7 inches</li>
                                <li>Camera sau: 3 Camera: 12MP + 12MP + 12MP + TOF 3D LiDAR</li>
                                <li>RAM: 8 GB</li>
                                <li>Bộ nhớ trong ( Rom): 512GB</li>
                                <li>Camera trước: 12 MP, f/2.2</li>
                            </ul>
                        </div>
                        <div class="detailed-configuration-img">
                            <img src="./assets/apple/img/iphone-13-pro-max-cofi.jpg" width="100%">
                        </div>
                    </div>
                    <div class="review">

                </div>
                <div class="desc">
                    <h3 class="desc_title">Đánh giá chi tiết iPhone 13 Pro Max</h3>
                    <p class="desc_detail">Đây là mô tả chi tiết</p>
                </div>
            </div>
        </div>
        <?php require "footer.php"?>
    </div>
    <!--Yêu cầu đăng nhập-->
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
     <!-- Mua ngay -->
     <div id="order" style="display: none;">
        <div class="modal">
            <div class="modal_overlay"></div>
                <div class="modal_body">   
                    <div class="auth-form">
                        <div class="auth-form__container">
                            <div class="order-header">
                                    <div class="order-img">
                                        <img src="../../assets/apple/img/iphone-13-pro-max-gold-1-200x200.jpg" alt="">
                                    </div>
                                    <div class="order-text">
                                        <span>Điện thoại iPhone 13 Pro Max</span>
                                        <p>Bộ nhớ: 128GB</p>
                                        <p>Màu: Vàng</p>
                                    </div>
                            </div>
                            <div class="auth-form__form">
                                <div class="order-info">
                                    <span>THÔNG TIN KHÁCH HÀNG</span>
                                    <div class="order-choose-gender">
                                        <p><input type="radio" name="gender" style="vertical-align: middle; margin: 0px 5px;">Anh</p>
                                        <p><input type="radio" name="gender"  style="vertical-align: middle; margin: 0px 5px;">Chị</p>
                                    </div>
                                </div>
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" placeholder="Họ và Tên">
                                </div>
                                <div class="auth-form__group">
                                        <input type="number" class="auth-form__input" placeholder="Số điện thoại">
                                </div>
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" placeholder="Địa chỉ">
                                </div>
                                <div class="order-total">
                                    <p class="order-total-text">Tổng tiền:</p>
                                    <p class="order-total-price">32.990.000đ</p>
                                </div>
                            </div>
                        <div class="auth-form__controls">
                            <button class="btn btn--back" onclick="hide_cart()">TRỞ LẠI</button>
                            <button class="btn btn--primary" onclick="DatHangThanhCong()">ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>