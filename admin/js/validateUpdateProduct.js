const btn = document.getElementById('btn-submit')
const hinhanh = document.getElementById('hinhanh')
const anhchitiet = document.getElementById('anhchitiet')
const tensp = document.getElementById('tensp')
const hsx = document.getElementById('hangsx')
const gia = document.getElementById('gia')
const mota = document.getElementById('mota')
const danhgia = document.getElementById('danhgia')
const manhinh = document.getElementById('manhinh')
const bonho = document.getElementById('bonho')
const camera = document.getElementById('camera')
const pin = document.getElementById('pin')
const hdh = document.getElementById('hdh')
const chip = document.getElementById('chip')
const sim = document.getElementById('sim')
const errHinhanh = document.getElementById('err-hinhanh')
const errAnhchitiet = document.getElementById('err-anhchitiet')
const errTensp = document.getElementById('err-tensp')
const errHsx = document.getElementById('err-hsx')
const errGia = document.getElementById('err-gia')
const errMota = document.getElementById('err-mota')
const errDanhgia = document.getElementById('err-danhgia')
const errManhinh = document.getElementById('err-manhinh')
const errBonho = document.getElementById('err-bonho')
const errCamera = document.getElementById('err-camera')
const errPin = document.getElementById('err-pin')
const errHdh = document.getElementById('err-hdh')
const errChip = document.getElementById('err-chip')
const errSim = document.getElementById('err-sim')

btn.addEventListener('click', (e) => {
    // if (hinhanh.value == '') {
    //     errHinhanh.innerText = "Vui lòng chọn hình ảnh!"
    //     e.preventDefault()
    // }

    // if (anhchitiet.value == '') {
    //     errAnhchitiet.innerText = "Vui lòng chọn ảnh chi tiết sản phẩm!"
    //     e.preventDefault()
    // }

    if (tensp.value == '') {
        errTensp.innerText = "Vui lòng nhập tên sản phẩm!"
        e.preventDefault()
    }

    if (hsx.value == '0') {
        errHsx.innerText = "Vui lòng chọn hãng sản xuất!"
        e.preventDefault()
    }

    if (gia.value == '') {
        errGia.innerText = "Vui lòng nhập giá!"
        e.preventDefault()
    }

    if (mota.value == '') {
        errMota.innerText = "Vui lòng nhập mô tả!"
        e.preventDefault()
    }

    if (danhgia.value == '') {
        errDanhgia.innerText = "Vui lòng nhập đánh giá!"
        e.preventDefault()
    }

    if (manhinh.value == '') {
        errManhinh.innerText = "Vui lòng nhập thông số màn hình!"
        e.preventDefault()
    }

    if (bonho.value == '') {
        errBonho.innerText = "Vui lòng nhập thông số bộ nhớ!"
        e.preventDefault()
    }

    if (camera.value == '') {
        errCamera.innerText = "Vui lòng nhập thông số camera!"
        e.preventDefault()
    }

    if (pin.value == '') {
        errPin.innerText = "Vui lòng nhập thông số pin!"
        e.preventDefault()
    }

    if (hdh.value == '') {
        errHdh.innerText = "Vui lòng nhập thông số hệ điều hành!"
        e.preventDefault()
    }

    if (chip.value == '') {
        errChip.innerText = "Vui lòng nhập thông số chip!"
        e.preventDefault()
    }

    if (sim.value == '') {
        errSim.innerText = "Vui lòng nhập thông số sim!"
        e.preventDefault()
    }

})


hinhanh.addEventListener('change', () => {
    errHinhanh.innerText = "";
})

anhchitiet.addEventListener('change', () => {
    errAnhchitiet.innerText = "";
})

tensp.addEventListener('input', () => {
    errTensp.innerText = "";
})

hsx.addEventListener('change', () => {
    errHsx.innerText = "";
})

gia.addEventListener('input', () => {
    errGia.innerText = "";
})

mota.addEventListener('input', () => {
    errMota.innerText = "";
})

danhgia.addEventListener('input', () => {
    errDanhgia.innerText = "";
})

manhinh.addEventListener('input', () => {
    errManhinh.innerText = "";
})

bonho.addEventListener('input', () => {
    errBonho.innerText = "";
})

camera.addEventListener('input', () => {
    errCamera.innerText = "";
})

pin.addEventListener('input', () => {
    errPin.innerText = "";
})

hdh.addEventListener('input', () => {
    errHdh.innerText = "";
})

chip.addEventListener('input', () => {
    errChip.innerText = "";
})

sim.addEventListener('input', () => {
    errSim.innerText = "";
})