<?php

//$sql="select * from user";

require '../../PHP/connect.php';


$sql='select * from user where user_mail="'.$_GET['account'].'"';


echo $_GET['password'];
echo $sql;

$result=mysqli_query($connID,$sql);

while($user=mysqli_fetch_array($result)){
    echo $user[2].'<br>';
    if($user[2]==$_GET['password'])
    Header("Location:../realease/contactUs.html");
}

echo '用户不存在';