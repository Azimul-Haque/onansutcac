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
              <img src="assets/img/blog/blog-post-portrait-2.webp" alt="Blog Image">
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
              <img src="assets/img/blog/blog-post-portrait-3.webp" alt="Blog Image">
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
              <img src="assets/img/blog/blog-post-portrait-4.webp" alt="Blog Image">
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
              <img src="assets/img/blog/blog-post-portrait-2.webp" alt="Blog Image">
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
              <img src="assets/img/blog/blog-post-portrait-3.webp" alt="Blog Image">
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
              <img src="assets/img/blog/blog-post-portrait-4.webp" alt="Blog Image">
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

        <div class="blog-posts-slider swiper init-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 3,
              "spaceBetween": 30,
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 20
                },
                "768": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 30
                }
              }
            }
          </script>

          <div class="swiper-wrapper" id="swiper-wrapper-828d105f5978b553e" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-884px, 0px, 0px); transition-delay: 0ms;">
            <!-- End slide item -->

            <!-- End slide item -->

            <!-- End slide item -->

            <!-- End slide item -->

            <!-- End slide item -->
          <div class="swiper-slide" style="width: 412px; margin-right: 30px;" role="group" aria-label="2 / 5" data-swiper-slide-index="1">
              <div class="blog-post-item">
                <img src="assets/img/blog/blog-post-portrait-2.webp" alt="Blog Image">
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
            </div><div class="swiper-slide swiper-slide-prev" style="width: 412px; margin-right: 30px;" role="group" aria-label="3 / 5" data-swiper-slide-index="2">
              <div class="blog-post-item">
                <img src="assets/img/blog/blog-post-portrait-3.webp" alt="Blog Image">
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
            </div><div class="swiper-slide swiper-slide-active" style="width: 412px; margin-right: 30px;" role="group" aria-label="4 / 5" data-swiper-slide-index="3">
              <div class="blog-post-item">
                <img src="assets/img/blog/blog-post-portrait-4.webp" alt="Blog Image">
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
            </div><div class="swiper-slide swiper-slide-next" role="group" aria-label="5 / 5" data-swiper-slide-index="4" style="width: 412px; margin-right: 30px;">
              <div class="blog-post-item">
                <img src="assets/img/blog/blog-post-portrait-5.webp" alt="Blog Image">
                <div class="blog-post-content">
                  <div class="post-meta">
                    <span><i class="bi bi-person"></i> Emma Davis</span>
                    <span><i class="bi bi-clock"></i> Jan 27, 2025</span>
                    <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                  </div>
                  <h2><a href="#">Nam libero tempore, cum soluta nobis est eligendi optio</a></h2>
                  <p>Aenean leo ligula porttitor eu consequat vitae eleifend ac enim aliquam lorem ante dapibus in viverra.</p>
                  <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><div class="swiper-slide" style="width: 412px; margin-right: 30px;" role="group" aria-label="1 / 5" data-swiper-slide-index="0">
              <div class="blog-post-item">
                <img src="assets/img/blog/blog-post-portrait-1.webp" alt="Blog Image">
                <div class="blog-post-content">
                  <div class="post-meta">
                    <span><i class="bi bi-person"></i> Julia Parker</span>
                    <span><i class="bi bi-clock"></i> Jan 15, 2025</span>
                    <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                  </div>
                  <h2><a href="#">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</a></h2>
                  <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce porttitor metus eget lectus consequat, sit amet feugiat magna vulputate.</p>
                  <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

      </div>

    </section>

    


@endsection

@section('third_party_scripts')

@endsection