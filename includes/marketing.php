<div class="social-introduction">
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

  <p>By partnering with us for your social media marketing, you ensure your business stays competitive in the digital age, all while freeing up your time and resources for what truly matters—running your business.</p>
</div>

<section class="gradient-lite py-4">
  <div class="social-container">
  <h3>Act Fast! These Exclusive Offers Won't Last Long!</h3>
    <div class="social-pricing-table">
      <!-- Starter Social Boost Plan -->
      <div class="social-pricing-plan">
        <h4>Starter Social Boost</h4>
        <p>Setup Fee: $199</p>
        <p>Price: <s>$397</s> Now only <strong>$275/month</strong></p>
        <ul class="checkmark-list">Includes:
          <li>2 posts per day on up to five(5) platforms</li>
          <li>Complimentary Landing Page</li>
        </ul>
        
        <div id="paypal-button-container-starter" class="social-paypal-btn"></div>
      </div>

      <!-- Pro Content Growth Plan -->
      <div class="social-pricing-plan">
        <h4>Pro Content Growth</h4>
        <p>Setup Fee: $297</p>
        <p>Price: <s>$597</s> now only <strong>$475/month</strong></p>

        <ul class="checkmark-list">Includes:
          <li>3 posts per day on up to 10 platforms</li>
          <li>Complimentary Landing Page</li>
          <li>1 Custom Video</li>
        </ul>
        <div id="paypal-button-container-pro" class="social-paypal-btn"></div>
      </div>

      <!-- Elite Engagement Power Plan -->
      <div class="social-pricing-plan">
        <h4>Elite Engagement Power</h4>
        <p>Setup Fee: $397</p>
        <p>Price: <s>$797</s> now only <strong>$625/month</strong></p>
        <ul class="checkmark-list">Includes:
          <li>3 posts per day on up to 20 platforms</li>
          <li>Complimentary Landing Page</li>
          <li>2 Custom Videos</li>
        </ul>
        <div id="paypal-button-container-elite" class="social-paypal-btn"></div>
      </div>
    </div>

    <div class="extra-option">
      <h4>Campaign Costs Notice:</h4>
      <p>The prices listed cover only the management and creation of posts using the free posting features on each platform. If you choose to run paid ad campaigns or boost posts, you will need to pay the social media platform directly for those costs.</p>
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