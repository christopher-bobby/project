<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."static/head.php"); ?>
<style>


</style>
  </head>
  <body>

    <?php include($prefix."static/navbar.php"); ?>

      <h2 class="animates tracking-in-contract-bck text-center">TRACKING IN CONTRACT BACK</h2>
      <h2 class="animates text-shadow-pop-br">TEXT SHADOW POP BR</h2>
      <h2 class="animates text-shadow-pop-right">TEXT SHADOW POP BR</h2>
      <h2 class="animates focus-in-expand text-center">FOCUS IN EXPAND</h2>
      <h2 class="animates focus-in-contract text-center">FOCUS IN CONTRACT</h2>

      <h1>IMAGES</h1>
      <div class="img-width-container" style="position: relative; overflow: hidden;">
        <div style="width: 100%; position: absolute; height: 100%; left: 0px;">
          <img src="<?php echo $prefix;?>assets/img/sample/cover-product-1.jpg" class="img-fluid" style=""/>
        </div>
      </div>


     <h1> Animation that needs JS, make sure u import animate.js </h1> 
      <div class="text" style="margin-top: 2rem;">
        <h2>
          <span class="word wisteria">Word no 1.</span>
          <span class="word belize">Word no 2.</span>
          <span class="word pomegranate">Word no 3.</span>
          <span class="word green">Go on.</span>
          <span class="word midnight">would go forever.</span>
          <span class="word wisteria">but it's absolute position</span>
          <span class="word belize">stop it</span>
          <span class="word blue">I told u to stop !</span>
        </h2>
      </div>


    <?php //include($prefix."static/footer.php"); ?>
    <?php include($prefix."static/script.php"); ?>
    <script>
      $('.img-width-container').addClass('img-width-container-full');
    </script>

  </body>
</html>
