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
        <h2>News & Updates</h2>
        <p>The Latest from CactusNano<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <article>

              <div class="post-img">
                <a href="{{ route('index.single-news', 'slug-2123') }}" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="" class="img-fluid"></a>
              </div>

              <p class="post-category">AI Photonics</p>

              <h2 class="title">
                <a href="{{ route('index.single-news', 'slug-2123') }}">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Phoenix Business Journal</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>
              <a href="{{ route('index.single-news', 'slug-2123') }}" class="newsroom-item-link" target="">Read more</a>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="300">
            <article>

              <div class="post-img">
                <a href="{{ route('index.single-news', 'slug-2123') }}" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-2.webp') }}" alt="" class="img-fluid"></a>
              </div>

              <p class="post-category">Clean Water Technology</p>

              <h2 class="title">
                <a href="{{ route('index.single-news', 'slug-2123') }}">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">AZ Big Media</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>
              <a href="{{ route('index.single-news', 'slug-2123') }}" class="newsroom-item-link" target="">Read more</a>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="400">
            <article>

              <div class="post-img">
                <a href="{{ route('index.single-news', 'slug-2123') }}" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid"></a>
              </div>

              <p class="post-category">Nano Technology</p>

              <h2 class="title">
                <a href="{{ route('index.single-news', 'slug-2123') }}">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>


              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">ASU News</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>
              <a href="{{ route('index.single-news', 'slug-2123') }}" class="newsroom-item-link" target="">Read more</a>



            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <article>

              <div class="post-img">
                <a href="{{ route('index.single-news', 'slug-2123') }}" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="" class="img-fluid"></a>
              </div>

              <p class="post-category">AI Photonics</p>

              <h2 class="title">
                <a href="{{ route('index.single-news', 'slug-2123') }}">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Phoenix Business Journal</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>
              <a href="{{ route('index.single-news', 'slug-2123') }}" class="newsroom-item-link" target="">Read more</a>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="300">
            <article>

              <div class="post-img">
                <a href="{{ route('index.single-news', 'slug-2123') }}" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-2.webp') }}" alt="" class="img-fluid"></a>
              </div>

              <p class="post-category">Clean Water Technology</p>

              <h2 class="title">
                <a href="{{ route('index.single-news', 'slug-2123') }}">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">AZ Big Media</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>
              <a href="{{ route('index.single-news', 'slug-2123') }}" class="newsroom-item-link" target="">Read more</a>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="400">
            <article>

              <div class="post-img">
                <a href="{{ route('index.single-news', 'slug-2123') }}" target=""><img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid"></a>
              </div>

              <p class="post-category">Nano Technology</p>

              <h2 class="title">
                <a href="{{ route('index.single-news', 'slug-2123') }}">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>


              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">ASU News</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>
              <a href="{{ route('index.single-news', 'slug-2123') }}" class="newsroom-item-link" target="">Read more</a>



            </article>
          </div><!-- End post list item -->

        </div>


      </div>

    </section><!-- /services Section -->
    

    <section id="stats" class="stats section light-background" style="background: linear-gradient(to right, #39b54a, #007cc2); color: white; padding: 80px 0; text-align: center;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 style="font-weight: 700; font-size: 2rem; margin-bottom: 10px; color: #ffffff;">Innovating with Nature</h2>
        <p style="font-size: 1.1rem; margin-bottom: 30px;">
          Advanced materials and smart technologies for a sustainable future.
        </p>
        <a href="{{ route('index.get-contact') }}" class="btn btn-light" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite;">
          Connect with Us
        </a>
      </div>
    </section>


@endsection

@section('third_party_scripts')

@endsection