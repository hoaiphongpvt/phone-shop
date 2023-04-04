const btnLoc = document.getElementById('btn-loc')
const nsx = document.getElementById('nsx')
const gia =  document.getElementById('gia')

btnLoc.addEventListener('click', (e) => {
    if (nsx.value == "null" && gia.value == "null") {
        alert('Bạn phải chọn thông tin cần lọc!')
        e.preventDefault()
    }
})