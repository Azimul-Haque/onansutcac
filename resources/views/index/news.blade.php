@extends('layouts.index')
@section('title') News & Updates @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/news-page-background.gif') }}');">
      <div class="container position-relative">
        <h1>News & Updates</h1>
        <p>Your Source for What's New</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">News & Updates</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    

    <!-- services Section -->
    <section id="services" class="recent-news section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>@if(isNotEmpty($newscategory)) {{ $newscategory->name }} @else News & Updates @endif</h2>
        <p>The Latest from CactusNano<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          @foreach($allNews as $news)
            @php
              $modulo_index = ($loop->iteration - 1) % 3;
              $delay = 200 + ($modulo_index * 100);
            @endphp
            <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="{{ $delay }}">
              <article>

                <div class="post-img">
                  <a href="@if($news->type == 3) {{ $news->newslink }} @else {{ route('index.single-news', $news->slug) }} @endif" @if($news->type == 3) target="_blank" @endif><img src="{{ asset('images/news/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid"></a>
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

      </div>

    </section><!-- /services Section -->

    <section id="blog-pagination" class="blog-pagination section light-background">

      <div class="container">
        <div class="d-flex justify-content-center">
          {{ $allNews->links() }}
          {{-- <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul> --}}
        </div>
      </div>

    </section>


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Success Stories</h2>
        <p>Where Innovation Meets Success</p>
      </div><!-- End Section Title -->

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
            {{-- style="transition-duration: 0ms; transform: translate3d(-744.667px, 0px, 0px); transition-delay: 0ms;" --}}

            <div class="swiper-slide" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="1 / 5" data-swiper-slide-index="0">
              <div class="testimonial-item">
                <div class="post-img">
                  <a href="#!" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid"></a>
                </div>

                <h2 class="title">
                  <a href="{{ route('index.single-success-story', 'slug-2123') }}">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                </h2>
                <a href="#!" class="newsroom-item-link" target="">Read more</a>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide swiper-slide-prev" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="2 / 5" data-swiper-slide-index="1">
              <div class="testimonial-item">
                <div class="post-img">
                  <a href="#!" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid"></a>
                </div>

                <h2 class="title">
                  <a href="{{ route('index.single-success-story', 'slug-2123') }}">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                </h2>
                <a href="#!" class="newsroom-item-link" target="">Read more</a>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide swiper-slide-active" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="3 / 5" data-swiper-slide-index="2">
              <div class="testimonial-item">
                <div class="post-img">
                  <a href="#!" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid"></a>
                </div>

                <h2 class="title">
                  <a href="{{ route('index.single-success-story', 'slug-2123') }}">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                </h2>
                <a href="#!" class="newsroom-item-link" target="">Read more</a>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide swiper-slide-active" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="3 / 5" data-swiper-slide-index="2">
              <div class="testimonial-item">
                <div class="post-img">
                  <a href="#!" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid"></a>
                </div>

                <h2 class="title">
                  <a href="{{ route('index.single-success-story', 'slug-2123') }}">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                </h2>
                <a href="#!" class="newsroom-item-link" target="">Read more</a>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

        

      </div>

    </section><!-- /Testimonials Section -->

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
          color: 
       color-mix(in srgb, var(--default-color), transparent 50%);
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