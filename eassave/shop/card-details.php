<?php


if (session_status() === PHP_SESSION_NONE) {
  session_start();
}



// Using absolute path to call the configuration file
require_once '../../private/config.php';  // Goes one folder above and accesses the 'private' folder

// Check if user is remembered
include '../../private/login-session.php'; 


// Example: Database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$root = $_SERVER['DOCUMENT_ROOT'].'/localhost/eassave.com/eassave/shop/';



// Redirect to /login if the user is not logged in
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] !== true) {
  header("Location: .../../auth/login.php");
  exit();
}



// Check if a slug is provided in the URL
if (!isset($_GET['slug']) || empty($_GET['slug'])) {
   header("Location: ../shop.php"); // Redirect to an error page if no slug is found
   exit();
 }

// Get the slug from the URL safely
 $slug = isset($_GET['slug']) ? $_GET['slug'] : '';


// Use prepared statements to prevent SQL Injection
 $stmt = $conn->prepare("SELECT * FROM shop WHERE slug = ?");
 $stmt->bind_param("s", $slug);
 $stmt->execute();
 $result = $stmt->get_result();

 if ($result->num_rows == 0) {
    header("Location: ../404.html"); // Redirect if slug doesn't exist
    exit();
  }

$product = $result->fetch_assoc(); // Fetch product details

$stmt->close();

?>

<!DOCTYPE html><!--  Last Published: Sun Feb 09 2025 11:24:04 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="67a86872b0be4e2d0faf136e" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Card Details</title>

  
  <base href="http://localhost/eassave.com/eassave/shop">
  

  <meta content="Card Details" property="og:title">
  <meta content="Card Details" property="twitter:title">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
