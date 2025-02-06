<?php
$root = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="665f147b743ba95cae446d21" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Affiliates</title>
  <meta content="Affiliates" property="og:title">
  <meta content="Affiliates" property="twitter:title">
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



<!-- Navigation -->
<?php include 'partials/navigation-dark.html'; ?>


<section class="section-header">
    <div class="padding-global">
      <div class="container-large">
        <div class="header-moving-wrapper absolute-header">
          <div class="moving-container">
            <h1 class="header-text opacity-3">Be an Affiliate</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text">Be an Affiliate</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text opacity-3">Be an Affiliate</h1>
        </div>
        <div class="moving-container">
            <h1 class="header-text">Be an Affiliate</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text opacity-3">Be an Affiliate</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text">Be an Affiliate</h1>
        </div>
    </div>
    <div class="header-grid">
      <div id="w-node-_9d0fe101-4d3f-3e10-da33-62c008e64f5a-ae446d21" class="header-content-wrapper">
        <div class="header-text mobile-header-text">Get in Touch</div>
        <div class="header-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla.</div>
        <a href="#contact-form" class="arrow-con w-inline-block">
          <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="21" viewbox="0 0 15 21" fill="currentColor">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.121763 13.0766C1.90948 13.2405 5.25533 14.4241 6.93587 17.7439L7.21804 0.015026L8.21793 3.59217e-07L7.93577 17.7276C9.723 14.3566 13.1075 13.0722 14.9011 12.8545L14.9912 13.8472C13.0127 14.0873 8.82309 15.8137 7.93407 20.7803L7.44211 20.707L7.33426 20.7087L6.83972 20.7967C6.10842 15.8545 1.97179 14.2532 -6.15128e-07 14.0725L0.121763 13.0766Z" fill="currentColor"></path>
          </svg></div>
      </a>
  </div><img src="images/affiliate.png" loading="eager" id="w-node-ffaaef76-370d-748f-9798-2fbf04182aee-ae446d21" alt="" class="header-img">
