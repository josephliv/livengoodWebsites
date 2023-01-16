<?php
$page = $_SERVER['REQUEST_URI'];
$site_title = "Joseph Livengood | Website Designs";
$main_title = "";
$sub_title = "";
$meta_description = "Web Design and other onine based work";
$meta_keywords = "Joseph Livengood, Website design, Website development, website designer near Mocksville North Carolina";

// For page rendering

switch ($page) {
    case "/":
        $site_title = "Website Designer & Developer based in Mocksville and Salisbury NC";
        $sub_title = "Mocksville and Salisbury website designer that meets your Requirements Within Your Budget.";
        $meta_keywords = "website designer near Mocksville, web designer salisbury nc, website developer near me, Salisbury North carolina website designer, SEO services in Mocksville";
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
        $sub_title = "Behind The Scenes And Beyond";
        break;
    case "/food-ording-app":
    case "/food-ording-app/":
        case "/food-app": 
        case "/food-app/":
        $main_title = "Food Ordering App";
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
        $sub_title = "Recent sites built that are currently being managed by Joe's Digital Services";
        $site_title = "Portfolio";
        $meta_description = "Sites built and maintained by Joseph Livengood";
        $meta_keywords = "Joseph's portfolio, previous work, website portfolio, reviews";
        break;
    case "/blog":
    case "/blog/":
    case "/feed/":  
    case "/feed":  
        $site_title = "Blog";
        $main_title = "Blog Page";
        $sub_title = "Find Interesting material here";
        break;
    case "/chat-bot":
    case "/chat-bot/":
        $meta_keywords = "list building, facebook messenger, SEO, Google Ads, leads, lead generation, auto messenger";
        $main_title = "List Building & Lead Generation";
        $sub_title = "Get cheaper, better, and more leads within a few days.";
        break;
// Blog post pages
    case "/tips-to-rank-on-google":
        $meta_keywords = "seo tips, strategies for google ranking, search engine opitimization";
        $main_title = "3 things your site needs to rank on Google"; 
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
// redirects to prevent 404 in Google console
case "/testimonials":
case "/testimonials/":
case "/web-design/":
case "/web-design";
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
include "template.php";
