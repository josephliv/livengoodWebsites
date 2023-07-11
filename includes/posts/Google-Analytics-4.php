<section>
  <div class="narrow-section">
  ​<h3>Step 1: Create a new Google Analytics 4 property</h3>
 <ol>
  <li>Login to your Google Analytics account</li>
  <li>Click on the "Admin" tab</li>
  <li>In the second column "Property" click on "Create Property"</li>
  <li>Select "Web" or "App", depending on what you want to track</li>
  <li>Follow the prompts to enter the necessary information required, including the website or app name and URL</li>
 </ol>
 <h3>Step 2: Install the Google Analytics 4 Tracking Code</h3>
 <ol>
  <li>Find the "Measurement ID" located in the "Property" column of your newly created web or app property</li>
  <li>Add the following tracking code to your website or app:</li>
 </ol>
 <pre>
  <code>&lt;script async src="https://www.googletagmanager.com/gtag/js?id=MEASUREMENT_ID">&lt;/script&gt; 
  &lt;script&gt; 
    window.dataLayer = window.dataLayer || []; 
    function gtag(){dataLayer.push(arguments);} 
    gtag('js', new Date()); 
    gtag('config', 'MEASUREMENT_ID'); 
  &lt;/script&gt; 
  </code>
 </pre>
 <p>Replace "MEASUREMENT_ID" with your unique measurement ID.</p>
 <h3>Step 3: Set up Event Tracking</h3>
 <ol>
  <li>GA4 uses event-based tracking, which means that you need to define what constitutes as an event on your website or app</li>
  <li>Decide what events are important to track on your website or app, such as clicks on specific buttons or links, form submissions, or video plays</li>
  <li>Use the event parameters in GA4 to set up event tracking for each event</li>
 </ol>
 <h3>Step 4: Import Data from Existing Universal Analytics Property (Optional)</h3>
 <ol>
  <li>If you have an existing Universal Analytics property, you can import data from it into your new GA4 property</li>
  <li>Go to "Data Streams" under your property settings and click on "Set up data import"</li>
  <li>Choose the Universal Analytics property you want to import data from and select the views you want to import</li>
 </ol>
 <h3>Step 5: Test and Verify Data Collection</h3>
 <ol>
  <li>Use Google Analytics Debugging tools to test if the data is being collected properly</li>
  <li>Check that events are being tracked accurately and in the expected locations</li>
  <li>Verify that the events are appearing in your GA4 property in the correct reporting area</li>
 </ol>
 
  </div>
</section>
<section class="bg">
  <div class="narrow-section">
  <h4><strong>Congratulations! </strong>You have now successfully migrated to Google Analytics 4.</h4>
  <p>Remember to continue tracking and optimizing your website or app to improve performance, and if you need any assistance feel free to reach out.</p>
  </div>
</section>