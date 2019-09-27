<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-220">
    <div class="header">
        <header id="lms_header">
            <!--Header top-->
            <div class="lms_header_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="lms_any_que_wrapper">
                                <a href="#">My Account</a>
                                <a href="#">Wish</a>
                                <a href="#">Checkout</a>                                    
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="logo">
                                <img src="<?php echo $url_path ?>/images/rapha.png" alt=""/>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="lms_login_wrapper">
                                <ul>
                                    <li><a href="#/" title="USD">USD 
                                            <i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#/" title="Card">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span id="#">0</span>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!--MAIN MENU-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav nava">

                        <!--MENU ITEM-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home <i class="fa fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Link 1</a>
                                </li>
                                <li>
                                    <a href="#">Link 2</a>
                                </li>
                                <li>
                                    <a href="#">Link 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Product <i class="fa fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Link 1</a>
                                </li>
                                <li>
                                    <a href="#">Link 2</a>
                                </li>
                                <li>
                                    <a href="#">Link 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Blog <i class="fa fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Link 1</a>
                                </li>
                                <li>
                                    <a href="#">Link 2</a>
                                </li>
                                <li>
                                    <a href="#">Link 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Page <i class="fa fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Link 1</a>
                                </li>
                                <li>
                                    <a href="#">Link 2</a>
                                </li>
                                <li>
                                    <a href="#">Link 3</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <!--/MENU ITEM-->
                    </ul>
                </div>
            </div>
            <div class="container content">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam cumque libero, neque, reprehenderit deleniti veritatis assumenda explicabo in, et debitis ducimus non similique at nulla quia vero. Nobis, praesentium inventore. </p>
            </div>
        </header>  
                    
    </div>

    
</div>

