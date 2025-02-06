<?php
$root = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="665f147b743ba95cae446d54" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Activate Card</title>
  <meta content="Activate Card" property="og:title">
  <meta content="Activate Card" property="twitter:title">

  <base href="../" /> <!--Use this to locate the right path -->

  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href=".../../css/normalize.css" rel="stylesheet" type="text/css">
  <link href=".../../css/webflow.css" rel="stylesheet" type="text/css">
  <link href=".../../css/eassave-v2.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Epilogue:300,regular,500,600,700,900","Inter:100,200,300,regular,500,600,700,800,900"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href=".../../images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href=".../../images/webclip.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>
<body>
  <div class="page-wrapper auth-bg">
    <div class="main-wrapper bg-gradient-black">
      <div class="global-styles w-embed">

<!-- Global CSS -->
<?php include '../partials/global-css.css'; ?>

</div>

<!-- Navigation -->
<?php include '../partials/navigation-dark.html'; ?>


<section id="contact-form" class="section-auth">
    <div class="padding-global">
      <div class="container-large">
        <div class="auth-wrapper">
          <div id="w-node-_6781a2ad-69e0-0135-a3da-b0405a444611-ae446d54" class="auth-form-block w-form">
            <form id="wf-form-Login-Form" name="wf-form-Login-Form" data-name="Login Form" method="get" data-wf-page-id="665f147b743ba95cae446d54" data-wf-element-id="6781a2ad-69e0-0135-a3da-b0405a444612">
              <h1 class="heading-style-h5">Activate Card</h1>
              <div class="form-excerpt">Enter you serial number &amp; login code to continue</div>
              <div class="login-grid bot-none">
                <div class="field-wrapper"><input class="text-field transparent-text-field w-input" maxlength="256" name="Serial-Number" data-name="Serial Number" placeholder="Serial Number" type="text" id="Serial-Number" required=""></div>
                <div class="field-wrapper icon-field-wrapper"><input class="text-field transparent-text-field w-input" maxlength="256" name="Login-Code" data-name="Login Code" placeholder="Login Code" type="text" id="Login-Code" required=""></div>
                <div id="w-node-de69ede3-213b-09f7-1072-4a12ac329d2d-ae446d54" class="remember-wrapper"><label class="w-checkbox checkbox-field">
                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="cart-check-label w-form-label" for="checkbox-2">I have an existing account</span>
                </label></div>
                <a data-w-id="6781a2ad-69e0-0135-a3da-b0405a444638" href="#" class="button is-icon max-button-width w-inline-block">
                  <div class="btn-text">Activate Card and Login</div>
                  <div class="icon-1x1-small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.32481 1.89973C5.86086 2.62911 7.23527 3.75138 9.13918 3.69086L1.16196 8.29651L1.44768 8.79138L9.42395 4.18628C8.42036 5.80457 8.70502 7.5554 9.06858 8.38414L9.59187 8.15458C9.19323 7.24586 8.893 4.99296 10.9407 3.33777L10.7588 3.11272L10.7351 3.07171L10.6311 2.80164C8.17386 3.74738 6.37291 2.36093 5.78526 1.56133L5.32481 1.89973Z" fill="white"></path>
                  </svg></div>
                  <div class="button-overlay pointer-events-off"></div><input type="submit" data-wait="" class="submit-btn w-button" value="">
              </a>
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
</div>
</section>
 

 <!-- Footer section -->
<?php include  '../partials/footer-dark.html'; ?>

</div>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=665f147b743ba95cae446cfe" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src=".../../js/webflow.js" type="text/javascript"></script>
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