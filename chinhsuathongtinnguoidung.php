<!-- <?php 
    include "connect.php";

    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $user = $_SESSION['user'];
        $hinhanh = '';
        $hoten = $_GET['hoten'];
        $ngaysinh = $_GET['ngaysinh'];
        $sdt = $_GET['sdt'];
        $email = $_GET['email'];
        $diachi = $_GET['diachi'];


        if (isset($_FILES['fileToUpload'])) {
          uploadHinh($hinhanh);
          $sql = "UPDATE nguoidung SET HOTEN= '$hoten', HINHANH='$hinhanh', NGAYSINH='$ngaysinh', DIENTHOAI='$sdt', DIACHI='$diachi', EMAIL='$email' WHERE ID = ".$user['ID'];
        } else {
          $sql = "UPDATE nguoidung SET HOTEN= '$hoten',  NGAYSINH='$ngaysinh', DIENTHOAI='$sdt', DIACHI='$diachi', EMAIL='$email' WHERE ID = ".$user['ID'];
        }

        // $result = $conn->query($sql);
        // header('Location: thongtinkhachhang.php');
    }

    function uploadHinh(&$hinhanh) {
        $target_dir = "./assets/img/users/";
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
?> -->