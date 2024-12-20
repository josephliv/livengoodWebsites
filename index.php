<?php
$page = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
$canonical = "$page";
// For title tag <title>goes here</title>
$site_title = $page;
// Shows in the hero as the main h1 title
$main_title = "";
// displays under the hero/header section
$intro = "";
$externalLinks = 'target="_blank" rel="nofollow noopener"';
$meta_description = "";
$meta_keywords = "";
$post_image = "";
$hero_main_bg = "";
// to pull in the background image for pages when needed.
$hero_main_img = "partner";
$social_links = '
<div class="social-links">
<a href="https://www.facebook.com/joesdigitalservices">
     <img class="icon" src="/assets/imgs/icons/facebook.png" alt="Joseph Livengood on facebook" title="Facebook Page">
 </a>

 <a href="https://www.linkedin.com/in/joseph-livengood-a403b7130/">
     <img class="icon" src="assets/imgs/icons/linkedin.png" alt="Joseph Livengood on LinkedIn" title="LinkedIn">
 </a>
 <a href="https://www.instagram.com/joesdigitalservices/">
     <img class="icon" src="assets/imgs/icons/instagram.png" alt="Joseph Livengood on Instagram" title="instagram">
 </a>
 <a href="https://twitter.com/creativejoe101">
     <img class="icon" src="assets/imgs/icons/x.png" alt="Joseph Livengood on X" title="X">
 </a>
</div>';
// For page rendering

