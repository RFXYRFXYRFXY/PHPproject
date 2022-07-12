<?php

$host = "127.0.0.1";
$userName = "root";
$password = "0615";
$db1 = "hotel";

// 链接数据库
if ($connID = mysqli_connect($host, $userName, $password)) {
    echo "<script type='text/javascript'>console.log('数据库链接成功');</script>";
} else {
    echo "<script type='text/javascript'>console.log('database is fill to connect');</script>";
}

// 链接到表
$connID = mysqli_connect($host, $userName, $password, $db1);
if (mysqli_select_db($connID, $db1)) {
    echo "<script type='text/javascript'>console.log('链接成功');</script>";
} else {
    echo "<script type='text/javascript'>console.log('table is fill to connect');</script>";
};