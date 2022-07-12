<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./appoint.php">
        姓名<input type="text" name="name">
        <br>
        身份证号<input type="text" name="id">
        <input type="text" name="yuding" style="opacity: 0;" value="<? echo $_GET['yuding'] ?>"/>
        <br>
        <button>提交</button>

    </form>
    

</body>
</html>