<?php
$_GET['email'];
$_GET['feedback'];


$sql="insert into infos ( title,passage) values ('".$_GET['title']."','".$_GET['passage']."')";

require '../../PHP/connect.php';

if (mysqli_query($connID, $sql)) {
    echo "新记录插入成功";
     Header("Location:contactUS.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connID);

}

echo '创建失败';