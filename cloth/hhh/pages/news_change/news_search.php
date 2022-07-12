<?php


$_GET['news_id'];

require '../../PHP/connect.php';

$sql='select * from infos where id="'.$_GET['news_id'].'"';
// echo $sql;
$result=mysqli_query($connID,$sql);

while($user=mysqli_fetch_array($result)){
    $classify=$user[1];
    $title=$user[2];
    $passage=$user[3];
    $source=$user[4];
}
?>


<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./news_search_save.php" method="get">
        
    <? echo '分类<br><input type="text" name="classify" value="'.$classify.'" style="width:500px;height:35px">'; ?>
    <br><br>
    <? echo '标题<br><input type="text" name="title" value="'.$title.'"style="width:500px;height:35px">'; ?>

    <br><br>
    <? echo '文章<br><textarea name="passage" id="" cols="68" rows="10">'.$passage.'</textarea>'; ?>

    <br><br>
    <? echo '来源<br><input type="text" name="source" value="'.$source.'"style="width:500px;height:35px">'; ?>
    <br><br>
    <button>
        提交修改
    </button>
    <input type="text" value="<? echo $_GET['news_id'] ?>" name="news_id" style="opacity:0">
</form>
</body>
</html>


