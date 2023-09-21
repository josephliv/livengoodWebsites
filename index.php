<?php
$page = $_SERVER['REQUEST_URI'];
$site_title = "Web Design & SEO Company in North Carolina | Online Food App Development";
$main_title = "";
$header_text = "Everything You Need For A Successful Business.";
$sub_title = "";
$externalLinks = 'target="_blank" rel="nofollow noopener"';
$meta_description = "Specializing in web design, SEO, and online food app development, we're North Carolina's trusted digital agency. Turn your vision into reality with our tailored solutions.";
$meta_keywords = "Joseph Livengood, Website design, Website development, website designer near Mocksville North Carolina";
$js_path = "";
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
        $header_text = "Welcome to Livengood Websites.";
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
        break;
        // Google was showing a 404 with this url, the testimonials are on the home page
    case "/testimonials":
        $sub_title = "Customized website designs to meet your requirements within your budget.";
        break;
    case "/meet-joe":
    case "/meet-joe/":
        // 404 detected from /about so let's add it here
    case "/about":
    case "/about/":
        $site_title = "Meet Joseph Livengood";
        $main_title = "Meet Joseph Livengood";
        $header_text = "Innovative website designer, with a passion for helping others succeed. ";
        $sub_title = "Behind The Scenes And Beyond";
        $meta_keywords = "Joseph Livengood, Joe Livengood, About Joseph Livengood, Who is Joseph Livengood, who is Joe Livengood, Joe Livengood reviews";
        break;
    case "/food-ording-app":
    case "/food-ording-app/":
    case "/food-app":
    case "/food-app/":
        $main_title = "Food Ordering App";
        $header_text = "The New And Improved Order Taking App For 2023.";
        $sub_title = "The Complete online ordering solution";
        $site_title = "Food Ordering App | The Complete Online Ordering Solution";
        $meta_keywords = "best food delivery app, Order Taking App, Restaurant Online ordering app, increase restaurant sales, accept orders online";
        break;
        // a page to display when they request services for restaurants. 
    case "/request-service":
    case "/request-service/":
        $main_title = "Request Services & Quote";
        $sub_title = "Please fill out this quick form to better assist you";
        break;
        // a request received page 
    case "/request-received":
    case "/request-received/":
        $main_title = "Your request has been received";
        $sub_title = "If you are not redirected, please click the button below.";
        break;
    case "/portfolio/":
    case "/portfolio":
        $main_title = "Portfolio";
        $sub_title = "Recent sites built that are currently being managed by Livengood Websites";
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
        $header_text = "Useful information written by Joseph Livengood";
        $main_title = "Blog Page";
        $sub_title = "Welcome to my Blog.";
        break;
    case "/chat-bot":
    case "/chat-bot/":
        $meta_keywords = "list building, facebook messenger, Google Ads, leads, lead generation, auto messenger";
        $main_title = "List Building & Lead Generation";
        $sub_title = "Get cheaper, better, and more leads within a few days.";
        break;
    case "/web-design":
    case "/web-design/":
        $meta_keywords = "website design work, responsive websites, livengood websites, website designs near me, websites near Mocksville NC";
        $main_title = "Elevate Your Online Presence with Livengood Websites";
        $sub_title = "Get a website tailored to your business goals and optimize its performance.";
        break;
    case "/business-boosters":
    case "/business-boosters/":
        $meta_keywords = "business funding, business capital, payment processor, equipment financing";
        $meta_description = "These are great business boosters to help you get or save money.";
        $main_title = "Give your Business that boost it needs for Growth";
        $sub_title = "Our innovative solutions that help your business succeed.";
        break;
    case "/site-care":
    case "/site-care/":
        $header_text = "Website Maintenance Services";
        $sub_title = "Keep Your Website in Perfect Shape and Unleash it's true potential!";
        break;
        // Blog post pages
    case "/website-maintenance":
    case "/website-maintenance/":
        $meta_keywords = "website maintenance, the importantance of website maintenance, website security";
        $header_text = "The Importance Of Website Maintenance";
        $sub_title = "A Comprehensive Guide and Introduction";
        break;
    case "/google-analytics":
    case "/google-analytics/":
        $meta_keywords = "How to migrate to google analytics 4, google analytics 4, website tracking, realtime tracking";
        $header_text = "​How to Migrate to Google Analytics 4";
        $sub_title = "Here's a step-by-step guide to help you.";
        break;
    case "/tips-to-rank-on-google":
    case "/tips-to-rank-on-google/":
        $meta_keywords = "seo tips, strategies for google ranking, search engine opitimization";
        $header_text = "3 things your site needs to rank on Google";
        $sub_title = "If you want to rank on Google or other search engines, you need these.";
        break;
    case "/How-To-Install-WordPress-Plugins/":
        $meta_keywords = "Wordpress plugins, vsftpd, FTP daemon, how to install plugin localhost, Linux OS, localhost";
        $meta_description = "Wordpress Plugins can be installed while running locally on a computer by enabling vsftpd, I explain step by step on how to do this";
        $main_title = "How To Install WordPress Plugins On A Local Machine";
        break;
    case "/How-To-Fix-Skype-White-Screen/":
    case "/How-To-Fix-Skype-White-Screen":
        $meta_keywords = "Skype white screen, Skype won't start, white screen with skype, skype only showing white screen";
        $meta_description = "Ever started skype and no matter what you did, you still got that white screen? Here's the solution...";
        $main_title = "How To Fix the white screen issue with Skype";
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
        break;
    case "/seo-strategies/":
    case "/seo-strategies":
        $meta_keywords = "Search Engine Optimization, SEO, digital marketing strategy, enhance your website, search engine result pages, SERPs";
        $main_title = "SEO Strategies";
        $sub_title = "What you need to know and why it's important for your business success.";
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
        $sub_title = "Maybe you can find what you are looking for below";
        break;
    case "/contact/":
    case "/contact":
        $header_text = "We would love to hear from you.";
        $main_title = "Get in touch";
        break;
    
        // Page not found
    default:
        $main_title = "404";
        $sub_title = "OOOps that page doesn't exist!";
};
if ($page === "/site-map.xml" || $page === "/sitemap_index.xml") {
    include 'site-map.xml';
    return;
}
if ($page === "/login.php") {
    include 'includes/login.php';
    return;
}
include "template.php";
