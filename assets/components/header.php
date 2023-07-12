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