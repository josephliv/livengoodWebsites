<?php
$page = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
$canonical = "$page";
// For title tag <title>goes here</title>
$site_title = "Web Design & SEO Company in North Carolina";
// Shows in the hero as the main h1 title
$main_title = "";
// displays under the hero/header section
$intro = "";
$externalLinks = 'target="_blank" rel="nofollow noopener"';
$meta_description = "";
$meta_keywords = "";
// to pull in the background image for pages when needed.
$hero_bg_class = "monitor-bg";
$social_links = '
<div class="social-links">
<a href="https://www.facebook.com/joesdigitalservices">
     <img width="30" class="icon" src="/assets/imgs/icons/png-files/facebook-filled.png" alt="Joseph Livengood on facebook" title="Facebook Page">
 </a>

 <a href="https://www.linkedin.com/in/joseph-livengood-a403b7130/">
     <img width="30" class="icon" src="/assets/imgs/icons/png-files/linkedin-original.png" alt="Joseph Livengood on LinkedIn" title="LinkedIn">
 </a>
 <a href="https://www.youtube.com/channel/UCAgEWX1qEHetRThckh8GZGw">
     <img width="30" class="icon" src="/assets/imgs/icons/png-files/youtube.png" alt="Joseph Livengood on Youtube" title="Youtube">
 </a>
 <a href="https://twitter.com/creativejoe101">
     <img width="30" class="icon" src="/assets/imgs/icons/png-files/twitter-filled.png" alt="Joseph Livengood on Twitter" title="Twitter">
 </a>
</div>';
// For page rendering

