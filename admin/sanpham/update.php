<?php

if (is_array($product)) {
    extract($product);
}
$image_path = '../upload/' . $image;

if (is_file($image_path)) {
    $img = '<img src="' . $image_path . '" width="100px" height="100px>';
} else {
    $img = '';
}

?>
<div class="row">
    <div class="row header-2">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <input type="hidden" name="product_id" value="<?= $product_id ?>">
            <div class="row mb">
                Tên sản phẩm : <br><br>
                <input type="text" name="product_name" value="<?= $product_name ?>">
            </div>
            <div class="row mb">
                Hình sản phẩm : <br><br>
                <input type="file" name="image"> <br>
                <br>
                <?= $img ?>
            </div>
            <div class="row mb">
                Giá sản phẩm : <br><br>
                <input type="text" name="price" value="<?= $price ?>">
            </div>
            <div class="row mb">
                Mô tả sản phẩm : <br><br>
                <textarea name="description" id="" cols="30" rows="10">"<?= $description ?>"</textarea>
            </div>

            <div class="row mb">
                <select name="danhmuctest" id="" class="">
                    <?php
                    foreach ($categories as $category) {
                        extract($category);
                        if ($category_id == $category_id) {
                            echo '<option value="' . $category_id . '" selected>' . $category_name . '</option>';
                        } else {
                            echo '<option value="' . $category_id . '">' . $category_name . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="row mb">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
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