</div>
</div>
</div>
<div class="spacer"></div>
</section>
<section id="contact-form" class="section-requirement">
    <div class="padding-global">
      <div class="container-large">
        <div class="req-grid">
          <div id="w-node-aac82546-a617-6dcb-f826-19548ae03f27-ae446d21" class="adv-card">
            <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                <path d="M24 29.3333C22.8889 29.3333 21.9444 28.9444 21.1667 28.1666C20.3889 27.3888 20 26.4444 20 25.3333C20 25.1777 20.0111 25.0164 20.0333 24.8493C20.0556 24.6822 20.0889 24.5324 20.1333 24.4L10.7333 18.9333C10.3556 19.2666 9.93333 19.528 9.46667 19.7173C9 19.9066 8.51111 20.0008 8 20C6.88889 20 5.94444 19.6111 5.16667 18.8333C4.38889 18.0555 4 17.1111 4 16C4 14.8888 4.38889 13.9444 5.16667 13.1666C5.94444 12.3888 6.88889 12 8 12C8.51111 12 9 12.0946 9.46667 12.284C9.93333 12.4733 10.3556 12.7342 10.7333 13.0666L20.1333 7.59996C20.0889 7.46663 20.0556 7.31685 20.0333 7.15063C20.0111 6.9844 20 6.82307 20 6.66663C20 5.55551 20.3889 4.61107 21.1667 3.83329C21.9444 3.05551 22.8889 2.66663 24 2.66663C25.1111 2.66663 26.0556 3.05551 26.8333 3.83329C27.6111 4.61107 28 5.55551 28 6.66663C28 7.77774 27.6111 8.72218 26.8333 9.49996C26.0556 10.2777 25.1111 10.6666 24 10.6666C23.4889 10.6666 23 10.5724 22.5333 10.384C22.0667 10.1955 21.6444 9.93418 21.2667 9.59996L11.8667 15.0666C11.9111 15.2 11.9444 15.3502 11.9667 15.5173C11.9889 15.6844 12 15.8453 12 16C12 16.1555 11.9889 16.3168 11.9667 16.484C11.9444 16.6511 11.9111 16.8008 11.8667 16.9333L21.2667 22.4C21.6444 22.0666 22.0667 21.8057 22.5333 21.6173C23 21.4288 23.4889 21.3342 24 21.3333C25.1111 21.3333 26.0556 21.7222 26.8333 22.5C27.6111 23.2777 28 24.2222 28 25.3333C28 26.4444 27.6111 27.3888 26.8333 28.1666C26.0556 28.9444 25.1111 29.3333 24 29.3333ZM24 7.99996C24.3778 7.99996 24.6947 7.87196 24.9507 7.61596C25.2067 7.35996 25.3342 7.04351 25.3333 6.66663C25.3333 6.28885 25.2053 5.97196 24.9493 5.71596C24.6933 5.45996 24.3769 5.3324 24 5.33329C23.6222 5.33329 23.3053 5.46129 23.0493 5.71729C22.7933 5.97329 22.6658 6.28974 22.6667 6.66663C22.6667 7.0444 22.7947 7.36129 23.0507 7.61729C23.3067 7.87329 23.6231 8.00085 24 7.99996ZM8 17.3333C8.37778 17.3333 8.69467 17.2053 8.95067 16.9493C9.20667 16.6933 9.33422 16.3768 9.33333 16C9.33333 15.6222 9.20533 15.3053 8.94933 15.0493C8.69333 14.7933 8.37689 14.6657 8 14.6666C7.62222 14.6666 7.30533 14.7946 7.04933 15.0506C6.79333 15.3066 6.66578 15.6231 6.66667 16C6.66667 16.3777 6.79467 16.6946 7.05067 16.9506C7.30667 17.2066 7.62311 17.3342 8 17.3333ZM24 26.6666C24.3778 26.6666 24.6947 26.5386 24.9507 26.2826C25.2067 26.0266 25.3342 25.7102 25.3333 25.3333C25.3333 24.9555 25.2053 24.6386 24.9493 24.3826C24.6933 24.1266 24.3769 23.9991 24 24C23.6222 24 23.3053 24.128 23.0493 24.384C22.7933 24.64 22.6658 24.9564 22.6667 25.3333C22.6667 25.7111 22.7947 26.028 23.0507 26.284C23.3067 26.54 23.6231 26.6675 24 26.6666Z" fill="#A240FB"></path>
            </svg></div>
            <div class="heading-style-h6 adv-card-title">Sustainable</div>
            <div>Connect wherever you go. Your Blinq digital business card can be easily shared with anyone you meet even if they don’t have the app.</div>
        </div>
        <div id="w-node-_705e7080-5584-7590-aeb9-8c4d3b32cb73-ae446d21" class="adv-card">
            <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                <path d="M24 29.3333C22.8889 29.3333 21.9444 28.9444 21.1667 28.1666C20.3889 27.3888 20 26.4444 20 25.3333C20 25.1777 20.0111 25.0164 20.0333 24.8493C20.0556 24.6822 20.0889 24.5324 20.1333 24.4L10.7333 18.9333C10.3556 19.2666 9.93333 19.528 9.46667 19.7173C9 19.9066 8.51111 20.0008 8 20C6.88889 20 5.94444 19.6111 5.16667 18.8333C4.38889 18.0555 4 17.1111 4 16C4 14.8888 4.38889 13.9444 5.16667 13.1666C5.94444 12.3888 6.88889 12 8 12C8.51111 12 9 12.0946 9.46667 12.284C9.93333 12.4733 10.3556 12.7342 10.7333 13.0666L20.1333 7.59996C20.0889 7.46663 20.0556 7.31685 20.0333 7.15063C20.0111 6.9844 20 6.82307 20 6.66663C20 5.55551 20.3889 4.61107 21.1667 3.83329C21.9444 3.05551 22.8889 2.66663 24 2.66663C25.1111 2.66663 26.0556 3.05551 26.8333 3.83329C27.6111 4.61107 28 5.55551 28 6.66663C28 7.77774 27.6111 8.72218 26.8333 9.49996C26.0556 10.2777 25.1111 10.6666 24 10.6666C23.4889 10.6666 23 10.5724 22.5333 10.384C22.0667 10.1955 21.6444 9.93418 21.2667 9.59996L11.8667 15.0666C11.9111 15.2 11.9444 15.3502 11.9667 15.5173C11.9889 15.6844 12 15.8453 12 16C12 16.1555 11.9889 16.3168 11.9667 16.484C11.9444 16.6511 11.9111 16.8008 11.8667 16.9333L21.2667 22.4C21.6444 22.0666 22.0667 21.8057 22.5333 21.6173C23 21.4288 23.4889 21.3342 24 21.3333C25.1111 21.3333 26.0556 21.7222 26.8333 22.5C27.6111 23.2777 28 24.2222 28 25.3333C28 26.4444 27.6111 27.3888 26.8333 28.1666C26.0556 28.9444 25.1111 29.3333 24 29.3333ZM24 7.99996C24.3778 7.99996 24.6947 7.87196 24.9507 7.61596C25.2067 7.35996 25.3342 7.04351 25.3333 6.66663C25.3333 6.28885 25.2053 5.97196 24.9493 5.71596C24.6933 5.45996 24.3769 5.3324 24 5.33329C23.6222 5.33329 23.3053 5.46129 23.0493 5.71729C22.7933 5.97329 22.6658 6.28974 22.6667 6.66663C22.6667 7.0444 22.7947 7.36129 23.0507 7.61729C23.3067 7.87329 23.6231 8.00085 24 7.99996ZM8 17.3333C8.37778 17.3333 8.69467 17.2053 8.95067 16.9493C9.20667 16.6933 9.33422 16.3768 9.33333 16C9.33333 15.6222 9.20533 15.3053 8.94933 15.0493C8.69333 14.7933 8.37689 14.6657 8 14.6666C7.62222 14.6666 7.30533 14.7946 7.04933 15.0506C6.79333 15.3066 6.66578 15.6231 6.66667 16C6.66667 16.3777 6.79467 16.6946 7.05067 16.9506C7.30667 17.2066 7.62311 17.3342 8 17.3333ZM24 26.6666C24.3778 26.6666 24.6947 26.5386 24.9507 26.2826C25.2067 26.0266 25.3342 25.7102 25.3333 25.3333C25.3333 24.9555 25.2053 24.6386 24.9493 24.3826C24.6933 24.1266 24.3769 23.9991 24 24C23.6222 24 23.3053 24.128 23.0493 24.384C22.7933 24.64 22.6658 24.9564 22.6667 25.3333C22.6667 25.7111 22.7947 26.028 23.0507 26.284C23.3067 26.54 23.6231 26.6675 24 26.6666Z" fill="#A240FB"></path>
            </svg></div>
            <div class="heading-style-h6 adv-card-title">Sustainable</div>
            <div>Connect wherever you go. Your Blinq digital business card can be easily shared with anyone you meet even if they don’t have the app.</div>
        </div>
        <div id="w-node-c6bb3552-872e-1e7f-8626-e38266715630-ae446d21" class="adv-card">
            <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                <path d="M24 29.3333C22.8889 29.3333 21.9444 28.9444 21.1667 28.1666C20.3889 27.3888 20 26.4444 20 25.3333C20 25.1777 20.0111 25.0164 20.0333 24.8493C20.0556 24.6822 20.0889 24.5324 20.1333 24.4L10.7333 18.9333C10.3556 19.2666 9.93333 19.528 9.46667 19.7173C9 19.9066 8.51111 20.0008 8 20C6.88889 20 5.94444 19.6111 5.16667 18.8333C4.38889 18.0555 4 17.1111 4 16C4 14.8888 4.38889 13.9444 5.16667 13.1666C5.94444 12.3888 6.88889 12 8 12C8.51111 12 9 12.0946 9.46667 12.284C9.93333 12.4733 10.3556 12.7342 10.7333 13.0666L20.1333 7.59996C20.0889 7.46663 20.0556 7.31685 20.0333 7.15063C20.0111 6.9844 20 6.82307 20 6.66663C20 5.55551 20.3889 4.61107 21.1667 3.83329C21.9444 3.05551 22.8889 2.66663 24 2.66663C25.1111 2.66663 26.0556 3.05551 26.8333 3.83329C27.6111 4.61107 28 5.55551 28 6.66663C28 7.77774 27.6111 8.72218 26.8333 9.49996C26.0556 10.2777 25.1111 10.6666 24 10.6666C23.4889 10.6666 23 10.5724 22.5333 10.384C22.0667 10.1955 21.6444 9.93418 21.2667 9.59996L11.8667 15.0666C11.9111 15.2 11.9444 15.3502 11.9667 15.5173C11.9889 15.6844 12 15.8453 12 16C12 16.1555 11.9889 16.3168 11.9667 16.484C11.9444 16.6511 11.9111 16.8008 11.8667 16.9333L21.2667 22.4C21.6444 22.0666 22.0667 21.8057 22.5333 21.6173C23 21.4288 23.4889 21.3342 24 21.3333C25.1111 21.3333 26.0556 21.7222 26.8333 22.5C27.6111 23.2777 28 24.2222 28 25.3333C28 26.4444 27.6111 27.3888 26.8333 28.1666C26.0556 28.9444 25.1111 29.3333 24 29.3333ZM24 7.99996C24.3778 7.99996 24.6947 7.87196 24.9507 7.61596C25.2067 7.35996 25.3342 7.04351 25.3333 6.66663C25.3333 6.28885 25.2053 5.97196 24.9493 5.71596C24.6933 5.45996 24.3769 5.3324 24 5.33329C23.6222 5.33329 23.3053 5.46129 23.0493 5.71729C22.7933 5.97329 22.6658 6.28974 22.6667 6.66663C22.6667 7.0444 22.7947 7.36129 23.0507 7.61729C23.3067 7.87329 23.6231 8.00085 24 7.99996ZM8 17.3333C8.37778 17.3333 8.69467 17.2053 8.95067 16.9493C9.20667 16.6933 9.33422 16.3768 9.33333 16C9.33333 15.6222 9.20533 15.3053 8.94933 15.0493C8.69333 14.7933 8.37689 14.6657 8 14.6666C7.62222 14.6666 7.30533 14.7946 7.04933 15.0506C6.79333 15.3066 6.66578 15.6231 6.66667 16C6.66667 16.3777 6.79467 16.6946 7.05067 16.9506C7.30667 17.2066 7.62311 17.3342 8 17.3333ZM24 26.6666C24.3778 26.6666 24.6947 26.5386 24.9507 26.2826C25.2067 26.0266 25.3342 25.7102 25.3333 25.3333C25.3333 24.9555 25.2053 24.6386 24.9493 24.3826C24.6933 24.1266 24.3769 23.9991 24 24C23.6222 24 23.3053 24.128 23.0493 24.384C22.7933 24.64 22.6658 24.9564 22.6667 25.3333C22.6667 25.7111 22.7947 26.028 23.0507 26.284C23.3067 26.54 23.6231 26.6675 24 26.6666Z" fill="#A240FB"></path>
            </svg></div>
            <div class="heading-style-h6 adv-card-title">Sustainable</div>
            <div>Connect wherever you go. Your Blinq digital business card can be easily shared with anyone you meet even if they don’t have the app.</div>
        </div>
    </div>
    <div class="button-wrapper">
      <a href="#" class="button w-button">Explore our shop</a>
  </div>
  <div class="requirement-wrapper">
      <h3 class="bottom-24">Requirements</h3>
      <div class="requirement-list">
        <div class="requirement-richtext w-richtext">
          <ul role="list">
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</li>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            <li>consectetur adipiscing elit. Ut et massa mi.</li>
        </ul>
    </div>
