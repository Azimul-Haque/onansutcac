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

    

    <section id="portfolio" class="portfolio2 section">

      <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="portfolio2-filters-container aos-init" data-aos="fade-up" data-aos-delay="200">
            <ul class="portfolio2-filters isotope-filters">
              <li data-filter="*" class="filter-active">All Events</li>
              <li data-filter=".filter-web" class="">USA</li>
              <li data-filter=".filter-graphics" class="">Singapore</li>
              <li data-filter=".filter-motion" class="">Global</li>
              <li data-filter=".filter-brand" class="">Regional</li>
            </ul>
          </div>

          <div class="row g-4 isotope-container aos-init" data-aos="fade-up" data-aos-delay="300" style="position: relative; height: 1551.75px;">
            
            <div class="col-lg-4 col-md-6 portfolio2-item isotope-item filter-web" style="position: absolute; left: 0px; top: 0px;">
              <div class="portfolio2-card">
                <div class="portfolio2-image">
                  <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-1.webp') }}" class="img-fluid" alt="AI & Sustainable Water Futures Summit" loading="lazy">
                  <div class="portfolio2-overlay">
                    <div class="portfolio2-actions">
                      <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-eye"></i></a>
                      {{-- <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                  </div>
                </div>
                <div class="portfolio2-content">
                  <span class="category">AI & Water Solutions</span>
                  <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><h3>AI & Sustainable Water Futures Summit</h3></a>
                  <p>Explore cutting-edge AI applications for optimizing water treatment, distribution, and scarcity solutions. </p>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio2-item isotope-item filter-graphics" style="position: absolute; left: 570px; top: 0px;">
              <div class="portfolio2-card">
                <div class="portfolio2-image">
                  <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-10.webp') }}" class="img-fluid" alt="Nanotech Innovations for Clean Water: A Global Forum" loading="lazy">
                  <div class="portfolio2-overlay">
                    <div class="portfolio2-actions">
                      <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"phics"><i class="bi bi-eye"></i></a>
                      {{-- <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                  </div>
                </div>
                <div class="portfolio2-content">
                  <span class="category">Nanotechnology & Water</span>
                  <h3>Nanotech Innovations for Clean Water: A Global Forum</h3>
                  <p>Discover groundbreaking advancements in nanotechnology for water purification, desalination, and contaminant removal. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio2-item isotope-item filter-motion" style="position: absolute; left: 570px; top: 509.25px;">
              <div class="portfolio2-card">
                <div class="portfolio2-image">
                  <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-7.webp') }}" class="img-fluid" alt="The Tech-Driven Water Economy Conference 2025" loading="lazy">
                  <div class="portfolio2-overlay">
                    <div class="portfolio2-actions">
                      <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"on"><i class="bi bi-eye"></i></a>
                      {{-- <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                  </div>
                </div>
                <div class="portfolio2-content">
                  <span class="category">Tech & Water Economy</span>
                  <h3>The Tech-Driven Water Economy Conference 2025</h3>
                  <p>A deep dive into the integration of digital technologies, IoT, and advanced analytics transforming the water sector. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio2-item isotope-item filter-brand" style="position: absolute; left: 0px; top: 533.25px;">
              <div class="portfolio2-card">
                <div class="portfolio2-image">
                  <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-4.webp') }}" class="img-fluid" alt="Aqua-AI & Robotics: Enhancing Water Infrastructure Resilience" loading="lazy">
                  <div class="portfolio2-overlay">
                    <div class="portfolio2-actions">
                      <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"d"><i class="bi bi-eye"></i></a>
                      {{-- <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                  </div>
                </div>
                <div class="portfolio2-content">
                  <span class="category">AI, Robotics & Water</span>
                  <h3>Aqua-AI & Robotics: Enhancing Water Infrastructure Resilience</h3>
                  <p>Focus on how AI and robotics are revolutionizing inspection, maintenance, and automation in water infrastructure.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio2-item isotope-item filter-web" style="position: absolute; left: 570px; top: 1018.5px;">
              <div class="portfolio2-card">
                <div class="portfolio2-image">
                  <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-2.webp') }}" class="img-fluid" alt="Nano-Filtration Breakthroughs: Addressing Emerging Contaminants" loading="lazy">
                  <div class="portfolio2-overlay">
                    <div class="portfolio2-actions">
                      <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-eye"></i></a>
                      {{-- <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                  </div>
                </div>
                <div class="portfolio2-content">
                  <span class="category">Nanofiltration</span>
                  <h3>Nano-Filtration Breakthroughs: Addressing Emerging Contaminants</h3>
                  <p>Uncover the latest research and commercial applications of nanofiltration in tackling microplastics, pharmaceuticals, and other emerging pollutants in water.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio2-item isotope-item filter-graphics" style="position: absolute; left: 0px; top: 1042.5px;">
              <div class="portfolio2-card">
                <div class="portfolio2-image">
                  <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-11.webp') }}" class="img-fluid" alt="Smart Cities & Water: IoT's Role in Urban Sustainability" loading="lazy">
                  <div class="portfolio2-overlay">
                    <div class="portfolio2-actions">
                      <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"phics"><i class="bi bi-eye"></i></a>
                      {{-- <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                  </div>
                </div>
                <div class="portfolio2-content">
                  <span class="category">IoT & Urban Sustainability</span>
                  <h3>Smart Cities & Water: IoT's Role in Urban Sustainability</h3>
                  <p>Explore how the Internet of Things (IoT) is critical for developing smart water management systems in urban environments. </p>
                </div>
              </div>
            </div>

          </div>
          <!-- End Portfolio Container -->

        </div>

      </div>

    </section>


@endsection

@section('third_party_scripts')

@endsection