<div class="narrow-section">
  <h4>Thank you for visiting our website!</h4>
  <hr>
  <p>
  At Livengood Websites, we're not just another web development company in North Carolina. Here, it's more than just business; it's about a passion for creating something meaningful and lasting. Inspired by the principle of working "as unto the Lord" (Colossians 3:23), each project is handled with care, dedication, and a commitment to excellence.</p>


  <p>
  As an independent specialist in web development, I understand the importance of a personal touch. Whether it's crafting a custom website or developing a specialized online <a href="/food-app">food ordering</a> app for a restaurant, I approach each project with the aim of perfectly aligning with your vision.
  </p>
</div>
<section>
<div style="width: 100%; border-bottom: 1px groove #ccc;"></div>
<div class="page">
    <article>
      <div class="custom-section-reverse">
        <h4 id="title">Highly Recommended on Alignable</h4>
        <div id="disc">
    <p>
  Being recommended on Alignable is a testament to the trust and satisfaction of those I've had the pleasure of working with. I invite you to join this journey, where your website isn't just built, but is crafted with intention, skill, and a spirit of service.
  </p>
        </div>
  <div id="img">
    
  <a <?= $externalLinks; ?> href="https://www.alignable.com/mocksville-nc/livengood-websites-2"><img alt="Highly Recommended by Locals On Alignable" width="280px" title="Highly Recommended by Locals On Alignable" src="https://www.alignable.com/assets/badge/highly-recommended.png" /></a>

  </div>
  
  </div>
    </article>
</div>
</section>


<section class="home-section-maintenance">
  <div class="home-section-maintenance-inner">
    <div class="container maintenance-content">
      <h4>Personalized web design and maintenance.</h4>
      <hr>
      <p>My services extend beyond just design and development. I offer comprehensive website hosting and
      <a href="/website-maintenance-services"> maintenance services</a>, ensuring your digital presence is reliable and impactful. </p>
      <p>
      
      Importantly, my maintenance services are available even for websites that were not originally built by me. Clients can engage my expertise for their existing websites, with no need for a rebuild or a binding long-term contract. I provide this service for a straightforward monthly flat fee, making it an accessible and hassle-free solution for maintaining your site's performance, content updates and security.
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
    <div class="container seo-content">
      <h4>Targeted seo strategies.</h4>
      <hr>
      <div>
        <p>
          SEO is crucial in today's digital landscape, and as your dedicated SEO company in North Carolina, I'm committed to optimizing your online presence. My search optimization agency approach ensures you're not just another website online but a prominent player in search results. We will working together using the best <a href="/seo-strategies/"> SEO strategies</a> to drive organic traffic to your site, bringing in quality leads.
        </p>
        <p class="verse">"Commit to the Lord whatever you do, and he will establish your plans." - Proverbs 16:3 (NKJV)</p>
      </div>
    </div>
  </div>
</section>

<section class="testimonial-area gradient-lite pt-5" id="reviews">
  <?php include 'includes/sections/testimonials.php'; ?>
</section>

<div class="promo-div">
  <div class="promo-div-inner text-center">
    <div class="close-promo" id="close-promo">×</div>
    <h3>Stay Ahead:</h3>
    <p>Subscribe for Exclusive Insights!</p>
    <?php include 'includes/opt-in-form.php'; ?>
  </div>
</div>
</div>
<button class="toggle-promo" id="toggleButton">Stay Ahead!</button>

<script>
  const promo = document.querySelector('.promo-div');
  const closePromox = document.getElementById('close-promo');
  const toggleButton = document.getElementById('toggleButton');

  function togglePromo() {
    promo.classList.toggle('closed');
  }

  toggleButton.addEventListener('click', togglePromo);
  closePromox.addEventListener('click', togglePromo);
</script>
