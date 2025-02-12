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




// Redirect to /login if the user is not logged in
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] !== true) {
  header("Location: .../../auth/login.php");
  exit();
}


?>


<!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="665f147b743ba95cae446d1b" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <meta content="Contact" property="og:title">
  <meta content="Contact" property="twitter:title">
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
      <div class="global-styles w-embed">

       <!-- Global CSS -->
       <?php include 'partials/global-css.css'; ?>
     </div>


     <!-- Navigation -->
     <?php include 'partials/navigation-dark.html'; ?>


     <section class="section-header">
      <div class="padding-global">
        <div class="container-large">
          <div class="header-moving-wrapper absolute-header">
            <div class="moving-container">
              <h1 class="header-text opacity-3">Get in Touch</h1><img src="images/moving-element.svg" loading="lazy" alt="">
              <h1 class="header-text">Get in Touch</h1><img src="images/moving-element.svg" loading="lazy" alt="">
              <h1 class="header-text opacity-3">Get in Touch</h1>
            </div>
            <div class="moving-container">
              <h1 class="header-text">Get in Touch</h1><img src="images/moving-element.svg" loading="lazy" alt="">
              <h1 class="header-text opacity-3">Get in Touch</h1><img src="images/moving-element.svg" loading="lazy" alt="">
              <h1 class="header-text">Get in Touch</h1>
            </div>
          </div>
          <div class="header-grid">
            <div id="w-node-_9d0fe101-4d3f-3e10-da33-62c008e64f5a-ae446d1b" class="header-content-wrapper">
              <div class="header-text mobile-header-text">Get in Touch</div>
              <div class="header-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla.</div>
              <a href="#contact-form" class="arrow-con w-inline-block">
                <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="21" viewbox="0 0 15 21" fill="currentColor">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.121763 13.0766C1.90948 13.2405 5.25533 14.4241 6.93587 17.7439L7.21804 0.015026L8.21793 3.59217e-07L7.93577 17.7276C9.723 14.3566 13.1075 13.0722 14.9011 12.8545L14.9912 13.8472C13.0127 14.0873 8.82309 15.8137 7.93407 20.7803L7.44211 20.707L7.33426 20.7087L6.83972 20.7967C6.10842 15.8545 1.97179 14.2532 -6.15128e-07 14.0725L0.121763 13.0766Z" fill="currentColor"></path>
                </svg></div>
              </a>
            </div><img src="images/contact-header-img.png" loading="eager" id="w-node-ffaaef76-370d-748f-9798-2fbf04182aee-ae446d1b" alt="" class="header-img">
          </div>
        </div>
      </div>
      <div class="spacer"></div>
    </section>
    <section id="contact-form" class="section-contact">
      <div class="padding-global">
        <div class="container-large">
          <div class="contact-forn-wrapper">
            <div id="w-node-_550d4482-d834-9b59-78d6-1c07e00f078e-ae446d1b" class="w-form">


              <form id="contactForm" name="wf-form-Contac-Form" data-name="Contac Form" method="post" action="../private/contact-inquiry-code.php" data-wf-page-id="665f147b743ba95cae446d1b" data-wf-element-id="550d4482-d834-9b59-78d6-1c07e00f078f">
                <div class="form-grid">



                  <div id="w-node-b4115476-a308-154a-3c61-fc00b455bf5d-ae446d1b" class="field-wrapper">

                    <input type="hidden" class="text-field w-input"  name="csrf_token" value="<?php echo $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); ?>">
                  </div>



                  <div id="w-node-_1c8a4e4f-4725-3718-2185-dbe1f9b8beab-ae446d1b" class="field-wrapper"><label for="name" class="text-size-small label">Full Name <span class="asterisk">*</span></label><input class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="" type="text" id="name" required=""></div>

                  <div id="w-node-e875fc1a-e962-46bc-4d19-da469af3ddf1-ae446d1b" class="field-wrapper"><label for="Last-Name" class="text-size-small label">Last Name <span class="asterisk">*</span></label><input class="text-field w-input" maxlength="256" name="Last-Name" data-name="Last Name" placeholder="" type="text" id="Last-Name" required=""></div>

                  <div id="w-node-b4115476-a308-154a-3c61-fc00b455bf5d-ae446d1b" class="field-wrapper"><label for="Email-3" class="text-size-small">Email Address <span class="asterisk">*</span></label><input class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" type="email" id="Email-3" required=""></div>

                  <div id="w-node-c617a128-0084-2b8b-d735-09b77103aa40-ae446d1b" class="field-wrapper"><label for="Contact" class="text-size-small label">Contact Number <span class="asterisk">*</span></label><input class="text-field w-input" maxlength="256" name="Contact" data-name="Contact" placeholder="" type="text" id="Contact" required=""></div>

                  <div id="w-node-_647ce693-6ecb-153e-813b-ca392abb3e1b-ae446d1b" class="field-wrapper"><label for="name-5" class="text-size-small label">Subject <span class="asterisk">*</span></label>
                    <div class="select-wrapper"><select id="Subject" name="Subject" data-name="Subject" class="select w-select">
                      <option value="">Inquiry</option>
                      <option value="First">First choice</option>
                      <option value="Second">Second choice</option>
                      <option value="Third">Third choice</option>
                    </select><img src="images/select-arrow.svg" loading="lazy" alt="" class="select-icon"></div>
                  </div>

                  <div id="w-node-a88b321f-6bc7-436e-b7d1-059cad689fe7-ae446d1b" class="field-wrapper"><label for="name-5" class="text-size-small label">Message</label><textarea placeholder="Example Text" maxlength="5000" id="field" name="message" data-name="Field" class="textarea w-input"></textarea>


                  </div>


                  <div id="w-node-a88b321f-6bc7-436e-b7d1-059cad689fe7-ae446d1b" class="field-wrapper">

                    <!-- Honeypot field (hidden from users) -->
                    <input type="text" name="honeypot" style="display:block;">

                    <!-- reCAPTCHA -->
                    <!-- <div class="g-recaptcha" data-sitekey="6LfW29AqAAAAABIiW2q1R_YcrYCEntW0SaGevIro"></div> -->


                    <!-- reCAPTCHA TESTING-->
                    <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>



                  </div>



                  

                  <button type="submit" id="w-node-_643debe4-a7f8-7f74-d834-7f839ce16efc-ae446d1b" data-w-id="643debe4-a7f8-7f74-d834-7f839ce16efc"   class="button is-icon max-button-width w-inline-block">
                    <div class="btn-text">Send Message</div>
                    <div class="icon-1x1-small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.32481 1.89973C5.86086 2.62911 7.23527 3.75138 9.13918 3.69086L1.16196 8.29651L1.44768 8.79138L9.42395 4.18628C8.42036 5.80457 8.70502 7.5554 9.06858 8.38414L9.59187 8.15458C9.19323 7.24586 8.893 4.99296 10.9407 3.33777L10.7588 3.11272L10.7351 3.07171L10.6311 2.80164C8.17386 3.74738 6.37291 2.36093 5.78526 1.56133L5.32481 1.89973Z" fill="white"></path>
                    </svg></div>
                    <div class="button-overlay pointer-events-off"></div><input type="submit" data-wait="" class="submit-btn w-button" value="">
                  </button>


                </div>
              </form>


              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
            <div id="w-node-_0f64f32b-dace-1c88-9150-03032f2ae69f-ae446d1b" class="contact-detail-wrapper">
              <div class="info-wrapper bot-32">
                <div class="heading-style-h6 size-24">Get in touch</div>
                <div>A small river named Duden flows by their place and supplies it with the necessary regelialia. Even the all-powerful Pointing has no control.</div>
              </div>
              <div class="info-wrapper bot-45">
                <div class="heading-style-h6 size-24">Reach out to us</div>
                <a href="#" class="social-link w-inline-block">
                  <div>1821 23rd Street, Noe Valley, San Francisco California</div>
                </a>
              </div>
              <div class="info-wrapper">
                <div class="heading-style-h6">Social Media</div>
                <div class="div-block">
                  <a href="#" class="social-btn w-inline-block">
                    <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="7" height="16" viewbox="0 0 7 16" fill="currentColor">
                      <g clip-path="url(#clip0_209_2437)">
                        <path d="M1.78694 16V8.49234H0V5.78922H1.78694V3.4804C1.78694 1.66611 2.84249 0 5.2747 0C6.25947 0 6.98766 0.10488 6.98766 0.10488L6.93028 2.62914C6.93028 2.62914 6.18764 2.6211 5.37725 2.6211C4.50015 2.6211 4.35963 3.07014 4.35963 3.81544V5.78922H7L6.88511 8.49234H4.35963V16H1.78694Z" fill="currentColor"></path>
                      </g>
                      <defs>
                        <clippath id="clip0_209_2437">
                          <rect width="7" height="16" fill="currentColor"></rect>
                        </clippath>
                      </defs>
                    </svg></div>
                  </a>
                  <a href="#" class="social-btn w-inline-block">
                    <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewbox="0 0 16 15" fill="currentColor">
                      <g clip-path="url(#clip0_209_2441)">
                        <path d="M15.999 1.7768C15.5535 2.54167 15.0068 3.19368 14.3592 3.73284C14.3656 3.87744 14.3687 4.04087 14.3687 4.22315C14.3687 5.23588 14.2408 6.24983 13.9849 7.26501C13.7291 8.2802 13.3382 9.25191 12.8124 10.1802C12.2866 11.1084 11.6603 11.9307 10.9334 12.6472C10.2065 13.3636 9.33278 13.9349 8.31219 14.3609C7.29159 14.787 6.19779 15 5.03078 15C3.20946 15 1.53221 14.4325 -0.000976562 13.2976C0.271146 13.3326 0.532135 13.35 0.78199 13.35C2.30355 13.35 3.66255 12.8092 4.85899 11.7274C4.14955 11.7124 3.51419 11.4603 2.95292 10.9713C2.39165 10.4822 2.00539 9.85725 1.79416 9.09643C2.00295 9.14233 2.20902 9.16528 2.41237 9.16528C2.70508 9.16528 2.99311 9.12122 3.27644 9.0331C2.51934 8.8581 1.89126 8.4229 1.3922 7.7275C0.893158 7.03211 0.643637 6.2295 0.643637 5.31966V5.27277C1.10835 5.56973 1.60404 5.72769 2.1307 5.74665C1.6822 5.40157 1.32661 4.95157 1.06392 4.39666C0.801217 3.84175 0.669864 3.24125 0.669864 2.59513C0.669864 1.9137 0.817818 1.27917 1.11373 0.691515C1.93706 1.85758 2.9347 2.78954 4.10665 3.48739C5.27862 4.18526 6.53592 4.57282 7.87854 4.6501C7.82128 4.37467 7.79259 4.08725 7.79249 3.78783C7.79249 2.74237 8.11306 1.8497 8.75419 1.10982C9.39533 0.36994 10.1688 0 11.0747 0C12.0231 0 12.8219 0.398555 13.4712 1.19567C14.2131 1.02608 14.9077 0.71933 15.5551 0.27543C15.3057 1.18133 14.8251 1.88017 14.1133 2.37195C14.7675 2.28223 15.3961 2.08384 15.999 1.7768H15.999Z" fill="currentColor"></path>
                      </g>
                      <defs>
                        <clippath id="clip0_209_2441">
                          <rect width="16" height="15" fill="currentColor"></rect>
                        </clippath>
                      </defs>
                    </svg></div>
                  </a>
                  <a href="#" class="social-btn w-inline-block">
                    <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewbox="0 0 16 17" fill="currentColor">
                      <path d="M8.00179 4.3978C5.73162 4.3978 3.9005 6.22933 3.9005 8.5C3.9005 10.7707 5.73162 12.6022 8.00179 12.6022C10.2719 12.6022 12.1031 10.7707 12.1031 8.5C12.1031 6.22933 10.2719 4.3978 8.00179 4.3978ZM8.00179 11.167C6.53475 11.167 5.33542 9.97094 5.33542 8.5C5.33542 7.02906 6.53118 5.83304 8.00179 5.83304C9.47239 5.83304 10.6682 7.02906 10.6682 8.5C10.6682 9.97094 9.46882 11.167 8.00179 11.167ZM13.2274 4.23C13.2274 4.76197 12.7991 5.18682 12.2708 5.18682C11.739 5.18682 11.3142 4.7584 11.3142 4.23C11.3142 3.70161 11.7426 3.27318 12.2708 3.27318C12.7991 3.27318 13.2274 3.70161 13.2274 4.23ZM15.9438 5.2011C15.8831 3.91939 15.5904 2.78406 14.6516 1.84866C13.7165 0.913254 12.5814 0.620495 11.2999 0.556231C9.97925 0.481256 6.02075 0.481256 4.70006 0.556231C3.4222 0.616925 2.28712 0.909684 1.34835 1.84509C0.409593 2.78049 0.120468 3.91582 0.0562186 5.19753C-0.0187395 6.51852 -0.0187395 10.4779 0.0562186 11.7989C0.116899 13.0806 0.409593 14.2159 1.34835 15.1513C2.28712 16.0867 3.41863 16.3795 4.70006 16.4438C6.02075 16.5187 9.97925 16.5187 11.2999 16.4438C12.5814 16.3831 13.7165 16.0903 14.6516 15.1513C15.5868 14.2159 15.8795 13.0806 15.9438 11.7989C16.0187 10.4779 16.0187 6.52209 15.9438 5.2011ZM14.2376 13.2163C13.9592 13.916 13.4202 14.4551 12.717 14.7372C11.664 15.1549 9.16542 15.0585 8.00179 15.0585C6.83815 15.0585 4.33597 15.1513 3.28656 14.7372C2.58695 14.4587 2.04796 13.9196 1.76598 13.2163C1.34835 12.1631 1.44473 9.6639 1.44473 8.5C1.44473 7.3361 1.35192 4.83337 1.76598 3.78372C2.04439 3.08396 2.58338 2.54485 3.28656 2.2628C4.33954 1.84509 6.83815 1.94148 8.00179 1.94148C9.16542 1.94148 11.6676 1.84866 12.717 2.2628C13.4166 2.54128 13.9556 3.08039 14.2376 3.78372C14.6552 4.83694 14.5588 7.3361 14.5588 8.5C14.5588 9.6639 14.6552 12.1666 14.2376 13.2163Z" fill="currentColor"></path>
                    </svg></div>
                  </a>
                </div>
              </div>
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

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=665f147b743ba95cae446cfe" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script type="text/javascript">





  document.getElementById("contactForm").addEventListener("submit", async function (e) {
    e.preventDefault();

    // Create a FormData object to gather the form data
    const formData = new FormData(this);

    // Make the fetch request
    const response = await fetch("../private/contact-inquiry-code.php", {
        method: "POST", // Make sure it's POST, not GET
        body: formData
      });

    // Wait for the response to be parsed as JSON
    const result = await response.json();

    // Check for success
    if (result.message === "success") {
        // Reset the form
      this.reset();  

        // Redirect to Thank You page after resetting
      window.location.href = "thank-you.php";
    } else {
        // Show any error message
      // Reset the form
      this.reset();  
      alert(result.message);
    }
  });



  // var onloadCallback = function() {
  //   grecaptcha.render('g-recaptcha', {
  //     'sitekey' : '6LfW29AqAAAAABIiW2q1R_YcrYCEntW0SaGevIro'
  //   });
  // };



// Get the current year
  var currentYear = new Date().getFullYear();
// Get the current year when the page loads
  $(document).ready(function() {
    $("#footer-note").text("Copyright © "+ currentYear +" Eassave. All Rights Reserved.");
  });
</script>


</body>
</html>