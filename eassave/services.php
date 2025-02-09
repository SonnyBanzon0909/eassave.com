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
<html data-wf-page="665f147b743ba95cae446d1d" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Services</title>
  <meta content="Services" property="og:title">
  <meta content="Services" property="twitter:title">
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
    <div class="navigation-wrapper">

      <!-- Navigation -->
      <?php include 'partials/navigation-dark.html'; ?>


      <section class="section-navigation-list dark-navigation-list">
          <div class="padding-global navlist-padding">
            <div class="container-large">
              <div class="navigation-list-hamburger-wrapper">
                <div class="mobile-nav-link-wrapper dark-mobile-navlink-wrapper">
                  <a href="index.html" class="text-size-small nav-link light-nav-link">Home</a>
                  <a href="#" class="text-size-small nav-link light-nav-link">About us</a>
                  <a href="#" class="text-size-small nav-link light-nav-link">Shop</a>
                  <a href="#" class="text-size-small nav-link light-nav-link">Services</a>
              </div>
              <div class="mobile-nav-link-wrapper dark-mobile-navlink-wrapper">
                  <a href="#" class="text-size-small nav-link secondary-nav-link light-secondary-navlink">Affiliate</a>
                  <a href="#" class="text-size-small nav-link secondary-nav-link light-secondary-navlink">FAQ</a>
                  <a href="#" class="text-size-small nav-link secondary-nav-link light-secondary-navlink">Contact Us</a>
                  <a href="#" class="text-size-small nav-link secondary-nav-link light-secondary-navlink">Blogs</a>
                  <a href="#" class="text-size-small nav-link secondary-nav-link light-secondary-navlink">Activate Cards</a>
              </div>
              <div class="mobile-nav-link-wrapper dark-mobile-navlink-wrapper">
                  <a href="#" class="text-size-small nav-link secondary-nav-link light-secondary-navlink">My Customer Account</a>
                  <a href="#" class="text-size-small nav-link secondary-nav-link light-secondary-navlink">Account Settings</a>
                  <a href="#" class="text-size-small nav-link secondary-nav-link light-secondary-navlink">Logout</a>
              </div>
          </div>
      </div>
  </div>
</section>
</div>
<section class="section-header">
    <div class="padding-global">
      <div class="container-large">
        <div class="header-moving-wrapper absolute-header">
          <div class="moving-container">
            <h1 class="header-text opacity-3">Services</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text">Services</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text opacity-3">Services</h1>
        </div>
        <div class="moving-container">
            <h1 class="header-text">Services</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text opacity-3">Services</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text">Services</h1>
        </div>
    </div>
    <div class="header-grid">
      <div id="w-node-_9d0fe101-4d3f-3e10-da33-62c008e64f5a-ae446d1d" class="header-content-wrapper">
        <div class="header-text mobile-header-text">Get in Touch</div>
        <div class="header-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla.</div>
        <a href="#pricing" class="arrow-con w-inline-block">
          <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="21" viewbox="0 0 15 21" fill="currentColor">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.121763 13.0766C1.90948 13.2405 5.25533 14.4241 6.93587 17.7439L7.21804 0.015026L8.21793 3.59217e-07L7.93577 17.7276C9.723 14.3566 13.1075 13.0722 14.9011 12.8545L14.9912 13.8472C13.0127 14.0873 8.82309 15.8137 7.93407 20.7803L7.44211 20.707L7.33426 20.7087L6.83972 20.7967C6.10842 15.8545 1.97179 14.2532 -6.15128e-07 14.0725L0.121763 13.0766Z" fill="currentColor"></path>
          </svg></div>
      </a>
  </div><img src="images/Rectangle-737.png" loading="eager" id="w-node-ffaaef76-370d-748f-9798-2fbf04182aee-ae446d1d" alt="" class="header-img">
