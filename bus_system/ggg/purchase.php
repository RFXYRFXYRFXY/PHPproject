<?php

require './conn.php';
$num=$_GET['nums'];
$pay=$_GET['value'];



// $sql="insert into 表名 (列1, 列2) values (值1,值2)";
$sql ="insert into ticket (purchaser,par_value,qr_code) values ('用户',".$num.",'二维码')";

for($i=0;$i<$pay;$i++){
    if (mysqli_query($connID, $sql)) {
        echo "新记录插入成功";
        // Header("Location:login.html"); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connID);
        // Header("Location:create_account.html"); 
    }
}

