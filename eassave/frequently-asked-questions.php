<?php
$root = $_SERVER['DOCUMENT_ROOT'];
?>


<!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="665f147b743ba95cae446d1c" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Frequently Asked Questions | Eassave</title>
  <meta content="Frequently Asked Questions | Eassave" property="og:title">
  <meta content="Frequently Asked Questions | Eassave" property="twitter:title">
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
            <h1 class="header-text opacity-3">Got Questions?</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text">Got Questions?</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text opacity-3">Got Questions?</h1>
        </div>
        <div class="moving-container">
            <h1 class="header-text">Got Questions?</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text opacity-3">Got Questions?</h1><img src="images/moving-element.svg" loading="lazy" alt="">
            <h1 class="header-text">Got Questions?</h1>
        </div>
    </div>
    <div class="header-grid">
      <div id="w-node-_9d0fe101-4d3f-3e10-da33-62c008e64f5a-ae446d1c" class="header-content-wrapper">
        <div class="header-text mobile-header-text">Get in Touch</div>
        <div class="header-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla.</div>
        <a href="#contact-form" class="arrow-con w-inline-block">
          <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="21" viewbox="0 0 15 21" fill="currentColor">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.121763 13.0766C1.90948 13.2405 5.25533 14.4241 6.93587 17.7439L7.21804 0.015026L8.21793 3.59217e-07L7.93577 17.7276C9.723 14.3566 13.1075 13.0722 14.9011 12.8545L14.9912 13.8472C13.0127 14.0873 8.82309 15.8137 7.93407 20.7803L7.44211 20.707L7.33426 20.7087L6.83972 20.7967C6.10842 15.8545 1.97179 14.2532 -6.15128e-07 14.0725L0.121763 13.0766Z" fill="currentColor"></path>
          </svg></div>
      </a>
  </div><img src="images/contact-header-img.png" loading="eager" id="w-node-ffaaef76-370d-748f-9798-2fbf04182aee-ae446d1c" alt="" class="header-img">
</div>
</div>
</div>
<div class="spacer"></div>
</section>
<section id="contact-form" class="section-faq">
    <div class="padding-global">
      <div class="container-large"></div>
  </div>
  <div class="padding-global">
      <div class="container-large">
        <div class="faq-grid">
          <div id="w-node-f4d58380-2ac0-723d-9c97-4b185d1b0e1b-ae446d1c" class="filter-wrapper">
            <div class="filter-form-block w-form">
              <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" data-wf-page-id="665f147b743ba95cae446d1c" data-wf-element-id="c7891a81-ee92-a8ff-bbd3-2ac3095f47a6">
                <div class="search-wrapper"><input class="text-field w-input" maxlength="256" name="Search" data-name="Search" placeholder="Search" type="text" id="Search"><img src="images/search.svg" loading="lazy" alt="" class="search-icon"></div>
            </form>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div>
        <div class="filter-by-wrapper">
          <div class="text-size-large">Filter by</div>
          <div class="filter-btn-wrapper">
            <a href="#" class="filter-btn">Products and Services</a>
            <a href="#" class="filter-btn">Payment</a>
            <a href="#" class="filter-btn">Shipping</a>
            <a href="#" class="filter-btn">Corporate</a>
        </div>
    </div>
</div>
<div id="w-node-_947d31b2-0d0f-c1b6-4355-cc392c155e79-ae446d1c" class="faq-wrapper">
    <div class="faq-item-wrapper">
      <div class="heading-style-h6">Products and Services</div>
      <div class="faq-list">
        <div data-hover="false" data-delay="500" data-w-id="96695519-94f5-66ee-0162-10a3250f1cf7" class="dropdown w-dropdown">
          <div class="dropdown-toggle w-dropdown-toggle">
            <div>How does this work ?</div>
            <div class="accordion-wrapper">
              <div class="top-line"></div>
              <div class="bot-line"></div>
          </div>
      </div>
      <nav class="dropdown-list relative-list w-dropdown-list">
        <div class="dropdown-wrapper">
          <div class="w-richtext">
            <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
        </div>
    </div>
</nav>
</div>
<div data-hover="false" data-delay="500" data-w-id="d31612ae-5e5a-00cc-1c2d-ce910f5ecfea" class="dropdown w-dropdown">
  <div class="dropdown-toggle w-dropdown-toggle">
    <div>How is this better than a traditional name card ?</div>
    <div class="accordion-wrapper">
      <div class="top-line"></div>
      <div class="bot-line"></div>
  </div>
</div>
<nav class="dropdown-list relative-list w-dropdown-list">
    <div class="dropdown-wrapper">
      <div class="w-richtext">
        <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
    </div>
</div>
</nav>
</div>
<div data-hover="false" data-delay="500" data-w-id="5cb0fdc1-b46d-713a-a4d9-028b32339202" class="dropdown w-dropdown">
  <div class="dropdown-toggle w-dropdown-toggle">
    <div>What can I display on my profile ?</div>
    <div class="accordion-wrapper">
      <div class="top-line"></div>
      <div class="bot-line"></div>
  </div>
</div>
<nav class="dropdown-list relative-list w-dropdown-list">
    <div class="dropdown-wrapper">
      <div class="w-richtext">
        <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
    </div>
