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
<html data-wf-page="665f147b743ba95cae446d1e" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>About</title>
  <meta content="About" property="og:title">
  <meta content="About" property="twitter:title">
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
    <div class="main-wrapper">
      <div class="global-styles w-embed">
       <!-- Navigation -->
       <?php include 'partials/global-css.css'; ?>
     </div>

     <!-- Navigation -->
     <?php include 'partials/navigation-dark.html'; ?>


   </div>
   <section class="section-header">
    <div class="padding-global">
      <div class="container-large">
        <div class="header-moving-wrapper absolute-header">
          <div class="moving-container">
            <h1 class="header-text opacity-3">About Us</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text">About Us</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text opacity-3">About Us</h1>
          </div>
          <div class="moving-container">
            <h1 class="header-text">About Us</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text opacity-3">About Us</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text">About Us</h1>
          </div>
        </div>
        <div class="header-grid">
          <div id="w-node-_9d0fe101-4d3f-3e10-da33-62c008e64f5a-ae446d1e" class="header-content-wrapper">
            <div class="header-text mobile-header-text">About Us</div>
            <div class="header-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla.</div>
            <a href="#contact-form" class="arrow-con w-inline-block">
              <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="21" viewbox="0 0 15 21" fill="currentColor">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.121763 13.0766C1.90948 13.2405 5.25533 14.4241 6.93587 17.7439L7.21804 0.015026L8.21793 3.59217e-07L7.93577 17.7276C9.723 14.3566 13.1075 13.0722 14.9011 12.8545L14.9912 13.8472C13.0127 14.0873 8.82309 15.8137 7.93407 20.7803L7.44211 20.707L7.33426 20.7087L6.83972 20.7967C6.10842 15.8545 1.97179 14.2532 -6.15128e-07 14.0725L0.121763 13.0766Z" fill="currentColor"></path>
              </svg></div>
            </a>
          </div><img src="images/Rectangle-737.png" loading="eager" id="w-node-ffaaef76-370d-748f-9798-2fbf04182aee-ae446d1e" alt="" class="header-img">
        </div>
      </div>
    </div>
    <div class="spacer"></div>
  </section>
  <section class="section-who-we-are">
    <div class="padding-global">
      <div class="container-large">
        <div class="who-we-are-grid">
          <div class="who-title-wrapper">
            <div class="text-size-small overline">WHO WE ARE</div>
            <h3>Connecting people to brands since 2010.</h3>
          </div>
          <div id="w-node-e787c993-0ab2-b7bb-e952-a038ee6382ad-ae446d1e" class="who-excerpt-wrapper">
            <div>Our team of multidisciplinary professionals care about creating engaging brand experiences through the power of collaboration. We are bold, honest, progressive, and future focused. We have a passion for creating products that change the way people interact with brands and technology for the better.</div>
          </div>
        </div>
        <div class="stats-wrapper">
          <div class="counter-con">
            <h2 class="counter">25k+</h2>
            <div>Physical digital cards</div>
          </div>
          <div class="counter-con">
            <h2 class="counter">4M+</h2>
            <div>Taps, scans and shares.</div>
          </div>
        </div>
        <div class="about-gallery-list owl-carousel owl-theme">


          <!-- ----------- -->

          <?php
// Select query for about_gallery table
          $select_query = "SELECT id, name, image FROM about_gallery ORDER BY id ASC";
          $result = $conn->query($select_query);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        // Display each gallery item dynamically
              echo '<div class="about-gallery-item">';
              echo '<img src="images/' . $row['image'] . '" loading="lazy" alt="' . $row['name'] . '" class="gallery-img">';
        echo '</div>'; // Close the about-gallery-item
      }
    } else {
      echo "No gallery items found.";
    }

 
    ?>



    <!-- ----------- -->
    
  </div>
