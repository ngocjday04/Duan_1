<div class="row">
    <div class="row header-2 mb">
        <h1>DANH SÁCH LOẠI HÀNG</h1>

    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="id_danhmuc" id="">
            <option value="0" selected>Tất cả</option>
            <?php foreach ($danhmuc as $dm) { ?>
                <option value="<?= $dm['id'] ?>">
                    <?= $dm['name'] ?></option>
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
                    <th>GÍA</th>
                    <th>VIEW</th>
                    <th>HÌNH</th>
                    <th></th>
                    <TH></TH>
                </tr>
                <?php foreach ($sanpham as $sp) {
                    extract($sp);
                    $suasp = "index.php?act=suasp&id=$id";
                    $xoasp = "index.php?act=xoasp&id=$id";
                    $hinhpath = '../upload/' . $image;
                    $img = '<img src="' . $hinhpath . '" width="100px" height="100px>';
                    if (is_file($hinhpath)) {
                        $img = '<img src="' . $hinhpath . '" width="100px" height="100px>';
                    } else {
                        echo "k tồn tại ảnh";
                    }

                    echo
                    '<tr>
                           <td><input type="checkbox" name="" id=""></td>
                           <td>' . $id . '</td>
                           <td>' . $name . '</td>
                           <td>' . $price . '</td>
                           <td>'.$view.'</td>
                           <td>' . $img . '</td>
                          <tr colspan="2">
                          <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a></td>
                          <td><a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                          </tr>
                       </tr>';
                    
                } ?>

            </table>
        </div>
        <div class="row mb">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>


    </div>
</div>