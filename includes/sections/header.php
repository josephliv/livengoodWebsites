<!-- Conditional for homepage background video -->

<div class="main-hero">
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
        
        <h2><?= $intro; ?></h2>
        <hr>
        <div class="cta-button">
          <a target="_blank" href="https://calendly.com/livengoodwebsites/strategy-session">Book A strategy Session</a>
        </div>
      </div>
      <div class="d-none d-lg-block hero-img <?= $hero_bg_class; ?>">
      <iframe id="marketing-video" src="https://www.youtube.com/embed/BhkYFjLHxfI?autoplay=1&controls=1&mute=1&playlist=BhkYFjLHxfI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <button class="<?php if ($page != '/marketing') echo 'd-none'; ?>"
    id="play-button" 
    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 10px 20px; font-size: 18px; cursor: pointer;">
    ▶ Play with Sound
  </button>
  <a href="#marketing-cost" class="<?php if ($page != '/marketing') echo 'd-none'; ?>" style="position: absolute; bottom: -50px; left: 40%; color: var(--accent)">Learn More</a>
      </div>
      
    </div>
  </div>
</div>