function DangKiThanhCong(){
    alert("Đăng kí thành công!")
}
function DangNhapThanhCong(){
    alert("Đăng nhập thành công!")
}
function showDangKi(){
   document.getElementById("dangki").style.display = 'block';
}
function showDangNhap(){
   document.getElementById("dangnhap").style.display = 'block';
}
function DatHangThanhCong(){
   alert("Đặt hàng thành công!")
}
function add(){
   document.getElementById("addcart").style.display = 'block';
}
function order(){
   document.getElementById("order").style.display = 'block';
}
function hide(){
   document.getElementById("dangki").style.display = 'none';
   document.getElementById("dangnhap").style.display = 'none';
}
function hide_cart(){
   document.getElementById("order").style.display = 'none';
   document.getElementById("addcart").style.display = 'none';
}
function login_required(){
   document.getElementById('login_required').style.display = 'block';
}
function hide_login_required(){
   document.getElementById('login_required').style.display = 'none';
}

// xoa san pham
function delete_product_warning(){
   document.getElementById("delete-product").style.display = 'block'
}

function hide_delete_product(){
   document.getElementById("delete-product").style.display = 'none'
}

function delete_product2(){
   document.getElementById("product2").style.display = 'none';
}
// sua thong tin
function update_info() {
   document.getElementById("edit-info").style.display = 'block';
}

function hide_update_info() {
   document.getElementById("edit-info").style.display = 'none';
   alert("Cập nhật thông tin thành công!");
}
