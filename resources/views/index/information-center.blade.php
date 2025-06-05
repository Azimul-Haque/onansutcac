@extends('layouts.index')
@section('title') Information Center @endsection

@section('third_party_stylesheets')

  

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>Information Center</h1>
        <p>Central Hub for Knowledge & Resources</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Information Center</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    <section id="services-2" class="services-2 section light-background">

      <!-- Section Title -->
      <div class="container section-title aos-init" data-aos="fade-up">
        <h2>Information Center</h2>
        <p>Our Comprehensive Resource Library</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="row feature-boxes">
            <div class="col-lg-4 mb-4 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-box">
                <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                  <i class="bi bi-gear"></i>
                </div>
                <div class="feature-content">
                  <h3 class="feature-title">Technical Summaries</h3>
                  <p class="feature-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <div class="feature-box">
                <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                  <i class="bi bi-window"></i>
                </div>
                <div class="feature-content">
                  <h3 class="feature-title">Advanced Security</h3>
                  <p class="feature-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
              <div class="feature-box">
                <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                  <i class="bi bi-headset"></i>
                </div>
                <div class="feature-content">
                  <h3 class="feature-title">Dedicated Support</h3>
                  <p class="feature-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </div>
          </div>
          
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