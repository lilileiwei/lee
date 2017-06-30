<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>About</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/about.css"/>
</head>
<body>
    <nav class="navbar navbar-default" id="nav">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-header">
                <a id="logo" class="navbar-brand" href="#">
                    <img src="assets/img/lee.svg" alt=""/>
                </a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEN <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:" data-cate="4">CLOTHES</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:" data-cate="5">BRITCHES</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:" data-cate="6">ACCESSORIES</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WOMEN <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:" data-cate="7">CLOTHES</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:" data-cate="8">BRITCHES</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:" data-cate="9">ACCESSORIES</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CHILDREN <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:" data-cate="10">CLOTHES</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:" data-cate="11">BRITCHES</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:" data-cate="12">ACCESSORIES</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT <span class="caret"></span></a>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" class="btn btn-default" id="search"><img src="assets/img/magnifier1.png" alt=""/></button>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span id="cart"><img src="assets/img/cart.png" alt=""/></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">USER<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="users/login">LOGIN</a></li>
                        <li><a href="users/regist">REGIST</a></li>
                        <li><a href="#">QUIT</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">......</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
    <div id="about-pronounce">
        <img src="assets/img/about-pronounce.jpg" alt=""/>
    </div>
    <div id="about-us" class="wrapper">
        <ul class="person">
            <li><img src="assets/img/DiorMain.jpg" alt="DiorMain" title=" Dior,法国时尚奢侈消费品牌"/></li>
            <li class="person-list"><video src="assets/video/Dior.mp4"  controls="controls" loop="loop"  poster="assets/img/DiorSub.jpg"></video></li>
        </ul>
        <ul class="person">
            <li class="person-list"><video src="assets/video/Lee.mp4"  controls="controls" loop="loop"  poster="assets/img/LeeSub.jpg"></video></li>
            <li><img src="assets/img/LeeMain.jpg" alt="LeeMain" title="LEE，追求实用与时尚的美国牛仔裤品牌"/></li>
        </ul>
        <ul class="person">
            <li><img src="assets/img/TagaMain.jpg" alt="TagaMain" title="TAGA，将经典与简奢完美融合的英伦风童装品牌" /></li>
            <li class="person-list"><video src="assets/video/TAGA.mp4"  controls="controls" loop="loop" poster="assets/img/TagaSub.jpg"></video></li>
        </ul>
    </div>
    <div id="about-brief">
        <p>LEE，是一个创建于1889年的美国著名牛仔裤品牌，
            追求实用与时尚，创造了经典的吊带工人裤，生产了世界上第
            一条拉链牛仔裤，凭着其首创及经典设计，LEE牛仔裤成为牛仔
            裤坛的经典与权威，被誉为世界三大牛仔裤品牌之一。另外有同
            名模型公司上海西西利模型有限公司简称为LEE。创办人H D Li最初
            开设一家工作服制造厂，主要供应日常工作服给予美国中、西部的农
            夫和工人。当时的经典有些至今仍流行着，如吊带工人裤"BIB’N’BRACE”，以
            及在一次世界大战成为美军制服的长袖连身工人裤"UNION ALL”。</p>
    </div>
    <div id="about-carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="assets/img/background4.jpg" alt="...">
                    <div class="carousel-caption">
                        成功男人的衣柜
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/background5.jpg" alt="...">
                    <div class="carousel-caption">
                        气质女人的选择
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/background6.jpg" alt="...">
                    <div class="carousel-caption">
                        可爱宝贝的最爱
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left fa fa-arrow-circle-left fa-4x" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right fa fa-arrow-circle-right fa-4x" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="about-advertisement">
            <h1>“我们不追随潮流，我们引领潮流”</h1>
            <p>我我我我我我我我我我我我我我我我我我窝窝我我我哦我我我我我我我我我
                我我我我我我我我我我我我我我我我我我窝窝我我我哦我我我我我我我我我
                我我我我我我我我我我我我我我我我我我窝窝我我我哦我我我我我我我我我
                我我我我我我我我我我我我我我我我我我窝窝我我我哦我我我我我我我我我
                我我我我我我我我我我我我我我我我我我窝窝我我我哦我我我我我我我我我
            </p>
        </div>
    </div>
    <div id="footer">
        <div class="footer-top">
            <ul class="footer-list">
                <li><a href="javascript:">ABOUT</a></li>
                <li><a href="javascript:">MEN'S</a></li>
                <li><a href="javascript:">MEN'S ACCESSORIES</a></li>
                <li><a href="javascript:">WOMEN'S</a></li>
                <li><a href="javascript:">WOMEN'S ACCESSORIES</a></li>
            </ul>
            <ul class="footer-list">
                <li><a href="javascript:">STORE LOCATOR</a></li>
                <li><a href="javascript:">FAQs</a></li>
                <li><a href="javascript:">CODES</a></li>
                <li><a href="javascript:">ICONS</a></li>
                <li><a href="javascript:">CONTACT</a></li>
            </ul>
            <ul class="footer-list">
                <li><a href="javascript:">40019 Parma Via</a></li>
                <li><a href="javascript:">Sant'Agata Bolognese</a></li>
                <li><a href="javascript:">BO,Italy</a></li>
                <li><a href="javascript:">1234567</a></li>
                <li><a href="javascript:">970660954@qq.com</a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p class="footer-author">Web designer：Leeyj</p>
            <p class="footer-mobile">Mobile:15046658648</p>
            <p class="footer-email">Email:970660954@qq.com</p>
            <ul class="footer-icon nav nav-pills">
                <li role="presentation" class="active"><a href="javascript:"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
                <li role="presentation"><a href="javascript:"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
                <li role="presentation"><a href="javascript:"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></li>
                <li role="presentation"><a href="javascript:"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a></li>
                <li role="presentation"><a href="javascript:"><i class="fa fa-weibo fa-2x" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>