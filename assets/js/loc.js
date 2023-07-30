$(document).ready(function() {
    const $btnLoc = $("#btn-loc")
    const $nsx = $("#nsx")
    const $gia = $("#gia")

    $btnLoc.click(function(e) {
        if ($nsx.val() == 'null' && $gia.val() == 'null') {
            alert('Bạn phải chọn thông tin cần lọc!')
            e.preventDefault()
        }
    })

})