<div id="forgot_pw">
    <form action="index.php?act=lostpass" method="post">
        <div class="form-group">
            <input type="email" class="form-control" name="email" id="email_forgot" placeholder="Nhập email">
        </div>
        <p>Mật khẩu mới sẽ sớm được cung cấp cho bạn</p>
        <div class="text-center"><input type="submit" name="guiemail" value="Gửi" class="btn_1"></div>
        <input type="reset" value="Nhâp lại">
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }

    ?>
</div>