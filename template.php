<!DOCTYPE html>
<html lang="en">

<head>
   
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4MSKEW1D4N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4MSKEW1D4N');
    </script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= $meta_description; ?>" />
    <meta property="og:url" content="https://livengoodwebsites.com/" />
    <meta property="og:site_name" content="Web Design Services in Salisbury NC and surrounding areas." />
    <meta name="keywords" content="<?= $meta_keywords; ?>" />
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- my own styling -->
    <link rel="stylesheet" href="/assets/reset.css" />
    <link rel="stylesheet" href="/assets/styles.css?l=<?= time(); ?>" />
    <?php if ($page != "/") {
        // Include layout.css on all pages except home
        echo '<link rel="stylesheet" href="/assets/layout.css" />';
    } ?>
    <!-- my own Animations-->
    <link rel="stylesheet" href="/assets/animations.css" />

    <link rel="shortcut icon" href="/assets/imgs/favicon.ico">

    <title>
        <?= $title; ?> | Livengood Websites
    </title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9K3RMVMFJP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9K3RMVMFJP');
    </script>
    <!-- for the back to top button -->
    <script src="/assets/script.js" defer></script>
</head>

<body>

    <!-- =================================
      | Top header with logo and nav links and hero |
        ====================================  -->
<?php include 'includes/sections/header.php';  ?>
   
    <!-- Main content -->
    <div class="gradient introduction" id="top">
    <h2><?= $intro; ?></h2>
    </div>
    <?php
    // For page rendering
    switch ($page) {
            // Home Page
        case "/";
            include 'includes/home.php';
            break;
            //Meet Joe page
        case "/meet-joe":
        case "/meet-joe/":
            // 404 detected from /about so let's add it here
        case "/about":
        case "/about/":
            include 'includes/meet-joe.php';
            break;
        case "/food-ording-app/":
        case "/food-ording-app":
        case "/food-app":
        case "/food-app/":
            include 'includes/food-app.php';
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
            include 'includes/home.php';
            break;
        case "/business-boosters":
        case "/business-boosters/":
            include 'includes/business-boosters.php';
            break;
        case "/site-care":
        case "/site-care/":
            include 'includes/site-care.php';
            break;
            //blog page with posts
        case "/blog":
        case "/blog/":
        case "/feed/":
        case "/feed":
            include 'includes/blog.php';
            break;
            // Blog post pages
        case "/website-maintenance":
        case "/website-maintenance/":
            include 'includes/posts/website-maintenance.php';
            break;
        case "/google-analytics":
        case "/google-analytics/":
            include 'includes/posts/Google-Analytics-4.php';
            break;
        case "/tips-to-rank-on-google":
        case "/tips-to-rank-on-google/":
            include 'includes/posts/tips-to-rank-on-google.php';
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
            include 'includes/home.php';
            break;

            // https://joesdigitalservices.com/testimonials/
        case "/contact/":
        case "/contact":
            include 'includes/contact.php';
            break;
            // When a page doesn't exist - 404 not found page
        default:
            include 'includes/404.php';
    };
    ?>


    <!-- =================================
| The Footer element  |
==================================== -->
    <?php include 'includes/sections/footer.php'; ?>

    <!-- =================================
            | The back to top button  |
            ====================================  -->
    <a href="#" onclick="topFunction()" id="myBtn" title="Go to top">
        <img src="/assets/imgs/back-to-top.svg" alt="Top" />
    </a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <script <?= $js_path; ?>></script>
<?php 
    // <!--Start of Tawk.to Script-->
    // <script type="text/javascript">
    //     var Tawk_API = Tawk_API || {},
    //         Tawk_LoadStart = new Date();
    //     (function() {
    //         var s1 = document.createElement("script"),
    //             s0 = document.getElementsByTagName("script")[0];
    //         s1.async = true;
    //         s1.src = 'https://embed.tawk.to/644a9b054247f20fefee22d7/1gv1mr3s8';
    //         s1.charset = 'UTF-8';
    //         s1.setAttribute('crossorigin', '*');
    //         s0.parentNode.insertBefore(s1, s0);
    //     })();
    // </script>
    // <!--End of Tawk.to Script-->
?>

</body>

</html>