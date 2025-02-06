<?php
$root = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="665f147b743ba95cae446d3d" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Shop</title>
  <meta content="Shop" property="og:title">
  <meta content="Shop" property="twitter:title">
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
  <!--  Swiper CSS  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <!--  Swiper JS  -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
  <div class="page-wrapper">
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

  

  <section class="section-shop">
    <div class="padding-global">
      <div class="container-large">
        <div class="shop-title-wrapper">
          <div class="shop-bread-crumbs-wrappr">
            <div class="bread-crumbs-container">
              <a href="#" class="breadcrumbs">Home</a><img src="images/bi_chevron-down.svg" loading="lazy" alt="">
              <a href="shop.html" aria-current="page" class="breadcrumbs w--current">Shop</a>
          </div>
      </div>
      <div class="sort-wrapper">
        <h1 class="heading-style-h5">Get your card today!</h1>
        <div class="sort-container">
          <div>Sort by:</div>
          <div class="form-block-2 w-form">
            <form id="wf-form-Sort-By" name="wf-form-Sort-By" data-name="Sort By" method="get" data-wf-page-id="665f147b743ba95cae446d3d" data-wf-element-id="4caa369c-8bef-9795-cc90-eccc56280dca">
              <div class="select-wrapper"><select id="sort-by" name="sort-by" data-name="sort-by" class="select-field w-select">
                  <option value="">Most Popular</option>
                  <option value="First">First choice</option>
                  <option value="Second">Second choice</option>
                  <option value="Third">Third choice</option>
              </select><img loading="lazy" src="images/down.svg" alt="" class="select-icon"></div>
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
</div>
<div class="shop-grid">
  <div class="sticky-link-wrapper">
    <div class="shop-filter-title">Products</div>
    <div class="link-wrapper">
      <a href="#" class="link current">Cards</a>
      <a href="#" class="link">Customize your card</a>
      <a href="cards/card-scans.html" class="link">Card Scans</a>
  </div>
  <div class="search-filter">
      <div class="shop-filter-title">Search Filter</div>
      <div class="filter-container">
        <div data-hover="false" data-delay="500" data-w-id="7c32500e-b8cd-bff2-a5b2-8f145d3806a3" class="dropdown search-dropdown w-dropdown">
          <div class="dropdown-toggle search-toggle w-dropdown-toggle">
            <div>Card Category</div>
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
<div data-hover="false" data-delay="500" data-w-id="7c32500e-b8cd-bff2-a5b2-8f145d3806af" class="dropdown search-dropdown w-dropdown">
  <div class="dropdown-toggle search-toggle w-dropdown-toggle">
    <div>Card Materials</div>
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
<div data-hover="false" data-delay="500" data-w-id="7c32500e-b8cd-bff2-a5b2-8f145d3806bb" class="dropdown search-dropdown w-dropdown">
  <div class="dropdown-toggle search-toggle w-dropdown-toggle">
    <div>Card Finish</div>
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
<div data-hover="false" data-delay="500" data-w-id="7c32500e-b8cd-bff2-a5b2-8f145d3806c7" class="dropdown search-dropdown w-dropdown">
  <div class="dropdown-toggle search-toggle w-dropdown-toggle">
    <div>Orientation</div>
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
<div id="w-node-_16f569e4-9907-2073-d95a-fa049fa60384-ae446d3d" class="shop-container">
    <div class="shop-list">
      <div id="w-node-_46651eed-624e-342a-b46a-61425e68d73a-ae446d3d" class="scan-card green-bg-card">
        <div class="plan-wrapper">
          <div class="scan-plan-title-wrapper">
            <div class="icon-plan-wrapper">
              <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                  <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="#19A733" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M20.5899 22C20.5899 18.13 16.7399 15 11.9999 15C7.25991 15 3.40991 18.13 3.40991 22" stroke="#19A733" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></div>
              <div>Starter Plan</div>
          </div>
          <div class="scan-price green-price">₱1500</div>
          <div class="bot-10">1000 card scans</div>
          <div class="scan-line green-line"></div>
      </div>
      <div class="rich-text-block w-richtext">
        <ul role="list" class="list">
          <li>Perfect for freelancers</li>
          <li>Networking events</li>
          <li>1000 scans for 15 days</li>
      </ul>
  </div>
