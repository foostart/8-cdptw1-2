<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/testimonials.less', 'css/testimonials.css');
        ?>
        <link href="css/testimonials.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="container">
                <div class="testimonials">
                    <div class="carousel-controls">
                        <a class="prev" href="#testimonials-carousel" data-slide="prev" id="yui_3_17_2_1_1471867990995_91"><i class="fa fa-caret-left" id="yui_3_17_2_1_1471867990995_90"></i></a>
                        <a class="next" href="#testimonials-carousel" data-slide="next" id="yui_3_17_2_1_1471867990995_97"><i class="fa fa-caret-right" id="yui_3_17_2_1_1471867990995_96"></i></a>
                    </div><!--//carousel-controls-->

                    <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                        <div class="carousel-inner">
                            <div class="item active row">
                                <div class="profile-container col-md-2 col-sm-12 col-xs-12 col-md-push-1">
                                    <img class="img-responsive profile " src="//themes.3rdwavemedia.com/moodle/gourmet/1/pluginfile.php/1/theme_gourmet/testimonial1image/1455368688/profile-3.png" alt="Marissa Spencer">
                                    <p class="people">
                                        <span class="name">Marissa Spencer</span><br>
                                        <span class="title"> Curabitur commodo</span>
                                    </p>  
                                </div>
                                <div class="quote-container col-md-8 col-sm-12 col-xs-12 col-md-push-1">                                
                                    <p><i class="fa fa-quote-left"></i>I’m very happy interdum eget ipsum. Nunc pulvinar ut nulla eget sollicitudin. In hac habitasse platea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.</p>
                                </div><!--//quote-container-->                                    
                            </div><!--//item-->
                            <div class="item row">
                                <div class="profile-container col-md-2 col-sm-12 col-xs-12 col-md-push-1">
                                    <img class="img-responsive profile " src="//themes.3rdwavemedia.com/moodle/gourmet/1/pluginfile.php/1/theme_gourmet/testimonial2image/1455368688/profile-1.png" alt="Kate White ">
                                    <p class="people"><span class="name">Kate White </span><br>
                                        <span class="title">Gravida ultrices</span>
                                    </p>  
                                </div>
                                <div class="quote-container col-md-8 col-sm-12 col-xs-12 col-md-push-1">

                                    <p><i class="fa fa-quote-left"></i>I’m very happy interdum eget ipsum. Nunc pulvinar ut nulla eget sollicitudin. In hac habitasse platea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.</p>

                                </div><!--//quote-container-->                                    
                            </div><!--//item-->
                            <div class="item row">
                                <div class="profile-container col-md-2 col-sm-12 col-xs-12 col-md-push-1">
                                    <img class="img-responsive profile " src="//themes.3rdwavemedia.com/moodle/gourmet/1/pluginfile.php/1/theme_gourmet/testimonial3image/1455368688/profile-2.png" alt="Marco Antonio">
                                    <p class="people"><span class="name">Marco Antonio</span><br>
                                        <span class="title">Nunc pulvinar posuere</span>
                                    </p>  
                                </div>
                                <div class="quote-container col-md-8 col-sm-12 col-xs-12 col-md-push-1">

                                    <p><i class="fa fa-quote-left"></i>I’m very happy interdum eget ipsum. Nunc pulvinar ut nulla eget sollicitudin. In hac habitasse platea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.</p>

                                </div><!--//quote-container-->                                    
                            </div><!--//item-->
                            <div class="item row">
                                <div class="profile-container col-md-2 col-sm-12 col-xs-12 col-md-push-1">
                                    <img class="img-responsive profile " src="//themes.3rdwavemedia.com/moodle/gourmet/1/pluginfile.php/1/theme_gourmet/testimonial4image/1455368688/profile-4.png" alt="Sara Adams">
                                    <p class="people"><span class="name">Sara Adams</span><br>
                                        <span class="title">Integer mattis varius</span>
                                    </p>  
                                </div>
                                <div class="quote-container col-md-8 col-sm-12 col-xs-12 col-md-push-1">

                                    <p><i class="fa fa-quote-left"></i>I’m very happy interdum eget ipsum. Nunc pulvinar ut nulla eget sollicitudin. In hac habitasse platea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.</p>

                                </div><!--//quote-container-->                                    
                            </div><!--//item-->

                        </div><!--//carousel-inner-->
                    </div><!--//testimonials-carousel-->
                </div>
            </div>
    </body>

</html>