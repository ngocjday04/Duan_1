<?php
function insert_taikhoan($email, $user_name, $password)
{
    $sql = "INSERT INTO users(email,user_name,pass) VALUES('$email','$user_name','$password')";
    pdo_execute($sql);
};
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

function delete_taikhoan($user_id)
{
    $user_id = $_GET['id'];
    $sql = "DELETE FROM users WHERE user_id=$user_id";
    pdo_execute($sql);
}
