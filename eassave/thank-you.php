<?php
$root = $_SERVER['DOCUMENT_ROOT'];

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}


// Using absolute path to call the configuration file
require_once '../private/config.php';  // Goes one folder above and accesses the 'private' folder

// Example: Database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Check if user is remembered
include '../private/login-session.php';  

// Redirect to /login if the user is not logged in
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] !== true) {
  header("Location: .../../auth/login.php");
  exit();
}


if ($_SESSION['submitted'] == true) {
    // Set the session to false after submission
  $_SESSION['submitted'] = false;

    // Add a JavaScript call to trigger the AJAX request
  echo "<script>
  fetch('../private/inquiry-received-code.php', {
    method: 'GET',
    })
    .then(response => response.text())
    .then(data => {
      console.log('Inquiry received:', data);
      })
      .catch(error => console.error('Error:', error));
      </script>";
    }
    else
    {
      header("Location: .../../index.php");
      exit();
    }





    ?>


    <!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
    <html data-wf-page="665f147b743ba95cae446d1b" data-wf-site="665f147b743ba95cae446cfe">
    <head>
      <meta charset="utf-8">
      <title>Thank you</title>
      <meta content="Thank you" property="og:title">
      <meta content="Thank you" property="twitter:title">
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
         <?php include 'partials/navigation-light.html'; ?>


         <section class="section-thankyou">
          <div class="padding-global">

            <div class="container-large">

              <div class="thankyou-wrapper success-con ">
                <div class="success-pop-card">
                  <!-- <img src="images/success-email.svg" loading="lazy" alt="" class="plane-icon"> -->

                  <div class="plane-icon">

                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="91" viewBox="0 0 90 91" fill="none">
                      <g clip-path="url(#clip0_1_8814)">
                        <path d="M88.9494 3.93301C88.1675 3.303 87.0875 3.13987 86.1425 3.51113L1.76619 37.2617C0.725549 37.6779 0.0280379 38.6735 -8.75788e-05 39.7986C-0.028213 40.9236 0.613047 41.953 1.63681 42.4255L28.1254 54.6544L87.1888 6.12117L39.3755 59.8464V87.6849L59.3333 69.0603L74.7573 76.176C75.1342 76.3448 75.5392 76.4348 75.9386 76.4348C76.3886 76.4348 76.8442 76.3223 77.2492 76.1085C78.0311 75.6979 78.5655 74.9497 78.7118 74.0835L89.9619 6.58243C90.1251 5.58679 89.7426 4.56865 88.9494 3.93301Z" fill="#5028ff"/>
                      </g>
                      <defs>
                        <clipPath id="clip0_1_8814">
                          <rect width="90" height="90" fill="white" transform="translate(-0.000976562 0.5)"/>
                        </clipPath>
                      </defs>
                    </svg>


                  </div>

                  <div class="success-title">Message sent.</div>
                  <div class="big-body-text success-excerpt">We’ll review your inquiry and get back to you as soon as we can.</div><a href="index.php" class="close-success w-inline-block">
                    <img src="images/close.svg" loading="lazy" alt="" class="close-icon">
                  </a>

                  <a data-w-id="db1ea719-ecf5-b56e-1bc2-be1250eef991" href="index.php" class="button is-icon w-inline-block" style="width: 100%;">
                    <div class="btn-text">Homepage</div>
                    <div class="icon-1x1-small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.32481 1.89973C5.86086 2.62911 7.23527 3.75138 9.13918 3.69086L1.16196 8.29651L1.44768 8.79138L9.42395 4.18628C8.42036 5.80457 8.70502 7.5554 9.06858 8.38414L9.59187 8.15458C9.19323 7.24586 8.893 4.99296 10.9407 3.33777L10.7588 3.11272L10.7351 3.07171L10.6311 2.80164C8.17386 3.74738 6.37291 2.36093 5.78526 1.56133L5.32481 1.89973Z" fill="white"></path>
                    </svg></div>
                    <div class="button-overlay pointer-events-off"></div>
                  </a>


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








// Get the current year
      var currentYear = new Date().getFullYear();
// Get the current year when the page loads
      $(document).ready(function() {
        $("#footer-note").text("Copyright © "+ currentYear +" Eassave. All Rights Reserved.");
      });
    </script>


  </body>
  </html>