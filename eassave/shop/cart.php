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
    header("Location: shop.php"); // Redirect to an error page if no slug is found
    exit();
}

$slug = $_GET['slug'];

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

<!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="665f147b743ba95cae446d57" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Cart</title>
  <base href="http://localhost/eassave.com/eassave/shop">
  <meta content="Cart" property="og:title">
  <meta content="Cart" property="twitter:title">
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
  <div class="page-wrapper bg-gray-f9">
    <div class="global-styles w-embed">

       <!-- Custom CSS -->
       <?php include '../partials/global-css.css'; ?>

   </div>
   <main class="main-wrapper">

     <!-- Navigation -->
     <?php include '../partials/navigation-light.html'; ?>


     <section class="section-user-profile">
        <div class="padding-global">
          <div class="container-large">
            <div class="flex-left-center">
              <a href="#" class="return-link w-inline-block">
                <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.71577 9.55044C4.61623 8.65075 3.98708 6.99164 2.30799 6.09209L11.5193 6.09209L11.5193 5.52066L2.30908 5.52066C3.98736 4.62097 4.61625 2.96238 4.71577 2.06289L4.14781 2.00005C4.03868 2.98635 3.17224 5.08753 0.571303 5.49713L0.61632 5.78299L0.61632 5.83034L0.571303 6.1162C3.17224 6.5258 4.03868 8.62698 4.14781 9.61328L4.71577 9.55044Z" fill="currentColor"></path>
                </svg></div>
                <div>Back to Shop</div>
            </a>
        </div>
        <div class="bread-crumbs-wrapper top-10">
          <div>
            <h1 class="heading-style-h5">Shopping Cart</h1>
        </div>
        <div class="bread-crumbs-container">
            <a href="../index.html" class="breadcrumbs">Home</a><img src="images/bi_chevron-down.svg" loading="lazy" alt="">
            <a href="../shop.html" class="breadcrumbs">Shop</a><img src="images/bi_chevron-down.svg" loading="lazy" alt="">
            <a href="../shop/cart.html" aria-current="page" class="breadcrumbs w--current">Cart</a>
        </div>
    </div>
    <div class="user-profile-con">
      <div id="w-node-e11a4f71-dba0-6b38-caea-5855151e9602-ae446d57" class="cart-container">
        <div class="cart-grid">
          <div class="product-title-con">
            <div class="form-block w-form">
              <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form" data-wf-page-id="665f147b743ba95cae446d57" data-wf-element-id="2a45cb01-7d87-deae-cbb7-541c6eaf5b90"><label class="w-checkbox checkbox-field all-cart-checkbox">
                  <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox green-check"></div><input type="checkbox" id="checkAllBtn" name="All-Check" data-name="All Check" style="opacity:0;position:absolute;z-index:-1"><span class="cart-check-label w-form-label" for="All-Check">Products</span>
              </label></form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div>
    </div>
    <div class="product-content-con">
        <div>Price</div>
    </div>
    <div class="product-content-con">
        <div>Variation</div>
    </div>
    <div class="product-content-con">
        <div>Subtotal</div>
    </div>
    <div class="product-content-con">
        <div>Actions</div>
    </div>
</div>
<div class="cart-form w-form">
  <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" data-wf-page-id="665f147b743ba95cae446d57" data-wf-element-id="8c4470a4-e788-6d7e-6735-88c9cbc2bc08"><label class="w-checkbox cart-item">
      <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox green-check cart-item-check"></div><input type="checkbox" name="" data-name="" style="opacity:0;position:absolute;z-index:-1">
      <div class="cart-details-wrapper">
        <div class="feat-img-wrapper"><img src="images/sample-card.png" loading="lazy" alt="" class="feature-img">
          <div class="cart-name-wrapper">
            <div>Marker</div>
            <div class="color-container"><img src="images/Blue_1Blue.png" loading="lazy" alt="" class="color-picked">
              <div>Bright Blue</div>
          </div>
      </div>
  </div>
  <div class="cart-content-con">
      <div>₱15,000</div>
  </div>
  <div class="cart-content-con">
      <div class="counter-wrapper">
        <a href="#" class="subtract w-inline-block"><img src="images/Subtract.svg" loading="lazy" alt=""></a>
        <div class="counter-number">1</div>
        <a href="#" class="add w-inline-block"><img src="images/Add.svg" loading="lazy" alt=""></a>
    </div>