</div>
<a href="shop/cart.html" class="button button-black">Add to cart</a>
</div>
<div id="w-node-_132ee087-e401-c793-9132-5fe5f98ae48b-ae446d3d" class="scan-card violet-bg-card">
    <div class="plan-wrapper">
      <div class="scan-plan-title-wrapper">
        <div class="icon-plan-wrapper">
          <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
              <path d="M9.16006 10.87C9.06006 10.86 8.94006 10.86 8.83006 10.87C6.45006 10.79 4.56006 8.84 4.56006 6.44C4.56006 3.99 6.54006 2 9.00006 2C11.4501 2 13.4401 3.99 13.4401 6.44C13.4301 8.84 11.5401 10.79 9.16006 10.87Z" stroke="#0A4DF6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M16.41 4C18.35 4 19.91 5.57 19.91 7.5C19.91 9.39 18.41 10.93 16.54 11C16.46 10.99 16.37 10.99 16.28 11" stroke="#0A4DF6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M4.15997 14.56C1.73997 16.18 1.73997 18.82 4.15997 20.43C6.90997 22.27 11.42 22.27 14.17 20.43C16.59 18.81 16.59 16.17 14.17 14.56C11.43 12.73 6.91997 12.73 4.15997 14.56Z" stroke="#0A4DF6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M18.34 20C19.06 19.85 19.74 19.56 20.3 19.13C21.86 17.96 21.86 16.03 20.3 14.86C19.75 14.44 19.08 14.16 18.37 14" stroke="#0A4DF6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg></div>
          <div>Team Plan</div>
      </div>
      <div class="scan-price purple-price">₱4,500</div>
      <div class="bot-10">3000 card scans</div>
      <div class="scan-line green-line"></div>
  </div>
  <div class="rich-text-block w-richtext">
    <ul role="list" class="list">
      <li>Perfect for freelancers</li>
      <li>Networking events</li>
      <li>1000 scans for 15 days</li>
  </ul>
</div>
</div>
<a href="shop/cart.html" class="button button-black">Add to cart</a>
</div>
<div id="w-node-_309c0adf-2ea3-9007-33c2-da1d777b3c1e-ae446d3d" class="scan-card yellow-bg-card">
    <div class="plan-wrapper">
      <div class="scan-plan-title-wrapper">
        <div class="icon-plan-wrapper">
          <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
              <path d="M13 22H5C3 22 2 21 2 19V11C2 9 3 8 5 8H10V19C10 21 11 22 13 22Z" stroke="#F5A407" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M10.11 4C10.03 4.3 10 4.63 10 5V8H5V6C5 4.9 5.9 4 7 4H10.11Z" stroke="#F5A407" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M14 8V13" stroke="#F5A407" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M18 8V13" stroke="#F5A407" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M17 17H15C14.45 17 14 17.45 14 18V22H18V18C18 17.45 17.55 17 17 17Z" stroke="#F5A407" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M6 13V17" stroke="#F5A407" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M10 19V5C10 3 11 2 13 2H19C21 2 22 3 22 5V19C22 21 21 22 19 22H13C11 22 10 21 10 19Z" stroke="#F5A407" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg></div>
          <div>Starter Plan</div>
      </div>
      <div class="scan-price yellow-price">₱8,500</div>
      <div class="bot-10">5500 card scans</div>
      <div class="scan-line green-line"></div>
  </div>
  <div class="rich-text-block w-richtext">
    <ul role="list" class="list">
      <li>Perfect for freelancers</li>
      <li>Networking events</li>
      <li>1000 scans for 15 days</li>
  </ul>
</div>
</div>
<a href="shop/cart.html" class="button button-black">Add to cart</a>
</div>
<a href="shop/cart.html" class="shop-card w-inline-block">
    <div class="shop-img-wrapper"><img src="images/Card-Blue.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 35vw, (max-width: 991px) 16vw, 18vw" srcset="images/Card-Blue-p-500.png 500w, images/Card-Blue.png 934w" alt=""></div>
    <div class="color-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#367CFF"></rect>
      </svg></div>
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#D71B1B"></rect>
      </svg></div>
  </div>
  <div class="heading-style-h6">Marker</div>
  <div class="price">₱15,000</div>
</a>
<a id="w-node-fa0c9c42-ec61-bf62-a618-fb36ffa95b99-ae446d3d" href="#" class="shop-card w-inline-block">
    <div class="shop-img-wrapper"><img src="images/Card-Blue.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 35vw, (max-width: 991px) 16vw, 18vw" srcset="images/Card-Blue-p-500.png 500w, images/Card-Blue.png 934w" alt=""></div>
    <div class="color-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#367CFF"></rect>
      </svg></div>
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#D71B1B"></rect>
      </svg></div>
  </div>
  <div class="heading-style-h6">Marker</div>
  <div class="price">₱15,000</div>
