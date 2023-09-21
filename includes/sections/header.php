
  <div class="top-bar gradient d-none d-md-flex">
    <div class="phone">
      <a href="tel:13369411203">
        <img src="/assets/imgs/icons/png-files/phone.png" alt="Phone: ">&nbsp; 1 (336) 941-1203</a>
    </div>
    <div class="email">
      <a href="mailto:joe@joes.business">
        <img src="/assets/imgs/icons/png-files/envelope.png" alt="Email: ">&nbsp;
        joe@joes.business</a>
    </div>
    <!-- Social Links -->
    <?= $social_links; ?>
  </div>
   <!-- Conditional for homepage background video -->
  <div class="header-bg">
   <?php if ($page == "/"): ?>
    <div class="video-background-wrapper">
        <video playsinline="playsinline" muted="muted" loop="loop" id="backgroundVideo">
            <source src="/assets/video/matrix_-_5581.mp4" type="video/mp4">
        </video>
    </div>
    <?php else: ?>
        <div class="image-background-wrapper"></div>
    <?php endif; ?>

        <div class="video-content">
      <header class="hero container">
        <div class="logo-container">
          <a href="/">
            <img src="/assets/imgs/logo-blue.webp" alt="Livengood Websites">
          </a>
        </div>
        <nav class="nav-menu">
          <ul>
            <li><a class="<?php if ($page == '/') echo 'active-nav'; ?>" href="/" href="/">Home</a></li>
            <li><a class="<?php if ($page == '/about' || $page == '/about/') echo 'active-nav'; ?>" href="/about">About </a></li>
            <li class="dropdown">

              <a class="<?php if ($page == '/services' || $page == '/services/') echo 'active-nav'; ?>" href="/services">Services &#x2193;</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="<?php if ($page == '/food-app' || $page == '/food-app/') echo 'active-nav'; ?>" href="/food-app/">Food App</a>
                </li>
                <li>
                  <a class="<?php if ($page == '/business-boosters' || $page == '/business-boosters/') echo 'active-nav'; ?>" href="/business-boosters">Business Boosters</a>
                </li>
                <li>
                  <a class="<?php if ($page == '/site-care' || $page == '/site-care/') echo 'active-nav'; ?>" href="/site-care">site care</a>
                </li>
              </ul>
            </li>

            <li>
              <a class="<?php if ($page == '/contact' || $page == '/contact/') echo 'active-nav'; ?>" href="/contact">Contact</a>
            </li>
          </ul>
        </nav>


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
            <li><a class="<?php if ($page == '/about' || $page == '/about/') echo 'active-nav'; ?>" href="/about">About </a></li>
            <li>
              <a class="<?php if ($page == '/food-app' || $page == '/food-app/') echo 'active-nav'; ?>" href="/food-app/">Food App</a>
            </li>
            <li>
              <a class="<?php if ($page == '/business-boosters' || $page == '/business-boosters/') echo 'active-nav'; ?>" href="/business-boosters">Business Boosters</a>
            </li>
            <li>
              <a class="<?php if ($page == '/site-care' || $page == '/site-care/') echo 'active-nav'; ?>" href="/site-care">site care</a>
            </li>
            <li class="<?php if ($page == '/contact' || $page == '/contact/') echo 'active-nav'; ?>"> <a href="/contact">Contact</a></li>
          </ul>

        </nav>
      </div>

      <!-- Hero Content -->
      <div class="hero-content">
        <h1 class="<?php echo ($page != "/") ? 'text-light page-text-shadow' : 'text-primary home-text-shadow'; ?>">
          <?= $main_title; ?></h1>
        <a href="/contact" class="cta-button">Schedule a Call</a>
      </div>
    </div>
    </div>