 <!-- ================================= 
      | Top part with phone, email and social links |
          ====================================  -->
 <header id="header" class="header">
     <div class="video-background-wrapper">
         <video playsinline="playsinline" muted="muted" loop="loop"
           id="backgroundVideo">
             <source src="/assets/video/matrix_-_5581.mp4" type="video/mp4">
         </video>
         <div class="video-content">
         <div class="top-bar bg-gradient">
             <div class="top-bar-inner">

                 <div class="phone">
                     <a href="tel:13369411203">
                         <img src="/assets/imgs/icons/png-files/phone.png" alt="Phone: ">&nbsp; 1 (336) 941-1203</a>
                 </div>
                 <div class="email">
                     <a href="mailto:joe@joes.business">
                         <img src="/assets/imgs/icons/png-files/envelope.png" alt="Email: ">&nbsp;
                         joe@joes.business</a>
                 </div>
                 <!-- Social Links -->
                 <?= $social_links; ?>
                 <div id="nav" class="menu-items-container ">
                     <?php include "nav.php"; ?>
                 </div>
             </div>
             </div>
         </div>
         <div class="branding">
         <div class="hero-section">
             <div class="brand">
                 <a href="/">
                     <img src="/assets/imgs/Livengood-p1.webp" alt="Livengood Websites">
                 </a>
             </div>
             <div class="cta-btns">
                 <h1 class="my-3"><?= $header_text; ?></h1>
                 <div class="hero-buttons">
                     <div class="btn btn-outline-dark">
                         <a <?= $externalLinks; ?> href="https://calendly.com/livengoodwebsites/30min">Book a Call</a>
                     </div>
                     <div class="btn btn-outline-dark">
                         <a href="<?php if ($page != '/') echo 'https://livengoodwebsites.com'; ?>/#reviews">Reviews</a>
                     </div>
                 </div>
             </div>
             
         </div>
        </div>
        
     </div>
     <!-- Display the dynamic title and sub title -->
     <div class="title-section">
             <?php include 'includes/sections/title-section.php'; ?>
         </div>
 </header>