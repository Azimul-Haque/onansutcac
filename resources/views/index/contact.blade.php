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
                  <p>2502 West Huntington Drive Tempe, AZ 85282, USA</p>
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
            <form action="{{ route('index.store-contact') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
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

                <div class="col-md-6 ">
                  <img src="{{ route('captcha.image') }}" alt="Captcha Text" style="height: auto; width: 150px;">
                </div>

                <div class="col-md-6 ">
                  <input type="text" class="form-control" name="captcha" placeholder="Write the Captcha" required="">
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

    <!-- Map Section -->
    <section id="map" class="map section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Google Map</h2>
        <p>Find Your Way to Us</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2266.4553566917803!2d-111.97655886791999!3d33.39488038211913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b0f41cf704065%3A0x1ce0fd877cf64bc3!2sParking%20lot%2C%202502%20W%20Huntington%20Dr%2C%20Tempe%2C%20AZ%2085282%2C%20USA!5e0!3m2!1sen!2sbd!4v1755785283191!5m2!1sen!2sbd" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </section>

    <style>
      /* You can put this CSS in your main stylesheet (e.g., style.css) */
        .map-container {
          min-height: 280px; /* Sets the minimum height for the map container */
          overflow: hidden; /* Ensures shadow is contained and map doesn't spill */
          border-radius: 8px; /* Optional: Adds slightly rounded corners */
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15); /* Adds a subtle drop shadow */
          /* You can adjust the shadow values (horizontal-offset, vertical-offset, blur-radius, spread-radius, color) */
        }

        .map-container iframe {
          display: block;
        }
    </style>
    <!-- /Map Section -->

    <section id="stats" class="stats section light-background" style="background: linear-gradient(to right, #39b54a, #007cc2); color: white; padding: 80px 0; text-align: center;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 style="font-weight: 700; font-size: 2rem; margin-bottom: 10px; color: #ffffff;">Deep Dive Now</h2>
        <p style="font-size: 1.1rem; margin-bottom: 30px;">
          To connect or learn more, please explore the options below.
        </p>
        <a href="{{ route('index.help-center') }}" class="btn btn-light" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite;">
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