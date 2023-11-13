<?php
function insert_product($tensp, $giasp, $image, $motasp, $category_id)
{
    $sql = "INSERT INTO product(product_name, price, image, mota, category_id) VALUES('$tensp', '$giasp', '$image', '$motasp', '$category_id')";
    pdo_execute($sql);
}
function delete_product($product_id)
{
    $product_id = $_GET['iddm'];
    $sql = "DELETE FROM product WHERE product_id=$product_id";
    pdo_execute($sql);
}
function loadall_product_home()
{
    $sql = "SELECT * FROM product where 1 order by view desc limit 0,9";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function loadall_product_top10()
{
    $sql = "SELECT * FROM product where 1 order by product_id desc limit 0, 9";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadall_product($kyw, $category_id = 0)
{
    $sql = "SELECT * FROM product where 1";
    if ($kyw != '') {
        $sql .= " and product_name like '%" . $kyw . "%'";
    }
    if (isset($_GET['category_id']) && $_GET['category_id'] > 0) {
        $sql .= " and category_id ='" . $_GET['category_id'] . "' ";
    }
    $sql .= " order by id desc";
    $product = pdo_query($sql);
    return $product;
}
function load_category_name($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT * FROM categories WHERE category_id=" . $iddm;
        $category = pdo_query_one($sql);
        extract($category);
        return $category_name;
    } else {
        return "";
    }
}
function loadone_product($product_id)
{
    $sql = "SELECT * FROM product WHERE product_id=" . $product_id;
    $product = pdo_query_one($sql);
    return $product;
}
function update_product($product_id, $tensp, $giasp, $image, $motasp, $danhmuctest)
{
    if ($image != "") {
        $sql = "UPDATE product SET  product_name ='" . $tensp . "',price='" . $giasp . "',image='" . $image . "',mota='" . $motasp . "',category_id='" . $danhmuctest . "' WHERE product_id=" . $product_id;
    } else {
        $sql = "UPDATE product SET  product_name ='" . $tensp . "',price='" . $giasp . "',mota='" . $motasp . "',category_id='" . $danhmuctest . "' WHERE product_id=" . $product_id;
    }

    pdo_execute($sql);
}
function load_product_cungloai($product_id, $category_id)
{
    $sql = "SELECT * FROM product WHERE category_id=" . $category_id . " AND product_id <>" . $product_id;
    $listproduct = pdo_query($sql);
    return $listproduct;
}
