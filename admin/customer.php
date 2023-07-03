<?php 
    include "../connect.php";
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
    <title>Quản lý khách hàng</title>
    <link rel="shortcut icon" href="../assets/img/logo-banner/logotheps.png" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/responsiveCustomer.css">

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
                <a href="customer.php" class="active">
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
                            <p>Danh sách khách hàng</p>
                            <a href="adduser.php" class="add-user">Thêm khách hàng</a>
                        </div>
                        <div class="box-body overflow-scroll">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Khách hàng</th>
                                        <th>Email</th>
                                        <th>Điện thoại</th>
                                        <th>Ngày sinh</th>
                                        <th>Địa chỉ</th>
                                        <th>Tên đăng nhập</th>
                                        <th>Mật khẩu</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $sql = "SELECT * FROM nguoidung";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = $result->fetch_assoc()) {
                                            $s = '<tr>
                                                    <td>'.$row['ID'].'</td>
                                                    <td>
                                                        <div class="order-owner">
                                                            <img src=.'.$row['HINHANH'].'>
                                                            <span>'.$row['HOTEN'].'</span>
                                                        </div>
                                                    </td>
                                                    <td>'.$row['EMAIL'].'</td>
                                                    <td>'.$row['DIENTHOAI'].'</td>
                                                    <td>'.date('d/m/Y', strtotime($row['NGAYSINH'])).'</td>
                                                    <td>'.$row['DIACHI'].'</td>
                                                    <td>'.$row['TENDANGNHAP'].'</td>
                                                    <td>'.$row['MATKHAU'].'</td>
                                                    <td>
                                                        <div>';
                                                        
                                            $s .= '<a href="updatecustomer.php?idKH='.$row['ID'].'" class="btn btn-update">Sửa</a>';
                                            
                                            if ($row['TRANGTHAI'] == 1) {
                                                $s .= '<a href="blockcustomer.php?idKH='.$row['ID'].'" class="btn btn-block">Khóa</a>';
                                            } else {
                                                $s .= '<a href="unblockcustomer.php?idKH='.$row['ID'].'" class="btn btn-block">Mở khóa</a>';
                                            }
                                            
                                            $s .= '</div>
                                                    </td>
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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="./js/customer.js"> </script>
	<script src="./js/app.js"></script>
</body>
</html>