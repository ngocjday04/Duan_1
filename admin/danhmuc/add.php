<div class="row">
    <div class="row header-2">
        <h1>THÊM SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb">
                Mã loại : <br><br>
                <input type="text" name="maloai" placeholder="maloai" disabled>
            </div>
            <div class="row mb">
                Tên loại : <br><br>
                <input type="text" name="tenloai" placeholder="tenloai">
            </div>
            <div class="row mb">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" name="nhaplai" value="Nhập lại">
                <a href="index.php?act=listdm"><input type="button" name="them" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }

            ?>
        </form>
    </div>
</div>