</div>
<div class="cart-content-con">
  <div>₱15,000</div>
</div>
<div class="cart-content-con">
  <div class="edit-btns-wrapper">
    <div class="edit-con">
      <a href="#" class="icon-button edit-btn w-inline-block">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
            <path d="M7.3335 2.66663H2.66683C2.31321 2.66663 1.97407 2.8071 1.72402 3.05715C1.47397 3.3072 1.3335 3.64634 1.3335 3.99996V13.3333C1.3335 13.6869 1.47397 14.0261 1.72402 14.2761C1.97407 14.5262 2.31321 14.6666 2.66683 14.6666H12.0002C12.3538 14.6666 12.6929 14.5262 12.943 14.2761C13.193 14.0261 13.3335 13.6869 13.3335 13.3333V8.66663" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M12.3335 1.66665C12.5987 1.40144 12.9584 1.25244 13.3335 1.25244C13.7086 1.25244 14.0683 1.40144 14.3335 1.66665C14.5987 1.93187 14.7477 2.29158 14.7477 2.66665C14.7477 3.04173 14.5987 3.40144 14.3335 3.66665L8.00016 9.99999L5.3335 10.6667L6.00016 7.99999L12.3335 1.66665Z" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg></div>
    </a>
    <a href="#" class="icon-button delete-btn w-inline-block">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
            <g clip-path="url(#clip0_1835_4256)">
              <path d="M10.6668 6V12.6667H5.3335V6H10.6668ZM9.66683 2H6.3335L5.66683 2.66667H3.3335V4H12.6668V2.66667H10.3335L9.66683 2ZM12.0002 4.66667H4.00016V12.6667C4.00016 13.4 4.60016 14 5.3335 14H10.6668C11.4002 14 12.0002 13.4 12.0002 12.6667V4.66667Z" fill="currentColor"></path>
          </g>
          <defs>
              <clippath id="clip0_1835_4256">
                <rect width="16" height="16" fill="white"></rect>
            </clippath>
        </defs>
    </svg></div>
</a>
</div>
</div>
<div class="view-details">
    <div class="text-block">View details</div><img src="images/gridicons_dropdown.svg" loading="lazy" alt="">
</div>
</div>
</div>

 

</label><label class="w-checkbox cart-item">
  <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox green-check cart-item-check"></div><input type="checkbox" name="All-Check-2" data-name="All Check 2" style="opacity:0;position:absolute;z-index:-1">
  <div class="cart-details-wrapper">
    <div class="feat-img-wrapper"><img src="images/sample-card.png" loading="lazy" alt="" class="feature-img">
      <div class="cart-name-wrapper">
        <div>Marker</div>
        <div class="color-container"><img src="images/Blue_1Blue.png" loading="lazy" alt="" class="color-picked">
          <div>Bright Blue</div>
      </div>
  </div>
</div>
<div class="cart-content-con">
  <div>₱15,000</div>
</div>
<div class="cart-content-con">
  <div class="counter-wrapper">
    <a href="#" class="subtract w-inline-block"><img src="images/Subtract.svg" loading="lazy" alt=""></a>
    <div class="counter-number">1</div>
    <a href="#" class="add w-inline-block"><img src="images/Add.svg" loading="lazy" alt=""></a>
</div>
</div>
<div class="cart-content-con">
  <div>₱15,000</div>
