<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XcBc的服装网站</title>
    <!-- CSS only -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="hotRecommended.css">
</head>

<body>
    <div class="content container-fluid p-0">
        <!-- 头部区域 开始 -->
        <header class="sticky-top bg-pink-600">
            <nav id="xc-index-navbar" class="navbar top-0 navbar-expand-md navbar-dark bg-pink-600 border-bottom border-2 border-light pt-md-5">
                <div class="container-xl">
                    <a class="navbar-brand d-inline-flex align-items-center " href="../../index.html">
                        <img src="../../common/images/logo.png" class="border border-2 rounded-circle me-2" alt="" width="45"> XcBc的服装网站
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#xc-index-navbar-btn">
            <span class="navbar-toggler-icon"></span>
          </button>

                    <div class="collapse navbar-collapse flex-md-grow-0" id="xc-index-navbar-btn">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item mx-md-1">
                                <a class="nav-link d-flex align-items-center flex-md-column justify-content-md-center" href="../../index.html">
                                    <span class="material-icons me-2 m-md-auto">home</span> 首页
                                </a>
                            </li>
                            <li class="nav-item mx-md-1">
                                <a class="nav-link d-flex active align-items-center flex-md-column justify-content-md-center" href="hotRecommended.php">
                                    <span class="material-icons me-2 m-md-auto">local_fire_department</span> 热门推荐
                                </a>
                            </li>
                            <li class="nav-item mx-md-1">
                                <a class="nav-link d-flex align-items-center flex-md-column justify-content-md-center" href="../new_releases/newReleases.php">
                                    <span class="material-icons me-2 m-md-auto">checkroom</span> 最新上架
                                </a>
                            </li>
                            <li class="nav-item mx-md-1">
                                <a class="nav-link d-flex align-items-center flex-md-column justify-content-md-center" href="../fashion_information/fashionInformation.php">
                                    <span class="material-icons me-2 m-md-auto">feed</span> 时尚资讯
                                </a>
                            </li>
                            <li class="nav-item mx-md-1">
                                <a class="nav-link d-flex align-items-center flex-md-column justify-content-md-center" href="../contact_us/contactUs.html">
                                    <span class="material-icons me-2 m-md-auto">perm_contact_calendar</span> 联系我们
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- 头部区域 结束 -->
        <!-- 主体部分 开始 -->
        <main>
            <div class="p-5 bg-light" id="layer1">
                <div class="col-md-7 col-xl-5 py-5 text-light">
                    <h1 class="display-5 fw-bold">热门推荐</h1>
                    <p class="fs-3">最受欢迎的女性服装款式，各种优质品牌热门商品，推荐包含运动鞋、高跟鞋、长裤、裙子、外套的各种商品。</p>
                </div>
            </div>

            <div class="py-5 px-3  bg-light" id="layer2">
                <div class="container-xxl">
                    <div class="mb-3 ps-3">
                        <h1 class="">衣服</h1>
                    </div>
                    <div class="g-3 row">
<!--                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">-->
<!--                            <div class="card">-->
<!--                                <img src="../../common/images/xcbuc.png" class="card-img-top" alt="...">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="card-title">Card title</h5>-->
<!--                                    <p class="card-text">￥200</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">-->
<!--                            <div class="card">-->
<!--                                <img src="../../common/images/xcbuc.png" class="card-img-top" alt="...">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="card-title">Card title</h5>-->
<!--                                    <p class="card-text">￥200</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">-->
<!--                            <div class="card">-->
<!--                                <img src="../../common/images/xcbuc.png" class="card-img-top" alt="...">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="card-title">Card title</h5>-->
<!--                                    <p class="card-text">￥200</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

                        <?php

                        require '../../PHP/connect.php';
                        $sql="select * from cloth where classify='衣服' limit 4";

