<?php 
    include "connect.php";
    include "./assets/components/formatCurrency.php";

    $sql = "SELECT * FROM giohang JOIN nguoidung ON giohang.ID_NGUOIDUNG = nguoidung.ID JOIN sanpham ON giohang.ID_SP = sanpham.ID";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Giỏ Hàng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/logo-banner/logotheps.png" type="image/x-icon">
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
                                <i class="ti-bell list-item-icon"></i>
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
                    <a href="index.php"><img src="./assets/img/logo-banner/logotheps.png" class="header__logo-img"></a>
                   </div>
                   <div class="header_search">
                        <?php include "./assets/components/search.php"?>
                    </div>
                     <div class="header_cart">
                        <a href="giohang.php" style="text-decoration: none;"><i class="header_cart-icon ti-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
           <div class="grid">
               <div class="content">
                <div id="cart">
                    <div class="phone-heading">
                        <h3 class="phone-heading-text">Giỏ Hàng</h3>
                    </div>
                    <div class="cart-content">
                        <div class="cart-heading">
                            <div class="cart-heading-item">Sản phẩm</div>
                            <div class="cart-heading-item">Đơn giá</div>
                            <div class="cart-heading-item">Số lượng</div>
                            <div class="cart-heading-item">Thao tác</div>
                        </div>
                    </div>
                  <div class="cart-container">

                    <?php 
                        while($row = $result->fetch_assoc()) {
                            $s = ' <div id="product1" class="cart-products" style="display: block;">
                            <div class="cart-body">
                                <div class="cart-body-item">
                                    <img src='.$row['HINHANH'].' width="100px" height="100px" alt="">
                                    <p>'.$row['TEN'].'</p>
                                </div>
                                <div class="cart-body-info">
                                    <div><p>'.currency_format($row['GIA']).'</p></div>
                                    <div class="quantity">
                                        <button>-</button>
                                        <div>'.$row['SOLUONG'].'</div>
                                        <button>+</button>
                                    </div>
                                    <div> <button class="btn-delete" onclick="delete_product_warning()">Xóa</button></div>
                                </div>
                            </div>
                            </div>';

                            echo $s;
                            $s = '';
                        }
                    ?>
                   
                    <div class="total">
                        <div>
                            <p>Tổng tiền: <span class="total-cart">32.990.000đ</span></p>
                        </div>
                        <div>
                            <button class="btn-pay" onclick="order()">Thanh toán</button>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        
    </div>
    <!--Canh bao xoa san pham-->
    <div id="delete-product" style="display: none;">
        <div class="modal">
            <div class="modal_overlay"></div>
                <div class="modal_body">    
                    <div class="auth-form">
                        <div class="auth-form__container">
                            <div class="cart-icon-check">
                                <div  style="background-color: #cb1c22; border: 10px solid #cb1c22;"><i class="ti-alert"></i></div>
                             </div>
                            <div class="cart-notification">
                                <p>Bạn vẫn muốn xóa sản phẩm này chứ!</p>
                            </div>
                            <div class="delete-product-btn">
                                <button class="btn" onclick="hide_delete_product()">Không</button>
                                <button class="btn btn--primary" onclick="delete_product2(),hide_delete_product()">Có</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "./assets/components/footer.php"?>
    <!--Thanh toan-->
    <div id="order" style="display: none;">
        <div class="modal">
            <div class="modal_overlay"></div>
                <div class="modal_body">   
                    <div class="auth-form">
                        <div class="auth-form__container">
                            <div class="order-header">
                                    <div class="order-img">
                                        <img src="../assets/apple/img/iphone-13-pro-max-gold-1-200x200.jpg" alt="">
                                    </div>
                                    <div class="order-text">
                                        <span>Điện thoại iPhone 13 Pro Max</span>
                                        <p>Bộ nhớ: 128GB</p>
                                        <p>Màu: Vàng</p>
                                    </div>
                            </div>
                            <div class="auth-form__form">
                                <div class="choose-pay">
                                    <label for="">
                                        <input type="radio" name="pay" id="">
                                        Thanh toán khi nhận hàng
                                    </label>
                                    <label for="">
                                        <input type="radio" name="pay" id="">
                                        Thanh toán qua ngân hàng
                                    </label>
                                </div>
                                <div class="order-total">
                                    <p class="order-total-text">Tổng tiền:</p>
                                    <p class="order-total-price">32.990.000đ</p>
                                </div>
                            </div>
                        <div class="auth-form__controls">
                            <button class="btn btn--back" onclick="hide_cart()">TRỞ LẠI</button>
                            <button class="btn btn--primary" onclick="DatHangThanhCong()">Thanh Toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>