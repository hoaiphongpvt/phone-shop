const formSearch = document.getElementById('search')
const input = document.getElementById('input')
const btnSearch = document.getElementById('btnSearch')

btnSearch.addEventListener('click', (e) => {
    if (!input.value) {
        alert("Bạn phải nhập thông tin tìm kiếm")
        e.preventDefault()
    }
})