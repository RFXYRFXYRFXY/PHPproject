<?php

$_GET['classify'];
$_GET['passage'];
$_GET['title'];
$_GET['source'];
$_GET['news_id'];

require '../../PHP/connect.php';

$sql='update infos set classify="'.$_GET['classify'].'", title="'.$_GET['title'].'",passage="'.$_GET['passage'].'" ,sources="'.$_GET['source'].'" where id ='.$_GET['news_id'];

echo $sql;

if (mysqli_query($connID, $sql)) {
    echo "记录修改成功";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connID);
    
}