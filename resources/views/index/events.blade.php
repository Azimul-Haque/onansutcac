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
              <li data-filter=".filter-Webinar" class="">Webinar</li>
              <li data-filter=".filter-Conference" class="">Conference</li>
              <li data-filter=".filter-Workshop" class="">Workshop</li>
              <li data-filter=".filter-Seminar" class="">Seminar</li>
              <li data-filter=".filter-Other" class="">Other</li>
            </ul>
          </div>

          <div class="row g-4 isotope-container aos-init" data-aos="fade-up" data-aos-delay="300" style="position: relative; height: 1551.75px;">
            @foreach($allEvents as $event)
              <div class="col-lg-4 col-md-6 portfolio2-item isotope-item filter-{{ $event->type }}" style="position: absolute; left: 0px; top: 0px;">
                <div class="portfolio2-card">
                  <div class="portfolio2-image">
                    <img src="{{ asset('images/events/' . $event->image) }}" class="img-fluid" alt="{{ $event->title }}" loading="lazy">
                    <div class="portfolio2-overlay">
                      <div class="portfolio2-actions">
                        <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#eventModal{{ $event->id }}"><i class="bi bi-eye"></i></a>
                        {{-- <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a> --}}
                      </div>
                    </div>
                  </div>
                  <div class="portfolio2-content">
                    <span class="category">{{ $event->type }}</span>
                    <a href="#!" title="Open Details" data-bs-toggle="modal" data-bs-target="#eventModal{{ $event->id }}"><h3>{{ $event->title }}</h3></a>
                    <p class="text-muted fst-italic mb-1">
                      <i class="bi bi-calendar-event me-2"></i> **{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}** | {{ $event->from_to }}
                    </p>
                    <p>{{ Str::limit(strip_tags($event->text), 100) }}</p>
                  </div>
                </div>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="eventModal{{ $event->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                      <div class="text-center mb-4">
                        <img src="{{ asset('images/events/' . $event->image) }}" class="img-fluid rounded shadow-sm mb-4" alt="{{ $event->title }}" style="max-height: 350px; object-fit: cover; width: 100%;">
                        <h3 class="modal-title fw-bold mb-2" id="eventModalLabel">{{ $event->title }}</h3>
                        <p class="text-muted fst-italic mb-1">
                          <i class="bi bi-calendar-event me-2"></i> **{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}** | {{ $event->from_to }}
                        </p>
                        <p class="text-muted fst-italic mb-0">
                          <i class="bi bi-geo-alt me-2"></i> **{{ $event->address }}**
                        </p>
                      </div>

                      <hr class="my-4">

                      <div class="px-4">
                        {!! $event->text !!}
                      </div>
                    </div>
                    <div class="modal-footer border-0 pt-0">
                      @if(!empty($event->reg_url))<a href="{{ $event->reg_url }}" class="btn btn-primary shadow-sm">Register Now</a>@endif
                      <button type="button" class="btn btn-outline-secondary shadow-sm" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          
          </div>
          <!-- End Portfolio Container -->

        </div>

      </div>

    </section>

    <section id="category-section" class="category-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Lates News</h2>
        <p>Stay Informed: Our Latest Updates<br></p>
      </div><!-- End Section Title -->

      <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">
  
        <!-- List Posts -->
        <div class="row">
          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">AI Photonics</span>
                </div>
                <h3 class="title">
                  <a href="{{ route('index.single-news', 'slug') }}">Quis autem vel eum iure reprehenderit qui in ea voluptate</a>
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
                <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-2.webp') }}" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Nano Technology</span>
                </div>
                <h3 class="title">
                  <a href="{{ route('index.single-news', 'slug') }}">At vero eos et accusamus et iusto</a>
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
                <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Water Modeling</span>
                </div>
                <h3 class="title">
                  <a href="{{ route('index.single-news', 'slug') }}">Et harum quidem rerum facilis est et expedita distinctio</a>
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
                <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">GIS Modeling</span>
                </div>
                <h3 class="title">
                  <a href="{{ route('index.single-news', 'slug') }}">Nam libero tempore, cum soluta nobis est eligendi</a>
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
                <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">AI Photonics</span>
                </div>
                <h3 class="title">
                  <a href="{{ route('index.single-news', 'slug') }}">Temporibus autem quibusdam et aut officiis debitis</a>
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
                <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-2.webp') }}" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">AI Photonics</span>
                </div>
                <h3 class="title">
                  <a href="{{ route('index.single-news', 'slug') }}">Itaque earum rerum hic tenetur a sapiente delectus</a>
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

    <section id="stats" class="stats section light-background" style="background: linear-gradient(to right, #39b54a, #007cc2); color: white; padding: 80px 0; text-align: center;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 style="font-weight: 700; font-size: 2rem; margin-bottom: 10px; color: #ffffff;">Your Solution Hub</h2>
        <p style="font-size: 1.1rem; margin-bottom: 30px;">
          Navigate with ease. Expertise and support are just a click away.
        </p>
        <a href="{{ route('index.help-center') }}" class="btn btn-light" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite; margin: 5px;">
          Help Center
        </a>
        <a href="{{ route('index.information-center') }}" class="btn btn-dark" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite; margin: 5px;">
          Information Center
        </a>
      </div>
    </section>


@endsection

@section('third_party_scripts')

@endsection