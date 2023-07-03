<?php 
    include "connect.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Về chúng tôi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/logo-banner/logotheps.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css.map">
    <link rel="stylesheet" href="./assets/css_js/base.css">
    <link rel="stylesheet" href="./assets/css_js/aboutus.css">
    <link rel="stylesheet" href="./assets/css_js/main.css">
    <link rel="stylesheet" href="assets/css_js/responsive.css">
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
                        <?php 
                           include "./assets/components/dangnhapvadangxuat.php";
                        ?> 
                    </ul>
                </nav>
               <div class="header_with-search">
                   <div class="header__logo">
                    <a href="index.php"><img src="assets/img/logo-banner/logotheps.png" class="header__logo-img"></a>
                   </div>
                   <div class="header_search">
                        <?php include "./assets/components/search.php"?>
                    </div>

                    <div class="header_cart">

                        <?php 
                            if ($user) {
                                echo '<a href="giohang.php" style="text-decoration: none;">
                                        <i class="header_cart-icon ti-shopping-cart"></i>
                                    </a>';
                            } else {
                                echo '<span onclick="alert(\'Vui lòng đăng nhập\')">
                                        <i class="header_cart-icon ti-shopping-cart"></i>
                                    </span>';
                            }
                        ?>
                    </div>

                    <div class="option" id="menu">
                        <a href="#">
                            <i class="header-menu ti-menu"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <header class="mobile-header">
            <!-- Overlay -->
            <div class="menu-overlay" id="menu-overlay"></div>
            <div class="menu-drawer" id="menu-drawer">
                <a href="#!"><img src="./assets/img/logo-banner/logotheps.png" alt="Besnik." class="logo-mobile"></a>
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="https://www.facebook.com/">Liên hệ</a></li>
                    <li><a href="aboutus.php">Giới thiệu</a></li>
                    <?php 
                        if ($user) {
                            echo '<li><a href="giohang.php">Giỏ hàng</a></li>';
                        } else {
                            echo '<span onclick="alert(\'Vui lòng đăng nhập\')">
                                    <a>Giỏ hàng</a>
                                </span>';
                        }
                    ?>
                    <li class="saperate"></li>
                    <?php 
                        include "./assets/components/dangnhapvadangxuat.php";
                    ?> 
                </ul>
            </div>
        </header>
        <div class="container">
            <div class="grid">
                <div class="content">
                    <div class="about" style="font-size: 14px;">
                        <h1 style="margin-top: 0; padding-top: 20px">Về chúng tôi</h1><hr>
                    </div>
                    <div class="aboutus">
                        <div class="ab_text">
                            <p>Với việc bùng nổ của nền công nghệ hiện nay thì nhu cầu về một chiếc điện thoại thông minh sẽ không quá xa lạ với tất cả mọi người.</p>
                            <p>Chính vì nhu cầu đó nên nhóm Lập trình Web The Ps quyết định tìm hiểu về quy trình và xây dựng một trang web bán điện thoại.</p>
                            <p>Trang web đáp ứng được các nhu cầu mà một trang bán điện thoại cần có như: tìm kiếm, phân trang sản phẩm, phân loại sản phẩm, chọn mua, xem giỏ hàng, đăng nhập, đăng xuất, đăng ký thành viên.</p>
                            <p>Từ những tính năng trên, nhóm chúng tôi đã thiết kế các tính năng đó và tối ưu về giao diện người dùng. Giúp người dùng có thể trải nghiệm trang web vận hành một cách dễ dàng và mượt mà nhất</p>
                            <p>Trang web muốn níu giữ khách hàng thì giao diện cũng là một thứ được ưu tiên. Nhóm đã tham khảo về thiết kế của các website có nội dung tương tự để đánh giá, cũng như thảo luận về việc thiết kế giao diện người dùng.</p>
                            <p>Từ đó rút kinh nghiệm về các nguyên lý mà các website tương tự đã phạm phải. Rút kinh nghiệm cho nhóm để nhóm bàn bạc và cải thiện về giao diện trên trang web của mình.</p>
                            <p>Sau nhiều những tranh cãi, bàn luận nảy lửa, các thành viên đã cùng thống nhất với nhau về thiết kế giao diện của trang web.</p>
                            <p>Vì đây cũng là một trong hai Project đầu của nhóm nên có thể trang web vẫn chưa thật sự tối ưu hoặc hoàn hảo so với những website tương tự mong sẽ được các thầy, cô sẽ khoan dung.</p>
                            <p>Trang web này được thực hiện với mục đích học tập, nhằm đánh giá sự sáng tạo mới cùng những nỗ lực từ các thành viên của nhóm The Ps sau học phần Lập trình Web và Ứng dụng.</p>
                        </div>
                        <div class="ab_contact">
                            <div class="ab_contact-heading">Liên hệ với chúng tôi</div>
                            <div class="ab_group">
                                <a href="https://www.facebook.com/nhpphnnhp/">Nguyễn Hoài Phong</a>
                            </div>
                            <div class="ab_group">
                                <a href="https://www.facebook.com/anhpha.aquarius">Nguyễn Võ Anh Pha</a>
                            </div>
                            <div class="ab_group">
                                <a href="https://www.facebook.com/chanphong.giang.73">Giang Chấn Phong</a>
                            </div>
                            <div class="ab_group">
                                <a href="https://www.facebook.com/dung.nguoi.9279">Nguyễn Hoàng Phúc</a>
                            </div>
                        </div>
                 </div> 
                </div>
            </div>    
        </div>
        <?php require "./assets/components/footer.php"?>
    </div>
    <script src="./assets/js/timkiem.js"></script>
    <div id="dangki" style="display: none">
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
                            <button class="btn btn--primary" onclick="DangNhapThanhCong()">ĐĂNG NHẬP</button>
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
    <script src="./assets/js/menuMobile.js"></script>
</body>
</html>