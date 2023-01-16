<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="facebook-domain-verification" content="ne1grlqalvy2ruujnxy18jr7zis2nu" />
   <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1202599500679797');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1202599500679797&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4MSKEW1D4N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4MSKEW1D4N');
</script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?=$meta_description;?>" />
    <meta property="og:url" content="https://joes.business/" />
    <meta property="og:site_name" content="Joe's Digital Services in Mocksville NC" />
    <meta name="keywords" content="<?=$meta_keywords;?>" />
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- my own styling -->
    <link rel="stylesheet" href="/assets/reset.css" />
    <link rel="stylesheet" href="/assets/styles.css?l=<?=time();?>" />
    <?php if ($page != "/") {
    // Include layout.css on all pages except home
    echo '<link rel="stylesheet" href="/assets/layout.css" />';
}?>
    <!-- my own Animations-->
    <link rel="stylesheet" href="/assets/animations.css" />

    <link rel="shortcut icon" href="/assets/imgs/favicon.ico">
    <script src="/assets/script.js" defer></script>
    <title>
        <?=$site_title?> | Joe's Digital Services
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

</head>

<body>

    <!-- =================================
      | Top header with logo and nav links and hero |
        ====================================  -->

    <header id="header" class="header lazy" data-src="/assets/imgs/geometric-header.jpg">
        <?php include 'includes/sections/header.php';?>


        <!-- =================================
        | Hero section |
        ==================================== -->
        <div id="hero" class="hero">
            <?php include 'includes/sections/hero.php';?>
        </div>
    </header>
    <!-- Main content -->

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

    //blog page with posts
    case "/blog":
    case "/blog/":
    case "/feed/":  
    case "/feed": 
        include 'includes/blog.php';
        break;
    // Blog post pages
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
    <?php include 'includes/sections/footer.php';?>

    <!-- =================================
            | The back to top button  |
            ====================================  -->
    <a href="#" onclick="topFunction()" id="myBtn" title="Go to top">
        <img src="/assets/imgs/back-to-top.svg" alt="Top" />
    </a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>window.fbAsyncInit=function(){FB.init({appId:'635994263246055',autoLogAppEvents:true,xfbml:true,version:'v9.0'});};</script><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script><script>(function(d,s,id){var js,fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-customerchat" page_id="109015495412167" theme_color="#050a22" logged_in_greeting="Hi, Thanks for visiting us! How can we assist you today?" logged_out_greeting="Thanks for checking us out." greeting_dialog_display="show" greeting_dialog_delay="1" ref="campaign::undefined"> </div>
</body>

</html>