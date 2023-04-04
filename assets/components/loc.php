<form action="./././timkiem.php" method="GET" class="locSP">
    <h3>Bộ lọc:</h3>
    <div class="locTheoHang">
        <select name="nsx" id="nsx" class="form-select form-select-lg">
            <option value=null selected>Chọn hãng sản xuất</option>
            <option value="1">Apple</option>
            <option value="2">Samsung</option>
            <option value="3">Oppo</option>
            <option value="4">Vivo</option>
        </select>
    </div>

    <div class="locTheoGia">
        <select name="gia" id="gia" class="form-select form-select-lg">
            <option value=null selected>Chọn khoảng giá</option>
            <option value="0-4000000">Dưới 4 triệu</option>
            <option value="4000000-10000000">4 triệu - 10 triệu</option>
            <option value="10000000-20000000">10 triệu - 20 triệu</option>
            <option value=">20000000">Từ 20 triệu trờ lên</option>
        </select>
    </div>

    <button type="submit" id="btn-loc" class="btn btn-danger btn-loc">LỌC</button>
</form>