@extends('layouts.index')
@section('title') Industries/Projects @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/market-background-top.gif') }}');">
      <div class="container position-relative">
        <h1>Industries/Projects</h1>
        <p>Discover the Industries We Empower</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Industries & Projects</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    

    <!-- services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Industries/Projects</h2>
        <p>Explore Our Range of Quality Offerings<br></p>
      </div><!-- End Section Title -->

      <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center g-5">
          @php
            $biicons = ['code-slash', 'palette2', 'phone-fill', 'bar-chart-line', 'cloud-check', 'shield-lock']
          @endphp
          @foreach($markets as $market)
            @php
              $modulo_index = ($loop->iteration - 1) % 2;
              $delay = 100 + ($modulo_index * 100);
              if($modulo_index == 0) {
                $datadirection = 'fade-right';
              } else {
                $datadirection = 'fade-left';
              }
            @endphp
            <div class="col-md-6 aos-init" data-aos="{{ $datadirection }}" data-aos-delay="{{ $delay }}">
              <div class="service-item">
                <div class="service-icon">
                  <i class="bi bi-{{ $biicons[$loop->iteration - 1] }}"></i>
                </div>
                <div class="service-content">
                  <span class="badge bg-primary position-absolute top-0 end-0 m-2" style="font-size: 0.75em; padding: 0.3em 0.75em; border-radius: 0.4rem;">
                      {{ ind_type($market->type) ?? 'Product Type' }} <!-- Replace $product->type with your actual variable -->
                  </span>
                  <h3><a href="{{ route('index.singlemarket', $market->slug) }}" style="color: var(--heading-color);">{{ $market->title }}</a></h3>
                  <p>{{ Str::limit(strip_tags($market->text), 200) }}</p>
                  <a href="{{ route('index.singlemarket', $market->slug) }}" class="service-link">
                    <span>Learn More</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          @endforeach

        </div>

      </div>

    </section><!-- /services Section -->
    <style>
      /*--------------------------------------------------------------
      # Services Section
      --------------------------------------------------------------*/
      .services .service-item {
        display: flex;
        background-color: var(--surface-color);
        border-radius: 12px;
        padding: 2rem;
        height: 100%;
        position: relative;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.03);
        transition: all 0.4s ease;
      }

      .services .service-item::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background-color: var(--accent-color);
        transform: scaleY(0);
        transform-origin: bottom;
        transition: transform 0.4s cubic-bezier(0.65, 0, 0.35, 1);
      }

      .services .service-item:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transform: translateY(-5px);
      }

      .services .service-item:hover::before {
        transform: scaleY(1);
      }

      .services .service-item:hover .service-icon {
        background-color: var(--accent-color);
        color: var(--contrast-color);
        transform: rotateY(180deg);
      }

      .services .service-item:hover .service-icon i {
        transform: rotateY(180deg);
      }

      .services .service-item:hover .service-link i {
        transform: translateX(5px);
      }

      .services .service-icon {
        flex-shrink: 0;
        width: 70px;
        height: 70px;
        border-radius: 12px;
        background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
        color: var(--accent-color);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1.5rem;
        transition: all 0.5s ease;
      }

      .services .service-icon i {
        font-size: 2rem;
        transition: transform 0.5s ease;
      }

      .services .service-content {
        flex-grow: 1;
      }

      .services .service-content h3 {
        font-size: 1.4rem;
        margin-bottom: 1rem;
        font-weight: 700;
        color: var(--heading-color);
      }

      .services .service-content p {
        margin-bottom: 1.25rem;
        color: color-mix(in srgb, var(--default-color), transparent 20%);
      }

      .services .service-link {
        display: inline-flex;
        align-items: center;
        color: var(--accent-color);
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease;
      }

      .services .service-link span {
        margin-right: 0.5rem;
      }

      .services .service-link i {
        transition: transform 0.3s ease;
      }

      .services .service-link:hover {
        color: color-mix(in srgb, var(--accent-color), transparent 25%);
      }

      @media (max-width: 767.98px) {
        .services .service-item {
          padding: 1.5rem;
          margin-bottom: 1rem;
        }

        .services .service-icon {
          width: 60px;
          height: 60px;
          margin-right: 1rem;
        }

        .services .service-icon i {
          font-size: 1.5rem;
        }

        .services .service-content h3 {
          font-size: 1.2rem;
          margin-bottom: 0.75rem;
        }

        .services .service-content p {
          margin-bottom: 1rem;
          font-size: 0.95rem;
        }
      }

      @media (max-width: 575.98px) {
        .services .service-item {
          flex-direction: column;
          text-align: center;
        }

        .services .service-item::before {
          width: 100%;
          height: 4px;
          transform: scaleX(0);
          transform-origin: left;
        }

        .services .service-item:hover::before {
          transform: scaleX(1);
        }

        .services .service-icon {
          margin-right: 0;
          margin-bottom: 1.25rem;
        }

        .services .service-link {
          justify-content: center;
        }
      }
    </style>

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Stats</h2>
        <p>A Legacy of Progress</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                <p>Years of Hard Work</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
                <p>Engineers & Scientists</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
                <p>Nationalities</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                <p>Industry Awards</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
                <p>Global Offices</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
                <p>Nationalities</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <section id="services" class="services section light-background">

          <!-- Section Title -->
          <div class="container section-title aos-init" data-aos="fade-up">
            <h2>Services</h2>
            <p>Our Distinct Edge</p>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row gy-4">

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-cash-stack" style="color: #0dcaf0;"></i>
                  </div>
                  <a href="#!" class="stretched-link">
                    <h3>Nesciunt Mete</h3>
                  </a>
                  <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-calendar4-week" style="color: #fd7e14;"></i>
                  </div>
                  <a href="#!" class="stretched-link">
                    <h3>Eosle Commodi</h3>
                  </a>
                  <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-chat-text" style="color: #20c997;"></i>
                  </div>
                  <a href="#!" class="stretched-link">
                    <h3>Ledo Markt</h3>
                  </a>
                  <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-credit-card-2-front" style="color: #df1529;"></i>
                  </div>
                  <a href="#!" class="stretched-link">
                    <h3>Asperiores Commodit</h3>
                  </a>
                  <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-globe" style="color: #6610f2;"></i>
                  </div>
                  <a href="#!" class="stretched-link">
                    <h3>Velit Doloremque</h3>
                  </a>
                  <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-clock" style="color: #f3268c;"></i>
                  </div>
                  <a href="#!" class="stretched-link">
                    <h3>Dolori Architecto</h3>
                  </a>
                  <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                </div>
              </div><!-- End Service Item -->

            </div>

          </div>

        </section>


@endsection

@section('third_party_scripts')

@endsection