@extends('layouts.index')
@section('title') {{ $market->title }} | Markets @endsection

@section('third_party_stylesheets')

@endsection

<style type="text/css">
  .content img {
    max-width: 100% !important;
    height: auto !important;
  }
</style>



@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>{{ $market->title }}</h1>
        <p>{{ ind_type($market->type) }}</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">{{ ind_type($market->type) }} Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

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
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('index.singlemarket', $market->slug) }}">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('index.singlemarket', $market->slug) }}"><time datetime="{{ $market->created_at }}">{{ date('d F, Y', strtotime($market->created_at)) }}</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ route('index.singlemarket', $market->slug) }}">12 Comments</a></li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  {!! $market->text !!}
                </div><!-- End post content -->

                <div class="meta-bottom">
                  <i class="bi bi-folder"></i>
                  <ul class="cats">
                    <li><a href="#" class="badge bg-info" style="color: #FFFFFF;">{{ prod_type($product->type) }}</a></li>
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

    <section id="relevant-technologies" class="section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Relevant Markets</h2>
        <p>See Where We Make an Impact<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="relevant-technologies-widget ">
          <div class="row">
            <div class="col-md-4">
              <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link custom-nav-link active" id="v-pills-ro-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ro" type="button" role="tab" aria-controls="v-pills-ro" aria-selected="true">Market - 1</a>
                <a class="nav-link custom-nav-link" id="v-pills-bio-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bio" type="button" role="tab" aria-controls="v-pills-bio" aria-selected="false">Market - 2</a>
                <a class="nav-link custom-nav-link" id="v-pills-smartops-tab" data-bs-toggle="pill" data-bs-target="#v-pills-smartops" type="button" role="tab" aria-controls="v-pills-smartops" aria-selected="false">Market - 3</a>
                <a class="nav-link custom-nav-link" id="v-pills-sce-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sce" type="button" role="tab" aria-controls="v-pills-sce" aria-selected="false">Market - 4</a>
                <a class="nav-link custom-nav-link" id="v-pills-cge-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cge" type="button" role="tab" aria-controls="v-pills-cge" aria-selected="false">Market - 5</a>
                <a class="nav-link custom-nav-link" id="v-pills-fro-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fro" type="button" role="tab" aria-controls="v-pills-fro" aria-selected="false">Market - 6</a>
              </div>
            </div>
            <div class="col-md-8 d-flex align-items-center">
              <div class="tab-content w-100" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-ro" role="tabpanel" aria-labelledby="v-pills-ro-tab" tabindex="0">
                  <p>Combining physical and chemical technologies to target a wide range of difficult-to-remove contaminants at varying loads. Works synergistically with other Gradiant technologies to achieve exacting treatment objectives.</p>
                  <a href="#" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
                <div class="tab-pane fade" id="v-pills-bio" role="tabpanel" aria-labelledby="v-pills-bio-tab" tabindex="0">
                  <p>Leveraging advanced biological processes for efficient and sustainable wastewater treatment, focusing on nutrient removal and organic degradation. Ideal for various industrial and municipal applications.</p>
                  <a href="#" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
                <div class="tab-pane fade" id="v-pills-smartops" role="tabpanel" aria-labelledby="v-pills-smartops-tab" tabindex="0">
                  <p>Utilizing artificial intelligence and machine learning to optimize operational efficiency, predict maintenance needs, and enhance decision-making in complex water treatment systems.</p>
                  <a href="#" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
                <div class="tab-pane fade" id="v-pills-sce" role="tabpanel" aria-labelledby="v-pills-sce-tab" tabindex="0">
                  <p>Specialized technology for precision removal of specific contaminants, ensuring targeted treatment with minimal impact on overall water quality. Highly effective for challenging waste streams.</p>
                  <a href="#" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
                <div class="tab-pane fade" id="v-pills-cge" role="tabpanel" aria-labelledby="v-pills-cge-tab" tabindex="0">
                  <p>Innovative solution for efficient removal of volatile organic compounds (VOCs) and other gaseous contaminants from liquid streams, often used in industrial wastewater purification.</p>
                  <a href="#" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
                <div class="tab-pane fade" id="v-pills-fro" role="tabpanel" aria-labelledby="v-pills-fro-tab" tabindex="0">
                  <p>An advanced oxidation process generating highly reactive free radicals to break down persistent organic pollutants, effectively treating even the most refractory compounds in water.</p>
                  <a href="#" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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

            <div class="swiper-slide" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="1 / 5" data-swiper-slide-index="0">
              <div class="testimonial-item">
                <div class="post-img">
                  <a href="{{ route('index.single-success-story', 'slug') }}" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid"></a>
                </div>

                <h2 class="title">
                  <a href="{{ route('index.single-success-story', 'slug') }}">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                </h2>
                <a href="{{ route('index.single-success-story', 'slug') }}" class="newsroom-item-link" target="">Read more</a>
              </div>
            </div>

            <div class="swiper-slide swiper-slide-prev" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="2 / 5" data-swiper-slide-index="1">
              <div class="testimonial-item">
                <div class="post-img">
                  <a href="{{ route('index.single-success-story', 'slug') }}" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid"></a>
                </div>

                <h2 class="title">
                  <a href="{{ route('index.single-success-story', 'slug') }}">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                </h2>
                <a href="{{ route('index.single-success-story', 'slug') }}" class="newsroom-item-link" target="">Read more</a>
              </div>
            </div>

            <div class="swiper-slide swiper-slide-active" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="3 / 5" data-swiper-slide-index="2">
              <div class="testimonial-item">
                <div class="post-img">
                  <a href="{{ route('index.single-success-story', 'slug') }}" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid"></a>
                </div>

                <h2 class="title">
                  <a href="{{ route('index.single-success-story', 'slug') }}">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                </h2>
                <a href="{{ route('index.single-success-story', 'slug') }}" class="newsroom-item-link" target="">Read more</a>
              </div>
            </div>

            <div class="swiper-slide swiper-slide-active" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="3 / 5" data-swiper-slide-index="2">
              <div class="testimonial-item">
                <div class="post-img">
                  <a href="{{ route('index.single-success-story', 'slug') }}" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid"></a>
                </div>

                <h2 class="title">
                  <a href="{{ route('index.single-success-story', 'slug') }}">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                </h2>
                <a href="{{ route('index.single-success-story', 'slug') }}" class="newsroom-item-link" target="">Read more</a>
              </div>
            </div>
          </div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

      </div>

    </section><!-- /Testimonials Section -->

@endsection

@section('third_party_scripts')

@endsection
