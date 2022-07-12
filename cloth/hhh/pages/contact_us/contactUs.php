<?php
$_GET['email'];
$_GET['feedback'];


$sql="insert into contact ( contact_mail,contact_passage) values ('".$_GET['email']."','".$_GET['feedbcak']."')";

require '../../PHP/connect.php';

if (mysqli_query($connID, $sql)) {
    echo "新记录插入成功";
     Header("Location:contactUS.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connID);
    // Header("Location:create_account.html");
}