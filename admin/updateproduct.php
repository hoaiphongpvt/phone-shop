<?php 
    include "../connect.php";
    include "../assets/components/formatCurrency.php";

    //Lấy thông tin admin
    $admin = $_SESSION['admin'];

    //Sửa sản phẩm
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ID = $_POST['ID'];
        $ten = $_POST['ten'];
        $hsx = intval($_POST['hangsx']);
        $gia = $_POST['gia'];
        $mota = $_POST['mota'];
        $danhgia = $_POST['danhgia'];
        $manhinh = $_POST['manhinh'];
        $bonho = $_POST['bonho'];
        $camera = $_POST['camera'];
        $pin = $_POST['pin'];
        $hdh = $_POST['hdh'];
        $chip = $_POST['chip'];
        $sim = $_POST['sim'];
        $hinhanh = '';
        $linkanh = '';
        $anhchitiet = '';
        $linkanhchitiet = '';

        //Nếu có hình ảnh thì update hình ảnh
        if (isset($_FILES['hinhanh']) && !isset($_FILES['anhchitiet'])) {
            uploadHinh($hinhanh, 'hinhanh');
            $linkanh = substr($hinhanh, 1);

            //Sửa sản phẩm
            $sql = "UPDATE sanpham SET TEN='$ten', GIA='$gia', HINHANH='$linkanh' , ID_NSX='$hsx', MOTA='$mota', DANHGIA='$danhgia' WHERE ID='$ID'" ;
            $result = mysqli_query($conn, $sql);

            //Sửa chi tiết sản phẩm
            $sql = "UPDATE chitietsanpham SET TS_MANHINH='$manhinh', TS_BONHO='$bonho', TS_CAMERA='$camera', TS_PIN='$pin', HDH='$hdh', CHIP='$chip', SIM='$sim' WHERE ID_SP='$ID'" ;
            $result = mysqli_query($conn, $sql);

            header("Location: product.php");

        } 
        //Nếu có ảnh chi tiết thì update ảnh chi tiết
        elseif (!isset($_FILES['hinhanh']) && isset($_FILES['anhchitiet'])) {
            uploadHinh($anhchitiet, 'anhchitiet');
            $linkanhchitiet = substr($anhchitiet, 1);

            //Sửa sản phẩm
            $sql = "UPDATE sanpham SET TEN='$ten', GIA='$gia', ID_NSX='$hsx', MOTA='$mota', DANHGIA='$danhgia' WHERE ID='$ID'" ;
            $result = mysqli_query($conn, $sql);

            //Sửa chi tiết sản phẩm
            $sql = "UPDATE chitietsanpham SET ANHTHONGSO='$linkanhchitiet', TS_MANHINH='$manhinh', TS_BONHO='$bonho', TS_CAMERA='$camera', TS_PIN='$pin', HDH='$hdh', CHIP='$chip', SIM='$sim' WHERE ID_SP='$ID'" ;
            $result = mysqli_query($conn, $sql);

            header("Location: product.php");

        } 
        //Nếu có cả 2 ảnh
        elseif (isset($_FILES['hinhanh']) && isset($_FILES['anhchitiet'])) {
            uploadHinh($hinhanh, 'hinhanh');
            $linkanh = substr($hinhanh, 1);
            uploadHinh($anhchitiet, 'anhchitiet');
            $linkanhchitiet = substr($anhchitiet, 1);
            
            //Sửa sản phẩm
            $sql = "UPDATE sanpham SET TEN='$ten', GIA='$gia', HINHANH='$linkanh' , ID_NSX='$hsx', MOTA='$mota', DANHGIA='$danhgia' WHERE ID='$ID'" ;
            $result = mysqli_query($conn, $sql);

            //Sửa chi tiết sản phẩm
            $sql = "UPDATE chitietsanpham SET ANHTHONGSO='$linkanhchitiet', TS_MANHINH='$manhinh', TS_BONHO='$bonho', TS_CAMERA='$camera', TS_PIN='$pin', HDH='$hdh', CHIP='$chip', SIM='$sim' WHERE ID_SP='$ID'" ;
            $result = mysqli_query($conn, $sql);

            header("Location: product.php");

        }
        //Nếu không thì không cập nhật
        else {
            //Sửa sản phẩm
            $sql = "UPDATE sanpham SET TEN='$ten', GIA='$gia', ID_NSX='$hsx', MOTA='$mota', DANHGIA='$danhgia' WHERE ID='$ID'" ;
            $result = mysqli_query($conn, $sql);

            //Sửa chi tiết sản phẩm
            $sql = "UPDATE chitietsanpham SET TS_MANHINH='$manhinh', TS_BONHO='$bonho', TS_CAMERA='$camera', TS_PIN='$pin', HDH='$hdh', CHIP='$chip', SIM='$sim' WHERE ID_SP='$ID'" ;
            $result = mysqli_query($conn, $sql);

            header("Location: product.php");
        }

    }

    //Hàm upload hình ảnh
    function uploadHinh(&$hinhanh, $name) {
        $target_dir = "../assets/img/products/";
        $target_file = $target_dir . basename($_FILES[$name]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES[$name]["tmp_name"]);
        if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        } else {
        echo "File is not an image.";
        $uploadOk = 0;
        }
        
    
        // Check if file already exists
        if (file_exists($target_file)) {
          //echo "Sorry, file already exists.";
          $hinhanh = $target_file;
          return 1;
        }
    
        // Check file size
        if ($_FILES[$name]["size"] > 5000000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
        }
    
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }
    
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES[$name]["name"])). " has been uploaded.";
            $hinhanh = $target_file;
          } else {
            echo "Sorry, there was an error uploading your file.";
            $uploadOk = 0;
          }
        }
        
        return $uploadOk;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
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
                    <p>Cập nhật sản phẩm</p>
                </div>
                <div class="box-body overflow-scroll">
                    <form id="frmThemSP" action="<?php echo $_SERVER["PHP_SELF"];?>" method='POST' enctype="multipart/form-data">
                        <?php 
                            if (isset($_GET['ID'])) {
                                $ID = $_GET['ID'];
                                $sql = "SELECT * FROM sanpham INNER JOIN chitietsanpham ON sanpham.ID = chitietsanpham.ID_SP WHERE sanpham.ID='$ID'";
                                $result = mysqli_query($conn, $sql);
                                $row = $result->fetch_assoc();
                            }
                        
                        ?>
                        <div class="form-group boder">
                            <div class="form-item col">
                                <img src='.<?php echo $row['HINHANH'] ?>' alt="" class="review" id="preview">
                                Cập nhật hình ảnh
                                <input type="file" id="hinhanh" name="hinhanh" onchange="previewImage(event)">
                                <p class="has-err" id="err-hinhanh"></p>
                            </div>
                            <div class="form-item col">
                            <img src='.<?php echo $row['ANHTHONGSO'] ?>' alt="" id="preview-detail">
                                Cập nhật ảnh chi tiết
                                <input type="file" id="anhchitiet" name="anhchitiet" onchange="previewImageDetail(event)">
                                <p class="has-err" id="err-anhchitiet"></p>
                            </div>
                       </div>
                       <div class="form-group boder">
                            <div class="form-item">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" name="ten" id="tensp" value="<?php echo htmlspecialchars($row['TEN'], ENT_QUOTES); ?>">
                            </div>
                            <p class="has-err" id="err-tensp"></p>
                            <div class="form-item">
                                <label for="">Hãng sản xuất</label>
                                <select name="hangsx" id="hangsx">
                                    <option value="0" <?php echo ($row['ID_NSX'] == 0) ? 'selected' : ''; ?>>Chọn hãng sản xuất</option>
                                    <option value="1" <?php echo ($row['ID_NSX'] == 1) ? 'selected' : ''; ?>>Apple</option>
                                    <option value="2" <?php echo ($row['ID_NSX'] == 2) ? 'selected' : ''; ?>>Samsung</option>
                                    <option value="3" <?php echo ($row['ID_NSX'] == 3) ? 'selected' : ''; ?>>Xiaomi</option>
                                    <option value="4" <?php echo ($row['ID_NSX'] == 4) ? 'selected' : ''; ?>>Oppo</option>
                                    <option value="5" <?php echo ($row['ID_NSX'] == 5) ? 'selected' : ''; ?>>Vivo</option>
                                </select>
                            </div>
                            <p class="has-err" id="err-hsx"></p>
                            <div class="form-item">
                                <label for="">Giá</label>
                                <input type="number" name="gia" min="1000000" id="gia" placeholder="Đơn vị VNĐ" value="<?php echo $row['GIA']?>">
                            </div>
                            <p class="has-err" id="err-gia"></p>
                            <div class="form-item">
                                <label for="">Mô tả sản phẩm</label>
                                <textarea name="mota" id="mota"><?php echo htmlspecialchars($row['MOTA'], ENT_QUOTES); ?></textarea>
                            </div>
                            <p class="has-err" id="err-mota"></p>
                            <div class="form-item">
                                <label for="">Đánh giá</label>
                                <input name="danhgia" id="danhgia" placeholder="Số sao" value=<?php echo $row['DANHGIA']?>></input>
                            </div>
                            <p class="has-err" id="err-danhgia"></p>
                            <div class="form-item">
                                <label for="">Thông số màn hình</label>
                                <input name="manhinh" id="manhinh" value="<?php echo htmlspecialchars($row['TS_MANHINH'], ENT_QUOTES); ?>"></input>
                            </div>
                            <p class="has-err" id="err-manhinh"></p>
                            <div class="form-item">
                                <label for="">Thông số bộ nhớ</label>
                                <input name="bonho" id="bonho" value="<?php echo htmlspecialchars($row['TS_BONHO'], ENT_QUOTES); ?>"></input>  
                            </div>
                            <p class="has-err" id="err-bonho"></p>
                            <div class="form-item">
                                <label for="">Thông số camera</label>
                                <input name="camera" id="camera" value="<?php echo htmlspecialchars($row['TS_CAMERA'], ENT_QUOTES); ?>"></input>
                            </div>
                            <p class="has-err" id="err-camera"></p>
                            <div class="form-item">
                                <label for="">Thông số pin</label>
                                <input name="pin" id="pin" value="<?php echo htmlspecialchars($row['TS_PIN'], ENT_QUOTES); ?>"></input>
                            </div>
                            <p class="has-err" id="err-pin"></p>
                            <div class="form-item">
                                <label for="">Hệ điều hành</label>
                                <input name="hdh" id="hdh" value="<?php echo htmlspecialchars($row['HDH'], ENT_QUOTES); ?>"></input>
                            </div>
                            <p class="has-err" id="err-hdh"></p>
                            <div class="form-item">
                                <label for="">Chipset</label>
                                <input name="chip" id="chip" value="<?php echo htmlspecialchars($row['CHIP'], ENT_QUOTES); ?>"></input>
                            </div>
                            <p class="has-err" id="err-chip"></p>
                            <div class="form-item">
                                <label for="">Sim</label>
                                <input name="sim" id="sim" value="<?php echo htmlspecialchars($row['SIM'], ENT_QUOTES); ?>"></input>
                            </div>
                            <p class="has-err" id="err-sim"></p>
                            <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
                            <button type="submit" id="btn-submit" class="btn btn-submit">THÊM</button>
                       </div>
                    </form>
                </div>
            </div>
        <!-- END ORDERS TABLE -->
    </div>
</div>
</div>
	</div>
    <div class="overlay"></div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="./js/product.js"> </script>
	<script src="./js/app.js"></script>
    <script src="./js/preview-img.js"></script>
    <script src="./js/validateUpdateProduct.js"></script>
</body>
</html>