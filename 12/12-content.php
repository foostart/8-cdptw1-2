<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<!-- Content -->
<div class="type-12">
    <div class="container start">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="profile-container col-md-2 col-sm-12 col-xs-12 col-md-push-1">
                        <img class="img-responsive profile " src="images/profile-3.png" alt="Marissa Spencer">
                        <p class="people">
                            <span class="name">Marissa Spencer</span><br>
                            <span class="title"> Curabitur commodo</span>
                        </p>  
                    </div>
                    <div class="quote-container col-md-8 col-sm-12 col-xs-12 col-md-push-1">                                
                        <p>
                            <i class="fa fa-quote-left"></i>I’m very happy interdum eget ipsum. Nunc
                            pulvinar ut nulla eget sollicitudin. In hac habitasse plat
                            ea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Int
                            eger metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.<i class="fa fa-quote-right"></i>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="profile-container col-md-2 col-sm-12 col-xs-12 col-md-push-1">
                        <img class="img-responsive profile " src="images/profile-1.png" alt="Kate White ">
                        <p class="people">
                            <span class="name">Kate White </span><br>
                            <span class="title">Gravida ultrices</span>
                        </p>  
                    </div>
                    <div class="quote-container col-md-8 col-sm-12 col-xs-12 col-md-push-1">
                        <p>
                            <i class="fa fa-quote-left"></i>I’m very happy interdum eget ipsum. 
                            Nunc pulvinar ut nulla eget sollicitudin. 
                            In hac habitasse platea dictumst. Integer mattis varius ipsum, posuere po
                            suere est porta vel. Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. 
                            Duis luctus.<i class="fa fa-quote-right"></i>
                        </p>
                    </div><!--//quote-container-->   
                </div>
                <div class="swiper-slide">
                    <div class="profile-container col-md-2 col-sm-12 col-xs-12 col-md-push-1">
                        <img class="img-responsive profile " src="images/profile-2.png" alt="Marco Antonio">
                        <p class="people">
                            <span class="name">Marco Antonio</span><br>
                            <span class="title">Nunc pulvinar posuere</span>
                        </p>  
                    </div>
                    <div class="quote-container col-md-8 col-sm-12 col-xs-12 col-md-push-1">
                        <p>
                            <i class="fa fa-quote-left"></i>I’m very happy interdum eget ipsum. 
                            Nunc pulvinar ut nulla eget sollicitudin. In hac habitasse platea dictumst. 
                            Integer mattis varius ipsum, posuere posuere est porta vel. 
                            Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.<i class="fa fa-quote-right"></i>
                        </p>
                    </div><!--//quote-container-->     
                </div>
                <div class="swiper-slide">
                    <div class="profile-container col-md-2 col-sm-12 col-xs-12 col-md-push-1">
                        <img class="img-responsive profile " src="images/profile-4.png" alt="Sara Adams">
                        <p class="people">
                            <span class="name">Sara Adams</span><br>
                            <span class="title">Integer mattis varius</span>
                        </p>  
                    </div>
                    <div class="quote-container col-md-8 col-sm-12 col-xs-12 col-md-push-1">
                        <p>
                            <i class="fa fa-quote-left"></i>I’m very happy interdum eget ipsum. Nunc pulvinar ut nulla eget sollicitudin
                            . In hac habitasse platea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. 
                            Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.<i class="fa fa-quote-right"></i>
                        </p>
                    </div><!--//quote-container-->    
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</div>