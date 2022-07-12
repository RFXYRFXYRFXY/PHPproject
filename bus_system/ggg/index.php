<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>城市公交管理系统</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/index_show.css">
    <link rel="stylesheet" href="./css/index-page.css">
    <script src="./JavaScript/index.js"></script>
    <?php
        $host="127.0.0.1";
        $userName="root";
        $password="0615";
        $db1="bus_system";

        // 链接数据库
        if($connID=mysqli_connect($host,$userName,$password)){
            echo "<script type='text/javascript'>console.log('数据库链接成功');</script>";
        }
        else{
            echo"<script type='text/javascript'>console.log('database is fill to connect');</script>";
        }

        // 链接到表
        $connID=mysqli_connect($host,$userName,$password,$db1);
        if(mysqli_select_db($connID,$db1)){
            echo "<script type='text/javascript'>console.log('链接成功');</script>";
        }else{
            echo "<script type='text/javascript'>console.log('table is fill to connect');</script>";
        };
    ?>
</head>

<body>
    <div class="layui-layout layui-layout-admin">
        <div class="layui-header">
            <div class="layui-logo layui-hide-xs layui-bg-black">城市公交管理系统</div>
            <!-- 头部区域（可配合layui 已有的水平导航） -->
            <ul class="layui-nav layui-layout-left">
                <!-- 移动端显示 -->
                <li class="layui-nav-item layui-show-xs-inline-block layui-hide-sm" lay-header-event="menuLeft">
                    <i class="layui-icon layui-icon-spread-left"></i>
                </li>

                <li class="layui-nav-item layui-hide-xs" onclick="page1()"><a href="javascript:;">公交线路</a></li>
                <!-- <li class="layui-nav-item layui-hide-xs" onclick="page2()"><a href="javascript:;">公交车次</a></li> -->
                <!-- <li class="layui-nav-item layui-hide-xs" onclick="page3()"><a href="javascript:;">公交站点</a></li> -->
                <li class="layui-nav-item">
                    <a onclick="dingdan()">乘车</a>
                    <dl class="layui-nav-child">
                        <dd><a href="">乘车</a></dd>
                        <dd><a href="">取消订单</a></dd>
                    </dl>
                </li>
            </ul>
            <!-- <ul class="layui-nav layui-layout-right">
                <li class="layui-nav-item layui-hide layui-show-md-inline-block">
                    <a href="javascript:;">
                        <img src="//tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" class="layui-nav-img"> User Name
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="">个人资料</a></dd>
                        <dd><a href="">设置</a></dd>
                        <dd><a href="">退出</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item" lay-header-event="menuRight" lay-unselect>
                    <a href="javascript:;">
                        <i class="layui-icon layui-icon-more-vertical"></i>
                    </a>
                </li>
            </ul> -->
        </div>

        <div class="layui-side layui-bg-black" id="index-Left-Nav" onclick="closePage()">
            <div class="layui-side-scroll">
                <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
                <ul class="layui-nav layui-nav-tree" lay-filter="test">
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">项目介绍</a>
                        <dl class="layui-nav-child">
                            <dd onclick="div1Click()"><a href="javascript:;">背 景</a></dd>
                            <dd onclick="div2Click()"><a href="javascript:;">作 用</a></dd>
                            <!-- <dd onclick="div3Click()"><a href="javascript:;">应用场景</a></dd> -->
                            <dd onclick="div4Click()"><a href="javascript:;">联系我们</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">公交卡</a>
                        <dl class="layui-nav-child">
                            <dd onclick="div5Click()"><a href="javascript:;">公交卡充值</a></dd>
                            <dd onclick="div6Click()"><a href="javascript:;">订单记录</a></dd>
                            <!-- <dd><a href="">常见问题</a></dd> -->
                        </dl>
                    </li>
                    <li class="layui-nav-item" onclick="div7Click()"><a href="javascript:;">电子票</a></li>
                    <li class="layui-nav-item" onclick="div8Click()"><a href="javascript:;">乘坐公交车</a></li>
                </ul>
            </div>
        </div>

        <div class="layui-body">
            <!-- 内容主体区域 -->

            <div id="index">
                <div id="div1">
                    <!-- <img src="/img/R-C.jpg" alt="Bus Shows" class="div1-img"> -->
                    <img src="./img/div-1-img-1.jpg" class="div1-img">
                    <p class="div-1-text">
                        随着中小城市居民对公共交通需求的日益提高和网络的快速发展， 公共交通想要取得突破，获得进一步发展，应借力网络，寻求为居民提供高品质、多样化、个性化公交服务的方法， 进而改善公众出行体验、提高居民出行舒适感与便利度。 基于这个前提，开发了这个城市公交管理系统。
                    </p>
                </div>
                <div id="div2">
                    <div class="div2-img">
                        <img src="./img/1.jpg" class="div-2-img">
                        <p class="div-2-p">
                            方便出行
                        </p>
                        <p class="div-2-passage">
                            使用这个系统的话，既可以记录自己之前的所有账单，也可以记录好出行的记录
                        </p>
                    </div>
                    <div class="div2-img">
                        <img src="./img/2.jpg" class="div-2-img">
                        <p class="div-2-p">
                            线上充值
                        </p>
                        <p class="div-2-passage">
                            使用线上的充值方式，当出行的时候，就可不必担心公交卡中余额不足等相关的问题
                        </p>
                    </div>
                    <div class="div2-img">
                        <img src="./img/3.jpg" class="div-2-img">
                        <p class="div-2-p">
                            全局管理
                        </p>
                        <p class="div-2-passage">
                            在本系统中，全局管理的设计，可以对自己的出行进行极佳的安排和管理，大大减少出行的压力
                        </p>
                    </div>
                    <div class="div2-img">
                        <img src="./img/4.png" class="div-2-img">
                        <p class="div-2-p">
                            订单查询
                        </p>
                        <p class="div-2-passage">
                            通过对订单的查询，可以查看出用户的出行记录的很多细节，包括并不仅限于乘车时间、下车时间等相关的信息
                        </p>
                    </div>
                </div>
                <div id="div3"></div>
                <div id="div4">

                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
                        <legend>联系方式</legend>
                    </fieldset>
                    <div class="layui-collapse" lay-accordion="">
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">QQ:</h2>
                            <div class="layui-colla-content layui-show">
                                643477410
                            </div>
                        </div>
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">Tel:</h2>
                            <div class="layui-colla-content">
                                10086
                            </div>
                        </div>
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">Wechat</h2>
                            <div class="layui-colla-content">
                                z8191462
                            </div>
                        </div>
                        
                    </div>

                    <!-- <div class="div4P">
                        <i class="layui-icon layui-icon-login-qq">QQ: &nbsp 731560906</i>
                    </div>
                    <div class="div4P">
                        <i class="layui-icon layui-icon-cellphone">Tel: &nbsp 15075541660</i>
                    </div>
                    <div class="div4P">
                        <i class="layui-icon layui-icon-login-wechat">Wechat: &nbsp z8191462</i>
                    </div>
                    <div class="div4P">
                        <i class="layui-icon layui-icon-login-weibo">Weibo: &nbsp </i>
                    </div>
                    <div class="div4P">
                        <i class="layui-icon layui-icon-login-website">Blog: &nbsp rfxy0615.top</i>
                    </div> -->
                </div>
                <div id="div5">
                    <form action="./purchase.php" method="get">
                        <div class="div5-1">
                            温馨提示:请选择购买与呈现路票价相对应的电子票
                        </div>
                        <div class="div5-2">
                            选择票价
                        </div>
                        <div class="div5-3">
                            <button type="button" class="layui-btn layui-btn-lg layui-btn-primary layui-btn-radius" id="purchase-1" onclick="changeColor(1)">
                            1元
                        </button>
                            <button type="button" class="layui-btn layui-btn-lg layui-btn-primary layui-btn-radius" id="purchase-2" onclick="changeColor(2)">
                            2元
                        </button>
                            <button type="button" class="layui-btn layui-btn-lg layui-btn-primary layui-btn-radius" id="purchase-3" onclick="changeColor(3)">
                            3元
                        </button>
                            <button type="button" class="layui-btn layui-btn-lg layui-btn-primary layui-btn-radius" id="purchase-4" onclick="changeColor(4)">
                            4元
                        </button>
                            <button type="button" class="layui-btn layui-btn-lg layui-btn-primary layui-btn-radius" id="purchase-5" onclick="changeColor(5)">
                            5元
                        </button>
                        </div>


                        <div class="div5-3">


                            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                                <legend>数量:</legend>
                            </fieldset>

                            <!-- <div id="slideTest6" class="demo-slider"></div>
                        <br/> -->
                            <div id="slideTest8" class="demo-slider"></div>
                            <br/><br/>
                            <div id="test-slider-tips1" style="position:relative; left: 30px; top: -20px;"></div>


                            <!-- <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                            <legend>购买数量</legend>
                        </fieldset> -->
                            <!-- <div id="slideTest8" class="demo-slider"></div> -->
                        </div>

                        <!-- <div class="div5-3">
                        应付金额:<span id="payment"></span>元
                    </div> -->

                        <div class="div5-4">
                            <button type="submit" class="layui-btn layui-btn-lg">提交</button>
                            <button type="reset" class="layui-btn layui-btn-lg">重置</button>
                        </div>
                    </form>
                </div>
                <div id="div6">
                    <table class="scoreTable" >
                        <thead>
                            <tr class="trs">
                                <td class="td-1" style="font-size: 20px;">
                                    用户名
                                </td>
                                <td class="td-2" style="font-size: 20px;">
                                    面值
                                </td>
                                <td class="td-5" style="font-size: 20px;">
                                    上车站
                                </td>
                                <td class="td-5" style="font-size: 20px;">
                                    下车站
                                </td>
                                
                                <td class="td-3" style="font-size: 20px;">
                                    使用
                                </td>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            require './conn.php';
                            $sql='select * from ticket where purchaser="用户"';

                            $result=mysqli_query($connID,$sql);

                            while($infos=mysqli_fetch_array($result)){
                                echo '<tr class="trs">';
                                echo '<td class="td-1">'.$infos[1].'</td>';
                                echo '<td class="td-2">'.$infos[2].'</td>';
                                echo '<td class="td-5">'.$infos[3].'</td>';
                                echo '<td class="td-5">'.$infos[4].'</td>';
                                
                                if($infos[3]!==null){
                                    echo '<td class="td-3"><a href="?dropticket='.$infos[0].'">';
                                    echo '销毁';
                                }else{
                                    echo '<td class="td-3"><a href="?use='.$infos[0].'">';
                                    echo '使用';
                                }
                                echo '</a></td>';
                                echo '</tr>';
                            }

                            // $sql='select * from route_table';
                            // $result=mysqli_query($connID,$sql);
                            // $i=0;
                            // while($route=mysqli_fetch_array($result))

                            ?>

                            <!-- <tr>
                                <td class="td-1">'.$info[2].'</td>
                                <td class="td-2">'.$info[3].'</td>
                                <td class="td-3">'.$answer.'</td>
                                <td class="td-4">'.$info[6].'</td>
                                <td class="td-5">'.$info[7].'</td>
                                <td class="td-5">'.$shouldScore.'</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>

                <div id="div7">
                    <div class="div-7-img">
                        <img src="./img/1.jpg" class="div7-qrcode">
                    </div>


                    <div class="div7-show">
                        请使用与所需金额相同的电子票
                        <br>
                        <br>
                        老年卡或者军人卡可以免费乘坐公交车
                    </div>
                </div>


                <div id="div8">

                
                    <div class="layui-btn-container" >
                    <?php
                        $sql='select * from route_table';
                        $result=mysqli_query($connID,$sql);
                        $i=0;
                        while($route=mysqli_fetch_array($result)){
                            echo '<a href="index.php?route='.$route[1].'"><button type="button" class="layui-btn " onclick="">'.$route[1].'</button></a>';
                        }





                        
                    ?>

                    </div>
                    <br>
                    
                </div>
                
                <div id="div9">
                    <div class="layui-collapse" lay-filter="test">
                        <form action="./chengche.php">
                            <input type="text" name="start" placeholder="始发站" class="route">

                            <i class="layui-icon layui-icon-release" id="trans"></i>

                            <input type="text" name="end" placeholder="终点站" class="route">
                                <br>
                            <div class="layui-btn-container" id="buttons">
                                <button type="button" class="layui-btn">乘车</button>
                                <button type="button" class="layui-btn">重置</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>



            <div id="page-1">
                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                    <legend>公交线路</legend>
                </fieldset>
                <div class="layui-collapse" lay-filter="test">
                    

                    <?php
                    
                        $startTag='<div class="layui-colla-item">';
                        $seTag='<h2 class="layui-colla-title">';
                        $thTag='<div class="layui-colla-content">';
                        $ulTag='<ul class="layui-timeline">';
                        $liTag='<li class="layui-timeline-item">';

                        $endingLiTag='</li>';
                        $endingUlTag='</ul>';
                        $endingThTag='</div>';
                        $endingSeTag='</h2>';
                        $endingTag='</div>';

                        // $route=array(
                        //     array('唐山101路公交车路线','二十一小区','早市','丰润区政府','幸福商场','八小区','七小区','十一小区'),
                        //     array('唐山101路公交车路线','二十一小区','早市'),
                        //     array('唐山101路公交车路线','二十一小区','早市'),
                        // );
                        $sql='select * from route_table';
                        $result=mysqli_query($connID,$sql);
                        $i=0;
                        while($route=mysqli_fetch_array($result)){
                            $i++;
                            echo $startTag;
                                echo $seTag;
                                echo $route[1];
                                $passingStation=explode("|",$route[3]);
                                echo $endingSeTag;

                            echo $thTag.$ulTag;

                            
                            for($j=0;$j<count($passingStation);$j++){
                                echo $liTag;
                                echo '<i class="layui-icon layui-timeline-axis"></i>';
                                echo '<div class="layui-timeline-content layui-text"><div class="layui-timeline-title">';
                                echo $passingStation[$j];
                                echo '</div></div>';
                                echo $endingLiTag;
                            }
                            echo $endingThTag.$endingUlTag;

                            echo $endingTag;

                        }
                    ?>

                </div>



            </div>
            <div id="page-2">
