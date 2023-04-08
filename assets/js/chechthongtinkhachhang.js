const hinhanh = document.getElementById('hinhanh')
const hoten = document.getElementById('hoten')
const ngaysinh = document.getElementById('ngaysinh')
const sdt = document.getElementById('sdt')
const email = document.getElementById('email')
const diachi = document.getElementById('diachi')
const btnSua = document.getElementById('btn-suatt') 
const msgHinhanh = document.getElementById('msg-hinhanh')
const msgHoten = document.getElementById('msg-hoten')
const msgNgaysinh = document.getElementById('msg-ngaysinh')
const msgEmail = document.getElementById('msg-email')
const msgSdt = document.getElementById('msg-sdt')
const msgDiachi = document.getElementById('msg-diachi')

btnSua.addEventListener('click', (e) => {

    console.log(ngaysinh.value)
    if (hinhanh.value == "") {
        msgHinhanh.innerText = "Vui lòng nhập đường dẫn hình ảnh!"
        e.preventDefault()
    } 

    if (hoten.value == "") {
        msgHoten.innerText = "Vui lòng nhập họ tên!"
        e.preventDefault()
    } 

    if (ngaysinh.value == "") {
        msgNgaysinh.innerText = "Vui lòng chọn ngày sinh!"
        e.preventDefault()
    } 

    if (sdt.value == "") {
        msgSdt.innerText = "Vui lòng nhập số điện thoại!"
        e.preventDefault()
    }
    
    if (email.value == "") {
        msgEmail.innerText = "Vui lòng nhập email!"
        e.preventDefault()
    } 

    if (diachi.value == "") {
        msgDiachi.innerText = "Vui lòng nhập địa chỉ!"
        e.preventDefault()
    } 
})

function closeUpdateInfo(e) {
    const element = document.getElementById('edit-info')
    element.style.display = 'none';
    e.preventDefault()
}