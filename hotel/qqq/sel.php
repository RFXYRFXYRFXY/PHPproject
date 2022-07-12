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
    <form action="./sel.php" method="get">
        请输入房间ID进行查询<input type="text" name="ser">
        <button>查询</button>
    </form>


    <table >
        <tr>
            <td>房间号</td>
            <td>房间类型</td>
            <td>房间楼层</td>
            <td>房间价格</td>
            <td>房间状态</td>
            <td>操作</td>
        </tr>


        <?php

ini_set("display_errors", "Off"); 

error_reporting(E_ALL | E_STRICT);

        require './conn.php';



        $sql='select * from room where room_id='.$_GET['ser'];


        
        $result=mysqli_query($connID,$sql);

        while($user=mysqli_fetch_array($result)){
            echo '<tr>';
            echo '<td>';
            echo $user[0];
            echo '</td>';
            echo '<td>';
            echo $user[1];
            echo '</td>';
            echo '<td>';
            echo $user[2];
            echo '</td>';
            echo '<td>';
            echo $user[3];
            echo '</td>';
            echo '<td>';
            echo $user[4];
            echo '</td>';
            echo '<td><a href="?yuding='.$user[0].'">预定</a>/<a href="?tuiding='.$user[0].'">退房</a></td>';
            echo '</tr>';
        }
    ?>
    </table>
</body>
</html>