<?php
$root = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="665f147b743ba95cae446d3c" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Add New Cards</title>
  <meta content="Add New Cards" property="og:title">
  <meta content="Add New Cards" property="twitter:title">
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
  <!--  Swiper CSS  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <!--  Swiper JS  -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
            <div class="user-profile-wrapper align-start">
              <div id="w-node-_67a4da50-23ef-24f3-531d-00fac2baa25b-ae446d3c" class="user-navigation-wrapper">
                <div class="user-button-wrapper">
                  <div class="profile-name-wrapper"><img src="../images/Ellipse-77_1Ellipse-77.png" loading="lazy" alt="" class="profile-img">
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
                    <a href="#" class="sidenav-button w-inline-block">
                      <div class="icon color-blue w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                          <path d="M3.7002 14.6667C3.21408 14.6667 2.80089 14.4965 2.46061 14.1563C2.12033 13.816 1.9502 13.4028 1.9502 12.9167V11.3334C1.9502 11.1917 1.99811 11.0729 2.09395 10.9771C2.18978 10.8813 2.30853 10.8334 2.4502 10.8334H4.06686V1.76668C4.06686 1.65557 4.11131 1.60002 4.2002 1.60002C4.28908 1.60002 4.37797 1.64446 4.46686 1.73335L5.06686 2.33335L5.88353 1.51668C5.93504 1.46113 5.99514 1.43335 6.06383 1.43335C6.13252 1.43335 6.19464 1.46113 6.2502 1.51668L7.0502 2.33335L7.86686 1.51668C7.91837 1.46113 7.97847 1.43335 8.04716 1.43335C8.11585 1.43335 8.17797 1.46113 8.23353 1.51668L9.05019 2.33335L9.86686 1.51668C9.91837 1.46113 9.97847 1.43335 10.0472 1.43335C10.1159 1.43335 10.178 1.46113 10.2335 1.51668L11.0502 2.33335L11.8669 1.51668C11.9184 1.46113 11.9785 1.43335 12.0472 1.43335C12.1159 1.43335 12.178 1.46113 12.2335 1.51668L13.0502 2.33335L13.6502 1.73335C13.7391 1.64446 13.828 1.60002 13.9169 1.60002C14.0057 1.60002 14.0502 1.65708 14.0502 1.77122V12.9167C14.0502 13.4028 13.8801 13.816 13.5398 14.1563C13.1995 14.4965 12.7863 14.6667 12.3002 14.6667H3.7002ZM12.3002 13.6667C12.5224 13.6667 12.703 13.5972 12.8419 13.4584C12.9808 13.3195 13.0502 13.1389 13.0502 12.9167V3.00002H5.06686V10.8334H11.0502C11.1919 10.8334 11.3106 10.8813 11.4064 10.9771C11.5023 11.0729 11.5502 11.1917 11.5502 11.3334V12.9141C11.5502 13.138 11.6196 13.3195 11.7585 13.4584C11.8974 13.5972 12.078 13.6667 12.3002 13.6667ZM6.43353 5.63335C6.3002 5.63335 6.18631 5.58335 6.09186 5.48335C5.99742 5.38335 5.9502 5.26391 5.9502 5.12502C5.9502 4.98613 5.99811 4.86946 6.09395 4.77502C6.18978 4.68057 6.30853 4.63335 6.45019 4.63335H9.45019C9.59186 4.63335 9.71061 4.68154 9.80644 4.77793C9.90228 4.87433 9.95019 4.99378 9.95019 5.13627C9.95019 5.27877 9.90228 5.39724 9.80644 5.49168C9.71061 5.58613 9.59186 5.63335 9.45019 5.63335H6.43353ZM6.43353 7.86668C6.3002 7.86668 6.18631 7.81668 6.09186 7.71668C5.99742 7.61668 5.9502 7.49724 5.9502 7.35835C5.9502 7.21946 5.99811 7.10279 6.09395 7.00835C6.18978 6.91391 6.30853 6.86668 6.45019 6.86668H9.45019C9.59186 6.86668 9.71061 6.91488 9.80644 7.01127C9.90228 7.10767 9.95019 7.22711 9.95019 7.3696C9.95019 7.5121 9.90228 7.63057 9.80644 7.72502C9.71061 7.81946 9.59186 7.86668 9.45019 7.86668H6.43353ZM11.5002 5.63335C11.3669 5.63335 11.2502 5.58335 11.1502 5.48335C11.0502 5.38335 11.0002 5.26668 11.0002 5.13335C11.0002 5.00002 11.0502 4.88335 11.1502 4.78335C11.2502 4.68335 11.3669 4.63335 11.5002 4.63335C11.6335 4.63335 11.7502 4.68335 11.8502 4.78335C11.9502 4.88335 12.0002 5.00002 12.0002 5.13335C12.0002 5.26668 11.9502 5.38335 11.8502 5.48335C11.7502 5.58335 11.6335 5.63335 11.5002 5.63335ZM11.5002 7.78335C11.3669 7.78335 11.2502 7.73335 11.1502 7.63335C11.0502 7.53335 11.0002 7.41668 11.0002 7.28335C11.0002 7.15002 11.0502 7.03335 11.1502 6.93335C11.2502 6.83335 11.3669 6.78335 11.5002 6.78335C11.6335 6.78335 11.7502 6.83335 11.8502 6.93335C11.9502 7.03335 12.0002 7.15002 12.0002 7.28335C12.0002 7.41668 11.9502 7.53335 11.8502 7.63335C11.7502 7.73335 11.6335 7.78335 11.5002 7.78335ZM3.68353 13.6667H10.5502V11.8334H2.9502V12.9167C2.9502 13.1389 3.02047 13.3195 3.16103 13.4584C3.30158 13.5972 3.47575 13.6667 3.68353 13.6667Z" fill="currentColor"></path>
                        </svg></div>
                      <div>My Orders</div>
                    </a>
                    <a href="#" class="sidenav-button w-inline-block">
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
              <div id="w-node-fbbf25be-58e1-289e-6bfa-d417b646c5e4-ae446d3c" class="dashboard-wrapper">
                <div class="bread-crumbs-wrapper">
                  <a href="../cards/manage-cards.html" class="return-link w-inline-block">
                    <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.71577 9.55044C4.61623 8.65075 3.98708 6.99164 2.30799 6.09209L11.5193 6.09209L11.5193 5.52066L2.30908 5.52066C3.98736 4.62097 4.61625 2.96238 4.71577 2.06289L4.14781 2.00005C4.03868 2.98635 3.17224 5.08753 0.571303 5.49713L0.61632 5.78299L0.61632 5.83034L0.571303 6.1162C3.17224 6.5258 4.03868 8.62698 4.14781 9.61328L4.71577 9.55044Z" fill="currentColor"></path>
                      </svg></div>
                    <div>All my cards</div>
                  </a>
                  <div class="bread-crumbs-container">
                    <a href="../index.html" class="breadcrumbs">Home</a><img src="../images/bi_chevron-down.svg" loading="lazy" alt="">
                    <a href="../user-profile.html" class="breadcrumbs">Dashboard</a><img src="../images/bi_chevron-down.svg" loading="lazy" alt="">
                    <a href="../cards/manage-cards.html" class="breadcrumbs">Manage Cards</a>
                  </div>
                </div>
                <div class="scans-grid">
                  <div class="shadow-card">
                    <div class="active-toggle-wrap">
                      <div class="active-text-wrap">
                        <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewbox="0 0 8 8" fill="none">
                            <circle cx="4" cy="4" r="4" fill="#8D8F93"></circle>
                          </svg></div>
                        <div>Active Card:</div>
                      </div>
                      <div data-w-id="fa72bc83-b216-65fe-96d6-993f669960c1" class="toggle recent-toggle">
                        <div class="toggle-switch"></div>
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
                  <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form" data-wf-page-id="665f147b743ba95cae446d3c" data-wf-element-id="ef992205-966c-748f-d053-488a176f95c4">
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
  <script>
var swiper = new Swiper('.active-swiper', {
  direction: 'horizontal',
  spacebetween: 24,
  loop: false,
  speed: 500,
  autoplay: {
    delay: 2000,
  },
  navigation: {
    nextEl: '.right-arrow',
    prevEl: '.left-arrow',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 24,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 24,
    },
  },
  // Add more customization options as needed
});
///Inactive slide
var swiper = new Swiper('.in-active-swiper', {
  direction: 'horizontal',
  loop: false,
  speed: 500,
  autoplay: {
    delay: 2000,
  },
  navigation: {
    nextEl: '.in-right-arrow',
    prevEl: '.in-left-arrow',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 24,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 24,
    },
  },
  // Add more customization options as needed
});
</script>
</body>
</html>