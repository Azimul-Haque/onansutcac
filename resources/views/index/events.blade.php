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
                  <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-1.webp') }}" class="img-fluid" alt="AI & Sustainable Water Futures Summit" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-1.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">AI & Water Solutions</span>
                  <h3>AI & Sustainable Water Futures Summit</h3>
                  <p>Explore cutting-edge AI applications for optimizing water treatment, distribution, and scarcity solutions. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics" style="position: absolute; left: 570px; top: 0px;">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-10.webp') }}" class="img-fluid" alt="Nanotech Innovations for Clean Water: A Global Forum" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-10.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Nanotechnology & Water</span>
                  <h3>Nanotech Innovations for Clean Water: A Global Forum</h3>
                  <p>Discover groundbreaking advancements in nanotechnology for water purification, desalination, and contaminant removal. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-motion" style="position: absolute; left: 570px; top: 509.25px;">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-7.webp') }}" class="img-fluid" alt="The Tech-Driven Water Economy Conference 2025" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-7.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-motion"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Tech & Water Economy</span>
                  <h3>The Tech-Driven Water Economy Conference 2025</h3>
                  <p>A deep dive into the integration of digital technologies, IoT, and advanced analytics transforming the water sector. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-brand" style="position: absolute; left: 0px; top: 533.25px;">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-4.webp') }}" class="img-fluid" alt="Aqua-AI & Robotics: Enhancing Water Infrastructure Resilience" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-4.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-brand"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">AI, Robotics & Water</span>
                  <h3>Aqua-AI & Robotics: Enhancing Water Infrastructure Resilience</h3>
                  <p>Focus on how AI and robotics are revolutionizing inspection, maintenance, and automation in water infrastructure.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web" style="position: absolute; left: 570px; top: 1018.5px;">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-2.webp') }}" class="img-fluid" alt="Nano-Filtration Breakthroughs: Addressing Emerging Contaminants" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-2.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Nanofiltration</span>
                  <h3>Nano-Filtration Breakthroughs: Addressing Emerging Contaminants</h3>
                  <p>Uncover the latest research and commercial applications of nanofiltration in tackling microplastics, pharmaceuticals, and other emerging pollutants in water.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics" style="position: absolute; left: 0px; top: 1042.5px;">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-11.webp') }}" class="img-fluid" alt="Smart Cities & Water: IoT's Role in Urban Sustainability" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-11.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">IoT & Urban Sustainability</span>
                  <h3>Smart Cities & Water: IoT's Role in Urban Sustainability</h3>
                  <p>Explore how the Internet of Things (IoT) is critical for developing smart water management systems in urban environments. </p>
                </div>
              </div>
            </div>

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section>

    <style>
      /*--------------------------------------------------------------
      # Portfolio Section
      --------------------------------------------------------------*/
      .portfolio .portfolio-filters-container {
        margin-bottom: 40px;
      }

      .portfolio .portfolio-filters {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
        padding: 0;
        margin: 0;
        list-style: none;
      }

      .portfolio .portfolio-filters li {
        font-size: 15px;
        font-weight: 500;
        padding: 8px 20px;
        cursor: pointer;
        border-radius: 30px;
        background-color: color-mix(in srgb, var(--surface-color), transparent 50%);
        color: var(--default-color);
        transition: all 0.3s ease-in-out;
      }

      .portfolio .portfolio-filters li:hover {
        background-color: color-mix(in srgb, var(--accent-color), transparent 85%);
        color: var(--accent-color);
        transform: translateY(-2px);
      }

      .portfolio .portfolio-filters li.filter-active {
        background-color: var(--accent-color);
        color: var(--contrast-color);
      }

      .portfolio .portfolio-card {
        background-color: var(--surface-color);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease-in-out;
      }

      .portfolio .portfolio-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 35px rgba(0, 0, 0, 0.1);
      }

      .portfolio .portfolio-card:hover .portfolio-overlay {
        opacity: 1;
        visibility: visible;
      }

      .portfolio .portfolio-card:hover .portfolio-overlay .portfolio-actions {
        transform: translateY(0);
      }

      .portfolio .portfolio-card .portfolio-image {
        position: relative;
        overflow: hidden;
        aspect-ratio: 16/10;
      }

      .portfolio .portfolio-card .portfolio-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease-in-out;
      }

      .portfolio .portfolio-card .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s ease-in-out;
        display: flex;
        align-items: flex-end;
        padding: 20px;
      }

      .portfolio .portfolio-card .portfolio-overlay .portfolio-actions {
        transform: translateY(20px);
        transition: all 0.4s ease-in-out;
        display: flex;
        gap: 15px;
      }

      .portfolio .portfolio-card .portfolio-overlay .portfolio-actions a {
        width: 45px;
        height: 45px;
        background-color: var(--surface-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--accent-color);
        font-size: 20px;
        transition: all 0.3s ease;
      }

      .portfolio .portfolio-card .portfolio-overlay .portfolio-actions a:hover {
        background-color: var(--accent-color);
        color: var(--contrast-color);
        transform: scale(1.1);
      }

      .portfolio .portfolio-card .portfolio-content {
        padding: 25px;
      }

      .portfolio .portfolio-card .portfolio-content .category {
        font-size: 14px;
        color: var(--accent-color);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 500;
        display: block;
        margin-bottom: 10px;
      }

      .portfolio .portfolio-card .portfolio-content h3 {
        font-size: 20px;
        margin: 0 0 15px;
        font-weight: 600;
        transition: color 0.3s ease;
      }

      .portfolio .portfolio-card .portfolio-content h3:hover {
        color: var(--accent-color);
      }

      .portfolio .portfolio-card .portfolio-content p {
        font-size: 15px;
        color: color-mix(in srgb, var(--default-color), transparent 30%);
        margin: 0;
        line-height: 1.6;
      }

      @media (max-width: 768px) {
        .portfolio .portfolio-filters li {
          font-size: 14px;
          padding: 6px 15px;
        }

        .portfolio .portfolio-card .portfolio-content {
          padding: 20px;
        }

        .portfolio .portfolio-card .portfolio-content h3 {
          font-size: 18px;
        }

        .portfolio .portfolio-card .portfolio-content p {
          font-size: 14px;
        }
      }
    </style>


@endsection

@section('third_party_scripts')

@endsection