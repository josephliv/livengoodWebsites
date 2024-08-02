<!-- Conditional for homepage background video -->
<?php include 'nav.php'; ?>
<div class="main-hero <?= $hero_bg_class; ?>">
  <div class="hero-content">
    <!-- Hero Content -->
    <div class="hero-content-inner">
        <h1>
          <?php if ($page == "/pay") {
            echo $site_title;
            include('includes/sections/pay.php');
          } else {
            echo $main_title;
          }
          ?>
        </h1>
      <hr>
      <h2><?= $intro; ?></h2>
    </div>
  </div>
</div>