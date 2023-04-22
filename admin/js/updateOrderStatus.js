function updateOrderStatus(orderId) {
    const selectElement = document.getElementsByName('status')[0];
    var status = selectElement.options[selectElement.selectedIndex].text;
    var url = 'updateorderstatus.php?ID=' + orderId + '&&status=' + encodeURIComponent(status);
    window.location.href = url;
}