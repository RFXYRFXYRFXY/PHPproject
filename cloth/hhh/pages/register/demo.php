<?php

$sql="insert into user ( user_mail,user_password) values ('".$_GET['account']."','".$_GET['password']."')";

require '../../PHP/connect.php';

if (mysqli_query($connID, $sql)) {
    echo "新记录插入成功";
    Header("Location:../../index.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connID);
    // Header("Location:create_account.html");
}