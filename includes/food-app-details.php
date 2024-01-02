<section>
  <div class="narrow-section">
    <h2>Introducing Our Integrated Digital Dining Ecosystem</h2>
    <p>Dive into a comprehensive visualization of our digital dining experience. This schematic provides a detailed overview, from order placements using various platforms to the intricate back-end processes that ensure seamless order processing and delivery. Each component of our system, from mobile and desktop widgets to our dynamic core logic, works in harmony to deliver an unparalleled experience for both restaurant owners and diners. To get a closer look and explore each element in detail, click the image below to view a larger image.</p>
    <hr>

    <img width="500" id="foodAppImg" class="food-app-img" src="/assets/imgs/food-app-details.jpeg" alt="online food ordering app development" title="view larger image">
    <!-- The Modal -->
    <div id="foodAppModal" class="food-modal">
      <span class="close">&times;</span>
      <img id="foodAppModalImg" width="90vw" height="100%" class="modal-content" src="/assets/imgs/food-app-details.jpeg">
      <div id="foodAppCaption"></div>
    </div>
</section>
<section class="bg">
  <div class="narrow-section">

    <div class="custom-btn">
      <a href="/request-service">Request a quote</a>
    </div>
  </div>
  </div>
</section>
<div class="page">
  <article>
    <div class="custom-section">
      <div id="title">
        <h3 class="text-center">Has this happened to you?</h3>
        <hr>
      </div>
      <div id="disc">
        <p>This video offers a glimpse into how numerous restaurants tackle the challenge of online ordering.</p>
        <p>With Livengood Websites, you gain access to an intuitive app that allows you to promptly accept or decline incoming orders and communicate the expected delivery time to your customers.</p>
        <p>Process payments directly through your app or website <strong>WITHOUT incurring any fees</strong>. Every penny you earn remains with you!</p>

      </div>
      <div id="img">
        <iframe class="vid" src="https://www.youtube.com/embed/F4tLYlqfFGg" title="restaurant ordering solution" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </article>
</div>
<!-- main section 2  -->
<section class="bg">
  <div class="page">
    <article>
      <div class="custom-section-reverse">
        <div id="img">
          <iframe class="vid" src="https://www.youtube.com/embed/CEk0Fv8xxI0" title="online ordering demo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div id="title">
          <h4>See It in Action!</h4>
          <hr>
        </div>
        <div id="disc">
          <p>
            This short video showcases the customer's perspective while placing an order and illustrates what you'll experience on your side when an order is placed.
            Your customers can place orders through your website, Facebook page, and mobile app.
          </p>
          <p>
            Additionally, they can also reserve a table using both your website and mobile app.
          </p>
        </div>
      </div>
    </article>
  </div>
</section>
<section class="page">
  <article>
  <div class="custom-section">
      <div id="title">
        <h4>Unlock a Professional Website at Zero Additional Cost!</h4>
        <hr>
      </div>
      <div id="disc">
        <p>Elevate your online presence with our Sales Optimized Website service. Not only is it crafted for online sales to boost traffic and conversions by up to 300%, but you also receive a top-tier website absolutely FREE when you choose our service!</p>
        <div>
          <ul>
            <li>Online ordering seamlessly integrated</li>
            <li>Best performance on desktop, mobile and tablet</li>
            <li>SEO tuning - Ensure your site is easily discoverable on Google and Bing</li>
          </ul>
        </div>
      </div>
      <div id="img">
        <img width="300" class="img-thumbnail my-4" loading="lazy" src="/assets/imgs/optimized-restaurant-website.png" alt="Online restaurant website template">
        <p class="my-4">Want a sneak peek? <a target="_blank" rel="nofollow noreferral" href="https://www.pronto-ny.com/">Check out a demo site here</a>.</p>
        <div class="custom-btn">
          <a href="/request-service">Request a quote</a>
        </div>
      </div>
    </div>

  </article>
</section>
<script>
  var modal = document.getElementById('foodAppModal');
  var img = document.getElementById('foodAppImg');
  var modalImg = document.getElementById('foodAppModalImg');
  var captionText = document.getElementById('foodAppCaption');
  var span = document.getElementsByClassName('close')[0];

  img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  span.onclick = function() {
    modal.style.display = "none";
  }

  modal.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>