

<div class="header1">
  <input type="checkbox" id="menu-bar">
  <label for="menu-bar">Menu</label>
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
            <a class="<?php if ($page == '/web-design' || $page == '/web-design/') echo 'active-nav'; ?>" href="/web-design">Website Design</a>
          </li>
          <li>
            <a class="<?php if ($page == '/chat-bot' || $page == '/chat-bot/') echo 'active-nav'; ?>" href="/chat-bot">Chat Bot</a>
          </li>
          <li>
            <a class="<?php if ($page == '/food-app' || $page == '/food-app/') echo 'active-nav'; ?>" href="/food-app/">Food App</a>
          </li>
          <li>
            <a class="<?php if ($page == '/business-boosters' || $page == '/business-boosters/') echo 'active-nav'; ?>" href="/business-boosters">Business Boosters</a>
          </li>
        </ul>
      </li>
      <li>

      </li>
      <li>
        <script type="text/javascript" defer src="https://form.123formbuilder.com/embed/6306291.js?type=lightbox" data-role="form" data-default-width="650px" data-embed-type="lightbox-text-link" data-embed-text-link="Contact us"></script>
      </li>

    </ul>
  </nav>
</div>