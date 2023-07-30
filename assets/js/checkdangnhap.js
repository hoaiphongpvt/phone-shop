$(document).ready(function() {
    $("#btn-dangnhap").click(function(e) {
        if ($("#tendangnhap").val() == '') {
            $("#err-tendangnhap").text("Vui lòng nhập tên đăng nhập!")
            e.preventDefault()
        }

        if ($("#matkhau").val().length < 6) {
            $("#err-matkhau").text("Mật khẩu phải lớn hơn 6 kí tự!")
            e.preventDefault()
        }

        if ($("#matkhau").val() == '') {
            $("#err-matkhau").text("Vui lòng nhập mật khẩu!")
            e.preventDefault()
        }

        $("#tendangnhap").focus(function() {
            $("#err-tendangnhap").text("")
            $("#msg").text("")
        })

        $("#matkhau").focus(function() {
            $("#err-matkhau").text("")
            $("#msg").text("")
        })
    })
})