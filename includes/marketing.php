<div class="social-introduction">
  <img src="/assets/imgs/hero/social.webp" alt="">
  <div>
    <h4>Introduction to Our Social Media Posting Services</h4>
    <p>In today's digital landscape, maintaining a consistent and engaging social media presence is crucial for business growth. Our social media marketing services offer a streamlined solution to help businesses stay active and relevant on major platforms without requiring daily management. With our expertly crafted posts, we handle everything from content creation to strategic posting, allowing you to focus on other essential aspects of your business.</p>

    <details class="social-details">
      <summary>How We Create Your Social Media Posts</summary>

      <div class="social-how-to">
        <ul>
          <li><strong>Daily Content Creation</strong>: Daily posting to fit your brand and platform needs.</li>
          <li><strong>Visual Elements</strong>: High-quality images and videos, provided by you or created by us.</li>
          <li><strong>Targeted Messaging</strong>: Posts aligned with your business goals to drive engagement and sales.</li>
          <li><strong>Scheduling & Automation</strong>: Posts are scheduled at optimal times for maximum visibility.</li>
        </ul>
      </div>
    </details>

    <details class="social-details">
      <summary>Exclusive Offers</summary>
      <div class="social-how-to">
        <ul>
          <li><strong>Highly Converting Landing Page</strong>: A professionally designed page to capture leads or drive sales, provided as a complimentary bonus.</li>
          <li><strong>Custom Video Creation</strong>: A promotional video to highlight your business’s services, included in select packages</li>
        </ul>
      </div>
    </details>
  </div>

</div>
<div class="narrow-section" id="marketing-cost">
  <p>By partnering with us for your social media marketing, you ensure your business stays competitive in the digital age, all while freeing up your time and resources for what truly matters—running your business.</p>
</div>
<section class="gradient-lite py-4">
  <div class="social-container">
    <h3>Act Fast! These Exclusive Offers Won't Last Long!</h3>
    <div class="social-pricing-table">
      <!-- Starter Social Boost Plan -->
      <div class="social-pricing-plan">
        <h4>Starter Social Boost</h4>
        <p>Setup Fee: $150</p>
        <p>Price: <strong>$375/month</strong></p>
        <ul class="checkmark-list">Includes:
          <li>Client provided content</li>
          <li>2 posts per day on up to five(5) platforms</li>
          <li>Complimentary Landing Page</li>
          <li>Guaranteed hits to your site: 300 per month!</li>
        </ul>

        <div id="paypal-button-container-starter" class="social-paypal-btn"></div>
      </div>

      <!-- Pro Content Growth Plan -->
      <div class="social-pricing-plan">
        <h4>Pro Content Growth</h4>
        <p>Setup Fee: $235</p>
        <p>Price: <strong>$575/month</strong></p>

        <ul class="checkmark-list">Includes:
          <li>2 posts per day on up to 10 platforms</li>
          <li>Complimentary Landing Page</li>
          <li>AI generated or custom content</li>
          <li>1 Custom Video</li>
          <li>Guaranteed hits to your site: 500 per month!</li>
        </ul>
        <div id="paypal-button-container-pro" class="social-paypal-btn"></div>
      </div>

      <!-- Elite Engagement Power Plan -->
      <div class="social-pricing-plan">
        <h4>Elite Engagement Power</h4>
        <p>Setup Fee: $325</p>
        <p>Price:<strong> $725/month</strong></p>
        <ul class="checkmark-list">Includes:
        <li>
  Optimal Posts on up to 20 platforms<span class="tooltip-icon" onclick="toggleTooltip()">?</span>

  <div id="tooltip-box" class="tooltip-content">
  Optimal Posts refer to the specific times and dates when your audience is most active, ensuring maximum engagement. The timing is tailored to achieve your desired outcome—whether that’s generating clicks, capturing leads, or driving sales.
  </div>
</li>
          <li>Complimentary Landing Page</li>
          <li>AI generated or custom content</li>
          <li>2 Custom Videos</li>
          <li>Guaranteed hits to your site: 1000 per month!</li>
        </ul>
        <div id="paypal-button-container-elite" class="social-paypal-btn"></div>
      </div>
    </div>

    <div class="extra-option">
      <h4>Campaign Costs Notice:</h4>
      <p>The prices listed cover only the management and creation of posts using the free posting features on each platform. If you choose to run paid ad campaigns or boost posts, you will need to pay the social media platform directly for those costs.</p>
      <p><strong>Optimal Posts:</strong> These are the specific times and dates when your audience is most active, maximizing engagement. The timing is customized to align with your desired outcome—whether it's generating clicks, capturing leads, or driving sales.</p>
      <p><strong>Disclaimer Clause:</strong>

While we strive to drive traffic to your website and maximize visibility, please be advised that we cannot guarantee specific sales or bookings resulting from this traffic. Our services are designed to enhance the likelihood of visitors reaching your site; however, the ultimate decisions and actions of these visitors are beyond our control. Any pricing or packages offered are strictly aimed at guaranteeing hits to your site, not ensuring conversions or sales outcomes.</p>
    </div>
  </div>
</section>

<script src="https://www.paypal.com/sdk/js?client-id=ASFckog96PWdT4SiKIvFcsSt55SRVMblkjZtjdsXJrY-0yUEbUpCe10BsDDFMnUrBNg_gek_7ZLZYZgp&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>

<script>
  // Starter Social Boost Plan PayPal Button
  paypal.Buttons({
    style: {
      shape: 'pill',
      color: 'gold',
      layout: 'vertical',
      label: 'subscribe'
    },
    createSubscription: function(data, actions) {
      return actions.subscription.create({
        plan_id: 'P-STARTER_PLAN_ID'
      });
    },
    onApprove: function(data, actions) {
      alert('Starter Social Boost Subscription ID: ' + data.subscriptionID);
    }
  }).render('#paypal-button-container-starter');

  // Pro Content Growth Plan PayPal Button
  paypal.Buttons({
    style: {
      shape: 'pill',
      color: 'gold',
      layout: 'vertical',
      label: 'subscribe'
    },
    createSubscription: function(data, actions) {
      return actions.subscription.create({
        plan_id: 'P-PRO_PLAN_ID'
      });
    },
    onApprove: function(data, actions) {
      alert('Pro Content Growth Subscription ID: ' + data.subscriptionID);
    }
  }).render('#paypal-button-container-pro');

  // Elite Engagement Power Plan PayPal Button
  paypal.Buttons({
    style: {
      shape: 'pill',
      color: 'gold',
      layout: 'vertical',
      label: 'subscribe'
    },
    createSubscription: function(data, actions) {
      return actions.subscription.create({
        plan_id: 'P-ELITE_PLAN_ID'
      });
    },
    onApprove: function(data, actions) {
      alert('Elite Engagement Power Subscription ID: ' + data.subscriptionID);
    }
  }).render('#paypal-button-container-elite');
</script>
<script>
  document.getElementById('play-button').addEventListener('click', function() {
    const videoIframe = document.getElementById('marketing-video');
    const newSrc = "https://www.youtube.com/embed/BhkYFjLHxfI?autoplay=1&controls=1&mute=0&start=0";

    // Update the iframe source to unmute and restart from the beginning
    videoIframe.src = newSrc;

    // Hide the play button after clicking
    this.style.display = 'none';
  });
</script>
<script>
  function toggleTooltip() {
    const tooltip = document.getElementById('tooltip-box');
    if (tooltip.style.display === 'none' || tooltip.style.display === '') {
      tooltip.style.display = 'block';
    } else {
      tooltip.style.display = 'none';
    }
  }
</script>