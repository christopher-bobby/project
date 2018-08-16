<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."static/head.php"); ?>
    
  </head>
  <body>

    <?php include($prefix."static/navbar.php"); ?>

    <section class="section-main">
      <div class="container container-sm">
        <div class="heading">
          <h1>Navbar</h1>
          <p class="lead mb-6">Cover which usually used for the start of the page. In the form of static image / carousel with text and image background.</p>
        </div>

        <h3>Basic</h3>
        <p>Use this <code>.navbar-basic</code> for Bootstrap 4 basic navbar view for both on mobile &amp; desktop version.</p>
        <p><code>.navbar-collapse</code> has been modified in order for it to have style on its own rather than being a part of existing <code>.navbar</code>.</p>
        <div class="d-block d-md-none">
          <span class="badge badge-pill badge-warning">Mobile Only</span>
          <p>On mobile, change the order of the logo / navbar toggler using <code>.order-first</code> &amp; <code>.order-last</code>.</p>
        </div>
        <p>&nbsp;</p>
      </div>

      <div class="container">
        <small class="d-block text-muted mb-2">Navbar Basic w/ Standard Layout</small>
      </div>

      <!--START: Navbar Basic A-->
      <nav class="navbar navbar-basic navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="<?php echo $prefix;?>index.php">
            <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarBasicA" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarBasicA">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--END: Navbar Basic A-->

      <p>&nbsp;</p><p>&nbsp;</p>

      <div class="container">
        <div class="d-block d-md-none">
          <span class="badge badge-pill badge-warning">Mobile Only</span>
          <p>On mobile, for centered logo, change the order of the <code>.navbar-toggler</code> with class <code>.navbar-toggler-absolute.left</code> or .navbar-toggler-absolute.right</code>, but then you must position the top manually on the CSS file.</p>
        </div>
        <small class="d-block text-muted mb-2">Navbar Basic w/ Centered Content</small>
      </div>

      <!--START: Navbar Basic B-->
      <nav class="navbar navbar-basic navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <!-- <div class="navbar-header"> -->
            <a class="navbar-brand navbar-brand-center" href="<?php echo $prefix;?>index.php">
              <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" alt="Logo">
            </a>
            <button class="navbar-toggler navbar-toggler-absolute left" type="button" data-toggle="collapse" data-target="#navbarBasicB" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <!-- </div> -->

          <div class="collapse navbar-collapse justify-content-center" id="navbarBasicB">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--END: Navbar Basic B-->

      <p>&nbsp;</p><p>&nbsp;</p>

      <div class="container">
        <div class="d-block d-md-none">
          <span class="badge badge-pill badge-warning">Mobile Only</span>
          <p>On mobile, for centered logo, change the order of the <code>.navbar-toggler</code> with class <code>.navbar-toggler-absolute.left</code> or .navbar-toggler-absolute.right</code>, but then you must position the top manually on the CSS file.</p>
        </div>
        <small class="d-block text-muted mb-2">Navbar Basic w/ two layers</small>
      </div>


      <!--START: Navbar Basic C-->
      <nav class="navbar navbar-basic navbar-expand-md navbar-light">
        <div class="container">
          <!-- <div class="navbar-header"> -->
            <a class="navbar-brand navbar-brand-center" href="<?php echo $prefix;?>index.php">
              <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-dark.svg" alt="Logo">
            </a>
            <button class="navbar-toggler navbar-toggler-absolute right" type="button" data-toggle="collapse" data-target="#navbarBasicC" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <!-- </div> -->

          <div class="collapse navbar-collapse justify-content-center" id="navbarBasicC">
            <ul class="navbar-nav" style="top: 3rem; position: relative;">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--END: Navbar Basic C-->

    </section>

    <?php //include($prefix."static/footer.php"); ?>
    <?php include($prefix."static/script.php"); ?>

    <script>
      window.FontAwesomeConfig.searchPseudoElements = true;
    </script>

  </body>
</html>
