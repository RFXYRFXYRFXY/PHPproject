<?php
$host="127.0.0.1";
$userName="root";
$password="0615";
$db1="bus_system";

// 链接数据库
if($connect=mysqli_connect($host,$userName,$password)){
    echo "<script type='text/javascript'>console.log('数据库链接成功');</script>";
}
else{
    echo"<script type='text/javascript'>console.log('database is fill to connect');</script>";
}

// 选用数据库rfxy_exam
$connID=mysqli_connect($host,$userName,$password,$db1);
if(mysqli_select_db($connID,$db1)){
    // echo "<script type='text/javascript'>console.log('rfxy_exam选用成功');</script>";
    echo "<script type='text/javascript'>console.log('数据库选用成功');</script>";
}else{
    echo "<script type='text/javascript'>console.log('table is fill to use');</script>";
}




$sql='select * from userinfo where user_account='.$_POST['bus_id'];
        echo $sql;
$result=mysqli_query($connID,$sql);

while($user=mysqli_fetch_array($result)){
    if($user[0]==$_POST['bus_id']&&$user[1]==$_POST['bus_pass']){
        Header("Location:index.php");
    }

}

echo '用户不存在';