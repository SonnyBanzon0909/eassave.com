<?php
$root = $_SERVER['DOCUMENT_ROOT'];

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}



// Using absolute path to call the configuration file
require_once '../private/config.php';  // Goes one folder above and accesses the 'private' folder

// Check if user is remembered
include '../private/login-session.php'; 


// Example: Database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}







?>


<!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="665f147b743ba95cae446d19" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Privacy Policy | Eassave</title>
  <meta content="Privacy Policy | Eassave" property="og:title">
  <meta content="Privacy Policy | Eassave" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/eassave-v2.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Epilogue:300,regular,500,600,700,900","Inter:100,200,300,regular,500,600,700,800,900"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>
<body>
  <div class="page-wrapper">
    <div class="main-wrapper">

     <!-- Navigation -->
     <?php include 'partials/global-css.css'; ?>

     <!-- Navigation -->
     <?php include 'partials/navigation-dark.html'; ?>


     <section class="section-moving-header">
      <div class="header-moving-wrapper">
        <div class="moving-container">
          <h1 class="header-text opacity-3">Privacy Policy</h1><img src="images/moving-element.svg" loading="lazy" alt="">
          <h1 class="header-text">Privacy Policy</h1><img src="images/moving-element.svg" loading="lazy" alt="">
          <h1 class="header-text opacity-3">Privacy Policy</h1>
        </div>
        <div class="moving-container">
          <h1 class="header-text">Privacy Policy</h1><img src="images/moving-element.svg" loading="lazy" alt="">
          <h1 class="header-text opacity-3">Privacy Policy</h1><img src="images/moving-element.svg" loading="lazy" alt="">
          <h1 class="header-text">Privacy Policy</h1>
        </div>
      </div>
    </section>
    <section class="section-content">
      <div class="padding-global">
        <div class="container-large">
          <div class="content-wrapper">
            <div class="text-rich-text w-richtext">
              <h5><strong>PRIVACY POLICY</strong></h5>
              <p>Last Updated: February 13, 2025</p>
             
               <p>Eassave values your privacy. This Privacy Policy explains how we collect, use, and protect your information.</p>

               <h6>1. <strong>Information We Collect</strong></h6>
               <ul>
                <li>Name, email, phone number</li>
                <li>IP address (for security and anti-spam)</li>
                <li>Payment details (processed via third-party payment gateways)</li>
                <li>Business card details (customized by users)</li>
              </ul>

              <h6>2. <strong>How We Collect Data</strong></h6>
              <ul>
                <li><strong>Forms:</strong> During account creation and purchases</li>
                <li><strong>Cookies & Sessions:</strong> To enhance user experience and security</li>
              </ul>

              <h6>3. <strong>Why We Collect Your Data</strong></h6>
              <ul>
                <li>To provide and operate our services</li>
                <li>For security measures (anti-spam, fraud prevention)</li>
                <li>To offer customer support</li>
                <li>To improve user experience</li>
              </ul>

              <h6>4. <strong>Sharing of Data</strong></h6>
              <ul>
                <li>We share data for <strong>payment processing</strong>.</li>
                <li>We also share data with <strong>social media platforms</strong>, as it is a part of our business model.</li>
                <li>In the future, we may integrate with third-party services (e.g., analytics, marketing, and business tools) while ensuring user consent.</li>
              </ul>

              <h6>5. <strong>Data Retention</strong></h6>
              <ul>
                <li>Your data is retained <strong>as long as your account is active</strong> or as required by law.</li>
              </ul>

              <h6>6. <strong>Security Measures</strong></h6>
              <ul>
                <li>Encryption for sensitive data</li>
                <li>Secure servers & firewalls</li>
                <li>CSRF and SQL injection protection</li>
                <li>Access control policies</li>
                <li>Regular security audits</li>
              </ul>

              <h6>7. <strong>User Rights</strong></h6>
              <ul>
                <li>You may <strong>access, update, or delete</strong> your data through your account settings.</li>
                <li>You may opt out of cookies.</li>
                <li>You may unsubscribe from marketing emails anytime.</li>
              </ul>

              <h6>8. <strong>Compliance with Laws</strong></h6>
              <ul>
                <li>We comply with applicable <strong>Philippine data protection laws</strong>.</li>
                <li>If future international laws (e.g., <strong>GDPR, CCPA</strong>) apply, we will update this policy accordingly.</li>
              </ul>

              <h6>9. <strong>Changes to this Privacy Policy</strong></h6>
              <ul>
                <li>We may update this Privacy Policy, and continued use of our services implies acceptance of changes.</li>
              </ul>

              <p>For inquiries, contact us at <strong><a href="mailto:support@eassave.com">support@eassave.com</a></strong>.</p>


            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-cta">
      <div class="padding-global">
        <div class="container-large">
          <div class="cta-wrapper">
            <div class="cta-content-wrapper">
              <div class="cta-title-wrapper">
                <h3>Get your card today!</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              </div>
              <div class="marquee-wrapper">
                <div class="marquee-con">
                  <div class="marqee-mover">
                    <div class="marquee-content">
                      <div>Next Level Networking</div><img src="images/dots.svg" loading="lazy" alt="">
                    </div>
                    <div class="marquee-content">
                      <div>Next Level Networking</div><img src="images/dots.svg" loading="lazy" alt="">
                    </div>
                    <div class="marquee-content">
                      <div>Next Level Networking</div><img src="images/dots.svg" loading="lazy" alt="">
                    </div>
                    <div class="marquee-content">
                      <div>Next Level Networking</div><img src="images/dots.svg" loading="lazy" alt="">
                    </div>
                    <div class="marquee-content">
                      <div>Next Level Networking</div><img src="images/dots.svg" loading="lazy" alt="">
                    </div>
                  </div>
                  <div class="marqee-mover">
                    <div class="marquee-content">
                      <div>Next Level Networking</div><img src="images/dots.svg" loading="lazy" alt="">
                    </div>
                    <div class="marquee-content">
                      <div>Next Level Networking</div><img src="images/dots.svg" loading="lazy" alt="">
                    </div>
                    <div class="marquee-content">
                      <div>Next Level Networking</div><img src="images/dots.svg" loading="lazy" alt="">
                    </div>
                    <div class="marquee-content">
                      <div>Next Level Networking</div><img src="images/dots.svg" loading="lazy" alt="">
                    </div>
                    <div class="marquee-content">
                      <div>Next Level Networking</div><img src="images/dots.svg" loading="lazy" alt="">
                    </div>
                  </div>
                </div>
                <a data-w-id="db1ea719-ecf5-b56e-1bc2-be1250eef991" href="#" class="button is-icon w-inline-block">
                  <div class="btn-text">Explore our shop</div>
                  <div class="icon-1x1-small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.32481 1.89973C5.86086 2.62911 7.23527 3.75138 9.13918 3.69086L1.16196 8.29651L1.44768 8.79138L9.42395 4.18628C8.42036 5.80457 8.70502 7.5554 9.06858 8.38414L9.59187 8.15458C9.19323 7.24586 8.893 4.99296 10.9407 3.33777L10.7588 3.11272L10.7351 3.07171L10.6311 2.80164C8.17386 3.74738 6.37291 2.36093 5.78526 1.56133L5.32481 1.89973Z" fill="white"></path>
                  </svg></div>
                  <div class="button-overlay pointer-events-off"></div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cta-line"></div>
    </section>


    <!-- Footer section -->
    <?php include 'partials/footer-light.html'; ?>


  </div>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=665f147b743ba95cae446cfe" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
// Get the current year
  var currentYear = new Date().getFullYear();
// Get the current year when the page loads
  $(document).ready(function() {
    $("#footer-note").text("Copyright © "+ currentYear +" Eassave. All Rights Reserved.");
  });
</script>
</body>
</html>