</div>
<div class="cart-content-con">
  <div class="edit-btns-wrapper">
    <div class="edit-con">
      <a href="#" class="icon-button edit-btn w-inline-block">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
            <path d="M7.3335 2.66663H2.66683C2.31321 2.66663 1.97407 2.8071 1.72402 3.05715C1.47397 3.3072 1.3335 3.64634 1.3335 3.99996V13.3333C1.3335 13.6869 1.47397 14.0261 1.72402 14.2761C1.97407 14.5262 2.31321 14.6666 2.66683 14.6666H12.0002C12.3538 14.6666 12.6929 14.5262 12.943 14.2761C13.193 14.0261 13.3335 13.6869 13.3335 13.3333V8.66663" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M12.3335 1.66665C12.5987 1.40144 12.9584 1.25244 13.3335 1.25244C13.7086 1.25244 14.0683 1.40144 14.3335 1.66665C14.5987 1.93187 14.7477 2.29158 14.7477 2.66665C14.7477 3.04173 14.5987 3.40144 14.3335 3.66665L8.00016 9.99999L5.3335 10.6667L6.00016 7.99999L12.3335 1.66665Z" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg></div>
    </a>
    <a href="#" class="icon-button delete-btn w-inline-block">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
            <g clip-path="url(#clip0_1835_4256)">
              <path d="M10.6668 6V12.6667H5.3335V6H10.6668ZM9.66683 2H6.3335L5.66683 2.66667H3.3335V4H12.6668V2.66667H10.3335L9.66683 2ZM12.0002 4.66667H4.00016V12.6667C4.00016 13.4 4.60016 14 5.3335 14H10.6668C11.4002 14 12.0002 13.4 12.0002 12.6667V4.66667Z" fill="currentColor"></path>
          </g>
          <defs>
              <clippath id="clip0_1835_4256">
                <rect width="16" height="16" fill="white"></rect>
            </clippath>
        </defs>
    </svg></div>
</a>
</div>
</div>
<div class="view-details">
    <div class="text-block">View details</div><img src="images/gridicons_dropdown.svg" loading="lazy" alt="">
</div>
</div>
</div>
</label><label class="w-checkbox cart-item">
  <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox green-check cart-item-check"></div><input type="checkbox" name="All-Check-2" data-name="All Check 2" style="opacity:0;position:absolute;z-index:-1">
  <div class="cart-details-wrapper">
    <div class="feat-img-wrapper"><img src="images/sample-card.png" loading="lazy" alt="" class="feature-img">
      <div class="cart-name-wrapper">
        <div>Marker</div>
        <div class="color-container"><img src="images/Blue_1Blue.png" loading="lazy" alt="" class="color-picked">
          <div>Bright Blue</div>
      </div>
  </div>
</div>
<div class="cart-content-con">
  <div>₱15,000</div>
</div>
<div class="cart-content-con">
  <div class="counter-wrapper">
    <a href="#" class="subtract w-inline-block"><img src="images/Subtract.svg" loading="lazy" alt=""></a>
    <div class="counter-number">1</div>
    <a href="#" class="add w-inline-block"><img src="images/Add.svg" loading="lazy" alt=""></a>
</div>
</div>
<div class="cart-content-con">
  <div>₱15,000</div>
