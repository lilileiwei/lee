<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>Confirm Order</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/confirm.css"/>
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
<div id="addr" class="clearfix">
   <div id="user-info">
       <span>Username：xxx</span>
       <span>Tel:130-1900-7503</span>
   </div>
    <div id="address">UserAddress：黑龙江省哈尔滨市</div>
</div>
<div id="scroll"></div>
<form action="">
    <div id="order">
        <div class="order-info">
            <div class="order-nav">
                Which Store:LY Store
            </div>
            <div class="order-text">
                <div class="order-text-left">
                    <img src="assets/uploads/products/womens5.jpg" alt="">
                </div>
                <div class="order-text-moddle">
                    <strong>2017春季新款长衫</strong>
                    <h4>颜色分类：浅蓝色</h4>
                </div>
                <div class="order-text-right">
                    <strong>￥380</strong>
                    <h3>X1</h3>

                </div>
            </div>
        </div>
        <div class="order-info">
            <div class="order-nav">
                Which Store:LY Store
            </div>
            <div class="order-text">
                <div class="order-text-left">
                    <img src="assets/uploads/products/womens2.jpg" alt="">
                </div>
                <div class="order-text-moddle">
                    <strong>2017春季新款牛仔裤</strong>
                    <h4>颜色分类：浅蓝色</h4>
                </div>
                <div class="order-text-right">
                    <strong>￥270</strong>
                    <h3>X1</h3>
                </div>
            </div>
        </div>

    </div>
    <div id="bargin">
        <ul class="list-group">
            <li class="list-group-item list-group-item-success">配送方式：快递 免邮</li>
            <li class="list-group-item list-group-item-info">运险费：确认收货前按原价90%退款</li>
            <li class="list-group-item list-group-item-danger">配送时间：预计一周到达</li>
            <li class="list-group-item list-group-item-warning">买家留言：<input type="text" placeholder="对本次交易的说明"></li>

        </ul>
    </div>
    <div id="order-fot">
        <span>合计：</span><span id="order-cash">￥650</span>
        <input type="submit"  class="sub" value="提交订单">
    </div>
</form>

</body>
</html>