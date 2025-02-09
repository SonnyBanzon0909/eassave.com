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

      <!-- Global CSS -->
      <?php include 'partials/global-css.css'; ?>

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

                      <div class="select-wrapper">
                        <select id="sort-by" name="sort-by" data-name="sort-by" class="select-field w-select">
                          <option value="Most Popular">Most Popular</option>
                          <option value="Best Selling">Best Selling</option>
                          <option value="Highest Rated">Highest Rated</option>
                          <option value="Newest Arrivals">Newest Arrivals</option>
                        </select>
                        <img loading="lazy" src="images/down.svg" alt="" class="select-icon">
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
                    <a href="shop/cart.php" class="button button-black">Add to cart</a>
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
                    <a href="shop/cart.php" class="button button-black">Add to cart</a>
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
                    <a href="shop/cart.php" class="button button-black">Add to cart</a>
                  </div>



                  <?php
// Select query for the shop table to fetch items
                  $select_query = "SELECT id, name, type, colors, is_solid_color, patterns, price, link,popularity,sales,rating,created_at FROM shop ORDER BY popularity DESC";
                  $result = $conn->query($select_query);

                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

        // Exploding colors and patterns into arrays for handling
                      $colors = explode(',', $row['colors']);
                      $patterns = $row['patterns'] ? explode(',', $row['patterns']) : [];

        // Display each item in a card
                      echo '<a href="' . htmlspecialchars($row['link']) . '" class="shop-card w-inline-block" data-popularity="' . htmlspecialchars($row['popularity']) . '" data-sales="' . htmlspecialchars($row['sales']) . '" data-rating="' . htmlspecialchars($row['rating']) . '" data-created="' . htmlspecialchars($row['created_at']) . '">';

                      echo '  <div class="shop-img-wrapper"><img src="images/Card-Blue.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 35vw, (max-width: 991px) 16vw, 18vw" srcset="images/Card-Blue-p-500.png 500w, images/Card-Blue.png 934w" alt=""></div>';
                      echo '  <div class="color-wrapper">';

        // If type is color (either solid or combination)
                      if (strpos($row['type'], 'color') !== false) {
                        foreach ($colors as $color) {
                $color = trim($color);  // Remove any extra spaces
                // Check if the current color is a solid color or a combination
                if ($row['is_solid_color'] == '1') {
                  echo '    <div class="color-box" style="background:none">';
                  echo '      <div class="box-1" style="background: ' . htmlspecialchars($color) . ';"></div>';
                  echo '      <div class="box-2" style="background: ' . htmlspecialchars($color) . ';"></div>';
                  echo '    </div>';
                } else {
                    $color_parts = explode('&', $color); // Handle color combinations like 'blue & green'
                    echo '    <div class="color-box" style="background:none">';
                    echo '      <div class="box-1" style="background: ' . htmlspecialchars(trim($color_parts[0])) . ';"></div>';
                    echo '      <div class="box-2" style="background: ' . htmlspecialchars(trim($color_parts[1] ?? $color)) . ';"></div>';
                    echo '    </div>';
                  }
                }
              }

        // If type is pattern
              if (strpos($row['type'], 'pattern') !== false) {
                foreach ($patterns as $pattern) {
                  echo '    <div class="color-box" style="background: url(' . htmlspecialchars($pattern) . '); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>';
                }
              }

              echo '  </div>';
              echo '  <div class="heading-style-h6">' . htmlspecialchars($row['name']) . '</div>';
              echo '  <div class="price">₱' . number_format($row['price'], 2) . '</div>';
              echo '</a>';
            }
          } else {
            echo "No products found.";
          }
          ?>







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


  document.getElementById('sort-by').addEventListener('change', function () {
    const sortOption = this.value;  // Get the selected option
    const cards = document.querySelectorAll('.shop-card');  // Get all the shop cards

    // Convert the NodeList to an array to use Array methods
    const cardsArray = Array.from(cards);

    // Sort the array based on the selected option
    let sortedCards;
    switch (sortOption) {
        case 'Most Popular':
            sortedCards = cardsArray.sort((a, b) => b.getAttribute('data-popularity') - a.getAttribute('data-popularity'));
            break;
        case 'Best Selling':
            sortedCards = cardsArray.sort((a, b) => b.getAttribute('data-sales') - a.getAttribute('data-sales'));
            break;
        case 'Highest Rated':
            sortedCards = cardsArray.sort((a, b) => b.getAttribute('data-rating') - a.getAttribute('data-rating'));
            break;
        case 'Newest Arrivals':
            sortedCards = cardsArray.sort((a, b) => new Date(b.getAttribute('data-created')) - new Date(a.getAttribute('data-created')));
            break;
        default:
            sortedCards = cardsArray;
            break;
    }

    // Remove all the cards and append the sorted ones
    const shopCardsContainer = document.querySelector('.shop-list');
    shopCardsContainer.innerHTML = '';  // Clear current shop cards
    sortedCards.forEach(card => {
        shopCardsContainer.appendChild(card);  // Append each sorted card
    });
});





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