</div>
<div class="cart-content-con">
  <div class="edit-btns-wrapper">
    <div class="edit-con">
      <a href="#" class="icon-button edit-btn w-inline-block">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
            <path d="M7.3335 2.66663H2.66683C2.31321 2.66663 1.97407 2.8071 1.72402 3.05715C1.47397 3.3072 1.3335 3.64634 1.3335 3.99996V13.3333C1.3335 13.6869 1.47397 14.0261 1.72402 14.2761C1.97407 14.5262 2.31321 14.6666 2.66683 14.6666H12.0002C12.3538 14.6666 12.6929 14.5262 12.943 14.2761C13.193 14.0261 13.3335 13.6869 13.3335 13.3333V8.66663" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M12.3335 1.66665C12.5987 1.40144 12.9584 1.25244 13.3335 1.25244C13.7086 1.25244 14.0683 1.40144 14.3335 1.66665C14.5987 1.93187 14.7477 2.29158 14.7477 2.66665C14.7477 3.04173 14.5987 3.40144 14.3335 3.66665L8.00016 9.99999L5.3335 10.6667L6.00016 7.99999L12.3335 1.66665Z" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg></div>
    </a>
    <a href="#" class="icon-button delete-btn w-inline-block">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
            <g clip-path="url(#clip0_1835_4256)">
              <path d="M10.6668 6V12.6667H5.3335V6H10.6668ZM9.66683 2H6.3335L5.66683 2.66667H3.3335V4H12.6668V2.66667H10.3335L9.66683 2ZM12.0002 4.66667H4.00016V12.6667C4.00016 13.4 4.60016 14 5.3335 14H10.6668C11.4002 14 12.0002 13.4 12.0002 12.6667V4.66667Z" fill="currentColor"></path>
          </g>
          <defs>
              <clippath id="clip0_1835_4256">
                <rect width="16" height="16" fill="white"></rect>
            </clippath>
        </defs>
    </svg></div>
</a>
</div>
</div>
<div class="view-details">
    <div class="text-block">View details</div><img src="images/gridicons_dropdown.svg" loading="lazy" alt="">
</div>
</div>
</div>
</label><label class="w-checkbox cart-item">
  <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox green-check cart-item-check"></div><input type="checkbox" name="All-Check-2" data-name="All Check 2" style="opacity:0;position:absolute;z-index:-1">
  <div class="cart-details-wrapper">
    <div class="feat-img-wrapper"><img src="images/sample-card.png" loading="lazy" alt="" class="feature-img">
      <div class="cart-name-wrapper">
        <div>Price</div>
        <div class="color-container"><img src="images/Blue_1Blue.png" loading="lazy" alt="" class="color-picked">
          <div>Bright Blue</div>
      </div>
  </div>
</div>
<div class="cart-content-con">
  <div>₱15,000</div>
</div>
<div class="cart-content-con">
  <div class="counter-wrapper">
    <a href="#" class="subtract w-inline-block"><img src="images/Subtract.svg" loading="lazy" alt=""></a>
    <div class="counter-number">1</div>
    <a href="#" class="add w-inline-block"><img src="images/Add.svg" loading="lazy" alt=""></a>
</div>
</div>
<div class="cart-content-con">
  <div>₱15,000</div>
</div>
<div class="cart-content-con">
  <div class="edit-btns-wrapper">
    <div class="edit-con">
      <a href="#" class="icon-button edit-btn w-inline-block">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
            <path d="M7.3335 2.66663H2.66683C2.31321 2.66663 1.97407 2.8071 1.72402 3.05715C1.47397 3.3072 1.3335 3.64634 1.3335 3.99996V13.3333C1.3335 13.6869 1.47397 14.0261 1.72402 14.2761C1.97407 14.5262 2.31321 14.6666 2.66683 14.6666H12.0002C12.3538 14.6666 12.6929 14.5262 12.943 14.2761C13.193 14.0261 13.3335 13.6869 13.3335 13.3333V8.66663" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M12.3335 1.66665C12.5987 1.40144 12.9584 1.25244 13.3335 1.25244C13.7086 1.25244 14.0683 1.40144 14.3335 1.66665C14.5987 1.93187 14.7477 2.29158 14.7477 2.66665C14.7477 3.04173 14.5987 3.40144 14.3335 3.66665L8.00016 9.99999L5.3335 10.6667L6.00016 7.99999L12.3335 1.66665Z" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg></div>
    </a>
    <a href="#" class="icon-button delete-btn w-inline-block">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
            <g clip-path="url(#clip0_1835_4256)">
              <path d="M10.6668 6V12.6667H5.3335V6H10.6668ZM9.66683 2H6.3335L5.66683 2.66667H3.3335V4H12.6668V2.66667H10.3335L9.66683 2ZM12.0002 4.66667H4.00016V12.6667C4.00016 13.4 4.60016 14 5.3335 14H10.6668C11.4002 14 12.0002 13.4 12.0002 12.6667V4.66667Z" fill="currentColor"></path>
          </g>
          <defs>
              <clippath id="clip0_1835_4256">
                <rect width="16" height="16" fill="white"></rect>
            </clippath>
        </defs>
    </svg></div>
