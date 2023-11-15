<?php
function insert_product($product_id, $product_name, $image, $price, $description, $category_id)
{
    $sql = "INSERT INTO product (product_id, product_name, image, price, description, category_id) VALUES (?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $product_id, $product_name, $image, $price, $description, $category_id);
}

function delete_product($product_id)
{
    $sql = "DELETE FROM product WHERE product_id=$product_id";
    pdo_execute($sql, $product_id);
}

function loadall_product_home()
{
    $sql = "SELECT * FROM product ORDER BY view DESC LIMIT 0, 9";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadall_product_top10()
{
    $sql = "SELECT * FROM product ORDER BY product_id DESC LIMIT 0, 9";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadall_product($kyw, $category_id = 0)
{
    $sql = "SELECT * FROM product WHERE 1";
    $params = [];
    if ($kyw != '') {
        $sql .= " AND product_name LIKE ?";
        $params[] = "%$kyw%";
    }
    if ($category_id > 0) {
        $sql .= " AND category_id=?";
        $params[] = $category_id;
    }
    $sql .= " ORDER BY product_id DESC";
    $product = pdo_query($sql);
    return $product;
}

function load_category_name($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT category_name FROM categories WHERE category_id=?";
        $category = pdo_query_one($sql, [$iddm]);
        return $category['category_name'];
    } else {
        return "";
    }
}

function loadone_product($product_id)
{
    $sql = "SELECT * FROM product WHERE product_id=?";
    $product = pdo_query_one($sql, [$product_id]);
    return $product;
}

function update_product($product_id, $product_name, $price, $image, $description, $danhmuctest)
{
    $params = [$product_name, $price, $description, $danhmuctest, $product_id];

    if (!empty($image)) {
        $sql = "UPDATE product SET product_name=?, price=?, image=?, description=?, category_id=? WHERE product_id=?";
        $params = array_merge([$image], $params);
    } else {
        $sql = "UPDATE product SET product_name=?, price=?, description=?, category_id=? WHERE product_id=?";
    }

    pdo_execute($sql, $params);
}

function load_product_cungloai($product_id, $category_id)
{
    $sql = "SELECT * FROM product WHERE category_id=? AND product_id!=?";
    $listproduct = pdo_query($sql, [$category_id, $product_id]);
    return $listproduct;
}
