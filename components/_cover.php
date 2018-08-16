<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."static/head.php"); ?>
    
  </head>
  <style>
    .parallax-window {
      min-height: 400px;
      background: transparent;
    }

    #lightbox{
      background-color: transparent;
      padding: 10px;
      border-bottom: 2px solid #666;
      border-right: 2px solid #666;
      }
    #lightboxDetails{
      font-size: 0.8em;
      padding-top: 0.4em;
      } 
    #lightboxCaption{ float: left; }
    #keyboardMsg{ float: right; }

    #lightbox img{ border: none; } 
    #overlay img{ border: none; }
    .pl-10 {padding-left: 5rem !important;}
  </style>
  <body>

    <?php include($prefix."static/navbar.php"); ?>

    <section class="section-main">
      <div class="container container-sm">
        <div class="heading">
          <h1>Cover</h1>
          <p class="lead mb-6">Cover which usually used for the start of the page. In the form of static image / carousel with text and image background.</p>
        </div>

        <h3>Static</h3>
        <p>Use this cover if it only to show static cover image with no carousel effect. Modify the <code>.justify-content-center</code> to set the alignment. Optionally, add <code>.cover-full</code> to make it full height (100vh).</p>
        <p>Each cover comes with optional <code>.scroll-hint</code> which mainly used for full cover. Position from the bottom is modifiably with <code>.bottom-0</code> / <code>.bottom-25</code></p>
        
        <div class="well-code">
          <xmp>
            <div class="cover" style="background: url() no-repeat center; background-size: cover;">
              <div class="container justify-content-center">
                <div class="cover-content text-center">
                  <h1 class="cover-title">Hello, world!</h1>
                  <p class="cover-text">This is a template text</p>
                  <a class="btn btn-primary" href="#" role="button" target="_top">Learn more</a>
                </div>
              </div>
              <a href="#" class="scroll-hint">
                <img src="<?php echo $prefix;?>assets/img/common/arrow_down.png" alt="Arrow down hint"/>
              </a>
            </div>
          </xmp>
        </div>

        <div class="well-code">
          <span>
            <span class="nt">&lt;div</span>
            <span class="na">class=</span>
            <span class="n">"cover"</span>
            <span class="na">style=</span>
            <span class="n">"background: url() no-repeat center; background-size: cover;"</span>
            <span class="nt">&gt;</span>
          </span>
          <span class="pl-3 d-block">
            <span class="nt">&lt;div</span>
            <span class="na">class=</span>
            <span class="n">"container justify-content-center"</span>
            <span class="nt">&gt;</span>
          </span>
          <span class="pl-5 d-block">
            <span class="nt">&lt;div</span>
            <span class="na">class=</span>
            <span class="n">"cover-content text-center"</span>
            <span class="nt">&gt;</span>
          </span>
          <span class="pl-10 d-block">
            <span class="nt">&lt;div</span>
            <span class="na">class=</span>
            <span class="n">"cover-title animated fadeInUp delayp1"</span>
            <span class="nt">&gt;</span>
            <span>Hello, world!</span>
            <span class="nt">&lt;/div&gt;</span>
          </span>
          <span class="pl-10 d-block">
            <span class="nt">&lt;p</span>
            <span class="na">class=</span>
            <span class="n">"cover-text animated fadeInUp delayp2"</span>
            <span class="nt">&gt;</span>
            <span>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</span>
            <span class="nt">&lt;/p&gt;</span>
          </span>
          <span class="pl-10 d-block">
            <span class="nt">&lt;a</span>
            <span class="na">href=</span>
            <span class="n">"#"</span>
            <span class="nt">&gt;</span>
            <span>Go somewhere</span>
            <span class="nt">&lt;i</span>
            <span class="na">href=</span>
            <span class="n">"fal fa-angle-right"</span>
            <span class="nt">/&gt;</span>
            <span class="nt">&lt;/a&gt;</span>
          </span>
          <span class="pl-5 d-block">
            <span class="nt">&lt;/div&gt;</span>
          </span>
          <span class="pl-3 d-block">
            <span class="nt">&lt;/div&gt;</span>
          </span>
          <span class="d-block">
            <span class="nt">&lt;/div&gt;</span>
          </span>
        </div>
        <p>&nbsp;</p>
      </div>


      <!--Start: Cover - Static-->
      <div class="cover" style="background: url(<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-1.jpg) no-repeat center; background-size: cover;">
        <div class="container justify-content-center">
          <div class="cover-content text-center">
            <h1 class="cover-title animated fadeInUp delayp1">Hello, world!</h1>
            <p class="cover-text animated fadeInUp delayp2">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <a class="btn btn-primary reverse animated fadeInUp delayp3" href="#" role="button" target="_top">Learn more</a>
          </div>
        </div>
        <a href="#" class="scroll-hint bottom-0 animated fadeInDown delayp4">
          <img src="<?php echo $prefix;?>assets/img/common/arrow_down.png" alt="Arrow down hint"/>
        </a>
      </div>
      <!--End: Cover - Static-->

      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>

      <div class="container container-sm">
        <h3>Carousel</h3>
        <p>Use this cover if it's meant to show cover with carousel using background image and text on top of it. Require to add <code>.cover-carousel</code> to make the layout work. Notes: <code>.carousel-control-prev</code> &amp; <code>.carousel-control-next</code> is hidden in this instance.</p>
        <p>&nbsp;</p>
      </div>

      <!--Start: Cover - Carousel-->
      <div class="cover cover-carousel">
        <div id="carouselCover" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselCover" data-slide-to="0" class="active"></li>
            <li data-target="#carouselCover" data-slide-to="1"></li>
            <li data-target="#carouselCover" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)) ,url(<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-2.jpg) no-repeat center; background-size: cover;">
              <div class="container">
                <div class="cover-content">
                  <h2 class="cover-title animated fadeInUp delayp1">Hello, world!</h2>
                  <p class="cover-text animated fadeInUp delayp2">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="background: url(<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-3.jpg) no-repeat center; background-size: cover;">
              <div class="container">
                <div class="cover-content">
                  <h2 class="cover-title">Hello, world!</h2>
                  <p class="cover-text">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="background: url(<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-2.jpg) no-repeat center; background-size: cover;">
              <div class="container">
                <div class="cover-content">
                  <h2 class="cover-title">Hello, world!</h2>
                  <p class="cover-text">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev hidden" href="#carouselCover" role="button" data-slide="prev">
            <i class="fal fa-angle-left" data-fa-transform="grow-20"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next hidden" href="#carouselCover" role="button" data-slide="next">
            <i class="fal fa-angle-right" data-fa-transform="grow-20"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <a href="#" class="scroll-hint bottom-25 animated fadeInDown delayp4">
          <img src="<?php echo $prefix;?>assets/img/common/arrow_down.png" alt="Arrow down hint"/>
        </a>
      </div>
      <!--End: Cover - Carousel-->

      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>

      <div class="container container-sm">
        <h3>Carousel (Image Only)</h3>
        <p>Use this for image only carousel. There's no need to put <code>.cover</code> for this purpose. Make sure the height of the image is all the same.</p>
        <p>&nbsp;</p>
      </div>

      <!--Start: Carousel (Image Only)-->
      <div id="carouselImg" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselImg" data-slide-to="0" class="active"></li>
          <li data-target="#carouselImg" data-slide-to="1"></li>
          <li data-target="#carouselImg" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-1.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselImg" role="button" data-slide="prev">
          <i class="fal fa-angle-left" data-fa-transform="grow-20"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselImg" role="button" data-slide="next">
          <i class="fal fa-angle-right" data-fa-transform="grow-20"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--End: Carousel (Image Only)-->


      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>

      <div class="container container-sm">
        <h3>Paralax</h3>
        <p>Use paralax with class <code>.parallax-window</code> <code>.cover</code> for this purpose. Make sure the height of the image is all the same.</p>
        <p>&nbsp;</p>
      </div>

      <div class="parallax-window" data-image-src="../assets/img/common/bg_rectangle-light-1.jpg">
        <div class="cover">
          <div class="container justify-content-center">
            <div class="cover-content text-center">
              <h1 class="cover-title animated fadeInUp delayp1">Hello, world!</h1>
            </div>
          </div>
        </div>
      </div>

      
    </section>

    <?php //include($prefix."static/footer.php"); ?>
    <?php include($prefix."static/script.php"); ?>

    <script>
    </script>

  </body>
</html>
