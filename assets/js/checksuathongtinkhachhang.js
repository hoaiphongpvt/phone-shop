const hoten = document.getElementById('hoten')
const email = document.getElementById('email')
const sdt = document.getElementById('sdt')
const diachi = document.getElementById('diachi')
const tendangnhap = document.getElementById('tendangnhap')
const matkhau = document.getElementById('matkhau')
const xnMatkhau = document.getElementById('re-matkhau')
const cbDieukhoan = document.getElementById('dieukhoan')
const btnDangki = document.getElementById('btn-dangki')
const errHoten = document.getElementById('err-hoten')
const errEmail = document.getElementById('err-email')
const errSdt = document.getElementById('err-sdt')
const errDiachi = document.getElementById('err-diachi')
const errTendangnhap = document.getElementById('err-tendangnhap')
const errMatkhau = document.getElementById('err-matkhau')
const hinhanh = document.getElementById('fileToUpload')
const errHinhanh = document.getElementById('err-hinhanh')

btnDangki.addEventListener('click', (e) => {

    if (hoten.value == '') {
        errHoten.innerText = "Vui lòng nhập họ tên!"
        e.preventDefault()
    }

    if (email.value == '') {
        errEmail.innerText = "Vui lòng nhập email!"
        e.preventDefault()
    }

    if (sdt.value == '') {
        errSdt.innerText = "Vui lòng nhập số điện thoại!"
        e.preventDefault()
    }

    if(sdt.value.length < 10 || sdt.value.length > 11) {
        errSdt.innerText = "Số điện thoại phải là 10 hoặc 11 số!"
        e.preventDefault()
    }

    if (sdt.value.charAt(0) != '0') {
        errSdt.innerText = "Số điện thoại phải bắt đầu bằng số 0!"
        e.preventDefault()
    }

    if (diachi.value == '') {
        errDiachi.innerText = "Vui lòng nhập địa chỉ"
        e.preventDefault()
    }

    if (tendangnhap.value == '') {
        errTendangnhap.innerText = "Vui lòng nhập tên đăng nhập"
        e.preventDefault()
    } 

    if (matkhau.value.length < 6) {
        errMatkhau.innerText = "Mật khẩu phải lớn hơn 6 kí tự"
        e.preventDefault()
    }

    if (matkhau.value == '') {
        errMatkhau.innerText = "Vui lòng nhập mật khẩu"
        e.preventDefault()
    } 

    if (!hinhanh.value) {
        errHinhanh.innerText = "Vui lòng chọn hình ảnh!"
        e.preventDefault()
    }

    console.log(hinhanh)
})

hoten.addEventListener('input', () => {
    errHoten.innerText = ""
})

email.addEventListener('input', () => {
    errEmail.innerText = ""
})

sdt.addEventListener('input', () => {
    errSdt.innerText = ""
})

diachi.addEventListener('input', () => {
    errDiachi.innerText = ""
})

tendangnhap.addEventListener('input', () => {
    errTendangnhap.innerText = ""
})

matkhau.addEventListener('input', () => {
    errMatkhau.innerText = ""
})