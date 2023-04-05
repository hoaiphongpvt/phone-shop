<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thông tin khách hàng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/logo-banner/logotheps.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css.map">
    <link rel="stylesheet" href="../assets/css_js/base.css">
    <link rel="stylesheet" href="../assets/css_js/main.css">
    <link rel="stylesheet" href="../assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="../assets/css_js/style.js"></script>
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header_navbar">
                    <ul class="header__navbar--list">
                        <li class="list-item list-item-separate">
                            <a href="dangnhap.html" class="list-item-iconlink">Trang chủ</a>
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
                        <a class="list-item list-item-bold list-item-separate">Xin chào theps</a>
                        <a href="../index.html" class="list-item list-item-bold">Đăng xuất</a>
                    </ul>
                </nav>
               <div class="header_with-search">
                   <div class="header__logo">
                    <img src="../assets/img/logo-banner/logotheps.png" class="header__logo-img">
                   </div>
                   <div class="header_search">
                        <input type="text" placeholder="Tìm kiếm điện thoại..." class="header_search-input">
                        <button class="header_search-button">
                            <i class="ti-search header_search-icon"></i>
                        </button>
                    </div>
                 <div class="header_cart">
                    <a href="giohang.html" style="text-decoration: none;"><i class="header_cart-icon ti-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-product">
            <div class="grid">
                <div class="customer">
                   <div class="customer-infomation">
                        <div class="customer-title">
                            Thông tin khách hàng
                        </div>
                        <div class="customer-img">
                            <img src="../assets/img/Anh-avatar-dep-chat-lam-hinh-dai-dien.jpg" width="200px" height="200px" class="customer_img">
                        </div>
                        <div class="customer-info">
                            <div class="customer-name">Bé Mèo Cute</div>
                            <div class="customer-DateOfBirth">Ngày sinh: 21/11/2112</div>
                            <div class="customer-phone">Số điện thoại: 0855559851</div>
                            <div class="customer-address">Địa chỉ: 273 An Dương Vương, Phường 3, Quận 5, Thành phố Hồ Chí Minh.</div>
                        </div>
                        <div class="customer-update">
                            <button onclick="update_info()">Cập nhật</button>
                        </div>
                   </div>
                   <div class="customer-order">
                        <div class="customer-title">
                            Đơn hàng đã mua
                        </div>
                        <div class="nav-oder">
                            <p>Số thứ tự</p>
                            <p>Tên sản phẩm</p>
                            <p>Số lượng</p>
                            <p>Đơn giá</p>
                        </div>
                        <div class="customer-bought">
                            <div>1</div>
                            <div>Apple iPhone 13 Pro Max 128GB Gold</div>
                            <div>1</div>
                            <div>32.990.000đ</div>
                           </div>
                        </div>
                    </div>
                </div>
        <footer class="FOOTER">
            <div class="head-footer">
                <div class="grid">
                    <ul class="head-footer-policy">
                        <li>
                            <img src="../assets/img/logo-banner/vanchuyen.png" class="policy-img">
                            <span class="policy-text">Vận chuyển toàn quốc</span>
                        </li>
                        <li>
                            <img src="../assets/img/logo-banner/1doi1.png"  class="policy-img">
                            <span class="policy-text">1 đổi 1 trong 30 ngày</span>
                        </li>
                        <li>
                            <img src="../assets/img/logo-banner/baogia.png"  class="policy-img">
                            <span class="policy-text">Giá chuẩn, không sốc giá</span>
                        </li>
                        <li>
                            <img src="../assets/img/logo-banner/baohiem.png"  class="policy-img">
                            <span class="policy-text">Bảo hành máy 12 tháng</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="foot-footer">
                <div class="grid ">
                    <div  class="footer">
                        <div class="col1">
                            <p>Lịch sử mua hàng</p>
                            <p>Cộng tác bán hàng cùng ThePS</p>
                            <p>Tìm hiểu về mua trả góp</p>
                            <p>Chính sách bảo hành</p>
                            <p>Xem thêm</p>
                        </div>
                        <div class="co  l2">
                            <p>Giới thiệu về công ty</p>
                            <p>Tuyển dụng</p>
                            <p>Gửi ý kiến, khiếu nại</p>
                            <p>Tìm siêu thị</p>
                            <p>Xem bản mobile</p>
                        </div>
                        <div class="col3">
                            <p>Tổng đài hỗ trợ (Miễn phí gọi)</p>
                            <p>Gọi mua: 1800.1060 (7:30 - 22:00)</p>
                            <p>Kỹ thuật: 1800.1763 (7:30 - 22:00)</p>
                            <p>Khiếu nại: 1800.1062 (8:00 - 21:30)</p>
                            <p>Bảo hành: 1800.1064 (8:00 - 21:00)</p>
                        </div>
                        <div class="col4">
                            <p><i class="ti-facebook"> 3270.8k Người theo dõi</i></p>
                            <p><i class="ti-youtube"> 829k Người đăng kí</i></p>
                            <p><img src="../assets/img/logo-banner/logotheps.png" width="110px"></p>
                        </div>
                    </div>
                 </div>
            </div>
        </footer>
        <div id="edit-info" style="display: none;">
            <div class="modal">
                <div class="modal_overlay"></div>
                    <div class="modal_body">    
                        <div class="auth-form">
                            <div class="auth-form__container">
                               <h1 style="text-align: center;">Cập nhật thông tin</h1>
                               <div class="edit-info--group">
                                <label for="">Ảnh đại điện:</label>
                                <input type="text" placeholder="Dán link ảnh vào đây" class="edit-info-input">
                              </div>
                              <div class="edit-info--group">
                                <label for="">Họ và tên:</label>
                                <input type="text" class="edit-info-input" placeholder="Nhập họ và tên">
                              </div>
                              <div class="edit-info--group">
                                <label for="">Ngày sinh:</label>
                                <input type="text" class="edit-info-input" placeholder="Nhập ngày, tháng, năm sinh">
                              </div>
                              <div class="edit-info--group">
                                <label for="">Số điện thoại:</label>
                                <input type="text" class="edit-info-input" placeholder="Nhập số điện thoại">
                              </div>
                              <div class="edit-info--group">
                                <label for="">Địa chỉ:</label>
                                <input type="text" class="edit-info-input" placeholder="Nhập địa chỉ">
                              </div>
                               <div class="edit-button">
                                <button class="edit-info-button" onclick="hide_update_info()">Xong</button>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>