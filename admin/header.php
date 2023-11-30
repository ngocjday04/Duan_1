<!DOCTYPE html>
<html>

<head>
    <title>Trang Quản Lý Admin</title>
    <link rel="stylesheet" href="../view/css/admin.css">
</head>

<body>
    <button id="toggleButton">&#9776;</button>
    <div class="menu">
        <ul>
            <li><a href="index.php?act=adddm">Quản Lý Danh Mục</a></li>
            <li><a href="index.php?act=createsp">Quản Lý Sản Phẩm</a></li>
            <li><a href="index.php?act=add-thuoctinh">Thuộc tính sản phẩm</a></li>
            <li><a href="index.php?act=dstk">Quản Lý Tài Khoản</a></li>
            <li><a href="index.php?act=dsbl">Quản Lý Bình Luận</a></li>
            <li><a href="index.php?act=listdh">Quản Lý Đơn Hàng</a></li>
            <li><a href="index.php?act=thongke">Thống Kê và Biểu Đồ</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>Trang Quản Lý Admin</h1>
        <!-- Nội dung của từng phần sẽ được thêm sau -->
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var button = document.getElementById('toggleButton');
            var menu = document.querySelector('.menu');
            var content = document.querySelector('.content');

            button.addEventListener('click', function() {
                if (menu.style.left === '0px') {
                    menu.style.left = '-250px';
                    content.style.marginLeft = '0';
                } else {
                    menu.style.left = '0';
                    content.style.marginLeft = '250px';
                }
            });
        });
    </script>
</body>

</html>