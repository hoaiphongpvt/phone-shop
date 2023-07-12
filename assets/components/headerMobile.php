 <!-- Table Mobile Header -->
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