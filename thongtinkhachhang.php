<?php 
    include "connect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thông tin khách hàng</title>
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
                                <i class="ti-info list-item-icon"></i>
                                Giới thiệu
                            </a>
                        </li>
                        <?php 
                            include "./assets/components/dangnhapvadangxuat.php"
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
                        <?php 
                            $ID = $user['ID'];
                            $sql = "SELECT * FROM nguoidung WHERE ID =".$ID;
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <div class="customer-img">
                            <img src=<?php echo ($row['HINHANH'] ?  $row['HINHANH'] : "./assets/img/avatar-mac-dinh-1.png"  )?> width="200px" height="200px" class="customer_img">
                        </div>
                        <div class="customer-info">
                            <div class="customer-name"><?php echo $row['HOTEN']?></div>
                            <div class="customer-DateOfBirth">Ngày sinh: <?php echo date('d/m/Y', strtotime($row['NGAYSINH']))?></div>
                            <div class="customer-phone">Số điện thoại: <?php echo $row['DIENTHOAI']?></div>
                            <div class="customer-email">Email: <?php echo $row['EMAIL']?></div>
                            <div class="customer-address">Địa chỉ: <?php echo $row['DIACHI']?></div>
                        </div>
                        <div class="customer-update">
                            <button onclick="update_info()">Cập nhật thông tin</button>
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
            <?php include "./assets/components/footer.php"?>
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