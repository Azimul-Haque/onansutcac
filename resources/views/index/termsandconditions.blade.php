@extends('layouts.index')
@section('title') Help Center-FAQ @endsection

@section('third_party_stylesheets')

<style>
  .faq-content {
    display: none;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
  }
</style>
  

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>Help Center-FAQ</h1>
        <p>Answers at Your Fingertips</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Help Center-FAQ</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <section id="faq" class="faq section light-background">

        <!-- Section Title -->
        <div class="container section-title aos-init" data-aos="fade-up">
          <h2>Help Center</h2>
          <p>Frequently Asked Questions</p>
        </div><!-- End Section Title -->

        <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">

          <div class="row justify-content-center">
            <div class="col-lg-10">

              <div class="faq-tabs mb-5">
                <ul class="nav nav-pills justify-content-center" id="faqTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="general-tab" data-bs-toggle="pill" data-bs-target="#faq-general" type="button" role="tab" aria-controls="general" aria-selected="true" tabindex="-1">
                      <i class="bi bi-question-circle me-2"></i>General
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pricing-tab" data-bs-toggle="pill" data-bs-target="#faq-pricing" type="button" role="tab" aria-controls="pricing" aria-selected="false" tabindex="-1">
                      <i class="bi bi-cpu me-2"></i>Technical
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="support-tab" data-bs-toggle="pill" data-bs-target="#faq-support" type="button" role="tab" aria-controls="support" aria-selected="false" tabindex="-1">
                      <i class="bi bi-headset me-2"></i>Support
                    </button>
                  </li>
                </ul>
              </div>

              <div class="tab-content" id="faqTabContent">
                <!-- General FAQs -->
                <div class="tab-pane fade active show" id="faq-general" role="tabpanel" aria-labelledby="general-tab">
                  <div class="faq-list">

                    <div class="faq-item aos-init" data-aos="fade-up" data-aos-delay="200">
                      <h3>
                        <span class="num">1</span>
                        <span class="question">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                        <i class="bi bi-plus-lg faq-toggle"></i>
                      </h3>
                      <div class="faq-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>
                      </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item aos-init" data-aos="fade-up" data-aos-delay="300">
                      <h3>
                        <span class="num">2</span>
                        <span class="question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</span>
                        <i class="bi bi-plus-lg faq-toggle"></i>
                      </h3>
                      <div class="faq-content">
                        <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.</p>
                        <p>Mauris ultrices eros in cursus turpis massa tincidunt dui. Pellentesque nec nam aliquam sem et tortor. Habitant morbi tristique senectus et netus et malesuada.</p>
                      </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item aos-init" data-aos="fade-up" data-aos-delay="400">
                      <h3>
                        <span class="num">3</span>
                        <span class="question">Dolor sit amet consectetur adipiscing elit pellentesque?</span>
                        <i class="bi bi-plus-lg faq-toggle"></i>
                      </h3>
                      <div class="faq-content">
                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.</p>
                        <p>Mauris ultrices eros in cursus turpis massa tincidunt dui. Pellentesque nec nam aliquam sem et tortor. Habitant morbi tristique senectus et netus et malesuada.</p>
                      </div>
                    </div><!-- End FAQ Item -->

                  </div>
                </div>

                <!-- Pricing FAQs -->
                <div class="tab-pane fade" id="faq-pricing" role="tabpanel" aria-labelledby="pricing-tab">
                  <div class="faq-list">

                    <div class="faq-item aos-init" data-aos="fade-up" data-aos-delay="200">
                      <h3>
                        <span class="num">1</span>
                        <span class="question">Ac odio tempor orci dapibus ultrices in iaculis?</span>
                        <i class="bi bi-plus-lg faq-toggle"></i>
                      </h3>
                      <div class="faq-content">
                        <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.</p>
                      </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item aos-init" data-aos="fade-up" data-aos-delay="300">
                      <h3>
                        <span class="num">2</span>
                        <span class="question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</span>
                        <i class="bi bi-plus-lg faq-toggle"></i>
                      </h3>
                      <div class="faq-content">
                        <p>Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.</p>
                        <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.</p>
                      </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item aos-init" data-aos="fade-up" data-aos-delay="400">
                      <h3>
                        <span class="num">3</span>
                        <span class="question">Varius vel pharetra vel turpis nunc eget lorem dolor?</span>
                        <i class="bi bi-plus-lg faq-toggle"></i>
                      </h3>
                      <div class="faq-content">
                        <p>Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.</p>
                      </div>
                    </div><!-- End FAQ Item -->

                  </div>
                </div>

                <!-- Support FAQs -->
                <div class="tab-pane fade" id="faq-support" role="tabpanel" aria-labelledby="support-tab">
                  <div class="faq-list">

                    <div class="faq-item aos-init" data-aos="fade-up" data-aos-delay="200">
                      <h3>
                        <span class="num">1</span>
                        <span class="question">Tortor vitae purus faucibus ornare suspendisse sed nisi lacus?</span>
                        <i class="bi bi-plus-lg faq-toggle"></i>
                      </h3>
                      <div class="faq-content">
                        <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                        <p>Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est.</p>
                      </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item aos-init" data-aos="fade-up" data-aos-delay="300">
                      <h3>
                        <span class="num">2</span>
                        <span class="question">Tortor dignissim convallis aenean et tortor at risus viverra?</span>
                        <i class="bi bi-plus-lg faq-toggle"></i>
                      </h3>
                      <div class="faq-content">
                        <p>In hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Non diam phasellus vestibulum lorem sed. Platea dictumst quisque sagittis purus sit.</p>
                      </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item aos-init" data-aos="fade-up" data-aos-delay="400">
                      <h3>
                        <span class="num">3</span>
                        <span class="question">Venenatis urna cursus eget nunc scelerisque viverra mauris in?</span>
                        <i class="bi bi-plus-lg faq-toggle"></i>
                      </h3>
                      <div class="faq-content">
                        <p>Mauris ultrices eros in cursus turpis massa tincidunt dui. Pellentesque nec nam aliquam sem et tortor. Habitant morbi tristique senectus et netus et malesuada.</p>
                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.</p>
                      </div>
                    </div><!-- End FAQ Item -->

                  </div>
                </div>
              </div>

              <div class="faq-cta text-center mt-5 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                      <div class="info-box">
                        <span class="icon-circle d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-3 mt-4" style="width: 40px; height: 40px;">
                          <i class="bi bi-geo-alt fs-5"></i>
                        </span>
                        <h6 class="mb-2 fw-bold">Address</h6>
                        <p class="small text-muted">A108 Adam Street, New York, NY 535022</p>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                      <div class="info-box">
                        <span class="icon-circle d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-3 mt-4" style="width: 40px; height: 40px;">
                          <i class="bi bi-envelope fs-5"></i>
                        </span>
                        <h6 class="mb-2 fw-bold">Email Us</h6>
                        <p class="small text-muted"><a href="mailto:info@example.com" class="text-decoration-none text-dark">info@example.com</a></p>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                      <div class="info-box">
                        <span class="icon-circle d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-3 mt-4" style="width: 40px; height: 40px;">
                          <i class="bi bi-phone fs-5"></i>
                        </span>
                        <h6 class="mb-2 fw-bold">Call Us</h6>
                        <p class="small text-muted"><a href="tel:+155895548855" class="text-decoration-none text-dark">+1 5589 55488 55</a></p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <style>
                .icon-circle {
                  /* You can further customize the circle's appearance here if needed */
                }
              </style>

            </div>
          </div>

        </div>

      </section>

    

    <section id="stats" class="stats section light-background" style="background: linear-gradient(to right, #39b54a, #007cc2); color: white; padding: 80px 0; text-align: center;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 style="font-weight: 700; font-size: 2rem; margin-bottom: 10px; color: #ffffff;">Your Solution Hub</h2>
        <p style="font-size: 1.1rem; margin-bottom: 30px;">
          Navigate with ease. Expertise and support are just a click away.
        </p>
        <a href="{{ route('index.get-contact') }}" class="btn btn-light" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite; margin: 5px;">
          Connect with Us
        </a>
        <a href="{{ route('index.information-center') }}" class="btn btn-dark" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite; margin: 5px;">
          Information Center
        </a>
      </div>
    </section>

    


