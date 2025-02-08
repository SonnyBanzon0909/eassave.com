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
<html data-wf-page="665f147b743ba95cae446d20" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Feedback</title>
  <meta content="Feedback" property="og:title">
  <meta content="Feedback" property="twitter:title">
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
    <div class="main-wrapper bg-gradient-black">
      <div class="global-styles w-embed">

        
       <!-- Navigation -->
       <?php include 'partials/global-css.css'; ?>

       
     </div>

     <!-- Navigation -->
     <?php include 'partials/navigation-dark.html'; ?>



     <section class="section-feedback">
      <div class="padding-global">
        <div class="container-large">
          <div class="feedback-form-block w-form">
            <form id="wf-form-review-form" name="wf-form-review-form" data-name="review-form" method="get" data-wf-page-id="665f147b743ba95cae446d20" data-wf-element-id="3b0d117b-7cac-6118-fa80-df26e46ea3b4">
              <div class="form-title-wrapper">
                <h5>Help us improve 👋</h5>
                <div>Your opinion matters. Let us know your thoughts.</div>
              </div>
              <div class="star-con-wrapper">
                <div>How likely are you to recommend Eassave digital business card to others?</div>
                <div class="star-clickable-container">
                  <div class="star-clickable-wrapper">
                    <div class="star-clickable star-clicked w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
                      <path d="M27.4598 7.02003L30.9798 14.06C31.4598 15.04 32.7398 15.98 33.8198 16.16L40.1998 17.22C44.2798 17.9 45.2398 20.86 42.2998 23.78L37.3398 28.74C36.4998 29.58 36.0398 31.2 36.2998 32.36L37.7198 38.5C38.8398 43.36 36.2598 45.24 31.9598 42.7L25.9798 39.16C24.8998 38.52 23.1198 38.52 22.0198 39.16L16.0398 42.7C11.7598 45.24 9.15982 43.34 10.2798 38.5L11.6998 32.36C11.9598 31.2 11.4998 29.58 10.6598 28.74L5.69982 23.78C2.77982 20.86 3.71982 17.9 7.79982 17.22L14.1798 16.16C15.2398 15.98 16.5198 15.04 16.9998 14.06L20.5198 7.02003C22.4398 3.20003 25.5598 3.20003 27.4598 7.02003Z" fill="currentColor"></path>
                    </svg></div>
                    <div class="star-clickable w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
                      <path d="M27.4598 7.02003L30.9798 14.06C31.4598 15.04 32.7398 15.98 33.8198 16.16L40.1998 17.22C44.2798 17.9 45.2398 20.86 42.2998 23.78L37.3398 28.74C36.4998 29.58 36.0398 31.2 36.2998 32.36L37.7198 38.5C38.8398 43.36 36.2598 45.24 31.9598 42.7L25.9798 39.16C24.8998 38.52 23.1198 38.52 22.0198 39.16L16.0398 42.7C11.7598 45.24 9.15982 43.34 10.2798 38.5L11.6998 32.36C11.9598 31.2 11.4998 29.58 10.6598 28.74L5.69982 23.78C2.77982 20.86 3.71982 17.9 7.79982 17.22L14.1798 16.16C15.2398 15.98 16.5198 15.04 16.9998 14.06L20.5198 7.02003C22.4398 3.20003 25.5598 3.20003 27.4598 7.02003Z" fill="currentColor"></path>
                    </svg></div>
                    <div class="star-clickable w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
                      <path d="M27.4598 7.02003L30.9798 14.06C31.4598 15.04 32.7398 15.98 33.8198 16.16L40.1998 17.22C44.2798 17.9 45.2398 20.86 42.2998 23.78L37.3398 28.74C36.4998 29.58 36.0398 31.2 36.2998 32.36L37.7198 38.5C38.8398 43.36 36.2598 45.24 31.9598 42.7L25.9798 39.16C24.8998 38.52 23.1198 38.52 22.0198 39.16L16.0398 42.7C11.7598 45.24 9.15982 43.34 10.2798 38.5L11.6998 32.36C11.9598 31.2 11.4998 29.58 10.6598 28.74L5.69982 23.78C2.77982 20.86 3.71982 17.9 7.79982 17.22L14.1798 16.16C15.2398 15.98 16.5198 15.04 16.9998 14.06L20.5198 7.02003C22.4398 3.20003 25.5598 3.20003 27.4598 7.02003Z" fill="currentColor"></path>
                    </svg></div>
                    <div class="star-clickable w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
                      <path d="M27.4598 7.02003L30.9798 14.06C31.4598 15.04 32.7398 15.98 33.8198 16.16L40.1998 17.22C44.2798 17.9 45.2398 20.86 42.2998 23.78L37.3398 28.74C36.4998 29.58 36.0398 31.2 36.2998 32.36L37.7198 38.5C38.8398 43.36 36.2598 45.24 31.9598 42.7L25.9798 39.16C24.8998 38.52 23.1198 38.52 22.0198 39.16L16.0398 42.7C11.7598 45.24 9.15982 43.34 10.2798 38.5L11.6998 32.36C11.9598 31.2 11.4998 29.58 10.6598 28.74L5.69982 23.78C2.77982 20.86 3.71982 17.9 7.79982 17.22L14.1798 16.16C15.2398 15.98 16.5198 15.04 16.9998 14.06L20.5198 7.02003C22.4398 3.20003 25.5598 3.20003 27.4598 7.02003Z" fill="currentColor"></path>
                    </svg></div>
                    <div class="star-clickable w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
                      <path d="M27.4598 7.02003L30.9798 14.06C31.4598 15.04 32.7398 15.98 33.8198 16.16L40.1998 17.22C44.2798 17.9 45.2398 20.86 42.2998 23.78L37.3398 28.74C36.4998 29.58 36.0398 31.2 36.2998 32.36L37.7198 38.5C38.8398 43.36 36.2598 45.24 31.9598 42.7L25.9798 39.16C24.8998 38.52 23.1198 38.52 22.0198 39.16L16.0398 42.7C11.7598 45.24 9.15982 43.34 10.2798 38.5L11.6998 32.36C11.9598 31.2 11.4998 29.58 10.6598 28.74L5.69982 23.78C2.77982 20.86 3.71982 17.9 7.79982 17.22L14.1798 16.16C15.2398 15.98 16.5198 15.04 16.9998 14.06L20.5198 7.02003C22.4398 3.20003 25.5598 3.20003 27.4598 7.02003Z" fill="currentColor"></path>
                    </svg></div>
                  </div>
                  <div class="range-wrapper">
                    <div>Not Likely</div>
                    <div class="range-line"></div>
                    <div>Very Likely</div>
                  </div>
                </div>
              </div>
              <div class="recommend-con-wrapper">
                <div>How likely are you to recommend Eassave digital business card to others?</div>
                <div class="radio-wrapper"><label class="review-radio-wrapper w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input id="Suggestion" type="radio" name="recommend" data-name="recommend" style="opacity:0;position:absolute;z-index:-1" value="Suggestion"><span class="review-radio-label w-form-label" for="Suggestion">Suggestion</span>
                </label><label class="review-radio-wrapper w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input id="Report-a-Problem" type="radio" name="recommend" data-name="recommend" style="opacity:0;position:absolute;z-index:-1" value="Report a Problem"><span class="review-radio-label w-form-label" for="Report-a-Problem">Report a Problem</span>
                </label><label class="review-radio-wrapper w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input id="Compliment" type="radio" name="recommend" data-name="recommend" style="opacity:0;position:absolute;z-index:-1" value="Compliment"><span class="review-radio-label w-form-label" for="Compliment">Compliment</span>
                </label></div>
              </div>
              <div class="likely-con-wrapper">
                <div>How likely are you to recommend Eassave digital business card to others?</div><textarea placeholder="" maxlength="5000" id="how-likely" name="how-likely" data-name="how-likely" class="textarea top-16 w-input"></textarea>
              </div><input type="submit" data-wait="Please wait..." class="button is-form-icon w-button" value="Send Feedback">
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
    </section>


    <!-- Footer section -->
    <?php include 'partials/footer-dark.html'; ?>


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
<script>
  $(".star-clickable").each(function(i){
   $(this).attr("id","rate-"+(i+1));
   $(this).attr("rate",(i+1));
   $(this).click(function(){
     var rate = $(this).attr("rate");
     $("#star-count").val(rate);
    //Add Class to activate
     for(var r = 1; r <= rate; r++)
     {
       $("#rate-"+r).addClass("star-clicked");
     }
    //Remove Class to Deactivate
     for(var r = 5; r > rate; r--)
     {
       $("#rate-"+r).removeClass("star-clicked");
     }
   });
 });
</script>
</body>
</html>