<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-839">
    <div class="container boderfull">
        <p><strong>BLOG</strong></p>
        <div class="card-group">
            <div class="card">
                <div class="thumbnail">
                  <img class="card-img-top" src="http://<?php echo $url_path ?>/images/blog_1_1024x1024.jpg" alt="blog1-responsive">  
                </div>  
                
                <div class="card-body">
                    <h3 class="card-title"><a href="#">Blog</a></h3>
                    <h4><a href="#">We are providing a great choice of different commodities</a></h4>
                    <p class="card-text">We can help you solve any problem because we provide only rational solutions....</p>
                    <h5><i class="fa fa-clock-o"></i> July 11, 2016</h5>   
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="card">
                <div class="thumbnail">
                  <img class="card-img-top" src="http://<?php echo $url_path ?>/images/blog_1_1024x1024.jpg" alt="blog1-responsive">  
                </div>
                <div class="card-body">
                    <h3 class="card-title"><a href="#">Blog</a></h3>
                    <h4><a href="#">We are providing a great choice of different commodities</a></h4>
                    <p class="card-text">We can help you solve any problem because we provide only rational solutions....</p>
                    <h5><i class="fa fa-clock-o"></i> July 11, 2016</h5>   
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="card">
                <div class="thumbnail">
                  <img class="card-img-top" src="http://<?php echo $url_path ?>/images/blog_1_1024x1024.jpg" alt="blog1-responsive">  
                </div>
                <div class="card-body">
                    <h3 class="card-title"><a href="#">Blog</a></h3>
                    <h4><a href="#">We are providing a great choice of different commodities</a></h4>
                    <p class="card-text">We can help you solve any problem because we provide only rational solutions....</p>
                    <h5><i class="fa fa-clock-o"></i> July 11, 2016</h5>   
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>      
    </div>
</div>


   