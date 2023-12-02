<?php
include "../model/connect.php";
include "../model/danhmuc.php";
include "../model/binhluan.php";
include "../model/thuoctinh.php";
include "../model/thongke.php";
include "../model/donhang.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "header.php";
session_start();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            /* danh mục*/
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_categories($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "../admin/danhmuc/add.php";
            break;

        case 'listdm':
            $danhmuc = loadall_categories();
            include "../admin/danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                delete_categories($_GET['iddm']);
            }
            $danhmuc = loadall_categories();
            include "../admin/danhmuc/list.php";

            break;
        case "suadm":
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $capnhat = loadone_categories($_GET['iddm']);
            }
            include "../admin/danhmuc/update.php";
        case "updatedm":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $category_name = $_POST['tenloai'];
                $category_id = $_POST['id'];
                update_categories($category_id, $category_name);
            }
            $danhmuc = loadall_categories();
            include "../admin/danhmuc/list.php";
            break;

            // sản phẩm
        case 'createsp':
            if (isset($_POST['submitsp']) && ($_POST['submitsp'])) {
                $product_id = $_POST['product_id'];
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $image = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                require "../model/validate.php";
                if (!empty($nameerr)  || !empty($imageerr) || !empty($priceerr) || !empty($loaierr)) {

                    header("location: ../admin/index.php?act=createsp&nameerr=$nameerr&imageerr=$imageerr&priceerr=$priceerr&loaierr=$loaierr");
                    die;
                }
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // File uploaded successfully.
                } else {
                    // Error uploading the file.
                }
                $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : 0;

                insert_product($product_id, $product_name, $image, $price, $description, $category_id);
                $thongbao = "Thêm thành công";
            }
            $danhmuc = loadall_categories();
            include "../admin/sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $category_id = $_POST['category_id'];
            } else {
                $kyw = "";
                $category_id = 0;
            }
            $limit = 5;
            $page = $_GET['page'] ?? 1;
            $start = ($page - 1) * $limit;
            $countsp = count(loadall_product($kyw, $category_id, 0, 999999999));
            $product = loadall_product($kyw, $category_id, $start,  $limit);
            $danhmuc = loadall_categories();
            include "../admin/sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                delete_product($_GET['idsp']);
            }
            $product = loadall_product("", 0, 0, 0);
            include "../admin/sanpham/list.php";
            break;

        case "suasp":
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $product = loadone_product($_GET['idsp']);
            }
            $danhmuc = loadall_categories();
            include "../admin/sanpham/update.php";
            break;

        case "updatesp":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $category_id = $_POST['category_id'];
                $product_id = $_POST['product_id'];
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $file = $_FILES['image'];
                $image = $file["name"];
                move_uploaded_file($file['tmp_name'], "../upload/" . $image);
                update_product($product_id, $product_name, $category_id, $price, $description, $image);
            }
            $danhmuc = loadall_categories();
            $product = loadall_product("", 0, 0, 0);
            include "../admin/sanpham/list.php";
            break;

            // tài khoản
        case 'addtk':
            $listtaikhoan = loadall_taikhoan();
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];

                // insert_users($user_name, $email, $password, $tel, $address);
                insert_taikhoan($user_name, $email, $password, $address, $tel);
                $thongbao = "Thêm thành công";
            }
            include "../admin/taikhoan/addtk.php";
            break;
        case 'dstk':
            $listtaikhoan = loadall_taikhoan();
            include "../admin/taikhoan/list.php";
            break;
        case 'xoatk':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "../admin/taikhoan/list.php";
            break;
            // Thuộc tính

        case 'listthuoctinh':
            $listproduct = loadall_sanpham_admin();
            if (isset($_POST['kyw']) && ($_POST['idvr'] > 0)) {
                $idvr = $_POST['variant_id'];
                $listvariant = loadall_thuoctinh_admin($variant_id);
                include "../admin/thuoctinh/list.php";
            } else {
                $idvr = 0;
                $listvariant = loadall_thuoctinh_admin($idvr);
                include "../admin/thuoctinh/list.php";
            }

            break;
        case 'dsbl':
            $listcmt = loadall_comment(0);
            include "../admin/binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['comment_id']) && ($_GET['comment_id'] > 0)) {
                $id = $_GET['comment_id'];
            } else {
                $id = "";
            }

            delete_comment($id);
            $listcmt = comment_selectall();
            header('Location:' . $_SERVER['HTTP_REFERER']);
            // include "../admin/binhluan/list.php";
            break;

        case 'add-thuoctinh':
            $listproduct = loadall_product(0, 0, 0, 0);
            if (isset($_POST['themmoitt']) && ($_POST['themmoitt'])) {
                $product_id = $_POST['product_id'];
                $size = $_POST['size'];
                $quantity = $_POST['quantity'];
                insert_thuoctinh($product_id, $size, $quantity);
                $thongbao = "Thêm thành công";
            }
            include "../admin/thuoctinh/add.php";
            break;
        case 'suatt':
            if (isset($_GET['idvr']) && ($_GET['idvr'] > 0)) {
                $variants = loadone_variant($_GET['idvr']);
            }
            $listvariant = loadall_thuoctinh();
            include "../admin/thuoctinh/update.php";

            break;
        case 'xoatt':
            if (isset($_GET['idvr']) && ($_GET['idvr'] > 0)) {
                delete_thuoctinh($_GET['idvr']);
            }
            $listvariant = loadall_thuoctinh();
            include "../admin/thuoctinh/list.php";

            break;
        case 'update-thuoctinh':
            // $variant_id = $_GET['variant_id'];
            // $variants = loadone_variant($variant_id);
            // $listsanpham = loadall_sanpham_admin();
            if (isset($_POST['capnhattt']) && ($_POST['capnhattt'])) {
                $variant_id = $_POST['variant_id'];
                $product_id = $_POST['product_id'];
                $size = $_POST['size'];
                $quantity = $_POST['quantity'];
                update_thuoctinh($variant_id, $product_id, $size, $quantity);
            }
            $listvariant = loadall_thuoctinh();
            include "../admin/thuoctinh/list.php";
            break;
        case 'listdh':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw, 0);
            include "../admin/quanlydonhang/listdh.php";
            break;
        case 'suadh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $bill = loadone_bill($_GET['id']);
            }
            $listbill = loadall_bill();
            include "../admin/quanlydonhang/updatedh.php";
            break;
        case 'xoadh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bill($_GET['id']);
            }
            $thongbao = "Hủy đơn hàng thành công!";
            $listbill = loadall_bill();
            include "../admin/quanlydonhang/listdh.php";


            break;
        case 'updatedh':
            if (isset($_POST['capnhatdh']) && ($_POST['capnhatdh'])) {
                $id = $_POST['id'];
                $trangthai = $_POST['trangthai'];
                update_bill($id, $trangthai);
                $thongbao = "Cập nhật thành công !";
            }
            $listbill = loadall_bill();
            include "../admin/quanlydonhang/listdh.php";
            break;
        case 'chitietdh':
            $bill_detail = loadone_bill_detail($_GET['id']);
            // $cart = loadall_cart($id_user);
            include "./hoadon/billdetail.php";

            break;
        case 'thongke':
            $listdoanhthu = thong_ke_doanh_thu();
            $listdonhang = thong_ke_don_hang();
            $listsanpham = thong_ke_san_pham();
            $listyeucau = thong_ke_yeu_cau();
            include "../admin/thongke/list.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