<?

    

    $sql='update ticket set starting_station= "始发站" , ending_station="末班站" where ticket_id ='.$_GET['use'];

    if (mysqli_query($connID, $sql)) {
        // echo "记录修改成功";
    } else {
        // echo "Error: " . $sql . "<br>" . mysqli_error($connID);
    }


    $sql='delete from ticket where ticket_id ='.$_GET['dropticket'];

    if (mysqli_query($connID, $sql)) {
        // @echo "记录修改成功";
    } else {
        // echo "Error: " . $sql . "<br>" . mysqli_error($connID);
    }

    error_reporting(0);
?>                
            </div>
            <div id="page-3">

            </div>
        </div>

        <div class="layui-footer" style="text-align: center;">
            <!-- 底部固定区域 -->
            
        </div>
    </div>

</body>

</html>


<script src="./layui/layui.js"></script>
<script>
    //JS 
    layui.use(['element', 'layer', 'util'], function() {
        var element = layui.element,
            layer = layui.layer,
            util = layui.util,
            $ = layui.$;

        //头部事件
        util.event('lay-header-event', {
            //左侧菜单事件
            menuLeft: function(othis) {
                layer.msg('展开左侧菜单的操作', {
                    icon: 0
                });
            },
            menuRight: function() {
                layer.open({
                    type: 1,
                    content: '<div style="padding: 15px;">处理右侧面板的操作</div>',
                    area: ['260px', '100%'],
                    offset: 'rt',
                    anim: 5,
                    shadeClose: true
                });
            }
        });

    });
