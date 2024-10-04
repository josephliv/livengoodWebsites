<!-- Conditional for homepage background video -->
<?php include 'nav.php'; ?>
<div class="main-hero">
  <div class="hero-content">
    <!-- Hero Content -->
    <div class="hero-content-inner">
      <div>
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
        <div class="cta-button"><a target="_blank" href="https://calendly.com/joesdigitalservices/website-strategy">Book A strategy Session</a></div>
      </div>
      <div class="d-none d-lg-block hero-img <?= $hero_bg_class; ?>">
          
      </div>
    </div>
  </div>
</div>