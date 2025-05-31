@extends('layouts.index')
@section('title') CactusNANO - develops powerful, long-lasting antimicrobial, antifouling technology | @endsection

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

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">PLAN. LAUNCH. GROW.</h2>
        <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#about" class="btn-get-started">Get Started</a>
          <a href="https://www.youtube.com/watch?v=U6fC4Ij608A" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>

    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident laboris nisi ut aliquip ex ea commodo</h3>
            {{-- <img src="{{ asset('vendor/dewi/assets/img/about.jpg') }}" class="img-fluid rounded-4 mb-4" alt=""> --}}
            <img src="{{ asset('images/Electronic-Chip.webp') }}" class="img-fluid rounded-4 mb-4" alt="">
            <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
            <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
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

    <section id="stats" class="team section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div style="background: linear-gradient(135deg, #5aa6de, #91c6eb); border-radius: 20px; padding: 30px; color: white;">
              <h4 style="font-weight: bold;">Products</h4>
              <p style="color: #f0f0f0;">We offer end-to-end, turnkey treatment systems. Our portfolio of solutions is fully engineered to deliver specific results to your exacting requirements.</p>
              <a href="#" style="display: inline-block; margin-top: 15px; background-color: #205ed7; padding: 10px 20px; color: white; border-radius: 25px; font-weight: 600; text-transform: uppercase; font-size: 14px;">Explore Further</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div style="background: linear-gradient(135deg, #ba5ddc, #cab5ee); border-radius: 20px; padding: 30px; color: white;">
              <h4 style="font-weight: bold;">Markets</h4>
              <p style="color: #f5f5f5;">We serve the world’s most important industries, delivering bespoke, sustainable solutions for critical water challenges in every corner of the planet.</p>
              <a href="#" style="display: inline-block; margin-top: 15px; background-color: #9b18b9; padding: 10px 20px; color: white; border-radius: 25px; font-weight: 600; text-transform: uppercase; font-size: 14px;">Explore Further</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div style="background: linear-gradient(135deg, #4eb3b0, #a5d8d6); border-radius: 20px; padding: 30px; color: white;">
              <h4 style="font-weight: bold;">Success Stories</h4>
              <p style="color: #f2f2f2;">We develop custom formulations in-house to meet the high-performance specifications our customers and technologies demand. We formulate for all site-wide applications.</p>
              <a href="#" style="display: inline-block; margin-top: 15px; background-color: #0b7b74; padding: 10px 20px; color: white; border-radius: 25px; font-weight: 600; text-transform: uppercase; font-size: 14px;">Explore Further</a>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

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

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Featured Srvices<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('vendor/dewi/assets/img/services-1.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Nesciunt Mete</h3>
                </a>
                <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('vendor/dewi/assets/img/services-2.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Eosle Commodi</h3>
                </a>
                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('vendor/dewi/assets/img/services-3.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Ledo Markt</h3>
                </a>
                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Partners</h2>
        <p>Our Clients & Collaborators</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->


          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('vendor/dewi/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Events</h2>
        <p>Discover Our Latest Happenings</p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <i class="bi bi-binoculars"></i>
              <h4 class="d-none d-lg-block">Event 1: Ttitle</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <i class="bi bi-box-seam"></i>
              <h4 class="d-none d-lg-block">Event 2: Ttitle</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <i class="bi bi-brightness-high"></i>
              <h4 class="d-none d-lg-block">Event 3: Ttitle</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
              <i class="bi bi-command"></i>
              <h4 class="d-none d-lg-block">Event 4: Ttitle</h4>
            </a>
          </li>
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <spab>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</spab>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit</span>.</li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('vendor/dewi/assets/img/working-1.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
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
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('vendor/dewi/assets/img/working-4.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <section id="features-alt" class="features-alt section">

          <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">
              <div class="col-lg-4">
                <ul class="nav nav-tabs flex-column aos-init aos-animate" role="tablist" data-aos="fade-right" data-aos-delay="200">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#features-alt-tab-1" role="tab" aria-selected="true">
                      <div class="d-flex align-items-center">
                        <div class="icon-box">
                          <i class="bi bi-people"></i>
                        </div>
                        <div class="ms-3">
                          <h4>Vestibulum ante ipsum</h4>
                          <p>Proin iaculis purus consequat</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-alt-tab-2" role="tab" aria-selected="false" tabindex="-1">
                      <div class="d-flex align-items-center">
                        <div class="icon-box">
                          <i class="bi bi-heart"></i>
                        </div>
                        <div class="ms-3">
                          <h4>Curabitur aliquet quam</h4>
                          <p>Nulla quis lorem ut libero</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-alt-tab-3" role="tab" aria-selected="false" tabindex="-1">
                      <div class="d-flex align-items-center">
                        <div class="icon-box">
                          <i class="bi bi-house-heart"></i>
                        </div>
                        <div class="ms-3">
                          <h4>Luna stride flared</h4>
                          <p>Sed ut perspiciatis unde omnis</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-alt-tab-4" role="tab" aria-selected="false" tabindex="-1">
                      <div class="d-flex align-items-center">
                        <div class="icon-box">
                          <i class="bi bi-person-heart"></i>
                        </div>
                        <div class="ms-3">
                          <h4>Quisque Velit Nisi</h4>
                          <p>Duis aute irure dolor in</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-alt-tab-5" role="tab" aria-selected="false" tabindex="-1">
                      <div class="d-flex align-items-center">
                        <div class="icon-box">
                          <i class="bi bi-briefcase"></i>
                        </div>
                        <div class="ms-3">
                          <h4>Curabitur Aliquet</h4>
                          <p>Excepteur sint occaecat cupidatat</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-8">
                <div class="tab-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                  <div class="tab-pane fade active show" id="features-alt-tab-1" role="tabpanel">
                    <div class="content-box">
                      <div class="row g-4">
                        <div class="col-lg-6">
                          <h3>Nullam Lacinia Consectetur</h3>
                          <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec velit
                            neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                          <p class="highlight">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam
                            sit amet quam vehicula elementum sed sit amet dui.</p>
                          <ul class="features-list">
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Curabitur aliquet quam id dui posuere blandit</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Nulla quis lorem ut libero malesuada feugiat</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Vestibulum ac diam sit amet quam vehicula</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Donec rutrum congue leo eget malesuada</span>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-6">
                          <div class="image-box">
                            <img src="assets/img/misc/misc-square-6.webp" alt="" class="img-fluid" loading="lazy">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="features-alt-tab-2" role="tabpanel">
                    <div class="content-box">
                      <div class="row g-4">
                        <div class="col-lg-6">
                          <h3>Sed Porttitor Lectus Nibh</h3>
                          <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus.
                            Vestibulum ante ipsum primis in faucibus.</p>
                          <p class="highlight">Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero
                            malesuada feugiat.</p>
                          <ul class="features-list">
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Vivamus suscipit tortor eget felis porttitor</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Curabitur aliquet quam id dui posuere</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Nulla quis lorem ut libero malesuada</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Vestibulum ac diam sit amet quam</span>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-6">
                          <div class="image-box">
                            <img src="assets/img/misc/misc-square-13.webp" alt="" class="img-fluid" loading="lazy">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="features-alt-tab-3" role="tabpanel">
                    <div class="content-box">
                      <div class="row g-4">
                        <div class="col-lg-6">
                          <h3>Praesent Sapien Massa</h3>
                          <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in
                            faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                          <p class="highlight">Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula
                            elementum sed sit amet dui.</p>
                          <ul class="features-list">
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Curabitur non nulla sit amet nisl</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Vestibulum ac diam sit amet quam</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Donec rutrum congue leo eget</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Nulla quis lorem ut libero</span>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-6">
                          <div class="image-box">
                            <img src="assets/img/misc/misc-square-3.webp" alt="" class="img-fluid" loading="lazy">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="features-alt-tab-4" role="tabpanel">
                    <div class="content-box">
                      <div class="row g-4">
                        <div class="col-lg-6">
                          <h3>Curabitur Aliquet Quam</h3>
                          <p>Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit
                            amet dui. Curabitur aliquet quam id dui posuere blandit.</p>
                          <p class="highlight">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur
                            non nulla sit amet nisl tempus.</p>
                          <ul class="features-list">
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Nulla quis lorem ut libero malesuada</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Curabitur aliquet quam id dui</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Vestibulum ac diam sit amet</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Donec rutrum congue leo</span>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-6">
                          <div class="image-box">
                            <img src="assets/img/misc/misc-square-5.webp" alt="" class="img-fluid" loading="lazy">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="features-alt-tab-5" role="tabpanel">
                    <div class="content-box">
                      <div class="row g-4">
                        <div class="col-lg-6">
                          <h3>Vestibulum Ante Ipsum</h3>
                          <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut
                            lacinia in, elementum id enim.</p>
                          <p class="highlight">Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula
                            elementum sed sit amet dui.</p>
                          <ul class="features-list">
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Vivamus suscipit tortor eget felis</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Curabitur aliquet quam id dui</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Nulla quis lorem ut libero</span>
                            </li>
                            <li>
                              <i class="bi bi-check2-circle"></i>
                              <span>Vestibulum ac diam sit amet</span>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-6">
                          <div class="image-box">
                            <img src="assets/img/misc/misc-square-3.webp" alt="" class="img-fluid" loading="lazy">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>

    


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
                      "delay": 5000
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
                <div class="swiper-wrapper" id="swiper-wrapper-9c7a64342fe292c6" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-744.667px, 0px, 0px); transition-delay: 0ms;">

                  <div class="swiper-slide" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="1 / 5" data-swiper-slide-index="0">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                      </p>
                      <div class="profile mt-auto">
                        <img src="{{ asset('vendor/dewi/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide swiper-slide-prev" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="2 / 5" data-swiper-slide-index="1">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      </p>
                      <div class="profile mt-auto">
                        <img src="{{ asset('vendor/dewi/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide swiper-slide-active" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="3 / 5" data-swiper-slide-index="2">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      </p>
                      <div class="profile mt-auto">
                        <img src="{{ asset('vendor/dewi/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide swiper-slide-next" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="4 / 5" data-swiper-slide-index="3">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                      </p>
                      <div class="profile mt-auto">
                        <img src="{{ asset('vendor/dewi/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide" role="group" aria-label="5 / 5" data-swiper-slide-index="4" style="width: 371.333px; margin-right: 1px;">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                      </p>
                      <div class="profile mt-auto">
                        <img src="{{ asset('vendor/dewi/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

            </div>

    </section><!-- /Testimonials Section -->

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

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
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

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
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

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

    <section id="stats" class="stats section light-background" style="background: linear-gradient(to right, #39b54a, #007cc2); color: white; padding: 80px 0; text-align: center;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 style="font-weight: 700; font-size: 2rem; margin-bottom: 10px; color: #ffffff;">Innovating with Nature</h2>
        <p style="font-size: 1.1rem; margin-bottom: 30px;">
          Advanced materials and smart technologies for a sustainable future.
        </p>
        <a href="#contact" class="btn btn-light" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px;">
          Connect with Us
        </a>
      </div>
    </section>


@endsection

@section('third_party_scripts')

@endsection