</div>
</div>
</div>
</div>
</section>
<section class="section-order">
    <div class="padding-global">
      <div class="container-large">
        <div class="process-wrapper">
          <h3 class="max-507">Lorem ipsum dolor sit amet, <span class="purple-span">consectetur </span>adipiscing elit.</h3>
          <div class="path-wrapper">
            <div class="path-embed w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="842" height="233" viewbox="0 0 842 233" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 13.5V186.5C8.5 207.763 25.737 225 47 225H828.5V228H47C24.0802 228 5.5 209.42 5.5 186.5V13.5H8.5Z" fill="#A240FB"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7 11C9.20914 11 11 9.20914 11 7C11 4.79086 9.20914 3 7 3C4.79086 3 3 4.79086 3 7C3 9.20914 4.79086 11 7 11ZM7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14Z" fill="#A240FB"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M835 230C837.209 230 839 228.209 839 226C839 223.791 837.209 222 835 222C832.791 222 831 223.791 831 226C831 228.209 832.791 230 835 230ZM835 233C838.866 233 842 229.866 842 226C842 222.134 838.866 219 835 219C831.134 219 828 222.134 828 226C828 229.866 831.134 233 835 233Z" fill="#A240FB"></path>
            </svg></div>
            <div class="process-card">
              <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                  <path d="M7.99967 26.6666C6.88856 26.6666 5.94412 26.2778 5.16634 25.5C4.38856 24.7222 3.99967 23.7778 3.99967 22.6666H1.33301V7.99998C1.33301 7.26665 1.59434 6.63865 2.11701 6.11598C2.63967 5.59332 3.26723 5.33243 3.99967 5.33332H22.6663V10.6666H26.6663L30.6663 16V22.6666H27.9997C27.9997 23.7778 27.6108 24.7222 26.833 25.5C26.0552 26.2778 25.1108 26.6666 23.9997 26.6666C22.8886 26.6666 21.9441 26.2778 21.1663 25.5C20.3886 24.7222 19.9997 23.7778 19.9997 22.6666H11.9997C11.9997 23.7778 11.6108 24.7222 10.833 25.5C10.0552 26.2778 9.11079 26.6666 7.99967 26.6666ZM7.99967 24C8.37745 24 8.69434 23.872 8.95034 23.616C9.20634 23.36 9.3339 23.0435 9.33301 22.6666C9.33301 22.2889 9.20501 21.972 8.94901 21.716C8.69301 21.46 8.37656 21.3324 7.99967 21.3333C7.6219 21.3333 7.30501 21.4613 7.04901 21.7173C6.79301 21.9733 6.66545 22.2898 6.66634 22.6666C6.66634 23.0444 6.79434 23.3613 7.05034 23.6173C7.30634 23.8733 7.62279 24.0009 7.99967 24ZM3.99967 20H5.06634C5.44412 19.6 5.87745 19.2778 6.36634 19.0333C6.85523 18.7889 7.39967 18.6666 7.99967 18.6666C8.59967 18.6666 9.14412 18.7889 9.63301 19.0333C10.1219 19.2778 10.5552 19.6 10.933 20H19.9997V7.99998H3.99967V20ZM23.9997 24C24.3775 24 24.6943 23.872 24.9503 23.616C25.2063 23.36 25.3339 23.0435 25.333 22.6666C25.333 22.2889 25.205 21.972 24.949 21.716C24.693 21.46 24.3766 21.3324 23.9997 21.3333C23.6219 21.3333 23.305 21.4613 23.049 21.7173C22.793 21.9733 22.6655 22.2898 22.6663 22.6666C22.6663 23.0444 22.7943 23.3613 23.0503 23.6173C23.3063 23.8733 23.6228 24.0009 23.9997 24ZM22.6663 17.3333H28.333L25.333 13.3333H22.6663V17.3333Z" fill="#A240FB"></path>
              </svg></div>
              <div class="heading-style-h6 adv-card-title">Order</div>
              <div>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</div>
          </div>
          <div class="process-card top-67">
              <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewbox="0 0 33 32" fill="none">
                  <g clip-path="url(#clip0_299_5572)">
                    <path d="M29.6663 4H2.99967C1.54634 4.05333 0.386341 5.21333 0.333008 6.66667V25.3333C0.386341 26.7867 1.54634 27.9467 2.99967 28H29.6663C31.1197 27.9467 32.2797 26.7867 32.333 25.3333V6.66667C32.3085 5.96724 32.0196 5.30312 31.5248 4.80825C31.0299 4.31337 30.3658 4.02454 29.6663 4ZM29.6663 25.3333H2.99967V6.66667H29.6663V25.3333ZM18.9997 22.6667V21C18.9997 18.7867 14.5463 17.6667 12.333 17.6667C10.1197 17.6667 5.66634 18.7867 5.66634 21V22.6667H18.9997ZM12.333 9.33333C11.449 9.33333 10.6011 9.68452 9.97599 10.3096C9.35086 10.9348 8.99967 11.7826 8.99967 12.6667C8.99967 13.1044 9.08589 13.5379 9.25341 13.9423C9.42093 14.3467 9.66646 14.7142 9.97599 15.0237C10.6011 15.6488 11.449 16 12.333 16C12.7707 16 13.2042 15.9138 13.6086 15.7463C14.013 15.5787 14.3805 15.3332 14.69 15.0237C14.9996 14.7142 15.2451 14.3467 15.4126 13.9423C15.5801 13.5379 15.6663 13.1044 15.6663 12.6667C15.6663 12.2289 15.5801 11.7955 15.4126 11.3911C15.2451 10.9866 14.9996 10.6192 14.69 10.3096C14.3805 10.0001 14.013 9.75458 13.6086 9.58707C13.2042 9.41955 12.7707 9.33333 12.333 9.33333ZM18.9997 9.33333V10.6667H26.9997V9.33333H18.9997ZM18.9997 12V13.3333H26.9997V12H18.9997ZM18.9997 14.6667V16H24.333V14.6667H18.9997Z" fill="#A240FB"></path>
                </g>
                <defs>
                    <clippath id="clip0_299_5572">
                      <rect width="32" height="32" fill="white" transform="translate(0.333008)"></rect>
                  </clippath>
              </defs>
          </svg></div>
          <div class="heading-style-h6 adv-card-title">Sustainable</div>
          <div>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</div>
      </div>
      <div class="process-card">
          <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewbox="0 0 33 32" fill="none">
              <path d="M20.6667 5.33331C19.2522 5.33331 17.8956 5.89522 16.8954 6.89541C15.8952 7.8956 15.3333 9.25216 15.3333 10.6666C15.3333 12.0811 15.8952 13.4377 16.8954 14.4379C17.8956 15.4381 19.2522 16 20.6667 16C22.0812 16 23.4377 15.4381 24.4379 14.4379C25.4381 13.4377 26 12.0811 26 10.6666C26 9.25216 25.4381 7.8956 24.4379 6.89541C23.4377 5.89522 22.0812 5.33331 20.6667 5.33331ZM20.6667 7.86665C21.0344 7.86665 21.3985 7.93907 21.7382 8.07978C22.0779 8.2205 22.3866 8.42674 22.6466 8.68675C22.9066 8.94675 23.1128 9.25542 23.2535 9.59513C23.3942 9.93484 23.4667 10.2989 23.4667 10.6666C23.4667 11.0343 23.3942 11.3984 23.2535 11.7382C23.1128 12.0779 22.9066 12.3865 22.6466 12.6465C22.3866 12.9065 22.0779 13.1128 21.7382 13.2535C21.3985 13.3942 21.0344 13.4666 20.6667 13.4666C20.299 13.4666 19.9349 13.3942 19.5952 13.2535C19.2554 13.1128 18.9468 12.9065 18.6868 12.6465C18.4268 12.3865 18.2205 12.0779 18.0798 11.7382C17.9391 11.3984 17.8667 11.0343 17.8667 10.6666C17.8667 9.92404 18.1617 9.21185 18.6868 8.68675C19.2119 8.16165 19.9241 7.86665 20.6667 7.86665ZM6 9.33331V13.3333H2V16H6V20H8.66667V16H12.6667V13.3333H8.66667V9.33331H6ZM20.6667 17.3333C17.1067 17.3333 10 19.1066 10 22.6666V26.6666H31.3333V22.6666C31.3333 19.1066 24.2267 17.3333 20.6667 17.3333ZM20.6667 19.8666C24.6267 19.8666 28.8 21.8133 28.8 22.6666V24.1333H12.5333V22.6666C12.5333 21.8133 16.6667 19.8666 20.6667 19.8666Z" fill="#A240FB"></path>
          </svg></div>
          <div class="heading-style-h6 adv-card-title">Sustainable</div>
          <div>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</div>
      </div>
      <div class="process-card top-67">
          <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
              <rect x="1.5" y="8.5" width="29" height="15" rx="7.5" stroke="#A240FB" stroke-width="3"></rect>
              <circle cx="23" cy="16" r="5" fill="#A240FB"></circle>
          </svg></div>
          <div class="heading-style-h6 adv-card-title">Sustainable</div>
          <div>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</div>
      </div>
  </div>
</div>
</div>
</div>
</section>
<section class="section-custom">
    <div class="padding-global">
      <div class="container-large">
        <div class="custom-cotent-wrapper">
          <h3>Customized card that fits for you</h3>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
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