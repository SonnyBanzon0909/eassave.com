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
<html data-wf-page="665f147b743ba95cae446d00" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Home | Eassave</title>
  <meta content="Home | Eassave" property="og:title">
  <meta content="Home | Eassave" property="twitter:title">
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

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

</head>
<body>
  <div class="page-wrapper">
    <div class="global-styles w-embed">

     <!-- Custom CSS -->
     <?php include 'partials/global-css.css'; ?>

   </div>
   <main class="main-wrapper">

    <!-- Navigation -->
    <?php include 'partials/navigation-light.html'; ?>

    <section class="section-hero">
      <div data-delay="4000" data-animation="cross" class="slider w-slider" data-autoplay="true" data-easing="ease" data-hide-arrows="true" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="1000" data-infinite="true">
        <div class="w-slider-mask">

          <!----------------------------------->

          <?php
// Select query for hero_slider table
          $select_query = "SELECT id, title, short_description, link, image, bg_image FROM hero_slider";
          $result = $conn->query($select_query);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<div class="slide w-slide">';
              echo '  <div class="slider-wrapper">';
              echo '    <div class="padding-global">';
              echo '      <div class="container-large">';
              echo '        <div class="hero-wrapper">';
              echo '          <div class="text-container">';
              echo '            <h1 class="heading-style-h2 hero-title">' . htmlspecialchars($row['title']) . '</h1>';
              echo '          </div>';
              echo '          <div class="text-container">';
              echo '            <div class="hero-excerpt">' . htmlspecialchars($row['short_description']) . '</div>';
              echo '          </div>';
              echo '          <a href="' . htmlspecialchars($row['link']) . '" class="button is-icon w-inline-block">';
              echo '            <div class="btn-text">Learn more on our FAQ</div>';
              echo '          </a>';
              echo '        </div>';
              echo '      </div>';
              echo '    </div>';
              echo '    <div class="hero-img-wrapper">';
              echo '      <div class="bg-wrapper">';
              echo '        <img src="' . htmlspecialchars($row['bg_image']) . '" class="hero-bg" alt="Background Image">';
              echo '      </div>';
              echo '      <img src="' . htmlspecialchars($row['image']) . '" class="hero-img" alt="' . htmlspecialchars($row['title']) . '">';
              echo '    </div>';
              echo '  </div>';
              echo '</div>';
            }
          } else {
            echo "No slides found.";
          }


          ?>


          


          <!----------------------------------->

        </div>
        <div class="hide w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
        </div>
        <div class="hide w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
        </div>
        <div class="dots-container w-slider-nav w-slider-nav-invert w-round"></div>
      </div>
    </section>

    <section class="section-why-us">
      <div class="padding-global">
        <div class="container-large">
          <div class="why-us-wrapper">
            <h2 class="heading-style-h1" data-aos="fade-up"  data-aos-duration="500" >Why us? Here’s why…</h2>
            

            <div class="why-lis-wrapper" data-aos="fade-up"  data-aos-duration="600">
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


      <div data-w-id="e77d7a3d-49b4-6bd3-5deb-4da4d0bfbf0c" class="smart-swrapper"><img src="images/Card-mockup-1.svg" loading="lazy" style="-webkit-transform:translate3d(-120%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-120%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-120%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-120%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="smart-card-1"><img src="images/Card-mockup.svg" loading="lazy" style="-webkit-transform:translate3d(120%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(120%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(120%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(120%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="smart-card-2">
        <div class="padding-global">
          <div class="container-large">
            <div class="smart-block-title-wrapper">
              <h2 class="heading-style-h1" data-aos="fade-up"  data-aos-duration="500">Smart Connections with one tap.</h2>
              <a data-aos="fade-up"  data-aos-duration="600" data-w-id="f8ae75de-e514-0ab7-9a1e-704a64c28c25" href="shop.php" class="button is-icon w-inline-block">
                <div class="btn-text">Explore our shop</div>
                <div class="icon-1x1-small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M5.32481 1.89973C5.86086 2.62911 7.23527 3.75138 9.13918 3.69086L1.16196 8.29651L1.44768 8.79138L9.42395 4.18628C8.42036 5.80457 8.70502 7.5554 9.06858 8.38414L9.59187 8.15458C9.19323 7.24586 8.893 4.99296 10.9407 3.33777L10.7588 3.11272L10.7351 3.07171L10.6311 2.80164C8.17386 3.74738 6.37291 2.36093 5.78526 1.56133L5.32481 1.89973Z" fill="white"></path>
                </svg></div>
                <div class="button-overlay pointer-events-off"></div>
              </a>
            </div>
          </div>
        </div>
        <div class="smart-phone-wrapper">
          <div class="padding-global width-100">
            <div class="container-large">
              <div data-w-id="83099823-008a-edef-bf03-b88e62cd30c5" class="phone-grid-wrapper">
                <div class="card-scan-wrapper">
                  <div style="-webkit-transform:translate3d(400px, -100px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0deg) rotateZ(30deg) skew(0, 0);-moz-transform:translate3d(400px, -100px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0deg) rotateZ(30deg) skew(0, 0);-ms-transform:translate3d(400px, -100px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0deg) rotateZ(30deg) skew(0, 0);transform:translate3d(400px, -100px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0deg) rotateZ(30deg) skew(0, 0);transform-style:preserve-3d" class="card hover-card"><img loading="eager" src="images/Card-mockup.png" alt=""><img loading="lazy" src="images/ph_wifi-high-bold.svg" alt="" class="image"></div>
                </div>
                <div class="phone-wrap hide-mobile"><img loading="lazy" src="images/Btn.svg" alt="" class="btn"><img loading="lazy" src="images/Template-phone.png" alt="" class="scrolling-img"></div>
                <div class="phone-case"><img loading="lazy" src="images/main.png" alt="" class="phone">
                  <div class="phone-wrap width-100-copy"><img loading="lazy" src="images/Btn.svg" alt="" class="btn"><img style="-webkit-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" loading="lazy" alt="" src="images/iPhone-13-mini.png" class="scrolling-img main-scrolling"></div>
                </div>
                <div class="phone-wrap hide-mobile"><img loading="lazy" src="images/Btn.png" alt="" class="btn"><img loading="lazy" src="images/Content.png" alt="" class="scrolling-img"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="padding-global">
        <div class="container-large">
          <div class="digital-wrapper">
            <h3 class="max-526">Customize your digital card to match your brand.</h3>
            <p class="text-size-regular max-493">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section-partners">
      <div class="padding-global">
        <div class="container-large">
          <div class="heading-style-h6 text-align-center">Teams at these industry-leading companies love using our digital business cards</div>
          <div class="swiper-container partner-slider">
            <div class="swiper-wrapper flex-swiper">

              <!-- -------------- -->

              <?php
              // Select query for partners table
              $select_query = "SELECT id, name, logo, link, created_at, updated_at FROM partners ORDER BY id ASC";
              $result = $conn->query($select_query);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<div class="swiper-slide partners-item">';
                  echo '  <img src="' . htmlspecialchars($row['logo']) . '" loading="eager" alt="' . htmlspecialchars($row['name']) . '" class="partners-img">';
                  echo '</div>';
                }
              } else {
                echo "No partners found.";
              }


              ?>



              <!-- -------------- -->


              

            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-testimonials">
      <div class="padding-global">
        <div class="container-large">
          <h3 class="text-align-center bot-48">Hear what the community has to say</h3>
          <div class="testimonial-wrapper">
            <div class="testimonial-list owl-carousel owl-theme">


              <!-- ------------- -->

              <?php
// Select query for reviews table
              $select_query = "SELECT id, rating, name, position, image, content, created_at, updated_at FROM reviews ORDER BY id ASC";
              $result = $conn->query($select_query);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        // Determine how many stars to display based on the rating
                  $stars = '';
                  for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $row['rating']) {
                      $stars .= '<img src="images/star.svg" loading="eager" alt="star" class="star">';
                    }  
                  }

                  echo '<div class="testimonial-item">';
                  echo '  <div class="border-gradient pointer-events-off"></div>';
                  echo '  <div class="testimonial-content-con">';

        // Display stars based on rating
                  echo '    <div class="star-wrapper">' . $stars . '</div>';

        // Display review content
                  echo '    <p>' . htmlspecialchars($row['content']) . '</p>';

        // Display profile
                  echo '    <div class="profile-wrapper">';
                  echo '      <img src="' . htmlspecialchars($row['image']) . '" loading="eager" alt="profile image" class="profile">';
                  echo '      <div class="profile-detail-wrapper">';
                  echo '        <div class="name">' . htmlspecialchars($row['name']) . '</div>';
                  echo '        <div class="position">' . htmlspecialchars($row['position']) . '</div>';
                  echo '      </div>';
                  echo '    </div>';
                  echo '  </div>';
                  echo '</div>';
                }
              } else {
                echo "No reviews found.";
              }


              ?>



              <!-- ------------- -->





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
                <a data-w-id="db1ea719-ecf5-b56e-1bc2-be1250eef991" href="shop.php" class="button is-icon w-inline-block">
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
<script>
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
// Partners Slider
 var partners_slider = $('.partners-list');
 partners_slider.on('initialized.owl.carousel changed.owl.carousel', function(event) {
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
   autoplayTimeout: 1000,
   smartSpeed: 1000,
   fluidSpeed: 1000,
   autoplaySpeed: 1000,
   navSpeed: 1000,
   transitionStyle: 'linear',
   responsive : {
  	// breakpoint from 0 up
    0 : {
      items:2,
      margin:15,
      stagePadding: 15,
    },
    // breakpoint from 480 up
    480 : {
     items:3,
     margin:15,
     stagePadding: 30,
   },
    // breakpoint from 768 up
   768 : {
     items:5,
     margin:20,
     stagePadding: 50,
   },
    // breakpoint from 1000 up
   1000 : {
     items:6,
     margin:70,
     stagePadding: 0,
   }
 }          
});
// Partners Slider
 var testimonial_slider = $('.testimonial-list');
 testimonial_slider.on('initialized.owl.carousel changed.owl.carousel', function(event) {
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
     items:3,
     margin:30,
     stagePadding: 70,
   }
 }          
});


// Partners Slider - Swiper


let swiper1 = new Swiper('.partner-slider', {
  spaceBetween: 100,
  centeredSlides: true,
  speed: 6000,
  autoplay: {
    delay: 1,
  },
  loop: true,
  slidesPerView: 'auto',
  allowTouchMove: false,
  disableOnInteraction: true
});


</script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', () => {
   AOS.init({
    once: true, // Run animations only once globally
  });
 });
</script>



</body>
</html>


<?php
// Check if the connection is still open before closing
if (isset($conn) && $conn instanceof mysqli) {
  if (!$conn->connect_errno) {
    $conn->close();
  }
}

?>


