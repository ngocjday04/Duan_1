<?php
function insert_taikhoan($user_name, $email, $password, $address, $tel)
{
    $sql = "INSERT INTO users(user_name,email,password,address,tel) VALUES(?,?,?,?,?)";
    pdo_execute($sql, $user_name, $email, $password, $address, $tel);
}
function checkuser($user_name, $password)
{
    $sql = "SELECT * FROM users WHERE user_name='" . $user_name . "'AND password='" . $password . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "SELECT * FROM users WHERE email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($user_id, $user_name, $password, $email, $address, $tel)
{
    $sql = "UPDATE users SET  user_name='" . $user_name . "',password='" . $password . "',email='" . $email . "',address='" . $address . "',tel='" . $tel . "' WHERE user_id=" . $user_id;
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "SELECT * FROM users order by user_id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function loadone_taikhoan($user_id)
{
    $sql = "SELECT * FROM users where user_id = ? ";
    $listtaikhoan = pdo_query_one($sql, $user_id);
    return $listtaikhoan;
}
function delete_taikhoan($user_id)
{
    $user_id = $_GET['id'];
    $sql = "DELETE FROM users WHERE user_id=$user_id";
    pdo_execute($sql);
}
