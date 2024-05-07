<?php 
    include "./functions/connect.php";
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
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="./assets/js/style.js"></script>
</head>
<body>
    <div class="app">
        <!-- Header -->
        <?php 
            include './assets/components/header.php';
            include './assets/components/headerMobile.php';
        ?>
        <div class="container">
           <div class="grid">
               <div class="content">
                    <div id="banner">
                        <img src="./assets/img/logo-banner/s23-banner.png" id="banner-img">
                   </div>
                </div>
                <?php include "./assets/components/loc.php"?>
                <div id="apple">
                    <div class="phone-heading">
                        <h3 class="phone-heading-text">Tất cả sản phẩm</h3>
                    </div>
                    <div class="phone-content">
                        
                        <?php
                            include "./assets/components/formatCurrency.php";
                            
                            $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 8;
                            $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
                            $offset = ($current_page - 1) * $item_per_page;

                            $sql = "SELECT * FROM sanpham INNER JOIN chitietsanpham ON sanpham.ID = chitietsanpham.ID_SP ORDER BY 'sanpham.ID' ASC LIMIT ".$item_per_page." OFFSET ".$offset;
                            $result = $conn->query($sql);
                            $totalProducts = mysqli_query($conn, "SELECT * FROM sanpham");

                            $numRow = $totalProducts->num_rows;
                            $totalPages = ceil($numRow / $item_per_page);

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
                <?php include "./assets/components/phantrang.php"?>
             </div>
        </div>
    </div>
    <?php include "./assets/components/footer.php"?>
    <?php include "./assets/components/yeucaudangnhap.php"?>

    <script src="./assets/slider/banner.js"></script>
    <script src="./assets/js/timkiem.js"></script>
    <script src="./assets/js/loc.js"></script>
    <script src="./assets/js/menuMobile.js"></script>
</body> 
</html>