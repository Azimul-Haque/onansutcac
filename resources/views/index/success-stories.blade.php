@extends('layouts.index')
@section('title') Success Stories @endsection

@section('third_party_stylesheets')

  

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>Success Stories</h1>
        <p>Transforming Challenges into Victories</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Success Stories</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <section id="featured-posts" class="featured-posts section">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Featured Posts</h2>
        <div><span>Check Our</span> <span class="description-title">Featured Posts</span></div>
      </div><!-- End Section Title -->

      <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <div class="blog-post-item">
              <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="Blog Image">
              <div class="blog-post-content">
                <div class="post-meta">
                  <span><i class="bi bi-person"></i> Mark Wilson</span>
                  <span><i class="bi bi-clock"></i> Jan 18, 2025</span>
                  <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                </div>
                <h2><a href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a></h2>
                <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <div class="blog-post-item">
              <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="Blog Image">
              <div class="blog-post-content">
                <div class="post-meta">
                  <span><i class="bi bi-person"></i> Sarah Johnson</span>
                  <span><i class="bi bi-clock"></i> Jan 21, 2025</span>
                  <span><i class="bi bi-chat-dots"></i> 15 Comments</span>
                </div>
                <h2><a href="#">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                <p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum semper nisi.</p>
                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <div class="blog-post-item">
              <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="Blog Image">
              <div class="blog-post-content">
                <div class="post-meta">
                  <span><i class="bi bi-person"></i> David Brown</span>
                  <span><i class="bi bi-clock"></i> Jan 24, 2025</span>
                  <span><i class="bi bi-chat-dots"></i> 10 Comments</span>
                </div>
                <h2><a href="#">Et harum quidem rerum facilis est et expedita distinctio</a></h2>
                <p>Donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim.</p>
                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <div class="blog-post-item">
              <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="Blog Image">
              <div class="blog-post-content">
                <div class="post-meta">
                  <span><i class="bi bi-person"></i> Mark Wilson</span>
                  <span><i class="bi bi-clock"></i> Jan 18, 2025</span>
                  <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                </div>
                <h2><a href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a></h2>
                <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <div class="blog-post-item">
              <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="Blog Image">
              <div class="blog-post-content">
                <div class="post-meta">
                  <span><i class="bi bi-person"></i> Sarah Johnson</span>
                  <span><i class="bi bi-clock"></i> Jan 21, 2025</span>
                  <span><i class="bi bi-chat-dots"></i> 15 Comments</span>
                </div>
                <h2><a href="#">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                <p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum semper nisi.</p>
                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <div class="blog-post-item">
              <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="Blog Image">
              <div class="blog-post-content">
                <div class="post-meta">
                  <span><i class="bi bi-person"></i> David Brown</span>
                  <span><i class="bi bi-clock"></i> Jan 24, 2025</span>
                  <span><i class="bi bi-chat-dots"></i> 10 Comments</span>
                </div>
                <h2><a href="#">Et harum quidem rerum facilis est et expedita distinctio</a></h2>
                <p>Donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim.</p>
                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    


@endsection

@section('third_party_scripts')

@endsection