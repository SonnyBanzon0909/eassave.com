<?php
$root = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="665f147b743ba95cae446d75" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Setup - Coming soon</title>
  <meta content="Setup - Coming soon" property="og:title">
  <meta content="Setup - Coming soon" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="../../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../../css/eassave-v2.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Epilogue:300,regular,500,600,700,900","Inter:100,200,300,regular,500,600,700,800,900"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="../../images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="../../images/webclip.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
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
      <div class="navigation-wrapper">
        <section class="section-navigation">
          <div class="nav-overlay"></div>
          <div class="padding-global relative">
            <div class="container-large">
              <div class="desktop-nav-wrapper">
                <div class="nav-link-container">
                  <a href="../../index.html" class="logo-wrapper w-inline-block"><img src="../../images/EASSAVE-Logo.svg" loading="eager" alt="" class="logo"></a>
                  <div class="nav-links-wraper">
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e944-1779e93a" href="../../index.html" class="text-size-small nav-link">Home</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e946-1779e93a" href="../../about.html" class="text-size-small nav-link">About us</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e948-1779e93a" href="../../shop.html" class="text-size-small nav-link">Shop</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e94a-1779e93a" href="../../services.html" class="text-size-small nav-link">Services</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e94c-1779e93a" href="../../affiliates.html" class="text-size-small nav-link hide">Affiliate</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e94e-1779e93a" href="../../frequently-asked-questions.html" class="text-size-small nav-link">FAQ</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e950-1779e93a" href="../../contact.html" class="text-size-small nav-link">Contact Us</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e952-1779e93a" href="#" class="text-size-small nav-link">Blogs</a>
                  </div>
                </div>
                <div id="activation-wrapper" class="nav-links-wraper _2-cols">
                  <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e955-1779e93a" href="../../auth/activate-card.html" class="text-size-regular activate-btn">Activate Card</a>
                  <a data-w-id="0ce80fb3-12ea-ae45-b05b-d15d1779e957" href="../../auth/login.html" class="button is-icon w-inline-block">
                    <div class="btn-text">Login</div>
                    <div class="icon-1x1-small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.32481 1.89973C5.86086 2.62911 7.23527 3.75138 9.13918 3.69086L1.16196 8.29651L1.44768 8.79138L9.42395 4.18628C8.42036 5.80457 8.70502 7.5554 9.06858 8.38414L9.59187 8.15458C9.19323 7.24586 8.893 4.99296 10.9407 3.33777L10.7588 3.11272L10.7351 3.07171L10.6311 2.80164C8.17386 3.74738 6.37291 2.36093 5.78526 1.56133L5.32481 1.89973Z" fill="white"></path>
                      </svg></div>
                    <div class="button-overlay pointer-events-off"></div>
                  </a>
                </div>
                <div id="login-button" class="login-wrapper">
                  <div class="cart-wrapper">
                    <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 26 26" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.79627 0.859901C1.56022 0.781331 1.30264 0.799746 1.08017 0.911096C0.857706 1.02245 0.688586 1.21761 0.610016 1.45365C0.531445 1.68969 0.54986 1.94728 0.66121 2.16975C0.77256 2.39221 0.967723 2.56133 1.20377 2.6399L1.53502 2.7499C2.38002 3.03115 2.94002 3.2199 3.35127 3.41115C3.74127 3.5924 3.91002 3.73865 4.01752 3.88865C4.12627 4.03865 4.21127 4.24365 4.26002 4.67115C4.31127 5.1224 4.31252 5.7124 4.31252 6.60365V9.94365C4.31252 11.6524 4.31252 13.0312 4.45877 14.1149C4.60877 15.2399 4.93377 16.1874 5.68627 16.9399C6.43752 17.6924 7.38627 18.0149 8.51127 18.1674C9.59377 18.3124 10.9725 18.3124 12.6813 18.3124H22.75C22.9987 18.3124 23.2371 18.2136 23.4129 18.0378C23.5887 17.862 23.6875 17.6235 23.6875 17.3749C23.6875 17.1263 23.5887 16.8878 23.4129 16.712C23.2371 16.5362 22.9987 16.4374 22.75 16.4374H12.75C10.9563 16.4374 9.70502 16.4349 8.76002 16.3087C7.84377 16.1849 7.35752 15.9587 7.01127 15.6137C6.88524 15.4875 6.7779 15.344 6.69252 15.1874H19.0738C19.6338 15.1874 20.1263 15.1874 20.5363 15.1437C20.9788 15.0949 21.4088 14.9887 21.8113 14.7224C22.2163 14.4562 22.4825 14.1037 22.7013 13.7149C22.9025 13.3574 23.0975 12.9037 23.3175 12.3887L23.9013 11.0262C24.3825 9.90615 24.7838 8.9674 24.985 8.2049C25.195 7.40865 25.25 6.5774 24.755 5.82615C24.26 5.07615 23.4738 4.79865 22.66 4.6774C21.8788 4.5624 20.8588 4.5624 19.6388 4.5624H6.13377C6.13029 4.52779 6.12654 4.4932 6.12252 4.45865C6.05377 3.8524 5.90252 3.29615 5.53877 2.7924C5.17502 2.2874 4.69502 1.9674 4.14252 1.71115C3.62127 1.46865 2.96002 1.24865 2.17752 0.986151L1.79627 0.859901ZM6.18752 6.4374V9.8749C6.18752 11.3399 6.18877 12.4424 6.25877 13.3124H19.0275C19.6475 13.3124 20.0388 13.3112 20.335 13.2787C20.6088 13.2499 20.7138 13.2012 20.78 13.1574C20.8463 13.1137 20.9325 13.0362 21.0675 12.7962C21.2138 12.5362 21.3675 12.1774 21.6125 11.6087L22.1488 10.3587C22.6663 9.14865 23.0113 8.33865 23.1725 7.72615C23.33 7.13115 23.25 6.95115 23.19 6.85865C23.1288 6.7674 22.9938 6.6224 22.385 6.53365C21.7588 6.4399 20.8788 6.4374 19.5638 6.4374H6.18752ZM5.56252 22.3749C5.56252 23.1208 5.85883 23.8362 6.38628 24.3636C6.91372 24.8911 7.62909 25.1874 8.37502 25.1874C9.12094 25.1874 9.83631 24.8911 10.3638 24.3636C10.8912 23.8362 11.1875 23.1208 11.1875 22.3749C11.1875 21.629 10.8912 20.9136 10.3638 20.3862C9.83631 19.8587 9.12094 19.5624 8.37502 19.5624C7.62909 19.5624 6.91372 19.8587 6.38628 20.3862C5.85883 20.9136 5.56252 21.629 5.56252 22.3749ZM8.37502 23.3124C8.12638 23.3124 7.88792 23.2136 7.7121 23.0378C7.53629 22.862 7.43752 22.6235 7.43752 22.3749C7.43752 22.1263 7.53629 21.8878 7.7121 21.712C7.88792 21.5362 8.12638 21.4374 8.37502 21.4374C8.62366 21.4374 8.86211 21.5362 9.03793 21.712C9.21374 21.8878 9.31252 22.1263 9.31252 22.3749C9.31252 22.6235 9.21374 22.862 9.03793 23.0378C8.86211 23.2136 8.62366 23.3124 8.37502 23.3124ZM19.625 25.1874C18.8791 25.1874 18.1637 24.8911 17.6363 24.3636C17.1088 23.8362 16.8125 23.1208 16.8125 22.3749C16.8125 21.629 17.1088 20.9136 17.6363 20.3862C18.1637 19.8587 18.8791 19.5624 19.625 19.5624C20.3709 19.5624 21.0863 19.8587 21.6138 20.3862C22.1412 20.9136 22.4375 21.629 22.4375 22.3749C22.4375 23.1208 22.1412 23.8362 21.6138 24.3636C21.0863 24.8911 20.3709 25.1874 19.625 25.1874ZM18.6875 22.3749C18.6875 22.6235 18.7863 22.862 18.9621 23.0378C19.1379 23.2136 19.3764 23.3124 19.625 23.3124C19.8737 23.3124 20.1121 23.2136 20.2879 23.0378C20.4637 22.862 20.5625 22.6235 20.5625 22.3749C20.5625 22.1263 20.4637 21.8878 20.2879 21.712C20.1121 21.5362 19.8737 21.4374 19.625 21.4374C19.3764 21.4374 19.1379 21.5362 18.9621 21.712C18.7863 21.8878 18.6875 22.1263 18.6875 22.3749Z" fill="currentColor"></path>
                      </svg></div>
                    <div class="cart-count">3</div>
                  </div>
                  <div data-hover="false" data-delay="500" data-w-id="30273ba6-ffcc-9d16-dd6c-8876f1b8393d" class="login-dropdown w-dropdown">
                    <div class="dropdown-toggle login-toggle w-dropdown-toggle"><img src="../../images/Ellipse-77_1Ellipse-77.png" loading="eager" alt="" class="profile-img">
                      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                          <path d="M11.9998 15.55C11.8665 15.55 11.7371 15.525 11.6118 15.475C11.4865 15.425 11.3825 15.3583 11.2998 15.275L6.6998 10.675C6.51647 10.4917 6.4248 10.2583 6.4248 9.975C6.4248 9.69167 6.51647 9.45833 6.6998 9.275C6.88314 9.09167 7.11647 9 7.3998 9C7.68314 9 7.91647 9.09167 8.0998 9.275L11.9998 13.175L15.8998 9.275C16.0831 9.09167 16.3165 9 16.5998 9C16.8831 9 17.1165 9.09167 17.2998 9.275C17.4831 9.45833 17.5748 9.69167 17.5748 9.975C17.5748 10.2583 17.4831 10.4917 17.2998 10.675L12.6998 15.275C12.5998 15.375 12.4915 15.446 12.3748 15.488C12.2581 15.53 12.1331 15.5507 11.9998 15.55Z" fill="currentColor"></path>
                        </svg></div>
                    </div>
                    <nav class="dropdown-list w-dropdown-list">
                      <a href="#" class="w-dropdown-link">Link 1</a>
                      <a href="#" class="w-dropdown-link">Link 2</a>
                      <a href="#" class="w-dropdown-link">Link 3</a>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="mobile-nav-wrapper">
                <div data-w-id="6d795307-95b4-9be5-85ac-f7785945033b" class="hamburger">
                  <div class="top"></div>
                  <div class="middle"></div>
                  <div class="bottom"></div>
                </div>
                <a href="../../index.html" class="logo-wrapper w-inline-block"><img src="../../images/EASSAVE-Logo.svg" loading="eager" alt="" class="logo"></a>
                <div class="cart-wrapper">
                  <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 26 26" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.79627 0.859901C1.56022 0.781331 1.30264 0.799746 1.08017 0.911096C0.857706 1.02245 0.688586 1.21761 0.610016 1.45365C0.531445 1.68969 0.54986 1.94728 0.66121 2.16975C0.77256 2.39221 0.967723 2.56133 1.20377 2.6399L1.53502 2.7499C2.38002 3.03115 2.94002 3.2199 3.35127 3.41115C3.74127 3.5924 3.91002 3.73865 4.01752 3.88865C4.12627 4.03865 4.21127 4.24365 4.26002 4.67115C4.31127 5.1224 4.31252 5.7124 4.31252 6.60365V9.94365C4.31252 11.6524 4.31252 13.0312 4.45877 14.1149C4.60877 15.2399 4.93377 16.1874 5.68627 16.9399C6.43752 17.6924 7.38627 18.0149 8.51127 18.1674C9.59377 18.3124 10.9725 18.3124 12.6813 18.3124H22.75C22.9987 18.3124 23.2371 18.2136 23.4129 18.0378C23.5887 17.862 23.6875 17.6235 23.6875 17.3749C23.6875 17.1263 23.5887 16.8878 23.4129 16.712C23.2371 16.5362 22.9987 16.4374 22.75 16.4374H12.75C10.9563 16.4374 9.70502 16.4349 8.76002 16.3087C7.84377 16.1849 7.35752 15.9587 7.01127 15.6137C6.88524 15.4875 6.7779 15.344 6.69252 15.1874H19.0738C19.6338 15.1874 20.1263 15.1874 20.5363 15.1437C20.9788 15.0949 21.4088 14.9887 21.8113 14.7224C22.2163 14.4562 22.4825 14.1037 22.7013 13.7149C22.9025 13.3574 23.0975 12.9037 23.3175 12.3887L23.9013 11.0262C24.3825 9.90615 24.7838 8.9674 24.985 8.2049C25.195 7.40865 25.25 6.5774 24.755 5.82615C24.26 5.07615 23.4738 4.79865 22.66 4.6774C21.8788 4.5624 20.8588 4.5624 19.6388 4.5624H6.13377C6.13029 4.52779 6.12654 4.4932 6.12252 4.45865C6.05377 3.8524 5.90252 3.29615 5.53877 2.7924C5.17502 2.2874 4.69502 1.9674 4.14252 1.71115C3.62127 1.46865 2.96002 1.24865 2.17752 0.986151L1.79627 0.859901ZM6.18752 6.4374V9.8749C6.18752 11.3399 6.18877 12.4424 6.25877 13.3124H19.0275C19.6475 13.3124 20.0388 13.3112 20.335 13.2787C20.6088 13.2499 20.7138 13.2012 20.78 13.1574C20.8463 13.1137 20.9325 13.0362 21.0675 12.7962C21.2138 12.5362 21.3675 12.1774 21.6125 11.6087L22.1488 10.3587C22.6663 9.14865 23.0113 8.33865 23.1725 7.72615C23.33 7.13115 23.25 6.95115 23.19 6.85865C23.1288 6.7674 22.9938 6.6224 22.385 6.53365C21.7588 6.4399 20.8788 6.4374 19.5638 6.4374H6.18752ZM5.56252 22.3749C5.56252 23.1208 5.85883 23.8362 6.38628 24.3636C6.91372 24.8911 7.62909 25.1874 8.37502 25.1874C9.12094 25.1874 9.83631 24.8911 10.3638 24.3636C10.8912 23.8362 11.1875 23.1208 11.1875 22.3749C11.1875 21.629 10.8912 20.9136 10.3638 20.3862C9.83631 19.8587 9.12094 19.5624 8.37502 19.5624C7.62909 19.5624 6.91372 19.8587 6.38628 20.3862C5.85883 20.9136 5.56252 21.629 5.56252 22.3749ZM8.37502 23.3124C8.12638 23.3124 7.88792 23.2136 7.7121 23.0378C7.53629 22.862 7.43752 22.6235 7.43752 22.3749C7.43752 22.1263 7.53629 21.8878 7.7121 21.712C7.88792 21.5362 8.12638 21.4374 8.37502 21.4374C8.62366 21.4374 8.86211 21.5362 9.03793 21.712C9.21374 21.8878 9.31252 22.1263 9.31252 22.3749C9.31252 22.6235 9.21374 22.862 9.03793 23.0378C8.86211 23.2136 8.62366 23.3124 8.37502 23.3124ZM19.625 25.1874C18.8791 25.1874 18.1637 24.8911 17.6363 24.3636C17.1088 23.8362 16.8125 23.1208 16.8125 22.3749C16.8125 21.629 17.1088 20.9136 17.6363 20.3862C18.1637 19.8587 18.8791 19.5624 19.625 19.5624C20.3709 19.5624 21.0863 19.8587 21.6138 20.3862C22.1412 20.9136 22.4375 21.629 22.4375 22.3749C22.4375 23.1208 22.1412 23.8362 21.6138 24.3636C21.0863 24.8911 20.3709 25.1874 19.625 25.1874ZM18.6875 22.3749C18.6875 22.6235 18.7863 22.862 18.9621 23.0378C19.1379 23.2136 19.3764 23.3124 19.625 23.3124C19.8737 23.3124 20.1121 23.2136 20.2879 23.0378C20.4637 22.862 20.5625 22.6235 20.5625 22.3749C20.5625 22.1263 20.4637 21.8878 20.2879 21.712C20.1121 21.5362 19.8737 21.4374 19.625 21.4374C19.3764 21.4374 19.1379 21.5362 18.9621 21.712C18.7863 21.8878 18.6875 22.1263 18.6875 22.3749Z" fill="currentColor"></path>
                    </svg></div>
                  <div class="cart-count">3</div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-navigation-list">
          <div class="padding-global navlist-padding">
            <div class="container-large">
              <div class="navigation-list-hamburger-wrapper">
                <div class="mobile-nav-link-wrapper">
                  <a href="../../index.html" class="text-size-small nav-link">Home</a>
                  <a href="#" class="text-size-small nav-link">About us</a>
                  <a href="#" class="text-size-small nav-link">Shop</a>
                  <a href="#" class="text-size-small nav-link">Services</a>
                </div>
                <div class="mobile-nav-link-wrapper">
                  <a href="../../affiliates.html" class="text-size-small nav-link secondary-nav-link">Affiliate</a>
                  <a href="#" class="text-size-small nav-link secondary-nav-link">FAQ</a>
                  <a href="#" class="text-size-small nav-link secondary-nav-link">Contact Us</a>
                  <a href="#" class="text-size-small nav-link secondary-nav-link">Blogs</a>
                  <a href="#" class="text-size-small nav-link secondary-nav-link">Activate Cards</a>
                </div>
                <div class="mobile-nav-link-wrapper">
                  <a href="#" class="text-size-small nav-link secondary-nav-link">My Customer Account</a>
                  <a href="#" class="text-size-small nav-link secondary-nav-link">Account Settings</a>
                  <a href="#" class="text-size-small nav-link secondary-nav-link">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <section class="section-template">
        <div class="padding-global no-padding">
          <div class="container-large">
            <div class="user-profile-wrapper align-start padding-25 template-container">
              <div id="w-node-c67de879-8571-3066-c007-09fecf7d1e7e-cf7d1e7e" class="user-navigation-wrapper">
                <div class="user-button-wrapper">
                  <div class="profile-name-wrapper"><img src="../../images/Ellipse-77_1Ellipse-77.png" loading="lazy" alt="" class="profile-img">
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
                    <a href="../../shop/my-order.html" class="sidenav-button w-inline-block">
                      <div class="icon color-blue w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                          <path d="M3.7002 14.6667C3.21408 14.6667 2.80089 14.4965 2.46061 14.1563C2.12033 13.816 1.9502 13.4028 1.9502 12.9167V11.3334C1.9502 11.1917 1.99811 11.0729 2.09395 10.9771C2.18978 10.8813 2.30853 10.8334 2.4502 10.8334H4.06686V1.76668C4.06686 1.65557 4.11131 1.60002 4.2002 1.60002C4.28908 1.60002 4.37797 1.64446 4.46686 1.73335L5.06686 2.33335L5.88353 1.51668C5.93504 1.46113 5.99514 1.43335 6.06383 1.43335C6.13252 1.43335 6.19464 1.46113 6.2502 1.51668L7.0502 2.33335L7.86686 1.51668C7.91837 1.46113 7.97847 1.43335 8.04716 1.43335C8.11585 1.43335 8.17797 1.46113 8.23353 1.51668L9.05019 2.33335L9.86686 1.51668C9.91837 1.46113 9.97847 1.43335 10.0472 1.43335C10.1159 1.43335 10.178 1.46113 10.2335 1.51668L11.0502 2.33335L11.8669 1.51668C11.9184 1.46113 11.9785 1.43335 12.0472 1.43335C12.1159 1.43335 12.178 1.46113 12.2335 1.51668L13.0502 2.33335L13.6502 1.73335C13.7391 1.64446 13.828 1.60002 13.9169 1.60002C14.0057 1.60002 14.0502 1.65708 14.0502 1.77122V12.9167C14.0502 13.4028 13.8801 13.816 13.5398 14.1563C13.1995 14.4965 12.7863 14.6667 12.3002 14.6667H3.7002ZM12.3002 13.6667C12.5224 13.6667 12.703 13.5972 12.8419 13.4584C12.9808 13.3195 13.0502 13.1389 13.0502 12.9167V3.00002H5.06686V10.8334H11.0502C11.1919 10.8334 11.3106 10.8813 11.4064 10.9771C11.5023 11.0729 11.5502 11.1917 11.5502 11.3334V12.9141C11.5502 13.138 11.6196 13.3195 11.7585 13.4584C11.8974 13.5972 12.078 13.6667 12.3002 13.6667ZM6.43353 5.63335C6.3002 5.63335 6.18631 5.58335 6.09186 5.48335C5.99742 5.38335 5.9502 5.26391 5.9502 5.12502C5.9502 4.98613 5.99811 4.86946 6.09395 4.77502C6.18978 4.68057 6.30853 4.63335 6.45019 4.63335H9.45019C9.59186 4.63335 9.71061 4.68154 9.80644 4.77793C9.90228 4.87433 9.95019 4.99378 9.95019 5.13627C9.95019 5.27877 9.90228 5.39724 9.80644 5.49168C9.71061 5.58613 9.59186 5.63335 9.45019 5.63335H6.43353ZM6.43353 7.86668C6.3002 7.86668 6.18631 7.81668 6.09186 7.71668C5.99742 7.61668 5.9502 7.49724 5.9502 7.35835C5.9502 7.21946 5.99811 7.10279 6.09395 7.00835C6.18978 6.91391 6.30853 6.86668 6.45019 6.86668H9.45019C9.59186 6.86668 9.71061 6.91488 9.80644 7.01127C9.90228 7.10767 9.95019 7.22711 9.95019 7.3696C9.95019 7.5121 9.90228 7.63057 9.80644 7.72502C9.71061 7.81946 9.59186 7.86668 9.45019 7.86668H6.43353ZM11.5002 5.63335C11.3669 5.63335 11.2502 5.58335 11.1502 5.48335C11.0502 5.38335 11.0002 5.26668 11.0002 5.13335C11.0002 5.00002 11.0502 4.88335 11.1502 4.78335C11.2502 4.68335 11.3669 4.63335 11.5002 4.63335C11.6335 4.63335 11.7502 4.68335 11.8502 4.78335C11.9502 4.88335 12.0002 5.00002 12.0002 5.13335C12.0002 5.26668 11.9502 5.38335 11.8502 5.48335C11.7502 5.58335 11.6335 5.63335 11.5002 5.63335ZM11.5002 7.78335C11.3669 7.78335 11.2502 7.73335 11.1502 7.63335C11.0502 7.53335 11.0002 7.41668 11.0002 7.28335C11.0002 7.15002 11.0502 7.03335 11.1502 6.93335C11.2502 6.83335 11.3669 6.78335 11.5002 6.78335C11.6335 6.78335 11.7502 6.83335 11.8502 6.93335C11.9502 7.03335 12.0002 7.15002 12.0002 7.28335C12.0002 7.41668 11.9502 7.53335 11.8502 7.63335C11.7502 7.73335 11.6335 7.78335 11.5002 7.78335ZM3.68353 13.6667H10.5502V11.8334H2.9502V12.9167C2.9502 13.1389 3.02047 13.3195 3.16103 13.4584C3.30158 13.5972 3.47575 13.6667 3.68353 13.6667Z" fill="currentColor"></path>
                        </svg></div>
                      <div>My Orders</div>
                    </a>
                    <a href="../../shop/transaction-history.html" class="sidenav-button w-inline-block">
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
              <div id="w-node-ec0c5697-ba6c-bcce-c860-2bbaa44a6330-ae446d75" class="dashboard-container relative-dashboard">
                <div class="tab-btn-wrapper">
                  <a id="prev-tab" href="#" class="button is-secondary setup-btn">Back</a>
                  <a id="next-tab" href="#" class="button radius-none">Next</a>
                </div>
                <div class="setup-form-block w-form">
                  <form id="wf-form-Digital-Cards" name="wf-form-Digital-Cards" data-name="Digital Cards" method="post" data-wf-page-id="665f147b743ba95cae446d75" data-wf-element-id="c241c496-7653-4e64-ae00-e64eb84fe2e6">
                    <div class="tabs-wrapper">
                      <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="form-tabs w-tabs">
                        <div class="steps-title-wrapper pointer-events-off w-tab-menu">
                          <a data-w-tab="Tab 1" class="steps-con w-inline-block w-tab-link w--current">
                            <div class="steps-number">Step 1:</div>
                            <div class="steps-title">Information Setup</div>
                          </a>
                          <a data-w-tab="Tab 2" class="steps-con w-inline-block w-tab-link">
                            <div class="steps-number">Step 2:</div>
                            <div class="steps-title">Customize</div>
                          </a>
                          <a data-w-tab="Tab 3" class="steps-con w-inline-block w-tab-link">
                            <div class="steps-number">Step 3:</div>
                            <div class="steps-title">Publish</div>
                          </a>
                        </div>
                        <div class="tabs-content w-tab-content">
                          <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                            <div class="steps-wrapper">
                              <div class="steps-content-wrapper">
                                <div class="setup-process-grid">
                                  <div class="setup-wrapper">
                                    <div class="photo-title-wrapper">
                                      <div class="block-title-container">
                                        <div class="block-title-wrapper">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
                                              <mask id="mask0_770_13814" style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                                <rect width="18" height="18" fill="#D9D9D9"></rect>
                                              </mask>
                                              <g mask="url(#mask0_770_13814)">
                                                <path d="M9 13.125C9.9375 13.125 10.7344 12.7969 11.3906 12.1406C12.0469 11.4844 12.375 10.6875 12.375 9.75C12.375 8.8125 12.0469 8.01562 11.3906 7.35938C10.7344 6.70312 9.9375 6.375 9 6.375C8.0625 6.375 7.26562 6.70312 6.60938 7.35938C5.95312 8.01562 5.625 8.8125 5.625 9.75C5.625 10.6875 5.95312 11.4844 6.60938 12.1406C7.26562 12.7969 8.0625 13.125 9 13.125ZM9 12.375L8.175 10.575L6.375 9.75L8.175 8.925L9 7.125L9.825 8.925L11.625 9.75L9.825 10.575L9 12.375ZM3 15.75C2.5875 15.75 2.23438 15.6031 1.94063 15.3094C1.64688 15.0156 1.5 14.6625 1.5 14.25V5.25C1.5 4.8375 1.64688 4.48438 1.94063 4.19063C2.23438 3.89688 2.5875 3.75 3 3.75H5.3625L6.75 2.25H11.25L12.6375 3.75H15C15.4125 3.75 15.7656 3.89688 16.0594 4.19063C16.3531 4.48438 16.5 4.8375 16.5 5.25V14.25C16.5 14.6625 16.3531 15.0156 16.0594 15.3094C15.7656 15.6031 15.4125 15.75 15 15.75H3ZM15 14.25V5.25H11.9625L10.5938 3.75H7.40625L6.0375 5.25H3V14.25H15Z" fill="#5028FF"></path>
                                              </g>
                                            </svg></div>
                                          <div>Photos Setup</div>
                                        </div>
                                      </div>
                                      <div>Add your photos to make it more unique and recognizable</div>
                                    </div>
                                    <div class="photo-container">
                                      <div class="pic-wrapper"><img loading="lazy" src="../../images/user-pic.png" alt="" class="user-img">
                                        <div class="edit-img">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                              <path d="M7.3335 2.66602H2.66683C2.31321 2.66602 1.97407 2.80649 1.72402 3.05654C1.47397 3.30659 1.3335 3.64573 1.3335 3.99935V13.3327C1.3335 13.6863 1.47397 14.0254 1.72402 14.2755C1.97407 14.5255 2.31321 14.666 2.66683 14.666H12.0002C12.3538 14.666 12.6929 14.5255 12.943 14.2755C13.193 14.0254 13.3335 13.6863 13.3335 13.3327V8.66602" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M12.3335 1.66617C12.5987 1.40095 12.9584 1.25195 13.3335 1.25195C13.7086 1.25195 14.0683 1.40095 14.3335 1.66617C14.5987 1.93138 14.7477 2.29109 14.7477 2.66617C14.7477 3.04124 14.5987 3.40095 14.3335 3.66617L8.00016 9.9995L5.3335 10.6662L6.00016 7.9995L12.3335 1.66617Z" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                        </div>
                                      </div>
                                      <div class="upload-wrapper">
                                        <div class="text-size-small text-color-black-2f">User Photo</div>
                                        <div class="upload-btn-wrapper">
                                          <div class="upload-embed w-embed">
                                            <div class="file-upload">
                                              <label for="user-file-input">Choose a file</label>
                                              <input type="file" id="user-file-input" name="user-image" accept="image/*" onchange="showFileName('user-file-input', 'user-file-name', 'remove-user-file')" required="">
                                              <span class="file-name" id="user-file-name"></span>
                                              <span class="remove-file" id="remove-user-file" onclick="removeFile('user-file-input', 'user-file-name', 'remove-user-file')"></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div>Maximum image file size is 1MB. Try resizing it to atleast 500x500 px  in resolution.</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="photo-container">
                                    <div class="pic-wrapper logo-wrapper"><img loading="lazy" src="../../images/flow-1.svg" alt="" class="user-img">
                                      <div class="edit-img">
                                        <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                            <path d="M7.3335 2.66602H2.66683C2.31321 2.66602 1.97407 2.80649 1.72402 3.05654C1.47397 3.30659 1.3335 3.64573 1.3335 3.99935V13.3327C1.3335 13.6863 1.47397 14.0254 1.72402 14.2755C1.97407 14.5255 2.31321 14.666 2.66683 14.666H12.0002C12.3538 14.666 12.6929 14.5255 12.943 14.2755C13.193 14.0254 13.3335 13.6863 13.3335 13.3327V8.66602" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12.3335 1.66617C12.5987 1.40095 12.9584 1.25195 13.3335 1.25195C13.7086 1.25195 14.0683 1.40095 14.3335 1.66617C14.5987 1.93138 14.7477 2.29109 14.7477 2.66617C14.7477 3.04124 14.5987 3.40095 14.3335 3.66617L8.00016 9.9995L5.3335 10.6662L6.00016 7.9995L12.3335 1.66617Z" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg></div>
                                      </div>
                                    </div>
                                    <div class="upload-wrapper">
                                      <div class="text-size-small text-color-black-2f">Logo</div>
                                      <div class="upload-btn-wrapper">
                                        <div class="upload-embed w-embed">
                                          <div class="file-upload">
                                            <label for="logo-file-input">Choose a file</label>
                                            <input type="file" id="logo-file-input" name="logo-image" accept="image/*" onchange="showFileName('logo-file-input', 'logo-file-name', 'remove-logo-file')" required="">
                                            <span class="file-name" id="logo-file-name"></span>
                                            <span class="remove-file" id="remove-logo-file" onclick="removeFile('logo-file-input', 'logo-file-name', 'remove-logo-file')"></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div>Maximum image file size is 1MB. Try resizing it to atleast 500x500 px  in resolution.</div>
                                    </div>
                                  </div>
                                  <div class="photo-container">
                                    <div class="upload-wrapper">
                                      <div class="text-size-small text-color-black-2f">Logo</div>
                                      <div class="cover-wrapper"><img sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 66vw, (max-width: 1279px) 43vw, (max-width: 1439px) 555px, 705px" srcset="../../images/cover-image-p-500.jpg 500w, ../../images/cover-image-p-800.jpg 800w, ../../images/cover-image.jpg 1028w" alt="" src="../../images/cover-image.jpg" loading="lazy" class="cover-img">
                                        <div class="upload-btn-wrapper abs-btn">
                                          <div class="upload-embed w-embed">
                                            <div class="file-upload">
                                              <label for="logo-file-input">Edit Cover Photo</label>
                                              <input type="file" id="logo-file-input" name="logo-image" accept="image/*" onchange="showFileName('logo-file-input', 'logo-file-name', 'remove-logo-file')" required="">
                                              <span class="file-name" id="logo-file-name"></span>
                                              <!-- <span class="remove-file" id="remove-logo-file" onclick="removeFile('logo-file-input', 'logo-file-name', 'remove-logo-file')"></span>  -->
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div>Maximum image file size is 1MB. Try resizing it to atleast 512x210 px in resolution.</div>
                                    </div>
                                  </div>
                                  <div class="setup-wrapper">
                                    <div class="photo-title-wrapper top-border">
                                      <div class="block-title-container">
                                        <div class="block-title-wrapper">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
                                              <mask id="mask0_4215_26406" style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                                <rect width="18" height="18" fill="#D9D9D9"></rect>
                                              </mask>
                                              <g mask="url(#mask0_4215_26406)">
                                                <path d="M4.3875 12.825C5.025 12.3375 5.7375 11.9531 6.525 11.6719C7.3125 11.3906 8.1375 11.25 9 11.25C9.8625 11.25 10.6875 11.3906 11.475 11.6719C12.2625 11.9531 12.975 12.3375 13.6125 12.825C14.05 12.3125 14.3906 11.7313 14.6344 11.0813C14.8781 10.4313 15 9.7375 15 9C15 7.3375 14.4156 5.92188 13.2469 4.75313C12.0781 3.58438 10.6625 3 9 3C7.3375 3 5.92188 3.58438 4.75313 4.75313C3.58438 5.92188 3 7.3375 3 9C3 9.7375 3.12187 10.4313 3.36562 11.0813C3.60938 11.7313 3.95 12.3125 4.3875 12.825ZM9 9.75C8.2625 9.75 7.64062 9.49688 7.13438 8.99063C6.62813 8.48438 6.375 7.8625 6.375 7.125C6.375 6.3875 6.62813 5.76562 7.13438 5.25938C7.64062 4.75313 8.2625 4.5 9 4.5C9.7375 4.5 10.3594 4.75313 10.8656 5.25938C11.3719 5.76562 11.625 6.3875 11.625 7.125C11.625 7.8625 11.3719 8.48438 10.8656 8.99063C10.3594 9.49688 9.7375 9.75 9 9.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69687 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69687 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69687 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69687 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C9.6625 15 10.2875 14.9031 10.875 14.7094C11.4625 14.5156 12 14.2375 12.4875 13.875C12 13.5125 11.4625 13.2344 10.875 13.0406C10.2875 12.8469 9.6625 12.75 9 12.75C8.3375 12.75 7.7125 12.8469 7.125 13.0406C6.5375 13.2344 6 13.5125 5.5125 13.875C6 14.2375 6.5375 14.5156 7.125 14.7094C7.7125 14.9031 8.3375 15 9 15ZM9 8.25C9.325 8.25 9.59375 8.14375 9.80625 7.93125C10.0188 7.71875 10.125 7.45 10.125 7.125C10.125 6.8 10.0188 6.53125 9.80625 6.31875C9.59375 6.10625 9.325 6 9 6C8.675 6 8.40625 6.10625 8.19375 6.31875C7.98125 6.53125 7.875 6.8 7.875 7.125C7.875 7.45 7.98125 7.71875 8.19375 7.93125C8.40625 8.14375 8.675 8.25 9 8.25Z" fill="#5028FF"></path>
                                              </g>
                                            </svg></div>
                                          <div>Profile Information</div>
                                        </div>
                                      </div>
                                      <div>Add your profile information to show in your digital business card</div>
                                    </div>
                                    <div class="setup-grid">
                                      <div id="w-node-b793fae7-d114-140f-9e2b-d18678e14176-ae446d75" class="field-wrapper"><label for="Name-3" class="text-size-small label">Full Name <span class="asterisk">*</span></label><input class="text-field w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="" type="text" id="Name-2" required=""></div>
                                      <div id="w-node-b793fae7-d114-140f-9e2b-d18678e1417c-ae446d75" class="field-wrapper"><label for="Last-Name-3" class="text-size-small label">Last Name <span class="asterisk">*</span></label><input class="text-field w-input" maxlength="256" name="Last-Name-2" data-name="Last Name 2" placeholder="" type="text" id="Last-Name-2" required=""></div>
                                      <div id="w-node-b793fae7-d114-140f-9e2b-d18678e14182-ae446d75" class="field-wrapper"><label for="Prefix-3" class="text-size-small label">Prefix</label><input class="text-field w-input" maxlength="256" name="Prefix-2" data-name="Prefix 2" placeholder="" type="text" id="Prefix-2"></div>
                                      <div id="w-node-b793fae7-d114-140f-9e2b-d18678e14186-ae446d75" class="field-wrapper"><label for="Suffix-3" class="text-size-small label">Suffix</label><input class="text-field w-input" maxlength="256" name="Suffix-2" data-name="Suffix 2" placeholder="" type="text" id="Suffix-2"></div>
                                      <div id="w-node-b793fae7-d114-140f-9e2b-d18678e1418a-ae446d75" class="field-wrapper"><label for="Pronouns-3" class="text-size-small label">Pronouns</label><input class="text-field w-input" maxlength="256" name="Pronouns-2" data-name="Pronouns 2" placeholder="" type="text" id="Pronouns-2"></div>
                                      <div id="w-node-b793fae7-d114-140f-9e2b-d18678e1418e-ae446d75" class="field-wrapper"><label for="Company-Name-3" class="text-size-small label">Company Name</label><input class="text-field w-input" maxlength="256" name="Company-Name-2" data-name="Company Name 2" placeholder="" type="text" id="Company-Name-2"></div>
                                      <div id="w-node-b793fae7-d114-140f-9e2b-d18678e14192-ae446d75" class="field-wrapper"><label for="Job-Title-3" class="text-size-small label">Job Title/Designation</label><input class="text-field w-input" maxlength="256" name="Job-Title-2" data-name="Job Title 2" placeholder="" type="text" id="Job-Title-2"></div>
                                      <div id="w-node-b793fae7-d114-140f-9e2b-d18678e14196-ae446d75" class="field-wrapper"><label for="Department-3" class="text-size-small label">Department</label><input class="text-field w-input" maxlength="256" name="Department-2" data-name="Department 2" placeholder="" type="text" id="Department-2"></div>
                                      <div id="w-node-b793fae7-d114-140f-9e2b-d18678e1419a-ae446d75" class="field-wrapper"><label for="About-Me-3" class="text-size-small label">About Me / Summary</label><textarea id="About-Me-2" name="About-Me-2" maxlength="5000" data-name="About Me 2" placeholder="" class="textarea w-input"></textarea></div>
                                    </div>
                                  </div>
                                  <div class="setup-wrapper">
                                    <div class="photo-title-wrapper top-border">
                                      <div class="block-title-container">
                                        <div class="block-title-wrapper">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
                                              <mask id="mask0_4215_26406" style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                                <rect width="18" height="18" fill="#D9D9D9"></rect>
                                              </mask>
                                              <g mask="url(#mask0_4215_26406)">
                                                <path d="M4.3875 12.825C5.025 12.3375 5.7375 11.9531 6.525 11.6719C7.3125 11.3906 8.1375 11.25 9 11.25C9.8625 11.25 10.6875 11.3906 11.475 11.6719C12.2625 11.9531 12.975 12.3375 13.6125 12.825C14.05 12.3125 14.3906 11.7313 14.6344 11.0813C14.8781 10.4313 15 9.7375 15 9C15 7.3375 14.4156 5.92188 13.2469 4.75313C12.0781 3.58438 10.6625 3 9 3C7.3375 3 5.92188 3.58438 4.75313 4.75313C3.58438 5.92188 3 7.3375 3 9C3 9.7375 3.12187 10.4313 3.36562 11.0813C3.60938 11.7313 3.95 12.3125 4.3875 12.825ZM9 9.75C8.2625 9.75 7.64062 9.49688 7.13438 8.99063C6.62813 8.48438 6.375 7.8625 6.375 7.125C6.375 6.3875 6.62813 5.76562 7.13438 5.25938C7.64062 4.75313 8.2625 4.5 9 4.5C9.7375 4.5 10.3594 4.75313 10.8656 5.25938C11.3719 5.76562 11.625 6.3875 11.625 7.125C11.625 7.8625 11.3719 8.48438 10.8656 8.99063C10.3594 9.49688 9.7375 9.75 9 9.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69687 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69687 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69687 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69687 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C9.6625 15 10.2875 14.9031 10.875 14.7094C11.4625 14.5156 12 14.2375 12.4875 13.875C12 13.5125 11.4625 13.2344 10.875 13.0406C10.2875 12.8469 9.6625 12.75 9 12.75C8.3375 12.75 7.7125 12.8469 7.125 13.0406C6.5375 13.2344 6 13.5125 5.5125 13.875C6 14.2375 6.5375 14.5156 7.125 14.7094C7.7125 14.9031 8.3375 15 9 15ZM9 8.25C9.325 8.25 9.59375 8.14375 9.80625 7.93125C10.0188 7.71875 10.125 7.45 10.125 7.125C10.125 6.8 10.0188 6.53125 9.80625 6.31875C9.59375 6.10625 9.325 6 9 6C8.675 6 8.40625 6.10625 8.19375 6.31875C7.98125 6.53125 7.875 6.8 7.875 7.125C7.875 7.45 7.98125 7.71875 8.19375 7.93125C8.40625 8.14375 8.675 8.25 9 8.25Z" fill="#5028FF"></path>
                                              </g>
                                            </svg></div>
                                          <div>Contact Details</div>
                                        </div>
                                      </div>
                                      <div>Add contact information</div>
                                    </div>
                                    <div class="setup-grid _1-column">
                                      <div class="clone-wrapper">
                                        <div class="hidden-clone">
                                          <div class="clone">
                                            <div id="w-node-b793fae7-d114-140f-9e2b-d18678e141ab-ae446d75" class="field-contact-wrapper">
                                              <div id="w-node-b793fae7-d114-140f-9e2b-d18678e141ac-ae446d75" class="field-wrapper setup-field-wrapper"><label for="Name-3" class="text-size-small label">Phone Number</label>
                                                <div class="phone-field-wrapper"><input class="text-field w-input" maxlength="256" name="Phone-2" data-name="Phone 2" placeholder="" type="text" id="Phone-2" required="">
                                                  <div class="phone-dropdown"><img loading="lazy" src="../../images/flag.png" alt="" class="flag">
                                                    <div>+63</div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div id="w-node-b793fae7-d114-140f-9e2b-d18678e141b5-ae446d75" class="field-wrapper"><label for="Phone-Label-4" class="text-size-small label">Phone Label</label><input class="text-field w-input" maxlength="256" name="Phone-Label-3" data-name="Phone Label 3" placeholder="" type="text" id="Phone-Label-3" required=""></div>
                                              <a id="w-node-b793fae7-d114-140f-9e2b-d18678e141b9-ae446d75" href="#" class="remove w-inline-block">
                                                <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" fill="none">
                                                    <g clip-path="url(#clip0_4215_26443)">
                                                      <path d="M14.6668 8.25V17.4167H7.3335V8.25H14.6668ZM13.2918 2.75H8.7085L7.79183 3.66667H4.5835V5.5H17.4168V3.66667H14.2085L13.2918 2.75ZM16.5002 6.41667H5.50016V17.4167C5.50016 18.425 6.32516 19.25 7.3335 19.25H14.6668C15.6752 19.25 16.5002 18.425 16.5002 17.4167V6.41667Z" fill="currentColor"></path>
                                                    </g>
                                                    <defs>
                                                      <clippath id="clip0_4215_26443">
                                                        <rect width="22" height="22" fill="white"></rect>
                                                      </clippath>
                                                    </defs>
                                                  </svg></div>
                                                <div class="remove-text">Delete</div>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="clone">
                                          <div id="w-node-b793fae7-d114-140f-9e2b-d18678e141be-ae446d75" class="field-contact-wrapper">
                                            <div id="w-node-b793fae7-d114-140f-9e2b-d18678e141bf-ae446d75" class="field-wrapper setup-field-wrapper"><label for="Name-3" class="text-size-small label">Phone Number</label>
                                              <div class="phone-field-wrapper"><input class="text-field w-input" maxlength="256" name="Phone-2" data-name="Phone 2" placeholder="" type="text" id="Phone-2" required="">
                                                <div class="phone-dropdown"><img loading="lazy" src="../../images/flag.png" alt="" class="flag">
                                                  <div>+63</div>
                                                </div>
                                              </div>
                                            </div>
                                            <div id="w-node-b793fae7-d114-140f-9e2b-d18678e141c8-ae446d75" class="field-wrapper"><label for="Phone-Label-4" class="text-size-small label">Phone Label</label><input class="text-field w-input" maxlength="256" name="Phone-Label-3" data-name="Phone Label 3" placeholder="" type="text" id="Phone-Label-3" required=""></div>
                                            <a id="w-node-b793fae7-d114-140f-9e2b-d18678e141cc-ae446d75" href="#" class="remove w-inline-block">
                                              <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" fill="none">
                                                  <g clip-path="url(#clip0_4215_26443)">
                                                    <path d="M14.6668 8.25V17.4167H7.3335V8.25H14.6668ZM13.2918 2.75H8.7085L7.79183 3.66667H4.5835V5.5H17.4168V3.66667H14.2085L13.2918 2.75ZM16.5002 6.41667H5.50016V17.4167C5.50016 18.425 6.32516 19.25 7.3335 19.25H14.6668C15.6752 19.25 16.5002 18.425 16.5002 17.4167V6.41667Z" fill="currentColor"></path>
                                                  </g>
                                                  <defs>
                                                    <clippath id="clip0_4215_26443">
                                                      <rect width="22" height="22" fill="white"></rect>
                                                    </clippath>
                                                  </defs>
                                                </svg></div>
                                              <div class="remove-text">Delete</div>
                                            </a>
                                          </div>
                                        </div>
                                        <a href="#" class="button is-secondary clone-btn w-inline-block">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                              <path d="M7.99725 12.6673C7.85475 12.6673 7.73627 12.6194 7.64183 12.5236C7.54738 12.4277 7.50016 12.309 7.50016 12.1673V8.50065H3.8335C3.69183 8.50065 3.57308 8.45246 3.47725 8.35607C3.38141 8.25967 3.3335 8.14022 3.3335 7.99773C3.3335 7.85523 3.38141 7.73676 3.47725 7.64232C3.57308 7.54787 3.69183 7.50065 3.8335 7.50065H7.50016V3.83398C7.50016 3.69232 7.54836 3.57357 7.64475 3.47773C7.74115 3.3819 7.86059 3.33398 8.00308 3.33398C8.14558 3.33398 8.26405 3.3819 8.3585 3.47773C8.45294 3.57357 8.50016 3.69232 8.50016 3.83398V7.50065H12.1668C12.3085 7.50065 12.4272 7.54885 12.5231 7.64523C12.6189 7.74163 12.6668 7.86108 12.6668 8.00357C12.6668 8.14607 12.6189 8.26454 12.5231 8.35898C12.4272 8.45343 12.3085 8.50065 12.1668 8.50065H8.50016V12.1673C8.50016 12.309 8.45197 12.4277 8.35558 12.5236C8.25918 12.6194 8.13973 12.6673 7.99725 12.6673Z" fill="currentColor"></path>
                                            </svg></div>
                                          <div>Add Phone Number</div>
                                        </a>
                                      </div>
                                      <div class="clone-wrapper">
                                        <div class="hidden-clone">
                                          <div class="clone">
                                            <div id="w-node-b793fae7-d114-140f-9e2b-d18678e141d7-ae446d75" class="field-contact-wrapper">
                                              <div class="field-wrapper setup-field-wrapper"><label for="Name-3" class="text-size-small label">Email</label>
                                                <div class="phone-field-wrapper"><input class="text-field w-input" maxlength="256" name="Email-3" data-name="Email 3" placeholder="" type="text" id="Email-3" required=""></div>
                                              </div>
                                              <div id="w-node-b793fae7-d114-140f-9e2b-d18678e141dd-ae446d75" class="field-wrapper"><label for="Email-Label-4" class="text-size-small label">Email Label</label><input class="text-field w-input" maxlength="256" name="Email-Label-2" data-name="Email Label 2" placeholder="" type="text" id="Email-Label-2" required=""></div>
                                              <a id="w-node-b793fae7-d114-140f-9e2b-d18678e141e1-ae446d75" href="#" class="remove w-inline-block">
                                                <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" fill="none">
                                                    <g clip-path="url(#clip0_4215_26443)">
                                                      <path d="M14.6668 8.25V17.4167H7.3335V8.25H14.6668ZM13.2918 2.75H8.7085L7.79183 3.66667H4.5835V5.5H17.4168V3.66667H14.2085L13.2918 2.75ZM16.5002 6.41667H5.50016V17.4167C5.50016 18.425 6.32516 19.25 7.3335 19.25H14.6668C15.6752 19.25 16.5002 18.425 16.5002 17.4167V6.41667Z" fill="currentColor"></path>
                                                    </g>
                                                    <defs>
                                                      <clippath id="clip0_4215_26443">
                                                        <rect width="22" height="22" fill="white"></rect>
                                                      </clippath>
                                                    </defs>
                                                  </svg></div>
                                                <div class="remove-text">Delete</div>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="clone">
                                          <div id="w-node-b793fae7-d114-140f-9e2b-d18678e141e6-ae446d75" class="field-contact-wrapper">
                                            <div class="field-wrapper setup-field-wrapper"><label for="Name-3" class="text-size-small label">Email</label>
                                              <div class="phone-field-wrapper"><input class="text-field w-input" maxlength="256" name="Email-4" data-name="Email 4" placeholder="" type="text" id="Email-4" required=""></div>
                                            </div>
                                            <div id="w-node-b793fae7-d114-140f-9e2b-d18678e141ec-ae446d75" class="field-wrapper"><label for="Email-Label-4" class="text-size-small label">Email Label</label><input class="text-field w-input" maxlength="256" name="Email-Label-3" data-name="Email Label 3" placeholder="" type="text" id="Email-Label-3" required=""></div>
                                            <a id="w-node-b793fae7-d114-140f-9e2b-d18678e141f0-ae446d75" href="#" class="remove w-inline-block">
                                              <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" fill="none">
                                                  <g clip-path="url(#clip0_4215_26443)">
                                                    <path d="M14.6668 8.25V17.4167H7.3335V8.25H14.6668ZM13.2918 2.75H8.7085L7.79183 3.66667H4.5835V5.5H17.4168V3.66667H14.2085L13.2918 2.75ZM16.5002 6.41667H5.50016V17.4167C5.50016 18.425 6.32516 19.25 7.3335 19.25H14.6668C15.6752 19.25 16.5002 18.425 16.5002 17.4167V6.41667Z" fill="currentColor"></path>
                                                  </g>
                                                  <defs>
                                                    <clippath id="clip0_4215_26443">
                                                      <rect width="22" height="22" fill="white"></rect>
                                                    </clippath>
                                                  </defs>
                                                </svg></div>
                                              <div class="remove-text">Delete</div>
                                            </a>
                                          </div>
                                        </div>
                                        <a href="#" class="button is-secondary clone-btn w-inline-block">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                              <path d="M7.99725 12.6673C7.85475 12.6673 7.73627 12.6194 7.64183 12.5236C7.54738 12.4277 7.50016 12.309 7.50016 12.1673V8.50065H3.8335C3.69183 8.50065 3.57308 8.45246 3.47725 8.35607C3.38141 8.25967 3.3335 8.14022 3.3335 7.99773C3.3335 7.85523 3.38141 7.73676 3.47725 7.64232C3.57308 7.54787 3.69183 7.50065 3.8335 7.50065H7.50016V3.83398C7.50016 3.69232 7.54836 3.57357 7.64475 3.47773C7.74115 3.3819 7.86059 3.33398 8.00308 3.33398C8.14558 3.33398 8.26405 3.3819 8.3585 3.47773C8.45294 3.57357 8.50016 3.69232 8.50016 3.83398V7.50065H12.1668C12.3085 7.50065 12.4272 7.54885 12.5231 7.64523C12.6189 7.74163 12.6668 7.86108 12.6668 8.00357C12.6668 8.14607 12.6189 8.26454 12.5231 8.35898C12.4272 8.45343 12.3085 8.50065 12.1668 8.50065H8.50016V12.1673C8.50016 12.309 8.45197 12.4277 8.35558 12.5236C8.25918 12.6194 8.13973 12.6673 7.99725 12.6673Z" fill="currentColor"></path>
                                            </svg></div>
                                          <div>Add Email Address</div>
                                        </a>
                                      </div>
                                      <div class="clone-wrapper">
                                        <div class="hidden-clone">
                                          <div class="clone">
                                            <div id="w-node-b793fae7-d114-140f-9e2b-d18678e141fb-ae446d75" class="field-contact-wrapper">
                                              <div class="field-wrapper setup-field-wrapper"><label for="Name-3" class="text-size-small label">Website</label>
                                                <div class="phone-field-wrapper"><input class="text-field w-input" maxlength="256" name="Website-2" data-name="Website 2" placeholder="" type="text" id="Website-2" required=""></div>
                                              </div>
                                              <div id="w-node-b793fae7-d114-140f-9e2b-d18678e14201-ae446d75" class="field-wrapper"><label for="Website-Label-4" class="text-size-small label">Website Label</label><input class="text-field w-input" maxlength="256" name="Website-Label-2" data-name="Website Label 2" placeholder="" type="text" id="Website-Label-2" required=""></div>
                                              <a id="w-node-b793fae7-d114-140f-9e2b-d18678e14205-ae446d75" href="#" class="remove w-inline-block">
                                                <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" fill="none">
                                                    <g clip-path="url(#clip0_4215_26443)">
                                                      <path d="M14.6668 8.25V17.4167H7.3335V8.25H14.6668ZM13.2918 2.75H8.7085L7.79183 3.66667H4.5835V5.5H17.4168V3.66667H14.2085L13.2918 2.75ZM16.5002 6.41667H5.50016V17.4167C5.50016 18.425 6.32516 19.25 7.3335 19.25H14.6668C15.6752 19.25 16.5002 18.425 16.5002 17.4167V6.41667Z" fill="currentColor"></path>
                                                    </g>
                                                    <defs>
                                                      <clippath id="clip0_4215_26443">
                                                        <rect width="22" height="22" fill="white"></rect>
                                                      </clippath>
                                                    </defs>
                                                  </svg></div>
                                                <div class="remove-text">Delete</div>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="clone">
                                          <div id="w-node-b793fae7-d114-140f-9e2b-d18678e1420a-ae446d75" class="field-contact-wrapper">
                                            <div class="field-wrapper setup-field-wrapper"><label for="Name-3" class="text-size-small label">Website</label>
                                              <div class="phone-field-wrapper"><input class="text-field w-input" maxlength="256" name="Website-3" data-name="Website 3" placeholder="" type="text" id="Website-3" required=""></div>
                                            </div>
                                            <div id="w-node-b793fae7-d114-140f-9e2b-d18678e14210-ae446d75" class="field-wrapper"><label for="Website-Label-4" class="text-size-small label">Website Label</label><input class="text-field w-input" maxlength="256" name="Website-Label-3" data-name="Website Label 3" placeholder="" type="text" id="Website-Label-3" required=""></div>
                                            <a id="w-node-b793fae7-d114-140f-9e2b-d18678e14214-ae446d75" href="#" class="remove w-inline-block">
                                              <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" fill="none">
                                                  <g clip-path="url(#clip0_4215_26443)">
                                                    <path d="M14.6668 8.25V17.4167H7.3335V8.25H14.6668ZM13.2918 2.75H8.7085L7.79183 3.66667H4.5835V5.5H17.4168V3.66667H14.2085L13.2918 2.75ZM16.5002 6.41667H5.50016V17.4167C5.50016 18.425 6.32516 19.25 7.3335 19.25H14.6668C15.6752 19.25 16.5002 18.425 16.5002 17.4167V6.41667Z" fill="currentColor"></path>
                                                  </g>
                                                  <defs>
                                                    <clippath id="clip0_4215_26443">
                                                      <rect width="22" height="22" fill="white"></rect>
                                                    </clippath>
                                                  </defs>
                                                </svg></div>
                                              <div class="remove-text">Delete</div>
                                            </a>
                                          </div>
                                        </div>
                                        <a href="#" class="button is-secondary clone-btn w-inline-block">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                              <path d="M7.99725 12.6673C7.85475 12.6673 7.73627 12.6194 7.64183 12.5236C7.54738 12.4277 7.50016 12.309 7.50016 12.1673V8.50065H3.8335C3.69183 8.50065 3.57308 8.45246 3.47725 8.35607C3.38141 8.25967 3.3335 8.14022 3.3335 7.99773C3.3335 7.85523 3.38141 7.73676 3.47725 7.64232C3.57308 7.54787 3.69183 7.50065 3.8335 7.50065H7.50016V3.83398C7.50016 3.69232 7.54836 3.57357 7.64475 3.47773C7.74115 3.3819 7.86059 3.33398 8.00308 3.33398C8.14558 3.33398 8.26405 3.3819 8.3585 3.47773C8.45294 3.57357 8.50016 3.69232 8.50016 3.83398V7.50065H12.1668C12.3085 7.50065 12.4272 7.54885 12.5231 7.64523C12.6189 7.74163 12.6668 7.86108 12.6668 8.00357C12.6668 8.14607 12.6189 8.26454 12.5231 8.35898C12.4272 8.45343 12.3085 8.50065 12.1668 8.50065H8.50016V12.1673C8.50016 12.309 8.45197 12.4277 8.35558 12.5236C8.25918 12.6194 8.13973 12.6673 7.99725 12.6673Z" fill="currentColor"></path>
                                            </svg></div>
                                          <div>Add Website URL</div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="setup-wrapper">
                                    <div class="photo-title-wrapper top-border">
                                      <div class="block-title-container">
                                        <div class="block-title-wrapper">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
                                              <path d="M9 0.75C10.7902 0.75 12.5071 1.46116 13.773 2.72703C15.0388 3.9929 15.75 5.70979 15.75 7.5C15.75 10.2945 13.62 13.2225 9.45 16.35C9.32018 16.4474 9.16228 16.5 9 16.5C8.83772 16.5 8.67982 16.4474 8.55 16.35C4.38 13.2225 2.25 10.2945 2.25 7.5C2.25 5.70979 2.96116 3.9929 4.22703 2.72703C5.4929 1.46116 7.20979 0.75 9 0.75ZM9 2.25C7.60761 2.25 6.27226 2.80312 5.28769 3.78769C4.30312 4.77226 3.75 6.10761 3.75 7.5C3.75 9.5325 5.3385 11.877 8.586 14.4795L9 14.8065L9.414 14.4795C12.6615 11.877 14.25 9.5325 14.25 7.5C14.25 6.10761 13.6969 4.77226 12.7123 3.78769C11.7277 2.80312 10.3924 2.25 9 2.25ZM9 6C9.39782 6 9.77936 6.15804 10.0607 6.43934C10.342 6.72064 10.5 7.10218 10.5 7.5C10.5 7.89782 10.342 8.27936 10.0607 8.56066C9.77936 8.84196 9.39782 9 9 9C8.60218 9 8.22064 8.84196 7.93934 8.56066C7.65804 8.27936 7.5 7.89782 7.5 7.5C7.5 7.10218 7.65804 6.72064 7.93934 6.43934C8.22064 6.15804 8.60218 6 9 6Z" fill="#5028FF"></path>
                                            </svg></div>
                                          <div>Location</div>
                                        </div>
                                      </div>
                                      <div>Add your other platforms to connect with a wider audience.</div>
                                    </div>
                                    <div class="setup-grid _1-column">
                                      <div class="clone-wrapper">
                                        <div class="hidden-clone">
                                          <div class="clone">
                                            <div id="w-node-b793fae7-d114-140f-9e2b-d18678e14229-ae446d75" class="field-contact-wrapper">
                                              <div class="field-wrapper setup-field-wrapper"><label for="Name-3" class="text-size-small label">Enter Full Address</label>
                                                <div class="phone-field-wrapper"><input class="text-field w-input" maxlength="256" name="Address-2" data-name="Address 2" placeholder="" type="text" id="Address-2" required=""></div>
                                              </div>
                                              <div id="w-node-b793fae7-d114-140f-9e2b-d18678e1422f-ae446d75" class="field-wrapper"><label for="Address-Label-4" class="text-size-small label">Address Label</label><input class="text-field w-input" maxlength="256" name="Address-Label-2" data-name="Address Label 2" placeholder="" type="text" id="Address-Label-2" required=""></div>
                                              <a id="w-node-b793fae7-d114-140f-9e2b-d18678e14233-ae446d75" href="#" class="remove w-inline-block">
                                                <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" fill="none">
                                                    <g clip-path="url(#clip0_4215_26443)">
                                                      <path d="M14.6668 8.25V17.4167H7.3335V8.25H14.6668ZM13.2918 2.75H8.7085L7.79183 3.66667H4.5835V5.5H17.4168V3.66667H14.2085L13.2918 2.75ZM16.5002 6.41667H5.50016V17.4167C5.50016 18.425 6.32516 19.25 7.3335 19.25H14.6668C15.6752 19.25 16.5002 18.425 16.5002 17.4167V6.41667Z" fill="currentColor"></path>
                                                    </g>
                                                    <defs>
                                                      <clippath id="clip0_4215_26443">
                                                        <rect width="22" height="22" fill="white"></rect>
                                                      </clippath>
                                                    </defs>
                                                  </svg></div>
                                                <div class="remove-text">Delete</div>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="clone">
                                          <div id="w-node-b793fae7-d114-140f-9e2b-d18678e14238-ae446d75" class="field-contact-wrapper">
                                            <div class="field-wrapper setup-field-wrapper"><label for="Name-3" class="text-size-small label">Enter Full Address</label>
                                              <div class="phone-field-wrapper"><input class="text-field w-input" maxlength="256" name="Address-3" data-name="Address 3" placeholder="" type="text" id="Address-3" required=""></div>
                                            </div>
                                            <div id="w-node-b793fae7-d114-140f-9e2b-d18678e1423e-ae446d75" class="field-wrapper"><label for="Address-Label-4" class="text-size-small label">Address Label</label><input class="text-field w-input" maxlength="256" name="Address-Label-3" data-name="Address Label 3" placeholder="" type="text" id="Address-Label-3" required=""></div>
                                            <a id="w-node-b793fae7-d114-140f-9e2b-d18678e14242-ae446d75" href="#" class="remove w-inline-block">
                                              <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" fill="none">
                                                  <g clip-path="url(#clip0_4215_26443)">
                                                    <path d="M14.6668 8.25V17.4167H7.3335V8.25H14.6668ZM13.2918 2.75H8.7085L7.79183 3.66667H4.5835V5.5H17.4168V3.66667H14.2085L13.2918 2.75ZM16.5002 6.41667H5.50016V17.4167C5.50016 18.425 6.32516 19.25 7.3335 19.25H14.6668C15.6752 19.25 16.5002 18.425 16.5002 17.4167V6.41667Z" fill="currentColor"></path>
                                                  </g>
                                                  <defs>
                                                    <clippath id="clip0_4215_26443">
                                                      <rect width="22" height="22" fill="white"></rect>
                                                    </clippath>
                                                  </defs>
                                                </svg></div>
                                              <div class="remove-text">Delete</div>
                                            </a>
                                          </div>
                                        </div>
                                        <a href="#" class="button is-secondary clone-btn w-inline-block">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                              <path d="M7.99725 12.6673C7.85475 12.6673 7.73627 12.6194 7.64183 12.5236C7.54738 12.4277 7.50016 12.309 7.50016 12.1673V8.50065H3.8335C3.69183 8.50065 3.57308 8.45246 3.47725 8.35607C3.38141 8.25967 3.3335 8.14022 3.3335 7.99773C3.3335 7.85523 3.38141 7.73676 3.47725 7.64232C3.57308 7.54787 3.69183 7.50065 3.8335 7.50065H7.50016V3.83398C7.50016 3.69232 7.54836 3.57357 7.64475 3.47773C7.74115 3.3819 7.86059 3.33398 8.00308 3.33398C8.14558 3.33398 8.26405 3.3819 8.3585 3.47773C8.45294 3.57357 8.50016 3.69232 8.50016 3.83398V7.50065H12.1668C12.3085 7.50065 12.4272 7.54885 12.5231 7.64523C12.6189 7.74163 12.6668 7.86108 12.6668 8.00357C12.6668 8.14607 12.6189 8.26454 12.5231 8.35898C12.4272 8.45343 12.3085 8.50065 12.1668 8.50065H8.50016V12.1673C8.50016 12.309 8.45197 12.4277 8.35558 12.5236C8.25918 12.6194 8.13973 12.6673 7.99725 12.6673Z" fill="currentColor"></path>
                                            </svg></div>
                                          <div>Add Another Address</div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="setup-wrapper">
                                    <div class="photo-title-wrapper top-border">
                                      <div class="block-title-container">
                                        <div class="block-title-wrapper">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
                                              <path d="M13.5 16.5C12.875 16.5 12.3438 16.2812 11.9062 15.8438C11.4688 15.4062 11.25 14.875 11.25 14.25C11.25 14.1625 11.2562 14.0717 11.2687 13.9777C11.2812 13.8837 11.3 13.7995 11.325 13.725L6.0375 10.65C5.825 10.8375 5.5875 10.9845 5.325 11.091C5.0625 11.1975 4.7875 11.2505 4.5 11.25C3.875 11.25 3.34375 11.0312 2.90625 10.5938C2.46875 10.1562 2.25 9.625 2.25 9C2.25 8.375 2.46875 7.84375 2.90625 7.40625C3.34375 6.96875 3.875 6.75 4.5 6.75C4.7875 6.75 5.0625 6.80325 5.325 6.90975C5.5875 7.01625 5.825 7.163 6.0375 7.35L11.325 4.275C11.3 4.2 11.2812 4.11575 11.2687 4.02225C11.2562 3.92875 11.25 3.838 11.25 3.75C11.25 3.125 11.4688 2.59375 11.9062 2.15625C12.3438 1.71875 12.875 1.5 13.5 1.5C14.125 1.5 14.6562 1.71875 15.0938 2.15625C15.5312 2.59375 15.75 3.125 15.75 3.75C15.75 4.375 15.5312 4.90625 15.0938 5.34375C14.6562 5.78125 14.125 6 13.5 6C13.2125 6 12.9375 5.947 12.675 5.841C12.4125 5.735 12.175 5.588 11.9625 5.4L6.675 8.475C6.7 8.55 6.71875 8.6345 6.73125 8.7285C6.74375 8.8225 6.75 8.913 6.75 9C6.75 9.0875 6.74375 9.17825 6.73125 9.27225C6.71875 9.36625 6.7 9.4505 6.675 9.525L11.9625 12.6C12.175 12.4125 12.4125 12.2657 12.675 12.1597C12.9375 12.0537 13.2125 12.0005 13.5 12C14.125 12 14.6562 12.2188 15.0938 12.6562C15.5312 13.0938 15.75 13.625 15.75 14.25C15.75 14.875 15.5312 15.4062 15.0938 15.8438C14.6562 16.2812 14.125 16.5 13.5 16.5ZM13.5 4.5C13.7125 4.5 13.8907 4.428 14.0347 4.284C14.1787 4.14 14.2505 3.962 14.25 3.75C14.25 3.5375 14.178 3.35925 14.034 3.21525C13.89 3.07125 13.712 2.9995 13.5 3C13.2875 3 13.1093 3.072 12.9653 3.216C12.8213 3.36 12.7495 3.538 12.75 3.75C12.75 3.9625 12.822 4.14075 12.966 4.28475C13.11 4.42875 13.288 4.5005 13.5 4.5ZM4.5 9.75C4.7125 9.75 4.89075 9.678 5.03475 9.534C5.17875 9.39 5.2505 9.212 5.25 9C5.25 8.7875 5.178 8.60925 5.034 8.46525C4.89 8.32125 4.712 8.2495 4.5 8.25C4.2875 8.25 4.10925 8.322 3.96525 8.466C3.82125 8.61 3.7495 8.788 3.75 9C3.75 9.2125 3.822 9.39075 3.966 9.53475C4.11 9.67875 4.288 9.7505 4.5 9.75ZM13.5 15C13.7125 15 13.8907 14.928 14.0347 14.784C14.1787 14.64 14.2505 14.462 14.25 14.25C14.25 14.0375 14.178 13.8593 14.034 13.7153C13.89 13.5713 13.712 13.4995 13.5 13.5C13.2875 13.5 13.1093 13.572 12.9653 13.716C12.8213 13.86 12.7495 14.038 12.75 14.25C12.75 14.4625 12.822 14.6407 12.966 14.7847C13.11 14.9287 13.288 15.0005 13.5 15Z" fill="#5028FF"></path>
                                            </svg></div>
                                          <div>Social Media Links</div>
                                        </div>
                                      </div>
                                      <div>Add your other platforms to connect with a wider audience.</div>
                                    </div>
                                    <div class="setup-grid _1-column">
                                      <div class="clone-wrapper">
                                        <div class="hidden-clone">
                                          <div class="clone">
                                            <div id="w-node-d416b1f7-6314-195e-3d70-2282fe34d69a-ae446d75" class="field-contact-wrapper">
                                              <div class="field-wrapper setup-field-wrapper"><label for="Name-3" class="text-size-small label">Social Media Platform</label>
                                                <div class="phone-field-wrapper">
                                                  <div class="select-wrapper"><select id="Social-Platform-2" name="Social-Platform-2" data-name="Social Platform 2" class="select w-select">
                                                      <option value="Facebook">Facebook</option>
                                                      <option value="Instagram">Instagram</option>
                                                      <option value="Twitter">Twitter</option>
                                                      <option value="Linkedin">Linkedin</option>
                                                      <option value="Whatsapp">Whatsapp</option>
                                                    </select><img loading="lazy" src="../../images/select-arrow.svg" alt="" class="select-icon pointer-events-off"></div>
                                                </div>
                                              </div>
                                              <div id="w-node-d416b1f7-6314-195e-3d70-2282fe34d6a2-ae446d75" class="field-wrapper"><label for="Social-Link-3" class="text-size-small label">Link</label><input class="text-field w-input" maxlength="256" name="Social-Link-2" data-name="Social Link 2" placeholder="" type="text" id="Social-Link-2" required=""></div>
                                              <a id="w-node-d416b1f7-6314-195e-3d70-2282fe34d6a6-ae446d75" href="#" class="remove w-inline-block">
                                                <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" fill="none">
                                                    <g clip-path="url(#clip0_4215_26443)">
                                                      <path d="M14.6668 8.25V17.4167H7.3335V8.25H14.6668ZM13.2918 2.75H8.7085L7.79183 3.66667H4.5835V5.5H17.4168V3.66667H14.2085L13.2918 2.75ZM16.5002 6.41667H5.50016V17.4167C5.50016 18.425 6.32516 19.25 7.3335 19.25H14.6668C15.6752 19.25 16.5002 18.425 16.5002 17.4167V6.41667Z" fill="currentColor"></path>
                                                    </g>
                                                    <defs>
                                                      <clippath id="clip0_4215_26443">
                                                        <rect width="22" height="22" fill="white"></rect>
                                                      </clippath>
                                                    </defs>
                                                  </svg></div>
                                                <div class="remove-text">Delete</div>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="clone">
                                          <div id="w-node-b793fae7-d114-140f-9e2b-d18678e14266-ae446d75" class="field-contact-wrapper">
                                            <div class="field-wrapper setup-field-wrapper"><label for="Name-3" class="text-size-small label">Social Media Platform</label>
                                              <div class="phone-field-wrapper">
                                                <div class="select-wrapper"><select id="Social-Platform-2" name="Social-Platform-2" data-name="Social Platform 2" class="select w-select">
                                                    <option value="Facebook">Facebook</option>
                                                    <option value="Instagram">Instagram</option>
                                                    <option value="Twitter">Twitter</option>
                                                    <option value="Linkedin">Linkedin</option>
                                                    <option value="Whatsapp">Whatsapp</option>
                                                  </select><img loading="lazy" src="../../images/select-arrow.svg" alt="" class="select-icon pointer-events-off"></div>
                                              </div>
                                            </div>
                                            <div id="w-node-b793fae7-d114-140f-9e2b-d18678e1426e-ae446d75" class="field-wrapper"><label for="Social-Link-3" class="text-size-small label">Link</label><input class="text-field w-input" maxlength="256" name="Social-Link-2" data-name="Social Link 2" placeholder="" type="text" id="Social-Link-2" required=""></div>
                                            <a id="w-node-b793fae7-d114-140f-9e2b-d18678e14272-ae446d75" href="#" class="remove w-inline-block">
                                              <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" fill="none">
                                                  <g clip-path="url(#clip0_4215_26443)">
                                                    <path d="M14.6668 8.25V17.4167H7.3335V8.25H14.6668ZM13.2918 2.75H8.7085L7.79183 3.66667H4.5835V5.5H17.4168V3.66667H14.2085L13.2918 2.75ZM16.5002 6.41667H5.50016V17.4167C5.50016 18.425 6.32516 19.25 7.3335 19.25H14.6668C15.6752 19.25 16.5002 18.425 16.5002 17.4167V6.41667Z" fill="currentColor"></path>
                                                  </g>
                                                  <defs>
                                                    <clippath id="clip0_4215_26443">
                                                      <rect width="22" height="22" fill="white"></rect>
                                                    </clippath>
                                                  </defs>
                                                </svg></div>
                                              <div class="remove-text">Delete</div>
                                            </a>
                                          </div>
                                        </div>
                                        <a href="#" class="button is-secondary clone-btn w-inline-block">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                              <path d="M7.99725 12.6673C7.85475 12.6673 7.73627 12.6194 7.64183 12.5236C7.54738 12.4277 7.50016 12.309 7.50016 12.1673V8.50065H3.8335C3.69183 8.50065 3.57308 8.45246 3.47725 8.35607C3.38141 8.25967 3.3335 8.14022 3.3335 7.99773C3.3335 7.85523 3.38141 7.73676 3.47725 7.64232C3.57308 7.54787 3.69183 7.50065 3.8335 7.50065H7.50016V3.83398C7.50016 3.69232 7.54836 3.57357 7.64475 3.47773C7.74115 3.3819 7.86059 3.33398 8.00308 3.33398C8.14558 3.33398 8.26405 3.3819 8.3585 3.47773C8.45294 3.57357 8.50016 3.69232 8.50016 3.83398V7.50065H12.1668C12.3085 7.50065 12.4272 7.54885 12.5231 7.64523C12.6189 7.74163 12.6668 7.86108 12.6668 8.00357C12.6668 8.14607 12.6189 8.26454 12.5231 8.35898C12.4272 8.45343 12.3085 8.50065 12.1668 8.50065H8.50016V12.1673C8.50016 12.309 8.45197 12.4277 8.35558 12.5236C8.25918 12.6194 8.13973 12.6673 7.99725 12.6673Z" fill="currentColor"></path>
                                            </svg></div>
                                          <div>Add Social Media Link</div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div data-w-tab="Tab 2" class="w-tab-pane">
                            <div class="steps-wrapper">
                              <div class="steps-content-wrapper">
                                <div class="setup-process-grid">
                                  <div class="setup-wrapper">
                                    <div class="photo-title-wrapper top-border">
                                      <div class="block-title-container">
                                        <div class="block-title-wrapper">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
                                              <path d="M9 16.5C8.01509 16.5 7.03982 16.306 6.12987 15.9291C5.21993 15.5522 4.39314 14.9997 3.6967 14.3033C2.29018 12.8968 1.5 10.9891 1.5 9C1.5 7.01088 2.29018 5.10322 3.6967 3.6967C5.10322 2.29018 7.01088 1.5 9 1.5C13.125 1.5 16.5 4.5 16.5 8.25C16.5 9.44347 16.0259 10.5881 15.182 11.432C14.3381 12.2759 13.1935 12.75 12 12.75H10.65C10.425 12.75 10.275 12.9 10.275 13.125C10.275 13.2 10.35 13.275 10.35 13.35C10.65 13.725 10.8 14.175 10.8 14.625C10.875 15.675 10.05 16.5 9 16.5ZM9 3C7.4087 3 5.88258 3.63214 4.75736 4.75736C3.63214 5.88258 3 7.4087 3 9C3 10.5913 3.63214 12.1174 4.75736 13.2426C5.88258 14.3679 7.4087 15 9 15C9.225 15 9.375 14.85 9.375 14.625C9.375 14.475 9.3 14.4 9.3 14.325C9 13.95 8.85 13.575 8.85 13.125C8.85 12.075 9.675 11.25 10.725 11.25H12C12.7956 11.25 13.5587 10.9339 14.1213 10.3713C14.6839 9.80871 15 9.04565 15 8.25C15 5.325 12.3 3 9 3ZM4.875 7.5C5.475 7.5 6 8.025 6 8.625C6 9.225 5.475 9.75 4.875 9.75C4.275 9.75 3.75 9.225 3.75 8.625C3.75 8.025 4.275 7.5 4.875 7.5ZM7.125 4.5C7.725 4.5 8.25 5.025 8.25 5.625C8.25 6.225 7.725 6.75 7.125 6.75C6.525 6.75 6 6.225 6 5.625C6 5.025 6.525 4.5 7.125 4.5ZM10.875 4.5C11.475 4.5 12 5.025 12 5.625C12 6.225 11.475 6.75 10.875 6.75C10.275 6.75 9.75 6.225 9.75 5.625C9.75 5.025 10.275 4.5 10.875 4.5ZM13.125 7.5C13.725 7.5 14.25 8.025 14.25 8.625C14.25 9.225 13.725 9.75 13.125 9.75C12.525 9.75 12 9.225 12 8.625C12 8.025 12.525 7.5 13.125 7.5Z" fill="#5028FF"></path>
                                            </svg></div>
                                          <div>Template Color</div>
                                        </div>
                                      </div>
                                      <div>Customize the template according to your branding</div>
                                    </div>
                                    <div class="color-list-wrapper">
                                      <div class="color-picker-wrapper">
                                        <div class="color-embed w-embed"><label for="primaryColor" class="label-text">Primary Color:</label>
                                          <input type="color" class="color" id="primaryColor">
                                          <div class="color-display" id="primaryDisplay"></div>
                                          <input type="text" id="primaryHex" class="text-field color-field" readonly="">
                                        </div>
                                      </div>
                                      <div class="color-picker-wrapper">
                                        <div class="color-embed w-embed"><label for="secondaryColor" class="label-text">Secondary Color:</label>
                                          <input type="color" id="secondaryColor" class="color">
                                          <div class="color-display" id="secondaryDisplay"></div>
                                          <input type="text" id="secondaryHex" class="text-field color-field" readonly="">
                                        </div>
                                      </div>
                                      <div class="color-picker-wrapper">
                                        <div class="color-embed w-embed"><label for="textColor" class="label-text">Text Color:</label>
                                          <input type="color" id="textColor" class="color">
                                          <div class="color-display" id="textDisplay"></div>
                                          <input type="text" id="textHex" class="text-field color-field" readonly="">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="photo-title-wrapper top-border">
                                  <div class="block-title-container">
                                    <div class="block-title-wrapper">
                                      <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
                                          <path d="M10.2866 14.3359L6.06789 3.08592C6.01262 2.93848 5.91367 2.81143 5.78425 2.72174C5.65484 2.63204 5.50113 2.58398 5.34368 2.58398C5.18622 2.58398 5.03251 2.63204 4.9031 2.72174C4.77368 2.81143 4.67473 2.93848 4.61946 3.08592L0.400707 14.3359C0.330931 14.5275 0.339622 14.7389 0.42489 14.9241C0.510158 15.1093 0.665104 15.2533 0.856024 15.3249C1.04694 15.3964 1.25839 15.3897 1.44438 15.3061C1.63036 15.2226 1.77583 15.069 1.84914 14.8787L3.12039 11.489C3.1254 11.4756 3.13438 11.464 3.14612 11.4558C3.15787 11.4477 3.17183 11.4433 3.18614 11.4433H7.50121C7.51552 11.4433 7.52948 11.4477 7.54123 11.4558C7.55297 11.464 7.56195 11.4756 7.56696 11.489L8.83821 14.8787C8.91152 15.069 9.05699 15.2226 9.24298 15.3061C9.42896 15.3897 9.64041 15.3964 9.83133 15.3249C10.0222 15.2533 10.1772 15.1093 10.2625 14.9241C10.3477 14.7389 10.3564 14.5275 10.2866 14.3359ZM3.75321 9.80077L5.27793 5.73494C5.28299 5.7216 5.29199 5.71012 5.30373 5.70201C5.31548 5.69391 5.32941 5.68957 5.34368 5.68957C5.35794 5.68957 5.37187 5.69391 5.38362 5.70201C5.39536 5.71012 5.40436 5.7216 5.40942 5.73494L6.93414 9.80147C6.93811 9.81209 6.93945 9.82352 6.93805 9.83478C6.93665 9.84604 6.93254 9.85679 6.92608 9.86611C6.91962 9.87544 6.911 9.88306 6.90096 9.88833C6.89092 9.89361 6.87975 9.89637 6.8684 9.89639H3.81895C3.80761 9.89637 3.79643 9.89361 3.78639 9.88833C3.77635 9.88306 3.76773 9.87544 3.76127 9.86611C3.75481 9.85679 3.7507 9.84604 3.7493 9.83478C3.7479 9.82352 3.74924 9.81209 3.75321 9.80147V9.80077ZM14.0895 5.95889C12.6228 5.94834 11.3093 6.79807 10.7497 8.11748C10.6695 8.30629 10.6676 8.51923 10.7444 8.70944C10.8212 8.89965 10.9704 9.05156 11.1592 9.13174C11.348 9.21193 11.561 9.21383 11.7512 9.13702C11.9414 9.06021 12.0933 8.91098 12.1735 8.72217C12.4857 7.98776 13.2201 7.51139 14.048 7.50576C15.1843 7.49803 16.1015 8.43741 16.1015 9.57471C16.1015 9.5884 16.0962 9.60155 16.0867 9.61139C16.0772 9.62123 16.0642 9.62699 16.0505 9.62744C15.2799 9.64889 14.3658 9.70022 13.5502 9.79619C11.6254 10.0226 10.4765 11.072 10.4765 12.6034C10.4765 13.4187 10.7845 14.1503 11.3438 14.6664C11.8687 15.1498 12.5859 15.4159 13.3593 15.4159C14.4491 15.4159 15.3875 15.1347 16.0994 14.5996H16.1015C16.101 14.7012 16.1206 14.8018 16.1591 14.8958C16.1975 14.9898 16.2542 15.0753 16.3257 15.1475C16.3972 15.2196 16.4822 15.2769 16.5759 15.3162C16.6695 15.3555 16.77 15.3759 16.8716 15.3764C16.9732 15.3768 17.0738 15.3572 17.1678 15.3188C17.2618 15.2803 17.3473 15.2237 17.4195 15.1522C17.4916 15.0807 17.5489 14.9957 17.5882 14.902C17.6275 14.8083 17.6479 14.7078 17.6484 14.6063V9.57893C17.6484 7.60385 16.0663 5.9733 14.0895 5.95889ZM13.3593 13.869C12.743 13.869 12.0234 13.5375 12.0234 12.6034C12.0234 12.2283 12.158 11.9657 12.4604 11.7516C12.7546 11.5431 13.2057 11.3944 13.7309 11.3325C14.4734 11.245 15.3066 11.1968 16.021 11.1754C16.0305 11.1754 16.04 11.1773 16.0487 11.181C16.0575 11.1848 16.0654 11.1903 16.072 11.1972C16.0786 11.2041 16.0837 11.2123 16.087 11.2212C16.0903 11.2302 16.0918 11.2397 16.0913 11.2492C15.996 13.0112 15.0981 13.869 13.3593 13.869Z" fill="#5028FF"></path>
                                        </svg></div>
                                      <div>Font Style</div>
                                    </div>
                                  </div>
                                </div>
                                <div class="setup-font-wrapper">
                                  <div id="w-node-_7a58f2ad-096c-2906-2cdc-5ccf8aa51a5d-ae446d75" class="field-wrapper max-auto"><label for="name-2" class="text-size-small label">Font</label>
                                    <div class="select-wrapper"><select id="Fonts" name="Fonts" data-name="Fonts" class="select w-select">
                                        <option value="font-family: &#x27;Satoshi&#x27;, sans-serif;">Satoshi</option>
                                        <option value="font-family: &#x27;Roboto&#x27;, sans-serif;">Roboto</option>
                                        <option value="font-family: &#x27;Open Sans&#x27;, sans-serif;">Open Sans</option>
                                        <option value="font-family: &#x27;Lato&#x27;, sans-serif;">Lato</option>
                                        <option value="font-family: &#x27;Montserrat&#x27;, sans-serif;">Montserrat</option>
                                        <option value="font-family: &#x27;Raleway&#x27;, sans-serif;">Raleway</option>
                                        <option value="font-family: &#x27;Poppins&#x27;, sans-serif;">Poppins</option>
                                        <option value="font-family: &#x27;Merriweather&#x27;, serif;">Merriweather</option>
                                        <option value="font-family: &#x27;Nunito&#x27;, sans-serif;">Nunito</option>
                                        <option value="font-family: &#x27;Oswald&#x27;, sans-serif;">Oswald</option>
                                        <option value="font-family: &#x27;Playfair Display&#x27;, serif;">Playfair Display</option>
                                        <option value="font-family: &#x27;Source Sans Pro&#x27;, sans-serif;">Source Sans Pro</option>
                                        <option value="font-family: &#x27;Quicksand&#x27;, sans-serif;">Quicksand</option>
                                        <option value="font-family: &#x27;Ubuntu&#x27;, sans-serif;">Ubuntu</option>
                                        <option value="font-family: &#x27;Work Sans&#x27;, sans-serif;">Work Sans</option>
                                        <option value="font-family: &#x27;Rubik&#x27;, sans-serif;">Rubik</option>
                                        <option value="font-family: &#x27;Noto Sans&#x27;, sans-serif;">Noto Sans</option>
                                        <option value="font-family: &#x27;Fira Sans&#x27;, sans-serif;">Fira Sans</option>
                                        <option value="font-family: &#x27;DM Sans&#x27;, sans-serif;">DM Sans</option>
                                        <option value="font-family: &#x27;Josefin Sans&#x27;, sans-serif;">Josefin Sans</option>
                                        <option value="font-family: &#x27;Cabin&#x27;, sans-serif;">Cabin</option>
                                        <option value="font-family: &#x27;Karla&#x27;, sans-serif;">Karla</option>
                                        <option value="font-family: &#x27;Arvo&#x27;, serif;">Arvo</option>
                                        <option value="font-family: &#x27;Mukta&#x27;, sans-serif;">Mukta</option>
                                      </select><img loading="lazy" src="../../images/select-arrow.svg" alt="" class="select-icon"></div>
                                  </div>
                                  <div id="w-node-_7552ceef-b6ba-88c3-7d67-ac04859b8137-ae446d75" class="field-wrapper max-auto"><label for="name-3" class="text-size-small label">Title Font Size</label>
                                    <div class="select-wrapper"><input class="select number-field w-input" max="30" maxlength="256" name="field" data-name="Field" min="10" placeholder="10" type="number" id="field" required=""></div>
                                  </div>
                                </div>
                                <div class="photo-title-wrapper top-border">
                                  <div class="block-title-container">
                                    <div class="block-title-wrapper">
                                      <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
                                          <path d="M15.1875 2.53125H2.8125C2.43954 2.53125 2.08185 2.67941 1.81813 2.94313C1.55441 3.20685 1.40625 3.56454 1.40625 3.9375V14.0625C1.40625 14.4355 1.55441 14.7931 1.81813 15.0569C2.08185 15.3206 2.43954 15.4688 2.8125 15.4688H15.1875C15.5605 15.4688 15.9181 15.3206 16.1819 15.0569C16.4456 14.7931 16.5938 14.4355 16.5938 14.0625V3.9375C16.5938 3.56454 16.4456 3.20685 16.1819 2.94313C15.9181 2.67941 15.5605 2.53125 15.1875 2.53125ZM14.9062 4.21875V6.46875H3.09375V4.21875H14.9062ZM3.09375 8.15625H6.46875V13.7812H3.09375V8.15625ZM8.15625 13.7812V8.15625H14.9062V13.7812H8.15625Z" fill="#5028FF"></path>
                                        </svg></div>
                                      <div>Layout</div>
                                    </div>
                                  </div>
                                  <div>You may switch with the other digital card template.</div>
                                </div>
                                <div class="setup-layout-wrapper">
                                  <div class="template-grid"><label id="w-node-_839d75da-50d6-36b0-3c1e-c271e5a0930e-ae446d75" class="radio-button-field w-radio">
                                      <div class="w-form-formradioinput w-form-formradioinput--inputType-custom layout-radio w-radio-input"></div><input type="radio" name="layout" id="layout-1" data-name="layout" style="opacity:0;position:absolute;z-index:-1" value="layout-1">
                                      <div id="w-node-a93ca074-ccf8-b614-9e64-da4132e8ee30-ae446d75" class="radio-phone-template"><img sizes="(max-width: 479px) 100vw, (max-width: 767px) 30vw, (max-width: 991px) 21vw, (max-width: 1279px) 14vw, (max-width: 1439px) 175px, 225px" srcset="../../images/Template-1-p-500.png 500w, ../../images/Template-1.png 807w" alt="" src="../../images/Template-1.png" loading="lazy" class="template-content"></div>
                                    </label><label id="w-node-_1c8468e2-9273-5888-77a2-9c766a43838f-ae446d75" class="radio-button-field w-radio">
                                      <div class="w-form-formradioinput w-form-formradioinput--inputType-custom layout-radio w-radio-input"></div><input type="radio" name="layout" id="layout-2" data-name="layout" style="opacity:0;position:absolute;z-index:-1" value="layout-2">
                                      <div id="w-node-_1c8468e2-9273-5888-77a2-9c766a438393-ae446d75" class="radio-phone-template"><img sizes="(max-width: 479px) 100vw, (max-width: 767px) 30vw, (max-width: 991px) 21vw, (max-width: 1279px) 14vw, (max-width: 1439px) 175px, 225px" srcset="../../images/Template-1-p-500.png 500w, ../../images/Template-1.png 807w" alt="" src="../../images/Template-1.png" loading="lazy" class="template-content"></div>
                                    </label><label id="w-node-_7ce2c8f4-d947-e505-c3ed-ee1c5095e9f4-ae446d75" class="radio-button-field w-radio">
                                      <div class="w-form-formradioinput w-form-formradioinput--inputType-custom layout-radio w-radio-input"></div><input type="radio" name="layout" id="layout-3-2" data-name="layout" style="opacity:0;position:absolute;z-index:-1" value="layout-3">
                                      <div id="w-node-_7ce2c8f4-d947-e505-c3ed-ee1c5095e9f8-ae446d75" class="radio-phone-template"><img sizes="(max-width: 479px) 100vw, (max-width: 767px) 30vw, (max-width: 991px) 21vw, (max-width: 1279px) 14vw, (max-width: 1439px) 175px, 225px" srcset="../../images/Template-1-p-500.png 500w, ../../images/Template-1.png 807w" alt="" src="../../images/Template-1.png" loading="lazy" class="template-content"></div>
                                    </label></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div data-w-tab="Tab 3" class="w-tab-pane">
                            <div class="steps-wrapper">
                              <div class="steps-content-wrapper">
                                <div class="setup-process-grid">
                                  <div class="setup-wrapper bot-padding-none">
                                    <div class="photo-title-wrapper">
                                      <div class="block-title-container">
                                        <div class="block-title-wrapper">
                                          <div class="flex-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
                                              <path d="M6.9374 16.5L6.6374 14.1C6.4749 14.0375 6.32165 13.9625 6.17765 13.875C6.03365 13.7875 5.89315 13.6938 5.75615 13.5938L3.5249 14.5312L1.4624 10.9688L3.39365 9.50625C3.38115 9.41875 3.3749 9.33425 3.3749 9.25275V8.74725C3.3749 8.66575 3.38115 8.58125 3.39365 8.49375L1.4624 7.03125L3.5249 3.46875L5.75615 4.40625C5.89365 4.30625 6.0374 4.2125 6.1874 4.125C6.3374 4.0375 6.4874 3.9625 6.6374 3.9L6.9374 1.5H11.0624L11.3624 3.9C11.5249 3.9625 11.6782 4.0375 11.8222 4.125C11.9662 4.2125 12.1067 4.30625 12.2437 4.40625L14.4749 3.46875L16.5374 7.03125L14.6062 8.49375C14.6187 8.58125 14.6249 8.66575 14.6249 8.74725V9.25275C14.6249 9.33425 14.6124 9.41875 14.5874 9.50625L16.5187 10.9688L14.4562 14.5312L12.2437 13.5938C12.1062 13.6938 11.9624 13.7875 11.8124 13.875C11.6624 13.9625 11.5124 14.0375 11.3624 14.1L11.0624 16.5H6.9374ZM9.0374 11.625C9.7624 11.625 10.3812 11.3688 10.8937 10.8563C11.4062 10.3438 11.6624 9.725 11.6624 9C11.6624 8.275 11.4062 7.65625 10.8937 7.14375C10.3812 6.63125 9.7624 6.375 9.0374 6.375C8.2999 6.375 7.6779 6.63125 7.1714 7.14375C6.6649 7.65625 6.4119 8.275 6.4124 9C6.4124 9.725 6.6654 10.3438 7.1714 10.8563C7.6774 11.3688 8.2994 11.625 9.0374 11.625ZM9.0374 10.125C8.7249 10.125 8.45915 10.0155 8.24015 9.7965C8.02115 9.5775 7.9119 9.312 7.9124 9C7.9124 8.6875 8.0219 8.42175 8.2409 8.20275C8.4599 7.98375 8.7254 7.8745 9.0374 7.875C9.3499 7.875 9.61565 7.9845 9.83465 8.2035C10.0537 8.4225 10.1629 8.688 10.1624 9C10.1624 9.3125 10.0529 9.57825 9.8339 9.79725C9.6149 10.0162 9.3494 10.1255 9.0374 10.125ZM8.2499 15H9.73115L9.99365 13.0125C10.3812 12.9125 10.7407 12.7655 11.0722 12.5715C11.4037 12.3775 11.7067 12.1432 11.9812 11.8687L13.8374 12.6375L14.5687 11.3625L12.9562 10.1437C13.0187 9.96875 13.0624 9.7845 13.0874 9.591C13.1124 9.3975 13.1249 9.2005 13.1249 9C13.1249 8.8 13.1124 8.60325 13.0874 8.40975C13.0624 8.21625 13.0187 8.03175 12.9562 7.85625L14.5687 6.6375L13.8374 5.3625L11.9812 6.15C11.7062 5.8625 11.4032 5.622 11.0722 5.4285C10.7412 5.235 10.3817 5.088 9.99365 4.9875L9.7499 3H8.26865L8.00615 4.9875C7.61865 5.0875 7.2594 5.2345 6.9284 5.4285C6.5974 5.6225 6.29415 5.85675 6.01865 6.13125L4.1624 5.3625L3.43115 6.6375L5.04365 7.8375C4.98115 8.025 4.9374 8.2125 4.9124 8.4C4.8874 8.5875 4.8749 8.7875 4.8749 9C4.8749 9.2 4.8874 9.39375 4.9124 9.58125C4.9374 9.76875 4.98115 9.95625 5.04365 10.1437L3.43115 11.3625L4.1624 12.6375L6.01865 11.85C6.29365 12.1375 6.5969 12.3783 6.9284 12.5723C7.2599 12.7663 7.61915 12.913 8.00615 13.0125L8.2499 15Z" fill="#5028FF"></path>
                                            </svg></div>
                                          <div>Advance Settings</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="domain-toggle-wrapper">
                                      <div class="domain-title">URL Domain</div>
                                      <div>Select a domain for your card. Upon purchasing our “Premium” service  you’ll be able to customize your digital card link.</div>
                                      <div class="form-center-toggle-con">
                                        <div data-w-id="605417b3-de4a-4ed3-1ad0-ee00073691eb" class="toggle address-toggle">
                                          <div class="toggle-switch shadow"></div>
                                        </div>
                                      </div>
                                      <div id="w-node-_0fc97c79-8f74-a463-5036-991bfdfcbf89-ae446d75" class="field-wrapper max-auto"><label for="name-3" class="text-size-small label">URL of the digital card:</label>
                                        <div class="select-wrapper"><input class="select url-field pointer-events-off w-input" maxlength="256" name="Url" data-name="Url" placeholder="Eassave.com/56gBYH" type="text" id="Url" required=""></div>
                                      </div>
                                    </div>
                                    <div class="domain-toggle-wrapper-copy">
                                      <div class="save-contact-wrapper">
                                        <div class="domain-title">Save as contact</div>
                                        <div>Anyone who scanned your card will be able to save you as contact</div>
                                      </div>
                                      <div class="form-center-toggle-con">
                                        <div data-w-id="1d336f1d-4d82-9f61-660c-d58e6299799a" class="toggle address-toggle">
                                          <div class="toggle-switch shadow"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="phone-sticky-wrapper">
                        <div class="phone-preview-wrapper"><img loading="lazy" src="../../images/main.png" alt="" class="phone_case">
                          <div class="scolling-wrapper"><img loading="lazy" src="../../images/Content.png" alt="" class="phone-img"></div>
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
                <a id="w-node-ef992205-966c-748f-d053-488a176f95a9-176f958f" href="../../terms-and-conditions.html" class="footer-link">Terms and Conditions</a>
                <a id="w-node-ef992205-966c-748f-d053-488a176f95ab-176f958f" href="../../privacy-policy.html" class="footer-link">Privacy Policy</a>
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
                  <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form" data-wf-page-id="665f147b743ba95cae446d75" data-wf-element-id="ef992205-966c-748f-d053-488a176f95c4">
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
  <script src="../../js/webflow.js" type="text/javascript"></script>
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
function setupColorPicker(colorPickerId, displayId, hexId) {
    const colorPicker = document.getElementById(colorPickerId);
    const colorDisplay = document.getElementById(displayId);
    const colorHex = document.getElementById(hexId);
    colorPicker.addEventListener('input', (event) => {
        const selectedColor = event.target.value;
        colorDisplay.style.backgroundColor = selectedColor;
        colorHex.value = selectedColor;
    });
}
setupColorPicker('primaryColor', 'primaryDisplay', 'primaryHex');
setupColorPicker('secondaryColor', 'secondaryDisplay', 'secondaryHex');
setupColorPicker('textColor', 'textDisplay', 'textHex');
</script>
  <script>
