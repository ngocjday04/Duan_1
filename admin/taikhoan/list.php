<div class="row">
    <div class="row header-2">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb">
            <table border="1" cellpadding="10">
                <tr>
                    <th></th>
                    <th>Mã tài khoản</th>
                    <th>Tên tài khoản</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Vai trò</th>
                    <th></th>
                </tr>
                <?php foreach ($listtaikhoan as $user) {
                    extract($user);
                    $suatk = "index.php?act=suatk&id=$user_id";
                    $xoatk = "index.php?act=xoatk&id=$user_id";
                    echo '<tr>
                           <td><input type="checkbox" name="" id=""></td>
                           <td>' . $user_id . '</td>
                           <td>' . $user_name . '</td>
                           <td>' . $email . '</td>
                           <td>' . $password . '</td>
                           <td>' . $address . '</td>
                           <td>' . $tel . '</td>
                           <td>' . $role . '</td>
                          
                           <td><a href="' . $suatk . '"><input type="button" value="Sửa"> <a href="' . $xoatk . '"><input type="button" value="Xóa"></a></a></td>
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