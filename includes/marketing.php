<div class="social-introduction">
  <h3>Introduction to Our Social Media Posting Services</h3>
  <p>In today's digital landscape, maintaining a consistent and engaging social media presence is crucial for business growth. Our social media marketing services offer a streamlined solution to help businesses stay active and relevant on major platforms without requiring daily management. With our expertly crafted posts, we handle everything from content creation to strategic posting, allowing you to focus on other essential aspects of your business.</p>

  <details class="social-details">
    <summary>How We Create Your Social Media Posts</summary>

    <div class="social-how-to">
      <ul>
        <li><strong>Daily Content Creation</strong>: 1-2 posts per day, tailored using AI to fit your brand and platform needs.</li>
        <li><strong>Visual Elements</strong>: High-quality images and videos, provided by you or generated via AI.</li>
        <li><strong>Targeted Messaging</strong>: Posts are aligned with your business goals to drive engagement.</li>
        <li><strong>Scheduling & Automation</strong>: Posts are scheduled at optimal times for maximum visibility.</li>
      </ul>
    </div>
  </details>
  <details class="social-details">
    <summary>Key Benefits to Your Business</summary>
    <div class="social-how-to">
      <ul>
        <li><strong>Time-Saving</strong>: Free up time by outsourcing daily social media tasks.</li>
        <li><strong>Consistency</strong>: Ensure regular posting to keep your audience engaged.</li>
        <li><strong>Improved Engagement</strong>: Our posts boost interactions like likes, comments, and shares.</li>
        <li><strong>Brand Awareness</strong>: Build credibility with consistent, professional content.</li>
        <li><strong>Stress-Free</strong>: We handle content creation, so you don't have to worry about what to post.</li>
        <li><strong>Scalable</strong>: As your business grows, we can increase posts and add platforms.</li>
      </ul>
    </div>

  </details>

  <p>By partnering with us for your social media marketing, you ensure your business stays competitive in the digital age, all while freeing up your time and resources for what truly matters—running your business.</p>
</div>

<section class="gradient-lite py-4">
  <div class="social-container">

    <div class="social-pricing-table">
      <!-- Starter Social Boost Plan -->
      <div class="social-pricing-plan">
        <h4>Starter Social Boost</h4>
        <p>Setup Fee: $150</p>
        <p>Price: normally <strong>$345/month</strong> now only <span class="social-price">$275/month</span></p>
        <p class="limited-time">Limited Time Only!</p>
        <p>1 post per day on social media</p>
        <p>Client provides all content (text, images & videos)</p>
        <div id="paypal-button-container-starter" class="social-paypal-btn"></div>
      </div>

      <!-- Pro Content Growth Plan -->
      <div class="social-pricing-plan">
        <h4>Pro Content Growth</h4>
        <p>Setup Fee: $235</p>
        <p>Price: normally <strong>$525/month</strong> now only <span class="social-price">$375/month</span></p>
        <p class="limited-time">Limited Time Only!</p>
        <p>1 post per day on social media</p>
        <p>Content created using AI, including images (videos provided by client)</p>
        <div id="paypal-button-container-pro" class="social-paypal-btn"></div>
      </div>

      <!-- Elite Engagement Power Plan -->
      <div class="social-pricing-plan">
        <h4>Elite Engagement Power</h4>
        <p>Setup Fee: $325</p>
        <p>Price: normally <strong>$685/month</strong> now only <span class="social-price">$450/month</span></p>
        <p class="limited-time">Limited Time Only!</p>
        <p>2 posts per day on social media</p>
        <p>Content and videos are provided</p>
        <div id="paypal-button-container-elite" class="social-paypal-btn"></div>
      </div>
    </div>

    <div class="extra-option">
      <h4>Campaign Costs Notice:</h4>
      <p>The prices listed cover only the management and creation of posts using the free posting features on each platform. If you choose to run paid ad campaigns or boost posts, you will need to pay the social media platform directly for those costs.</p>
    </div>
  </div>
</section>
<script src="https://www.paypal.com/sdk/js?client-id=ASFckog96PWdT4SiKIvFcsSt55SRVMblkjZtjdsXJrY-0yUEbUpCe10BsDDFMnUrBNg_gek_7ZLZYZgp&vault=true&intent=subscription" data-sdk-integration-source="button-factory">
</script>

<script>
  // Starter Social Boost Plan PayPal Button
  paypal.Buttons({
    style: {
      shape: 'pill',
      color: 'black',
      layout: 'vertical',
      label: 'subscribe'
    },
    createSubscription: function(data, actions) {
      return actions.subscription.create({
        plan_id: 'P-STARTER_PLAN_ID' // Replace with your actual Starter plan ID
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
      color: 'black',
      layout: 'vertical',
      label: 'subscribe'
    },
    createSubscription: function(data, actions) {
      return actions.subscription.create({
        plan_id: 'P-PRO_PLAN_ID' // Replace with your actual Pro plan ID
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
      color: 'black',
      layout: 'vertical',
      label: 'subscribe'
    },
    createSubscription: function(data, actions) {
      return actions.subscription.create({
        plan_id: 'P-ELITE_PLAN_ID' // Replace with your actual Elite plan ID
      });
    },
    onApprove: function(data, actions) {
      alert('Elite Engagement Power Subscription ID: ' + data.subscriptionID);
    }
  }).render('#paypal-button-container-elite');
</script>

</body>

</html>