function showFileName(inputId, fileNameId, removeFileId) {
    const input = document.getElementById(inputId);
    const fileName = input.files[0] ? input.files[0].name : '';
    document.getElementById(fileNameId).textContent = fileName;
    document.getElementById(removeFileId).style.display = fileName ? 'inline-block' : 'none';
}
function removeFile(inputId, fileNameId, removeFileId) {
    const input = document.getElementById(inputId);
    input.value = '';
    document.getElementById(fileNameId).textContent = '';
    document.getElementById(removeFileId).style.display = 'none';
}
//////For Clone function
$(document).ready(function() {
    // Event delegation for clone button clicks
    $(document).on('click', '.clone-btn', function() {
        // Find the parent container (clone-wrapper) of the clone button
        let parentContainer = $(this).closest('.clone-wrapper');
        // Find the .hidden-clone div within the same parent container
        let hiddenClone = parentContainer.find('.hidden-clone .clone').first();
        if (hiddenClone.length > 0) {
            // Clone the element
            let newClone = hiddenClone.clone(true, true);
            // Optionally, update the new clone to avoid duplicate IDs, if any
            newClone.find('[id]').each(function() {
                this.id = this.id + "_" + ($('.clone').length + 1);
            });
            // Append the cloned element after the original clone or hidden-clone
            parentContainer.append(newClone);
        } else {
            console.error("Hidden clone source not found in this container!");
        }
    });
    // Event delegation for remove button clicks
    $(document).on('click', '.remove', function() {
        // Find the closest parent div with the 'clone' class and remove it
        $(this).closest('.clone').remove();
    });
});
$("#next-tab").click(function() {
  var currentTab = $(".steps-con.w--current").attr("id");
  let str = currentTab;
  let lastDigit = str.slice(-1);
  lastDigit = parseInt(lastDigit);
  if (lastDigit <= 1) {
    lastDigit = lastDigit + 1;
    var id = "w-tabs-0-data-w-tab-" + lastDigit;
    document.getElementById(id).click();
  }
});
$("#prev-tab").click(function() {
  var currentTab = $(".steps-con.w--current").attr("id");
  let str = currentTab;
  let lastDigit = str.slice(-1);
  lastDigit = parseInt(lastDigit);
  if (lastDigit > 0) {
    lastDigit = lastDigit - 1;
    var id = "w-tabs-0-data-w-tab-" + lastDigit;
    document.getElementById(id).click();
  }
});
</script>
</body>
</html>