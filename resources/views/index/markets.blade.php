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
        <p>Explore Our Range Accross The Industries<br></p>
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

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">

                <div class="post-img">
                  @if($market->image)
                      <img src="{{ asset('images/markets/' . $market->image) }}" alt="{{ $market->title }}" class="img-fluid" style="width: 100%; heigh: auto;">
                  @endif
                </div>

                <h2 class="title">{{ $market->title }}</h2>

                <div class="meta-top">
                  <ul>
                    {{-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('index.singlemarket', $market->slug) }}">John Doe</a></li> --}}
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('index.singlemarket', $market->slug) }}"><time datetime="{{ $market->created_at }}">{{ date('d F, Y', strtotime($market->created_at)) }}</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-book"></i> {{ estimatedReadingTime($market->text) }} mins read</li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  {!! $market->text !!}
                </div><!-- End post content -->

                <div class="meta-bottom">
                  <i class="bi bi-folder"></i>
                  <ul class="cats">
                    <li><a href="#" class="badge bg-info" style="color: #FFFFFF;">{{ ind_type($market->type) }}</a></li>
                  </ul>

                  {{-- <i class="bi bi-tags"></i>
                  <ul class="tags">
                    <li><a href="#" class="badge bg-primary" style="color: #FFFFFF;">Creative</a></li>
                    <li><a href="#" class="badge bg-primary" style="color: #FFFFFF;">Tips</a></li>
                    <li><a href="#" class="badge bg-primary" style="color: #FFFFFF;">Marketing</a></li>
                  </ul> --}}
                </div><!-- End meta bottom -->

              </article>

            </div>
          </section><!-- /Blog Details Section -->

        </div>

        <div class="col-lg-4 sidebar">

          @include('partials._productsidebar')

        </div>

      </div>
    </div>

    <style>
      .testimonials .testimonial-item {
          background-color: var(--surface-color);
          box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
          box-sizing: content-box;
          padding: 30px;
          margin: 30px 15px;
          position: relative;
          height: 100%;
      }

      .testimonials .testimonial-item {
          text-align: left !important;
      }

      .testimonials .post-img {
          max-height: 240px;
          margin: -30px -30px 15px;
          overflow: hidden;
      }

      .testimonials .post-category {
          font-size: 16px;
          color: color-mix(in srgb, var(--default-color), transparent 50%);
          margin-bottom: 10px;
      }

      .testimonials .title {
          font-size: 20px;
          font-weight: 700;
          padding: 0;
          margin: 0 0 20px 0;
      }

      .testimonials .post-author {
          font-weight: 600;
          margin-bottom: 5px;
      }

      .testimonials .post-date {
          font-size: 14px;
          color: color-mix(in srgb, var(--default-color), transparent 50%);
          margin-bottom: 0;
      }
    </style>

    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Success Stories</h2>
        <p>Where Innovation Meets Success</p>
      </div><!-- End Section Title -->

      <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">

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
            @foreach($recentsuccessstories as $story)
            <div class="swiper-slide" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="1 / 5" data-swiper-slide-index="0">
              <div class="testimonial-item">
                <div class="post-img">
                  <a href="{{ route('index.single-success-story', $story->slug) }}" target=""><img src="{{ asset('images/success-stories/' . $story->image) }}" alt="{{ $story->title }}" class="img-fluid"></a>
                </div>

                <h2 class="title">
                  <a href="{{ route('index.single-success-story', $story->slug) }}">{{ $story->title }}</a>
                </h2>
                <a href="{{ route('index.single-success-story', $story->slug) }}" class="newsroom-item-link" target="">Read more</a>
              </div>
            </div>
            <!-- End testimonial item -->
            @endforeach
          </div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

      </div>

    </section><!-- /Testimonials Section -->


@endsection

@section('third_party_scripts')

@endsection