<?php 
    include "connect.php";
    
    if (isset($_GET['nsx']) && $_GET['gia'] == "null") {
        $nsx = $_GET['nsx'];
        $sql = "SELECT  * FROM sanpham  INNER JOIN chitietsanpham ON sanpham.ID = chitietsanpham.ID_SP WHERE sanpham.ID_NSX = ".$nsx;
        $result = $conn->query($sql);
        $num_rows = mysqli_num_rows($result);
    }

    if (isset($_GET['gia']) && $_GET['nsx'] == "null") {
        $gia = $_GET['gia'];
        $sql = "SELECT * FROM sanpham INNER JOIN chitietsanpham ON sanpham.ID = chitietsanpham.ID_SP WHERE ";
        switch ($gia) {
            case "0-4000000":
            $sql .= " GIA < 4000000";
            break;
            case "4000000-10000000":
            $sql .= " GIA >= 4000000 AND GIA < 10000000";
            break;
            case "10000000-20000000":
            $sql .= " GIA >= 10000000 AND GIA < 20000000";
            break;
            case ">20000000":
            $sql .= " GIA >= 20000000";
            break;
        }

        $result = $conn->query($sql);
        $num_rows = mysqli_num_rows($result);
    } 

    if (isset($_GET['nsx']) && isset($_GET['gia']) && $_GET['nsx'] != "null" && $_GET['gia'] != "null") {
        $nsx = $_GET['nsx'];
        $gia = $_GET['gia'];
        $sql = "SELECT  * FROM sanpham  INNER JOIN chitietsanpham ON sanpham.ID = chitietsanpham.ID_SP WHERE sanpham.ID_NSX = ".$nsx." AND";
        switch ($gia) {
            case "0-4000000":
            $sql .= " GIA < 4000000";
            break;
            case "4000000-10000000":
            $sql .= " GIA >= 4000000 AND GIA < 10000000";
            break;
            case "10000000-20000000":
            $sql .= " GIA >= 10000000 AND GIA < 20000000";
            break;
            case ">20000000":
            $sql .= " GIA >= 20000000";
            break;
        }
        $result = $conn->query($sql);
        $num_rows = mysqli_num_rows($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cửa hàng điện thoại di động The PS</title>
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
                        <a href="thongtinkhachhang.html" class="list-item list-item-bold list-item-separate">Xin chào theps</a>
                        <a href="../index.html" class="list-item list-item-bold">Đăng xuất</a>
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
                    <a href="giohang.html" style="text-decoration: none;"><i class="header_cart-icon ti-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
           <div class="grid">
               <div class="content">
                <div id="apple">
                    <div class="phone-heading kqtimkiem">
                        <h3 class="phone-heading-text kqTimKiem">Tìm thấy <p style="display: inline-block; color: #f30c28;"><?php echo $num_rows?></p> kết quả</h3>
                    </div>
                    <div class="phone-content">
                        <?php
                            include "./assets/components/formatCurrency.php";
                            while($row = $result->fetch_assoc()) {
                                $item = "<div class='phone-phone-item'>";
                                $item .= "<a href='chitietsanpham.php?id=".$row['ID']."'><img src=".$row["HINHANH"]." class='phone-img'></a>";
                                $item .= "<p  class='phone-name'><a href='chitietsanpham.php?id=".$row['ID']."'>".$row["TEN"]."</a></p>";
                                $item .= "<h3 class='phone-price'>".currency_format($row["GIA"]) ."</h3>";
                                $item .= "<div class='phone-vote'><p class='value'>".$row["DANHGIA"]."</p><i class='ti-star'></i></div>";
                                $item .= "<ul class='phone-parameter'>
                                        <li>Màn hình:" .$row["TS_MANHINH"]."</li>
                                        <li>Chip:" .$row["CHIP"]."</li>
                                        <li>Bộ nhớ: ".$row["TS_BONHO"]."</li>
                                        <li>Sim:" .$row["SIM"]."</li>
                                        <li>Pin: ".$row["TS_PIN"]."</li>
                                        </ul>";
                                $item .= "</div>";
                                echo $item;   
                            }
                        ?>
                    </div>
                    <!-- <?php include "./assets/components/phantrang.php"?> -->
                </div>
             </div>
        </div>
        <?php include "./assets/components/footer.php"?>
        <script src="./assets/js/timkiem.js"></script>
    </div>
</body>
</html>