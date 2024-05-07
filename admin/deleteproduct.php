<?php 
    include "../functions/connect.php";

    if (isset($_GET['ID'])) {
        $ID = $_GET['ID'];

        $sql = "DELETE FROM sanpham WHERE ID='$ID'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: product.php");
        } else {
            echo "Có lỗi xảy ra!";
        }
    }
?>