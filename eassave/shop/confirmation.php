<?php
$root = $_SERVER['DOCUMENT_ROOT'];
?>


<!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="665f147b743ba95cae446d59" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Confirmation - Coming soon</title>
  <meta content="Confirmation - Coming soon" property="og:title">
  <meta content="Confirmation - Coming soon" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/eassave-v2.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Epilogue:300,regular,500,600,700,900","Inter:100,200,300,regular,500,600,700,800,900"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="../images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="../images/webclip.png" rel="apple-touch-icon">
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
                  <a href="../index.html" class="logo-wrapper w-inline-block"><img src="../images/EASSAVE-Logo.svg" loading="eager" alt="" class="logo"></a>
                  <div class="nav-links-wraper">
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e944-1779e93a" href="../index.html" class="text-size-small nav-link">Home</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e946-1779e93a" href="../about.html" class="text-size-small nav-link">About us</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e948-1779e93a" href="../shop.html" class="text-size-small nav-link">Shop</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e94a-1779e93a" href="../services.html" class="text-size-small nav-link">Services</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e94c-1779e93a" href="../affiliates.html" class="text-size-small nav-link hide">Affiliate</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e94e-1779e93a" href="../frequently-asked-questions.html" class="text-size-small nav-link">FAQ</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e950-1779e93a" href="../contact.html" class="text-size-small nav-link">Contact Us</a>
                    <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e952-1779e93a" href="#" class="text-size-small nav-link">Blogs</a>
                  </div>
                </div>
                <div id="activation-wrapper" class="nav-links-wraper _2-cols">
                  <a id="w-node-_0ce80fb3-12ea-ae45-b05b-d15d1779e955-1779e93a" href="../auth/activate-card.html" class="text-size-regular activate-btn">Activate Card</a>
                  <a data-w-id="0ce80fb3-12ea-ae45-b05b-d15d1779e957" href="../auth/login.html" class="button is-icon w-inline-block">
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
                    <div class="dropdown-toggle login-toggle w-dropdown-toggle"><img src="../images/Ellipse-77_1Ellipse-77.png" loading="eager" alt="" class="profile-img">
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
                <a href="../index.html" class="logo-wrapper w-inline-block"><img src="../images/EASSAVE-Logo.svg" loading="eager" alt="" class="logo"></a>
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
                  <a href="../index.html" class="text-size-small nav-link">Home</a>
                  <a href="#" class="text-size-small nav-link">About us</a>
                  <a href="#" class="text-size-small nav-link">Shop</a>
                  <a href="#" class="text-size-small nav-link">Services</a>
                </div>
                <div class="mobile-nav-link-wrapper">
                  <a href="../affiliates.html" class="text-size-small nav-link secondary-nav-link">Affiliate</a>
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
      <section class="section-user-profile">
        <div class="padding-global">
          <div class="container-large">
            <div class="bread-crumbs-wrapper top-10">
              <div>
                <h1 class="heading-style-h5">Order Placed 🎉</h1>
              </div>
              <div class="bread-crumbs-container">
                <a href="../index.html" class="breadcrumbs">Home</a><img src="../images/bi_chevron-down.svg" loading="lazy" alt="">
                <a href="../shop.html" class="breadcrumbs">Shop</a><img src="../images/bi_chevron-down.svg" loading="lazy" alt="">
                <a href="../shop/cart.html" class="breadcrumbs">Cart</a><img src="../images/bi_chevron-down.svg" loading="lazy" alt="">
                <a href="../shop/shipping-and-delivery.html" class="breadcrumbs">Shipping &amp; Delivery</a><img src="../images/bi_chevron-down.svg" loading="lazy" alt="">
                <a href="../shop/payment-method.html" class="breadcrumbs">Payment Method</a><img src="../images/bi_chevron-down.svg" loading="lazy" alt="">
                <a href="../shop/confirmation.html" aria-current="page" class="breadcrumbs w--current">Order Placed</a>
              </div>
            </div>
            <div class="order-wrapper">
              <div class="order-details-wrapper">
                <div class="order-title-con">
                  <h2 class="heading-style-h5">Thank you for your order!</h2>
                  <div>A copy or your order summary has been sent to Jennydelacruz@gmail.com</div>
                </div>
                <div class="order-btn-con">
                  <a href="#" class="button">Continue Shopping</a>
                  <a href="#" class="button is-secondary">Order History</a>
                </div>
              </div>
              <div class="order-details-wrapper order-container">
                <div class="icon-wrapper"><img src="../images/charm_package.svg" loading="lazy" alt="">
                  <div>Order Status</div>
                </div>
                <div class="div-block-6">
                  <div class="order-cotent-wrapper">
                    <div>Order ID:</div>
                    <div id="w-node-_57866370-8841-8703-d692-d5e0f0da5356-ae446d59" class="order-content">2023 - 0127 - 07534221</div>
                  </div>
                  <div class="order-cotent-wrapper">
                    <div id="w-node-_21765b1c-bacc-e4af-9c71-3add253b9ef0-ae446d59">Date &amp; Time:</div>
                    <div id="w-node-_21765b1c-bacc-e4af-9c71-3add253b9ef2-ae446d59" class="order-content">05-01-2023 07:53 AM</div>
                  </div>
                  <div class="order-cotent-wrapper no-border-right">
                    <div>Order Status:</div>
                    <div id="w-node-_1fa16bfe-fcca-f9df-1718-c73fb327a628-ae446d59" class="tag yellow">Placed</div>
                  </div>
                </div>
              </div>
              <div class="order-details-wrapper order-container">
                <div class="icon-wrapper"><img src="../images/charm_clock.svg" loading="lazy" alt="">
                  <div>Transaction History</div>
                </div>
                <div class="div-block-6">
                  <div class="order-cotent-wrapper no-border-left">
                    <div>SubTotal:</div>
                    <div id="w-node-_6532805c-52fb-4daa-acf0-7582312c52f3-ae446d59" class="order-content">₱71,000</div>
                  </div>
                  <div class="order-cotent-wrapper">
                    <div id="w-node-_6532805c-52fb-4daa-acf0-7582312c52f6-ae446d59">Shipping Fee:</div>
                    <div id="w-node-_6532805c-52fb-4daa-acf0-7582312c52f8-ae446d59" class="order-content">₱200</div>
                  </div>
                  <div class="order-cotent-wrapper no-border-right">
                    <div id="w-node-_6532805c-52fb-4daa-acf0-7582312c52fb-ae446d59">Total Amount to Pay:</div>
                    <div id="w-node-_87ac6285-7174-09b4-22e1-e7a2e60b4445-ae446d59" class="order-content">₱71,200</div>
                  </div>
                </div>
                <div class="div-block-6">
                  <div class="order-cotent-wrapper no-border-left">
                    <div>SubTotal:</div><img src="../images/GCach-Logo---PNG-Logo-Vector-Downloads-SVG-EPS-3-1.svg" loading="lazy" id="w-node-_20ef1d28-0a2d-4142-37d4-f5f27e6bcf24-ae446d59" alt="">
                  </div>
                  <div class="order-cotent-wrapper no-border-right">
                    <div>Order Status:</div>
                    <div id="w-node-_75649304-0ed7-35cc-3a25-9d59aedf26dd-ae446d59" class="tag green">Paid</div>
                  </div>
                </div>
              </div>
              <div class="order-details-wrapper order-container">
                <div class="icon-wrapper"><img src="../images/charm_mail.svg" loading="lazy" alt="">
                  <div>Contact Information</div>
                </div>
                <div class="div-block-6">
                  <div class="order-cotent-wrapper no-border-left">
                    <div>Email:</div>
                    <div id="w-node-b1c46754-96e0-6484-8faa-f83ef8d43b1c-ae446d59" class="order-content">Jennydelacruz@gmail.com</div>
                  </div>
                  <div class="order-cotent-wrapper">
                    <div id="w-node-b1c46754-96e0-6484-8faa-f83ef8d43b1f-ae446d59">Phone:</div>
                    <div id="w-node-b1c46754-96e0-6484-8faa-f83ef8d43b21-ae446d59" class="order-content">+63 9353018798</div>
                  </div>
                  <div class="order-cotent-wrapper no-border-right">
                    <div>Address:</div>
                    <div id="w-node-_0285504b-87a8-4490-ca60-dcce77de48c1-ae446d59" class="order-content">Better Living Subd, Brgy Don Bosco Paranaque City, Metro Manila</div>
                  </div>
                </div>
              </div>
              <div class="order-details-wrapper order-container">
                <div class="icon-wrapper"><img src="../images/charm_cards.svg" loading="lazy" alt="">
                  <div>Order Summary</div>
                </div>
                <div class="summary-wrapper">
                  <div class="column">
                    <div>Product Card</div>
                  </div>
                  <div class="column">
                    <div>Price</div>
                  </div>
                  <div class="column">
                    <div>Color Variation</div>
                  </div>
                  <div class="column">
                    <div>Additional Information</div>
                  </div>
                </div>
                <div class="summary-wrapper">
                  <div class="column">
                    <div class="card-prev-wrapper"><img src="../images/Card-Img_1Card-Img.png" loading="lazy" alt="" class="preview-thumb">
                      <div>Marker</div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card-price">₱15,000</div>
                  </div>
                  <div class="column">
                    <div class="color-wrap">
                      <div class="color-con">
                        <div class="color-box bg-blue"></div>
                        <div class="color-box bg-blue"></div>
                      </div>
                      <div>Bright Blue</div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="name-container">
                      <div class="name-wrap">
                        <div>Full Name:</div>
                        <div class="text-weight-bold">John Meyer</div>
                      </div>
                      <div class="name-wrap">
                        <div>Job Title:</div>
                        <div class="text-weight-bold">CEO of Startup Inc.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="summary-wrapper">
                  <div class="column">
                    <div class="card-prev-wrapper"><img src="../images/Card-Img_2Card-Img.png" loading="lazy" alt="" class="preview-thumb">
                      <div>Edgy Minimal</div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card-price">₱56,000</div>
                  </div>
                  <div class="column">
                    <div class="color-wrap">
                      <div class="color-con">
                        <div class="color-box bg-gray"></div>
                        <div class="color-box bg-black"></div>
                      </div>
                      <div>B&amp;W</div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="name-container">
                      <div class="name-wrap">
                        <div>Full Name:</div>
                        <div class="text-weight-bold">John Meyer</div>
                      </div>
                      <div class="name-wrap">
                        <div>Job Title:</div>
                        <div class="text-weight-bold">CEO of Startup Inc.</div>
                      </div>
                    </div>
                  </div>
                </div>
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
                  <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form" data-wf-page-id="665f147b743ba95cae446d59" data-wf-element-id="ef992205-966c-748f-d053-488a176f95c4">
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
  <script src="../js/webflow.js" type="text/javascript"></script>
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