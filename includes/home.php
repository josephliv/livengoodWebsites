<section>
  <div class="narrow-section">
    <p>
    We specialize in providing a range of services that can help streamline and grow your business, no matter what industry you're in. Our services cover all aspects of website design, <a href="/site-care">maintenance</a> and <a href="#seo"> search engine optimization</a> (SEO) to ensure your online presence is top-notch.  </p>
    <p>
    We also offer a cutting-edge <a href="/food-app">food ordering app</a> for seamless online ordering and delivery management for your restaurant.
    </p>
    <p>
    Plus, we can assist you with funding options to support your <a href="/business-boosters">business growth</a>. Contact us today to see how we can help take your business to the next level.
    </p>
  </div>
  </div>
</section>
<!-- <div class="promo">
  <div class="promo-inner">
    <div class="close-promo" id="close-promo" onclick="closePromo()">×</div>
    <h3>Get a <strong>FREE</strong> Website analysis!</h3>
    <p>SEO audit, test website speed and more. <span>100% free</span></p>
    <div class="custom-btn text-center mx-2">
     
      <script type="text/javascript" defer src="https://form.123formbuilder.com/embed/6306291.js?type=lightbox" data-role="form" data-default-width="750px" data-embed-type="lightbox-text-link" data-embed-text-link="Contact Us For the Details"></script>
      
    </div>
  </div>
</div>   -->

<section class="bg">
  <div class="custom-section">
    <img loading="lazy" class="img-thumbnail" src="/assets/imgs/website-platforms.jpg" alt="personlized web design">
    <div>
      <h4>Personalized web design and maintenance.</h4>

      <p>
        Our website design service provides sleek and modern designs that are optimized for both desktop and mobile devices.
      </p>
    </div>
  </div>
</section>
<section>
  <div class="custom-section">
    <div class="">
      <h4>Secure and Maintain Your Online Presence.</h4>

      <p>
        Keep your website secure and up-to-date with our reliable and affordable maintenance services.
      </p>
    </div>

    <div class="expect-area">
      <details>
        <summary title="click to show details">Stay protected.</summary>
        <div>
          <p>
            Our maintenance services ensure that your website is secure, protected from hacks and malware attacks, and regularly updated with security patches when needed.
          </p>
        </div>
      </details>
      <details>
        <summary>Save time and effort.</summary>
        <div>
          <p>
            We take care of all the technical details, so you don't have to worry about them. You can focus on your business while we maintain your online presence.
          </p>
        </div>
      </details>
      <details>
        <summary>Increase website performance.</summary>
        <div>
          <p>
            Our monthly maintenance and updates ensure that your website is optimized for speed, responsive design, and functionality.
          </p>
        </div>
      </details>
      <details>
        <summary>VPS hosting</summary>
        <div>
          <p>
            Your website will be placed on a high-performing VPS hosting which is far more secure than the normal shared hosting.
          </p>
        </div>
      </details>
    </div>
  </div>
</section>
<section class="bg" id="seo">
  <div class="custom-section" style="position: relative;">
    <div>
      <h4>Targeted seo strategies.</h4>

      <p>
        We use advanced optimization techniques to ensure your website ranks higher on search engines. Our <a href="/seo-strategies/"> SEO strategies</a> drive organic traffic to your site, bringing in quality leads.
      </p>
      <div class="custom-btn">
      <script type="text/javascript" defer src="https://form.123formbuilder.com/embed/6306291.js?type=lightbox" data-role="form" data-default-width="750px" data-embed-type="lightbox-text-link" data-embed-text-link="Request A Free Website Analysis"></script>
      </div>
    </div>
    <img loading="lazy" class="img-thumbnail" src="/assets/imgs/targeted-seo-strategies.jpeg" alt="targeted seo strategies">
  </div>
</section>
<section>
  <div class="custom-section">
    <img loading="lazy" class="img-thumbnail" src="/assets/imgs/meature-and-improve.jpeg" alt="Measure And Improve">
    <div>
      <h4>Measure And Improve.</h4>
      <p>
        We track and analyze how your website is performing, and suggest ways to improve its performance. You'll receive regular reports that cover everything from traffic analysis to conversion rates.
      </p>
    </div>

  </div>
</section>
<section class="gradient" id="reviews">
  <?php include 'includes/sections/testimonials.php'; ?>
</section>
<script>
  // defined the promo div element
  const promo = document.querySelector('.promo');
  // function to run on page load to show the promo after 2.5 seconds and put it into a varable to target upon close
let showit = setInterval(function() {
    promo.style.display = "block";
  }, 3500);
  
document.addEventListener('DOMContentLoaded', showit);

  // to close the promo box and clear the interval or it keeps opening back up. 
function closePromo ()
{
  promo.style.display = 'none';
  clearInterval(showit);
}
</script>