<div class="narrow-section">
  <p>
    Welcome to North Carolina's one-stop solution for standout website design and development. Unlike typical web design companies in North Carolina, I offer a personal touch, ensuring every project aligns perfectly with your vision.
  </p>
  <p>
    As an independent expert in web development in North Carolina, my services span from bespoke websites to specialized online <a href="/food-app">food ordering</a> app development. My reputation is built on delivering quality, be it as a web design company in North Carolina and nation-wide or when providing top-tier website hosting and <a href="/website-maintenance-services"> maintenance services.</a> </p>

</div>
<section class="home-section-maintenance">
  <div class="home-section-maintenance-inner">
    <div class="container">
      <h4>Personalized web design and maintenance.</h4>
      <hr>
      <p>
        At Livengood Websites, we specialize in crafting personalized websites tailored exclusively for you. Our sleek and mobile-friendly designs ensure your digital presence shines on all devices. With a focus on modern aesthetics, user-centricity, and seamless maintenance, we're committed to elevating your brand online. Contact us today to bring your unique web vision to life.
      </p>
    </div>
  </div>
</section>
<div class="container py-5">
  <div class="expect-area">
    <details>
      <summary title="click to show details">Fortify Your Online Presence.</summary>
      <div>
        <p>In the modern digital landscape, a resilient and updated website is essential. With our premium maintenance services, ensure your site's optimal performance and security. Dive into the specifics on our <a href="/website-maintenance-services">maintenance services</a> page.</p>
      </div>
    </details>
    <details>
      <summary>Save Time and Focus on Your Business.</summary>
      <div>
        <p>Leave the technicalities to us. While we manage your site's intricacies, you can concentrate on your core business operations.</p>
      </div>
    </details>
    <details>
      <summary>Boost Your Website's Performance.</summary>
      <div>
        <p>Benefit from our routine updates that optimize speed, responsiveness, and overall functionality.</p>
      </div>
    </details>
    <details>
      <summary>Superior VPS Hosting.</summary>
      <div>
        <p>Experience the advantages of high-performance VPS hosting, a robust alternative to standard shared hosting.</p>
      </div>
    </details>
  </div>
</div>



<section class="home-section-seo" id="seo">
  <div class="home-section-seo-inner">
    <div class="container">
      <h4>Targeted seo strategies.</h4>
      <hr>
      <div>
        <p>
          SEO is crucial in today's digital landscape, and as your dedicated SEO company in North Carolina, I'm committed to optimizing your online presence. My search optimization agency approach ensures you're not just another website online but a prominent player in search results. We will working together using the best <a href="/seo-strategies/"> SEO strategies</a> to drive organic traffic to your site, bringing in quality leads.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="testimonial-area gradient-lite pt-5" id="reviews">
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
  function closePromo() {
    promo.style.display = 'none';
    clearInterval(showit);
  }
</script>
<script>
  const detailsElements = document.getElementsByTagName('details');

  for (let element of detailsElements) {
    element.addEventListener('toggle', function() {
      if (this.open) {
        // Close other open details elements
        for (let otherElement of detailsElements) {
          if (otherElement !== this && otherElement.open) {
            otherElement.open = false;
          }
        }
      
      }
    });
  }
</script>