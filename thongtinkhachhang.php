<?php 
    include "connect.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_SESSION['user'];
        $hinhanh = '';
        $hoten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];

        if ($_FILES['avt']['error'] === UPLOAD_ERR_OK) {
            uploadHinh($hinhanh, 'avt');
            $sql = "UPDATE nguoidung SET HOTEN= '$hoten', HINHANH='$hinhanh', NGAYSINH='$ngaysinh', DIENTHOAI='$sdt', DIACHI='$diachi', EMAIL='$email' WHERE ID = ".$user['ID'];
        } else {
            $sql = "UPDATE nguoidung SET HOTEN= '$hoten',  NGAYSINH='$ngaysinh', DIENTHOAI='$sdt', DIACHI='$diachi', EMAIL='$email' WHERE ID = ".$user['ID'];
        }
        $result = $conn->query($sql);
    }

    //Hàm upload hình ảnh
    function uploadHinh(&$hinhanh, $name) {
        $target_dir = "./assets/img/users/";
        $target_file = $target_dir . basename($_FILES[$name]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES[$name]["tmp_name"]);
        if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thông tin khách hàng</title>
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
                        <?php 
                           include "./assets/components/dangnhapvadangxuat.php";
                        ?> 
                    </ul>
                </nav>
               <div class="header_with-search">
                   <div class="header__logo">
                    <a href="index.php"><img src="assets/img/logo-banner/logotheps.png" class="header__logo-img"></a>
                   </div>
                   <div class="header_search">
                        <?php include "./assets/components/search.php"?>
                    </div>

                    <div class="header_cart">

                        <?php 
                            if ($user) {
                                echo '<a href="giohang.php" style="text-decoration: none;">
                                        <i class="header_cart-icon ti-shopping-cart"></i>
                                    </a>';
                            } else {
                                echo '<span onclick="alert(\'Vui lòng đăng nhập\')">
                                        <i class="header_cart-icon ti-shopping-cart"></i>
                                    </span>';
                            }
                        ?>
                    </div>

                    <div class="option" id="menu">
                        <a href="#">
                            <i class="header-menu ti-menu"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
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
        <div>
            <div class="grid">
                <div class="customer">
                   <div class="customer-infomation">
                        <div class="customer-title">
                            Thông tin khách hàng
                        </div>
                        <?php 
                            $ID = $user['ID'];
                            $sql = "SELECT * FROM nguoidung WHERE ID =".$ID;
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <div class="customer-img">
                            <img src=<?php echo ($row['HINHANH'] ?  $row['HINHANH'] : "./assets/img/avatar-mac-dinh-1.png"  )?> width="200px" height="200px" class="customer_img">
                        </div>
                        <div class="customer-info">
                            <div class="customer-name"><?php echo $row['HOTEN']?></div>
                            <div class="customer-DateOfBirth">Ngày sinh: <?php echo date('d/m/Y', strtotime($row['NGAYSINH']))?></div>
                            <div class="customer-phone">Số điện thoại: <?php echo $row['DIENTHOAI']?></div>
                            <div class="customer-email">Email: <?php echo $row['EMAIL']?></div>
                            <div class="customer-address">Địa chỉ: <?php echo $row['DIACHI']?></div>
                        </div>
                        <div class="customer-update">
                            <button onclick="update_info()">Cập nhật thông tin</button>
                        </div>
                   </div>
                   <div class="customer-order">
                        <div class="customer-title">
                            Đơn hàng đã mua
                        </div>
                        <div class="nav-oder">
                            <p>Mã đơn</p>
                            <p>Thành tiền</p>
                            <p>Ngày đặt</p>
                            <p>Thanh toán</p>
                            <p>Trạng thái</p>
                            <p>Chi tiết</p>
                        </div>
                            <?php 
                                include "./assets/components/formatCurrency.php";
                                $idND = $user['ID'];
                                $sql = "SELECT * FROM hoadon  WHERE hoadon.ID_NGUOIDUNG='$idND'";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    $item = "<div class='customer-bought'>
                                                <div>".$row['ID_HOADON']."</div>
                                                <div>".currency_format($row['TONGTIEN'])."</div>
                                                <div>".date('d/m/Y', strtotime($row['NGAYLAP']))."</div>
                                                <div>".$row['PHUONGTHUCTT']."</div>
                                                <div>".$row['TRANGTHAI']."</div>
                                                <a href='?idHD=".$row['ID_HOADON']."' class='btn btn-detail'>Xem</a>
                                            </div>";
                                    echo $item;
                                }
                                
                            ?>
                        </div>
                    </div>
                </div>
            
        <div id="edit-info" style="display: none;">
            <div class="modal">
                <div class="modal_overlay"></div>
                    <div class="modal_body">    
                        <div class="auth-form">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" enctype="multipart/form-data" class="auth-form__container">
                                <?php 
                                    $ID = $user['ID'];
                                    $sql = "SELECT * FROM nguoidung WHERE ID =".$ID;
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                ?>
                                <h1 style="text-align: center;">Cập nhật thông tin</h1>
                                <div class="edit-info--group">
                                    <!-- <label for="">Ảnh đại điện:</label>
                                    <input type="text" id="hinhanh" name="hinhanh" placeholder="Dán link ảnh vào đây" class="edit-info-input">
                                    <p class="has-err" id="msg-hinhanh"></p> -->
                                    <div class="upload-img">
                                        <img src="<?php echo $row['HINHANH']?>" id="preview">
                                        <div>
                                            <label for="fileToUpload">Chọn ảnh đại diện:</label>
                                            <input type="file" name="avt" id="avt" onchange="previewImage(event)">
                                            <p class="has-err" id="err-hinhanh"></p>
                                        </div>
                                    </div>
                              </div>
                              <div class="edit-info--group">
                                <label for="">Họ và tên:</label>
                                <input type="text" id="hoten" name="hoten" class="edit-info-input" value="<?php echo htmlspecialchars($row['HOTEN'], ENT_QUOTES); ?>" placeholder="Nhập họ và tên">
                                <p class="has-err" id="msg-hoten"></p>
                              </div>
                              <div class="edit-info--group">
                                <label for="">Ngày sinh:</label>
                                <input type="date" id="ngaysinh" name="ngaysinh" value="<?php echo $row['NGAYSINH']?>" class="edit-info-input" placeholder="Nhập ngày, tháng, năm sinh">
                                <p class="has-err" id="msg-ngaysinh"></p>
                              </div>
                              <div class="edit-info--group">
                                <label for="">Số điện thoại:</label>
                                <input type="text" id="sdt" name="sdt" value="<?php echo $row['DIENTHOAI']?>" class="edit-info-input" placeholder="Nhập số điện thoại">
                                <p class="has-err" id="msg-sdt"></p>
                              </div>
                              <div class="edit-info--group">
                                <label for="">Email:</label>
                                <input type="email" id="email" name="email" value="<?php echo $row['EMAIL']?>" class="edit-info-input" placeholder="Nhập email">
                                <p class="has-err" id="msg-email"></p>
                              </div>
                              <div class="edit-info--group">
                                <label for="">Địa chỉ:</label>
                                <input type="text" id="diachi" name="diachi" value="<?php echo $row['DIACHI']?>" class="edit-info-input" placeholder="Nhập địa chỉ">
                                <p class="has-err" id="msg-diachi"></p>
                              </div>
                               <div class="edit-button">
                                <p class="back-update-info"  onclick={closeUpdateInfo()}><i class="ti-back-left"></i></p>
                                <button type="submit" id="btn-suatt" class="edit-info-button">Xong</button>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "./assets/components/footer.php"?>
        <?php 
            if (isset($_GET['idHD'])) {
                $idHD = $_GET['idHD'];
                echo '<div id="dangnhap">
                <div class="modal">
                    <div class="modal_overlay"></div>
                        <div class="modal_body">   
                            <div class="auth-form">
                                <div class="auth-form__container">
                                    <div class="auth-form__header">
                                            <h3 class="auth-form__heading">CHI TIẾT ĐƠN HÀNG</h3>
                                    </div>
                                    <div class="auth-form__form">
                                        <div class="title-detail">
                                            <p>Tên sản phẩm</p>
                                            <p>Hình ảnh</p>
                                            <p>Đơn giá</p>
                                            <p>Số lượng</p>
                                        </div>';
                                            $sql = "SELECT * FROM chitiethoadon INNER JOIN sanpham ON chitiethoadon.ID_SP = sanpham.ID WHERE ID_HOADON=".$idHD;
                                            $result = $conn->query($sql);

                                            while ($row = $result->fetch_assoc()) {
                                                $item = '<div class="info-detail">
                                                            <p>'.$row['TEN'].'</p>
                                                            <img src='.$row['HINHANH'].' width="50px">
                                                            <p>'.currency_format($row['DONGIA']).'</p>
                                                            <p>'.$row['SOLUONG'].'</p>
                                                        </div>';
                                                
                                                echo $item;
                                            }
                                        
                echo                    '</div>
                                <div class="auth-form__controls detail-btn-ok">
                                    <button onclick="document.getElementById(\'dangnhap\').style.display = \'none\';" id="btn-dangnhap" class="btn btn--primary">OK</button>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>';
            }
        ?>
    </div>
    </div>
    <script src="./assets/js/chechthongtinkhachhang.js"></script>
    <script src="./assets/js/preview.js"></script>
    <script src="./assets/js/menuMobile.js"></script>
</body>
</html>