switch ($page) {
    case "/":
    case "/index":
        $site_title = "Custom Web Design Services in North Carolina";
        $main_title = "Stop Losing Customers to Your Competitors' Websites";
        $meta_description = "Boost your online presence with the leading SEO company in North Carolina. We offer SEO, website design and marketing services for businesses of all sizes.";
        $meta_keywords = "north carolina website design,
        web design companies in north carolina, social media marketing,
        web design company north carolina,
        web development in north carolina,
        website hosting and maintenance services,
        seo company north carolina,
        seo davie county
        ";
        $intro = "Learn how to convert your website visitors into loyal customers with actionable tips and marketing.";
        //$hero_main_img = "";
        break;
        // Google was showing a 404 with this url, the testimonials are on the home page
    case "/partner":
    case "/partner": 
        $site_title = "Partner with Livengood Websites";
        $main_title = "Become Our Partner"; 
        $intro = "Join Us in Building Success Together"; 
        $hero_main_img = "partner";   
        break;
    case "/meet-joe":
    case "/meet-joe/":
        // 404 detected from /about so let's add it here
    case "/about":
    case "/about/":
        $site_title = "Joe Livengood | North Carolina Web Designer & Developer";
        $main_title = "Meet Joe Livengood";
        $intro = "Building Digital Solutions with Southern Hospitality";
        $hero_main_img = "joe";
        $meta_description = "Joe Livengood | North Carolina-based web designer creating custom, effective websites for local businesses. Clear communication, timely delivery, and results-driven solutions.";
        $meta_keywords = "
        Joe Livengood, North Carolina web designer, website development NC, Charlotte web designer, custom website design, small business web developer, local web design services, affordable web design NC";
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
        $site_title = "Restaurant Online Ordering Solution";
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
        $hero_main_img = "food-bg";
        break;
        // Food app details
    case "/food-app-details":
        $hero_main_img = "food-bg-post";
        $site_title = "Food app details";
        $main_title = "Showcasing Our Digital Dining Experience";
        $intro = "A Glimpse into the Future of Online Ordering";
        break;
        // a page to display when they request services for restaurants. 
    case "/request-service":
    case "/request-service/":
        $main_title = "Request Services & Quote";
        $site_title = "Request Services";
        $intro = "Please fill out this quick form to better assist you";
        $hero_main_img = "food-bg";
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
        $hero_main_img = "portfolio-hero-bg";
        $hero_main_bg = "";
        break;

    case "/blog":
    case "/blog/":
    case "/feed/":
    case "/feed":
        $site_title = "Blog";
        $main_title = "Explore Insights and Ideas";
        $intro = "Welcome to the hub of creativity and knowledge.";
        $hero_main_img = "blog-bg";
        $hero_main_bg = "blog-hero-bg";
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
        $site_title = "Web Design Services";
        $intro = "Elevate Your Online Presence";
        $hero_main_img = "web-design";
        $hero_main_bg = "webdesign";
        break;
    case "/business-boosters":
    case "/business-boosters/":
        $meta_keywords = "business funding, business capital, payment processor, equipment financing";
        $meta_description = "These are great business boosters to help you get or save money.";
        $main_title = "Give your Business that boost it needs for Growth";
        $intro = "Our innovative solutions that help your business succeed.";
        $hero_main_img = "business-bg";
        break;
    case "/website-maintenance-services":
    case "/website-maintenance-services/":
    case "/maintenance": 
    case "/maintenance/":
    case "/site-care":
    case "/site-care/":
        $main_title = "Website Maintenance That Actually Works";
        $site_title = "Website Maintenance That Actually Works";
        $meta_keywords = "
        website maintenance, web care packages, all-inclusive web services, affordable website support, Livengood Websites, comprehensive website care, website security, performance optimization, SEO monitoring, content updates, emergency web support, professional web maintenance
        ";
        $meta_description = "Explore Livengood Websites' All-inclusive Website Maintenance Packages. Offering seamless, comprehensive, and affordable care for your online presence. Get top-notch website security, performance optimization, SEO, content updates, and emergency support. Perfect for businesses seeking reliable web maintenance.";
        $intro = "We keep your site running. You keep crushing business goals.";
        $hero_main_img = "site-care-bg";
        $hero_main_bg = "website-maintenance";
        break;
        // Blog post pages
        case "/worlds-longest-css": 
           $main_title = "The Website with the World's Longest CSS File: A Developer's Tale of Epic Proportions"; 
           $intro = "A wild journey through 2.3 trillion lines of CSS, three-hour load times, and the ultimate test of a developer's patience."; 
           $meta_keywords = "web development, CSS, coding humor, developer challenges, funny coding stories, extreme web design, programming humor";
           $meta_description = "Discover the hilarious tale of a developer who created a CSS file with over 2.3 trillion lines of code and the outrageous challenges that followed."; 
            $post_image = "frustrated-developer-staring-at-a-computer-screen.webp";
            $alt_text = strlen($meta_description) > 125 ? substr($meta_description, 0, 122) . '...' : $meta_description;
            break;
        case "/gemini-vs-chatgtp":
            $main_title = "Demystifying Gemini and ChatGPT:";
            $intro = "A Comparison of Features and Pricing";
            $site_title = "Gemini vs. ChatGPT: A Comprehensive Comparison of AI Chatbots"; 
            $meta_keywords = "bard, gemini, bard google, ai, bard ai, chat gtp, gemini vs chatgpt, Gemini AI, ChatGPT, AI chatbot comparison, Language models, Google AI, OpenAI, Gemini free vs. paid, ChatGPT free vs. paid, AI features, AI pricing, Text generation, Multi-modal AI, Conversational AI"; 
            $meta_description = "Explore the key differences between Google's Gemini and OpenAI's ChatGPT, including features, pricing, and which AI chatbot is right for you.";
            $hero_main_img = "chat-bots";
            break;
        case "/desert-mirage":
        case "/desert-mirage/": 
            $main_title = "The Desert Mirage";
            $site_title = "The Desert Mirage";
            $intro = "An unoptimized site can make conversions as elusive as a mirage in the desert.";
            $hero_main_img = "desert-mirage";
        break;
        case "/garden-vs-website":
        case "/garden-vs-website/": 
                $main_title = "Digital Gardening: Cultivating Growth and Vitality in Website Maintenance";
                $intro = "Harmonizing Nature and Technology for Online Success";
                $meta_keywords = "Digital Gardening
                ,Website Maintenance
                ,Online Growth
                ,Website Vitality
                ,Technology and Nature
                ,Website Health
                ,User Experience Enhancement
                ,Security Measures
                ,Content Updates
                ,SEO Optimization
                ,Digital Cultivation
                ,Web Development Strategies
                ,User Engagement
                ,Site Performance"; 
                $meta_description = "Explore the art of 'Digital Gardening' and unlock the secrets to a thriving online presence.";
                $hero_main_img = "garden-bg"; 
                break;
        case "/effective-website-maintenance":
        case "/effective-website-maintenance/":
           $main_title = "10 Essential tips to help you maintain a website that shines";
           $intro = "Tips for Effective Website Maintenance";
           $hero_main_img = "site-care-bg"; 
           $meta_keywords = "website maintenance, web development, SEO, user experience, security, responsive design";
           $meta_description = "Learn 10 essential tips for maintaining your website effectively, whether you use custom HTML and CSS, Elementor Pro for WordPress, or any other platform.";
           $canonical = "https://livengoodwebsites.com/effective-website-maintenance";
           $site_title = "10 Essential Tips for Effective Website Maintenance";
        break;
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
        $hero_main_img = "digital-bg";
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
        $hero_main_img = "food-bg";
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
        $main_title = "Livengood Websites Testimonials";
        $intro = "Hear from Satisfied Clients";
        $meta_description = "Explore testimonials from happy clients of Livengood Websites. Discover how our services have benefited businesses like yours.";
        $meta_keywords = "Web design testimonials, client reviews, customer feedback, website development success stories";
        $hero_main_img = "testimonial-hero-bg";
        $hero_main_bg = "testimonials";
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
        $hero_main_img = "contact-bg";
        $hero_main_bg = "contact";
        break;
        // promo offer
    case "/pricing":
    case "/pricing/":
        $main_title = "Beyond the Price Tag: Strategic Partnerships";
        $meta_keywords = "web development pricing, professional website design for start up business, small business website, mobile-friendly website, user-friendly design, web development offer, affordable web design, website pricing, web designer near Statesville, NC";
        $meta_description = "Get pricing for your website and we will work within your budget. Get online fast within the next week for under $500!";
        $site_title = "Beyond the Price Tag: Strategic Partnerships";
        $intro = "Website Design & Revamp Services";
        $hero_main_img = "pay";
        break;
    case "/marketing":
    case "/marketing/":
        $site_title = "Social Media Marketing Subscription"; 
        $main_title = "Unlock Exclusive Marketing Packages";
        $intro = "Limited-Time Discounts to Elevate Your Brand!";
        $meta_description = "Affordable social media marketing subscriptions to grow your business. Choose from our Basic, Advanced, or More Advanced plans with AI-generated content and videos.";
        $meta_keywords = "social media marketing, marketing subscription, AI-generated content, social media posts, business marketing, content creation, AI images, AI videos, marketing plans";
        
        $hero_main_bg = "marketing";
        break;
    case "/pay":
            $site_title = "Make a payment"; 
            $main_title = "Make a payment";
            $hero_main_img = "pay";
            $hero_main_bg = "pay-bg";
            break;
        // Page not found
    default:
        $main_title = "404";
        $intro = "OOOps that page doesn't exist!";
        $hero_main_img = "pageError";
        $hero_main_bg = "error";
};
if ($page === "/site-map.xml" || $page === "/sitemap.xml") {
    include 'sitemap.xml';
    return;
}
if ($page === "/robots.txt") {
    include 'robots.txt';
    return;
}
if ($page === "/files") {
    include 'files.html';
    return;
}

include "template.php";
