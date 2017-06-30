<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>My History</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/history.css"/>
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
                <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                <!--<li><a href="#">Link</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEN <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">FEATURED</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Online Only</a></li>
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Clearance Sale</a></li>
                        <li><a href="#">Discount Store</a></li>
                        <li><a href="#">Editor's Pick</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WOMEN <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">FEATURED</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Online Only</a></li>
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Clearance Sale</a></li>
                        <li><a href="#">Discount Store</a></li>
                        <li><a href="#">Editor's Pick</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACCESSORIES <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">FEATURED</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Online Only</a></li>
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Clearance Sale</a></li>
                        <li><a href="#">Discount Store</a></li>
                        <li><a href="#">Editor's Pick</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOTLIST <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">FEATURED</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Online Only</a></li>
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Clearance Sale</a></li>
                        <li><a href="#">Discount Store</a></li>
                        <li><a href="#">Editor's Pick</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
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
                        <li><a href="#">LOGIN</a></li>
                        <li><a href="#">REGIST</a></li>
                        <li><a href="#">QUIT</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">......</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div id="content" class="wrap">
    <div class="con-info">
        <div class="con-nav">
            <div class="con-nav-left">Witch Store:LY Store</div>
            <div class="con-nav-right"></div>
        </div>
        <div class="con-text">
            <div class="con-text-left">
                <img src="<?php echo $rows->img_src;?>" alt="">
            </div>
            <div class="con-text-moddle">
                <strong><?php echo $rows->prod_description;?></strong>
                <h4>女装 短款 圆领</h4>
            </div>
            <div class="con-text-right">
                <strong>$<?php echo $rows->total_money?></strong>
                <h3><?php echo $rows->quantity;?></h3>

            </div>
        </div>
        <div class="con-fot">
            <button type="button" class="btn btn-info">评价商品</button>
            <button type="button" class="btn btn-warning" value="<?php echo $rows -> order_id;?>">删除订单</button>
        </div>
        <div class="con-res" style="display: none">
            <textarea name=""   rows="5" autofocus="autofocus" ></textarea>
            <input type="text" class="prodId" value="<?php echo $rows -> prod_id;?>" style="visibility: hidden">
            <button type="button" class="btn send" >发送</button>
        </div>
    </div>


</div>
<div id="container" class="wrap">
    <div id="con-title"><span>看了又看</span></div>
    <div id="example">
        <ul>
            <li><a href="">jacket</a><img src="assets/uploads/products/womens5.jpg" alt=""></li>
            <li><a href="">jeans</a><img src="assets/uploads/products/womens2.jpg" alt=""></li>
            <li><a href="">shirt</a><img src="assets/uploads/products/womens1.jpg" alt=""></li>
            <li><a href="">jewelry</a><img src="assets/uploads/products/womens3.jpg" alt=""></li>
            <li><a href="">scarf</a><img src="assets/uploads/products/womens6.jpg" alt=""></li>
        </ul>
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
<script src="assets/js/history.js"></script>
</body>
</html>