<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-230"> 
    <!--MENU-->
    <div class="header">
        <!-- Top Contact Info -->
        <div class="row logo-top-info">
            <div class="container">
                <div class="col-md-3 logo">
                    <!-- Main Logo -->
                    <a href="#" rel="home" >
                        <img src="<?php echo $url_path ?>/images/logo.png" alt="logo" >
                    </a>
                    <h1 class="site-title hidden">
                        <a href="#" rel="home">Offshore</a>
                    </h1>
                    <p class="site-description hidden">Responsive Gas &amp; Oil Industry HTML Template</p>  
                </div>
                <div class="col-md-9 top-info-social">
                    <div class="pull-right">
                        <div class="top-widgets">
                            <div class="widget">
                                <h3>Call Us</h3>			
                                <p>1800 425 4646</p>
                            </div>
                            <div class="widget">
                                <h3>Email Us</h3>			
                                <p>info@offshoreindustry.com</p>
                            </div>
                            <div class="widget">
                                <h3>Market</h3>
                                <p>143.17<span class="forex"><i class="fa fa-caret-down" aria-hidden="true"></i> -0.17 </span></p>
                            </div>
                            <div class="widget">
                                <div class="social">                    
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>                    
                                    </ul>
                                </div>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navmenuhd">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="z-index: 1;">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!--MAIN MENU-->
                <div class="container">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nava main-menu">
                            <li class="active"><a href="#">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret cr1"></b></a>
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service<b class="caret cr1"></b></a>
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
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">New & Media</a></li>
                            <li><a href="#">Blog</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret cr1"></b></a>
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
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact</a></li>
                            <!--/MENU ITEM-->
                        </ul>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="container">
            <div class="text">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid excepturi nostrum aliquam quaerat! Dolores laudantium dignissimos neque rem doloribus totam nemo molestiae explicabo? Nesciunt quisquam eaque nam? Cupiditate, illo facere? </h3>
            </div>
        </div>
    </div>
</div>      
<script>
    $(document).ready(function () {
        $("button").click(function () {
            $("main-menu").toggle("collapse in");
        });
    });

</script>