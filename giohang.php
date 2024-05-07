<?php 
    include "./functions/connect.php";
    include "./assets/components/formatCurrency.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $user = $_SESSION['user'];
        $idSP = $_GET['idsanpham'];
        $idND = $user['ID'];

        $sql = "SELECT * FROM giohang WHERE ID_SP = '$idSP' AND ID_NGUOIDUNG = '$idND'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $soLuongHienTai = $row['SOLUONG'];
            $soLuongMoi = $soLuongHienTai + 1;
            $sql = "UPDATE giohang SET SOLUONG = $soLuongMoi WHERE ID_SP = $idSP AND ID_NGUOIDUNG = $idND";
            $conn->query($sql);
        } else {
            $soluong = 1;
            $sql = "INSERT INTO giohang(ID_SP, ID_NGUOIDUNG, SOLUONG) VALUES ('$idSP', '$idND', $soluong)";
            $result = $conn->query($sql);
        }
    }
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
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
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
                <div id="cart">
                    <!-- <div class="phone-heading">
                        <h3 class="phone-heading-text">Giỏ hàng</h3>
                    </div> -->
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
                    
                        $sql = "SELECT * FROM giohang JOIN sanpham ON giohang.ID_SP = sanpham.ID WHERE giohang.ID_NGUOIDUNG=".$user['ID'];
                        $result = $conn->query($sql);
                        $num_row =  mysqli_num_rows($result);

                        if ($num_row > 0) {
                            while($row = $result->fetch_assoc()) {
                                $s = ' <div id="product1" class="cart-products" style="display: block;">
                                <div class="cart-body">
                                    <div class="cart-body-item">
                                        <img src='.$row['HINHANH'].' class="cart-item-img">
                                        <p>'.$row['TEN'].'</p>
                                    </div>
                                    <div class="cart-body-info">
                                        <div><p>'.currency_format($row['GIA']).'</p></div>
                                        <div class="quantity">
                                            <a href="capnhatsoluongsanpham.php?idsanpham='.$row['ID_SP'].'&idnguoidung='.$row['ID_NGUOIDUNG'].'&value=-">-</a>
                                            <div>'.$row['SOLUONG'].'</div>
                                            <a href="capnhatsoluongsanpham.php?idsanpham='.$row['ID_SP'].'&idnguoidung='.$row['ID_NGUOIDUNG'].'&value=+">+</a>
                                        </div>
                                        <div>
                                            <a href="./functions/xoasanphamgiohang.php?idSP='.$row['ID'].'&idND='.$user['ID'].'"><button class="btn btn-delete">Xóa</button></a>
                                        </div>
                                    </div>
                                </div>
                                </div>';
    
                                echo $s;
                                $s = '';
                            }
                        }
                    ?>
                   
                    <div class="total">
                        <?php 
                            $sql = "SELECT sanpham.GIA * giohang.SOLUONG AS tong_gia_tri
                            FROM giohang 
                            JOIN sanpham ON giohang.ID_SP = sanpham.ID
                            WHERE giohang.ID_NGUOIDUNG = ".$user['ID'];
                            $result = mysqli_query($conn, $sql);

                            $total_price = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $total_price += $row['tong_gia_tri'];
                            }
                        ?>
                        <div>
                            <p>Tổng tiền: <span class="total-cart"><?php echo $total_price ? currency_format($total_price) : '0đ'?></span></p>
                        </div>
                        <div>
                            <?php echo $total_price ? '<button onclick="order()" class="btn-pay">Thanh toán</button>' : "<h2 class='cart-empty'>Giỏ hàng trống</h2>" ?>   
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <?php require "./assets/components/footer.php"?>
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
                                <button type="submit" class="btn btn--primary" onclick="delete_product2(),hide_delete_product()">Có</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "thongtinthanhtoan.php"?>
    <script src="./assets/js/menuMobile.js"></script>
</body>
</html>