</script>
<script>
    layui.use('slider', function() {
        var $ = layui.$,
            slider = layui.slider;



        slider.render({
            elem: '#slideTest8',
            tips: false,
            input: true, //输入框
            max: '30',
            name:'values',
            change: function(value) {
                var payment = value * pay;
                
                $('#test-slider-tips1').html('应付金额' + payment+'<input type="text" name="nums" value='+pay+' style="opacity:0"/><input type="text" name="value" value='+value+' style="opacity:0"/>');
            }
        });




    });
</script>

<script>
    layui.use('table', function() {
        var table = layui.table;

        table.render({
            elem: '#demo',
            url: '',
            cellMinWidth: 80,
            cols: [
                [{
                        field: 'bill_id',
                        width: 150,
                        title: '账单号',
                        sort: true
                    }, {
                        field: 'route',
                        width: 150,
                        title: '路线'
                    }, {
                        field: 'on_time',
                        width: 200,
                        title: '上车时间'
                    }, {
                        field: 'off_time',
                        title: '下车时间',
                        width: 200,
                        minWidth: 100
                    } //minWidth:局部定义当前单元格的最小宽度，layui 2.2.1 新增
                    , {
                        field: 'user_name',
                        title: '用户名',
                        width: 100,
                        sort: true
                    }, {
                        field: 'pay_money',
                        width: 120,
                        title: '支付金额',
                        sort: true
                    }, {
                        field: 'license_plate_number',
                        width: 120,
                        title: '车牌号',
                        sort: true
                    }
                ]
            ],
            page: true
        });
    });
</script>