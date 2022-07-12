<?php

$_GET['tuiding'];

require './conn.php';

$del='delete from customer where customer_appoint ='.$_GET['tuiding'];

if (mysqli_query($connID, $del)) {
    echo "记录删除成功";
    
} else {
    echo "Error: " . $del . "<br>" . mysqli_error($connID);
    
}

$sql='update room set room_state= "未预定"  where room_id ='.$_GET['tuiding'];

if (mysqli_query($connID, $sql)) {
    echo "记录修改成功";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connID);
    
}