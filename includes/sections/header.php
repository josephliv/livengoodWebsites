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
          <?= $main_title; ?>
        </h1>
        <hr>
        <div class="cta-button">
        <script type="text/javascript" defer 
        src="<?php if($page === "/promo" || $page === "/promo/") {
          echo "https://form.123formbuilder.com/embed/6549798.js?type=lightbox";
        } else echo "https://form.123formbuilder.com/embed/6306291.js?type=lightbox"; ?>" 
        data-role="form" data-default-width="650px" data-embed-type="lightbox-text-link" data-embed-text-link="Contact us"></script>
        </div>
      </div>
    </div>
  </div>
</div>