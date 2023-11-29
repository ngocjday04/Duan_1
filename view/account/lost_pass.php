<div>
    <form action="index.php?act=lost_pass" method="post">
        <h4 style="text-align: center;">
            <p>Vui lòng nhập email để lấy lại mật khẩu !</p>
        </h4>

        <div class="form-group d-flex justify-content-center">

            <input style="width:550px" type="email" class="form-control" name="email" id="guiemail"
                placeholder="Nhập email">
        </div>
        <div class="text-center"><input type="submit" name="guiemail" id="guiemail" value="Gửi" class="btn_1">

            <input type="reset" class="btn_1" value="Reset">
        </div>
    </form>
    <div class="form-group d-flex justify-content-center">
        <h4>
            <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }

    ?>
        </h4>
    </div>
</div>