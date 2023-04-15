<?php 
    include "../connect.php";
    include "../assets/components/formatCurrency.php";

    //Tổng đơn hàng
    $sql = "SELECT * FROM hoadon";
    $result = $conn->query($sql);
    $tongdonhang= mysqli_num_rows($result);

    //Tổng tiền
    $sql = "SELECT TONGTIEN FROM hoadon";
    $result = mysqli_query($conn, $sql);
    $total_price = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $total_price += $row['TONGTIEN'];
    }

    //Tổng khách hàng
    $sql = "SELECT * FROM nguoidung";
    $result = $conn->query($sql);
    $tongkhachhang= mysqli_num_rows($result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        ThePS Admin
    </title>
    <link rel="shortcut icon" href="../assets/img/logo-banner/logotheps.png" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="../assets/img/logo-banner/logotheps.png" alt="Company logo">
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-info">
                <img src="../assets/img/logo-banner/logotheps.png" alt="User picture" class="profile-image">
                <div class="sidebar-user-name">
                    ThePs
                </div>
            </div>
            <button class="btn btn-outline">
                <i class='bx bx-log-out bx-flip-horizontal'></i>
            </button>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
            
            <li>
                <a href="index.html" class="active">
                    <i class='bx bx-home'></i>
                    <span>Trang chủ</span>
                </a>
            </li>

            <li>
                <a href="customer.php">
                    <i class='bx bx-user-pin'></i>
                    <span>Quản lý khách hàng</span>
                </a>
            </li>
           
            <li>
                <a href="product.php">
                    <i class='bx bx-user-pin'></i>
                    <span>Quản lý sản phẩm</span>
                </a>
            </li>
           
            <li>
                <a href="bill.php">
                    <i class='bx bx-user-pin'></i>
                    <span>Quản lý đơn hàng</span>
                </a>
            </li>
          
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->

    <!-- MAIN CONTENT -->
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                Trang chủ admin
            </div>
        </div>
        <div class="main-content">
            <div class="row">
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                Tổng đơn hàng
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    <?php echo $tongdonhang?>
                                </div>
                                <i class='bx bx-shopping-bag'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                Doanh thu
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    <?php echo currency_format($total_price)?>
                                </div>
                                <i class='bx bx-line-chart'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                Số lượng khách hàng
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    <?php echo $tongkhachhang?>
                                </div>
                                <i class='bx bx-user'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- ORDERS TABLE -->
                    <div class="box">
                        <div class="box-header">
                            Đơn hàng gần đây
                        </div>
                        <div class="box-body overflow-scroll">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Khách hàng</th>
                                        <th>Ngày mua</th>
                                        <th>Tình trạng đơn</th>
                                        <th>Phương thức thanh toán</th>
                                        <th>Tổng cộng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $sql = "SELECT * FROM nguoidung INNER JOIN hoadon ON nguoidung.ID = hoadon.ID_NGUOIDUNG ORDER BY hoadon.ID_HOADON DESC LIMIT 4";
                                    $result = $conn->query($sql);
                                    while($row = $result->fetch_assoc()) {
                                        $s = '<tr>
                                                <td>'.$row['ID_HOADON'].'</td>
                                                <td>
                                                    <div class="order-owner">
                                                        <img src='.$row['HINHANH'].'>
                                                        <span>'.$row['HOTEN'].'</span>
                                                    </div>
                                                </td>
                                                <td>'.date('d/m/Y', strtotime($row['NGAYLAP'])).'</td>
                                                <td>
                                                    <span class="order-status order-ready">
                                                    '.$row['TRANGTHAI'].'
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="payment-status payment-cod">
                                                        <div class="dot"></div>
                                                        <span>'.$row['PHUONGTHUCTT'].'</span>
                                                    </div>
                                                </td>
                                                <td>'.currency_format($row['TONGTIEN']).'</td>
                                            </tr>';
                                        echo $s;
                                    }
                                    $conn->close();
                                ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END ORDERS TABLE -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- APP JS -->
    <script src="./js/app.js"></script>

</body>

</html>