<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."static/head.php"); ?>
    <style>
      #antiModalGeneral > .modal {
        position: relative;
        display: block;
        z-index: 1029;
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

      .img-square {
        width: 20rem;
        height: 20rem;
        margin: 1rem auto;
        transition: all 0.5s ease-out;
      }

      .img-thumbnails {
        position: relative;
        width: 20rem;
        height: 20rem;
        margin: 1rem auto;
        background-color: #f3f3f3;
        border: 1px solid #d3d3d3;
        overflow: hidden;
      }

      .img-thumbnails img {
        width: 100%;
        margin-top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
      }
      
      @media(max-width: 1200px){
        .img-square,
        .img-thumbnails {
          width: 15rem;
          height: 15rem;
        }
      }

      @media(max-width: 992px){
        .img-square,
        .img-thumbnails {
          width: 13rem;
          height: 13rem;
        }
      }

      @media(max-width: 768px){
        .img-square,
        .img-thumbnails {
          width: 15rem;
          height: 15rem;
        }
      }
      @media(max-width: 567px){}
    </style>
  </head>
  <body>

    <?php include($prefix."static/navbar.php"); ?>

    <section class="section-main">
      <div class="container container-sm">
        <div class="heading">
          <h1>Gallery</h1>
          <p class="lead mb-6">Use this component to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
        </div>

        <h3>General</h3>
        <p>Avoid using <code>.modal-header</code> &amp; <code>.modal-footer</code> unless it's necessary as it will generally interfere with the flexibility of the design.</p>
        <p>The base of Antikode modal's <code>close</code> button and the size of <code>.modal-sm</code> has also been modified.</p>
        <p>&nbsp;</p>
      </div>
      
      <div class="bg-light py-main">
        <div class="container">
          <h3>img square background</h3>
          <div class="row">
            <div class="col-md-4 col-sm-6 ">
              <div class="img-square" style="background: url(<?php echo $prefix;?>assets/img/gallery/gallery-12.jpg) no-repeat center; background-size: cover;"></div>
            </div>
            <div class="col-md-4 col-sm-6 ">
              <div class="img-square" style="background: url(<?php echo $prefix;?>assets/img/gallery/gallery-1.jpg) no-repeat center; background-size: cover;"></div>
            </div>
            <div class="col-md-4 col-sm-6 ">
              <div class="img-square" style="background: url(<?php echo $prefix;?>assets/img/gallery/gallery-2.jpg) no-repeat center; background-size: cover;"></div>
            </div>
            <div class="col-md-4 col-sm-6 ">
              <div class="img-square" style="background: url(<?php echo $prefix;?>assets/img/gallery/gallery-5.jpg) no-repeat center; background-size: cover;"></div>
            </div>
            <div class="col-md-4 col-sm-6 ">
              <div class="img-square" style="background: url(<?php echo $prefix;?>assets/img/gallery/gallery-10.jpg) no-repeat center; background-size: cover;"></div>
            </div>
            <div class="col-md-4 col-sm-6 ">
              <div class="img-square" style="background: url(<?php echo $prefix;?>assets/img/gallery/gallery-11.jpg) no-repeat center; background-size: cover;"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-main">
      <div class="container container-sm">
        <div class="heading">
          <h1>Image without no crop</h1>
          <p class="lead mb-6">Use this component to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
        </div>
      </div>

      <div class="bg-light py-main">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 ">
              <div class="img-thumbnails">
                <img src="<?php echo $prefix;?>assets/img/gallery/gallery-12.jpg">
              </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
              <div class="img-thumbnails">
                <img src="<?php echo $prefix;?>assets/img/gallery/gallery-1.jpg">
              </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
              <div class="img-thumbnails">
                <img src="<?php echo $prefix;?>assets/img/gallery/gallery-2.jpg">
              </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
              <div class="img-thumbnails">
                <img src="<?php echo $prefix;?>assets/img/gallery/gallery-5.jpg">
              </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
              <div class="img-thumbnails">
                <img src="<?php echo $prefix;?>assets/img/gallery/gallery-10.jpg">
              </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
              <div class="img-thumbnails">
                <img src="<?php echo $prefix;?>assets/img/gallery/gallery-11.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <section class="py-main">
      <div class="container container-sm">
        <div class="heading">
          <h1>Img Container with ratio width being maintained</h1>
          <p class="lead mb-6">Image container with rasio width being maintained</p>
        </div>
      </div>

      <div class="py-main bg-light">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="img-container">
                <img src="<?php echo $prefix;?>assets/img/gallery/gallery-10.jpg" class="img-fluid"> <!-- hanging img sample -->
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="img-container img-fluid">
                <img src="<?php echo $prefix;?>assets/img/gallery/gallery-1.jpg" class="img-fluid"> <!--  cutting sample -->
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="img-container img-fluid">
                <img src="<?php echo $prefix;?>assets/img/gallery/gallery-1.jpg" class="img-fluid"> <!-- cutting sample -->
              </div>
            </div>  
          </div>
        </div>
      </div>
      </div>

    </section>


    <?php //include($prefix."static/footer.php"); ?>
    <?php include($prefix."static/script.php"); ?>

    <script>
      $(function() {
        $('#lighbox1').lighbox();
      });


      var cw = $('.img-container').width();
      $('.img-container').css({
          'height': cw/1 + 'px' // 1 is divider 
      });


      
    </script>

  </body>
</html>