</head>
<body>
  <div class="page-wrapper">
    <div class="global-styles w-embed">

     <!-- Custom CSS -->
     <?php include '../partials/global-css.css'; ?>


   </div>
   <main class="main-wrapper">

     <!-- Navigation -->
     <?php include '../partials/navigation-light.html'; ?>


     <section class="section-details">
      <div class="padding-global">
        <div class="container-large">
          <div class="details-wrapper">
            <div class="shop-bread-crumbs-wrappr">
              <div class="bread-crumbs-container">
                <a href="#" class="breadcrumbs">Home</a><img src="images/bi_chevron-down.svg" loading="lazy" alt="">
                <a href="../shop.html" class="breadcrumbs">Shop</a><img src="images/bi_chevron-down.svg" loading="lazy" alt="">


                <!-- ----------------- -->

                <?php


                $select_query = "SELECT * FROM shop WHERE slug = ?";
                $stmt = $conn->prepare($select_query);
                $stmt->bind_param("s", $slug);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {


                    echo '<a href="../shop.html" class="breadcrumbs">'. htmlspecialchars($row['name']). '</a>';
                  }
                }
                else 
                {
                  echo "No products found.";
                }

    // Close the statement
                $stmt->close();

                ?>


                <!-- ----------------- -->
              </div>
            </div>
            <div class="card-details-grid">
              <div id="w-node-_227fe782-9e17-1283-75b3-36770e2315e5-0faf136e" class="details-slider-wrapper">
                <div class="swiper-container main-slider">
                  <div class="swiper-wrapper details-swiper-wrapper">
                    <div class="swiper-slide main-slide"><img src="images/slider-card.jpg" loading="lazy" alt="" class="main-slider-img"></div>
                    <div class="swiper-slide main-slide"><img src="images/slider-card2.png" loading="lazy" alt="" class="main-slider-img"></div>
                    <div class="swiper-slide main-slide"><img src="images/slider-card3.png" loading="lazy" alt="" class="main-slider-img"></div>
                  </div>
                </div>
                <div class="swiper-container slider-selector">
                  <div class="swiper-wrapper details-swiper-wrapper">
                    <div class="swiper-slide selector-slide"><img src="images/slider-card.jpg" loading="lazy" alt="" class="selector-img"></div>
                    <div class="swiper-slide selector-slide"><img src="images/slider-card2.png" loading="lazy" alt="" class="selector-img"></div>
                    <div class="swiper-slide selector-slide"><img src="images/slider-card3.png" loading="lazy" alt="" class="selector-img"></div>
                  </div>
                </div>
              </div>
              <div id="w-node-_0729f2cb-eab1-871f-e321-df997be57cbc-0faf136e" class="details-content-wrapper">
                <div class="details-name-wrapper">

                  <?php


                  $select_query = "SELECT * FROM shop WHERE slug = ?";
                  $stmt = $conn->prepare($select_query);
                  $stmt->bind_param("s", $slug);
                  $stmt->execute();
                  $result = $stmt->get_result();

                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                      echo '<h3 class="heading-style-h3 text-color-black">' . htmlspecialchars($row['name']). '</h3>';
                      echo '<div>₱ ' . htmlspecialchars($row['price']) . '</div>';

                    }
                  } 
                  else 
                  {
                    echo "No products found.";
                  }

    // Close the statement
                  $stmt->close();

                  ?>

                </div>
                <div id="w-node-_9679e5f6-ffcb-a435-7b22-1bd3a0a14499-0faf136e" class="w-form">
                  <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="get" data-wf-page-id="67a86872b0be4e2d0faf136e" data-wf-element-id="9679e5f6-ffcb-a435-7b22-1bd3a0a1449a">
                    <div class="details-color-wrapper">
                      <div>Color:</div>
                      <div class="color-list">





                       <?php

                       if (!empty($slug)) {
    // Use a prepared statement to prevent SQL injection
                        $select_query = "SELECT * FROM shop WHERE slug = ?";
                        $stmt = $conn->prepare($select_query);
                        $stmt->bind_param("s", $slug);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {






            // Convert colors and patterns from database (assuming stored as JSON or comma-separated)
            $colors = isset($row['colors']) ? explode(',', $row['colors']) : []; // Adjust if stored differently
            $patterns = isset($row['patterns']) ? explode(',', $row['patterns']) : [];

            // If type is color (either solid or combination)
            if (strpos($row['type'], 'color') !== false) {
              foreach ($colors as $color) {
                    $color = trim($color); // Remove extra spaces

                    // Check if the current color is solid
                    if ($row['is_solid_color'] == '1') {

                      echo '<label class="radio-btn-wrapper w-radio">';
                      echo '<div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-input w-radio-input"></div>';
                      echo '<input type="radio" name="color" id="color" data-name="color" required="" style="opacity:0;position:absolute;z-index:-1" value="color">';

                      echo '<div class="color-box rounded" style="background:none">';
                      echo '<div class="box-1" style="background: ' . htmlspecialchars($color) . ';"></div>';
                      echo '<div class="box-2" style="background: ' . htmlspecialchars($color) . ';"></div>';
                      echo '</div>';

                      echo '<span class="radio-btn-label w-form-label" for="color">'. htmlspecialchars($color) . '</span>';
                      echo '</label>';

                    } else {
                        // Handle color combinations (e.g., "blue & green")
                      $color_parts = explode('&', $color);

                      echo '<label class="radio-btn-wrapper w-radio">';
                      echo '<div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-input w-radio-input"></div>';
                      echo '<input type="radio" name="color" id="color" data-name="color" required="" style="opacity:0;position:absolute;z-index:-1" value="color">';

                      echo '<div class="color-box rounded" style="background:none">';
                      echo '<div class="box-1" style="background: ' . htmlspecialchars(trim($color_parts[0])) . ';"></div>';
                      echo '<div class="box-2" style="background: ' . htmlspecialchars(trim($color_parts[1] ?? $color)) . ';"></div>';
                      echo '</div>';

                      echo '<span class="radio-btn-label w-form-label" for="color">'. htmlspecialchars($color) . '</span>';
                      echo '</label>';
                    }
                  }
                }

            // If type is pattern
                if (strpos($row['type'], 'pattern') !== false) {
                  foreach ($patterns as $pattern) {

                    echo '<label class="radio-btn-wrapper w-radio">';
                    echo '<div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-input w-radio-input"></div>';
                    echo '<input type="radio" name="color" id="color" data-name="color" required="" style="opacity:0;position:absolute;z-index:-1" value="color">';


                    echo '<div class="color-box rounded" style="background: url(' . htmlspecialchars($pattern) . '); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>';

                    echo '<span class="radio-btn-label w-form-label" for="color">'. htmlspecialchars($pattern) . '</span>';
                    echo '</label>';

                  }
                }
              }
            } else {
              echo "No products found.";
            }

    // Close the statement
            $stmt->close();
          } else {
            echo "Invalid product.";
          }
          ?>










        </div>
      </div>


      <div class="line-separator"></div>
      <div class="details-form-grid">

        <div id="w-node-_9679e5f6-ffcb-a435-7b22-1bd3a0a144a8-0faf136e" class="field-wrapper">

          <div class="placeholder-wrapper">
            <label for="Email-5" class="text-size-small">Full Name <span class="asterisk">*</span></label>
            <label for="" class="text-size-small placeholder" id="char-count">30 Character Left</label></div>
            <input class="text-field w-input" maxlength="30" name="name" data-name="name" placeholder="" type="text" id="name" required="">
          </div>

          <div id="w-node-_9679e5f6-ffcb-a435-7b22-1bd3a0a144ae-0faf136e" class="field-wrapper"><label for="job-title" class="text-size-small label">Job Title <span class="asterisk">*</span></label><input class="text-field w-input" maxlength="256" name="job-title" data-name="job-title" placeholder="" type="text" id="job-title" required=""></div>
          <div id="w-node-_268b4270-9011-09a6-6039-7c2a5a53dd6f-0faf136e" class="btn-container">
            <div id="w-node-_08170c51-eece-ea57-4195-1d0fce1285fd-0faf136e" data-w-id="08170c51-eece-ea57-4195-1d0fce1285fd" class="button is-icon max-button-width">
              <div class="btn-text">Add to Cart</div>
              <div class="icon-1x1-small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.32481 1.89973C5.86086 2.62911 7.23527 3.75138 9.13918 3.69086L1.16196 8.29651L1.44768 8.79138L9.42395 4.18628C8.42036 5.80457 8.70502 7.5554 9.06858 8.38414L9.59187 8.15458C9.19323 7.24586 8.893 4.99296 10.9407 3.33777L10.7588 3.11272L10.7351 3.07171L10.6311 2.80164C8.17386 3.74738 6.37291 2.36093 5.78526 1.56133L5.32481 1.89973Z" fill="white"></path>
              </svg></div>
              <div class="button-overlay pointer-events-off"></div><input type="submit" data-wait="" class="submit-btn w-button" value="">
            </div>
          </div>
        </div>
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
    <div class="line-separator"></div>
    <div class="details-content-con">
      <div class="addition-title-text">Additional Details</div>
      <div>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>
