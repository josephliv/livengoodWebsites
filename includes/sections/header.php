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
        <h1 class="text-light" data-aos="fade-in" data-aos-duration="3000">
          <?php if($page == "/pay") {
            echo $site_title;
            include ('includes/sections/pay.php');
          } else {
            echo $main_title;
          }
           ?>
        </h1>
      </div>
        <hr>
        <h2 class="text-light" data-aos="fade-up" data-aos-duration="2000"><?= $intro; ?></h2>
    </div>
  </div>
</div>