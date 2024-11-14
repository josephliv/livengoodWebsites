<header id="top">
  <div class="top-bar d-none d-md-flex">
    <div class="phone">
      <a href="tel:17049979007">
        <img width="30" src="/assets/imgs/icons/png-files/phone.png" alt="Phone: ">&nbsp; 1 (704) 997-9007</a>
    </div>
    <div class="email">
      <a href="mailto:info@joes.business">
        <img width="30" src="/assets/imgs/icons/png-files/envelope.png" alt="Email: ">&nbsp;
        info@joes.business</a>
    </div>
    <!-- Social Links -->
    <?= $social_links; ?>
  </div>
  <div class="logo-nav-container">
    <div class="logo-container">
      <a href="/">
        <img src="/assets/imgs/Livengood-p2.webp" alt="Livengood Websites">
      </a>
    </div>
    <nav class="nav-menu">
      <ul>
        <li><a class="<?php if ($page == '/') echo 'active-nav'; ?>" href="/" href="/">Home</a></li>
        <li><a class="<?php if ($page == '/meet-joe' || $page == '/meet-joe/') echo 'active-nav'; ?>" href="/meet-joe">Meet Joe</a></li>
        <li>
              <a class="<?php if ($page == '/website-maintenance-services' || $page == '/website-maintenance-services/') echo 'active-nav'; ?>" href="/website-maintenance-services">maintenance</a>
            </li>
            <li>
              <a class="<?php if ($page == '/web-design' || $page == '/web-design/') echo 'active-nav'; ?>" href="/web-design">web design</a>
            </li>
            <li>
              <a class="<?php if ($page == '/marketing' || $page == '/marketing/') echo 'active-nav'; ?>" href="/marketing">Social Media Marketing</a>
            </li>
            <?php 
        // <li class="dropdown">
        //   <a style="cursor: default;" href="#">Services</a>
        //   <ul class="dropdown-menu">
        //   </ul>
        // </li>
        ?>
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
 
  <nav class="sidebar-menu">
    <ul>
      <li><a class="<?php if ($page == '/') echo 'active-nav'; ?>" href="/" href="/">Home</a></li>
      <li><a class="<?php if ($page == '/meet-joe' || $page == '/meet-joe/') echo 'active-nav'; ?>" href="/meet-joe">meet joe </a></li>
      
      
      <li>
        <a class="<?php if ($page == '/website-maintenance-services' || $page == '/website-maintenance-services/') echo 'active-nav'; ?>" href="/website-maintenance-services">maintenance</a>
      </li>
      
      <li>
        <a class="<?php if ($page == '/marketing' || $page == '/marketing/') echo 'active-nav'; ?>" href="/marketing">marketing</a>
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