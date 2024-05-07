<?php 
    include "../functions/connect.php";
    include "../assets/components/formatCurrency.php";

    //Lấy thông tin admin
    $admin = $_SESSION['admin'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
    <link rel="shortcut icon" href="../assets/img/logo-banner/logotheps.png" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/responsiveOrder.css">
</head>
<body>
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
                    Theps
                </div>
            </div>
            <a href="logout.php" class="btn btn-outline">
                <i class='bx bx-log-out bx-flip-horizontal'></i>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="index.php">
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
                <a href="bill.php" class="active">
                    <i class='bx bx-user-pin'></i>
                    <span>Quản lý đơn hàng</span>
                </a>
            </li>
        </ul>
    </div>
           <!-- MAIN CONTENT -->
    <div class="main">
        <div class="main-header">
            <div class="main-option">
                    <div class="mobile-toggle" id="mobile-toggle">
                        <i class='bx bx-menu-alt-right'></i>
                    </div>
                    <div class="main-title">
                        Trang chủ 
                    </div>
            </div>
            <div class="main-name">
                <p>Admin (<span><?php echo $admin['HOTEN'] ?></span>)</p>
            </div>
        </div>
        <div class="main-content">

            <div class="row">
                <div class="col-12">
                    <!-- ORDERS TABLE -->
                    <div class="box">
                        <div class="box-header">
                            <p>Danh sách đơn hàng</p>
                            <form class="view-orders" action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
                                <p>Lọc theo:</p>
                                <div class="status-order">
                                    <select name="statusOrder" id="statusOrder">
                                        <option value="">Tình trạng đơn hàng</option>
                                        <option value="Đang xử lý">Đang xử lý</option>
                                        <option value="Đang giao">Đang giao</option>
                                        <option value="Đã giao">Đã giao</option>
                                    </select>
                                </div>
                                <div class="date-order">
                                    <p>Từ ngày:</p>
                                    <input type="date" name="from" id="from">
                                    <p>Đến ngày:</p>
                                    <input type="date" name="to" id="to">
                                </div>
                                <div class="address-order">
                                    <p>Địa chỉ:</p>
                                    <select name="addressOrder" id="addressOrder">
                                        <option value="">Tỉnh thành</option>
                                        <option value="Hồ Chí Minh">TP.Hồ Chí Minh</option>
                                        <option value="Hà Nội">Hà Nội</option>
                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                        <option value="Cần Thơ">Cần Thơ</option>
                                        <option value="Long An">Long An</option>
                                        <option value="Bình Dương">Bình Dương</option>
                                        <option value="Đồng Nai">Đồng Nai</option>
                                        <option value="Tây Ninh">Tây Ninh</option>
                                        <option value="Tiền Giang">Tiền Giang</option>
                                        <option value="Bến Tre">Bến Tre</option>
                                        <option value="Trà Vinh">Trà Vinh</option>
                                        <option value="Vĩnh Long">Vĩnh Long</option>
                                        <option value="Đồng Tháp">Đồng Tháp</option>
                                    </select>
                                </div>

                                <button type="submit" id="btn-submit" class="btn btn-block">Lọc</button>
                            </form>
                        </div>
                        <div class="box-body overflow-scroll">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Khách hàng</th>
                                        <th>Ngày mua</th>
                                        <th>Tình trạng đơn</th>
                                        <th>Thanh toán</th>
                                        <th>Địa chỉ</th>
                                        <th>Tổng cộng</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                        if (!isset($_GET['statusOrder']) && !isset($_GET['from']) && !isset($_GET['to']) && !isset($_GET['addressOrder'])) {
                                            $sql = "SELECT hoadon.ID_HOADON, nguoidung.HINHANH, nguoidung.HOTEN, hoadon.NGAYLAP, hoadon.TRANGTHAI, hoadon.PHUONGTHUCTT, hoadon.DIACHI, hoadon.TONGTIEN FROM hoadon INNER JOIN nguoidung ON hoadon.ID_NGUOIDUNG = nguoidung.ID;";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = $result->fetch_assoc()) {
                                                $s = '<tr>
                                                        <td>'.$row['ID_HOADON'].'</td>
                                                        <td>
                                                            <div class="order-owner">
                                                                <img src=".'.$row['HINHANH'].'">
                                                                <span>'.$row['HOTEN'].'</span>
                                                            </div>
                                                        </td>
                                                        <td>'.date('d/m/Y', strtotime($row['NGAYLAP'])).'</td>
                                                        <td>
                                                            <select name="status">';
                                                                $statusOptions = array(
                                                                    'Đang xử lý' => 'Đang xử lý',
                                                                    'Đang giao' => 'Đang giao',
                                                                    'Đã giao' => 'Đã giao'
                                                                );
                                                                foreach ($statusOptions as $value => $label) {
                                                                    $selected = ($value == $row['TRANGTHAI']) ? 'selected' : '';
                                                                    $s .= '<option value="' . htmlspecialchars($value) . '" ' . $selected . '>' . htmlspecialchars($label) . '</option>';
                                                                }
                                                            $s .= '</select>
                                                        </td>
                                                        <td>'.$row['PHUONGTHUCTT'].'</td>
                                                        <td>'.$row['DIACHI'].'</td>
                                                        <td>'.currency_format($row['TONGTIEN']).'</td>
                                                        <td><a onclick="updateOrderStatus('.$row['ID_HOADON'].')" class="btn btn-update">Cập nhật</a></td>
                                                    </tr>';
                                                echo $s;
                                            }
                                        } 
                                        
                                        if(isset($_GET['statusOrder']) && $_GET['from'] == '' && $_GET['to'] == '' && $_GET['addressOrder'] == '') {
                                            $statusOrder = $_GET['statusOrder'];
                                            $sql = "SELECT hoadon.ID_HOADON, nguoidung.HINHANH, nguoidung.HOTEN, hoadon.NGAYLAP, hoadon.TRANGTHAI, hoadon.PHUONGTHUCTT, hoadon.DIACHI, hoadon.TONGTIEN 
                                                    FROM hoadon 
                                                    INNER JOIN nguoidung 
                                                    ON hoadon.ID_NGUOIDUNG = nguoidung.ID 
                                                    WHERE hoadon.TRANGTHAI='$statusOrder'";

                                            $result = mysqli_query($conn, $sql);
                                            while ($row = $result->fetch_assoc()) {
                                                $s = '<tr>
                                                        <td>'.$row['ID_HOADON'].'</td>
                                                        <td>
                                                            <div class="order-owner">
                                                                <img src=".'.$row['HINHANH'].'">
                                                                <span>'.$row['HOTEN'].'</span>
                                                            </div>
                                                        </td>
                                                        <td>'.date('d/m/Y', strtotime($row['NGAYLAP'])).'</td>
                                                        <td>
                                                            <select name="status">';
                                                                $statusOptions = array(
                                                                    'Đang xử lý' => 'Đang xử lý',
                                                                    'Đang giao' => 'Đang giao',
                                                                    'Đã giao' => 'Đã giao'
                                                                );
                                                                foreach ($statusOptions as $value => $label) {
                                                                    $selected = ($value == $row['TRANGTHAI']) ? 'selected' : '';
                                                                    $s .= '<option value="' . htmlspecialchars($value) . '" ' . $selected . '>' . htmlspecialchars($label) . '</option>';
                                                                }
                                                            $s .= '</select>
                                                        </td>
                                                        <td>'.$row['PHUONGTHUCTT'].'</td>
                                                        <td>'.$row['DIACHI'].'</td>
                                                        <td>'.currency_format($row['TONGTIEN']).'</td>
                                                        <td><a onclick="updateOrderStatus('.$row['ID_HOADON'].')" class="btn btn-update">Cập nhật</a></td>
                                                    </tr>';
                                                echo $s;
                                            }
                                        } 
                                        
                                        if(isset($_GET['from']) && isset($_GET['to']) && $_GET['statusOrder'] == '' && $_GET['addressOrder'] == '' ) {
                                            $from = $_GET['from'];
                                            $to = $_GET['to'];
                                            $sql = "SELECT hoadon.ID_HOADON, nguoidung.HINHANH, nguoidung.HOTEN, hoadon.NGAYLAP, hoadon.TRANGTHAI, hoadon.PHUONGTHUCTT, hoadon.DIACHI, hoadon.TONGTIEN FROM hoadon INNER JOIN nguoidung ON hoadon.ID_NGUOIDUNG = nguoidung.ID WHERE NGAYGIAO BETWEEN '$from' AND '$to'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = $result->fetch_assoc()) {
                                                $s = '<tr>
                                                        <td>'.$row['ID_HOADON'].'</td>
                                                        <td>
                                                            <div class="order-owner">
                                                                <img src=".'.$row['HINHANH'].'">
                                                                <span>'.$row['HOTEN'].'</span>
                                                            </div>
                                                        </td>
                                                        <td>'.date('d/m/Y', strtotime($row['NGAYLAP'])).'</td>
                                                        <td>
                                                            <select name="status">';
                                                                $statusOptions = array(
                                                                    'Đang xử lý' => 'Đang xử lý',
                                                                    'Đang giao' => 'Đang giao',
                                                                    'Đã giao' => 'Đã giao'
                                                                );
                                                                foreach ($statusOptions as $value => $label) {
                                                                    $selected = ($value == $row['TRANGTHAI']) ? 'selected' : '';
                                                                    $s .= '<option value="' . htmlspecialchars($value) . '" ' . $selected . '>' . htmlspecialchars($label) . '</option>';
                                                                }
                                                            $s .= '</select>
                                                        </td>
                                                        <td>'.$row['PHUONGTHUCTT'].'</td>
                                                        <td>'.$row['DIACHI'].'</td>
                                                        <td>'.currency_format($row['TONGTIEN']).'</td>
                                                        <td><a onclick="updateOrderStatus('.$row['ID_HOADON'].')" class="btn btn-update">Cập nhật</a></td>
                                                    </tr>';
                                                echo $s;
                                            }
                                        }
                                        
                                        if (isset($_GET['addressOrder']) && $_GET['from'] == '' && $_GET['to'] == '' && $_GET['statusOrder'] == '') {
                                           
                                            $addressOrder = $_GET['addressOrder'];
                                            $sql = "SELECT hoadon.ID_HOADON, nguoidung.HINHANH, nguoidung.HOTEN, hoadon.NGAYLAP, hoadon.TRANGTHAI, hoadon.PHUONGTHUCTT, hoadon.DIACHI, hoadon.TONGTIEN 
                                                    FROM hoadon 
                                                    INNER JOIN nguoidung 
                                                    ON hoadon.ID_NGUOIDUNG = nguoidung.ID 
                                                    WHERE hoadon.DIACHI LIKE '%$addressOrder%'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = $result->fetch_assoc()) {
                                                $s = '<tr>
                                                        <td>'.$row['ID_HOADON'].'</td>
                                                        <td>
                                                            <div class="order-owner">
                                                                <img src=".'.$row['HINHANH'].'">
                                                                <span>'.$row['HOTEN'].'</span>
                                                            </div>
                                                        </td>
                                                        <td>'.date('d/m/Y', strtotime($row['NGAYLAP'])).'</td>
                                                        <td>
                                                            <select name="status">';
                                                                $statusOptions = array(
                                                                    'Đang xử lý' => 'Đang xử lý',
                                                                    'Đang giao' => 'Đang giao',
                                                                    'Đã giao' => 'Đã giao'
                                                                );
                                                                foreach ($statusOptions as $value => $label) {
                                                                    $selected = ($value == $row['TRANGTHAI']) ? 'selected' : '';
                                                                    $s .= '<option value="' . htmlspecialchars($value) . '" ' . $selected . '>' . htmlspecialchars($label) . '</option>';
                                                                }
                                                            $s .= '</select>
                                                        </td>
                                                        <td>'.$row['PHUONGTHUCTT'].'</td>
                                                        <td>'.$row['DIACHI'].'</td>
                                                        <td>'.currency_format($row['TONGTIEN']).'</td>
                                                        <td><a onclick="updateOrderStatus('.$row['ID_HOADON'].')" class="btn btn-update">Cập nhật</a></td>
                                                    </tr>';
                                                echo $s;
                                            }
                                        }
                                        
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
    <div class="overlay"></div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="./js/bill.js"> </script>
	<script src="./js/app.js"></script>
    <script src="./js/updateOrderStatus.js"></script>
    <script src="./js/checkFilterOrder.js"></script>
</body>
</html>