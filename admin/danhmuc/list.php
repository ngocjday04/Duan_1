<div class="row">
    <div class="row header-2">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb">
            <table border="1" cellpadding="10">
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th></th>
                </tr>
                <?php foreach ($danhmuc as $dm) {
                    extract($dm);
                    $suadm = "index.php?act=suadm&iddm=$category_id";
                    $xoadm = "index.php?act=xoadm&iddm=$category_id";
                    echo '<tr>
                           <td><input type="checkbox" name="" id=""></td>
                           <td>' . $category_id . '</td>
                           <td>' . $category_name . '</td>
                           <td><a href="' . $suadm . '"><input type="button" value="Sửa"> <a href="' . $xoadm . '"><input type="button" value="Xóa"></a></a></td>
                       </tr>';
                } ?>
            </table>
        </div>
        <div class="row mb">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>


    </div>
</div>