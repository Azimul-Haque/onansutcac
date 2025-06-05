@extends('layouts.index')
@section('title') Events @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/news-page-background.gif') }}');">
      <div class="container position-relative">
        <h1>Events</h1>
        <p>Shaping the Future: Our Event Series</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Events</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    

    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Portfolio</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem</p>
      </div><!-- End Section Title -->

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="portfolio-filters-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <ul class="portfolio-filters isotope-filters">
              <li data-filter="*" class="filter-active">All Work</li>
              <li data-filter=".filter-web" class="">Web Design</li>
              <li data-filter=".filter-graphics" class="">Graphics</li>
              <li data-filter=".filter-motion" class="">Motion</li>
              <li data-filter=".filter-brand" class="">Branding</li>
            </ul>
          </div>

          <div class="row g-4 isotope-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" style="position: relative; height: 1551.75px;">

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web" style="position: absolute; left: 0px; top: 0px;">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-1.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-1.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web Design</span>
                  <h3>Modern Dashboard Interface</h3>
                  <p>Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics" style="position: absolute; left: 570px; top: 0px;">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-10.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-10.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Graphics</span>
                  <h3>Creative Brand Identity</h3>
                  <p>Vestibulum id ligula porta felis euismod semper at vulputate.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-motion" style="position: absolute; left: 570px; top: 509.25px;">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-7.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-7.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-motion"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Motion</span>
                  <h3>Product Animation Reel</h3>
                  <p>Donec ullamcorper nulla non metus auctor fringilla dapibus.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-brand" style="position: absolute; left: 0px; top: 533.25px;">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-4.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-4.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-brand"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Branding</span>
                  <h3>Luxury Brand Package</h3>
                  <p>Aenean lacinia bibendum nulla sed consectetur elit.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web" style="position: absolute; left: 570px; top: 1018.5px;">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-2.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-2.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web Design</span>
                  <h3>E-commerce Platform</h3>
                  <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics" style="position: absolute; left: 0px; top: 1042.5px;">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-11.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-11.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Graphics</span>
                  <h3>Digital Art Collection</h3>
                  <p>Cras mattis consectetur purus sit amet fermentum.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section>


@endsection

@section('third_party_scripts')

@endsection