<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="./css/swiper.min.css">  

  <!-- Demo styles -->
  <style>
    body {
      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }
    .profile {
        border-radius: 50%;
        background-clip: padding-box;
        background: #fff;
        box-shadow: 0 0 2px #d5d5d5;
        border: 1px solid #e8e8e8;
        padding: 2px;
        margin: 0 auto;
    }

    .people {
        margin-top: 10px;
        font-size: 13px;
        font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
        font-weight: 400;
    }
    .name {
        display: inline-block;
        margin-bottom: 4px;
        color: #6091ba;
    }
    .title {
        color: #999;
        font-size: 12px;
        display: inline-block;
    }

    .quote-container{
        margin: 0 0 20px;
    }
    .quote-container p{
        font-size: 15px;
        font-weight: 300;
        font-family: open sans,arial,sans-serif;
        line-height: 1.5;
    }
    .quote-container i{
        margin-right: 10px;
        font-size: 24px;
        color: #6091ba;
    }
    .fa {
      font-size: 15px !important;
    }
  </style>
</head>
<body>
  <!-- Swiper -->
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
  </div>

  <!-- Swiper JS -->
  <script src="./js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</body>
</html>