</a>
<a id="w-node-_1d613431-9899-7ffd-2d81-69b33e09aa6e-ae446d3d" href="#" class="shop-card w-inline-block">
    <div class="shop-img-wrapper"><img src="images/Card-Blue.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 35vw, (max-width: 991px) 16vw, 18vw" srcset="images/Card-Blue-p-500.png 500w, images/Card-Blue.png 934w" alt=""></div>
    <div class="color-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#367CFF"></rect>
      </svg></div>
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#D71B1B"></rect>
      </svg></div>
  </div>
  <div class="heading-style-h6">Marker</div>
  <div class="price">₱15,000</div>
</a>
<a id="w-node-c1c7ad08-03ab-47c3-56e5-948cffe11e85-ae446d3d" href="#" class="shop-card w-inline-block">
    <div class="shop-img-wrapper"><img src="images/Card-Blue.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 35vw, (max-width: 991px) 16vw, 18vw" srcset="images/Card-Blue-p-500.png 500w, images/Card-Blue.png 934w" alt=""></div>
    <div class="color-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#367CFF"></rect>
      </svg></div>
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#D71B1B"></rect>
      </svg></div>
  </div>
  <div class="heading-style-h6">Marker</div>
  <div class="price">₱15,000</div>
</a>
<a id="w-node-_759de4ad-8861-aa37-7c6c-f2f4ec41dc51-ae446d3d" href="#" class="shop-card w-inline-block">
    <div class="shop-img-wrapper"><img src="images/Card-Blue.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 35vw, (max-width: 991px) 16vw, 18vw" srcset="images/Card-Blue-p-500.png 500w, images/Card-Blue.png 934w" alt=""></div>
    <div class="color-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#367CFF"></rect>
      </svg></div>
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#D71B1B"></rect>
      </svg></div>
  </div>
  <div class="heading-style-h6">Marker</div>
  <div class="price">₱15,000</div>
</a>
<a id="w-node-_1df4e56a-1f0d-02cf-0a91-1bbfb308a273-ae446d3d" href="#" class="shop-card w-inline-block">
    <div class="shop-img-wrapper"><img src="images/Card-Blue.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 35vw, (max-width: 991px) 16vw, 18vw" srcset="images/Card-Blue-p-500.png 500w, images/Card-Blue.png 934w" alt=""></div>
    <div class="color-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#367CFF"></rect>
      </svg></div>
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#D71B1B"></rect>
      </svg></div>
  </div>
  <div class="heading-style-h6">Marker</div>
  <div class="price">₱15,000</div>
</a>
<a id="w-node-_39f54013-a776-d3f9-e8b3-83089183013c-ae446d3d" href="#" class="shop-card w-inline-block">
    <div class="shop-img-wrapper"><img src="images/Card-Blue.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 35vw, (max-width: 991px) 16vw, 18vw" srcset="images/Card-Blue-p-500.png 500w, images/Card-Blue.png 934w" alt=""></div>
    <div class="color-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#367CFF"></rect>
      </svg></div>
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#D71B1B"></rect>
      </svg></div>
  </div>
  <div class="heading-style-h6">Marker</div>
  <div class="price">₱15,000</div>
</a>
<a id="w-node-_67f720c5-3d5c-919c-b669-4a7aa3bd81f0-ae446d3d" href="#" class="shop-card w-inline-block">
    <div class="shop-img-wrapper"><img src="images/Card-Blue.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 35vw, (max-width: 991px) 16vw, 18vw" srcset="images/Card-Blue-p-500.png 500w, images/Card-Blue.png 934w" alt=""></div>
    <div class="color-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#367CFF"></rect>
      </svg></div>
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#D71B1B"></rect>
      </svg></div>
  </div>
  <div class="heading-style-h6">Marker</div>
  <div class="price">₱15,000</div>
</a>
<a id="w-node-_81c67a66-04f2-1245-a159-f0cc07d9473f-ae446d3d" href="#" class="shop-card w-inline-block">
    <div class="shop-img-wrapper"><img src="images/Card-Blue.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 35vw, (max-width: 991px) 16vw, 18vw" srcset="images/Card-Blue-p-500.png 500w, images/Card-Blue.png 934w" alt=""></div>
    <div class="color-wrapper">
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#367CFF"></rect>
      </svg></div>
      <div class="icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
          <rect width="24" height="24" fill="#D71B1B"></rect>
      </svg></div>
  </div>
  <div class="heading-style-h6">Marker</div>
  <div class="price">₱15,000</div>
</a>
</div>
</div>
<div id="w-node-_57ab25cb-5387-6917-cce6-4d6a7f2c6322-ae446d3d" class="shop-cta-wrapper">
    <div class="cta-container">
      <h4>Customize your card now!</h4>
      <div class="cta-excerpt">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
      <a data-w-id="57ab25cb-5387-6917-cce6-4d6a7f2c6328" href="#" class="button is-icon w-inline-block">
        <div class="btn-text">Start customizing now</div>
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