$(document).ready(function() {
    $("btn-suatt").click(function(e) {
        if ($("#hinhanh").val() == '') {
            $("#msg-hinhanh").text("Vui lòng nhập đường dẫn hình ảnh!")
            e.preventDefault()
        }

        if ($("#hoten").val() == '') {
            $("#msg-hoten").text("Vui lòng nhập họ tên!")
            e.preventDefault()
        }

        if ($("#sdt").val() == '') {
            $("#msg-sdt").text("Vui lòng nhập số điện thoại!")
            e.preventDefault()
        }

        if ($("#email").val() == '') {
            $("#msg-email").text("Vui lòng nhập email!")
            e.preventDefault()
        }

        if ($("#diachi").val() == '') {
            $("#msg-diachi").text("Vui lòng nhập địa chỉ!")
            e.preventDefault()
        }
    })
})

function closeUpdateInfo(e) {
    const element = document.getElementById('edit-info')
    element.style.display = 'none';
    e.preventDefault()
}