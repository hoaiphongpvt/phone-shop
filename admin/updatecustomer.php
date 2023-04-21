<?php 
    include "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_GET['idKH'];
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];
        $ngaysinh= $_POST['ngaysinh'];
        $hinhanh = '';
        uploadHinh($hinhanh);
        $linkanh = substr($hinhanh, 1);
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau = $_POST['matkhau'];


        $sql = "UPDATE nguoidung SET HOTEN='$hoten', EMAIL='$email', DIENTHOAI='$sdt', NGAYSINH='$ngaysinh', HINHANH='$linkanh', DIACHI='$diachi', TENDANGNHAP='$tendangnhap', MATKHAU='$matkhau' WHERE ID='$id'";
        $result = mysqli_query($conn, $sql);

        header("Location: customer.php");

    }
    function uploadHinh(&$hinhanh) {
        $target_dir = "../assets/img/users/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
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
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/logo-banner/logotheps.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css_js/base.css">
    <link rel="stylesheet" href="../assets/css_js/main.css">
    <title>Cập nhật thông tin khách hàng</title>
</head>
<body>
<div id="dangki" style="display: block;">
        <div class="modal">
            <div class="modal_overlay"></div>
            <div class="modal_body">    
            <div class="auth-form">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?idKH=" . $_GET['idKH']; ?>" method="POST" enctype="multipart/form-data" class="auth-form__container">
                        <?php 
                            if(isset($_GET['idKH'])) {
                                $id = $_GET['idKH'];

                                $sql = "SELECT * FROM nguoidung WHERE ID=".$id;
                                $result = mysqli_query($conn, $sql);
                                $row = $result->fetch_assoc();
                            }
                        ?>
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">CẬP NHẬT THÔNG TIN KHÁCH HÀNG</h3>
                        </div>
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <div class="upload-img">
                                    <img src=".<?php echo $row['HINHANH']?>">
                                    <div>
                                        <label for="fileToUpload">Chọn ảnh đại diện:</label>
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                        <p class="has-err" id="err-hinhanh"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="auth-form__group">
                                <input type="text" id="hoten" class="auth-form__input" name="hoten" value="<?php echo htmlspecialchars($row['HOTEN'], ENT_QUOTES); ?>" placeholder="Họ và tên">
                                <p class="has-err" id="err-hoten"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="email" id="email" class="auth-form__input" name="email" value="<?php echo $row['EMAIL']?>" placeholder="Email">
                                <p class="has-err" id="err-email"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="number" id="sdt" class="auth-form__input" name="sdt" value="<?php echo $row['DIENTHOAI']?>" placeholder="Số điện thoại">
                                <p class="has-err" id="err-sdt"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="text" id="diachi" class="auth-form__input" name="diachi" value="<?php echo $row['DIACHI']?>" placeholder="Địa chỉ">
                                <p class="has-err" id="err-diachi"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="date" id="diachi" class="auth-form__input" name="ngaysinh" value="<?php echo $row['NGAYSINH']?>">
                                <p class="has-err" id="err-ngaysinh"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="text" id="tendangnhap" class="auth-form__input" name="tendangnhap" value="<?php echo $row['TENDANGNHAP']?>" placeholder="Tên đăng nhập">
                                <p class="has-err" id="err-tendangnhap"></p>
                            </div>
                            <div class="auth-form__group">
                                <input type="text" id="matkhau" class="auth-form__input" name="matkhau" value="<?php echo $row['MATKHAU']?>" placeholder="Mật khẩu">
                                <p class="has-err" id="err-matkhau"></p>
                            </div>
                        </div>
                        <!-- <div class="auth-form__note">
                            <div class="cbDieuKhoan">
                                <input type="checkbox" id="dieukhoan" class="auth-form__policy-check">
                                <p class="auth-form__policy-text">Tôi đồng ý với các điều khoản và dịch vụ.</p>
                            </div>
                            <div>
                                <p class="has-err" id="err-dieukhoan"></p>
                            </div>
                        </div> -->
                        <div>
                            <p class="has-err"><?php echo (isset($err['msg']) ? $err['msg'] : "")?></p>
                        </div>
                        <div class="auth-form__controls">
                            <a href="customer.php" class="btn btn--back">Trở lại</a>
                            <button type="submit" class="btn btn--primary" id="btn-dangki">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/checksuathongtinkhachhang.js"></script>
</body>
</html>

