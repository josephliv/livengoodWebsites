<!-- Conditional for homepage background video -->

<div class="main-hero <?= $hero_main_bg; ?>">
  <?php include 'nav.php'; ?>
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
         <div class="cyber-line mb-3"></div>
        <h2><?= $intro; ?></h2>
       
        <div class="cta-button">
          <a target="_blank" href="https://calendly.com/livengoodwebsites/strategy-session">Let's Talk Strategy</a>
        </div>
      </div>
    </div>
    
  </div>
</div>