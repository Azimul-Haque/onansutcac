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
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.get-about-us') }}">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.get-about-us') }}#our-story">Our Story</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.get-about-us') }}#vission-mission">Vision & Mission</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.get-about-us') }}#team">Leadership Team</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.get-why-work-with-us') }}">Why work with us</a></li>
          <!-- <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.get-why-work-with-us') }}#product-capacity">Production Capacity</a></li> -->
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.get-why-work-with-us') }}#global-presence">Global Presence</a></li>


          {{-- <li><i class="bi bi-chevron-right"></i> <a href="https://cactusmaterials.com/" target="_blank">Cactus Materials</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="https://www.cactusantimicrobial.com/" target="_blank">Cactus Antimicrobial</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.terms-and-conditions') }}">Terms of Service</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.privacy-policy') }}">Privacy Policy</a></li> --}}

        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Products</h4>
        <!-- <ul>
          @foreach($productsforfooter as $product)
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.singleproduct', $product->slug) }}">{{ $product->title }}</a></li>
          @endforeach
        </ul> -->
        <ul style="list-style: none; padding-left: 0;">
          <!-- 1. Biofouling Category -->
          <li style="margin-top: 15px;">
              <span style="display: flex; align-items: center;">
                  <i class="bi bi-chevron-right" style="margin-right: 5px; font-size: 14px;"></i> 
                  <strong>Biofouling:</strong>
              </span>
              
              <!-- Nested list for CoreSil™ products, double indented -->
              <ul style="list-style: none; padding-left: 20px; margin-top: 5px;">
                  <li><i class="bi bi-chevron-right" style="margin-right: 5px;"></i> <a style="color: white; text-decoration: none;" href="{{ route('index.index') }}/products/revolutionizing-ro-membrane-with-nano-technology">CoreSil™ RO Membrane</a></li>
                  <li><i class="bi bi-chevron-right" style="margin-right: 5px;"></i> <a style="color: white; text-decoration: none;" href="{{ route('index.index') }}/products/coresil-additive">CoreSil™ RO Additives</a></li>
                  <!-- Additional products below CoreSil Additives -->
                  <li><i class="bi bi-chevron-right" style="margin-right: 5px;"></i> <a style="color: white; text-decoration: none;" href="#">CoreSil™ Textile</a></li>
                  <li><i class="bi bi-chevron-right" style="margin-right: 5px;"></i> <a style="color: white; text-decoration: none;" href="#">CoreSil™ Polymers</a></li>
                  <li><i class="bi bi-chevron-right" style="margin-right: 5px;"></i> <a style="color: white; text-decoration: none;" href="#">CoreSil™ Metals</a></li>
              </ul>
          </li>
          
          <li style="margin-top: 25px;">
              <!-- 2. Corrosion Category -->
              <span style="display: flex; align-items: center;">
                  <i class="bi bi-chevron-right" style="margin-right: 5px; font-size: 14px;"></i> 
                  <strong>Corrosion:</strong>
              </span>
              <ul style="list-style: none; padding-left: 20px; margin-top: 5px;">
                  <li><i class="bi bi-chevron-right" style="margin-right: 5px;"></i> <a style="color: white; text-decoration: none;" href="{{ route('index.index') }}/products/corrosion-inhibitor">Cera 2D™ Corrosion Inhibitor</a></li>
              </ul>
          </li>
          
          <li style="margin-top: 25px;">
              <!-- 3. PFAS Category -->
              <span style="display: flex; align-items: center;">
                  <i class="bi bi-chevron-right" style="margin-right: 5px; font-size: 14px;"></i> 
                  <strong>PFAS:</strong>
              </span>
              <ul style="list-style: none; padding-left: 20px; margin-top: 5px;">
                  <li><i class="bi bi-chevron-right" style="margin-right: 5px;"></i> <a style="color: white; text-decoration: none;" href="{{ route('index.index') }}/products/endpfas">EndPFAS™</a></li>
              </ul>
          </li>
      </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Industries</h4>
        <ul>
          @foreach($marketsforfooter as $market)
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.singlemarket', $market->slug) }}">{{ $market->title }}</a></li>
          @endforeach
        </ul><br/>

        <!-- <h4>Sustainability</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.sdg-alignment') }}">SDG Alignment</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.social-impact') }}">Social Impact</a></li>
        </ul> -->
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Resources</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Product Datasheets</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Testing Standards (EPA, ISO)</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Technical Whitepapers</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Regulatory Updates (EPA, DOE)</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.help-center') }}">FAQ</a></li>
        </ul><br/>

        <h4>Careers</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Open Positions</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Work Culture</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Internship & Research Opportunities</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Contact</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.get-contact') }}">Get in Touch</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.regional-offices') }}">Global Offices</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.news') }}">Media & Press</a></li>
          <!-- <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.information-center') }}">Information Center</a></li> -->
          <!-- <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.success-stories') }}">Success Stories</a></li> -->
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.academia') }}">Academia</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index.index') }}/sitemap.xml">Sitemap</a></li>
          <!-- <li><i class="bi bi-chevron-right"></i> <a href="#!">Request a Proposal</a></li> -->
        </ul>
      </div>

      <div class="col-lg-2 col-md-12 footer-about footer-newsletter">
        <a href="{{ route('index.index') }}" class="logo d-flex align-items-center">
          <img src="{{ asset('images/logo.png') }}" alt="">
          <span class="sitename"><span style="color: #70BE42;">Cactus</span><span style="color: #08AAE9;">NANO</span></span>
        </a>
        <h5>Our Newsletter</h5>
        <p>Subscribe to our newsletter for product and service news.</p>
        <form action="{{ route('index.store.emails') }}" method="post" class="php-email-form">
          @csrf
          <div class="newsletter-form"><input type="email" name="email" required><input type="submit" value="→"></div>
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your subscription request has been sent. Thank you!</div>
        </form>
        <div class="social-links d-flex mt-4">
          <!-- <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a> -->
          <a href="http://linkedin.com/company/cactus-nano0"><i class="bi bi-linkedin"></i></a>
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