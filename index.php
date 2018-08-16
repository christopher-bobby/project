<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="";?>
    <?php include($prefix."static/head.php"); ?>
    <style>
      .shop-cover-img {
        height: 300px;
        margin-bottom: 20px;
        font-family: 'Helvetica Neue';
        position: relative;
        display: flex;
        justify-content: center;
      }
      .shop-cover-img span {
        position: absolute;
        display: inline-block;
        height: 30px;
        line-height: 30px;
        margin-top: -15px;
        top: 50%;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        font-size: 13px;
        letter-spacing: 1px;
        border-top: 2px solid #fff;
        border-bottom: 2px solid #fff;
        padding-left: 0;
        padding-right: 0;
      }

    </style>
  </head>
  <body>

    <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div> 

    <?php include($prefix."static/navbar.php"); ?>

    <!--Cover: Static-->
    <div class="cover cover-full" style="background: url(<?php echo $prefix;?>assets/img/common/bg_rectangle-light-1.jpg) no-repeat center; background-size: cover;">
        <div class="container justify-content-center">
          <div class="cover-content text-center">
            <h1 class="cover-title animated fadeInUp delayp1">Hello, world!</h1>
            <p class="cover-text animated fadeInUp delayp2">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          </div>
        </div>
        <a href="#" class="scroll-hint bottom-0 animated fadeInDown delayp4">
          <img src="<?php echo $prefix;?>assets/img/common/arrow_down.png" alt="Arrow down hint"/>
        </a>
    </div>

    <section class="py-main">
      <div class="container mt-4">
        <div class="shop-cover-index" style="width: 100%">
          <div class="row">
            <div class="col-md-8 col-lg-6">
              <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-4.jpg) no-repeat center; background-size: cover;">
                <span>Dining Chair</span>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-1.jpg) no-repeat center; background-size: cover;">
                <span>Lounge Chair</span>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-2.jpg) no-repeat center; background-size: cover;">
                <span>Bar Stool</span>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-3.jpg) no-repeat center; background-size: cover;">
                <span>Lounge Chair</span>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-4.jpg) no-repeat center; background-size: cover;">
                <span>Bar Stool</span>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-5.jpg) no-repeat center; background-size: cover;">
                <span>Lounge Chair</span>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-1.jpg) no-repeat center; background-size: cover;">
                <span>Bar Stool</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </body>

    <?php //include($prefix."static/footer.php"); ?>
    <?php include($prefix."static/script.php"); ?>

    <script>
      // Navbar active state
      $('#navHome').addClass('active');

      // Animation on load
      document.addEventListener("DOMContentLoaded", function(event) {
        $(".loader").fadeOut('slow');
        $(".loader-wrapper").fadeOut("slow");
      //  $(".anim-1").addClass("animated fadeInLeft delayp10");
       // $(".anim-2").addClass("animated fadeInUp delayp12");
        //$(".anim-3").addClass("animated fadeInUp delayp14");  
      });

    </script>

  </body>
</html>