</a>
</div>
</div>
<div class="view-details">
    <div class="text-block">View details</div><img src="images/gridicons_dropdown.svg" loading="lazy" alt="">
</div>
</div>
</div>
</label></form>
<div class="w-form-done">
    <div>Thank you! Your submission has been received!</div>
</div>
<div class="w-form-fail">
    <div>Oops! Something went wrong while submitting the form.</div>
</div>
</div>
</div>
<div id="w-node-e11a4f71-dba0-6b38-caea-5855151e9680-ae446d57" class="payment-wrapper summary-con">
    <div class="summary-title-wrapper">
      <div class="text-size-large">Summary</div>
      <div class="items">2 items</div>
  </div>
  <div class="form-block w-form">
      <form id="affiliate-form" name="email-form" data-name="Email Form" method="get" class="form" data-wf-page-id="665f147b743ba95cae446d57" data-wf-element-id="e11a4f71-dba0-6b38-caea-5855151e9687">
        <div class="news-wrapper"><input class="text-field news-field w-input" maxlength="256" name="Affiliate-Code" data-name="Affiliate Code" placeholder="Affiliate or Coupon Code" type="text" id="Affiliate-Code">
          <div data-w-id="e11a4f71-dba0-6b38-caea-5855151e968a" class="button is-icon absolute-btn square-btn">
            <div class="btn-text">Apply</div>
            <div class="button-overlay pointer-events-off"></div><input type="submit" data-wait="" class="submit-btn w-button" value="">
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
<div class="total-grid">
  <div class="total-con">
    <div>SubTotal</div>
    <div class="amount">71,000</div>
</div>
<div class="total-con">
    <div>Shipping Fee</div>
    <div class="amount">₱200</div>
</div>
<div class="total-con">
    <div>Total Amount</div>
    <div class="amount total">₱71,200</div>
