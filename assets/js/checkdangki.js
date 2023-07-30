$(document).ready(function() {
    $("#btn-dangki").click(function(e) {
        if ($("#hoten").val() == '') {
            $("#err-hoten").text('Vui lòng nhập họ tên!')
            e.preventDefault()
        }

        if ($("#email").val() == '') {
            $("#err-email").text('Vui lòng nhập email!')
            e.preventDefault()
        }

        if ($("#sdt").val().length < 10 || $("#sdt").val().length > 11) {
            $("#err-sdt").text('Số điện thoại phải là 10 hoặc 11 số!')
            e.preventDefault()
        }

        if ($("#sdt").val().charAt(0) != '0') {
            $("#err-sdt").text('Số điện thoại phải bắt đầu bằng số 0!')
            e.preventDefault()
        }

        if ($("#sdt").val() == '') {
            $("#err-sdt").text('Vui lòng nhập số điện thoại!')
            e.preventDefault()
        }

        if ($("#diachi").val() == '') {
            $("#err-diachi").text('Vui lòng nhập địa chỉ!')
            e.preventDefault()
        }

        if ($("#tendangnhap").val() == '') {
            $("#err-tendangnhap").text('Vui lòng nhập tên đăng nhập!')
            e.preventDefault()
        }

        if ($("#ngaysinh").val() == '') {
            $("#err-ngaysinh").text('Vui lòng chọn ngày sinh!')
            e.preventDefault()
        }

        if ($("#matkhau").val().length < 6) {
            $("#err-matkhau").text('Mật khẩu phải lớn hơn 6 kí tự!')
            e.preventDefault()
        }

        if ($("#matkhau").val() == '') {
            $("#err-matkhau").text('Vui lòng nhập mật khẩu!')
            e.preventDefault()
        }

        if ($("#re-matkhau").val() != $("#matkhau")) {
            $("#err-re-matkhau").text('Mật khẩu nhập lại không chính xác!')
            e.preventDefault()
        }

        if ($("#re-matkhau").val() == '') {
            $("#err-re-matkhau").text('Vui lòng nhập lại mật khẩu!')
            e.preventDefault()
        }

        if (!$("#dieukhoan").prop("checked")) {
            $("#err-dieukhoan").text('Bạn phải đồng ý với các điều khoản và dịch vụ!')
            e.preventDefault()
        }

        $("#hoten").focus(function() {
            $("#err-hoten").text("")
        })

        $("#email").focus(function() {
            $("#err-email").text("")
        })

        $("#sdt").focus(function() {
            $("#err-sdt").text("")
        })

        $("#ngaysinh").focus(function() {
            $("#err-ngaysinh").text("")
        })

        $("#tendangnhap").focus(function() {
            $("#err-tendangnhap").text("")
        })

        $("#matkhau").focus(function() {
            $("#err-matkhau").text("")
        })

        $("#re-matkhau").focus(function() {
            $("#err-re-matkhau").text("")
        })

        $("#dieukhoan").on('change', function() {
            $("#err-dieukhoan").text("")
        })
    })
})