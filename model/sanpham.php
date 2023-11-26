<?php
function insert_product($product_id, $product_name, $image, $price, $description, $category_id)
{
    $sql = "INSERT INTO product (product_id, product_name, image, price, description, category_id) VALUES (?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $product_id, $product_name, $image, $price, $description, $category_id);
}

function delete_product($product_id)
{
    $sql = "DELETE FROM product WHERE product_id=$product_id";
    pdo_execute($sql);
}

function loadall_product_top10()
{
    $sql = "SELECT * FROM product Where 1 ORDER BY view DESC LIMIT 0, 6";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function loadall_sanpham_admin()
{
    $sql = "SELECT*FROM product ORDER BY product_id DESC";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function loadall_product_home()
{
    $sql = "SELECT * FROM product Where 1  ORDER BY product_id DESC LIMIT 0, 11";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function loadall_product_home_noibat()
{
    $sql = "SELECT * FROM product Where 1  ORDER BY product_id ASC LIMIT 0, 6";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function loadall_product($kyw = "", $category_id = 0, $start, $limit = 2)
{
    $sql = "SELECT * FROM product WHERE 1";

    if ($kyw != "") {
        $sql .= " AND product_name LIKE '%" . $kyw . "%'";
    }

    if ($category_id > 0) {
        $sql .= " AND category_id = '" . $category_id . "'";
    }

    $sql .= " ORDER BY product_id DESC";
    $sql .= " LIMIT $start, $limit";

    $listproduct = pdo_query($sql);
    return $listproduct;
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

function update_product($product_id, $product_name, $category_id, $price, $description, $image)
{
    if ($image != "")
        $sql = "update product set product_name='" . $product_name . "',category_id = '" . $category_id . "', price='" . $price . "',description='" . $description . "',image='" . $image . "' where product_id=" . $product_id;
    else
        $sql = "update product set product_name='" . $product_name . "',category_id = '" . $category_id . "', price='" . $price . "',description='" . $description . "' where product_id=" . $product_id;
    pdo_execute($sql);
}

function load_product_cungloai($product_id, $category_id)
{
    $sql = "SELECT * FROM product WHERE category_id=" . $category_id . " AND product_id <> " . $product_id;
    $listproduct = pdo_query($sql);
    return $listproduct;
}
