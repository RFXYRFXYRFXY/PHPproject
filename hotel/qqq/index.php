<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        
    </style>
</head>

<body>

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

        require './conn.php';



        $sql='select * from room';


        
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
            echo '<td><a href="add.php?yuding='.$user[0].'">预定</a>/<a href="del.php?tuiding='.$user[0].'">退房</a></td>';
            echo '</tr>';
        }
    ?>
    </table>

        <!-- <a href="add.php"><button>增加预定信息</button></a> -->
        <!-- <a href="del.php"><button>退房</button></a> -->
        <!-- <a href="mod.php"><button>修改预定数据</button></a> -->
        <a href="sel.php"><button>查找房间</button></a>
</body>

</html>