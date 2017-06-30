<?php 
    $loginUser = $this -> session -> userdata('loginUser');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>Myshop</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
</head>
<body>

<!-- 注册弹出层 -->
    <div class="reg_container">
        <div class="reg_bg"></div>
        <form id="msform" name="frm" action="users/do_reg" method="POST">
            <fieldset>
                <h2 class="fs-title">创建个人账户</h2>
                <h3 class="fs-subtitle">带*必填，不带*选填</h3>
                <input type="text" class="reg_username" name="username" autofocus="autofocus" placeholder="Username*" value="" />
                <div class="advice advice1">用户名不能为空</div>
                <div class="advice advice1-1">用户名已存在</div>
                <input type="password" name="pass" class="reg_pass1" placeholder="Password*"/>
                <div class="advice advice3">密码不能为空</div>
                <input type="password" class="reg_pass2" name="cpass" placeholder="Confirm Password*" " />
                <div class="advice advice4">两次密码输入不一致</div> 
                <div class="advice advice4.1">密码不能为空</div> 
                <input type="text" name="num" class="reg_num" placeholder="Phone number">
                <input type="text" name="email"  class="reg_email" placeholder="Email">
                <input type="submit" name="submit" class="submit action-button" value="注册" />
            </fieldset>
        </form>
    </div>

    <nav class="navbar navbar-default" id="nav">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-header">
                <a id="logo" class="navbar-brand" href="product/index">
                    <img src="assets/img/lee.svg" alt=""/>
                </a>
            </div>
            <div class="navbar-header">
                <a id="portrait" class="navbar-brand" href="users/personal">
                    <img src="assets/uploads/users/u1.jpg" alt=""/>
                </a>
            </div>
        </div>

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
                    <a href="product/about" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">ABOUT <span class="caret"></span></a>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" class="btn btn-default" id="search"><img src="assets/img/magnifier1.png" alt=""/></button>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="shopping-cart-btn" href="javascript:void(0)"><span id="cart"><img src="assets/img/cart.png" alt=""/></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">USER<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="reg_login"><a href="javascript:void(0)" class="login">LOGIN</a></li>
                        <li ><a href="javascript:void(0)" class="reg_reg">REGIST</a></li>
                        <li ><a class="reg_quit" href="javascript:void(0)">QUIT</a></li>
                        <li ><a href="javascript:void(0)" class="reg-personal">PERSONAL</a></li>

                        <li role="separator" class="divider"></li>
                        <li><a href="#">......</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="assets/uploads/products/slide-1.jpg" alt="...">
                <div class="carousel-caption">
                    欢迎来到Mr.Lee的小店，愿您购物愉快
                </div>
            </div>
            <div class="item">
                <img src="assets/uploads/products/slide-2.jpg" alt="...">
                <div class="carousel-caption">
                    欢迎来到Mr.Lee的小店，愿您购物愉快
                </div>
            </div>
            <div class="item">
                <img src="assets/uploads/products/slide-3.jpg" alt="...">
                <div class="carousel-caption">
                    欢迎来到Mr.Lee的小店，愿你购物愉快
                </div>
            </div>
            <div class="item">
                <img src="assets/uploads/products/slide-4.jpg" alt="...">
                <div class="carousel-caption">
                    欢迎来到Mr.Lee的小店，愿您购物愉快
                </div>
            </div>
            <div class="item">
                <img src="assets/uploads/products/slide-5.jpg" alt="...">
                <div class="carousel-caption">
                    欢迎来到Mr.Lee的小店，愿您购物愉快
                </div>
            </div>
        </div>

        Controls
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left fa fa-arrow-circle-left fa-4x" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right fa fa-arrow-circle-right fa-4x" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="product-list">
        <!-- <img class="background-img" src="assets/img/background1.jpg" alt="加载中..."/> -->
        <div id="product-nav" class="clearfix">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="javascript:" data-hit="1">Best seller for men</a></li>
                <li role="presentation"><a href="javascript:" data-hit="2">Best seller for women</a></li>
                <li role="presentation"><a href="javascript:" data-hit="3">Best seller for children</a></li>
            </ul>
        </div>
        <div class="row product-list">
            <div class="loading"><img src="assets/img/loading.png" alt="加载中"/></div>
        </div>
    </div>
    <div class="loadmore">
        <img src="assets/img/loadmore.png" alt="">
    </div>
    <div id="advertisement">
        <div class="advertisement-content">
            <div class="advertisement-brand">
                <h1>“我们不追随潮流，我们引领潮流”</h1>
                <sapn>Mr.Lee（ 李永健）</sapn>
                <p><a class="advertisement-btn" href="">Click here to catch more about Lee</a>!</p>
            </div>
        </div>
       <div class="advertisement-content">
           <div class="advertisement-brand">
               <h1>“我们不做代码的搬运工，我们争做勤劳的Pioneer”</h1>
               <sapn>Mr.Lee（ 李永健）</sapn>
               <p><a class="advertisement-btn" href="">Click here to catch more about Lee</a>!</p>
           </div>
       </div>
       <div class="advertisement-content">
           <div class="advertisement-brand">
               <h1>“Do more，no "BB"!”</h1>
               <sapn>Mr.Lee（ 李永健）</sapn>
               <p><a class="advertisement-btn" href="">Click here to catch more about Lee</a>!</p>
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
    <!-- 登录 -->
    <div class="login_dialog" >
    <div class="login_dialog_mask"></div>
    <div class="login_dialog_container">
        <div class="login_dialog_titlt">Myshop<img class="login_dialog_close" src="assets/img/close1.png"></div>
        <form class="login_dialog_content" name="login" action="">
            <input type="text" name="name" class="login_username" placeholder="username">
            <div class="login_advice2">用户名不存在</div>
            <div class="login_advice3">用户名不能为空</div>
            <input type="password" name="pass" placeholder="password" class="login_pass"></br>
            <div class="login_advice4">密码不能为空</div>
            <div class="login_advice">用户名与密码不匹配</div>
            <input type="button" name="login_user" class="login_dialog_btn" value="登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录">
        </form>
        </div>
    </div>
</div>
    <script id="product-tpl" type="text/html">
        <div class="col-sm-6 col-md-4 product-item">
            <div class="thumbnail product-info">
                <img src="{{img}}" alt="...">
                <div class="caption">
                    <h3 class="product-name">{{name}}</h3>
                    <p class="product-price">${{price}}</p>
                    <input type="text" class="quantity" value="1">
                    <p><a href="javascript:" class="btn btn-primary add-cart">ADD</a> <a href="product/detail/{{id}}" class="btn btn-default" role="button">DETAILS</a>
                    </p>
                </div>
            </div>
        </div>
        <a href="product/cart" style="visibility: hidden;"><span class="shopping-cart-btn-rel" >购物车</span></a>
        <a href="users/personal" style="visibility: hidden;"><span class="index-personal-rel" >个人中心</span></a>
        
    </script>
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>
