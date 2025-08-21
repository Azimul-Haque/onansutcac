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

    <section id="featured-posts" class="featured-posts section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Success Stories</h2>
        <p>Explore Our Range of Quality Offerings<br></p>
      </div><!-- End Section Title -->

      <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          @foreach($successstoroes as $story)
          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <div class="blog-post-item">
              @if($story->image)
                  <img src="{{ asset('images/success-storoes/' . $story->image) }}" alt="{{ $story->title }}" class="img-fluid" style="width: 100%; heigh: auto;">
              @endif
              <div class="blog-post-content">
                <h2><a href="{{ route('index.single-success-story', $story->slug) }}">{{ $story->title }}</a></h2>
                <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                <a href="{{ route('index.single-success-story', 'slug') }}" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          @endforeach

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <div class="blog-post-item">
              <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-2.webp') }}" alt="Blog Image">
              <div class="blog-post-content">
                {{-- <div class="post-meta">
                  <span><i class="bi bi-person"></i> Sarah Johnson</span>
                  <span><i class="bi bi-clock"></i> Jan 21, 2025</span>
                  <span><i class="bi bi-chat-dots"></i> 15 Comments</span>
                </div> --}}
                <h2><a href="{{ route('index.single-success-story', 'slug') }}">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                <p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum semper nisi.</p>
                <a href="{{ route('index.single-success-story', 'slug') }}" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <div class="blog-post-item">
              <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="Blog Image">
              <div class="blog-post-content">
                {{-- <div class="post-meta">
                  <span><i class="bi bi-person"></i> David Brown</span>
                  <span><i class="bi bi-clock"></i> Jan 24, 2025</span>
                  <span><i class="bi bi-chat-dots"></i> 10 Comments</span>
                </div> --}}
                <h2><a href="{{ route('index.single-success-story', 'slug') }}">Et harum quidem rerum facilis est et expedita distinctio</a></h2>
                <p>Donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim.</p>
                <a href="{{ route('index.single-success-story', 'slug') }}" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <div class="blog-post-item">
              <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="Blog Image">
              <div class="blog-post-content">
                {{-- <div class="post-meta">
                  <span><i class="bi bi-person"></i> Mark Wilson</span>
                  <span><i class="bi bi-clock"></i> Jan 18, 2025</span>
                  <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                </div> --}}
                <h2><a href="{{ route('index.single-success-story', 'slug') }}">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a></h2>
                <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                <a href="{{ route('index.single-success-story', 'slug') }}" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <div class="blog-post-item">
              <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="Blog Image">
              <div class="blog-post-content">
                {{-- <div class="post-meta">
                  <span><i class="bi bi-person"></i> Sarah Johnson</span>
                  <span><i class="bi bi-clock"></i> Jan 21, 2025</span>
                  <span><i class="bi bi-chat-dots"></i> 15 Comments</span>
                </div> --}}
                <h2><a href="{{ route('index.single-success-story', 'slug') }}">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                <p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum semper nisi.</p>
                <a href="{{ route('index.single-success-story', 'slug') }}" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 aos-init" data-aos="zoom-in" data-aos-delay="200">
            <div class="blog-post-item">
              <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-2.webp') }}" alt="Blog Image">
              <div class="blog-post-content">
                {{-- <div class="post-meta">
                  <span><i class="bi bi-person"></i> David Brown</span>
                  <span><i class="bi bi-clock"></i> Jan 24, 2025</span>
                  <span><i class="bi bi-chat-dots"></i> 10 Comments</span>
                </div> --}}
                <h2><a href="{{ route('index.single-success-story', 'slug') }}">Et harum quidem rerum facilis est et expedita distinctio</a></h2>
                <p>Donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim.</p>
                <a href="{{ route('index.single-success-story', 'slug') }}" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section id="blog-pagination" class="blog-pagination section light-background">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section>

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