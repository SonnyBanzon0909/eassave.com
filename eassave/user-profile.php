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


?>

<!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="665f147b743ba95cae446d1f" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>User Profile</title>
  <meta content="User Profile" property="og:title">
  <meta content="User Profile" property="twitter:title">
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
  <div class="page-wrapper bg-gray-f9">
    <div class="global-styles w-embed">
      <style>
/* Make text look crisper and more legible in all browsers */
body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
/* Focus state style for keyboard navigation for the focusable elements */
*[tabindex]:focus-visible,
input[type="file"]:focus-visible {
   outline: 0.125rem solid #4d65ff;
   outline-offset: 0.125rem;
}
/* Get rid of top margin on first element in any rich text element */
.w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
  margin-top: 0 !important;
}
/* Get rid of bottom margin on last element in any rich text element */
.w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
    margin-bottom: 0 !important;
}
/* Prevent all click and hover interaction with an element */
.pointer-events-off {
    pointer-events: none;
}
/* Enables all click and hover interaction with an element */
.pointer-events-on {
  pointer-events: auto;
}
/* Create a class of .div-square which maintains a 1:1 dimension of a div */
.div-square::after {
    content: "";
    display: block;
    padding-bottom: 100%;
}
/* Make sure containers never lose their center alignment */
.container-medium,.container-small, .container-large {
    margin-right: auto !important;
    margin-left: auto !important;
}
/* 
Make the following elements inherit typography styles from the parent and not have hardcoded values. 
Important: You will not be able to style for example "All Links" in Designer with this CSS applied.
Uncomment this CSS to use it in the project. Leave this message for future hand-off.
*/
/*
a,
.w-input,
.w-select,
.w-tab-link,
.w-nav-link,
.w-dropdown-btn,
.w-dropdown-toggle,
.w-dropdown-link {
  color: inherit;
  text-decoration: inherit;
  font-size: inherit;
}
*/
/* Apply "..." after 3 lines of text */
.text-style-3lines {
    display: -webkit-box;
    overflow: hidden;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}
