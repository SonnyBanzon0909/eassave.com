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
<html data-wf-page="665f147b743ba95cae446d1c" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Frequently Asked Questions | Eassave</title>
  <meta content="Frequently Asked Questions | Eassave" property="og:title">
  <meta content="Frequently Asked Questions | Eassave" property="twitter:title">
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

       <!-- Custom CSS -->
       <?php include 'partials/global-css.css'; ?>

     </div>

     <!-- Navigation -->
     <?php include 'partials/navigation-dark.html'; ?>


     <section class="section-header">
      <div class="padding-global">
        <div class="container-large">
          <div class="header-moving-wrapper absolute-header">
            <div class="moving-container">
              <h1 class="header-text opacity-3">Got Questions?</h1><img src="images/moving-element.svg" loading="lazy" alt="">
              <h1 class="header-text">Got Questions?</h1><img src="images/moving-element.svg" loading="lazy" alt="">
              <h1 class="header-text opacity-3">Got Questions?</h1>
            </div>
            <div class="moving-container">
              <h1 class="header-text">Got Questions?</h1><img src="images/moving-element.svg" loading="lazy" alt="">
              <h1 class="header-text opacity-3">Got Questions?</h1><img src="images/moving-element.svg" loading="lazy" alt="">
              <h1 class="header-text">Got Questions?</h1>
            </div>
          </div>
          <div class="header-grid">
            <div id="w-node-_9d0fe101-4d3f-3e10-da33-62c008e64f5a-ae446d1c" class="header-content-wrapper">
              <div class="header-text mobile-header-text">Get in Touch</div>
              <div class="header-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla.</div>
              <a href="#faq" class="arrow-con w-inline-block">
                <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="21" viewbox="0 0 15 21" fill="currentColor">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.121763 13.0766C1.90948 13.2405 5.25533 14.4241 6.93587 17.7439L7.21804 0.015026L8.21793 3.59217e-07L7.93577 17.7276C9.723 14.3566 13.1075 13.0722 14.9011 12.8545L14.9912 13.8472C13.0127 14.0873 8.82309 15.8137 7.93407 20.7803L7.44211 20.707L7.33426 20.7087L6.83972 20.7967C6.10842 15.8545 1.97179 14.2532 -6.15128e-07 14.0725L0.121763 13.0766Z" fill="currentColor"></path>
                </svg></div>
              </a>
            </div><img src="images/contact-header-img.png" loading="eager" id="w-node-ffaaef76-370d-748f-9798-2fbf04182aee-ae446d1c" alt="" class="header-img">
          </div>
        </div>
      </div>
      <div class="spacer"></div>
    </section>
    <section id="faq" class="section-faq">
      <div class="padding-global">
        <div class="container-large"></div>
      </div>
      <div class="padding-global">
        <div class="container-large">
          <div class="faq-grid">
            <div id="w-node-f4d58380-2ac0-723d-9c97-4b185d1b0e1b-ae446d1c" class="filter-wrapper">
              <div class="filter-form-block w-form">
                <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" data-wf-page-id="665f147b743ba95cae446d1c" data-wf-element-id="c7891a81-ee92-a8ff-bbd3-2ac3095f47a6">
                  <div class="search-wrapper"><input class="text-field w-input" maxlength="256" name="Search" data-name="Search" placeholder="Search" type="text" id="Search"><img src="images/search.svg" loading="lazy" alt="" class="search-icon"></div>
                </form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
              <div class="filter-by-wrapper">
                <div class="text-size-large">Filter by</div>
                <div class="filter-btn-wrapper">
                  <a href="#Products and Services" class="filter-btn">Products and Services</a>
                  <a href="#Payment" class="filter-btn">Payment</a>
                  <a href="#Shipping" class="filter-btn">Shipping</a>
                  <a href="#Corporate" class="filter-btn">Corporate</a>
                </div>
              </div>
            </div>


            <div id="Products and Services" class="faq-wrapper">

              <div class="faq-item-wrapper">
                <div class="heading-style-h6">Products and Services</div>
                <div class="faq-list">

                  <?php

                  $sql = "SELECT question, answer FROM faq WHERE category = 'Products and Services' ORDER BY id";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                      $question = htmlspecialchars($row['question'], ENT_QUOTES, 'UTF-8');
                      $answer = htmlspecialchars($row['answer'], ENT_QUOTES, 'UTF-8');
                      ?>

                      <div data-hover="false" data-delay="500" class="dropdown w-dropdown">
                        <div class="dropdown-toggle w-dropdown-toggle">
                          <div><?php echo $question; ?></div>
                          <div class="accordion-wrapper">
                            <div class="top-line"></div>
                            <div class="bot-line"></div>
                          </div>
                        </div>

                        <nav class="dropdown-list relative-list w-dropdown-list">
                          <div class="dropdown-wrapper">
                            <div class="w-richtext">
                              <p><?php echo $answer; ?></p>
                            </div>
                          </div>
                        </nav>
                      </div>

                      <?php
                    }
                  } else {
                    echo "<p>No FAQs found for Products and Services.</p>";
                  }
                  ?>

                </div>
              </div>

              <div class="faq-item-wrapper" id="Payment">
                <div class="heading-style-h6">Payment</div>
                <div class="faq-list">

                  <!-- ---------- -->
                  <?php

                  $sql = "SELECT question, answer FROM faq WHERE category = 'Payment' ORDER BY id";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                      $question = htmlspecialchars($row['question'], ENT_QUOTES, 'UTF-8');
                      $answer = htmlspecialchars($row['answer'], ENT_QUOTES, 'UTF-8');
                      ?>

                      <div data-hover="false" data-delay="500" class="dropdown w-dropdown">
                        <div class="dropdown-toggle w-dropdown-toggle">
                          <div><?php echo $question; ?></div>
                          <div class="accordion-wrapper">
                            <div class="top-line"></div>
                            <div class="bot-line"></div>
                          </div>
                        </div>

                        <nav class="dropdown-list relative-list w-dropdown-list">
                          <div class="dropdown-wrapper">
                            <div class="w-richtext">
                              <p><?php echo $answer; ?></p>
                            </div>
                          </div>
                        </nav>
                      </div>

                      <?php
                    }
                  } else {
                    echo "<p>No FAQs found for Payment.</p>";
                  }
                  ?>
                  <!-- ---------- -->

                </div>
              </div>

              <div class="faq-item-wrapper" id="Shipping">
                <div class="heading-style-h6">Shipping</div>
                <div class="faq-list">

                  <!-- ---------- -->
                  <?php

                  $sql = "SELECT question, answer FROM faq WHERE category = 'Shipping' ORDER BY id";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                      $question = htmlspecialchars($row['question'], ENT_QUOTES, 'UTF-8');
                      $answer = htmlspecialchars($row['answer'], ENT_QUOTES, 'UTF-8');
                      ?>

                      <div data-hover="false" data-delay="500" class="dropdown w-dropdown">
                        <div class="dropdown-toggle w-dropdown-toggle">
                          <div><?php echo $question; ?></div>
                          <div class="accordion-wrapper">
                            <div class="top-line"></div>
                            <div class="bot-line"></div>
                          </div>
                        </div>

                        <nav class="dropdown-list relative-list w-dropdown-list">
                          <div class="dropdown-wrapper">
                            <div class="w-richtext">
                              <p><?php echo $answer; ?></p>
                            </div>
                          </div>
                        </nav>
                      </div>

                      <?php
                    }
                  } else {
                    echo "<p>No FAQs found for Shipping.</p>";
                  }
                  ?>
                  <!-- ---------- -->

                </div>
              </div>

              <div class="faq-item-wrapper" id="Corporate">
                <div class="heading-style-h6">Corporate</div>
                <div class="faq-list">

                  <!-- ---------- -->
                  <?php

                  $sql = "SELECT question, answer FROM faq WHERE category = 'Corporate' ORDER BY id";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                      $question = htmlspecialchars($row['question'], ENT_QUOTES, 'UTF-8');
                      $answer = htmlspecialchars($row['answer'], ENT_QUOTES, 'UTF-8');
                      ?>

                      <div data-hover="false" data-delay="500" class="dropdown w-dropdown">
                        <div class="dropdown-toggle w-dropdown-toggle">
                          <div><?php echo $question; ?></div>
                          <div class="accordion-wrapper">
                            <div class="top-line"></div>
                            <div class="bot-line"></div>
                          </div>
                        </div>

                        <nav class="dropdown-list relative-list w-dropdown-list">
                          <div class="dropdown-wrapper">
                            <div class="w-richtext">
                              <p><?php echo $answer; ?></p>
                            </div>
                          </div>
                        </nav>
                      </div>

                      <?php
                    }
                  } else {
                    echo "<p>No FAQs found for Corporate.</p>";
                  }
                  ?>

                  <!-- ---------- -->

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