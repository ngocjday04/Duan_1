<?php

if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = '../upload/' . $image;

if (is_file($hinhpath)) {
    $img = '<img src="' . $hinhpath . '" width="100px" height="100px>';
} else {
    $img='';
}

?>
<div class="row">
    <div class="row header-2">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_sanpham" value="<?=$id?>">
            <div class="row mb">
                Tên sản phẩm : <br><br>
                <input type="text" name="tensp" value="<?=$name?>">
            </div>
            <div class="row mb">
                Giá sản phẩm : <br><br>
                <input type="text" name="giasp" value="<?=$price?>">
            </div>
            <div class="row mb">
                Hình sản phẩm : <br><br>
                <input type="file" name="image"> <br>
                <br>
                <?=$img?>
            </div>
            <div class="row mb">
                Mô tả sản phẩm : <br><br>
                <textarea name="motasp" id="" cols="30" rows="10">"<?=$mota?>"</textarea>
            </div>

            <div class="row mb">
                <select name="danhmuctest" id="" class="">
                    <?php
                    foreach ($danhmuc as $dm) {
                        extract($dm);
                        if ($id == $id_danhmuc) {
                            echo '<option value="' . $id . '" selected>' . $name . '</option>';
                        } else {
                            echo '<option value="' . $id . '">' . $name . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="row mb">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" name="nhaplai" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" name="them" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {echo $thongbao;}
            ?>
       </form>
    </div>
</div>