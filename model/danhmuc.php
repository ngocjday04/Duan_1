<?php


function insert_categories($category_name)
{
    $sql = "INSERT INTO categories(category_name) VALUES('$category_name')";
    pdo_execute($sql);
};
function delete_categories($category_id)
{

    $sql = "DELETE  FROM categories WHERE category_id=" . $category_id;
    pdo_execute($sql);
}
function loadall_categories()
{
    $sql = "SELECT * FROM categories order by category_id desc";
    $categories = pdo_query($sql);
    return $categories;
}
function loadone_categories($category_id)
{
    $sql = "SELECT * FROM categories WHERE category_id=" . $category_id;
    $capnhat = pdo_query_one($sql);
    return $capnhat;
}
function update_categories($category_id, $category_name)
{
    $sql = "UPDATE categories SET category_name='" . $category_name . "' WHERE category_id=" . $category_id;
    pdo_execute($sql);
}