<section class="section-reason">
  <div class="padding-global">
    <div class="container-large">
      <div class="why-us-wrapper">
        <h2 class="heading-style-h3">Reasons why our card is awesome</h2>
        <div class="why-lis-wrapper">
          <div class="why-list owl-carousel owl-theme">

            <!-- ---------------- -->

            <?php
// Select query for why_us table
            $select_query = "SELECT id, count, title, short_description FROM why_us ORDER BY id ASC";
            $result = $conn->query($select_query);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '<div class="why-card">';
                echo '  <div class="why-content-wrapper">';
                echo '    <div class="heading-style-h5 overline bot-34">' . htmlspecialchars($row['count']) . '</div>';
                echo '    <h3 class="heading-style-h4 why-card-title">' . htmlspecialchars($row['title']) . '</h3>';
                echo '    <div>' . htmlspecialchars($row['short_description']) . '</div>';
                echo '  </div>';
                echo '</div>';
              }
            } else {
              echo "No records found.";
            }



            ?>


            <!-- ---------------- -->


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-learn">
  <div class="padding-global">
    <div class="container-large">
      <div class="learn-wrapper">
        <div class="learn-content-wrapper">
          <h3>Do you have questions?  We got you covered.</h3>
          <div class="learn-excerpt">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</div>
          <a href="frequently-asked-questions.php" class="button is-secondary w-button">Learn more on our FAQ</a>
        </div>
        <div class="plant-wrapper"><img src="images/plant.png" loading="lazy" sizes="(max-width: 767px) 100vw, (max-width: 991px) 40vw, 50vw" srcset="../images/plant-p-500.png 500w, images/plant.png 744w" alt="" class="plant"></div>
      </div>
    </div>
  </div>
</section>


<!-- Footer section -->
<?php include '../partials/footer-light.html'; ?>



</main>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/circletype@2.3.0/dist/circletype.min.js"></script>
<!--  Swiper JS  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--  Initialize Swiper  -->
<script>


  document.addEventListener("DOMContentLoaded", function () {
    const inputField = document.getElementById("name");
    const charCountLabel = document.getElementById("char-count");
    const maxLength = 30; // Set the character limit

    inputField.addEventListener("input", function () {
      const remainingChars = maxLength - inputField.value.length;
      charCountLabel.textContent = `${remainingChars} Character${remainingChars === 1 ? '' : 's'} Left`;
    });
  });


  var swiper = new Swiper(".slider-selector", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".main-slider", {
    spaceBetween: 10,
    navigation: {
        //nextEl: ".swiper-button-next",
        //prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
  var slider = $('.why-list');
  slider.on('initialized.owl.carousel changed.owl.carousel', function(event) {
   if (!event.namespace)  {
     return;
   }
 }).owlCarousel({
   items: 1,
   nav: false,
   dots: false,
   loop: true,
   autoHeight: false,
   autoplay: true,
   autoplayTimeout: 6000,
   smartSpeed: 1000,
   fluidSpeed: 1000,
   autoplaySpeed: 1000,
   navSpeed: 1000,
   transitionStyle: 'linear',
   responsive : {
  	// breakpoint from 0 up
    0 : {
      items:1,
      margin:15,
      stagePadding: 15,
    },
    // breakpoint from 480 up
    480 : {
     items:1,
     margin:15,
     stagePadding: 30,
   },
    // breakpoint from 768 up
   768 : {
     items:2,
     margin:20,
     stagePadding: 50,
   },
    // breakpoint from 1000 up
   1000 : {
     items:2,
     margin:30,
     stagePadding: 75,
   }
 }          
});
</script>
</body>
</html>