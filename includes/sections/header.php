<!-- Conditional for homepage background video -->
<div class="header-bg">
  <?php if ($page == "/" || $page == "/index") : ?>
    <div class="<?php if( $page === '/' || $page === '/index') echo 'video-background-wrapper'; ?>" style="background-color: #11111177;">
      <video preload="auto" playsinline="playsinline" muted="muted" loop="loop" autoplay id="backgroundVideo">
        <source src="/assets/video/home-hero.mp4" type="video/mp4">
      </video>
    </div>
  <?php else : ?>
    <div class="img-background <?= $hero_bg_class; ?>"></div>
  <?php endif; ?>

  <div class="video-content">

   <?php include 'nav.php'; ?>

    <!-- Hero Content -->
    <div class="hero-content">
      <div class="site-title pt-4">
        <h1 class="text-light">
          <?php if($page == "/pay") {
            include ('includes/sections/pay.php');
          } else {
            echo $main_title;
          }
           ?>
        </h1>
      </div>
        <hr>
        <h2 class="text-light"><?= $intro; ?></h2>
    </div>
  </div>
</div>