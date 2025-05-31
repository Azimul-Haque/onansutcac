@extends('layouts.index')
@section('title') Contact @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>Contact</h1>
        <p>We're just a message away. Let us know how we can help you today!</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Reach Out to Us</p>
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

    <!-- Clients Section -->
    <section id="clients" class="recent-news section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>In the News</h2>
        <p>Where Our Journey Unfolds</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <article>

              <div class="post-img">
                <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="" class="img-fluid">
              </div>

              <p class="post-category">AI Photonics</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/person/person-f-12.webp" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Phoenix Business Journal</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>
              <a href="#!" class="newsroom-item-link" target="">Read more</a>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <article>

              <div class="post-img">
                <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-2.webp') }}" alt="" class="img-fluid">
              </div>

              <p class="post-category">Clean Water Technology</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/person/person-f-13.webp" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">AZ Big Media</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>
              <a href="#!" class="newsroom-item-link" target="">Read more</a>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="img-fluid">
              </div>

              <p class="post-category">Nano Technology</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>


              <div class="d-flex align-items-center">
                <img src="assets/img/person/person-m-10.webp" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">ASU News</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>
              <a href="#!" class="newsroom-item-link" target="">Read more</a>



            </article>
          </div><!-- End post list item -->

        </div>

        <div class="text-center mt-5">
          <a href="#!" style="display: inline-block; margin-top: 15px; background-color: #205ed7; padding: 10px 20px; color: white; border-radius: 25px; font-weight: 600; text-transform: uppercase; font-size: 14px;">View All Events</a>
        </div>


      </div>

    </section><!-- /Clients Section -->


@endsection

@section('third_party_scripts')

@endsection