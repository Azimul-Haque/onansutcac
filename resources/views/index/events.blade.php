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

    

    <section id="portfolio" class="portfolio2 section light-background">

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
                  <p class="text-muted fst-italic mb-1">
                    <i class="bi bi-calendar-event me-2"></i> **July 15, 2025** | 9:00 AM - 4:00 PM (GMT+6)
                  </p>
                  <p>Explore cutting-edge AI applications for optimizing water treatment, distribution, and scarcity solutions. </p>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body pt-0">
                    <div class="text-center mb-4">
                      <img src="{{ asset('vendor/dewi/assets/img/portfolio/portfolio-1.webp') }}" class="img-fluid rounded shadow-sm mb-4" alt="AI & Sustainable Water Futures Summit" style="max-height: 350px; object-fit: cover; width: 100%;">
                      <h3 class="modal-title fw-bold mb-2" id="eventModalLabel">AI & Sustainable Water Futures Summit</h3>
                      <p class="text-muted fst-italic mb-1">
                        <i class="bi bi-calendar-event me-2"></i> **July 15, 2025** | 9:00 AM - 4:00 PM (GMT+6)
                      </p>
                      <p class="text-muted fst-italic mb-0">
                        <i class="bi bi-geo-alt me-2"></i> **Grand Ballroom, International Convention City Bashundhara (ICCB), Dhaka**
                      </p>
                    </div>

                    <hr class="my-4">

                    <div class="px-4">
                      <p class="lead text-dark">
                        Join industry leaders and innovators at the **AI & Sustainable Water Futures Summit**, a pivotal event exploring cutting-edge AI applications for optimizing water treatment, distribution, and scarcity solutions.
                      </p>
                      <p>
                        This summit is designed to foster collaboration and knowledge exchange, bringing together leading experts, policymakers, and technologists. Attendees will gain invaluable insights into the latest advancements in smart water infrastructure, predictive analytics for resource management, and data-driven strategies crucial for a sustainable water future.
                      </p>
                      <p>
                        Engage in dynamic discussions, network with pioneers in the field, and discover scalable solutions impacting communities globally. Don't miss this opportunity to be part of the conversation shaping the next generation of water technology.
                      </p>
                      <ul class="list-unstyled mt-4 text-start">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> **Keynote Speakers:** Featuring renowned experts from academia and industry.</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> **Interactive Panels:** Deep dives into practical AI implementation challenges and successes.</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> **Networking Sessions:** Opportunities to connect with peers and potential collaborators.</li>
                      </ul>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-center border-0 pt-0">
                    <a href="#" class="btn btn-primary btn-lg shadow-sm">Register Now</a>
                    <button type="button" class="btn btn-outline-secondary btn-lg shadow-sm" data-bs-dismiss="modal">Close</button>
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
                      <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-eye"></i></a>
                      {{-- <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                  </div>
                </div>
                <div class="portfolio2-content">
                  <span class="category">Nanotechnology & Water</span>
                  <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><h3>Nanotech Innovations for Clean Water: A Global Forum</h3></a>
                  <p class="text-muted fst-italic mb-1">
                    <i class="bi bi-calendar-event me-2"></i> **July 15, 2025** | 9:00 AM - 4:00 PM (GMT+6)
                  </p>
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
                      <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-eye"></i></a>
                      {{-- <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                  </div>
                </div>
                <div class="portfolio2-content">
                  <span class="category">Tech & Water Economy</span>
                  <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><h3>The Tech-Driven Water Economy Conference 2025</h3></a>
                  <p class="text-muted fst-italic mb-1">
                    <i class="bi bi-calendar-event me-2"></i> **July 15, 2025** | 9:00 AM - 4:00 PM (GMT+6)
                  </p>
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
                      <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-eye"></i></a>
                      {{-- <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                  </div>
                </div>
                <div class="portfolio2-content">
                  <span class="category">AI, Robotics & Water</span>
                  <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><h3>Aqua-AI & Robotics: Enhancing Water Infrastructure Resilience</h3></a>
                  <p class="text-muted fst-italic mb-1">
                    <i class="bi bi-calendar-event me-2"></i> **July 15, 2025** | 9:00 AM - 4:00 PM (GMT+6)
                  </p>
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
                  <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><h3>Nano-Filtration Breakthroughs: Addressing Emerging Contaminants</h3></a>
                  <p class="text-muted fst-italic mb-1">
                    <i class="bi bi-calendar-event me-2"></i> **July 15, 2025** | 9:00 AM - 4:00 PM (GMT+6)
                  </p>
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
                      <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-eye"></i></a>
                      {{-- <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                  </div>
                </div>
                <div class="portfolio2-content">
                  <span class="category">IoT & Urban Sustainability</span>
                  <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><h3>Smart Cities & Water: IoT's Role in Urban Sustainability</h3></a>
                  <p class="text-muted fst-italic mb-1">
                    <i class="bi bi-calendar-event me-2"></i> **July 15, 2025** | 9:00 AM - 4:00 PM (GMT+6)
                  </p>
                  <p>Explore how the Internet of Things (IoT) is critical for developing smart water management systems in urban environments. </p>
                </div>
              </div>
            </div>

          </div>
          <!-- End Portfolio Container -->

        </div>

      </div>

    </section>

    <section id="category-section" class="category-section section">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Category Section</h2>
        <div> <span class="description-title">Category Section</span></div>
      </div><!-- End Section Title -->

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <!-- Featured Posts -->

        <!-- List Posts -->
        <div class="row">
          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-6.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="blog-details.html">Quis autem vel eum iure reprehenderit qui in ea voluptate</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">6 April 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-9.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="blog-details.html">At vero eos et accusamus et iusto</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">12 June 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-10.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="blog-details.html">Et harum quidem rerum facilis est et expedita distinctio</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">9 May 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-2.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="blog-details.html">Nam libero tempore, cum soluta nobis est eligendi</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">15 July 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-1.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="blog-details.html">Temporibus autem quibusdam et aut officiis debitis</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">18 August 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-3.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="blog-details.html">Itaque earum rerum hic tenetur a sapiente delectus</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">21 September 2026</span>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>

    </section>


@endsection

@section('third_party_scripts')

@endsection