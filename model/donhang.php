<?php
function creat_donhang($madh, $tongdonhang, $pttt, $name, $address, $email, $tel)
{
    $sql = "INSERT INTO bill (madh, tongdonhang, pttt, name, address, email,tel) 
    VALUES ('$madh','$tongdonhang','$pttt','$name','$address','$email','$tel')";
    pdo_execute_return_lastInsertID($sql);
}
