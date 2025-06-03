<footer id="footer" class="footer dark-background">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-2 col-md-2 footer-about footer-links">
        {{-- <a href="{{ route('index.index') }}" class="logo d-flex align-items-center">
          <img src="{{ asset('images/logo.png') }}" alt="">
          <span class="sitename">CactusNANO</span>
        </a> --}}
       {{--  <div class="footer-contact pt-3">
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div> --}}
        <h4>Cactus</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="https://cactusmaterials.com/" target="_blank">Cactus Materials</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="https://www.cactusantimicrobial.com/" target="_blank">Cactus Antimicrobial</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of Service</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Products</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Products 1</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Products 2</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Products 3</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Products 4</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Products 5</a></li>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Markets</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Markets 1</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Markets 2</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Markets 3</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Markets 4</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Markets 5</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Materials & Media</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Events</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Case Study</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">News & Updates</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Academia</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Information Center</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Client Endorsemen</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12 footer-about footer-newsletter">
        <a href="{{ route('index.index') }}" class="logo d-flex align-items-center">
          <img src="{{ asset('images/logo.png') }}" alt="">
          <span class="sitename"><span style="color: #70BE42;">Cactus</span><span style="color: #08AAE9;">NANO</span></span>
        </a>
        <h5>Our Newsletter</h5>
        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
        <form action="forms/newsletter.php" method="post" class="php-email-form">
          <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your subscription request has been sent. Thank you!</div>
        </form>
        <div class="social-links d-flex mt-4">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© {{ date('Y') }} <span>Copyright</span> <strong class="px-1 sitename"><span style="color: #70BE42;">Cactus</span><span style="color: #08AAE9;">NANO</span></strong> <span>All Rights Reserved</span></p>
    <div class="credits" style="opacity: 0.0;">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you've purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>

</footer>