<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="google-site-verification" content="GKX9_rUdeEZ6cCwMf0ZuuXqEiMv6DjjdIgmvbQibgVs" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= $meta_description; ?>" />
    <meta property="og:url" content="https://livengoodwebsites.com/" />
    <meta property="og:site_name" content="Custom Web Design & SEO Services in Salisbury NC and surrounding areas." />
    <meta name="keywords" content="<?= $meta_keywords; ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">

    <link rel="shortlink" href="https://livengoodwebsites.com/" />
    <link rel="stylesheet" href="assets/BS/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <!-- Open Graph Tags for social media sharing: -->
    <meta property="og:title" content="<?= $main_title; ?>">
    <meta property="og:description" content="<?= $meta_description; ?>">
    <meta property="og:image" content="/assets/imgs/post-images/<?= $post_image; ?>">
    <meta property="og:url" content="https://livengoodwebsites.com/<?= $page ?>">
    <meta property="og:type" content="article">
    <!-- my own styling -->
    <link rel="stylesheet" href="/assets/reset.css" />
    <link rel="stylesheet" href="/assets/styles2.css?l=<?= time(); ?>" />
    <link rel="stylesheet" href="/assets/hero-bg.css?l=<?= time(); ?>" />
    <?php if ($page == "/partner" || $page == "/partner/") {
        // Include layout.css on all pages except home
        echo '<link rel="stylesheet" href="includes/partner/main.css" />';
    } ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="/assets/imgs/favicon.ico">
    <link rel="canonical" href="https://livengoodwebsites.com<?= $canonical; ?>" />

    <title>
        <?= $site_title; ?> | Livengood Websites, North Carolina
    </title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4MSKEW1D4N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4MSKEW1D4N');
    </script>
    <!-- for the back to top button -->
    <script src="/assets/script.js" defer></script>
</head>

<body>
    <img src="https://www.sociamonials.com/tracking.php?t=l&tid=29522" width="1" height="1" alt="social media engagement">

    <!-- =================================
      | Top header with logo and nav links and hero |
        ====================================  -->
    <?php include 'includes/sections/header.php';  ?>

    <!-- Main content -->

    <div class="page-content">
        <?php
        // For page rendering
        switch ($page) {
                // Home Page
            case "/":
            case "/index":
                include 'includes/home.php';
                break;
            case "/partner":
            case "/partner":
                include 'includes/partner/partner.php';
                break;
                //Meet Joe page
            case "/meet-joe":
            case "/meet-joe/":
                // 404 detected from /about so let's add it here
            case "/about":
            case "/about/":
                include 'includes/meet-joe.php';
                break;
            case "/online-food-ordering-app-development/":
            case "/online-food-ordering-app-development":
            case "/food-app":
            case "/food-app/":
            case "/restaurant-online-ordering-solution/":
            case "/restaurant-online-ordering-solution":
                include 'includes/food-app.php';
                break;
                // food app details page 
            case "/food-app-details":
                include 'includes/food-app-details.php';
                break;
            case "/request-service":
            case "/request-service/":
                include 'includes/request-services.php';
                break;
                // a request received page 
            case "/request-received":
            case "/request-received/":
                include "includes/request-received.php";
                break;
            case "/portfolio/":
            case "/portfolio":
                include 'includes/portfolio.php';
                break;
            case "/chat-bot":
            case "/chat-bot/":
                include 'includes/chat-bot.php';
                break;
            case "/web-design":
            case "/web-design/":
            case "/index.php/web-design":
                include 'includes/web-design.php';
                break;
            case "/business-boosters":
            case "/business-boosters/":
                include 'includes/business-boosters.php';
                break;
            case "/website-maintenance-services":
            case "/website-maintenance-services/":
            case "/maintenance":
            case "/maintenance/":
            case "/site-care":
            case "/site-care/":
                include 'includes/website-maintenance-services.php';
                break;
            case "/pricing":
            case "/pricing/":
                include 'includes/pricing.php';
                break;
            case "/marketing":
            case "/marketing/":
                include 'includes/marketing.php';
                break;
                //blog page with posts
            case "/blog":
            case "/blog/":
            case "/feed/":
            case "/feed":
                include 'includes/blog.php';
                break;
                // Blog post pages
            case "/worlds-longest-css":
            case "/garden-vs-website":
            case "/garden-vs-website/":
            case "/effective-website-maintenance":
            case "/effective-website-maintenance/":
            case "/Building-the-Digital-Landscape":
            case "/Building-the-Digital-Landscape/":
            case "/menu-development":
            case "/menu-development/":
            case "/website-maintenance":
            case "/website-maintenance/":
            case "/google-analytics":
            case "/google-analytics/":
            case "/tips-to-rank-on-google":
            case "/tips-to-rank-on-google/":
            case "/desert-mirage":
            case "/desert-mirage/":
            case "/gemini-vs-chatgtp":
            case "/gemini-vs-chatgtp/":

                include "includes/sections/post-page.php";
                break;


            case "/How-To-Install-WordPress-Plugins/":
            case "/How-To-Install-WordPress-Plugins":
                include 'includes/posts/How-To-Install-WordPress-Plugins.php';
                break;
            case "/How-To-Fix-Skype-White-Screen/":
            case "/How-To-Fix-Skype-White-Screen":
                include 'includes/posts/How-To-Fix-Skype-White-Screen.php';
                break;
            case "/How-To-Move-A-Wordpress-Site/":
            case "/How-To-Move-A-Wordpress-Site":
                include 'includes/posts/How-To-Move-A-Wordpress-Site.php';
                break;
            case "/Importing-Contacts-from-gmail-to-Thunderbird/":
            case "/Importing-Contacts-from-gmail-to-Thunderbird":
                include 'includes/posts/Importing-Contacts-from-gmail-to-Thunderbird.php';
                break;
            case "/seo-strategies/":
            case "/seo-strategies":
                include 'includes/posts/seo-strategies.php';
                break;
                // pages to be redirected to avoid 404's from Google console
            case "/feed/":
            case "/comments/feed/":
                //https://joesdigitalservices.com/feed/ & https://joesdigitalservices.com/comments/feed/
                include 'includes/blog.php';
                break;
                // https://joesdigitalservices.com/testimonials/
            case "/testimonials":
            case "/testimonials/":
                include 'includes/testimonials.php';
                break;

                // https://joesdigitalservices.com/testimonials/
            case "/contact/":
            case "/contact":
                include 'includes/contact.php';
                break;
            case "/pay":

                break;
                // When a page doesn't exist - 404 not found page
            default:
                include 'includes/404.php';
        };
        ?>

    </div>
    <!-- =================================
| The Footer element  |
==================================== -->

    <?php include 'includes/sections/footer.php'; ?>


    <!-- =================================
            | The back to top button  |
        ====================================  -->
    <a href="#" onclick="topFunction()" id="myBtn" class="top-btn" title="Go to top">
    <i class="fas fa-angle-up"></i>
    </a>
   <script type="text/javascript">
      (
        function() {
          var sbSiteSecret = "b9b64d2a-b837-4bee-8a4d-04b3541c388e";
          window.sitebehaviourTrackingSecret = sbSiteSecret;
          var scriptElement = document.createElement('script');
          scriptElement.async = true;
          scriptElement.id = "site-behaviour-script-v2";
          scriptElement.src = "https://sitebehaviour-cdn.fra1.cdn.digitaloceanspaces.com/index.min.js?sitebehaviour-secret=" + sbSiteSecret;
          document.head.appendChild(scriptElement); 
        }
      )()
</script> 
    <!-- Bootstrap Bundle with Popper -->
    <script src="assets/BS/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>