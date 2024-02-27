<section class="container-fluid mx-1 mx-md-3 mx-lg-4">
  <div class="row">
    <div class="col-12 col-md-8 col-lg-8">
      <?php
      switch ($page) {
        case "/garden-vs-website":
        case "/garden-vs-website/":
          include 'includes/posts/garden-vs-website.php';
          break;
        case "/effective-website-maintenance":
        case "/effective-website-maintenance/":
          include 'includes/posts/Effective-Website-Maintenance.php';
          break;
        case "/Building-the-Digital-Landscape":
        case "/Building-the-Digital-Landscape/":
          include "includes/posts/Building-the-Digital-Landscape.php";
          break;
        case "/menu-development":
          include "includes/posts/menu-development.php";
          break;
        case "/website-maintenance":
        case "/website-maintenance/":
          include 'includes/posts/website-maintenance.php';
          break;
        case "/tips-to-rank-on-google":
        case "/tips-to-rank-on-google/":
          include 'includes/posts/tips-to-rank-on-google.php';
          break;
        case "/google-analytics":
        case "/google-analytics/":
          include 'includes/posts/Google-Analytics-4.php';
          break;
        default:
          echo '<div style="min-height: 90vh; display: grid; place-items: center"><p>This blog is missing, <a href="/blog">Return to the blog page</a></p></div>';
      }
      ?>

    </div>
    <nav class="posts-side-bar col-lg-3 col-md-3 col-12 my-3">
      <div class="list-group">
        <h4 class="list-group-item-title" aria-current="true">
          More posts
        </h4>
        <a href="/menu-development" class="list-group-item list-group-item-action">
          Menu Mastery: Boost Your Restaurant's Success
        </a>
        <a href="/website-maintenance" class="list-group-item list-group-item-action">What is Website Maintenance?</a>
        <a href="/tips-to-rank-on-google" class="list-group-item list-group-item-action">Tips to rank on Google</a>
        <a href="/google-analytics" class="list-group-item list-group-item-action">Using Google Analytics</a>
        <a href="/blog" class="list-group-item list-group-item-action">View All Posts</a>
      </div>
    </nav>
  </div>
</section>