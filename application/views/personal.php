<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>My Personal</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/personal.css"/>
	
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
    <div id="banner">
        <div id="per-left">
            <img src="assets/img/person2.png" alt="..." class="img-thumbnail center-block">
        </div>
        <div id="per-right">
            <form id="per-form" action="">
                <div>
                    <label class="per-name">nickname: </br><span>xxx</span></label>

                </div>
                <div>
                    <label for="em" class="per-name">Email:</label></br>
                    <input type="email" id="emd" placeholder="Email">
                </div>
                <div>
                    <label for="pwd" class="per-name">Password:</label></br>
                    <input type="password"  id="pwd" placeholder="Password">
                </div>
                <div>
                    <label for="tel" class="per-name">Telephone:</label></br>
                    <input type="text"  id="tel" placeholder="telephone">
                </div>
                <div class="">
                        <button type="submit" class="btn btn-default">reset</button>
                </div>
            </form>
            </div>
    </div>
    <div id="list">
        <div class="arrow">
            <span id="prev">&lt;</span>
        </div>
        <div id="container">
                 <a href="users/confirm/1" >
                     <div class="list-sub">
                         <div class="c-left">
                             <img src="assets/uploads/products/womens1.jpg" alt="..." class="list-img " >
                         </div>
                         <div class="c-right">
                             <h2>历史详情</h2>
                             <h3>name:111</h3>
                             <strong>price：$380</strong>
                             <p>addr:河北</p>
                             <input type="text" value="<??>" style=" visibility: hidden">
                         </div>
                     </div>
                 </a>
                 <!--<a href="">
                     <div class="list-sub">
                         <div class="c-left">
                             <img src="assets/uploads/products/womens2.jpg" alt="..." class="img-thumbnail list-img img-responsive" >
                         </div>
                         <div class="c-right">
                             <h2>历史详情</h2>
                             <h3>name:222</h3>
                             <strong>price：$380</strong>
                             <p>addr:河北</p>

                         </div>
                     </div>
                 </a>
                 <a href="" >
                     <div class="list-sub">
                         <div class="c-left">
                             <img src="assets/uploads/products/womens3.jpg" alt="..." class="img-thumbnail list-img img-responsive" >
                         </div>
                         <div class="c-right">
                             <h2>历史详情</h2>
                             <h3>name:333</h3>
                             <strong>price：$380</strong>
                             <p>addr:河北</p>

                         </div>
                     </div>
                 </a>
                 <a href=""  >
                     <div class="list-sub">
                         <div class="c-left">
                             <img src="assets/uploads/products/womens5.jpg" alt="..." class="img-thumbnail list-img img-responsive">
                         </div>
                         <div class="c-right">
                             <h2>历史详情</h2>
                             <h3>name:444</h3>
                             <strong>price：$380</strong>
                             <p>addr:河北</p>

                         </div>
                     </div>
                 </a>-->
         </div>

        <div class="arrow">
            <span id="next">&gt;</span>
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
    <script id="product-tpl" type="text/html">
        <a href=" " style="z-index: 4" class="show">
            <div id="list-ex" class="list-sub">
                <div class="c-left">
                    <img src="assets/uploads/products/womens1.jpg" alt="..." class="list-img " >
                </div>
                <div class="c-right">
                    <h2>历史详情</h2>
                    <h3>name:111</h3>
                    <h3>amount:1</h3>
                    <strong>price：$380</strong>
                    <p>addr:河北</p>
                </div>
            </div>
        </a>
</script>
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/personal.js"></script>
    <script src="assets/js/template.js"></script>

</body>
</html>