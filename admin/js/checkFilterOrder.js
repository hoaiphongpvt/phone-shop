const statusOrder = document.getElementById('statusOrder')
const dateFrom = document.getElementById('from')
const dateTo = document.getElementById('to')
const addressOrder = document.getElementById('addressOrder')
const btn = document.getElementById('btn-submit')

btn.addEventListener('click', (e) => {

    if (statusOrder.value == '' && dateFrom.value == '' && dateTo.value == '' && addressOrder.value == '') {
        alert('Vui lòng cung cấp ít nhất một thông tin!');
        e.preventDefault();
    }

    if (!dateFrom.value == '' && dateTo.value == '') {
        alert('Vui lòng cung cấp ngày đến!');
        e.preventDefault();
    }

    if (dateFrom.value == '' && !dateTo.value == '') {
        alert('Vui lòng cung cấp ngày bắt đầu!');
        e.preventDefault();
    }

})