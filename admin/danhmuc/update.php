<?php
if (is_array($capnhat)) {

    extract($capnhat);
}

?>
<div class="row">
    <div class="row header-2">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb">
                Mã loại : <br><br>
                <input type="text" name="maloai" placeholder="<?php if (isset($category_id) && ($category_id != "")) echo $category_id; ?>" disabled>
            </div>
            <div class="row mb">
                Tên loại : <br><br>
                <input type="text" name="tenloai" placeholder="<?php if (isset($category_name) && ($category_name != "")) echo $category_name; ?>">
            </div>
            <div class="row mb">
                <input type="hidden" name="id" id="" value="<?php if (isset($category_id) && ($category_id > 0)) echo $category_id; ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" name="nhaplai" value="Nhập lại">
                <a href="index.php?act=listdm"><input type="button" name="them" value="Danh sách"></a>
            </div>
        </form>
    </div>
</div>