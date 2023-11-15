<div class="row">
    <div class="row header-2 mb">
        <h1>DANH SÁCH LOẠI HÀNG</h1>

    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="category_id" id="">
            <option value="0" selected>Tất cả</option>
            <?php foreach ($danhmuc as $category) { ?>
            <option value="<?= $category['category_id'] ?>">
                <?= $category['category_name'] ?></option>
            <?php } ?>

        </select>
        <input type="submit" value="Tìm" name="listok" id="">
    </form>

    <div class="row formcontent">

        <br>
        <div class="row mb">
            <table border="2" cellpadding="10">
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GÍA</th>
                    <th>MÔ Tả</th>
                    <th></th>
                    <TH></TH>
                </tr>
                <?php
                foreach ($product as $pro) {
                    extract($pro);
                    $suasp = "index.php?act=suasp&idsp=$product_id";
                    $xoasp = "index.php?act=xoasp&idsp=$product_id";
                    $image_path = '../upload/' . $image;
                    $img = '<img src="' . $image_path . '" width="100px" height="100px">';

                    if (is_file($image_path)) {
                        $img = '<img src="' . $image_path . '" width="100px" height="100px">';
                    } else {
                        // echo "không tồn tại ảnh";
                    }

                    echo
                    '<tr>
                           <td><input type="checkbox" name="" id=""></td>
                           <td>' . $product_id . '</td>
                           <td>' . $product_name . '</td>
                           <td>' . $img . '</td>
                           <td>' . $price . '</td>
                           <td>' . $description . '</td>
                          <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a></td>
                          <td><a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                          </tr>
                       </tr>';
                } ?>

            </table>
        </div>
        <div class="row mb">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=createsp"><input type="button" value="Nhập thêm"></a>
        </div>


    </div>
</div>