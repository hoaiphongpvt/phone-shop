<?php 
    include "../connect.php";

    if (isset($_GET['idKH'])) {
        $id = $_GET['idKH'];

        $sql = "UPDATE nguoidung SET TRANGTHAI = 1 WHERE ID='$id'";
        $result = mysqli_query($conn, $sql);

        header("Location: customer.php");
    }

    $conn->close();
?>