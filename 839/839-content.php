<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-839">
    <div class="container">
        <div class="Boderfull row">
            <p><strong>BLOG</strong></p>
            <div class="col-md-4 col-xs-12 col-sm-6 wrap_border">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/blog_1_1024x1024.jpg" alt="blog1-responsive">
                </div>
                <div class="font-name">
                    <h1><a href="#">Blog</a></h1>
                    <h2><a href="#">We are providing a great choice of different commodities</a></h2>
                    <h3>We can help you solve any problem because we provide only rational solutions....</h3>
                    <h4><i class="fa fa-clock-o"></i> July 11, 2016</h4>     
                </div>
                <h5><a class="btn btnshopnow"> <strong>Read More</strong></a></h5>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-6 wrap_border">
                <div class="thumbnail">
                    <img src="http://<?php echo $url_path ?>/images/blog_2_1024x1024.jpg" alt="blog2-responsive">
                </div>
                <div class="font-name">
                    <h1><a href="#">Blog</a></h1>
                    <h2><a href="#">We can satisfy customers with different claims</a></h2>            
                    <h3>So, it is natural that this sphere is one of the most popular and it is really hard to offer...</h3>
                    <h4><i class="fa fa-clock-o" ></i> July 11, 2016</h4>

                </div>
                <h5><a class="btn btnshopnow"> <strong>Read More</strong></a></h5>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-6 wrap_border">
                <div class="thumbnail">
                    <img src="http://<?php echo $url_path ?>/images/blog_3_1024x1024.jpg" alt="blog3-responsive">
                </div>
                <div class="font-name">
                    <h1><a href="#">Blog</a></h1>
                    <h2><a href="#">We can help you solve any problem because we provide only...</a></h2>
                    <h3>We are living in the epoch of great technical progress....</h3>
                    <h4><i class="fa fa-clock-o" ></i> July 11, 2016</h4>

                </div>
                <h5><a class="btn btnshopnow"> <strong>Read More</strong></a></h5>
            </div>
        </div>
    </div>
</div>


   