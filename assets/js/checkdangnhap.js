const tendangnhap = document.getElementById('tendangnhap')
const matkhau = document.getElementById('matkhau')
const btnDangnhap = document.getElementById('btn-dangnhap');
const msgTendangnhap = document.getElementById('err-tendangnhap')
const msgMatkhau = document.getElementById('err-matkhau')
const msg = document.getElementById('msg')

btnDangnhap.addEventListener('click', (e) => {
    if (tendangnhap.value == "") {
        msgTendangnhap.innerText = "Vui lòng nhập tên đăng nhập!"
        e.preventDefault()
    } 

    if (matkhau.value.length < 6) {
        msgMatkhau.innerText = "Mật khẩu phải lớn hơn 6 kí tự"
        e.preventDefault()
    }

    if (matkhau.value == "") {
        msgMatkhau.innerText = "Vui lòng nhập mật khẩu!"
        e.preventDefault()
    }
})

tendangnhap.addEventListener('input', () => {
    msgTendangnhap.innerText = ""
})

matkhau.addEventListener('input', () => {
    msgMatkhau.innerText = ""
})