</div>
</div>
</div>
<div class="spacer"></div>
</section>
<section id="pricing" class="section-services">
    <div class="padding-global">
      <div class="container-large">
        <div class="service-grid">
          <div id="w-node-e14173bc-4a4d-6263-1136-4261dc76ee2c-ae446d1d" class="service-card">
            <div class="heading-style-h6">Individual</div>
            <div class="heading-style-h6 color-violet">₱20</div>
            <div class="list-container">
              <div class="list-item">
                <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                    <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
                </svg></div>
                <div class="text-size-large">Lorem ipsum dolor.</div>
            </div>
            <div class="list-item">
                <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                    <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
                </svg></div>
                <div class="text-size-large">Lorem ipsum.</div>
            </div>
            <div class="list-item">
                <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                    <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
                </svg></div>
                <div class="text-size-large">Lorem</div>
            </div>
            <div class="list-item">
                <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                    <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
                </svg></div>
                <div class="text-size-large">Lorem ipsum dolor sit.</div>
            </div>
            <div class="list-item">
                <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                    <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
                </svg></div>
                <div class="text-size-large">Ipsum dolor.</div>
            </div>
        </div>
        <a href="#" class="button is-secondary w-button">Choose service</a>
    </div>
    <div id="w-node-_3e268ac3-e26e-dc54-e37e-fe11363f8c84-ae446d1d" class="service-card current-service">
        <div class="heading-style-h6">Group</div>
        <div class="heading-style-h6 color-violet current-service-price">₱20</div>
        <div class="list-container">
          <div class="list-item">
            <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div class="text-size-large">Lorem ipsum dolor.</div>
        </div>
        <div class="list-item">
            <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div class="text-size-large">Lorem ipsum.</div>
        </div>
        <div class="list-item">
            <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div class="text-size-large">Lorem</div>
        </div>
        <div class="list-item">
            <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div class="text-size-large">Lorem ipsum dolor sit.</div>
        </div>
        <div class="list-item">
            <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div class="text-size-large">Ipsum dolor.</div>
        </div>
    </div>
    <a href="#" class="button is-secondary current-service-button w-button">Choose service</a>
</div>
<div id="w-node-_1cc9dbcf-4919-6a4d-6723-593e774f8442-ae446d1d" class="service-card">
    <div class="heading-style-h6">Organization</div>
    <div class="heading-style-h6 color-violet">₱50</div>
    <div class="list-container">
      <div class="list-item">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
            <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
        </svg></div>
        <div class="text-size-large">Lorem ipsum dolor.</div>
    </div>
    <div class="list-item">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
            <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
        </svg></div>
        <div class="text-size-large">Lorem ipsum.</div>
    </div>
    <div class="list-item">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
            <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
        </svg></div>
        <div class="text-size-large">Lorem</div>
    </div>
    <div class="list-item">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
            <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
        </svg></div>
        <div class="text-size-large">Lorem ipsum dolor sit.</div>
    </div>
    <div class="list-item">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
            <path d="M5.13004 8.6414L13.5964 0.384839C13.8595 0.128279 14.1943 0 14.6009 0C15.0075 0 15.3423 0.128279 15.6054 0.384839C15.8685 0.641399 16 0.967929 16 1.36443C16 1.76093 15.8685 2.08746 15.6054 2.34402L6.13453 11.5802C5.84753 11.8601 5.5127 12 5.13004 12C4.74738 12 4.41256 11.8601 4.12556 11.5802L0.394618 7.94169C0.131539 7.68513 0 7.3586 0 6.9621C0 6.5656 0.131539 6.23907 0.394618 5.98251C0.657697 5.72595 0.992526 5.59767 1.3991 5.59767C1.80568 5.59767 2.14051 5.72595 2.40359 5.98251L5.13004 8.6414Z" fill="currentColor"></path>
        </svg></div>
        <div class="text-size-large">Ipsum dolor.</div>
    </div>
</div>
<a href="#" class="button is-secondary w-button">Choose service</a>
</div>
</div>
<div class="toggle-wrapper">
  <div class="text-size-large">Monthly</div>
  <div data-w-id="af20682f-c6f8-4c32-2bd2-459c2fe6579d" class="toggle">
    <div class="toggle-switch"></div>
</div>
<div class="text-size-large">Yearly</div>
</div>
</div>
</div>
</section>
<section class="section-ribbon">
    <div class="padding-global">
      <div class="container-large">
        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</div>
    </div>
