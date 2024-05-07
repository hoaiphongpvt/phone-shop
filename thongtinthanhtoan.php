    <?php 
        $sql = "SELECT * FROM nguoidung WHERE ID = ".$user['ID'];
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

    ?>
    
    <!--Thanh toan-->
    <div id="order" style="display: none;">
        <div class="modal">
            <div class="modal_overlay"></div>
                <div class="modal_body">   
                    <div class="auth-form">
                        <form action="./functions/thanhtoan.php" method="POST" class="auth-form__container">
                            <div class="auth-form__header">
                                <h3 class="auth-form__heading">XÁC NHẬN THÔNG TIN</h3>
                            </div>
                            <div class="auth-form__form">
                                <div class="auth-form__group">
                                    <input type="text" id="hoten" value="<?php echo $row['HOTEN'];?>" class="auth-form__input" name="hoten" placeholder="Họ và tên">
                                    <p class="has-err" id="err-hoten"></p>
                                </div>
                                <div class="auth-form__group">
                                    <input type="email" id="email" value="<?php echo $row['EMAIL']?>" class="auth-form__input" name="email" placeholder="Email">
                                    <p class="has-err" id="err-email"></p>
                                </div>
                                <div class="auth-form__group">
                                    <input type="number" id="sdt" value="<?php echo $row['DIENTHOAI']?>" class="auth-form__input" name="sdt" placeholder="Điện thoại">
                                    <p class="has-err" id="err-sdt"></p>
                                </div>
                                <div class="auth-form__group">
                                    <input type="text" id="diachi" value="<?php echo $row['DIACHI']?>" class="auth-form__input" name="diachi" placeholder="Địa chỉ">
                                    <p class="has-err" id="err-diachi"></p>
                                </div>
                                <div class="choose-pay">
                                    <label for="">
                                        <input type="radio" name="pttt" value="COD" checked>
                                        Thanh toán khi nhận hàng
                                    </label>
                                    <label for="">
                                        <input type="radio" name="pttt" value="Online">
                                        Thanh toán online
                                    </label>
                                </div>
                            </div>
                            <div class="order-total">
                                <p class="order-total-text">Tổng tiền:</p>
                                <input type="hidden" name="tongtien" value="<?php echo $total_price; ?>">
                                <p class="order-total-price"><?php echo currency_format($total_price)?></p>
                             </div>

                            <div class="auth-form__controls">
                                <a class="btn btn--back" onclick="hide_cart()">TRỞ LẠI</a>
                                <button type="submit" class="btn btn--primary" onclick="DatHangThanhCong()">Thanh Toán</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>