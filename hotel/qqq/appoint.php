<?php 

$_GET['yuding'];
$_GET['id'];
$_GET['name'];


require './conn.php';


$sql="insert into customer (customer_id, customer_name,customer_appoint) values (".$_GET['id'].",'".$_GET['name']."',".$_GET['yuding'].")";



if (mysqli_query($connID, $sql)) {
    echo "新记录插入成功";
    // Header("Location:login.html"); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connID);
    // Header("Location:create_account.html"); 
}


$sql='update room set room_state= "已预定"  where room_id ='.$_GET['yuding'];

if (mysqli_query($connID, $sql)) {
    echo "记录修改成功";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connID);
    
}