</div>
</section>
<section class="section-list">
    <div class="padding-global">
      <div class="container-large">
        <div class="list-title-wrapper">
          <h2 class="heading-style-h5"><strong>Detailed List of services</strong></h2>
          <div>Detailed List of services</div>
      </div>
      <div class="detail-list">
          <div class="detail-item detail-row-title">
            <div id="w-node-_5ce26d8f-6d41-fd8e-fc05-9509ca905d7c-ae446d1d" class="heading-style-h6">Organization</div>
            <div id="w-node-e54b6d7d-0341-65bd-99c8-76087d1399a1-ae446d1d" class="heading-style-h6 text-align-center">Individual</div>
            <div id="w-node-_7ce23783-c37b-d5f5-a533-ff9c665c8ae0-ae446d1d" class="heading-style-h6 text-align-center">Group</div>
            <div id="w-node-_66c2eea7-84c4-d88a-70d8-c60ed9605b5a-ae446d1d" class="heading-style-h6 text-align-center">Organization</div>
        </div>
        <div class="detail-item">
            <div id="w-node-a3dad962-5d4c-de6c-3bd2-d2333884cd00-ae446d1d">Dynamic QR Codes</div>
            <div id="w-node-_5c74a628-78da-9ee6-e103-de7f03664e7e-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-_2a18ab03-113c-1a41-b881-835ce90492d3-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-f45d5aaa-a19e-378f-1047-e2d2fad278b9-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
        </div>
        <div class="detail-item">
            <div id="w-node-_035a1164-5b63-6182-aa9d-7ba6e7bfe0a5-ae446d1d">Annual scans</div>
            <div id="w-node-_035a1164-5b63-6182-aa9d-7ba6e7bfe0a7-ae446d1d" class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-_035a1164-5b63-6182-aa9d-7ba6e7bfe0a8-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-_035a1164-5b63-6182-aa9d-7ba6e7bfe0a9-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
        </div>
        <div class="detail-item">
            <div id="w-node-_07e259d2-ccf9-bf86-1d74-f948fde7618a-ae446d1d">Application-wise templates</div>
            <div id="w-node-_07e259d2-ccf9-bf86-1d74-f948fde7618c-ae446d1d" class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-_07e259d2-ccf9-bf86-1d74-f948fde7618d-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-_07e259d2-ccf9-bf86-1d74-f948fde7618e-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
        </div>
        <div class="detail-item">
            <div id="w-node-_52154111-5993-a091-9845-aef269514110-ae446d1d">Realtime scannability scores</div>
            <div id="w-node-_52154111-5993-a091-9845-aef269514112-ae446d1d" class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-_52154111-5993-a091-9845-aef269514113-ae446d1d" class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-_52154111-5993-a091-9845-aef269514114-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
        </div>
        <div class="detail-item">
            <div id="w-node-_4fab8c06-12da-1ef7-c6c5-226c377f8023-ae446d1d">Error correction</div>
            <div id="w-node-_4fab8c06-12da-1ef7-c6c5-226c377f8025-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-_4fab8c06-12da-1ef7-c6c5-226c377f8026-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-_4fab8c06-12da-1ef7-c6c5-226c377f8027-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
        </div>
        <div class="detail-item">
            <div id="w-node-fb6986ca-ddff-d01c-a655-f5dde03336a7-ae446d1d">Multiple download formats</div>
            <div id="w-node-fb6986ca-ddff-d01c-a655-f5dde03336a9-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-fb6986ca-ddff-d01c-a655-f5dde03336aa-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-fb6986ca-ddff-d01c-a655-f5dde03336ab-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
        </div>
        <div class="detail-item">
            <div id="w-node-a717c6bf-b8ca-c1d6-5a26-795e5cc197be-ae446d1d">Tracks scans/time of day</div>
            <div id="w-node-a717c6bf-b8ca-c1d6-5a26-795e5cc197c0-ae446d1d" class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-a717c6bf-b8ca-c1d6-5a26-795e5cc197c1-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-a717c6bf-b8ca-c1d6-5a26-795e5cc197c2-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
        </div>
        <div class="detail-item">
            <div id="w-node-af211f5c-df3c-9fa1-fa19-85e08587b1d9-ae446d1d">Email reports</div>
            <div id="w-node-af211f5c-df3c-9fa1-fa19-85e08587b1db-ae446d1d" class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-af211f5c-df3c-9fa1-fa19-85e08587b1dc-ae446d1d" class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
            <div id="w-node-af211f5c-df3c-9fa1-fa19-85e08587b1dd-ae446d1d" class="icon check w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12" fill="currentColor">
                <path d="M5.20116 8.6414L13.4577 0.384839C13.7143 0.128279 14.0408 0 14.4373 0C14.8338 0 15.1603 0.128279 15.4169 0.384839C15.6735 0.641399 15.8017 0.967929 15.8017 1.36443C15.8017 1.76093 15.6735 2.08746 15.4169 2.34402L6.18075 11.5802C5.90087 11.8601 5.57434 12 5.20116 12C4.82798 12 4.50145 11.8601 4.22157 11.5802L0.583081 7.94169C0.326522 7.68513 0.198242 7.3586 0.198242 6.9621C0.198242 6.5656 0.326522 6.23907 0.583081 5.98251C0.839641 5.72595 1.16617 5.59767 1.56267 5.59767C1.95918 5.59767 2.28571 5.72595 2.54227 5.98251L5.20116 8.6414Z" fill="currentColor"></path>
            </svg></div>
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