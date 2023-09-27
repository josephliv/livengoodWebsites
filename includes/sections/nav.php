

<div class="nav-header">
  <input type="checkbox" id="menu-bar">
  <label for="menu-bar">
    <div class="mobile-icon">
    <img src="/assets/imgs/icons/png-files/menu.png" alt="menu">
    </div>
  </label>
  <nav class="main-nav2">
    <ul>
      <li>
        <a class="<?php if ($page == '/') echo 'active-nav'; ?>" href="/">Home</a>
      </li>
      <li>
        <a class="<?php if ($page == '/meet-joe' || $page == '/meet-joe/') echo 'active-nav'; ?>" href="/meet-joe">Meet Joe</a>
      </li>
      <li>
        <a class="<?php if ($page == '/portfolio' || $page == '/portfolio/') echo 'active-nav'; ?>" href="/portfolio">Portfolio</a>
      </li>
      <li>
        <a class="<?php if ($page == '/blog' || $page == '/blog/') echo 'active-nav'; ?>" href="/blog">Blog</a>
      </li>
      <li>
        <a href="#" id="servicesDropdownDiv">Services <img src="/assets/imgs/icons/png-files/angle-double-down.png" width="10" alt="" style="display: inline;">
        </a>
        <!-- Menu dropdown items -->
        <ul>
          
          <li>
            <a class="<?php if ($page == '/chat-bot' || $page == '/chat-bot/') echo 'active-nav'; ?>" href="/chat-bot">Chat Bot</a>
          </li>
          <li>
            <a class="<?php if ($page == '/food-app' || $page == '/food-app/') echo 'active-nav'; ?>" href="/food-app/">Food App</a>
          </li>
          <li>
            <a class="<?php if ($page == '/business-boosters' || $page == '/business-boosters/') echo 'active-nav'; ?>" href="/business-boosters">Business Boosters</a>
          </li>
          <li>
            <a class="<?php if ($page == '/website-maintenance-services' || $page == '/website-maintenance-services/') echo 'active-nav'; ?>" href="/website-maintenance-services">site care</a>
          </li>
        </ul>
      </li>
      <li>

      </li>
      <li>
        <a href="/contact">Contact</a>
      </li>

    </ul>
  </nav>
</div>