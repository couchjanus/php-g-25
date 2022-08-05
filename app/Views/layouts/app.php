<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shopaholic | Shoppng Cart project</title>
    <meta name="description" content="Shopaholic - Shoppng Cart project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Favicon-->
    <link rel="shortcut icon" href="icons/favicon.png">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">

    <link rel="stylesheet" href="css/styles.css">

  </head>
  <body>
    <div class="d-none">
      <svg width="0" height="0" class="hidden">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="delivery-time-1">
          <title>Delivery Time</title>
          <desc>A line styled icon from Orion Icon Library.</desc>
          <path data-name="layer2" fill="none" stroke="#202020" stroke-miterlimit="10" d="M62 46v-5l-8-7h-8" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
          <circle data-name="layer2" cx="24" cy="54" r="4" fill="none" stroke="#202020" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></circle>
          <circle data-name="layer2" cx="54" cy="54" r="4" fill="none" stroke="#202020" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></circle>
          <path data-name="layer2" fill="none" stroke="#202020" stroke-miterlimit="10" d="M50 54H28m-8 0h-4v-8h46v8h-4M24.5 24H46v22m-30 0V29.8M2 38h6m-2 8h2" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
          <circle data-name="layer1" cx="14" cy="18" r="12" fill="none" stroke="#202020" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></circle>
          <path data-name="layer1" fill="none" stroke="#202020" stroke-miterlimit="10" d="M14 12v8h6" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="helpline-24h-1">
          <title>Helpline 24h</title>
          <desc>A line styled icon from Orion Icon Library.</desc>
          <path data-name="layer2" d="M52.3 48.8c1.2.8 3 1.9 2.7 4.3S51 62 43 62s-17.7-6.3-26.2-14.8S2 28.9 2 21 9 9.3 10.9 9s3.6 1.5 4.3 2.7l6 9.2a4.3 4.3 0 0 1-1.1 5.8c-2.6 2.1-6.8 4.6 2.9 14.3s12.3 5.4 14.3 2.9a4.3 4.3 0 0 1 5.8-1.1z" fill="none" stroke="#202020" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
          <path data-name="layer1" fill="none" stroke="#202020" stroke-miterlimit="10" d="M54 2l-6 14h14m-4-6v12m-14 0H32l8.5-10v-.2A6 6 0 0 0 32 3.6" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
        </symbol>

        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="label-tag-1">
          <title>Label Tag</title>
          <desc>A line styled icon from Orion Icon Library.</desc>
          <path data-name="layer2" fill="none" stroke="#202020" stroke-miterlimit="10" d="M25.6 61L3 38.4 38.4 3l21.2 1.4L61 25.6 25.6 61z" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
          <circle data-name="layer2" cx="48" cy="15" r="4" fill="none" stroke="#202020" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></circle>
          <path data-name="layer1" fill="none" stroke="#202020" stroke-miterlimit="10" d="M31.3 21.4l11.3 11.3m-22.6 0l8.5 8.5M25.6 27l5.7 5.7" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
        </symbol>

      </svg>
    </div>
    <!-- page-holder -->
    <div>
      <!-- navbar-->
      <header class="bg-white">
        <!-- container -->
        <div class="container px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
            <!-- navbar-brand -->
            <a href="/" class="navbar-brand"><span class="fw-bold text-uppercase text-dark">Shopaholic</span></a>
            <!-- navbar-toggler -->

            <a href="#!" class="navbar-toggler navbar-toggler-end collapsed" id="navbar-toggler"><span class="navbar-toggler-icon"></span></a>
            
            <div class="navbar-collapse collapse">
              <!-- navbar-nav -->
              <ul class="navbar-nav me-auto">
                <!-- nav-item -->
                <li class="nav-item">
                  <!-- nav-link-->
                  <a href="/" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a href="/shop" class="nav-link">Shop</a>
                </li>
                
                <li>
                  <!-- Link--><a href="/about" class="nav-link">About</a>
                </li>
                <li>
                  <!-- Link--><a href="/contact" class="nav-link">Contact</a>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto">               
                <li class="nav-item">
                  <a href="cart.html" class="nav-link"><i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal">(<span id="shopping-cart-value">0</span>)</small></a>
                </li>
                <li class="nav-item"><a href="#!" class="nav-link"><i class="far fa-heart me-1"></i><small class="text-gray fw-normal">(<span id="wish-list-value">0</span>)</small></a>
                </li>
                <li class="nav-item"><a href="#login" class="nav-link"><i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>


{{ content }}

<!-- footer -->
<footer class="bg-dark text-white">
        <div class="container py-4">
          <div class="row py-5">
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Customer services</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">Help &amp; Contact Us</a></li>
                <li><a class="footer-link" href="#!">Returns &amp; Refunds</a></li>
                <li><a class="footer-link" href="#!">Online Stores</a></li>
                <li><a class="footer-link" href="#!">Terms &amp; Conditions</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Company</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">What We Do</a></li>
                <li><a class="footer-link" href="#!">Available Services</a></li>
                <li><a class="footer-link" href="#!">Latest Posts</a></li>
                <li><a class="footer-link" href="#!">FAQs</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h6 class="text-uppercase mb-3">Social media</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="https://www.twitter.com" target="_blank" title="Twitter" rel="nofollow"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a class="footer-link" href="https://www.instagram.com" target="_blank" title="Instagram" rel="nofollow"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a class="footer-link" href="https://www.facebook.com" target="_blank" title="Facebook" rel="nofollow"><i class="fab fa-facebook"></i> Facebook</a></li>
              </ul>
            </div>


          </div>
          <div class="border-top pt-4" style="border-color: #1d1d1d !important">
            <div class="row">
              <div class="col-md-6 text-center text-md-start">
                <p class="small text-muted mb-0">© 2022 All rights reserved.</p>
              </div>
              <div class="col-md-6 text-center text-md-end">
                <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstrapious.com/p/boutique-bootstrap-e-commerce-template">Bootstrapious</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

      
      <!-- JavaScript files-->
     
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    </div>
  <!-- JavaScript files-->
  <!-- <script src="js/data.js"></script> -->
  <!-- <script src="js/main.js"></script> -->
</body>

</html>