</div>
</nav>
</div>
</div>
</div>
<div class="faq-item-wrapper">
  <div class="heading-style-h6">Payment</div>
  <div class="faq-list">
    <div data-hover="false" data-delay="500" data-w-id="9e0081a6-6ad1-883b-d1d3-e79bed667c81" class="dropdown w-dropdown">
      <div class="dropdown-toggle w-dropdown-toggle">
        <div>How does the pricing work ?</div>
        <div class="accordion-wrapper">
          <div class="top-line"></div>
          <div class="bot-line"></div>
      </div>
  </div>
  <nav class="dropdown-list relative-list w-dropdown-list">
    <div class="dropdown-wrapper">
      <div class="w-richtext">
        <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
    </div>
</div>
</nav>
</div>
<div data-hover="false" data-delay="500" data-w-id="9e0081a6-6ad1-883b-d1d3-e79bed667c8d" class="dropdown w-dropdown">
  <div class="dropdown-toggle w-dropdown-toggle">
    <div>Is this a one-time fee ?</div>
    <div class="accordion-wrapper">
      <div class="top-line"></div>
      <div class="bot-line"></div>
  </div>
</div>
<nav class="dropdown-list relative-list w-dropdown-list">
    <div class="dropdown-wrapper">
      <div class="w-richtext">
        <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
    </div>
</div>
</nav>
</div>
<div data-hover="false" data-delay="500" data-w-id="9e0081a6-6ad1-883b-d1d3-e79bed667c99" class="dropdown w-dropdown">
  <div class="dropdown-toggle w-dropdown-toggle">
    <div>Are there any hidden fees?</div>
    <div class="accordion-wrapper">
      <div class="top-line"></div>
      <div class="bot-line"></div>
  </div>
</div>
<nav class="dropdown-list relative-list w-dropdown-list">
    <div class="dropdown-wrapper">
      <div class="w-richtext">
        <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
    </div>
</div>
</nav>
</div>
</div>
</div>
<div class="faq-item-wrapper">
  <div class="heading-style-h6">Shipping</div>
  <div class="faq-list">
    <div data-hover="false" data-delay="500" data-w-id="89f3dbcf-0ff8-cde3-3922-18792cfb8ec3" class="dropdown w-dropdown">
      <div class="dropdown-toggle w-dropdown-toggle">
        <div>How long does the delivery take?</div>
        <div class="accordion-wrapper">
          <div class="top-line"></div>
          <div class="bot-line"></div>
      </div>
  </div>
  <nav class="dropdown-list relative-list w-dropdown-list">
    <div class="dropdown-wrapper">
      <div class="w-richtext">
        <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
    </div>
</div>
</nav>
</div>
<div data-hover="false" data-delay="500" data-w-id="89f3dbcf-0ff8-cde3-3922-18792cfb8ecf" class="dropdown w-dropdown">
  <div class="dropdown-toggle w-dropdown-toggle">
    <div>Which countries do you ship to?</div>
    <div class="accordion-wrapper">
      <div class="top-line"></div>
      <div class="bot-line"></div>
  </div>
</div>
<nav class="dropdown-list relative-list w-dropdown-list">
    <div class="dropdown-wrapper">
      <div class="w-richtext">
        <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
    </div>
</div>
</nav>
</div>
<div data-hover="false" data-delay="500" data-w-id="89f3dbcf-0ff8-cde3-3922-18792cfb8edb" class="dropdown w-dropdown">
  <div class="dropdown-toggle w-dropdown-toggle">
    <div>What if my shipment goes missing?</div>
    <div class="accordion-wrapper">
      <div class="top-line"></div>
      <div class="bot-line"></div>
  </div>
</div>
<nav class="dropdown-list relative-list w-dropdown-list">
    <div class="dropdown-wrapper">
      <div class="w-richtext">
        <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
    </div>
</div>
</nav>
</div>
</div>
</div>
<div class="faq-item-wrapper">
  <div class="heading-style-h6">Corporate</div>
  <div class="faq-list">
    <div data-hover="false" data-delay="500" data-w-id="10687e8c-86f2-a91c-0510-0a077e9292dc" class="dropdown w-dropdown">
      <div class="dropdown-toggle w-dropdown-toggle">
        <div>Do you accept bulk orders?</div>
        <div class="accordion-wrapper">
          <div class="top-line"></div>
          <div class="bot-line"></div>
      </div>
  </div>
  <nav class="dropdown-list relative-list w-dropdown-list">
    <div class="dropdown-wrapper">
      <div class="w-richtext">
        <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
    </div>
</div>
</nav>
</div>
<div data-hover="false" data-delay="500" data-w-id="10687e8c-86f2-a91c-0510-0a077e9292e8" class="dropdown w-dropdown">
  <div class="dropdown-toggle w-dropdown-toggle">
    <div>Are there corporates rates provided?</div>
    <div class="accordion-wrapper">
      <div class="top-line"></div>
      <div class="bot-line"></div>
  </div>
</div>
<nav class="dropdown-list relative-list w-dropdown-list">
    <div class="dropdown-wrapper">
      <div class="w-richtext">
        <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
    </div>
</div>
</nav>
</div>
<div data-hover="false" data-delay="500" data-w-id="10687e8c-86f2-a91c-0510-0a077e9292f4" class="dropdown w-dropdown">
  <div class="dropdown-toggle w-dropdown-toggle">
    <div>How can I get a pricing quotation?</div>
    <div class="accordion-wrapper">
      <div class="top-line"></div>
      <div class="bot-line"></div>
  </div>
</div>
<nav class="dropdown-list relative-list w-dropdown-list">
    <div class="dropdown-wrapper">
      <div class="w-richtext">
        <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
    </div>
</div>
</nav>
</div>
</div>
</div>
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