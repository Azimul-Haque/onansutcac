@extends('layouts.index')
@section('title') CactusNANO - develops powerful, long-lasting antimicrobial, antifouling technology @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      {{-- <img src="{{ asset('vendor/dewi/assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in"> --}}
      {{-- <img src="{{ asset('images/ElectNano-Gif-compressed.webp') }}" alt="CactusNANO - develops powerful, long-lasting antimicrobial, antifouling technology" data-aos="fade-in"> --}}
      <video autoplay loop muted playsinline class="position-absolute w-100 h-100 object-fit-cover" style="z-index: 0;">
        <source src="{{ asset('images/water-drop.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>

      <div class="container d-flex flex-column align-items-center text-center">
        <h2 data-aos="fade-up" data-aos-delay="100">
          <div class="transparent-box p-5 rounded-3 shadow-lg">
              <div class="d-flex flex-column align-items-center justify-content-center text-center">
                  <h1 class="fs-1 fw-bold text-teal-200 mb-2" style="max-width: 700px;">
                      {{ strip_tags($metadata[8]->content) }}
                  </h2>
              </div>
          </div>
        </h2>
        <style>
          .transparent-box {
              background-color: rgba(255, 255, 255, 0.1);
              backdrop-filter: blur(5px);
              transition: transform 0.3s ease-in-out;
          }
          .transparent-box:hover {
              transform: scale(1.05);
          }
        </style>
        <p data-aos="fade-up" data-aos-delay="200"><small>{{ strip_tags($metadata[9]->content) }}</small></p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          {{-- <a href="#about" class="btn-get-started">Get Started</a>
          <a href="https://www.youtube.com/watch?v=U6fC4Ij608A" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
        </div>
      </div>

    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Science at the Nanoscale. Impact at the Global Scale</h3>
            {{-- <img src="{{ asset('vendor/dewi/assets/img/about.jpg') }}" class="img-fluid rounded-4 mb-4" alt=""> --}}
            <img src="{{ asset('images/Electronic-Chip.webp') }}" class="img-fluid rounded-4 mb-4" alt="">
            <p>CactusNano is a materials science and nanotechnology company dedicated to solving some of the world’s most pressing challenges in health, environment, and technology. Cactus Nano TM, a spin-off from Cactus Materials, Inc. (a US-based semiconductor and advanced materials company), focuses on innovative products like CoreSil™ Membrane, Suspension, and Powder for textile, water, medical, and space industries.</p>

            <p>With research-driven innovation and partnerships across textiles, electronics, water treatment, and consumer products, we design nanoscale solutions that integrate seamlessly into everyday life while enhancing durability, efficiency, and sustainability. Cactus collaborates with academia and national agencies, including NASA and Arizona State University, to develop advanced materials—particularly its antimicrobial technology, the core of its materials division. CoreSil™ RO membranes outperform conventional systems in wastewater, surface water, and seawater treatment. Cactus also partners with top US firms to provide integrated water treatment solutions</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                CactusNano is a nanotechnology company developing innovative, sustainable materials like CoreSil™ for water treatment, medical, and textile industries.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span><b>CoreSil™ Technology:</b> Innovative nanoscale material used for water and textile applications.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span><b>Strategic Partnerships:</b> Collaborates with organizations like NASA and Arizona State University.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span><b>Sustainable Focus:</b> Aims to improve the efficiency and durability of products for a more sustainable world.</span></li>
              </ul>
              <p>
                Founded in 2016 as part of Cactus Materials, Cactus Nano officially became a separate entity in 2023. It gained global recognition through projects with NASA, USTDA, and PFAS research supported by the US Department of Energy.
              </p>

              <div class="position-relative mt-4">
                {{-- <img src="{{ asset('vendor/dewi/assets/img/about-2.jpg') }}" class="img-fluid rounded-4" alt=""> --}}
                <img src="{{ asset('images/AI-Photonics.png') }}" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=U6fC4Ij608A" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    {{-- <section id="stats" class="team section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div style="background: linear-gradient(135deg, #5aa6de, #91c6eb); border-radius: 20px; padding: 30px; color: white;">
              <h4 style="font-weight: bold;">Products</h4>
              <p style="color: #f0f0f0;">We offer end-to-end, turnkey treatment systems. Our portfolio of solutions is fully engineered to deliver specific results to your exacting requirements.</p>
              <a href="{{ route('index.products') }}" style="display: inline-block; margin-top: 15px; background-color: #205ed7; padding: 10px 20px; color: white; border-radius: 25px; font-weight: 600; text-transform: uppercase; font-size: 14px;">Explore Further</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div style="background: linear-gradient(135deg, #ba5ddc, #cab5ee); border-radius: 20px; padding: 30px; color: white;">
              <h4 style="font-weight: bold;">Industries</h4>
              <p style="color: #f5f5f5;">We serve the world’s most important industries, delivering bespoke, sustainable solutions for critical water challenges in every corner of the planet.</p>
              <a href="{{ route('index.markets') }}" style="display: inline-block; margin-top: 15px; background-color: #9b18b9; padding: 10px 20px; color: white; border-radius: 25px; font-weight: 600; text-transform: uppercase; font-size: 14px;">Explore Further</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div style="background: linear-gradient(135deg, #4eb3b0, #a5d8d6); border-radius: 20px; padding: 30px; color: white;">
              <h4 style="font-weight: bold;">Success Stories</h4>
              <p style="color: #f2f2f2;">We develop custom formulations in-house to meet the high-performance specifications our customers and technologies demand. We formulate for all site-wide applications.</p>
              <a href="{{ route('index.success-stories') }}" style="display: inline-block; margin-top: 15px; background-color: #0b7b74; padding: 10px 20px; color: white; border-radius: 25px; font-weight: 600; text-transform: uppercase; font-size: 14px;">Explore Further</a>
            </div>
          </div>

        </div>
      </div>

    </section> --}}

    <!-- Stats Section -->
    {{-- <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15000" data-purecounter-duration="2" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
                <p>Engineers & Scientists</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-globe-americas color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="2" class="purecounter"></span>
                <p>Global Offices</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section> --}}

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Products & Technologies</h2>
        <p>Featured Products & Technologies<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
          @foreach($featuredprodandtechs as $product)
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="service-item">
                <div class="img">
                  @if($product->image)
                      <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->title }}" class="img-fluid">
                  @else
                      <img src="{{ asset('vendor/dewi/assets/img/services-1.jpg') }}" class="img-fluid" alt="">
                  @endif
                  <!-- Product Type Tag -->
                  <span class="badge bg-primary position-absolute top-0 end-0 m-2" style="font-size: 0.85em; padding: 0.3em 0.6em; border-radius: 0.3rem;">
                      {{ prod_type($product->type) ?? 'Product Type' }} <!-- Replace $product->type with your actual variable -->
                  </span>
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-activity"></i>
                  </div>
                  <a href="{{ route('index.singleproduct', $product->slug) }}" class="stretched-link">
                    <h3>{{ $product->title }}</h3>
                  </a>
                  <p>{{ Str::limit(strip_tags($product->text), 100) }}</p>
                </div>
              </div>
            </div>
          @endforeach

        </div>

      </div>

    </section><!-- /Services Section -->

    <section id="clients" class="clients section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Partners</h2>
        <p>Our Clients & Collaborators</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          @foreach($clientsforhomepage as $client)
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('images/clients/' . $client->image) }}" class="img-fluid" alt="{{ $client->name }}" title="{{ $client->name }}">
          </div><!-- End Client Item -->
          @endforeach
        </div>

      </div>

    </section>

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Events</h2>
        <p>Discover Our Latest Happenings</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          @foreach($featuredevents as $key => $event)
          <li class="nav-item col-3">
            <a class="nav-link {{ $key == 0 ? 'show active' : '' }}" data-bs-toggle="tab" data-bs-target="#features-{{ $event->id }}">
              <i class="bi bi-binoculars"></i>
              <h4 class="d-none d-lg-block">Event 1: {{ $event->title }}</h4>
            </a>
          </li>
          @endforeach
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
          @foreach($featuredevents as $key => $event)
          <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="features-{{ $event->id }}">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>{{ $event->title }}</h3>
                <div class="card mb-3" style="max-width: 400px;">
                  <div class="card-body py-2">
                    <h6 class="card-subtitle mb-2 text-muted">Event Details</h6>
                    <div class="meta-item d-flex align-items-center mb-1">
                      <i class="bi bi-clock me-2"></i>
                      <span>{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }} | {{ $event->from_to }}</span>
                    </div>
                    <div class="meta-item d-flex align-items-center">
                      <i class="bi bi-geo-alt me-2"></i>
                      <span>{{ $event->address }}</span>
                    </div>
                  </div>
                </div>

                <style>
                  /* Optional: Add some basic styling for meta-item if not already defined */
                  .meta-item {
                    font-size: 0.95rem; /* Slightly larger font */
                    color: #495057; /* Darker text */
                  }
                  .meta-item i {
                    color: #0d6efd; /* Bootstrap primary color for icons */
                  }
                </style>
                {!! $event->text !!}
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('images/events/' . $event->image) }}" class="img-fluid" alt="{{ $event->title }}" loading="lazy">
              </div>
            </div>
            @if(!empty($event->reg_url))<a href="{{ $event->reg_url }}" class="btn btn-primary shadow-sm">Register Now</a>@endif
          </div><!-- End Tab Content Item -->
          @endforeach

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                <div class="card mb-3" style="max-width: 300px;">
                  <div class="card-body py-2">
                    <h6 class="card-subtitle mb-2 text-muted">Event Details</h6>
                    <div class="meta-item d-flex align-items-center mb-1">
                      <i class="bi bi-clock me-2"></i>
                      <span>01:00 PM - 07:00 PM</span>
                    </div>
                    <div class="meta-item d-flex align-items-center">
                      <i class="bi bi-geo-alt me-2"></i>
                      <span>Various Classrooms</span>
                    </div>
                  </div>
                </div>

                <style>
                  /* Optional: Add some basic styling for meta-item if not already defined */
                  .meta-item {
                    font-size: 0.95rem; /* Slightly larger font */
                    color: #495057; /* Darker text */
                  }
                  .meta-item i {
                    color: #0d6efd; /* Bootstrap primary color for icons */
                  }
                </style>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('vendor/dewi/assets/img/working-2.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                <div class="card mb-3" style="max-width: 300px;">
                  <div class="card-body py-2">
                    <h6 class="card-subtitle mb-2 text-muted">Event Details</h6>
                    <div class="meta-item d-flex align-items-center mb-1">
                      <i class="bi bi-clock me-2"></i>
                      <span>01:00 PM - 07:00 PM</span>
                    </div>
                    <div class="meta-item d-flex align-items-center">
                      <i class="bi bi-geo-alt me-2"></i>
                      <span>Various Classrooms</span>
                    </div>
                  </div>
                </div>

                <style>
                  /* Optional: Add some basic styling for meta-item if not already defined */
                  .meta-item {
                    font-size: 0.95rem; /* Slightly larger font */
                    color: #495057; /* Darker text */
                  }
                  .meta-item i {
                    color: #0d6efd; /* Bootstrap primary color for icons */
                  }
                </style>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('vendor/dewi/assets/img/working-3.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                <div class="card mb-3" style="max-width: 300px;">
                  <div class="card-body py-2">
                    <h6 class="card-subtitle mb-2 text-muted">Event Details</h6>
                    <div class="meta-item d-flex align-items-center mb-1">
                      <i class="bi bi-clock me-2"></i>
                      <span>01:00 PM - 07:00 PM</span>
                    </div>
                    <div class="meta-item d-flex align-items-center">
                      <i class="bi bi-geo-alt me-2"></i>
                      <span>Various Classrooms</span>
                    </div>
                  </div>
                </div>

                <style>
                  /* Optional: Add some basic styling for meta-item if not already defined */
                  .meta-item {
                    font-size: 0.95rem; /* Slightly larger font */
                    color: #495057; /* Darker text */
                  }
                  .meta-item i {
                    color: #0d6efd; /* Bootstrap primary color for icons */
                  }
                </style>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up">
                <img src="{{ asset('vendor/dewi/assets/img/working-4.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

        <div class="text-center mt-5">
          <a href="{{ route('index.events') }}" style="display: inline-block; margin-top: 15px; background-color: #205ed7; padding: 10px 20px; color: white; border-radius: 25px; font-weight: 600; text-transform: uppercase; font-size: 14px;">View All Events</a>
        </div>

      </div>

      

    </section><!-- /Features Section -->

    <!-- Clients Section -->
    <section id="clients" class="recent-news section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
        <h2>In the News</h2>
        <p>Where Our Journey Unfolds</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          @foreach($newsforhomepage as $news)
            @php
              $modulo_index = ($loop->iteration - 1) % 3;
              $delay = 200 + ($modulo_index * 100);
            @endphp
            <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="{{ $delay }}">
              <article>

                <div class="post-img">
                  <a href="@if($news->type == 3) {{ $news->newslink }} @else {{ route('index.single-news', $news->slug) }} @endif" @if($news->type == 3) target="_blank" @endif><img src="{{ asset('images/news/' . $news->image) }}" alt="" class="img-fluid"></a>
                </div>

                <p class="post-category">{{ $news->newscategory->name }}</p>

                <h2 class="title">
                  <a href="@if($news->type == 3) {{ $news->newslink }} @else {{ route('index.single-news', $news->slug) }} @endif" @if($news->type == 3) target="_blank" @endif>{{ $news->title }}</a>
                </h2>

                <div class="d-flex align-items-center">
                  <div class="post-meta">
                    <p class="post-author">{{ news_type($news->type) }}</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">{{ date('F d, Y', strtotime($news->created_at)) }}</time>
                    </p>
                  </div>
                </div>
                <a href="@if($news->type == 3) {{ $news->newslink }} @else {{ route('index.single-news', $news->slug) }} @endif" class="newsroom-item-link" @if($news->type == 3) target="_blank" @endif>Read more</a>

              </article>
            </div>
          @endforeach
        </div>

        <div class="text-center mt-5">
          <a href="{{ route('index.news') }}" style="display: inline-block; margin-top: 15px; background-color: #205ed7; padding: 10px 20px; color: white; border-radius: 25px; font-weight: 600; text-transform: uppercase; font-size: 14px;">Read All News</a>
        </div>


      </div>

    </section><!-- /Clients Section -->



    


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Hear From Our Clients</p>
      </div><!-- End Section Title -->

      {{-- <img src="{{ asset('vendor/dewi/assets/img/testimonials-bg.jpg') }}" class="testimonials-bg" alt=""> --}}
      <img src="{{ asset('images/factory.png') }}" class="testimonials-bg" alt="">

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

              <div class="swiper init-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 4000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "breakpoints": {
                      "320": {
                        "slidesPerView": 1,
                        "spaceBetween": 40
                      },
                      "1200": {
                        "slidesPerView": 3,
                        "spaceBetween": 1
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper" id="swiper-wrapper-9c7a64342fe292c6" aria-live="off" >
                  @foreach($testimonials as $key => $testimonial)
                  <div class="swiper-slide" style="width: 371.333px; min-height: 370px; margin-right: 1px;" role="group" aria-label="{{ $key + 1 }} / 6" data-swiper-slide-index="0">
                    <div class="testimonial-item">
                      <div class="stars">
                        @for ($i = 1; $i <= $testimonial->rating; $i++)
                            <i class="bi bi-star-fill"></i>
                        @endfor
                      </div>
                      <p>
                        {{ $testimonial->text }}
                      </p>
                      <div class="profile mt-auto">
                        <img src="{{ asset('images/testimonials/' . $testimonial->image) }}" class="testimonial-img" alt="{{ $testimonial->name }}">
                        <h3>{{ $testimonial->name }}</h3>
                        <h4>{{ $testimonial->designation }}</h4>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

              {{-- <div class="text-center mt-5">
                <a href="{{ route('index.testimonials') }}" style="display: inline-block; margin-top: 15px; background-color: #205ed7; padding: 10px 20px; color: white; border-radius: 25px; font-weight: 600; text-transform: uppercase; font-size: 14px;">See All Endorsements</a>
              </div> --}}

            </div>

    </section><!-- /Testimonials Section -->
    <style>
      .testimonial-item {
        /* Background with 50% transparency */
        background-color: rgba(0, 0, 0, 0.5); /* Black with 50% opacity */

        /* Rounded borders */
        border-radius: 15px; /* Adjust as needed for desired roundness */

        /* Optional: Add some padding to prevent content from touching edges */
        padding: 10px;

        /* Optional: Ensure text color is visible on dark background */
        color: #fff; /* White text for readability */
        margin-left: 10px;
        margin-right: 10px;
      }

      /* You might need to adjust other testimonial item styles as well */
      .testimonial-item h3,
      .testimonial-item h4 {
        color: #fff; /* Ensure names are white */
      }

      .testimonial-item .stars i {
        color: #ffc107; /* Bootstrap yellow for stars (or your desired star color) */
      }
    </style>

    <!-- Portfolio Section -->
    {{-- <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>CHECK OUR PORTFOLIO</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="{{ asset('vendor/dewi/assets/img/portfolio/app-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="{{ asset('vendor/dewi/assets/img/portfolio/product-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding filter-books">
              <div class="portfolio-content h-100">
                <img src="{{ asset('vendor/dewi/assets/img/portfolio/branding-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="{{ asset('vendor/dewi/assets/img/portfolio/books-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app filter-books">
              <div class="portfolio-content h-100">
                <img src="{{ asset('vendor/dewi/assets/img/portfolio/app-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="{{ asset('vendor/dewi/assets/img/portfolio/product-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="{{ asset('vendor/dewi/assets/img/portfolio/branding-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="{{ asset('vendor/dewi/assets/img/portfolio/books-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="{{ asset('vendor/dewi/assets/img/portfolio/app-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="{{ asset('vendor/dewi/assets/img/portfolio/product-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="{{ asset('vendor/dewi/assets/img/portfolio/branding-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="{{ asset('vendor/dewi/assets/img/portfolio/books-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section> --}}
    <!-- /Portfolio Section -->

    <!-- Team Section -->
    {{-- <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>CHECK OUR TEAM</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="{{ asset('vendor/dewi/assets/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="{{ asset('vendor/dewi/assets/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="{{ asset('vendor/dewi/assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section> --}}
    <!-- /Team Section -->


    <section id="stats" class="stats section light-background" style="background: linear-gradient(to right, #39b54a, #007cc2); color: white; padding: 80px 0; text-align: center;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 style="font-weight: 700; font-size: 2rem; margin-bottom: 10px; color: #ffffff;">Innovating with Nature</h2>
        <p style="font-size: 1.1rem; margin-bottom: 30px;">
          Advanced materials and smart technologies for a sustainable future.
        </p>
        <a href="{{ route('index.get-contact') }}" class="btn btn-light" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite; margin: 5px;">
          Connect with Us
        </a>
        <a href="{{ route('index.information-center') }}" class="btn btn-dark" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite; margin: 5px;">
          Information Center
        </a>
      </div>
    </section>


@endsection

@section('third_party_scripts')

@endsection