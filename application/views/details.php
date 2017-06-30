<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>详情</title>
	<base href="<?php echo site_url(); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/details.css">
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
	<div class="wrapper">
		<div class="details_container">
			<div class="details_img_container">
	  			<img src="assets/img/Leslie.jpg" alt="..." class="details_img">
	  			<div class="big_details_img"></div>
  			</div>
			<div class="details_content">
				<span class="details_content_title">这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面这是一个页面页面页面</span></br></br>
				<span class="details_content_price">这是单价</span></br></br>
				<a href="#">-</a>
				<input type="text" name="">
				<a href="#">+</a></br></br>
				<div href="#" class="details_content_pay">立即购买</div>
				<div href="#" class="details_content_add">加入购物车</div>
			</div>
		</div>
		<div class="details_setimate">
			<div class="details_setimate_title"><div></div><span>累计评论(9999)</span></div>
  			<div class="setimate_container">
  				<div class="setimate_inf">
  					<div class="setimate_head">
  						<img src="assets/img/Leslie.jpg" alt="...">
  					</div>
  					<div class="setimate_user">Leslie</div>
  				</div>
  				<div class="setimate_content">
  					<div class="setimate">Leslie真是帅炸天际，以我爱豆其实今天不写完绝对不睡觉,我的妈妈，不该立flag为啥布局老是变弹性盒模型又不行，马丹</div>
  					<span class="setimate_time">购买时间:1956-09-12</span>
  				</div>
  			</div>
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