<div class="row">
    <div class="row header-2">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb">
                Danh mục : <br><br>
                <select name="id_danhmuc" id="">
                    <?php foreach ($danhmuc as $dm) { ?>
                        <option value="<?= $dm['id'] ?>">
                            <?= $dm['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="row mb">
                Tên sản phẩm : <br><br>
                <input type="text" name="tensp">
            </div>
            <div class="row mb">
                Giá sản phẩm : <br><br>
                <input type="text" name="giasp">
            </div>
            <div class="row mb">
                Hình sản phẩm : <br><br>
                <input type="file" name="image">
            </div>
            <div class="row mb">
                Mô tả sản phẩm : <br><br>
                <textarea name="motasp" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="row mb">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" name="nhaplai" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" name="them" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }

            ?>
        </form>
    </div>
</div>


