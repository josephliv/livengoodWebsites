<?php
$page = $_SERVER['REQUEST_URI'];
// For title tag <title>goes here</title>
$site_title = "Web Design & SEO Company in North Carolina";
// Shows in the hero as the main h1 title
$main_title = "";
// displays under the hero/header section
$intro = "";
$externalLinks = 'target="_blank" rel="nofollow noopener"';
$meta_description = "";
$meta_keywords = "";
$social_links = '
<div class="social-links">
<a href="https://www.facebook.com/joesdigitalservices">
     <img class="icon" src="/assets/imgs/icons/png-files/facebook-filled.png" alt="Joseph Livengood on facebook">
 </a>

 <a href="https://www.linkedin.com/in/joseph-livengood-a403b7130/">
     <img class="icon" src="/assets/imgs/icons/png-files/linkedin-original.png" alt="Joseph Livengood on LinkedIn">
 </a>
 <a href="https://www.youtube.com/channel/UCAgEWX1qEHetRThckh8GZGw">
     <img class="icon" src="/assets/imgs/icons/png-files/youtube.png" alt="Joseph Livengood on Youtube">
 </a>
 <a href="https://twitter.com/creativejoe101">
     <img class="icon" src="/assets/imgs/icons/png-files/twitter-filled.png" alt="Joseph Livengood on Twitter">
 </a>
</div>';
// For page rendering

switch ($page) {
    case "/":
    case "/index":
        $site_title = "Web Design & SEO Company in North Carolina";      
        $main_title = "Welcome to Livengood Websites.";
        $meta_keywords = "north carolina website design,
        web design companies in north carolina,
        web design company north carolina,
        web development in north carolina,
        website hosting and maintenance services,
        seo company north carolina,
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
        break;
    case "/online-food-ordering-app-development":
    case "/online-food-ordering-app-development/":
    case "/food-app":
    case "/food-app/":
        $main_title = "Expert Food Ordering website Development Company";
        $intro = "Custom Online Food Ordering website Development Solutions";
        $site_title = "Food Ordering website | The Complete Online Ordering Solution";
        $meta_description = "As a leading food ordering website development company in North Carolina, Livengood Websites offers bespoke online food ordering website development services to cater to the needs of restaurants and food delivery startups.";
        $meta_keywords = "best food delivery website, Order Taking website, Restaurant Online ordering website, increase restaurant sales, accept orders online";
        break;
        // a page to display when they request services for restaurants. 
    case "/request-service":
    case "/request-service/":
        $main_title = "Request Services & Quote";
        $intro = "Please fill out this quick form to better assist you";
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
        break;
    case "/blog":
    case "/blog/":
    case "/feed/":
    case "/feed":
        $site_title = "Blog";
        $main_title = "Blog Page";
        $intro = "Welcome to my Blog.";
        break;
    case "/chat-bot":
    case "/chat-bot/":
        $meta_keywords = "list building, facebook messenger, Google Ads, leads, lead generation, auto messenger";
        $main_title = "List Building & Lead Generation";
        $intro = "Get cheaper, better, and more leads within a few days.";
        break;
    case "/web-design":
    case "/web-design/":
        $meta_keywords = "website design work, responsive websites, livengood websites, website designs near me, websites near Mocksville NC";
        $main_title = "Elevate Your Online Presence with Livengood Websites";
        $intro = "Get a website tailored to your business goals and optimize its performance.";
        break;
    case "/business-boosters":
    case "/business-boosters/":
        $meta_keywords = "business funding, business capital, payment processor, equipment financing";
        $meta_description = "These are great business boosters to help you get or save money.";
        $main_title = "Give your Business that boost it needs for Growth";
        $intro = "Our innovative solutions that help your business succeed.";
        break;
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
        $intro = "Keep Your Website in Perfect Shape and Unleash it's true potential!";
        break;
        // Blog post pages
    case "/website-maintenance":
    case "/website-maintenance/":
        $meta_keywords = "website maintenance, the importantance of website maintenance, website security";
        $main_title = "Website Maintenance";
        $intro =  "Why It's Crucial for Your Digital Success";
        break;
    case "/google-analytics":
    case "/google-analytics/":
        $meta_keywords = "How to migrate to google analytics 4, google analytics 4, website tracking, realtime tracking";
        $intro = "​How to Migrate to Google Analytics 4";
        break;
    case "/tips-to-rank-on-google":
    case "/tips-to-rank-on-google/":
        $meta_keywords = "seo tips, strategies for google ranking, search engine opitimization";
        $intro = "3 things your site needs to rank on Google";
        break;
    case "/How-To-Install-WordPress-Plugins/":
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
        $meta_keywords = "Search Engine Optimization, SEO, digital marketing strategy, enhance your website, search engine result pages, SERPs";
        $main_title = "SEO Strategies";
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
        break;

        // Page not found
    default:
        $main_title = "404";
        $intro = "OOOps that page doesn't exist!";
};
if ($page === "/site-map.xml" || $page === "/sitemap_index.xml") {
    include 'site-map.xml';
    return;
}

include "template.php";