</div>
</div>
</section>
<section class="section-advantage">
  <div class="padding-global">
    <div class="container-large">
      <div class="adv-title-wrapper">
        <h3>Advantages of using our product</h3>
        <div class="adv-grid-wrapper">
          <div class="adv-grid">
            <div id="w-node-_5ac9985f-e1f8-3636-1251-8d4efb67f84e-ae446d1e" class="adv-card">
              <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                <path d="M6.66675 28C7.33341 22 10.0001 17.3333 16.0001 14.6666" stroke="#A240FB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M12 24C20.2907 24 26 19.616 26.6667 7.99998V5.33331H21.3147C9.3147 5.33331 5.33336 10.6666 5.3147 17.3333C5.3147 18.6666 5.3147 21.3333 7.98136 24H11.9814H12Z" stroke="#A240FB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></div>
              <div class="heading-style-h6 adv-card-title">Sustainable</div>
              <div>Connect wherever you go. Your Blinq digital business card can be easily</div>
            </div>
            <div id="w-node-c71a9f28-c0da-0fe9-5013-54656df26081-ae446d1e" class="adv-card top-48">
              <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                <path d="M24 29.3334C22.8889 29.3334 21.9444 28.9445 21.1667 28.1667C20.3889 27.3889 20 26.4445 20 25.3334C20 25.1778 20.0111 25.0165 20.0333 24.8494C20.0556 24.6822 20.0889 24.5325 20.1333 24.4L10.7333 18.9334C10.3556 19.2667 9.93333 19.528 9.46667 19.7174C9 19.9067 8.51111 20.0009 8 20C6.88889 20 5.94444 19.6111 5.16667 18.8334C4.38889 18.0556 4 17.1111 4 16C4 14.8889 4.38889 13.9445 5.16667 13.1667C5.94444 12.3889 6.88889 12 8 12C8.51111 12 9 12.0947 9.46667 12.284C9.93333 12.4734 10.3556 12.7342 10.7333 13.0667L20.1333 7.60002C20.0889 7.46669 20.0556 7.31691 20.0333 7.15069C20.0111 6.98446 20 6.82313 20 6.66669C20 5.55558 20.3889 4.61113 21.1667 3.83335C21.9444 3.05558 22.8889 2.66669 24 2.66669C25.1111 2.66669 26.0556 3.05558 26.8333 3.83335C27.6111 4.61113 28 5.55558 28 6.66669C28 7.7778 27.6111 8.72224 26.8333 9.50002C26.0556 10.2778 25.1111 10.6667 24 10.6667C23.4889 10.6667 23 10.5725 22.5333 10.384C22.0667 10.1956 21.6444 9.93424 21.2667 9.60002L11.8667 15.0667C11.9111 15.2 11.9444 15.3502 11.9667 15.5174C11.9889 15.6845 12 15.8454 12 16C12 16.1556 11.9889 16.3169 11.9667 16.484C11.9444 16.6511 11.9111 16.8009 11.8667 16.9334L21.2667 22.4C21.6444 22.0667 22.0667 21.8058 22.5333 21.6174C23 21.4289 23.4889 21.3342 24 21.3334C25.1111 21.3334 26.0556 21.7222 26.8333 22.5C27.6111 23.2778 28 24.2222 28 25.3334C28 26.4445 27.6111 27.3889 26.8333 28.1667C26.0556 28.9445 25.1111 29.3334 24 29.3334ZM24 8.00002C24.3778 8.00002 24.6947 7.87202 24.9507 7.61602C25.2067 7.36002 25.3342 7.04358 25.3333 6.66669C25.3333 6.28891 25.2053 5.97202 24.9493 5.71602C24.6933 5.46002 24.3769 5.33246 24 5.33335C23.6222 5.33335 23.3053 5.46135 23.0493 5.71735C22.7933 5.97335 22.6658 6.2898 22.6667 6.66669C22.6667 7.04446 22.7947 7.36135 23.0507 7.61735C23.3067 7.87335 23.6231 8.00091 24 8.00002ZM8 17.3334C8.37778 17.3334 8.69467 17.2054 8.95067 16.9494C9.20667 16.6934 9.33422 16.3769 9.33333 16C9.33333 15.6222 9.20533 15.3054 8.94933 15.0494C8.69333 14.7934 8.37689 14.6658 8 14.6667C7.62222 14.6667 7.30533 14.7947 7.04933 15.0507C6.79333 15.3067 6.66578 15.6231 6.66667 16C6.66667 16.3778 6.79467 16.6947 7.05067 16.9507C7.30667 17.2067 7.62311 17.3342 8 17.3334ZM24 26.6667C24.3778 26.6667 24.6947 26.5387 24.9507 26.2827C25.2067 26.0267 25.3342 25.7102 25.3333 25.3334C25.3333 24.9556 25.2053 24.6387 24.9493 24.3827C24.6933 24.1267 24.3769 23.9991 24 24C23.6222 24 23.3053 24.128 23.0493 24.384C22.7933 24.64 22.6658 24.9565 22.6667 25.3334C22.6667 25.7111 22.7947 26.028 23.0507 26.284C23.3067 26.54 23.6231 26.6676 24 26.6667Z" fill="#A240FB"></path>
              </svg></div>
              <div class="heading-style-h6 adv-card-title">Digital Sharing</div>
              <div>Connect wherever you go. Your Blinq digital business card can be easily</div>
            </div>
            <div id="w-node-c838ef20-4aa4-5aae-53d4-41f8e248bbf0-ae446d1e" class="adv-card top-less-48">
              <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                <path d="M21.3334 30.6666V28H22.6667V7.99998H9.33341V16H6.66675V3.99998C6.66675 3.26665 6.92808 2.63865 7.45075 2.11598C7.97341 1.59332 8.60097 1.33243 9.33341 1.33332H22.6667C23.4001 1.33332 24.0281 1.59465 24.5507 2.11732C25.0734 2.63998 25.3343 3.26754 25.3334 3.99998V28C25.3334 28.7333 25.0721 29.3613 24.5494 29.884C24.0267 30.4066 23.3992 30.6675 22.6667 30.6666H21.3334ZM6.66675 30.6666V28C7.40008 28 8.02808 28.2613 8.55075 28.784C9.07341 29.3066 9.3343 29.9342 9.33341 30.6666H6.66675ZM12.0001 30.6666C12.0001 29.2 11.4779 27.9444 10.4334 26.9C9.38897 25.8555 8.13341 25.3333 6.66675 25.3333V22.6666C8.88897 22.6666 10.7779 23.4444 12.3334 25C13.889 26.5555 14.6667 28.4444 14.6667 30.6666H12.0001ZM17.3334 30.6666C17.3334 27.6889 16.3001 25.1666 14.2334 23.1C12.1667 21.0333 9.64453 20 6.66675 20V17.3333C8.51119 17.3333 10.2445 17.6835 11.8667 18.384C13.489 19.0844 14.9001 20.0342 16.1001 21.2333C17.3001 22.4333 18.2503 23.8444 18.9507 25.4666C19.6512 27.0889 20.001 28.8222 20.0001 30.6666H17.3334ZM9.33341 5.33331H22.6667V3.99998H9.33341V5.33331Z" fill="#A240FB"></path>
              </svg></div>
              <div class="heading-style-h6 adv-card-title">One tap share</div>
              <div>Connect wherever you go. Your Blinq digital business card can be easily</div>
            </div>
            <div id="w-node-_3e3bb6c0-f630-578d-f429-1b8a7e011d8a-ae446d1e" class="adv-card">
              <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                <path d="M24 29.3334C22.8889 29.3334 21.9444 28.9445 21.1667 28.1667C20.3889 27.3889 20 26.4445 20 25.3334C20 25.1778 20.0111 25.0165 20.0333 24.8494C20.0556 24.6822 20.0889 24.5325 20.1333 24.4L10.7333 18.9334C10.3556 19.2667 9.93333 19.528 9.46667 19.7174C9 19.9067 8.51111 20.0009 8 20C6.88889 20 5.94444 19.6111 5.16667 18.8334C4.38889 18.0556 4 17.1111 4 16C4 14.8889 4.38889 13.9445 5.16667 13.1667C5.94444 12.3889 6.88889 12 8 12C8.51111 12 9 12.0947 9.46667 12.284C9.93333 12.4734 10.3556 12.7342 10.7333 13.0667L20.1333 7.60002C20.0889 7.46669 20.0556 7.31691 20.0333 7.15069C20.0111 6.98446 20 6.82313 20 6.66669C20 5.55558 20.3889 4.61113 21.1667 3.83335C21.9444 3.05558 22.8889 2.66669 24 2.66669C25.1111 2.66669 26.0556 3.05558 26.8333 3.83335C27.6111 4.61113 28 5.55558 28 6.66669C28 7.7778 27.6111 8.72224 26.8333 9.50002C26.0556 10.2778 25.1111 10.6667 24 10.6667C23.4889 10.6667 23 10.5725 22.5333 10.384C22.0667 10.1956 21.6444 9.93424 21.2667 9.60002L11.8667 15.0667C11.9111 15.2 11.9444 15.3502 11.9667 15.5174C11.9889 15.6845 12 15.8454 12 16C12 16.1556 11.9889 16.3169 11.9667 16.484C11.9444 16.6511 11.9111 16.8009 11.8667 16.9334L21.2667 22.4C21.6444 22.0667 22.0667 21.8058 22.5333 21.6174C23 21.4289 23.4889 21.3342 24 21.3334C25.1111 21.3334 26.0556 21.7222 26.8333 22.5C27.6111 23.2778 28 24.2222 28 25.3334C28 26.4445 27.6111 27.3889 26.8333 28.1667C26.0556 28.9445 25.1111 29.3334 24 29.3334ZM24 8.00002C24.3778 8.00002 24.6947 7.87202 24.9507 7.61602C25.2067 7.36002 25.3342 7.04358 25.3333 6.66669C25.3333 6.28891 25.2053 5.97202 24.9493 5.71602C24.6933 5.46002 24.3769 5.33246 24 5.33335C23.6222 5.33335 23.3053 5.46135 23.0493 5.71735C22.7933 5.97335 22.6658 6.2898 22.6667 6.66669C22.6667 7.04446 22.7947 7.36135 23.0507 7.61735C23.3067 7.87335 23.6231 8.00091 24 8.00002ZM8 17.3334C8.37778 17.3334 8.69467 17.2054 8.95067 16.9494C9.20667 16.6934 9.33422 16.3769 9.33333 16C9.33333 15.6222 9.20533 15.3054 8.94933 15.0494C8.69333 14.7934 8.37689 14.6658 8 14.6667C7.62222 14.6667 7.30533 14.7947 7.04933 15.0507C6.79333 15.3067 6.66578 15.6231 6.66667 16C6.66667 16.3778 6.79467 16.6947 7.05067 16.9507C7.30667 17.2067 7.62311 17.3342 8 17.3334ZM24 26.6667C24.3778 26.6667 24.6947 26.5387 24.9507 26.2827C25.2067 26.0267 25.3342 25.7102 25.3333 25.3334C25.3333 24.9556 25.2053 24.6387 24.9493 24.3827C24.6933 24.1267 24.3769 23.9991 24 24C23.6222 24 23.3053 24.128 23.0493 24.384C22.7933 24.64 22.6658 24.9565 22.6667 25.3334C22.6667 25.7111 22.7947 26.028 23.0507 26.284C23.3067 26.54 23.6231 26.6676 24 26.6667Z" fill="#A240FB"></path>
              </svg></div>
              <div class="heading-style-h6 adv-card-title">Digital Sharing</div>
              <div>Connect wherever you go. Your Blinq digital business card can be easily</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-partners-filter">
  <div class="padding-global">
    <div class="container-large">
      <div class="partners-title-wrapper">
        <div id="w-node-_959394d4-cd13-4820-0cb4-eddb1be94dbf-ae446d1e" class="companies-title-wrapper">
          <h3 class="max-630">We work with these awesome companies</h3>
          <div>A small river named Duden flows by their place and supplies it with the necessary regelialia.</div>
        </div>
        <div id="w-node-_68bec482-a5c5-3aa9-1b0a-592d44e68601-ae446d1e" class="partner-form-block w-form">
          <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" class="filter-form" data-wf-page-id="665f147b743ba95cae446d1e" data-wf-element-id="68bec482-a5c5-3aa9-1b0a-592d44e68602">
            <div class="select-wrapper"><select id="Industry" name="Industry" data-name="Industry" class="select w-select">
              <option value="">Industry</option>
              <option value="First">First choice</option>
              <option value="Second">Second choice</option>
              <option value="Third">Third choice</option>
            </select><img src="images/select-arrow.svg" loading="lazy" alt="" class="select-icon"></div>
            <div class="select-wrapper"><select id="Country" name="Country" data-name="Country" class="select w-select">
              <option value="">Country</option>
              <option value="First">First choice</option>
              <option value="Second">Second choice</option>
              <option value="Third">Third choice</option>
            </select><img src="images/select-arrow.svg" loading="lazy" alt="" class="select-icon"></div>
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      <div class="company-list">
        <div id="w-node-_21f26ded-0a49-00c9-5bd9-c5bb49e771fc-ae446d1e" class="company-item"><img src="images/image-134_1image 134.png" loading="lazy" alt="" class="company-img">
          <div>PLDT Inc</div>
        </div>
        <div id="w-node-_2a207e8a-7d26-1e71-33aa-bbf117199366-ae446d1e" class="company-item"><img src="images/image-134_1image 134.png" loading="lazy" alt="" class="company-img">
          <div>PLDT Inc</div>
        </div>
        <div id="w-node-f3ee8c67-0af2-b7f4-d8f0-6fb015c2fea2-ae446d1e" class="company-item"><img src="images/image-134_1image 134.png" loading="lazy" alt="" class="company-img">
          <div>PLDT Inc</div>
        </div>
        <div id="w-node-_79cba9fb-f228-66ae-7211-dd48f727976e-ae446d1e" class="company-item"><img src="images/image-134_1image 134.png" loading="lazy" alt="" class="company-img">
          <div>PLDT Inc</div>
        </div>
        <div id="w-node-e188d05d-7f9e-70f0-12cd-46df9bb4d741-ae446d1e" class="company-item"><img src="images/image-134_1image 134.png" loading="lazy" alt="" class="company-img">
          <div>PLDT Inc</div>
        </div>
        <div id="w-node-f663af44-2191-8c6d-2f9c-4c5fbdb4cc00-ae446d1e" class="company-item"><img src="images/image-134_1image 134.png" loading="lazy" alt="" class="company-img">
          <div>PLDT Inc</div>
        </div>
        <div id="w-node-_8d210f32-9c23-8868-0f1e-d8a06dd37c91-ae446d1e" class="company-item"><img src="images/image-134_1image 134.png" loading="lazy" alt="" class="company-img">
          <div>PLDT Inc</div>
        </div>
        <div id="w-node-_1f46c745-4809-d3d2-6d2a-b137e40be910-ae446d1e" class="company-item"><img src="images/image-134_1image 134.png" loading="lazy" alt="" class="company-img">
          <div>PLDT Inc</div>
        </div>
        <div id="w-node-_54bf0737-d8c1-6822-8c47-7b7d0d9a8921-ae446d1e" class="company-item"><img src="images/image-134_1image 134.png" loading="lazy" alt="" class="company-img">
          <div>PLDT Inc</div>
        </div>
        <div id="w-node-_516d1e47-9f0c-cb38-06ed-41e608441bf0-ae446d1e" class="company-item"><img src="images/image-134_1image 134.png" loading="lazy" alt="" class="company-img">
          <div>PLDT Inc</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/circletype@2.3.0/dist/circletype.min.js"></script>
<script>
  var slider = $('.about-gallery-list');
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