//                        echo $sql;

                        $result=mysqli_query($connID,$sql);

                        while($infos=mysqli_fetch_array($result)){
                            echo '<div class="col-12 col-sm-6 col-lg-4 col-xl-3"><div class="card"><img src="../../common/images/xcbuc.png" class="card-img-top" alt="..."><div class="card-body">';

                            echo '<h5 class="card-title">'.$infos[1].'</h5>';

                            echo '<p class="card-text">'.$infos[3].'</p>';

                            echo '</div></div></div>';

                        }



                        ?>
                    </div>
                </div>
            </div>
            <div class="py-5 px-3 bg-pink-500" id="layer3">
                <div class="container-xxl">
                    <div class="mb-3 ps-3">
                        <h1 class="">裤子</h1>
                    </div>
                    <div class="g-3 row">
<!--                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">-->
<!--                            <div class="card">-->
<!--                                <img src="../../common/images/xcbuc.png" class="card-img-top" alt="...">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="card-title">Card title</h5>-->
<!--                                    <p class="card-text">￥200</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">-->
<!--                            <div class="card">-->
<!--                                <img src="../../common/images/xcbuc.png" class="card-img-top" alt="...">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="card-title">Card title</h5>-->
<!--                                    <p class="card-text">￥200</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">-->
<!--                            <div class="card">-->
<!--                                <img src="../../common/images/xcbuc.png" class="card-img-top" alt="...">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="card-title">Card title</h5>-->
<!--                                    <p class="card-text">￥200</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->








                        <?php

                        $sql="select * from cloth where classify='裤子' limit 4";

                        //                        echo $sql;

                        $result=mysqli_query($connID,$sql);

                        while($infos=mysqli_fetch_array($result)){
                            echo '<div class="col-12 col-sm-6 col-lg-4 col-xl-3"><div class="card"><img src="../../common/images/xcbuc.png" class="card-img-top" alt="..."><div class="card-body">';

                            echo '<h5 class="card-title">'.$infos[1].'</h5>';
                            echo '<p class="card-text">'.$infos[3].'</p>';

                            echo '</div></div></div>';
                        }




                        ?>

                    </div>
                </div>
            </div>
            <div class="py-5 px-3 bg-light" id="layer4">
                <div class="container-xxl">
                    <div class="mb-3 ps-3">
                        <h1 class="">鞋子</h1>
                    </div>
                    <div class="g-3 row">
<!--                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">-->
<!--                            <div class="card">-->
<!--                                <img src="../../common/images/xcbuc.png" class="card-img-top" alt="...">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="card-title">Card title</h5>-->
<!--                                    <p class="card-text">￥200</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">-->
<!--                            <div class="card">-->
<!--                                <img src="../../common/images/xcbuc.png" class="card-img-top" alt="...">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="card-title">Card title</h5>-->
<!--                                    <p class="card-text">￥200</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">-->
<!--                            <div class="card">-->
<!--                                <img src="../../common/images/xcbuc.png" class="card-img-top" alt="...">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="card-title">Card title</h5>-->
<!--                                    <p class="card-text">￥200</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->







                        <?php


                        $sql="select * from cloth where classify='鞋子' limit 4";

                        //                        echo $sql;

                        $result=mysqli_query($connID,$sql);

                        while($infos=mysqli_fetch_array($result)){
                            echo '<div class="col-12 col-sm-6 col-lg-4 col-xl-3"><div class="card"><img src="../../common/images/xcbuc.png" class="card-img-top" alt="..."><div class="card-body">';

                            echo '<h5 class="card-title">'.$infos[1].'</h5>';
                            echo '<p class="card-text">'.$infos[3].'</p>';

                            echo '</div></div></div>';
                        }



                        ?>


                    </div>
                </div>
            </div>
        </main>


        <!-- 主体部分 结束 -->
        <!-- 尾部部分 开始 -->
        <footer>
            <div class="pt-5 pb-3 bg-pink-600">
                <p class="text-center text-light">
                    &#169;19计算机6班韩雯琼
                </p>
            </div>
        </footer>
        <!-- 尾部部分 结束 -->
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/js/bootstrap.min.js"></script>
    <script src="../../common/scripts/tools/commonFn.js"></script>
    <script src="hotRecommended.js"></script>
</body>

</html>