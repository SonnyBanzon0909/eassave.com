<?php

$_SESSION['is_login']= false;

$root = $_SERVER['DOCUMENT_ROOT'];

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Generate a CSRF token if it doesn't exist
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Redirect to /login if the user is not logged in
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] !== true) {
  $_SESSION['is_login']= false;
}


?>













<!DOCTYPE html><!--  Last Published: Fri Oct 11 2024 08:14:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="665f147b743ba95cae446d52" data-wf-site="665f147b743ba95cae446cfe">
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <meta content="Register" property="og:title">
  <meta content="Register" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <base href="../" /> <!-- Use this to locate the right path -->

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

        <style> 
          .login-btn-wrapper
          {
            display: flex !important;
          }
          .login-dropdown, .cart-wrapper
          {
            display: none !important;
          }
        </style>

        <!-- Global CSS -->
        <?php include '../partials/global-css.css'; ?>

      </div>


      <!-- Navigation -->
      <?php include '../partials/navigation-dark.html'; ?>

      <!-- OTP wrapper -->



      <div class="otp-section-wrapper">






        <div id="w-node-_6781a2ad-69e0-0135-a3da-b0405a444611-e3a519d0" class="auth-form-block w-form otp-auth-wrapper">


<!--           <div id="notif-popup" class="popup-wrapper">
          <div class="popup-message"><img src=".../../images/check.png" loading="lazy" alt="">
            <div>Phone Number verified. Log in to you account.</div>
            <a href="#" class="close w-inline-block"><img src=".../../images/close_24px.svg" loading="lazy" alt=""></a>
          </div>
        </div> -->


        <form id="otp-form" name="otp-form" data-name="Login Form" method="POST" action="../private/auth/register-code.php" data-wf-page-id="66c1d4d1c4e6e89fe3a519d0" data-wf-element-id="6781a2ad-69e0-0135-a3da-b0405a444612">
          <h1 class="heading-style-h5">Verify Email Address 📱</h1>
          <div class="form-excerpt">You will get a OTP via Email</div>
          <div class="login-grid bot-none">
            <div class="otp-wrapper"><input class="text-field transparent-text-field otp-field w-input" oninput="moveFocus(this, 'otp2')" maxlength="1" name="otp-1" data-name="otp-1" placeholder="0" type="number" id="otp1" required=""><input class="text-field transparent-text-field otp-field w-input" oninput="moveFocus(this, 'otp3')" maxlength="1" name="otp2" data-name="otp-2" placeholder="0" type="number" id="otp2" required=""><input class="text-field transparent-text-field otp-field w-input" oninput="moveFocus(this, 'otp4')" maxlength="1" name="otp-3" data-name="otp-3" placeholder="0" type="number" id="otp3" required=""><input class="text-field transparent-text-field otp-field w-input" oninput="moveFocus(this, 'otp5')" maxlength="1" name="otp-4" data-name="otp-4" placeholder="0" type="number" id="otp4" required=""><input class="text-field transparent-text-field otp-field w-input" oninput="moveFocus(this, 'otp6')" maxlength="1" name="otp-5" data-name="otp-5" placeholder="0" type="number" id="otp5" required=""><input class="text-field transparent-text-field otp-field w-input" maxlength="1" name="otp-6" data-name="otp-6" placeholder="0" type="number" id="otp6" required=""></div>
            <a data-w-id="6781a2ad-69e0-0135-a3da-b0405a444638" href="auth/login.php" class="button is-icon max-button-width w-inline-block">
              <div class="btn-text">Verify OTP and Login</div>
              <div class="icon-1x1-small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.32481 1.89973C5.86086 2.62911 7.23527 3.75138 9.13918 3.69086L1.16196 8.29651L1.44768 8.79138L9.42395 4.18628C8.42036 5.80457 8.70502 7.5554 9.06858 8.38414L9.59187 8.15458C9.19323 7.24586 8.893 4.99296 10.9407 3.33777L10.7588 3.11272L10.7351 3.07171L10.6311 2.80164C8.17386 3.74738 6.37291 2.36093 5.78526 1.56133L5.32481 1.89973Z" fill="white"></path>
              </svg></div>
              <div class="button-overlay pointer-events-off"></div><input type="submit" data-wait="" class="submit-btn w-button" value="">
            </a>
          </div>
          <div class="google-wrapper">
            <div class="register-wrapper top-16">
              <a href="../auth/register.html" class="underline-link text-case-none">Resend OTP number</a>
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



    <section id="contact-form" class="section-auth">
      <div class="padding-global">
        <div class="container-large">
          <div class="auth-wrapper">




            <div id="w-node-_6781a2ad-69e0-0135-a3da-b0405a444611-ae446d52" class="auth-form-block w-form">


             <form id="wf-form-Login-Form" name="wf-form-Login-Form" data-name="Login Form" method="post" action="../private/auth/register-code.php" data-wf-page-id="665f147b743ba95cae446d52" data-wf-element-id="6781a2ad-69e0-0135-a3da-b0405a444612">

              <h1 class="heading-style-h5 bot-33">Create an Account</h1>
              <div class="login-grid">

                <div class="field-wrapper">

                  <input type="hidden" name="csrf_token" class="text-field transparent-text-field w-input" value="<?php echo $_SESSION['csrf_token']; ?>">
                </div>


                <div class="field-wrapper">
                  <input class="text-field transparent-text-field w-input email-field" maxlength="256" name="email" id="Email" placeholder="Email" type="email" required>

                  <!-- Placeholder for success/error messages -->
                  <div id="email-message" class="error-text-message">Email is already registered.</div> 

                </div>
                <div class="field-wrapper">
                  <input class="text-field transparent-text-field w-input phone-field" maxlength="256" name="phone" id="Phone" placeholder="Phone" type="tel" required>



                  <!-- Placeholder for success/error messages -->
                  <div id="phone-message" class="error-text-message">Invalid phone number. Use 10-15 digits.</div> 



                  <div class="sub-label">We will send you a One Time Code on your phone number</div>
                </div>
                <div class="field-wrapper icon-field-wrapper">
                  <input class="text-field transparent-text-field w-input password-field" maxlength="256" name="password" id="Password" placeholder="Password" type="password" required>

                  <!-- Placeholder for success/error messages -->
                  <div id="password-message" class="error-text-message">Passwords do not match.</div> 


                  <img src=".../../images/eye-slash.svg" loading="lazy" alt="Toggle Password Visibility" class="field-icon toggle-icon" id="togglePassword">
                </div>

                <div>
                  <div class="field-wrapper icon-field-wrapper">
                    <input class="text-field transparent-text-field w-input password-field" maxlength="256" name="confirm-password" id="Confirm-Password" placeholder="Confirm Password" type="password" required>            
                    <img src=".../../images/eye-slash.svg" loading="lazy" alt="Toggle Password Visibility" class="field-icon toggle-icon" id="toggleConfirmPassword">
                  </div>


                  <!-- Placeholder for success/error messages -->
                  <div id="password-req-message" class="error-text-message password-req-message">Password must be at least 8 characters long, include an uppercase letter, a lowercase letter, a number, and a special character.</div> 
                </div>


                <div class="remember-wrapper">
                  <label class="w-checkbox checkbox-field" style="padding: 0px">
                    <input type="checkbox" id="terms" name="terms" value="accepted" required>
                    <span class="cart-check-label w-form-label">I understand and agree to the 
                      <a href=".../../privacy-policy.php" class="purple-span">Privacy Policy</a> and 
                      <a href=".../../terms-and-conditions.php" class="purple-span">Terms of Service</a>
                    </span>
                  </label>
                </div>
                <button type="submit" class="button is-icon max-button-width w-inline-block">
                  <div class="btn-text">Sign Up</div>
                  <div class="icon-1x1-small w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.32481 1.89973C5.86086 2.62911 7.23527 3.75138 9.13918 3.69086L1.16196 8.29651L1.44768 8.79138L9.42395 4.18628C8.42036 5.80457 8.70502 7.5554 9.06858 8.38414L9.59187 8.15458C9.19323 7.24586 8.893 4.99296 10.9407 3.33777L10.7588 3.11272L10.7351 3.07171L10.6311 2.80164C8.17386 3.74738 6.37291 2.36093 5.78526 1.56133L5.32481 1.89973Z" fill="white"></path>
                    </svg>
                  </div>
                </button>
              </div>





              <div class="google-wrapper">
                <div class="sign-with-wrapper">
                  <div class="padd-12">OR SIGN IN WITH</div>
                  <div class="line"></div>
                </div>
                <a href="#" class="button is-secondary icon-btn min-208 w-inline-block">
                  <img src=".../../images/Google__G__Logo-1.svg" loading="lazy" alt="">
                  <div>Google</div>
                </a>
                <div class="register-wrapper">
                  <div class="dont-text">Already have an account?</div>
                  <a href=".../../auth/login.php" class="underline-link">LOGIN NOW</a>
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
    </div>
  </section>


  <!-- Footer section -->
  <?php include '../partials/footer-dark.html'; ?>

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


