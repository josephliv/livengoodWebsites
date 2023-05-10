 <!-- ================================= 
      | Top part with phone, email and social links |
          ====================================  -->

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
 <div class="header-section">
     <div class="brand">
         <a href="/">
             <img src="/assets/imgs/Livengood-p1.webp" alt="Livengood Websites">
         </a>
     </div>
     <div class="">
         <h1 class="my-3"><?= $header_text; ?></h1>
         <div class="hero-buttons">
                 <div class="btn btn-outline-dark">
                     <script type="text/javascript" defer src="https://form.123formbuilder.com/embed/6306291.js?type=lightbox" data-role="form" data-default-width="750px" data-embed-type="lightbox-text-link" 
                     data-embed-text-link="Get In Touch"></script>
                 </div>
             <div class="btn btn-outline-dark">
                <a  href="<?php if($page != '/') echo 'https://livengoodwebsites.com'; ?>/#reviews">Reviews</a>
             </div>
         </div>
     </div>
 </div>