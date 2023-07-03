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
    <title>Quản lý sản phẩm</title>
    <link rel="shortcut icon" href="../assets/img/logo-banner/logotheps.png" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/responsiveProduct.css">
</head>
<body onload="loadAllProduct()">
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
                <a href="product.php" class="active">
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
                <p>Danh sách sản phẩm</p>
                <div>
                <form class="search-product" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . (isset($_GET['name']) ? '?name=' . htmlspecialchars($_GET['name']) : ''); ?>" method="GET">
                    <input type="text" name="name" placeholder="Tìm kiếm sản phẩm">
                    <button type="submit">Tìm</button>
                </form>

                </div>
                <a href="addproduct.php" class="add-user">Thêm sản phẩm</a>
            </div>
            <div class="box-body overflow-scroll">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Hãng sản xuất</th>
                            <th>Đánh giá</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

                            if (isset($_GET["name"])) {
                                $name = $_GET["name"];
                                $sql = "SELECT * FROM sanpham WHERE TEN LIKE '%$name%'";
                            } else {
                                $sql = "SELECT * FROM sanpham";  
                            } 
                            $result = mysqli_query($conn, $sql);
                            while ($row = $result->fetch_assoc()) {
                                $rsNSX = mysqli_query($conn, "SELECT * FROM nsx WHERE ID=".$row['ID_NSX']);
                                if ($rsNSX) {
                                $nsx_data = mysqli_fetch_assoc($rsNSX);
                                $nsx = $nsx_data['TENNSX'];
                                }
                                $s = '<tr>
                                    <td>'.$row['ID'].'</td>
                                    <td>
                                        <div class="product">
                                            <img src=../'.$row['HINHANH'].'>
                                            <span>'.$row['TEN'].'</span>
                                        </div>
                                    </td>
                                    <td>'.currency_format($row['GIA']).'</td>
                                    <td>'.$nsx.'</td>
                                    <td>'.$row['DANHGIA'].' Sao</td>
                                    <td>
                                        <div class="actions">
                                            <a href="updateproduct.php?ID='.$row['ID'].'" class="btn-update">Sửa</a>
                                            <button class="btn-block" onclick="deleteProduct('.$row['ID'].')">Xóa</button>
                                        </div>
                                    </td>
                                </tr>';

                                echo $s;
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
	<!-- <div class="panel">
		<div class="panel-heading">
			Điền thông tin thêm sản phẩm
		</div>
		<div class="panel-body">
			<form method="post">
				<div class="form-group">
					<label>Tên sản phẩm:</label>
					<input type="number" name="index" id="index" value="" hidden="true">
					<input class="form-control" type="text" name="product_name" id="product_name" placeholder="Nhập tên sản phẩm">
				</div>
				<div class="form-group">
					<label>Tên hãng:</label>
					<select class="form-control" id="manuafaturer_name" onchange="changeManufaturer()">
						<option value="">-- Chọn hãng --</option>
					</select>
				</div>
				    <label>Thêm ảnh sản phẩm:</label>
			     	<input type="file" class="fileupload" id="pic" onchange="readURL(this);"/>
                    <img id="read"/>
				<div class="form-group">
					<label>Giá:</label>
					<input class="form-control" type="number" name="price" id="price" placeholder="Nhập giá sản phẩm" value="0" onkeyup="updateTotalPrice()">
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="button" onclick="addProduct()">Thêm sản phẩm</button>
					<button class="btn btn-danger" type="reset">Reset</button>
				</div>
			</form>
		</div>
	</div> -->
    <div class="overlay"></div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="./js/product.js"> </script>
	<script src="./js/deleteProduct.js"> </script>
	<script src="./js/app.js"></script>
</body>
</html>