@endsection

@section('third_party_scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script>
  document.querySelectorAll('.faq-item h3').forEach(header => {
    header.addEventListener('click', () => {
      const content = header.nextElementSibling;
      const icon = header.querySelector('.faq-toggle');

      if (content.style.display === "block") {
        content.style.display = "none";
        icon.classList.remove('bi-dash-lg');
        icon.classList.add('bi-plus-lg');
      } else {
        content.style.display = "block";
        icon.classList.remove('bi-plus-lg');
        icon.classList.add('bi-dash-lg');
      }
    });
  });
</script>


{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init(); // Initialize AOS if you're using it
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // This is for the +/- icon toggle, if it's not directly handled by Bootstrap's collapse.
    // If your theme uses a custom script for this, you'll need to adapt.
    const faqItems = document.querySelectorAll('.faq-item h3');

    faqItems.forEach(item => {
      item.addEventListener('click', function() {
        const faqContent = this.nextElementSibling;
        const toggleIcon = this.querySelector('.faq-toggle');

        // Toggle the active class on the faq-item
        this.parentNode.classList.toggle('active');

        // Toggle the display of the content
        if (faqContent.style.maxHeight) {
          faqContent.style.maxHeight = null;
          toggleIcon.classList.remove('bi-dash-lg');
          toggleIcon.classList.add('bi-plus-lg');
        } else {
          faqContent.style.maxHeight = faqContent.scrollHeight + "px";
          toggleIcon.classList.remove('bi-plus-lg');
          toggleIcon.classList.add('bi-dash-lg');
        }
      });
    });
  });
</script> --}}

@endsection