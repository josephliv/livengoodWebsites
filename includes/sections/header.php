<!-- Conditional for homepage background video -->
<div class="header-bg">
  <?php if ($page == "/") : ?>
    <div class="video-background-wrapper">
      <video playsinline="playsinline" muted="muted" loop="loop" autoplay id="backgroundVideo">
        <source src="/assets/video/pexels-tea-oebel.mp4" type="video/mp4">
      </video>
    </div>
  <?php else : ?>
    <div class="img-background <?= $hero_bg_class; ?>"></div>
  <?php endif; ?>

  <div class="video-content">

    <header class="container">
      <div class="top-bar gradient d-none d-md-flex">
        <div class="phone">
          <a href="tel:17042759705">
            <img width="30" src="/assets/imgs/icons/png-files/phone.png" alt="Phone: ">&nbsp; 1 (704) 275-9705</a>
        </div>
        <div class="email">
          <a href="mailto:joe@joes.business">
            <img width="30" src="/assets/imgs/icons/png-files/envelope.png" alt="Email: ">&nbsp;
            joe@joes.business</a>
        </div>
        <!-- Social Links -->
        <?= $social_links; ?>
      </div>
      <div class="logo-nav-container">
        <div class="logo-container">
          <a href="/">
            <img src="/assets/imgs/logo-blue.webp" alt="Livengood Websites">
          </a>
        </div>
        <nav class="nav-menu">
          <ul>
            <li><a class="<?php if ($page == '/') echo 'active-nav'; ?>" href="/" href="/">Home</a></li>
            <li><a class="<?php if ($page == '/meet-joe' || $page == '/meet-joe/') echo 'active-nav'; ?>" href="/meet-joe">meet joe</a></li>
            <li class="dropdown">
              <a style="cursor: default;" href="#">Services &#x2193;</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="<?php if ($page == '/online-food-ordering-app-development' || $page == '/online-food-ordering-app-development/') echo 'active-nav'; ?>" href="/online-food-ordering-app-development/">Food App</a>
                </li>
                <li>
                  <a class="<?php if ($page == '/business-boosters' || $page == '/business-boosters/') echo 'active-nav'; ?>" href="/business-boosters">Business Boosters</a>
                </li>
                <li>
                  <a class="<?php if ($page == '/website-maintenance-services' || $page == '/website-maintenance-services/') echo 'active-nav'; ?>" href="/website-maintenance-services">maintenance</a>
                </li>
                <li>
                  <a class="<?php if ($page == '/web-design' || $page == '/web-design/') echo 'active-nav'; ?>" href="/web-design">web design</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="<?php if ($page == '/portfolio' || $page == '/portfolio/') echo 'active-nav'; ?>" href="/portfolio">portfolio</a>
            </li>
            <li>
              <a class="<?php if ($page == '/blog' || $page == '/blog/') echo 'active-nav'; ?>" href="/blog">blog</a>
            </li>
            <li>
              <a class="<?php if ($page == '/contact' || $page == '/contact/') echo 'active-nav'; ?>" href="/contact">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Mobile Menu Button -->
    <button class="mobile-menu-button">&#9776;</button>

    <!-- Mobile Menu Sidebar -->
    <div class="mobile-menu-sidebar">
      <div class="sidebar-header">
        <img src="/assets/imgs/Livengood-p2.webp" alt="Livengood Websites">
      </div>
      <hr>
      <nav class="sidebar-menu">
        <ul>
          <li><a class="<?php if ($page == '/') echo 'active-nav'; ?>" href="/" href="/">Home</a></li>
          <li><a class="<?php if ($page == '/meet-joe' || $page == '/meet-joe/') echo 'active-nav'; ?>" href="/meet-joe">meet joe </a></li>
          <li>
            <a class="<?php if ($page == '/online-food-ordering-app-development' || $page == '/online-food-ordering-app-development/') echo 'active-nav'; ?>" href="/online-food-ordering-app-development/">Food App</a>
          </li>
          <li>
            <a class="<?php if ($page == '/business-boosters' || $page == '/business-boosters/') echo 'active-nav'; ?>" href="/business-boosters">Business Boosters</a>
          </li>
          <li>
            <a class="<?php if ($page == '/website-maintenance-services' || $page == '/website-maintenance-services/') echo 'active-nav'; ?>" href="/website-maintenance-services">maintenance</a>
          </li>
          <li>
            <a class="<?php if ($page == '/web-design' || $page == '/web-design/') echo 'active-nav'; ?>" href="/web-design">web design</a>
          </li>
          <li>
            <a class="<?php if ($page == '/portfolio' || $page == '/portfolio/') echo 'active-nav'; ?>" href="/portfolio">portfolio</a>
          </li>
          <li>
            <a class="<?php if ($page == '/blog' || $page == '/blog/') echo 'active-nav'; ?>" href="/blog">blog</a>
          </li>
          <li>
            <a class="<?php if ($page == '/contact' || $page == '/contact/') echo 'active-nav'; ?>" href="/contact">Contact</a>
          </li>
        </ul>

      </nav>
    </div>

    <!-- Hero Content -->
    <div class="hero-content">
      <div class="site-title pt-4">
        <h1 class="<?php if ($page == '/') echo 'text-light'; ?>">
          <?= $main_title; ?>
        </h1>
        <a class="cta-button" <?= $externalLinks; ?> href="https://calendly.com/livengoodwebsites/30min">Book a Call</a>
      </div>
    </div>
  </div>
</div>