/* Apply "..." after 2 lines of text */
.text-style-2lines {
    display: -webkit-box;
    overflow: hidden;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
/* Adds inline flex display */
.display-inlineflex {
  display: inline-flex;
}
/* These classes are never overwritten */
.hide {
  display: none !important;
}
.margin-0 {
  margin: 0rem !important;
}
.padding-0 {
  padding: 0rem !important;
}
.spacing-clean {
    padding: 0rem !important;
    margin: 0rem !important;
}
.margin-top {
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-top {
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-right {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-right {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-bottom {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-bottom {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
.margin-left {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-left {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-horizontal {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-horizontal {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-vertical {
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-vertical {
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
.why-list.owl-carousel .owl-stage-outer
{
    overflow: visible;
}
.why-list.owl-carousel .owl-stage
{
    padding-left: 0;
}
.partners-list .owl-item img
{
    width: auto !important;
}
.partners-list.owl-carousel .owl-stage-outer, .testimonial-list.owl-carousel .owl-stage-outer, .about-gallery-list.owl-carousel .owl-stage-outer
{
    overflow: visible !important;
}
a
{
    color: #0A4DF6;
}
.select, .select-field {
    appearance: none; /* Removes default arrow icon in some browsers */
    -webkit-appearance: none; /* Removes default arrow icon in Safari */
    -moz-appearance: none; /* Removes default arrow icon in Firefox */
}
.w-slide [aria-hidden="true"] {
 height: 0px !important;
}
.dots-container .w-slider-dot 
{
  width: 25%;
  height: 2px;
  background-color: #717171;
  border-radius: 0px !important;
  padding:0 !important;
  margin: 0 !important;
}
.dots-container .w-slider-dot.w-active
{
  background-color: #0629A3;
}
.dots-container .w-slider-dot:hover
{
  background-color: #0629A3;
}
.sidenav-button:hover .icon
{
    color: white;
}
.sidenav-button.w--current .icon
{
    color: white;
}
.recent-list .owl-stage
{
    padding-left: 0 !important;
}
.label span
{
    color: #EB5757;
}   
.active-swiper {
  /* Make sure the container has enough height and width */
  height: 100%;
  width: 100%;
}
.swiper-slide {
  /* Adjust styles for each slide as needed */
  width: auto; /* or a specific width */
}
.tabs span
{
    font-size: 12px;
    color: #D0222D;
}
/*For File Upload*/
.file-upload {
    display: flex;
    align-items: center;
    min-height: 34px;
    color: #fff;
}
.file-upload.disabled
{   
    color: #828282;
}
.file-upload input[type="file"] {
    display: none; /* Hide the default file input */
}
.file-upload label {
    background-color: #5028FF;
    padding: 8px 24px;
    cursor: pointer;
    border-radius: 50px;
    margin: 0;
}
.file-upload.disabled label 
{
    background-color: #CACACA;
}
.file-name {
    margin: 0 8px;
    font-size: 14px;
    font-weight: 400;
    color: #171717;
}
.remove-file {
    cursor: pointer;
    background-image: url('https://uploads-ssl.webflow.com/665f147b743ba95cae446cfe/66a51772340eb291308ac0da_close_24px.svg');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    width: 24px;
    height: 24px;
    display: none;
}
.scolling-wrapper::-webkit-scrollbar {
  width: 0px;
}
.color
{
	margin: 0 14px;
  width: 50px;
  height: 50px;
  padding: 1px 0px;
  border: 1px solid #BDBDBD;
  border-radius: 3px;
  padding-block: 0px;
  padding-inline: 0px;
}
.color-text-field
{
   border: solid 1px #BDBDBD;
}
.label-text
{
	min-width: 100px;
}
.color
{
	flex: none;
  cursor: pointer;
}
.radio-button-field .layout-radio.w--redirected-checked ~ .radio-phone-template {
    border: solid 3px #19A733;
}
.radio-button-field .layout-radio.w--redirected-checked + .radio-phone-template {
    border: solid 3px #19A733;
}
.radio-button-field.w--redirected-checked .radio-phone-template {
    border: solid 3px #19A733;
}
@media screen and (max-width: 991px) {
    .hide, .hide-tablet {
        display: none !important;
    }
}
@media screen and (max-width: 767px) {
    .hide-mobile-landscape{
      display: none !important;
  }
}
@media screen and (max-width: 479px) {
    .hide-mobile{
      display: none !important;
  }
  .label-text
  {
    min-width: 95px;
    font-size: 12px;
}
.color
{
 margin: 0 4px !important;
}
.color-field
{
 max-width: 55%;
}
}
/* Remove the spinner arrows for Chrome, Safari, Edge */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
</div>
<main class="main-wrapper">

    <!-- Navigation -->
    <?php include 'partials/navigation-light.html'; ?>


    <section class="section-user-profile">
        <div class="padding-global user-profile-padding-global">
          <div class="container-large">
            <div class="user-profile-wrapper">
              <div id="w-node-c67de879-8571-3066-c007-09fecf7d1e7e-cf7d1e7e" class="user-navigation-wrapper">
                <div class="user-button-wrapper">
                  <div class="profile-name-wrapper"><img src="images/Ellipse-77_1Ellipse-77.png" loading="lazy" alt="" class="profile-img">
                    <div class="name-wrapper">
                      <div class="text-size-regular">Jenny Dela Cruz</div>
                      <div class="text-size-regular email">Jennydelacruz@gmail.com</div>
                  </div>
              </div>
              <div class="user-button-grid">
                <a href="#" class="sidenav-button w-inline-block">
                  <div class="icon color-blue w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                      <path d="M3.6665 13H6.1665V8.83333H9.83317V13H12.3332V6.5L7.99984 3.25L3.6665 6.5V13ZM3.6665 14C3.3915 14 3.15609 13.9021 2.96025 13.7063C2.76442 13.5104 2.6665 13.275 2.6665 13V6.5C2.6665 6.34167 2.70192 6.19167 2.77275 6.05C2.84359 5.90833 2.9415 5.79167 3.0665 5.7L7.39984 2.45C7.492 2.38333 7.58836 2.33333 7.6889 2.3C7.78945 2.26667 7.89419 2.25 8.00312 2.25C8.11204 2.25 8.21603 2.26667 8.31507 2.3C8.41413 2.33333 8.50905 2.38333 8.59984 2.45L12.9332 5.7C13.0582 5.79167 13.1561 5.90833 13.2269 6.05C13.2978 6.19167 13.3332 6.34167 13.3332 6.5V13C13.3332 13.275 13.2353 13.5104 13.0394 13.7063C12.8436 13.9021 12.6082 14 12.3332 14H8.83317V9.83333H7.1665V14H3.6665Z" fill="currentColor"></path>
                  </svg></div>
                  <div>Dashboard</div>
              </a>
              <a href="#" class="sidenav-button w-inline-block">
                  <div class="icon color-blue w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                      <path d="M1.09091 13C0.8 13 0.545455 12.8929 0.327273 12.6786C0.109091 12.4643 0 12.2143 0 11.9286V4.07143C0 3.78571 0.109091 3.53571 0.327273 3.32143C0.545455 3.10714 0.8 3 1.09091 3H9.09091C9.38182 3 9.63636 3.10714 9.85455 3.32143C10.0727 3.53571 10.1818 3.78571 10.1818 4.07143V11.9286C10.1818 12.2143 10.0727 12.4643 9.85455 12.6786C9.63636 12.8929 9.38182 13 9.09091 13H1.09091ZM1.09091 11C1.68485 10.619 2.32424 10.3333 3.00909 10.1429C3.69394 9.95238 4.38788 9.85714 5.09091 9.85714C5.79394 9.85714 6.48788 9.95238 7.17273 10.1429C7.85758 10.3333 8.49697 10.619 9.09091 11V4.07143H1.09091V11ZM5.09091 10.9286C4.44848 10.9286 3.83636 11.0089 3.25455 11.1696C2.67273 11.3304 2.13333 11.5833 1.63636 11.9286H8.54545C8.02424 11.5833 7.46667 11.3304 6.87273 11.1696C6.27879 11.0089 5.68485 10.9286 5.09091 10.9286ZM5.09091 8.91071C4.53333 8.91071 4.05758 8.71726 3.66364 8.33036C3.2697 7.94345 3.07273 7.47619 3.07273 6.92857C3.07273 6.38095 3.2697 5.91369 3.66364 5.52679C4.05758 5.13988 4.53333 4.94643 5.09091 4.94643C5.64848 4.94643 6.12424 5.13988 6.51818 5.52679C6.91212 5.91369 7.10909 6.38095 7.10909 6.92857C7.10909 7.47619 6.91212 7.94345 6.51818 8.33036C6.12424 8.71726 5.64848 8.91071 5.09091 8.91071ZM5.08182 7.96429C5.37879 7.96429 5.6303 7.86607 5.83636 7.66964C6.04242 7.47321 6.14545 7.22917 6.14545 6.9375C6.14545 6.64583 6.04293 6.39881 5.83787 6.19643C5.63283 5.99405 5.38384 5.89286 5.09091 5.89286C4.78788 5.89286 4.53636 5.99355 4.33636 6.19495C4.13636 6.39633 4.03636 6.64087 4.03636 6.92857C4.03636 7.22619 4.13636 7.47321 4.33636 7.66964C4.53636 7.86607 4.78485 7.96429 5.08182 7.96429ZM12.5423 13C12.3868 13 12.2576 12.9487 12.1545 12.846C12.0515 12.7433 12 12.6161 12 12.4643V3.53571C12 3.38393 12.0526 3.2567 12.1577 3.15402C12.2629 3.05134 12.3932 3 12.5486 3C12.7041 3 12.8333 3.05134 12.9364 3.15402C13.0394 3.2567 13.0909 3.38393 13.0909 3.53571V12.4643C13.0909 12.6161 13.0383 12.7433 12.9332 12.846C12.828 12.9487 12.6977 13 12.5423 13ZM15.4514 13C15.2959 13 15.1667 12.9487 15.0636 12.846C14.9606 12.7433 14.9091 12.6161 14.9091 12.4643V3.53571C14.9091 3.38393 14.9617 3.2567 15.0668 3.15402C15.172 3.05134 15.3023 3 15.4577 3C15.6132 3 15.7424 3.05134 15.8455 3.15402C15.9485 3.2567 16 3.38393 16 3.53571V12.4643C16 12.6161 15.9474 12.7433 15.8423 12.846C15.7371 12.9487 15.6068 13 15.4514 13Z" fill="currentColor"></path>
                  </svg></div>
                  <div>Manage Cards</div>
              </a>
              <a href="shop/my-order.html" class="sidenav-button w-inline-block">
                  <div class="icon color-blue w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                      <path d="M3.7002 14.6667C3.21408 14.6667 2.80089 14.4965 2.46061 14.1563C2.12033 13.816 1.9502 13.4028 1.9502 12.9167V11.3334C1.9502 11.1917 1.99811 11.0729 2.09395 10.9771C2.18978 10.8813 2.30853 10.8334 2.4502 10.8334H4.06686V1.76668C4.06686 1.65557 4.11131 1.60002 4.2002 1.60002C4.28908 1.60002 4.37797 1.64446 4.46686 1.73335L5.06686 2.33335L5.88353 1.51668C5.93504 1.46113 5.99514 1.43335 6.06383 1.43335C6.13252 1.43335 6.19464 1.46113 6.2502 1.51668L7.0502 2.33335L7.86686 1.51668C7.91837 1.46113 7.97847 1.43335 8.04716 1.43335C8.11585 1.43335 8.17797 1.46113 8.23353 1.51668L9.05019 2.33335L9.86686 1.51668C9.91837 1.46113 9.97847 1.43335 10.0472 1.43335C10.1159 1.43335 10.178 1.46113 10.2335 1.51668L11.0502 2.33335L11.8669 1.51668C11.9184 1.46113 11.9785 1.43335 12.0472 1.43335C12.1159 1.43335 12.178 1.46113 12.2335 1.51668L13.0502 2.33335L13.6502 1.73335C13.7391 1.64446 13.828 1.60002 13.9169 1.60002C14.0057 1.60002 14.0502 1.65708 14.0502 1.77122V12.9167C14.0502 13.4028 13.8801 13.816 13.5398 14.1563C13.1995 14.4965 12.7863 14.6667 12.3002 14.6667H3.7002ZM12.3002 13.6667C12.5224 13.6667 12.703 13.5972 12.8419 13.4584C12.9808 13.3195 13.0502 13.1389 13.0502 12.9167V3.00002H5.06686V10.8334H11.0502C11.1919 10.8334 11.3106 10.8813 11.4064 10.9771C11.5023 11.0729 11.5502 11.1917 11.5502 11.3334V12.9141C11.5502 13.138 11.6196 13.3195 11.7585 13.4584C11.8974 13.5972 12.078 13.6667 12.3002 13.6667ZM6.43353 5.63335C6.3002 5.63335 6.18631 5.58335 6.09186 5.48335C5.99742 5.38335 5.9502 5.26391 5.9502 5.12502C5.9502 4.98613 5.99811 4.86946 6.09395 4.77502C6.18978 4.68057 6.30853 4.63335 6.45019 4.63335H9.45019C9.59186 4.63335 9.71061 4.68154 9.80644 4.77793C9.90228 4.87433 9.95019 4.99378 9.95019 5.13627C9.95019 5.27877 9.90228 5.39724 9.80644 5.49168C9.71061 5.58613 9.59186 5.63335 9.45019 5.63335H6.43353ZM6.43353 7.86668C6.3002 7.86668 6.18631 7.81668 6.09186 7.71668C5.99742 7.61668 5.9502 7.49724 5.9502 7.35835C5.9502 7.21946 5.99811 7.10279 6.09395 7.00835C6.18978 6.91391 6.30853 6.86668 6.45019 6.86668H9.45019C9.59186 6.86668 9.71061 6.91488 9.80644 7.01127C9.90228 7.10767 9.95019 7.22711 9.95019 7.3696C9.95019 7.5121 9.90228 7.63057 9.80644 7.72502C9.71061 7.81946 9.59186 7.86668 9.45019 7.86668H6.43353ZM11.5002 5.63335C11.3669 5.63335 11.2502 5.58335 11.1502 5.48335C11.0502 5.38335 11.0002 5.26668 11.0002 5.13335C11.0002 5.00002 11.0502 4.88335 11.1502 4.78335C11.2502 4.68335 11.3669 4.63335 11.5002 4.63335C11.6335 4.63335 11.7502 4.68335 11.8502 4.78335C11.9502 4.88335 12.0002 5.00002 12.0002 5.13335C12.0002 5.26668 11.9502 5.38335 11.8502 5.48335C11.7502 5.58335 11.6335 5.63335 11.5002 5.63335ZM11.5002 7.78335C11.3669 7.78335 11.2502 7.73335 11.1502 7.63335C11.0502 7.53335 11.0002 7.41668 11.0002 7.28335C11.0002 7.15002 11.0502 7.03335 11.1502 6.93335C11.2502 6.83335 11.3669 6.78335 11.5002 6.78335C11.6335 6.78335 11.7502 6.83335 11.8502 6.93335C11.9502 7.03335 12.0002 7.15002 12.0002 7.28335C12.0002 7.41668 11.9502 7.53335 11.8502 7.63335C11.7502 7.73335 11.6335 7.78335 11.5002 7.78335ZM3.68353 13.6667H10.5502V11.8334H2.9502V12.9167C2.9502 13.1389 3.02047 13.3195 3.16103 13.4584C3.30158 13.5972 3.47575 13.6667 3.68353 13.6667Z" fill="currentColor"></path>
                  </svg></div>
                  <div>My Orders</div>
              </a>
              <a href="shop/transaction-history.html" class="sidenav-button w-inline-block">
                  <div class="icon color-blue w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                      <path d="M14.6668 7.99992C14.6668 11.6799 11.6802 14.6666 8.00016 14.6666C4.32016 14.6666 1.3335 11.6799 1.3335 7.99992C1.3335 4.31992 4.32016 1.33325 8.00016 1.33325C11.6802 1.33325 14.6668 4.31992 14.6668 7.99992Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M10.4734 10.1199L8.40675 8.88659C8.04675 8.67326 7.75342 8.15992 7.75342 7.73992V5.00659" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg></div>
                  <div>Transaction History</div>
              </a>
              <a href="#" class="sidenav-button w-inline-block">
                  <div class="icon color-blue w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                      <path d="M8.01647 10.5C7.76091 10.5 7.55814 10.4111 7.40814 10.2333C7.25814 10.0556 7.1998 9.83889 7.23313 9.58333C7.28869 9.18333 7.40814 8.82778 7.59147 8.51667C7.7748 8.20556 8.05536 7.88333 8.43314 7.55C8.8998 7.12778 9.25814 6.73611 9.50814 6.375C9.75814 6.01389 9.88314 5.62682 9.88314 5.21378C9.88314 4.71571 9.71567 4.3 9.38074 3.96667C9.0458 3.63333 8.57994 3.46667 7.98314 3.46667C7.57202 3.46667 7.23087 3.54964 6.95968 3.7156C6.6885 3.88156 6.46853 4.08747 6.2998 4.33333C6.17758 4.51111 6.02202 4.63333 5.83313 4.7C5.64425 4.76667 5.45932 4.76296 5.27837 4.68888C5.05932 4.59629 4.9248 4.43333 4.8748 4.2C4.8248 3.96667 4.86091 3.75556 4.98313 3.56667C5.29425 3.11111 5.70211 2.73611 6.20672 2.44167C6.71132 2.14722 7.30346 2 7.98314 2C9.09628 2 9.95235 2.30934 10.5513 2.92802C11.1503 3.54668 11.4498 4.28962 11.4498 5.15683C11.4498 5.68561 11.3359 6.16667 11.1081 6.6C10.8804 7.03333 10.5165 7.48889 10.0165 7.96667C9.62758 8.34444 9.35536 8.65 9.1998 8.88333C9.04425 9.11667 8.94425 9.38333 8.8998 9.68333C8.86647 9.91667 8.76696 10.1111 8.60127 10.2667C8.43557 10.4222 8.24064 10.5 8.01647 10.5ZM7.98165 14.6667C7.66042 14.6667 7.38591 14.5523 7.15814 14.3235C6.93036 14.0948 6.81647 13.8198 6.81647 13.4985C6.81647 13.1773 6.93085 12.9028 7.15962 12.675C7.38837 12.4472 7.66337 12.3333 7.98462 12.3333C8.30585 12.3333 8.58036 12.4477 8.80814 12.6765C9.03591 12.9052 9.1498 13.1802 9.1498 13.5015C9.1498 13.8227 9.03542 14.0972 8.80665 14.325C8.5779 14.5528 8.3029 14.6667 7.98165 14.6667Z" fill="currentColor"></path>
                  </svg></div>
                  <div>Support</div>
              </a>
          </div>
      </div>
      <div class="user-button-wrapper">
          <div class="user-button-grid">
            <div class="profile-name-wrapper affliate-nav-button-wrapper">
              <div class="affiliate-title-wrapper">
                <div class="text-size-regular text-weight-medium">Become an affiliate</div>
                <div class="text-size-regular email">Spread the word and earn as you go!</div>
            </div>
        </div>
    </div>
    <div class="affiliate-button-wrapper">
        <a href="#" class="button w-button">Apply now!</a>
        <a href="#" class="button is-secondary w-button">Learn More</a>
    </div>
</div>
</div>
<div id="w-node-_966b1002-6a98-e3cd-d03f-3d69c355c513-ae446d1f" class="dashboard-wrapper">
    <div class="welcome-wrapper">
      <h1 class="heading-style-h6">Welcome Back, <span class="text-weight-normal">Jenny Dela Cruz 👋</span></h1>
      <a href="#" class="button is-secondary w-inline-block">
        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
            <path d="M7.99725 12.6666C7.85475 12.6666 7.73627 12.6187 7.64183 12.5228C7.54738 12.427 7.50016 12.3083 7.50016 12.1666V8.49992H3.8335C3.69183 8.49992 3.57308 8.45172 3.47725 8.35534C3.38141 8.25893 3.3335 8.13949 3.3335 7.997C3.3335 7.8545 3.38141 7.73603 3.47725 7.64158C3.57308 7.54714 3.69183 7.49992 3.8335 7.49992H7.50016V3.83325C7.50016 3.69159 7.54836 3.57284 7.64475 3.477C7.74115 3.38117 7.86059 3.33325 8.00308 3.33325C8.14558 3.33325 8.26405 3.38117 8.3585 3.477C8.45294 3.57284 8.50016 3.69159 8.50016 3.83325V7.49992H12.1668C12.3085 7.49992 12.4272 7.54811 12.5231 7.6445C12.6189 7.7409 12.6668 7.86035 12.6668 8.00283C12.6668 8.14533 12.6189 8.26381 12.5231 8.35825C12.4272 8.4527 12.3085 8.49992 12.1668 8.49992H8.50016V12.1666C8.50016 12.3083 8.45197 12.427 8.35558 12.5228C8.25918 12.6187 8.13973 12.6666 7.99725 12.6666Z" fill="currentColor"></path>
        </svg></div>
        <div>Add New Card</div>
    </a>
</div>
<div class="dash-counter-wrapper">
  <div id="w-node-c64b3cbb-d3fd-5fbb-0ec0-c6861d4e8775-ae446d1f" class="dash-counter-con">
    <div class="status-wrapper">
      <div class="status active-card"></div>
      <div>Active Cards</div>
  </div>
  <h4>17</h4>
</div>
<div id="w-node-_93644c79-3ecd-251c-4f9d-a21783d5b24f-ae446d1f" class="dash-counter-con">
    <div class="status-wrapper">
      <div class="status inactive-card"></div>
      <div>Inactive Cards</div>
  </div>
  <h4>35</h4>
</div>
<div id="w-node-c98e2940-8923-88a3-7d0c-8a8968389826-ae446d1f" class="dash-counter-con">
    <div class="status-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
          <path d="M12.3335 13.3334C12.0557 13.3334 11.8195 13.2361 11.6248 13.0414C11.4302 12.8468 11.3331 12.6107 11.3335 12.3334V3.66675C11.3335 3.38897 11.4308 3.15275 11.6255 2.95808C11.8202 2.76342 12.0562 2.66631 12.3335 2.66675C12.6113 2.66675 12.8475 2.76408 13.0422 2.95875C13.2368 3.15342 13.3339 3.38942 13.3335 3.66675V12.3334C13.3335 12.6112 13.2362 12.8474 13.0415 13.0421C12.8468 13.2367 12.6108 13.3339 12.3335 13.3334ZM4.3335 13.3334C4.20017 13.3334 4.07239 13.3083 3.95017 13.2581C3.82795 13.2079 3.7195 13.1356 3.62484 13.0414C3.53061 12.9472 3.45839 12.839 3.40817 12.7168C3.35795 12.5945 3.33306 12.4667 3.3335 12.3334V10.3334C3.3335 10.0556 3.43084 9.81942 3.6255 9.62475C3.82017 9.43008 4.05617 9.33297 4.3335 9.33342C4.61128 9.33342 4.8475 9.43075 5.04217 9.62542C5.23684 9.82008 5.33395 10.0561 5.3335 10.3334V12.3334C5.3335 12.4667 5.30839 12.5945 5.25817 12.7168C5.20795 12.839 5.13595 12.9474 5.04217 13.0421C4.9475 13.1363 4.83906 13.2085 4.71684 13.2587C4.59461 13.309 4.46684 13.3339 4.3335 13.3334ZM8.3335 13.3334C8.05572 13.3334 7.8195 13.2361 7.62484 13.0414C7.43017 12.8468 7.33306 12.6107 7.3335 12.3334V7.00008C7.3335 6.72231 7.43084 6.48608 7.6255 6.29142C7.82017 6.09675 8.05617 5.99964 8.3335 6.00008C8.61128 6.00008 8.8475 6.09742 9.04217 6.29208C9.23684 6.48675 9.33395 6.72275 9.3335 7.00008V12.3334C9.3335 12.6112 9.23617 12.8474 9.0415 13.0421C8.84684 13.2367 8.61084 13.3339 8.3335 13.3334Z" fill="#0A4DF6"></path>
      </svg></div>
      <div>Total Engagement</div>
  </div>
  <h4>12,056</h4>
</div>
<div id="w-node-_1ffdf491-d6f0-930c-258f-703f94b1ec2b-ae446d1f" class="dash-counter-con">
    <div class="status-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
          <path d="M3.73514 13.3167C3.18938 13.3167 2.72484 13.1279 2.3415 12.7501C1.95817 12.3723 1.7665 11.9056 1.7665 11.3501H1.6665C1.3915 11.3501 1.15609 11.2522 0.960254 11.0563C0.764421 10.8605 0.666504 10.6251 0.666504 10.3501V3.66675C0.666504 3.40008 0.766504 3.16675 0.966504 2.96675C1.1665 2.76675 1.39984 2.66675 1.6665 2.66675H10.3165C10.5915 2.66675 10.8269 2.76466 11.0228 2.9605C11.2186 3.15633 11.3165 3.39175 11.3165 3.66675V5.45008H12.8165C12.8998 5.45008 12.9748 5.46675 13.0415 5.50008C13.1082 5.53341 13.1665 5.58341 13.2165 5.65008L15.2332 8.33342C15.2665 8.37508 15.2915 8.42092 15.3082 8.47091C15.3248 8.52092 15.3332 8.57508 15.3332 8.63342V10.8501C15.3332 10.9917 15.2853 11.1105 15.1894 11.2063C15.0936 11.3022 14.9748 11.3501 14.8332 11.3501H14.1498C14.1498 11.9056 13.9588 12.3723 13.5768 12.7501C13.1948 13.1279 12.7309 13.3167 12.1851 13.3167C11.6394 13.3167 11.1748 13.1279 10.7915 12.7501C10.4082 12.3723 10.2165 11.9056 10.2165 11.3501H5.69984C5.69984 11.9056 5.50883 12.3723 5.1268 12.7501C4.74477 13.1279 4.28088 13.3167 3.73514 13.3167ZM3.73317 12.3167C3.99984 12.3167 4.22762 12.2223 4.4165 12.0334C4.60539 11.8445 4.69984 11.6167 4.69984 11.3501C4.69984 11.0834 4.60539 10.8556 4.4165 10.6667C4.22762 10.4779 3.99984 10.3834 3.73317 10.3834C3.4665 10.3834 3.23873 10.4779 3.04984 10.6667C2.86095 10.8556 2.7665 11.0834 2.7665 11.3501C2.7665 11.6167 2.86095 11.8445 3.04984 12.0334C3.23873 12.2223 3.4665 12.3167 3.73317 12.3167ZM1.6665 3.66675V10.3501H2.03317C2.22206 10.0501 2.46118 9.81119 2.75052 9.63342C3.03987 9.45564 3.36209 9.36675 3.71719 9.36675C4.07229 9.36675 4.39706 9.45842 4.6915 9.64175C4.98595 9.82508 5.22762 10.0612 5.4165 10.3501H10.3165V3.66675H1.6665ZM12.1832 12.3167C12.4498 12.3167 12.6776 12.2223 12.8665 12.0334C13.0554 11.8445 13.1498 11.6167 13.1498 11.3501C13.1498 11.0834 13.0554 10.8556 12.8665 10.6667C12.6776 10.4779 12.4498 10.3834 12.1832 10.3834C11.9165 10.3834 11.6887 10.4779 11.4998 10.6667C11.3109 10.8556 11.2165 11.0834 11.2165 11.3501C11.2165 11.6167 11.3109 11.8445 11.4998 12.0334C11.6887 12.2223 11.9165 12.3167 12.1832 12.3167ZM11.3165 8.91675H14.4165L12.5665 6.45008H11.3165V8.91675Z" fill="#A240FB"></path>
      </svg></div>
      <div>Total Engagement</div>
  </div>
  <h4>1</h4>
</div>
</div>
<div class="recent-wrapper">
  <div class="text-size-large recent-title">Recently Added</div>
  <div class="recent-list-wrapper">
    <div class="recent-list owl-carousel owl-theme">
      <div class="recent-item">
        <div class="recent-img-wrapper">
          <div class="full-img-wrapper"><img src="images/Card-1.png" loading="lazy" alt="" class="card-img"></div>
          <div class="phone-img-wrapper">
            <div class="phone-rel-wrapper"><img src="images/iPhone-12-Pro-Mockup-Front-View-1.png" loading="lazy" alt="" class="recent-phone-img"><img src="images/iPhone-12-Pro-Mockup-Front-View-label_1iPhone-12-Pro-Mockup-Front-View-label.png" loading="lazy" alt="" class="phone-content"></div>
        </div>
    </div>
    <div class="recent-content-wrapper">
      <div class="recent-content-con">
        <div class="status-toggle-wrapper">
          <div class="status-wrapper recent-status-wrapper">
            <div class="status active-card"></div>
            <div>Avalance Incorp.</div>
        </div>
        <div data-w-id="785f0079-4f4c-f6b6-c0b3-71da700d5070" class="toggle recent-toggle">
            <div class="toggle-switch"></div>
        </div>
    </div>
    <div class="scans-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
          <path d="M12.75 16.5V15H15V12.75H16.5V15.375C16.5 15.675 16.35 15.9 16.125 16.125C15.9 16.35 15.6 16.5 15.375 16.5H12.75ZM5.25 16.5H2.625C2.325 16.5 2.1 16.35 1.875 16.125C1.65 15.9 1.5 15.6 1.5 15.375V12.75H3V15H5.25V16.5ZM12.75 1.5H15.375C15.675 1.5 15.9 1.65 16.125 1.875C16.35 2.1 16.5 2.325 16.5 2.625V5.25H15V3H12.75V1.5ZM5.25 1.5V3H3V5.25H1.5V2.625C1.5 2.325 1.65 2.1 1.875 1.875C2.1 1.65 2.325 1.5 2.625 1.5H5.25ZM14.25 8.25H3.75V9.75H14.25V8.25Z" fill="#5028FF"></path>
      </svg></div>
      <div>Remaining Scans:</div>
      <div class="scan">10</div>
  </div>
  <div class="scans-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
          <path d="M7.5 9C9.1575 9 10.5 7.6575 10.5 6C10.5 4.3425 9.1575 3 7.5 3C5.8425 3 4.5 4.3425 4.5 6C4.5 7.6575 5.8425 9 7.5 9ZM7.5 4.5C7.89782 4.5 8.27936 4.65804 8.56066 4.93934C8.84196 5.22064 9 5.60218 9 6C9 6.39782 8.84196 6.77936 8.56066 7.06066C8.27936 7.34196 7.89782 7.5 7.5 7.5C6.6675 7.5 6 6.8325 6 6C6 5.1675 6.675 4.5 7.5 4.5ZM6.9525 15H1.5V12.75C1.5 10.7475 5.4975 9.75 7.5 9.75C8.28 9.75 9.375 9.9075 10.395 10.2075C9.75 10.4625 9.15 10.815 8.625 11.25C8.25 11.205 7.875 11.175 7.5 11.175C5.2725 11.175 2.925 12.27 2.925 12.75V13.575H6.915C6.9 13.6125 6.8775 13.65 6.855 13.6875L6.6375 14.25L6.855 14.8125C6.885 14.8725 6.9225 14.9325 6.9525 15ZM12.75 13.5C13.17 13.5 13.5 13.83 13.5 14.25C13.5 14.67 13.17 15 12.75 15C12.33 15 12 14.67 12 14.25C12 13.83 12.33 13.5 12.75 13.5ZM12.75 11.25C10.7025 11.25 8.955 12.495 8.25 14.25C8.955 16.005 10.7025 17.25 12.75 17.25C14.7975 17.25 16.545 16.005 17.25 14.25C16.545 12.495 14.7975 11.25 12.75 11.25ZM12.75 16.125C12.2527 16.125 11.7758 15.9275 11.4242 15.5758C11.0725 15.2242 10.875 14.7473 10.875 14.25C10.875 13.7527 11.0725 13.2758 11.4242 12.9242C11.7758 12.5725 12.2527 12.375 12.75 12.375C13.2473 12.375 13.7242 12.5725 14.0758 12.9242C14.4275 13.2758 14.625 13.7527 14.625 14.25C14.625 14.7473 14.4275 15.2242 14.0758 15.5758C13.7242 15.9275 13.2473 16.125 12.75 16.125Z" fill="#5028FF"></path>
      </svg></div>
      <div>Remaining Scans:</div>
      <div class="scan">5</div>
  </div>
</div>
<div class="recent-button-wrapper">
    <a href="#" class="icon-button view-btn w-inline-block">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
          <g clip-path="url(#clip0_1835_4240)">
            <path d="M7.99984 3.99996C10.5265 3.99996 12.7798 5.41996 13.8798 7.66663C12.7798 9.91329 10.5265 11.3333 7.99984 11.3333C5.47317 11.3333 3.21984 9.91329 2.11984 7.66663C3.21984 5.41996 5.47317 3.99996 7.99984 3.99996ZM7.99984 2.66663C4.6665 2.66663 1.81984 4.73996 0.666504 7.66663C1.81984 10.5933 4.6665 12.6666 7.99984 12.6666C11.3332 12.6666 14.1798 10.5933 15.3332 7.66663C14.1798 4.73996 11.3332 2.66663 7.99984 2.66663ZM7.99984 5.99996C8.91984 5.99996 9.6665 6.74663 9.6665 7.66663C9.6665 8.58663 8.91984 9.33329 7.99984 9.33329C7.07984 9.33329 6.33317 8.58663 6.33317 7.66663C6.33317 6.74663 7.07984 5.99996 7.99984 5.99996ZM7.99984 4.66663C6.3465 4.66663 4.99984 6.01329 4.99984 7.66663C4.99984 9.31996 6.3465 10.6666 7.99984 10.6666C9.65317 10.6666 10.9998 9.31996 10.9998 7.66663C10.9998 6.01329 9.65317 4.66663 7.99984 4.66663Z" fill="currentColor"></path>
        </g>
        <defs>
            <clippath id="clip0_1835_4240">
              <rect width="16" height="16" fill="white"></rect>
          </clippath>
      </defs>
  </svg></div>
</a>
<a href="#" class="icon-button edit-btn w-inline-block">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
      <path d="M7.3335 2.66663H2.66683C2.31321 2.66663 1.97407 2.8071 1.72402 3.05715C1.47397 3.3072 1.3335 3.64634 1.3335 3.99996V13.3333C1.3335 13.6869 1.47397 14.0261 1.72402 14.2761C1.97407 14.5262 2.31321 14.6666 2.66683 14.6666H12.0002C12.3538 14.6666 12.6929 14.5262 12.943 14.2761C13.193 14.0261 13.3335 13.6869 13.3335 13.3333V8.66663" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
      <path d="M12.3335 1.66665C12.5987 1.40144 12.9584 1.25244 13.3335 1.25244C13.7086 1.25244 14.0683 1.40144 14.3335 1.66665C14.5987 1.93187 14.7477 2.29158 14.7477 2.66665C14.7477 3.04173 14.5987 3.40144 14.3335 3.66665L8.00016 9.99999L5.3335 10.6667L6.00016 7.99999L12.3335 1.66665Z" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
  </svg></div>
</a>
<a href="#" class="icon-button qr-btn w-inline-block">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewbox="0 0 19 20" fill="none">
      <path d="M3.5625 9.62061C3.23594 9.62061 2.95638 9.50433 2.72383 9.27178C2.49128 9.03923 2.375 8.75967 2.375 8.43311V4.27686C2.375 3.95029 2.49128 3.67074 2.72383 3.43818C2.95638 3.20563 3.23594 3.08936 3.5625 3.08936H7.71875C8.04531 3.08936 8.32487 3.20563 8.55742 3.43818C8.78997 3.67074 8.90625 3.95029 8.90625 4.27686V8.43311C8.90625 8.75967 8.78997 9.03923 8.55742 9.27178C8.32487 9.50433 8.04531 9.62061 7.71875 9.62061H3.5625ZM3.5625 8.43311H7.71875V4.27686H3.5625V8.43311ZM3.5625 17.3394C3.23594 17.3394 2.95638 17.2231 2.72383 16.9905C2.49128 16.758 2.375 16.4784 2.375 16.1519V11.9956C2.375 11.669 2.49128 11.3895 2.72383 11.1569C2.95638 10.9244 3.23594 10.8081 3.5625 10.8081H7.71875C8.04531 10.8081 8.32487 10.9244 8.55742 11.1569C8.78997 11.3895 8.90625 11.669 8.90625 11.9956V16.1519C8.90625 16.4784 8.78997 16.758 8.55742 16.9905C8.32487 17.2231 8.04531 17.3394 7.71875 17.3394H3.5625ZM3.5625 16.1519H7.71875V11.9956H3.5625V16.1519ZM11.2812 9.62061C10.9547 9.62061 10.6751 9.50433 10.4426 9.27178C10.21 9.03923 10.0938 8.75967 10.0938 8.43311V4.27686C10.0938 3.95029 10.21 3.67074 10.4426 3.43818C10.6751 3.20563 10.9547 3.08936 11.2812 3.08936H15.4375C15.7641 3.08936 16.0436 3.20563 16.2762 3.43818C16.5087 3.67074 16.625 3.95029 16.625 4.27686V8.43311C16.625 8.75967 16.5087 9.03923 16.2762 9.27178C16.0436 9.50433 15.7641 9.62061 15.4375 9.62061H11.2812ZM11.2812 8.43311H15.4375V4.27686H11.2812V8.43311ZM15.299 17.3394C15.2198 17.3394 15.1505 17.3097 15.0911 17.2503C15.0318 17.1909 15.0021 17.1216 15.0021 17.0425V16.0133C15.0021 15.9341 15.0318 15.8649 15.0911 15.8055C15.1505 15.7461 15.2198 15.7164 15.299 15.7164H16.3281C16.4073 15.7164 16.4766 15.7461 16.5359 15.8055C16.5953 15.8649 16.625 15.9341 16.625 16.0133V17.0425C16.625 17.1216 16.5953 17.1909 16.5359 17.2503C16.4766 17.3097 16.4073 17.3394 16.3281 17.3394H15.299ZM10.3906 12.4508C10.3115 12.4508 10.2422 12.4211 10.1828 12.3618C10.1234 12.3024 10.0938 12.2331 10.0938 12.1539V11.105C10.0938 11.0258 10.1234 10.9565 10.1828 10.8972C10.2422 10.8378 10.3115 10.8081 10.3906 10.8081H11.4198C11.499 10.8081 11.5682 10.8378 11.6276 10.8972C11.687 10.9565 11.7167 11.0258 11.7167 11.105V12.1539C11.7167 12.2331 11.687 12.3024 11.6276 12.3618C11.5682 12.4211 11.499 12.4508 11.4198 12.4508H10.3906ZM12.0135 14.0737C11.9344 14.0737 11.8651 14.044 11.8057 13.9847C11.7464 13.9253 11.7167 13.856 11.7167 13.7769V12.7477C11.7167 12.6685 11.7464 12.5993 11.8057 12.5399C11.8651 12.4805 11.9344 12.4508 12.0135 12.4508H13.0625C13.1417 12.4508 13.2109 12.4805 13.2703 12.5399C13.3297 12.5993 13.3594 12.6685 13.3594 12.7477V13.7769C13.3594 13.856 13.3297 13.9253 13.2703 13.9847C13.2109 14.044 13.1417 14.0737 13.0625 14.0737H12.0135ZM10.3906 15.7164C10.3115 15.7164 10.2422 15.6868 10.1828 15.6274C10.1234 15.568 10.0938 15.4987 10.0938 15.4196V14.3706C10.0938 14.2914 10.1234 14.2222 10.1828 14.1628C10.2422 14.1034 10.3115 14.0737 10.3906 14.0737H11.4198C11.499 14.0737 11.5682 14.1034 11.6276 14.1628C11.687 14.2222 11.7167 14.2914 11.7167 14.3706V15.4196C11.7167 15.4987 11.687 15.568 11.6276 15.6274C11.5682 15.6868 11.499 15.7164 11.4198 15.7164H10.3906ZM12.0135 17.3394C11.9344 17.3394 11.8651 17.3097 11.8057 17.2503C11.7464 17.1909 11.7167 17.1216 11.7167 17.0425V16.0133C11.7167 15.9341 11.7464 15.8649 11.8057 15.8055C11.8651 15.7461 11.9344 15.7164 12.0135 15.7164H13.0625C13.1417 15.7164 13.2109 15.7461 13.2703 15.8055C13.3297 15.8649 13.3594 15.9341 13.3594 16.0133V17.0425C13.3594 17.1216 13.3297 17.1909 13.2703 17.2503C13.2109 17.3097 13.1417 17.3394 13.0625 17.3394H12.0135ZM13.6562 15.7164C13.5771 15.7164 13.5078 15.6868 13.4484 15.6274C13.3891 15.568 13.3594 15.4987 13.3594 15.4196V14.3706C13.3594 14.2914 13.3891 14.2222 13.4484 14.1628C13.5078 14.1034 13.5771 14.0737 13.6562 14.0737H14.7052C14.7844 14.0737 14.8536 14.1034 14.913 14.1628C14.9724 14.2222 15.0021 14.2914 15.0021 14.3706V15.4196C15.0021 15.4987 14.9724 15.568 14.913 15.6274C14.8536 15.6868 14.7844 15.7164 14.7052 15.7164H13.6562ZM13.6562 12.4508C13.5771 12.4508 13.5078 12.4211 13.4484 12.3618C13.3891 12.3024 13.3594 12.2331 13.3594 12.1539V11.105C13.3594 11.0258 13.3891 10.9565 13.4484 10.8972C13.5078 10.8378 13.5771 10.8081 13.6562 10.8081H14.7052C14.7844 10.8081 14.8536 10.8378 14.913 10.8972C14.9724 10.9565 15.0021 11.0258 15.0021 11.105V12.1539C15.0021 12.2331 14.9724 12.3024 14.913 12.3618C14.8536 12.4211 14.7844 12.4508 14.7052 12.4508H13.6562ZM15.299 14.0737C15.2198 14.0737 15.1505 14.044 15.0911 13.9847C15.0318 13.9253 15.0021 13.856 15.0021 13.7769V12.7477C15.0021 12.6685 15.0318 12.5993 15.0911 12.5399C15.1505 12.4805 15.2198 12.4508 15.299 12.4508H16.3281C16.4073 12.4508 16.4766 12.4805 16.5359 12.5399C16.5953 12.5993 16.625 12.6685 16.625 12.7477V13.7769C16.625 13.856 16.5953 13.9253 16.5359 13.9847C16.4766 14.044 16.4073 14.0737 16.3281 14.0737H15.299Z" fill="currentColor"></path>
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
</div>
<div class="recent-item">
    <div class="recent-img-wrapper">
      <div class="full-img-wrapper"><img src="images/Card-1.png" loading="lazy" alt="" class="card-img"></div>
      <div class="phone-img-wrapper">
        <div class="phone-rel-wrapper"><img src="images/iPhone-12-Pro-Mockup-Front-View-1.png" loading="lazy" alt="" class="recent-phone-img"><img src="images/iPhone-12-Pro-Mockup-Front-View-label_1iPhone-12-Pro-Mockup-Front-View-label.png" loading="lazy" alt="" class="phone-content"></div>
    </div>
</div>
<div class="recent-content-wrapper">
  <div class="recent-content-con">
    <div class="status-toggle-wrapper">
      <div class="status-wrapper recent-status-wrapper">
        <div class="status active-card"></div>
        <div>Avalance Incorp.</div>
    </div>
    <div data-w-id="abcf9632-17e6-05a7-c4c2-ef0c766f52bc" class="toggle recent-toggle">
        <div class="toggle-switch"></div>
    </div>
</div>
<div class="scans-wrapper">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
      <path d="M12.75 16.5V15H15V12.75H16.5V15.375C16.5 15.675 16.35 15.9 16.125 16.125C15.9 16.35 15.6 16.5 15.375 16.5H12.75ZM5.25 16.5H2.625C2.325 16.5 2.1 16.35 1.875 16.125C1.65 15.9 1.5 15.6 1.5 15.375V12.75H3V15H5.25V16.5ZM12.75 1.5H15.375C15.675 1.5 15.9 1.65 16.125 1.875C16.35 2.1 16.5 2.325 16.5 2.625V5.25H15V3H12.75V1.5ZM5.25 1.5V3H3V5.25H1.5V2.625C1.5 2.325 1.65 2.1 1.875 1.875C2.1 1.65 2.325 1.5 2.625 1.5H5.25ZM14.25 8.25H3.75V9.75H14.25V8.25Z" fill="#5028FF"></path>
  </svg></div>
  <div>Remaining Scans:</div>
  <div class="scan">10</div>
</div>
<div class="scans-wrapper">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
      <path d="M7.5 9C9.1575 9 10.5 7.6575 10.5 6C10.5 4.3425 9.1575 3 7.5 3C5.8425 3 4.5 4.3425 4.5 6C4.5 7.6575 5.8425 9 7.5 9ZM7.5 4.5C7.89782 4.5 8.27936 4.65804 8.56066 4.93934C8.84196 5.22064 9 5.60218 9 6C9 6.39782 8.84196 6.77936 8.56066 7.06066C8.27936 7.34196 7.89782 7.5 7.5 7.5C6.6675 7.5 6 6.8325 6 6C6 5.1675 6.675 4.5 7.5 4.5ZM6.9525 15H1.5V12.75C1.5 10.7475 5.4975 9.75 7.5 9.75C8.28 9.75 9.375 9.9075 10.395 10.2075C9.75 10.4625 9.15 10.815 8.625 11.25C8.25 11.205 7.875 11.175 7.5 11.175C5.2725 11.175 2.925 12.27 2.925 12.75V13.575H6.915C6.9 13.6125 6.8775 13.65 6.855 13.6875L6.6375 14.25L6.855 14.8125C6.885 14.8725 6.9225 14.9325 6.9525 15ZM12.75 13.5C13.17 13.5 13.5 13.83 13.5 14.25C13.5 14.67 13.17 15 12.75 15C12.33 15 12 14.67 12 14.25C12 13.83 12.33 13.5 12.75 13.5ZM12.75 11.25C10.7025 11.25 8.955 12.495 8.25 14.25C8.955 16.005 10.7025 17.25 12.75 17.25C14.7975 17.25 16.545 16.005 17.25 14.25C16.545 12.495 14.7975 11.25 12.75 11.25ZM12.75 16.125C12.2527 16.125 11.7758 15.9275 11.4242 15.5758C11.0725 15.2242 10.875 14.7473 10.875 14.25C10.875 13.7527 11.0725 13.2758 11.4242 12.9242C11.7758 12.5725 12.2527 12.375 12.75 12.375C13.2473 12.375 13.7242 12.5725 14.0758 12.9242C14.4275 13.2758 14.625 13.7527 14.625 14.25C14.625 14.7473 14.4275 15.2242 14.0758 15.5758C13.7242 15.9275 13.2473 16.125 12.75 16.125Z" fill="#5028FF"></path>
  </svg></div>
  <div>Remaining Scans:</div>
  <div class="scan">5</div>
</div>
</div>
<div class="recent-button-wrapper">
    <a href="#" class="icon-button view-btn w-inline-block">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
          <g clip-path="url(#clip0_1835_4240)">
            <path d="M7.99984 3.99996C10.5265 3.99996 12.7798 5.41996 13.8798 7.66663C12.7798 9.91329 10.5265 11.3333 7.99984 11.3333C5.47317 11.3333 3.21984 9.91329 2.11984 7.66663C3.21984 5.41996 5.47317 3.99996 7.99984 3.99996ZM7.99984 2.66663C4.6665 2.66663 1.81984 4.73996 0.666504 7.66663C1.81984 10.5933 4.6665 12.6666 7.99984 12.6666C11.3332 12.6666 14.1798 10.5933 15.3332 7.66663C14.1798 4.73996 11.3332 2.66663 7.99984 2.66663ZM7.99984 5.99996C8.91984 5.99996 9.6665 6.74663 9.6665 7.66663C9.6665 8.58663 8.91984 9.33329 7.99984 9.33329C7.07984 9.33329 6.33317 8.58663 6.33317 7.66663C6.33317 6.74663 7.07984 5.99996 7.99984 5.99996ZM7.99984 4.66663C6.3465 4.66663 4.99984 6.01329 4.99984 7.66663C4.99984 9.31996 6.3465 10.6666 7.99984 10.6666C9.65317 10.6666 10.9998 9.31996 10.9998 7.66663C10.9998 6.01329 9.65317 4.66663 7.99984 4.66663Z" fill="currentColor"></path>
        </g>
        <defs>
            <clippath id="clip0_1835_4240">
              <rect width="16" height="16" fill="white"></rect>
          </clippath>
      </defs>
  </svg></div>
</a>
<a href="#" class="icon-button edit-btn w-inline-block">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
      <path d="M7.3335 2.66663H2.66683C2.31321 2.66663 1.97407 2.8071 1.72402 3.05715C1.47397 3.3072 1.3335 3.64634 1.3335 3.99996V13.3333C1.3335 13.6869 1.47397 14.0261 1.72402 14.2761C1.97407 14.5262 2.31321 14.6666 2.66683 14.6666H12.0002C12.3538 14.6666 12.6929 14.5262 12.943 14.2761C13.193 14.0261 13.3335 13.6869 13.3335 13.3333V8.66663" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
      <path d="M12.3335 1.66665C12.5987 1.40144 12.9584 1.25244 13.3335 1.25244C13.7086 1.25244 14.0683 1.40144 14.3335 1.66665C14.5987 1.93187 14.7477 2.29158 14.7477 2.66665C14.7477 3.04173 14.5987 3.40144 14.3335 3.66665L8.00016 9.99999L5.3335 10.6667L6.00016 7.99999L12.3335 1.66665Z" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
  </svg></div>
</a>
<a href="#" class="icon-button qr-btn w-inline-block">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewbox="0 0 19 20" fill="none">
      <path d="M3.5625 9.62061C3.23594 9.62061 2.95638 9.50433 2.72383 9.27178C2.49128 9.03923 2.375 8.75967 2.375 8.43311V4.27686C2.375 3.95029 2.49128 3.67074 2.72383 3.43818C2.95638 3.20563 3.23594 3.08936 3.5625 3.08936H7.71875C8.04531 3.08936 8.32487 3.20563 8.55742 3.43818C8.78997 3.67074 8.90625 3.95029 8.90625 4.27686V8.43311C8.90625 8.75967 8.78997 9.03923 8.55742 9.27178C8.32487 9.50433 8.04531 9.62061 7.71875 9.62061H3.5625ZM3.5625 8.43311H7.71875V4.27686H3.5625V8.43311ZM3.5625 17.3394C3.23594 17.3394 2.95638 17.2231 2.72383 16.9905C2.49128 16.758 2.375 16.4784 2.375 16.1519V11.9956C2.375 11.669 2.49128 11.3895 2.72383 11.1569C2.95638 10.9244 3.23594 10.8081 3.5625 10.8081H7.71875C8.04531 10.8081 8.32487 10.9244 8.55742 11.1569C8.78997 11.3895 8.90625 11.669 8.90625 11.9956V16.1519C8.90625 16.4784 8.78997 16.758 8.55742 16.9905C8.32487 17.2231 8.04531 17.3394 7.71875 17.3394H3.5625ZM3.5625 16.1519H7.71875V11.9956H3.5625V16.1519ZM11.2812 9.62061C10.9547 9.62061 10.6751 9.50433 10.4426 9.27178C10.21 9.03923 10.0938 8.75967 10.0938 8.43311V4.27686C10.0938 3.95029 10.21 3.67074 10.4426 3.43818C10.6751 3.20563 10.9547 3.08936 11.2812 3.08936H15.4375C15.7641 3.08936 16.0436 3.20563 16.2762 3.43818C16.5087 3.67074 16.625 3.95029 16.625 4.27686V8.43311C16.625 8.75967 16.5087 9.03923 16.2762 9.27178C16.0436 9.50433 15.7641 9.62061 15.4375 9.62061H11.2812ZM11.2812 8.43311H15.4375V4.27686H11.2812V8.43311ZM15.299 17.3394C15.2198 17.3394 15.1505 17.3097 15.0911 17.2503C15.0318 17.1909 15.0021 17.1216 15.0021 17.0425V16.0133C15.0021 15.9341 15.0318 15.8649 15.0911 15.8055C15.1505 15.7461 15.2198 15.7164 15.299 15.7164H16.3281C16.4073 15.7164 16.4766 15.7461 16.5359 15.8055C16.5953 15.8649 16.625 15.9341 16.625 16.0133V17.0425C16.625 17.1216 16.5953 17.1909 16.5359 17.2503C16.4766 17.3097 16.4073 17.3394 16.3281 17.3394H15.299ZM10.3906 12.4508C10.3115 12.4508 10.2422 12.4211 10.1828 12.3618C10.1234 12.3024 10.0938 12.2331 10.0938 12.1539V11.105C10.0938 11.0258 10.1234 10.9565 10.1828 10.8972C10.2422 10.8378 10.3115 10.8081 10.3906 10.8081H11.4198C11.499 10.8081 11.5682 10.8378 11.6276 10.8972C11.687 10.9565 11.7167 11.0258 11.7167 11.105V12.1539C11.7167 12.2331 11.687 12.3024 11.6276 12.3618C11.5682 12.4211 11.499 12.4508 11.4198 12.4508H10.3906ZM12.0135 14.0737C11.9344 14.0737 11.8651 14.044 11.8057 13.9847C11.7464 13.9253 11.7167 13.856 11.7167 13.7769V12.7477C11.7167 12.6685 11.7464 12.5993 11.8057 12.5399C11.8651 12.4805 11.9344 12.4508 12.0135 12.4508H13.0625C13.1417 12.4508 13.2109 12.4805 13.2703 12.5399C13.3297 12.5993 13.3594 12.6685 13.3594 12.7477V13.7769C13.3594 13.856 13.3297 13.9253 13.2703 13.9847C13.2109 14.044 13.1417 14.0737 13.0625 14.0737H12.0135ZM10.3906 15.7164C10.3115 15.7164 10.2422 15.6868 10.1828 15.6274C10.1234 15.568 10.0938 15.4987 10.0938 15.4196V14.3706C10.0938 14.2914 10.1234 14.2222 10.1828 14.1628C10.2422 14.1034 10.3115 14.0737 10.3906 14.0737H11.4198C11.499 14.0737 11.5682 14.1034 11.6276 14.1628C11.687 14.2222 11.7167 14.2914 11.7167 14.3706V15.4196C11.7167 15.4987 11.687 15.568 11.6276 15.6274C11.5682 15.6868 11.499 15.7164 11.4198 15.7164H10.3906ZM12.0135 17.3394C11.9344 17.3394 11.8651 17.3097 11.8057 17.2503C11.7464 17.1909 11.7167 17.1216 11.7167 17.0425V16.0133C11.7167 15.9341 11.7464 15.8649 11.8057 15.8055C11.8651 15.7461 11.9344 15.7164 12.0135 15.7164H13.0625C13.1417 15.7164 13.2109 15.7461 13.2703 15.8055C13.3297 15.8649 13.3594 15.9341 13.3594 16.0133V17.0425C13.3594 17.1216 13.3297 17.1909 13.2703 17.2503C13.2109 17.3097 13.1417 17.3394 13.0625 17.3394H12.0135ZM13.6562 15.7164C13.5771 15.7164 13.5078 15.6868 13.4484 15.6274C13.3891 15.568 13.3594 15.4987 13.3594 15.4196V14.3706C13.3594 14.2914 13.3891 14.2222 13.4484 14.1628C13.5078 14.1034 13.5771 14.0737 13.6562 14.0737H14.7052C14.7844 14.0737 14.8536 14.1034 14.913 14.1628C14.9724 14.2222 15.0021 14.2914 15.0021 14.3706V15.4196C15.0021 15.4987 14.9724 15.568 14.913 15.6274C14.8536 15.6868 14.7844 15.7164 14.7052 15.7164H13.6562ZM13.6562 12.4508C13.5771 12.4508 13.5078 12.4211 13.4484 12.3618C13.3891 12.3024 13.3594 12.2331 13.3594 12.1539V11.105C13.3594 11.0258 13.3891 10.9565 13.4484 10.8972C13.5078 10.8378 13.5771 10.8081 13.6562 10.8081H14.7052C14.7844 10.8081 14.8536 10.8378 14.913 10.8972C14.9724 10.9565 15.0021 11.0258 15.0021 11.105V12.1539C15.0021 12.2331 14.9724 12.3024 14.913 12.3618C14.8536 12.4211 14.7844 12.4508 14.7052 12.4508H13.6562ZM15.299 14.0737C15.2198 14.0737 15.1505 14.044 15.0911 13.9847C15.0318 13.9253 15.0021 13.856 15.0021 13.7769V12.7477C15.0021 12.6685 15.0318 12.5993 15.0911 12.5399C15.1505 12.4805 15.2198 12.4508 15.299 12.4508H16.3281C16.4073 12.4508 16.4766 12.4805 16.5359 12.5399C16.5953 12.5993 16.625 12.6685 16.625 12.7477V13.7769C16.625 13.856 16.5953 13.9253 16.5359 13.9847C16.4766 14.044 16.4073 14.0737 16.3281 14.0737H15.299Z" fill="currentColor"></path>
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
</div>
<div class="recent-item">
    <div class="recent-img-wrapper">
      <div class="full-img-wrapper"><img src="images/Card-1.png" loading="lazy" alt="" class="card-img"></div>
      <div class="phone-img-wrapper">
        <div class="phone-rel-wrapper"><img src="images/iPhone-12-Pro-Mockup-Front-View-1.png" loading="lazy" alt="" class="recent-phone-img"><img src="images/iPhone-12-Pro-Mockup-Front-View-label_1iPhone-12-Pro-Mockup-Front-View-label.png" loading="lazy" alt="" class="phone-content"></div>
    </div>
</div>
<div class="recent-content-wrapper">
  <div class="recent-content-con">
    <div class="status-toggle-wrapper">
      <div class="status-wrapper recent-status-wrapper">
        <div class="status active-card"></div>
        <div>Avalance Incorp.</div>
    </div>
    <div data-w-id="847a1356-49f0-9173-ebd7-63f8ea8fc89a" class="toggle recent-toggle">
        <div class="toggle-switch"></div>
    </div>
</div>
<div class="scans-wrapper">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
      <path d="M12.75 16.5V15H15V12.75H16.5V15.375C16.5 15.675 16.35 15.9 16.125 16.125C15.9 16.35 15.6 16.5 15.375 16.5H12.75ZM5.25 16.5H2.625C2.325 16.5 2.1 16.35 1.875 16.125C1.65 15.9 1.5 15.6 1.5 15.375V12.75H3V15H5.25V16.5ZM12.75 1.5H15.375C15.675 1.5 15.9 1.65 16.125 1.875C16.35 2.1 16.5 2.325 16.5 2.625V5.25H15V3H12.75V1.5ZM5.25 1.5V3H3V5.25H1.5V2.625C1.5 2.325 1.65 2.1 1.875 1.875C2.1 1.65 2.325 1.5 2.625 1.5H5.25ZM14.25 8.25H3.75V9.75H14.25V8.25Z" fill="#5028FF"></path>
  </svg></div>
  <div>Remaining Scans:</div>
  <div class="scan">10</div>
</div>
<div class="scans-wrapper">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
      <path d="M7.5 9C9.1575 9 10.5 7.6575 10.5 6C10.5 4.3425 9.1575 3 7.5 3C5.8425 3 4.5 4.3425 4.5 6C4.5 7.6575 5.8425 9 7.5 9ZM7.5 4.5C7.89782 4.5 8.27936 4.65804 8.56066 4.93934C8.84196 5.22064 9 5.60218 9 6C9 6.39782 8.84196 6.77936 8.56066 7.06066C8.27936 7.34196 7.89782 7.5 7.5 7.5C6.6675 7.5 6 6.8325 6 6C6 5.1675 6.675 4.5 7.5 4.5ZM6.9525 15H1.5V12.75C1.5 10.7475 5.4975 9.75 7.5 9.75C8.28 9.75 9.375 9.9075 10.395 10.2075C9.75 10.4625 9.15 10.815 8.625 11.25C8.25 11.205 7.875 11.175 7.5 11.175C5.2725 11.175 2.925 12.27 2.925 12.75V13.575H6.915C6.9 13.6125 6.8775 13.65 6.855 13.6875L6.6375 14.25L6.855 14.8125C6.885 14.8725 6.9225 14.9325 6.9525 15ZM12.75 13.5C13.17 13.5 13.5 13.83 13.5 14.25C13.5 14.67 13.17 15 12.75 15C12.33 15 12 14.67 12 14.25C12 13.83 12.33 13.5 12.75 13.5ZM12.75 11.25C10.7025 11.25 8.955 12.495 8.25 14.25C8.955 16.005 10.7025 17.25 12.75 17.25C14.7975 17.25 16.545 16.005 17.25 14.25C16.545 12.495 14.7975 11.25 12.75 11.25ZM12.75 16.125C12.2527 16.125 11.7758 15.9275 11.4242 15.5758C11.0725 15.2242 10.875 14.7473 10.875 14.25C10.875 13.7527 11.0725 13.2758 11.4242 12.9242C11.7758 12.5725 12.2527 12.375 12.75 12.375C13.2473 12.375 13.7242 12.5725 14.0758 12.9242C14.4275 13.2758 14.625 13.7527 14.625 14.25C14.625 14.7473 14.4275 15.2242 14.0758 15.5758C13.7242 15.9275 13.2473 16.125 12.75 16.125Z" fill="#5028FF"></path>
  </svg></div>
  <div>Remaining Scans:</div>
  <div class="scan">5</div>
</div>
</div>
<div class="recent-button-wrapper">
    <a href="#" class="icon-button view-btn w-inline-block">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
          <g clip-path="url(#clip0_1835_4240)">
            <path d="M7.99984 3.99996C10.5265 3.99996 12.7798 5.41996 13.8798 7.66663C12.7798 9.91329 10.5265 11.3333 7.99984 11.3333C5.47317 11.3333 3.21984 9.91329 2.11984 7.66663C3.21984 5.41996 5.47317 3.99996 7.99984 3.99996ZM7.99984 2.66663C4.6665 2.66663 1.81984 4.73996 0.666504 7.66663C1.81984 10.5933 4.6665 12.6666 7.99984 12.6666C11.3332 12.6666 14.1798 10.5933 15.3332 7.66663C14.1798 4.73996 11.3332 2.66663 7.99984 2.66663ZM7.99984 5.99996C8.91984 5.99996 9.6665 6.74663 9.6665 7.66663C9.6665 8.58663 8.91984 9.33329 7.99984 9.33329C7.07984 9.33329 6.33317 8.58663 6.33317 7.66663C6.33317 6.74663 7.07984 5.99996 7.99984 5.99996ZM7.99984 4.66663C6.3465 4.66663 4.99984 6.01329 4.99984 7.66663C4.99984 9.31996 6.3465 10.6666 7.99984 10.6666C9.65317 10.6666 10.9998 9.31996 10.9998 7.66663C10.9998 6.01329 9.65317 4.66663 7.99984 4.66663Z" fill="currentColor"></path>
        </g>
        <defs>
            <clippath id="clip0_1835_4240">
              <rect width="16" height="16" fill="white"></rect>
          </clippath>
      </defs>
  </svg></div>
</a>
<a href="#" class="icon-button edit-btn w-inline-block">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
      <path d="M7.3335 2.66663H2.66683C2.31321 2.66663 1.97407 2.8071 1.72402 3.05715C1.47397 3.3072 1.3335 3.64634 1.3335 3.99996V13.3333C1.3335 13.6869 1.47397 14.0261 1.72402 14.2761C1.97407 14.5262 2.31321 14.6666 2.66683 14.6666H12.0002C12.3538 14.6666 12.6929 14.5262 12.943 14.2761C13.193 14.0261 13.3335 13.6869 13.3335 13.3333V8.66663" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
      <path d="M12.3335 1.66665C12.5987 1.40144 12.9584 1.25244 13.3335 1.25244C13.7086 1.25244 14.0683 1.40144 14.3335 1.66665C14.5987 1.93187 14.7477 2.29158 14.7477 2.66665C14.7477 3.04173 14.5987 3.40144 14.3335 3.66665L8.00016 9.99999L5.3335 10.6667L6.00016 7.99999L12.3335 1.66665Z" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
  </svg></div>
</a>
<a href="#" class="icon-button qr-btn w-inline-block">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewbox="0 0 19 20" fill="none">
      <path d="M3.5625 9.62061C3.23594 9.62061 2.95638 9.50433 2.72383 9.27178C2.49128 9.03923 2.375 8.75967 2.375 8.43311V4.27686C2.375 3.95029 2.49128 3.67074 2.72383 3.43818C2.95638 3.20563 3.23594 3.08936 3.5625 3.08936H7.71875C8.04531 3.08936 8.32487 3.20563 8.55742 3.43818C8.78997 3.67074 8.90625 3.95029 8.90625 4.27686V8.43311C8.90625 8.75967 8.78997 9.03923 8.55742 9.27178C8.32487 9.50433 8.04531 9.62061 7.71875 9.62061H3.5625ZM3.5625 8.43311H7.71875V4.27686H3.5625V8.43311ZM3.5625 17.3394C3.23594 17.3394 2.95638 17.2231 2.72383 16.9905C2.49128 16.758 2.375 16.4784 2.375 16.1519V11.9956C2.375 11.669 2.49128 11.3895 2.72383 11.1569C2.95638 10.9244 3.23594 10.8081 3.5625 10.8081H7.71875C8.04531 10.8081 8.32487 10.9244 8.55742 11.1569C8.78997 11.3895 8.90625 11.669 8.90625 11.9956V16.1519C8.90625 16.4784 8.78997 16.758 8.55742 16.9905C8.32487 17.2231 8.04531 17.3394 7.71875 17.3394H3.5625ZM3.5625 16.1519H7.71875V11.9956H3.5625V16.1519ZM11.2812 9.62061C10.9547 9.62061 10.6751 9.50433 10.4426 9.27178C10.21 9.03923 10.0938 8.75967 10.0938 8.43311V4.27686C10.0938 3.95029 10.21 3.67074 10.4426 3.43818C10.6751 3.20563 10.9547 3.08936 11.2812 3.08936H15.4375C15.7641 3.08936 16.0436 3.20563 16.2762 3.43818C16.5087 3.67074 16.625 3.95029 16.625 4.27686V8.43311C16.625 8.75967 16.5087 9.03923 16.2762 9.27178C16.0436 9.50433 15.7641 9.62061 15.4375 9.62061H11.2812ZM11.2812 8.43311H15.4375V4.27686H11.2812V8.43311ZM15.299 17.3394C15.2198 17.3394 15.1505 17.3097 15.0911 17.2503C15.0318 17.1909 15.0021 17.1216 15.0021 17.0425V16.0133C15.0021 15.9341 15.0318 15.8649 15.0911 15.8055C15.1505 15.7461 15.2198 15.7164 15.299 15.7164H16.3281C16.4073 15.7164 16.4766 15.7461 16.5359 15.8055C16.5953 15.8649 16.625 15.9341 16.625 16.0133V17.0425C16.625 17.1216 16.5953 17.1909 16.5359 17.2503C16.4766 17.3097 16.4073 17.3394 16.3281 17.3394H15.299ZM10.3906 12.4508C10.3115 12.4508 10.2422 12.4211 10.1828 12.3618C10.1234 12.3024 10.0938 12.2331 10.0938 12.1539V11.105C10.0938 11.0258 10.1234 10.9565 10.1828 10.8972C10.2422 10.8378 10.3115 10.8081 10.3906 10.8081H11.4198C11.499 10.8081 11.5682 10.8378 11.6276 10.8972C11.687 10.9565 11.7167 11.0258 11.7167 11.105V12.1539C11.7167 12.2331 11.687 12.3024 11.6276 12.3618C11.5682 12.4211 11.499 12.4508 11.4198 12.4508H10.3906ZM12.0135 14.0737C11.9344 14.0737 11.8651 14.044 11.8057 13.9847C11.7464 13.9253 11.7167 13.856 11.7167 13.7769V12.7477C11.7167 12.6685 11.7464 12.5993 11.8057 12.5399C11.8651 12.4805 11.9344 12.4508 12.0135 12.4508H13.0625C13.1417 12.4508 13.2109 12.4805 13.2703 12.5399C13.3297 12.5993 13.3594 12.6685 13.3594 12.7477V13.7769C13.3594 13.856 13.3297 13.9253 13.2703 13.9847C13.2109 14.044 13.1417 14.0737 13.0625 14.0737H12.0135ZM10.3906 15.7164C10.3115 15.7164 10.2422 15.6868 10.1828 15.6274C10.1234 15.568 10.0938 15.4987 10.0938 15.4196V14.3706C10.0938 14.2914 10.1234 14.2222 10.1828 14.1628C10.2422 14.1034 10.3115 14.0737 10.3906 14.0737H11.4198C11.499 14.0737 11.5682 14.1034 11.6276 14.1628C11.687 14.2222 11.7167 14.2914 11.7167 14.3706V15.4196C11.7167 15.4987 11.687 15.568 11.6276 15.6274C11.5682 15.6868 11.499 15.7164 11.4198 15.7164H10.3906ZM12.0135 17.3394C11.9344 17.3394 11.8651 17.3097 11.8057 17.2503C11.7464 17.1909 11.7167 17.1216 11.7167 17.0425V16.0133C11.7167 15.9341 11.7464 15.8649 11.8057 15.8055C11.8651 15.7461 11.9344 15.7164 12.0135 15.7164H13.0625C13.1417 15.7164 13.2109 15.7461 13.2703 15.8055C13.3297 15.8649 13.3594 15.9341 13.3594 16.0133V17.0425C13.3594 17.1216 13.3297 17.1909 13.2703 17.2503C13.2109 17.3097 13.1417 17.3394 13.0625 17.3394H12.0135ZM13.6562 15.7164C13.5771 15.7164 13.5078 15.6868 13.4484 15.6274C13.3891 15.568 13.3594 15.4987 13.3594 15.4196V14.3706C13.3594 14.2914 13.3891 14.2222 13.4484 14.1628C13.5078 14.1034 13.5771 14.0737 13.6562 14.0737H14.7052C14.7844 14.0737 14.8536 14.1034 14.913 14.1628C14.9724 14.2222 15.0021 14.2914 15.0021 14.3706V15.4196C15.0021 15.4987 14.9724 15.568 14.913 15.6274C14.8536 15.6868 14.7844 15.7164 14.7052 15.7164H13.6562ZM13.6562 12.4508C13.5771 12.4508 13.5078 12.4211 13.4484 12.3618C13.3891 12.3024 13.3594 12.2331 13.3594 12.1539V11.105C13.3594 11.0258 13.3891 10.9565 13.4484 10.8972C13.5078 10.8378 13.5771 10.8081 13.6562 10.8081H14.7052C14.7844 10.8081 14.8536 10.8378 14.913 10.8972C14.9724 10.9565 15.0021 11.0258 15.0021 11.105V12.1539C15.0021 12.2331 14.9724 12.3024 14.913 12.3618C14.8536 12.4211 14.7844 12.4508 14.7052 12.4508H13.6562ZM15.299 14.0737C15.2198 14.0737 15.1505 14.044 15.0911 13.9847C15.0318 13.9253 15.0021 13.856 15.0021 13.7769V12.7477C15.0021 12.6685 15.0318 12.5993 15.0911 12.5399C15.1505 12.4805 15.2198 12.4508 15.299 12.4508H16.3281C16.4073 12.4508 16.4766 12.4805 16.5359 12.5399C16.5953 12.5993 16.625 12.6685 16.625 12.7477V13.7769C16.625 13.856 16.5953 13.9253 16.5359 13.9847C16.4766 14.044 16.4073 14.0737 16.3281 14.0737H15.299Z" fill="currentColor"></path>
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
</div>
<div class="recent-item">
    <div class="recent-img-wrapper">
      <div class="full-img-wrapper"><img src="images/Card-1.png" loading="lazy" alt="" class="card-img"></div>
      <div class="phone-img-wrapper">
        <div class="phone-rel-wrapper"><img src="images/iPhone-12-Pro-Mockup-Front-View-1.png" loading="lazy" alt="" class="recent-phone-img"><img src="images/iPhone-12-Pro-Mockup-Front-View-label_1iPhone-12-Pro-Mockup-Front-View-label.png" loading="lazy" alt="" class="phone-content"></div>
    </div>
</div>
<div class="recent-content-wrapper">
  <div class="recent-content-con">
    <div class="status-toggle-wrapper">
      <div class="status-wrapper recent-status-wrapper">
        <div class="status active-card"></div>
        <div>Avalance Incorp.</div>
    </div>
    <div data-w-id="cfe36791-c0b8-6127-0fc3-9b68c6a89d16" class="toggle recent-toggle">
        <div class="toggle-switch"></div>
    </div>
</div>
<div class="scans-wrapper">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
      <path d="M12.75 16.5V15H15V12.75H16.5V15.375C16.5 15.675 16.35 15.9 16.125 16.125C15.9 16.35 15.6 16.5 15.375 16.5H12.75ZM5.25 16.5H2.625C2.325 16.5 2.1 16.35 1.875 16.125C1.65 15.9 1.5 15.6 1.5 15.375V12.75H3V15H5.25V16.5ZM12.75 1.5H15.375C15.675 1.5 15.9 1.65 16.125 1.875C16.35 2.1 16.5 2.325 16.5 2.625V5.25H15V3H12.75V1.5ZM5.25 1.5V3H3V5.25H1.5V2.625C1.5 2.325 1.65 2.1 1.875 1.875C2.1 1.65 2.325 1.5 2.625 1.5H5.25ZM14.25 8.25H3.75V9.75H14.25V8.25Z" fill="#5028FF"></path>
  </svg></div>
  <div>Remaining Scans:</div>
  <div class="scan">10</div>
</div>
<div class="scans-wrapper">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
      <path d="M7.5 9C9.1575 9 10.5 7.6575 10.5 6C10.5 4.3425 9.1575 3 7.5 3C5.8425 3 4.5 4.3425 4.5 6C4.5 7.6575 5.8425 9 7.5 9ZM7.5 4.5C7.89782 4.5 8.27936 4.65804 8.56066 4.93934C8.84196 5.22064 9 5.60218 9 6C9 6.39782 8.84196 6.77936 8.56066 7.06066C8.27936 7.34196 7.89782 7.5 7.5 7.5C6.6675 7.5 6 6.8325 6 6C6 5.1675 6.675 4.5 7.5 4.5ZM6.9525 15H1.5V12.75C1.5 10.7475 5.4975 9.75 7.5 9.75C8.28 9.75 9.375 9.9075 10.395 10.2075C9.75 10.4625 9.15 10.815 8.625 11.25C8.25 11.205 7.875 11.175 7.5 11.175C5.2725 11.175 2.925 12.27 2.925 12.75V13.575H6.915C6.9 13.6125 6.8775 13.65 6.855 13.6875L6.6375 14.25L6.855 14.8125C6.885 14.8725 6.9225 14.9325 6.9525 15ZM12.75 13.5C13.17 13.5 13.5 13.83 13.5 14.25C13.5 14.67 13.17 15 12.75 15C12.33 15 12 14.67 12 14.25C12 13.83 12.33 13.5 12.75 13.5ZM12.75 11.25C10.7025 11.25 8.955 12.495 8.25 14.25C8.955 16.005 10.7025 17.25 12.75 17.25C14.7975 17.25 16.545 16.005 17.25 14.25C16.545 12.495 14.7975 11.25 12.75 11.25ZM12.75 16.125C12.2527 16.125 11.7758 15.9275 11.4242 15.5758C11.0725 15.2242 10.875 14.7473 10.875 14.25C10.875 13.7527 11.0725 13.2758 11.4242 12.9242C11.7758 12.5725 12.2527 12.375 12.75 12.375C13.2473 12.375 13.7242 12.5725 14.0758 12.9242C14.4275 13.2758 14.625 13.7527 14.625 14.25C14.625 14.7473 14.4275 15.2242 14.0758 15.5758C13.7242 15.9275 13.2473 16.125 12.75 16.125Z" fill="#5028FF"></path>
  </svg></div>
  <div>Remaining Scans:</div>
  <div class="scan">5</div>
</div>
</div>
<div class="recent-button-wrapper">
    <a href="#" class="icon-button view-btn w-inline-block">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
          <g clip-path="url(#clip0_1835_4240)">
            <path d="M7.99984 3.99996C10.5265 3.99996 12.7798 5.41996 13.8798 7.66663C12.7798 9.91329 10.5265 11.3333 7.99984 11.3333C5.47317 11.3333 3.21984 9.91329 2.11984 7.66663C3.21984 5.41996 5.47317 3.99996 7.99984 3.99996ZM7.99984 2.66663C4.6665 2.66663 1.81984 4.73996 0.666504 7.66663C1.81984 10.5933 4.6665 12.6666 7.99984 12.6666C11.3332 12.6666 14.1798 10.5933 15.3332 7.66663C14.1798 4.73996 11.3332 2.66663 7.99984 2.66663ZM7.99984 5.99996C8.91984 5.99996 9.6665 6.74663 9.6665 7.66663C9.6665 8.58663 8.91984 9.33329 7.99984 9.33329C7.07984 9.33329 6.33317 8.58663 6.33317 7.66663C6.33317 6.74663 7.07984 5.99996 7.99984 5.99996ZM7.99984 4.66663C6.3465 4.66663 4.99984 6.01329 4.99984 7.66663C4.99984 9.31996 6.3465 10.6666 7.99984 10.6666C9.65317 10.6666 10.9998 9.31996 10.9998 7.66663C10.9998 6.01329 9.65317 4.66663 7.99984 4.66663Z" fill="currentColor"></path>
        </g>
        <defs>
            <clippath id="clip0_1835_4240">
              <rect width="16" height="16" fill="white"></rect>
          </clippath>
      </defs>
  </svg></div>
</a>
<a href="#" class="icon-button edit-btn w-inline-block">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
      <path d="M7.3335 2.66663H2.66683C2.31321 2.66663 1.97407 2.8071 1.72402 3.05715C1.47397 3.3072 1.3335 3.64634 1.3335 3.99996V13.3333C1.3335 13.6869 1.47397 14.0261 1.72402 14.2761C1.97407 14.5262 2.31321 14.6666 2.66683 14.6666H12.0002C12.3538 14.6666 12.6929 14.5262 12.943 14.2761C13.193 14.0261 13.3335 13.6869 13.3335 13.3333V8.66663" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
      <path d="M12.3335 1.66665C12.5987 1.40144 12.9584 1.25244 13.3335 1.25244C13.7086 1.25244 14.0683 1.40144 14.3335 1.66665C14.5987 1.93187 14.7477 2.29158 14.7477 2.66665C14.7477 3.04173 14.5987 3.40144 14.3335 3.66665L8.00016 9.99999L5.3335 10.6667L6.00016 7.99999L12.3335 1.66665Z" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
  </svg></div>
</a>
<a href="#" class="icon-button qr-btn w-inline-block">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewbox="0 0 19 20" fill="none">
      <path d="M3.5625 9.62061C3.23594 9.62061 2.95638 9.50433 2.72383 9.27178C2.49128 9.03923 2.375 8.75967 2.375 8.43311V4.27686C2.375 3.95029 2.49128 3.67074 2.72383 3.43818C2.95638 3.20563 3.23594 3.08936 3.5625 3.08936H7.71875C8.04531 3.08936 8.32487 3.20563 8.55742 3.43818C8.78997 3.67074 8.90625 3.95029 8.90625 4.27686V8.43311C8.90625 8.75967 8.78997 9.03923 8.55742 9.27178C8.32487 9.50433 8.04531 9.62061 7.71875 9.62061H3.5625ZM3.5625 8.43311H7.71875V4.27686H3.5625V8.43311ZM3.5625 17.3394C3.23594 17.3394 2.95638 17.2231 2.72383 16.9905C2.49128 16.758 2.375 16.4784 2.375 16.1519V11.9956C2.375 11.669 2.49128 11.3895 2.72383 11.1569C2.95638 10.9244 3.23594 10.8081 3.5625 10.8081H7.71875C8.04531 10.8081 8.32487 10.9244 8.55742 11.1569C8.78997 11.3895 8.90625 11.669 8.90625 11.9956V16.1519C8.90625 16.4784 8.78997 16.758 8.55742 16.9905C8.32487 17.2231 8.04531 17.3394 7.71875 17.3394H3.5625ZM3.5625 16.1519H7.71875V11.9956H3.5625V16.1519ZM11.2812 9.62061C10.9547 9.62061 10.6751 9.50433 10.4426 9.27178C10.21 9.03923 10.0938 8.75967 10.0938 8.43311V4.27686C10.0938 3.95029 10.21 3.67074 10.4426 3.43818C10.6751 3.20563 10.9547 3.08936 11.2812 3.08936H15.4375C15.7641 3.08936 16.0436 3.20563 16.2762 3.43818C16.5087 3.67074 16.625 3.95029 16.625 4.27686V8.43311C16.625 8.75967 16.5087 9.03923 16.2762 9.27178C16.0436 9.50433 15.7641 9.62061 15.4375 9.62061H11.2812ZM11.2812 8.43311H15.4375V4.27686H11.2812V8.43311ZM15.299 17.3394C15.2198 17.3394 15.1505 17.3097 15.0911 17.2503C15.0318 17.1909 15.0021 17.1216 15.0021 17.0425V16.0133C15.0021 15.9341 15.0318 15.8649 15.0911 15.8055C15.1505 15.7461 15.2198 15.7164 15.299 15.7164H16.3281C16.4073 15.7164 16.4766 15.7461 16.5359 15.8055C16.5953 15.8649 16.625 15.9341 16.625 16.0133V17.0425C16.625 17.1216 16.5953 17.1909 16.5359 17.2503C16.4766 17.3097 16.4073 17.3394 16.3281 17.3394H15.299ZM10.3906 12.4508C10.3115 12.4508 10.2422 12.4211 10.1828 12.3618C10.1234 12.3024 10.0938 12.2331 10.0938 12.1539V11.105C10.0938 11.0258 10.1234 10.9565 10.1828 10.8972C10.2422 10.8378 10.3115 10.8081 10.3906 10.8081H11.4198C11.499 10.8081 11.5682 10.8378 11.6276 10.8972C11.687 10.9565 11.7167 11.0258 11.7167 11.105V12.1539C11.7167 12.2331 11.687 12.3024 11.6276 12.3618C11.5682 12.4211 11.499 12.4508 11.4198 12.4508H10.3906ZM12.0135 14.0737C11.9344 14.0737 11.8651 14.044 11.8057 13.9847C11.7464 13.9253 11.7167 13.856 11.7167 13.7769V12.7477C11.7167 12.6685 11.7464 12.5993 11.8057 12.5399C11.8651 12.4805 11.9344 12.4508 12.0135 12.4508H13.0625C13.1417 12.4508 13.2109 12.4805 13.2703 12.5399C13.3297 12.5993 13.3594 12.6685 13.3594 12.7477V13.7769C13.3594 13.856 13.3297 13.9253 13.2703 13.9847C13.2109 14.044 13.1417 14.0737 13.0625 14.0737H12.0135ZM10.3906 15.7164C10.3115 15.7164 10.2422 15.6868 10.1828 15.6274C10.1234 15.568 10.0938 15.4987 10.0938 15.4196V14.3706C10.0938 14.2914 10.1234 14.2222 10.1828 14.1628C10.2422 14.1034 10.3115 14.0737 10.3906 14.0737H11.4198C11.499 14.0737 11.5682 14.1034 11.6276 14.1628C11.687 14.2222 11.7167 14.2914 11.7167 14.3706V15.4196C11.7167 15.4987 11.687 15.568 11.6276 15.6274C11.5682 15.6868 11.499 15.7164 11.4198 15.7164H10.3906ZM12.0135 17.3394C11.9344 17.3394 11.8651 17.3097 11.8057 17.2503C11.7464 17.1909 11.7167 17.1216 11.7167 17.0425V16.0133C11.7167 15.9341 11.7464 15.8649 11.8057 15.8055C11.8651 15.7461 11.9344 15.7164 12.0135 15.7164H13.0625C13.1417 15.7164 13.2109 15.7461 13.2703 15.8055C13.3297 15.8649 13.3594 15.9341 13.3594 16.0133V17.0425C13.3594 17.1216 13.3297 17.1909 13.2703 17.2503C13.2109 17.3097 13.1417 17.3394 13.0625 17.3394H12.0135ZM13.6562 15.7164C13.5771 15.7164 13.5078 15.6868 13.4484 15.6274C13.3891 15.568 13.3594 15.4987 13.3594 15.4196V14.3706C13.3594 14.2914 13.3891 14.2222 13.4484 14.1628C13.5078 14.1034 13.5771 14.0737 13.6562 14.0737H14.7052C14.7844 14.0737 14.8536 14.1034 14.913 14.1628C14.9724 14.2222 15.0021 14.2914 15.0021 14.3706V15.4196C15.0021 15.4987 14.9724 15.568 14.913 15.6274C14.8536 15.6868 14.7844 15.7164 14.7052 15.7164H13.6562ZM13.6562 12.4508C13.5771 12.4508 13.5078 12.4211 13.4484 12.3618C13.3891 12.3024 13.3594 12.2331 13.3594 12.1539V11.105C13.3594 11.0258 13.3891 10.9565 13.4484 10.8972C13.5078 10.8378 13.5771 10.8081 13.6562 10.8081H14.7052C14.7844 10.8081 14.8536 10.8378 14.913 10.8972C14.9724 10.9565 15.0021 11.0258 15.0021 11.105V12.1539C15.0021 12.2331 14.9724 12.3024 14.913 12.3618C14.8536 12.4211 14.7844 12.4508 14.7052 12.4508H13.6562ZM15.299 14.0737C15.2198 14.0737 15.1505 14.044 15.0911 13.9847C15.0318 13.9253 15.0021 13.856 15.0021 13.7769V12.7477C15.0021 12.6685 15.0318 12.5993 15.0911 12.5399C15.1505 12.4805 15.2198 12.4508 15.299 12.4508H16.3281C16.4073 12.4508 16.4766 12.4805 16.5359 12.5399C16.5953 12.5993 16.625 12.6685 16.625 12.7477V13.7769C16.625 13.856 16.5953 13.9253 16.5359 13.9847C16.4766 14.044 16.4073 14.0737 16.3281 14.0737H15.299Z" fill="currentColor"></path>
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
</div>
<div class="recent-item">
    <div class="recent-img-wrapper">
      <div class="full-img-wrapper"><img src="images/Card-1.png" loading="lazy" alt="" class="card-img"></div>
      <div class="phone-img-wrapper">
        <div class="phone-rel-wrapper"><img src="images/iPhone-12-Pro-Mockup-Front-View-1.png" loading="lazy" alt="" class="recent-phone-img"><img src="images/iPhone-12-Pro-Mockup-Front-View-label_1iPhone-12-Pro-Mockup-Front-View-label.png" loading="lazy" alt="" class="phone-content"></div>
    </div>
</div>
<div class="recent-content-wrapper">
  <div class="recent-content-con">
    <div class="status-toggle-wrapper">
      <div class="status-wrapper recent-status-wrapper">
        <div class="status active-card"></div>
        <div>Avalance Incorp.</div>
    </div>
    <div data-w-id="5ed6fb59-3c1b-3315-d462-ffc535e1f9bf" class="toggle recent-toggle">
        <div class="toggle-switch"></div>
    </div>
</div>
<div class="scans-wrapper">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
      <path d="M12.75 16.5V15H15V12.75H16.5V15.375C16.5 15.675 16.35 15.9 16.125 16.125C15.9 16.35 15.6 16.5 15.375 16.5H12.75ZM5.25 16.5H2.625C2.325 16.5 2.1 16.35 1.875 16.125C1.65 15.9 1.5 15.6 1.5 15.375V12.75H3V15H5.25V16.5ZM12.75 1.5H15.375C15.675 1.5 15.9 1.65 16.125 1.875C16.35 2.1 16.5 2.325 16.5 2.625V5.25H15V3H12.75V1.5ZM5.25 1.5V3H3V5.25H1.5V2.625C1.5 2.325 1.65 2.1 1.875 1.875C2.1 1.65 2.325 1.5 2.625 1.5H5.25ZM14.25 8.25H3.75V9.75H14.25V8.25Z" fill="#5028FF"></path>
  </svg></div>
  <div>Remaining Scans:</div>
  <div class="scan">10</div>
</div>
<div class="scans-wrapper">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
      <path d="M7.5 9C9.1575 9 10.5 7.6575 10.5 6C10.5 4.3425 9.1575 3 7.5 3C5.8425 3 4.5 4.3425 4.5 6C4.5 7.6575 5.8425 9 7.5 9ZM7.5 4.5C7.89782 4.5 8.27936 4.65804 8.56066 4.93934C8.84196 5.22064 9 5.60218 9 6C9 6.39782 8.84196 6.77936 8.56066 7.06066C8.27936 7.34196 7.89782 7.5 7.5 7.5C6.6675 7.5 6 6.8325 6 6C6 5.1675 6.675 4.5 7.5 4.5ZM6.9525 15H1.5V12.75C1.5 10.7475 5.4975 9.75 7.5 9.75C8.28 9.75 9.375 9.9075 10.395 10.2075C9.75 10.4625 9.15 10.815 8.625 11.25C8.25 11.205 7.875 11.175 7.5 11.175C5.2725 11.175 2.925 12.27 2.925 12.75V13.575H6.915C6.9 13.6125 6.8775 13.65 6.855 13.6875L6.6375 14.25L6.855 14.8125C6.885 14.8725 6.9225 14.9325 6.9525 15ZM12.75 13.5C13.17 13.5 13.5 13.83 13.5 14.25C13.5 14.67 13.17 15 12.75 15C12.33 15 12 14.67 12 14.25C12 13.83 12.33 13.5 12.75 13.5ZM12.75 11.25C10.7025 11.25 8.955 12.495 8.25 14.25C8.955 16.005 10.7025 17.25 12.75 17.25C14.7975 17.25 16.545 16.005 17.25 14.25C16.545 12.495 14.7975 11.25 12.75 11.25ZM12.75 16.125C12.2527 16.125 11.7758 15.9275 11.4242 15.5758C11.0725 15.2242 10.875 14.7473 10.875 14.25C10.875 13.7527 11.0725 13.2758 11.4242 12.9242C11.7758 12.5725 12.2527 12.375 12.75 12.375C13.2473 12.375 13.7242 12.5725 14.0758 12.9242C14.4275 13.2758 14.625 13.7527 14.625 14.25C14.625 14.7473 14.4275 15.2242 14.0758 15.5758C13.7242 15.9275 13.2473 16.125 12.75 16.125Z" fill="#5028FF"></path>
  </svg></div>
  <div>Remaining Scans:</div>
  <div class="scan">5</div>
</div>
</div>
<div class="recent-button-wrapper">
    <a href="#" class="icon-button view-btn w-inline-block">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
          <g clip-path="url(#clip0_1835_4240)">
            <path d="M7.99984 3.99996C10.5265 3.99996 12.7798 5.41996 13.8798 7.66663C12.7798 9.91329 10.5265 11.3333 7.99984 11.3333C5.47317 11.3333 3.21984 9.91329 2.11984 7.66663C3.21984 5.41996 5.47317 3.99996 7.99984 3.99996ZM7.99984 2.66663C4.6665 2.66663 1.81984 4.73996 0.666504 7.66663C1.81984 10.5933 4.6665 12.6666 7.99984 12.6666C11.3332 12.6666 14.1798 10.5933 15.3332 7.66663C14.1798 4.73996 11.3332 2.66663 7.99984 2.66663ZM7.99984 5.99996C8.91984 5.99996 9.6665 6.74663 9.6665 7.66663C9.6665 8.58663 8.91984 9.33329 7.99984 9.33329C7.07984 9.33329 6.33317 8.58663 6.33317 7.66663C6.33317 6.74663 7.07984 5.99996 7.99984 5.99996ZM7.99984 4.66663C6.3465 4.66663 4.99984 6.01329 4.99984 7.66663C4.99984 9.31996 6.3465 10.6666 7.99984 10.6666C9.65317 10.6666 10.9998 9.31996 10.9998 7.66663C10.9998 6.01329 9.65317 4.66663 7.99984 4.66663Z" fill="currentColor"></path>
        </g>
        <defs>
            <clippath id="clip0_1835_4240">
              <rect width="16" height="16" fill="white"></rect>
          </clippath>
      </defs>
  </svg></div>
</a>
<a href="#" class="icon-button edit-btn w-inline-block">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
      <path d="M7.3335 2.66663H2.66683C2.31321 2.66663 1.97407 2.8071 1.72402 3.05715C1.47397 3.3072 1.3335 3.64634 1.3335 3.99996V13.3333C1.3335 13.6869 1.47397 14.0261 1.72402 14.2761C1.97407 14.5262 2.31321 14.6666 2.66683 14.6666H12.0002C12.3538 14.6666 12.6929 14.5262 12.943 14.2761C13.193 14.0261 13.3335 13.6869 13.3335 13.3333V8.66663" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
      <path d="M12.3335 1.66665C12.5987 1.40144 12.9584 1.25244 13.3335 1.25244C13.7086 1.25244 14.0683 1.40144 14.3335 1.66665C14.5987 1.93187 14.7477 2.29158 14.7477 2.66665C14.7477 3.04173 14.5987 3.40144 14.3335 3.66665L8.00016 9.99999L5.3335 10.6667L6.00016 7.99999L12.3335 1.66665Z" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
  </svg></div>
</a>
<a href="#" class="icon-button qr-btn w-inline-block">
  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewbox="0 0 19 20" fill="none">
      <path d="M3.5625 9.62061C3.23594 9.62061 2.95638 9.50433 2.72383 9.27178C2.49128 9.03923 2.375 8.75967 2.375 8.43311V4.27686C2.375 3.95029 2.49128 3.67074 2.72383 3.43818C2.95638 3.20563 3.23594 3.08936 3.5625 3.08936H7.71875C8.04531 3.08936 8.32487 3.20563 8.55742 3.43818C8.78997 3.67074 8.90625 3.95029 8.90625 4.27686V8.43311C8.90625 8.75967 8.78997 9.03923 8.55742 9.27178C8.32487 9.50433 8.04531 9.62061 7.71875 9.62061H3.5625ZM3.5625 8.43311H7.71875V4.27686H3.5625V8.43311ZM3.5625 17.3394C3.23594 17.3394 2.95638 17.2231 2.72383 16.9905C2.49128 16.758 2.375 16.4784 2.375 16.1519V11.9956C2.375 11.669 2.49128 11.3895 2.72383 11.1569C2.95638 10.9244 3.23594 10.8081 3.5625 10.8081H7.71875C8.04531 10.8081 8.32487 10.9244 8.55742 11.1569C8.78997 11.3895 8.90625 11.669 8.90625 11.9956V16.1519C8.90625 16.4784 8.78997 16.758 8.55742 16.9905C8.32487 17.2231 8.04531 17.3394 7.71875 17.3394H3.5625ZM3.5625 16.1519H7.71875V11.9956H3.5625V16.1519ZM11.2812 9.62061C10.9547 9.62061 10.6751 9.50433 10.4426 9.27178C10.21 9.03923 10.0938 8.75967 10.0938 8.43311V4.27686C10.0938 3.95029 10.21 3.67074 10.4426 3.43818C10.6751 3.20563 10.9547 3.08936 11.2812 3.08936H15.4375C15.7641 3.08936 16.0436 3.20563 16.2762 3.43818C16.5087 3.67074 16.625 3.95029 16.625 4.27686V8.43311C16.625 8.75967 16.5087 9.03923 16.2762 9.27178C16.0436 9.50433 15.7641 9.62061 15.4375 9.62061H11.2812ZM11.2812 8.43311H15.4375V4.27686H11.2812V8.43311ZM15.299 17.3394C15.2198 17.3394 15.1505 17.3097 15.0911 17.2503C15.0318 17.1909 15.0021 17.1216 15.0021 17.0425V16.0133C15.0021 15.9341 15.0318 15.8649 15.0911 15.8055C15.1505 15.7461 15.2198 15.7164 15.299 15.7164H16.3281C16.4073 15.7164 16.4766 15.7461 16.5359 15.8055C16.5953 15.8649 16.625 15.9341 16.625 16.0133V17.0425C16.625 17.1216 16.5953 17.1909 16.5359 17.2503C16.4766 17.3097 16.4073 17.3394 16.3281 17.3394H15.299ZM10.3906 12.4508C10.3115 12.4508 10.2422 12.4211 10.1828 12.3618C10.1234 12.3024 10.0938 12.2331 10.0938 12.1539V11.105C10.0938 11.0258 10.1234 10.9565 10.1828 10.8972C10.2422 10.8378 10.3115 10.8081 10.3906 10.8081H11.4198C11.499 10.8081 11.5682 10.8378 11.6276 10.8972C11.687 10.9565 11.7167 11.0258 11.7167 11.105V12.1539C11.7167 12.2331 11.687 12.3024 11.6276 12.3618C11.5682 12.4211 11.499 12.4508 11.4198 12.4508H10.3906ZM12.0135 14.0737C11.9344 14.0737 11.8651 14.044 11.8057 13.9847C11.7464 13.9253 11.7167 13.856 11.7167 13.7769V12.7477C11.7167 12.6685 11.7464 12.5993 11.8057 12.5399C11.8651 12.4805 11.9344 12.4508 12.0135 12.4508H13.0625C13.1417 12.4508 13.2109 12.4805 13.2703 12.5399C13.3297 12.5993 13.3594 12.6685 13.3594 12.7477V13.7769C13.3594 13.856 13.3297 13.9253 13.2703 13.9847C13.2109 14.044 13.1417 14.0737 13.0625 14.0737H12.0135ZM10.3906 15.7164C10.3115 15.7164 10.2422 15.6868 10.1828 15.6274C10.1234 15.568 10.0938 15.4987 10.0938 15.4196V14.3706C10.0938 14.2914 10.1234 14.2222 10.1828 14.1628C10.2422 14.1034 10.3115 14.0737 10.3906 14.0737H11.4198C11.499 14.0737 11.5682 14.1034 11.6276 14.1628C11.687 14.2222 11.7167 14.2914 11.7167 14.3706V15.4196C11.7167 15.4987 11.687 15.568 11.6276 15.6274C11.5682 15.6868 11.499 15.7164 11.4198 15.7164H10.3906ZM12.0135 17.3394C11.9344 17.3394 11.8651 17.3097 11.8057 17.2503C11.7464 17.1909 11.7167 17.1216 11.7167 17.0425V16.0133C11.7167 15.9341 11.7464 15.8649 11.8057 15.8055C11.8651 15.7461 11.9344 15.7164 12.0135 15.7164H13.0625C13.1417 15.7164 13.2109 15.7461 13.2703 15.8055C13.3297 15.8649 13.3594 15.9341 13.3594 16.0133V17.0425C13.3594 17.1216 13.3297 17.1909 13.2703 17.2503C13.2109 17.3097 13.1417 17.3394 13.0625 17.3394H12.0135ZM13.6562 15.7164C13.5771 15.7164 13.5078 15.6868 13.4484 15.6274C13.3891 15.568 13.3594 15.4987 13.3594 15.4196V14.3706C13.3594 14.2914 13.3891 14.2222 13.4484 14.1628C13.5078 14.1034 13.5771 14.0737 13.6562 14.0737H14.7052C14.7844 14.0737 14.8536 14.1034 14.913 14.1628C14.9724 14.2222 15.0021 14.2914 15.0021 14.3706V15.4196C15.0021 15.4987 14.9724 15.568 14.913 15.6274C14.8536 15.6868 14.7844 15.7164 14.7052 15.7164H13.6562ZM13.6562 12.4508C13.5771 12.4508 13.5078 12.4211 13.4484 12.3618C13.3891 12.3024 13.3594 12.2331 13.3594 12.1539V11.105C13.3594 11.0258 13.3891 10.9565 13.4484 10.8972C13.5078 10.8378 13.5771 10.8081 13.6562 10.8081H14.7052C14.7844 10.8081 14.8536 10.8378 14.913 10.8972C14.9724 10.9565 15.0021 11.0258 15.0021 11.105V12.1539C15.0021 12.2331 14.9724 12.3024 14.913 12.3618C14.8536 12.4211 14.7844 12.4508 14.7052 12.4508H13.6562ZM15.299 14.0737C15.2198 14.0737 15.1505 14.044 15.0911 13.9847C15.0318 13.9253 15.0021 13.856 15.0021 13.7769V12.7477C15.0021 12.6685 15.0318 12.5993 15.0911 12.5399C15.1505 12.4805 15.2198 12.4508 15.299 12.4508H16.3281C16.4073 12.4508 16.4766 12.4805 16.5359 12.5399C16.5953 12.5993 16.625 12.6685 16.625 12.7477V13.7769C16.625 13.856 16.5953 13.9253 16.5359 13.9847C16.4766 14.044 16.4073 14.0737 16.3281 14.0737H15.299Z" fill="currentColor"></path>
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
</div>
</div>
</div>
</div>
</div>
</div>
<div class="user-button-wrapper user-show-mobile">
  <div class="user-button-grid">
    <div class="profile-name-wrapper affliate-nav-button-wrapper">
      <div class="affiliate-title-wrapper">
        <div class="text-size-regular text-weight-medium">Become an affiliate</div>
        <div class="text-size-regular email">Spread the word and earn as you go!</div>
    </div>
</div>
</div>
<div class="affiliate-button-wrapper">
    <a href="#" class="button w-button">Apply now!</a>
    <a href="#" class="button is-secondary w-button">Learn More</a>
</div>
</div>
</div>
</div>
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
    var slider = $('.recent-list');
    slider.on('initialized.owl.carousel changed.owl.carousel', function(event) {
     if (!event.namespace)  {
       return;
   }
}).owlCarousel({
	items: 1,
  nav: false,
  dots: false,
  loop: false,
  autoHeight: false,
  autoplay: false,
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
   margin:24,
   stagePadding: 75,
}
}          
});
</script>
</body>
</html>