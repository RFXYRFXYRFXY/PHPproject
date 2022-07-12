<?php

$_GET['account'];
$GET['password'];

require './conn.php';



$sql='select * from user where user_id="'.$_GET['account'].'"';
// echo $sql;
$result=mysqli_query($connID,$sql);

while($user=mysqli_fetch_array($result)){
    
    Header("Location:index.php");
}

echo '用户不存在';