<script>

  // Function to move focus to the next input
  function moveFocus(current, nextId) {
    if (current.value.length === 1) {
      document.getElementById(nextId).focus();
    }
  }


  // Ensure each OTP input accepts only one digit
  document.querySelectorAll('.otp-field').forEach(input => {
    input.addEventListener('input', function () {
        // Restrict input to a single digit
      if (this.value.length > 1) {
        this.value = this.value.slice(0, 1);
      }
    });
  });


//////////////////////////////



  // document.getElementById("otp-form").addEventListener("submit", async function(e) {
  //   e.preventDefault();

  //   const formData = new FormData(this);

  //   const response = await fetch("../private/auth/send-otp.php", {
  //     method: "POST",
  //     body: formData
  //   });

  //   const result = await response.json();
  //   alert(result.message);
  // // Control visibility based on result status
  //   if (result.message === "success") {

  //     window.location.href = "login.php";

  //   } else {


  //   }
  // });

//////////////////////////////


  document.getElementById("wf-form-Login-Form").addEventListener("submit", async function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    const response = await fetch("../private/auth/register-code.php", {
      method: "POST",
      body: formData
    });

    const result = await response.json();
    const email_messageDiv = document.getElementById("email-message");
    const phone_messageDiv = document.getElementById("phone-message");
    const pass_messageDiv = document.getElementById("password-message");
    const req_messageDiv = document.getElementById("password-req-message");



  // Hide all message divs first
    email_messageDiv.style.display = "none";
    phone_messageDiv.style.display = "none";
    pass_messageDiv.style.display = "none";
    req_messageDiv.style.display = "none";

  // Control visibility based on result status
    if (result.message === "success") {


// Call send-otp.php after successful registration
      const otpResponse = await fetch("../private/auth/send-otp.php", {
        method: "POST",
        body: formData
      });

      const otpResult = await otpResponse.json();

      if (otpResult.message === "success") {
      // Show OTP section
        $(".otp-section-wrapper").css("display", "flex");
        this.reset();
      } else {
        console.error("OTP sending failed:", otpResult.message);
      }





    } 
    else 
    {
    // Show specific messages
      switch (result.message) {
      case "invalid-email":
        email_messageDiv.style.display = "block";
        email_messageDiv.innerText = "Invalid email format.";

        $(".error-border").each(function(){
          $(this).removeClass("error-border");
        });
        $(".email-field").addClass("error-border");
        break;

      case "email-error":
        email_messageDiv.style.display = "block";
        email_messageDiv.innerText = "Email is already registered.";

        $(".error-border").each(function(){
          $(this).removeClass("error-border");
        });

        $(".email-field").addClass("error-border");
        break;

      case "phone-error":
        phone_messageDiv.style.display = "block";

        $(".error-border").each(function(){
          $(this).removeClass("error-border");
        });

        $(".phone-field").addClass("error-border");
        break;
      case "password-match":
        pass_messageDiv.style.display = "block";

        $(".error-border").each(function(){
          $(this).removeClass("error-border");
        });
        $(".password-field").addClass("error-border");
        break;
      case "password-req":
        req_messageDiv.style.display = "block";

        $(".error-border").each(function(){
          $(this).removeClass("error-border");
        });

        $(".password-field").addClass("error-border");
        break;
      default:
        // Handle any other messages
        console.error("Unexpected error");
      }
    }
  });



  // Get the password fields and their corresponding toggle icons
  const togglePassword = document.getElementById('togglePassword');
  const passwordField = document.getElementById('Password');
  const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
  const confirmPasswordField = document.getElementById('Confirm-Password');

// Function to toggle password visibility
  function toggleVisibility(inputField, toggleIcon) {
    const type = inputField.type === 'password' ? 'text' : 'password';
    inputField.type = type;

  // Toggle the icon based on visibility
    const icon = type === 'password' ? 'eye-slash.svg' : 'eye.svg';
    toggleIcon.src = `.../../images/${icon}`;
  }

// Add event listeners to toggle icons
  togglePassword.addEventListener('click', function () {
    toggleVisibility(passwordField, togglePassword);
  });

  toggleConfirmPassword.addEventListener('click', function () {
    toggleVisibility(confirmPasswordField, toggleConfirmPassword);
  });

</script>





</body>
</html>