switch ($page) {
    case "/":
    case "/index":
        $site_title = "Top website designs & SEO Company in North Carolina | Boost Your Rankings";
        $main_title = "Welcome to Livengood Websites.";
        $meta_description = "Boost your online presence with the leading SEO company in North Carolina. Our expert team delivers results-driven SEO services for businesses of all sizes.";
        $meta_keywords = "north carolina website design,
        web design companies in north carolina,
        web design company north carolina,
        web development in north carolina,
        website hosting and maintenance services,
        seo company north carolina,
        seo davie county,
        search optimisation agency,
        best search engine optimization company,
        online food ordering app development,
        food ordering app development company";
        $intro = "Your Trusted Web Development and Design Specialist in North Carolina";
        break;
        // Google was showing a 404 with this url, the testimonials are on the home page

    case "/meet-joe":
    case "/meet-joe/":
        // 404 detected from /about so let's add it here
    case "/about":
    case "/about/":
        $site_title = "Meet Joseph Livengood";
        $main_title = "Meet Joseph Livengood";
        $intro = "Independent Web Designer - Joe's Story";
        $meta_keywords = "
        Joe - Web Developer in North Carolina,
        Independent Web Designer - Joe's Story,
        Joe's Journey: From Coding Novice to Expert Web Developer,
        North Carolina's Trusted Web Designer: Get to Know Joe,
        Meet Joe: Crafting Websites and Digital Solutions in North Carolina,
        Behind the Code: Joe's Web Design Philosophy,
        Personalized Web Development: Joe's Approach,
        Joe: Merging Creativity and Code for Unique Web Solutions,
        The Man Behind North Carolina's Best Websites,
        Web Development with a Personal Touch: Dive into Joe's Portfolio";
        $canonical = "/about";
        break;
    case "/online-food-ordering-app-development":
    case "/online-food-ordering-app-development/":
    case "/restaurant-online-ordering-solution/":
    case "/restaurant-online-ordering-solution":
    case "/food-app":
    case "/food-app/":
        $canonical = "/food-app";
        $main_title = "North Carolina's Leading Restaurant Website Development";
        $intro = "Crafting Impeccable Digital Menus & Seamless Online Ordering Systems";
        $site_title = "Comprehensive Restaurant Online Ordering Solution";
        $meta_description = "Offering a complete online ordering solution tailored for restaurants. From digital menus to integrated payments, elevate your restaurant's online presence with Livengood Websites.";
        $meta_keywords = "Restaurant ordering system,
        Online menu setup for restaurants,
        Custom restaurant ordering software,
        Restaurant delivery system,
        Dine-in online reservations,
        Digital menu solutions,
        Integrated payment solutions for restaurants,
        Mobile ordering for restaurants,
        Online food ordering platform";
        $hero_bg_class = "food-bg";
        break;
        // Food app details
    case "/food-app-details":
        $hero_bg_class = "food-bg-post";
        $main_title = "Showcasing Our Digital Dining Experience";
        $intro = "A Glimpse into the Future of Online Ordering";
        break;
        // a page to display when they request services for restaurants. 
    case "/request-service":
    case "/request-service/":
        $main_title = "Request Services & Quote";
        $intro = "Please fill out this quick form to better assist you";
        $hero_bg_class = "food-bg";
        break;
        // a request received page 
    case "/request-received":
    case "/request-received/":
        $main_title = "Your request has been received";
        $intro = "If you are not redirected, please click the button below.";
        break;
    case "/portfolio/":
    case "/portfolio":
        $main_title = "Portfolio";
        $intro = "Recent sites built that are currently being managed by Livengood Websites";
        $site_title = "Portfolio";
        $meta_description = "Sites built and maintained by Livengood Websites";
        $meta_keywords = "Joseph's portfolio, Joseph's previous work, website portfolio, Joseph Livengood reviews";
        $js_path = 'src="/assets/portfolio.js"';
        $hero_bg_class = "portfolio-bg";
        break;

    case "/blog":
    case "/blog/":
    case "/feed/":
    case "/feed":
        $site_title = "Blog";
        $main_title = "Blog Page";
        $intro = "Welcome to my Blog.";
        $hero_bg_class = "blog-bg";
        $canonical = "/blog";
        break;
    case "/chat-bot":
    case "/chat-bot/":
        $meta_keywords = "list building, facebook messenger, Google Ads, leads, lead generation, auto messenger";
        $main_title = "List Building & Lead Generation";
        $intro = "Get cheaper, better, and more leads within a few days.";
        break;
    case "/web-design":
    case "/web-design/":
    case "/index.php/web-design":
        $meta_keywords = "north carolina website design,
        web design companies in north carolina,
        web design company north carolina,
        web development in north carolina,
        website hosting and maintenance services";
        $main_title = "North Carolina Website Design";
        $intro = "Elevate Your Online Presence";
        $hero_bg_class = "web-design";
        break;
    case "/business-boosters":
    case "/business-boosters/":
        $meta_keywords = "business funding, business capital, payment processor, equipment financing";
        $meta_description = "These are great business boosters to help you get or save money.";
        $main_title = "Give your Business that boost it needs for Growth";
        $intro = "Our innovative solutions that help your business succeed.";
        $hero_bg_class = "business-bg";
        break;
    case "/website-maintenance-services":
    case "/website-maintenance-services/":
    case "/site-care":
    case "/site-care/":
        $main_title = "Our Website Maintenance Services";
        $meta_keywords = "
        Website maintenance,
        Regular updates,
        Site security,
        Optimal performance,
        Uptime monitoring,
        Backup solutions,
        Site longevity,
        User experience,
        Reliable website,
        Downtime,
        Vulnerabilities,
        Website health,
        CMS updates,
        Plugin updates,
        SEO rankings,
        User trust,
        Technical glitches,
        Software compatibility,
        Data breaches,
        Maintenance plan
        ";
        $meta_description = "comprehensive website maintenance services designed to keep your online presence running smoothly.";
        $intro = "Keep Your Website in Perfect Shape and Unleash it's true potential!";
        $hero_bg_class = "site-care-bg";
        break;
        // Blog post pages
    case "/Building-the-Digital-Landscape":
    case "/Building-the-Digital-Landscape/":
        $meta_keywords = "
        Web development,
        North Carolina,
        Tech ecosystem,
        Digital excellence,
        Web design,
        Innovation,
        SEO optimization,
        User experience,
        Community engagement,
        Data security";
        $meta_description = "Discover the tech-forward landscape of web development in North Carolina. Explore innovation, excellence, and SEO optimization as we delve into the state's vibrant tech ecosystem, user-centric design, and commitment to data security. Join us in unlocking digital excellence in the Tar Heel State.";
        $site_title = "Web Development Insights in North Carolina";
        $main_title = "Building the Digital Landscape";
        $intro = "Web Development Insights in North Carolina";
        $hero_bg_class = "digital-bg";
        break;
    case "/menu-development":
    case "/menu-development/":
        $meta_keywords = "North Carolina restaurant website development,
        Food ordering website North Carolina,
        Digital menu creation North Carolina,
        Online ordering system North Carolina,
        Restaurant online presence North Carolina,
        NC restaurant digital solutions,
        Seamless food ordering integration NC";
        $site_title = "Menu Development and Optimization - A Comprehensive Guide ";
        $main_title = "Boosting your restaurant's success";
        $meta_description = "Transform your restaurant's menu into a powerhouse for success. Discover essential strategies for menu mastery, pricing, and more. Elevate your dining experience today!";
        $intro = "Essential Strategies for Restaurant Owners";
        $hero_bg_class = "food-bg";
        break;
    case "/website-maintenance":
    case "/website-maintenance/":
        $meta_keywords = "website maintenance, the importantance of website maintenance, website security";
        $main_title = "website hosting and maintenance services";
        $meta_description = "comprehensive website maintenance services designed to keep your online presence running smoothly.";
        $intro =  "Why It's Crucial for Your Digital Success";
        break;
    case "/google-analytics":
    case "/google-analytics/":
        $meta_keywords = "How to migrate to google analytics 4, google analytics 4, website tracking, realtime tracking";
        $main_title = "How to Migrate to Google Analytics 4";
        $intro = "With only 5 simple steps";
        break;
    case "/tips-to-rank-on-google":
    case "/tips-to-rank-on-google/":
        $meta_keywords = "seo tips, strategies for google ranking, search engine opitimization";
        $main_title = "Tips to Rank on Google and other search engines";
        $intro = "3 things your site needs to rank on Google";
        break;
    case "/How-To-Install-WordPress-Plugins/":
    case "/How-To-Install-WordPress-Plugins":
        $meta_keywords = "Wordpress plugins, vsftpd, FTP daemon, how to install plugin localhost, Linux OS, localhost";
        $meta_description = "Wordpress Plugins can be installed while running locally on a computer by enabling vsftpd, I explain step by step on how to do this";
        $main_title = "How To Install WordPress Plugins On A Local Machine";
        $intro = "Use this with apache server";
        break;
    case "/How-To-Fix-Skype-White-Screen/":
    case "/How-To-Fix-Skype-White-Screen":
        $meta_keywords = "Skype white screen, Skype won't start, white screen with skype, skype only showing white screen";
        $meta_description = "Ever started skype and no matter what you did, you still got that white screen? Here's the solution...";
        $main_title = "How To Fix the white screen issue with Skype";
        $intro = "For Linux users";
        break;
    case "/How-To-Move-A-Wordpress-Site/":
    case "/How-To-Move-A-Wordpress-Site":
        $meta_keywords = "Word Press, move to a new server, how to move a WP site to new hosting, website migration, all in one migration, easy way to migrate any site";
        $meta_description = 'Tired of the limited mb that plugins give you to "migrate" your WP site? Here is a work around';
        $main_title = "How To Move A Wordpress Site Without A Plugin";
        break;
    case "/Importing-Contacts-from-gmail-to-Thunderbird/":
    case "/Importing-Contacts-from-gmail-to-Thunderbird":
        $meta_keywords = "gmail contacts, Thunderbird, How to import contacts to thunderbird, Gmail contacts to thunderbird, export contacts, inport contacts, gmail contacts, Google contacts, Thunderbird mail client";
        $meta_description = "In this article, I'll walk you through how to export your Google contacts and import them into thunderbird";
        $main_title = "Importing Contacts from gmail to Thunderbird";
        $intro = "This also works with other mail clients such as Outlook.";
        break;
    case "/seo-strategies/":
    case "/seo-strategies":
        $meta_keywords = "Search Engine Optimization, seo davie county, digital marketing strategy, enhance your website, search engine result pages, search optimisation agency, best search engine optimization company";
        $main_title = "SEO Company in North Carolina";
        $intro = "What you need to know and why it's important for your business success.";
        break;
        // redirects to prevent 404 in Google console
    case "/testimonials":
    case "/testimonials/":
        header("Location: /");
        exit();
        break;
    case "/feed/":
    case "/comments/feed/":
        $main_title = "That page has been moved here to my blog page";
        $intro = "Maybe you can find what you are looking for below";
        break;
    case "/contact/":
    case "/contact":
        $intro = "We would love to hear from you.";
        $main_title = "Get in touch";
        $hero_bg_class = "contact-bg";
        break;
        // promo offer
    case "/promo":
    case "/promo/":
        $site_title = "Exclusive Offers";
        $meta_keywords = "web development, website maintenance, professional website design, SEO services, responsive web design, website optimization, website backups, website security, web design promotion, monthly maintenance, small business website, custom web design, web hosting, website speed optimization, mobile-friendly website, user-friendly design, web development offer, website promotion, affordable web design";
        $meta_description = "We are passionate about web design and strive to create websites that not only look great but also function effectively. Let us showcase our expertise and help you achieve your online goals.";
        $main_title = "Livengood Website Exclusive Deals!";
        $intro = "Unleash Your Business Potential!";
        $hero_bg_class = "promo-bg";
        break;
        // Page not found
    default:
        $main_title = "404";
        $intro = "OOOps that page doesn't exist!";
        $hero_bg_class = "pageError";
};
if ($page === "/site-map.xml" || $page === "/sitemap.xml") {
    include 'sitemap.xml';
    return;
}
if ($page === "/robots.txt") {
    include 'robots.txt';
    return;
}

include "template.php";