</div>
</div>
<a href="#" class="button button-black">Continue to Payment</a>
</div>
</div>
</div>
</div>
</section>
<section class="section-footer">
    <div class="padding-global navlist-padding">
      <div class="container-large">
        <div class="footer-wrapper">
          <div id="w-node-ef992205-966c-748f-d053-488a176f9593-176f958f" class="footer-column">
            <div class="footer-link-title bot-5">SITE LINKS</div>
            <a id="w-node-ef992205-966c-748f-d053-488a176f9596-176f958f" href="#" class="footer-link">Home</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f9598-176f958f" href="#" class="footer-link">About Us</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f959a-176f958f" href="#" class="footer-link">Shop</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f959c-176f958f" href="#" class="footer-link">Services</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f959e-176f958f" href="#" class="footer-link hide">Become an Affiliate</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f95a0-176f958f" href="#" class="footer-link">FAQ</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f95a2-176f958f" href="#" class="footer-link">Contact Us</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f95a4-176f958f" href="#" class="footer-link">Blogs</a>
        </div>
        <div id="w-node-ef992205-966c-748f-d053-488a176f95a6-176f958f" class="footer-column">
            <div class="footer-link-title bot-5">SITE LINKS</div>
            <a id="w-node-ef992205-966c-748f-d053-488a176f95a9-176f958f" href="../terms-and-conditions.html" class="footer-link">Terms and Conditions</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f95ab-176f958f" href="../privacy-policy.html" class="footer-link">Privacy Policy</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f95ad-176f958f" href="#" class="footer-link">Product Policy</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f95af-176f958f" href="#" class="footer-link">Shipping Policy</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f95b1-176f958f" href="#" class="footer-link">Return Policy</a>
        </div>
        <div id="w-node-ef992205-966c-748f-d053-488a176f95b3-176f958f" class="footer-column">
            <div class="footer-link-title bot-5">QUICK LINKS</div>
            <a id="w-node-ef992205-966c-748f-d053-488a176f95b6-176f958f" href="#" class="footer-link">Register</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f95b8-176f958f" href="#" class="footer-link">Login</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f95ba-176f958f" href="#" class="footer-link">Activate Card</a>
            <a id="w-node-ef992205-966c-748f-d053-488a176f95bc-176f958f" href="#" class="footer-link">Give us a feedback</a>
        </div>
        <div id="w-node-ef992205-966c-748f-d053-488a176f95be-176f958f" class="signup-wrapper">
            <div class="heading-style-h6 news-letter-title">Sign up to our newsletter.</div>
            <div class="bot-20">Get the latest news and update.</div>
            <div class="form-block w-form">
              <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form" data-wf-page-id="665f147b743ba95cae446d57" data-wf-element-id="ef992205-966c-748f-d053-488a176f95c4">
                <div class="news-wrapper"><input class="text-field news-field w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Default" type="email" id="email-2">
                  <div data-w-id="ef992205-966c-748f-d053-488a176f95c7" class="button is-icon absolute-btn">
                    <div class="btn-text">Send</div>
                    <div class="icon-1x1-small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.32481 1.89973C5.86086 2.62911 7.23527 3.75138 9.13918 3.69086L1.16196 8.29651L1.44768 8.79138L9.42395 4.18628C8.42036 5.80457 8.70502 7.5554 9.06858 8.38414L9.59187 8.15458C9.19323 7.24586 8.893 4.99296 10.9407 3.33777L10.7588 3.11272L10.7351 3.07171L10.6311 2.80164C8.17386 3.74738 6.37291 2.36093 5.78526 1.56133L5.32481 1.89973Z" fill="white"></path>
                    </svg></div>
                    <div class="button-overlay pointer-events-off"></div><input type="submit" data-wait="" class="submit-btn w-button" value="">
                </div>
            </div><label class="w-checkbox checkbox-field">
              <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox w--redirected-checked"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1" checked=""><span class="cart-check-label w-form-label" for="checkbox-2">I agree with the <a href="#">Terms and Conditions</a></span>
          </label>
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
    </div>
    <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
    </div>
</div>
</div>
</div>
<div class="footernote-wrapper">
  <div id="footer-note">Copyright © 2022 Eassave. All Rights Reserved.</div>
</div>
</div>
</div>
</section>
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
<script>
    $('.cart-item-check').each(function(){
       $(this).click(function(){
          var isChecked = $("#checkAllBtn").prop('checked');
          if(!$(this).hasClass('checked') ) {
  		  //$(this).click();
            $(this).addClass("checked");
            console.log("CHECKED")
        } 
        else 
        {
           $(this).removeClass('checked');
           console.log("NOT CHECKED")
       }
   }); 
   });
    $('#checkAllBtn').click(function(){
        var isChecked = $(this).prop('checked');
        console.log(isChecked);
        if(isChecked)
        {
           $('.cart-item-check').each(function(){
            if (!$(this).hasClass('checked')) {
                $(this).click();
            }  
        });
       }
       else
       {
           $('.cart-item-check').each(function(){
             if($(this).hasClass('checked') ) 
             {
                 $(this).click();
             }    
         });
       }
   });
  // Get all elements with the cart-item class
    const cartItems = document.querySelectorAll('.cart-item');
  // Loop through each cart item
    cartItems.forEach(item => {
        const subtractBtn = item.querySelector('.subtract');
        const addBtn = item.querySelector('.add');
        const counter = item.querySelector('.counter-number');
    // Add event listener for subtract button
        subtractBtn.addEventListener('click', () => {
          let count = parseInt(counter.textContent);
          if (count > 1) {
            count--;
            counter.textContent = count;
        }
    });
    // Add event listener for add button
        addBtn.addEventListener('click', () => {
          let count = parseInt(counter.textContent);
          count++;
          counter.textContent = count;
      });
    });
</script>
</body>
</html>