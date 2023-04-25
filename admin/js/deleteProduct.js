function deleteProduct(ID) {
    if(confirm("Bạn có chắc muốn xóa sản phẩm này không ?")) {
        window.location.href = `deleteproduct.php?ID=${ID}`;
        alert("Xoá thành công");
    }
}