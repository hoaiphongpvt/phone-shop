

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
            <button class="btn btn-outline">
                <i class='bx bx-log-out bx-flip-horizontal'></i>
            </button>
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
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                Trang chủ admin
            </div>
        </div>
        <div class="main-content">

<div class="row">
    <div class="col-12">
        <!-- ORDERS TABLE -->
        <div class="box">
            <div class="box-header">
                Danh sách sản phẩm
            </div>
            <div class="box-body overflow-scroll">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Hãng sản xuất</th>
                            <th>Mô tả</th>
                            <th>Đánh giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="order-owner">
                                    <img src=''>
                                    <span>Apple iPhone 11 128GB</span>
                                </div>
                            </td>
                            <td>10.990.000đ</td>
                            <td>Apple</td>
                            <td>Đây là iPhone 11</td>
                            <td>4 Sao</td>
                        </tr>                                    
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
	<script src="./js/app.js"></script>
</body>
</html>