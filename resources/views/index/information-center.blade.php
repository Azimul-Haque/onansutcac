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

        <div class="row gy-4 feature-boxes mt-0">
          <div class="col-lg-4 mb-4 mb-lg-0 aos-init" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-lightbulb"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Technical Summaries</h3>
                <p class="feature-text">
                  <ul class="list-unstyled mt-4">
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-gear me-2"></i> Boiler Systems
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-snow me-2"></i> Cooling Systems
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-filter-circle me-2"></i> Membrane Systems
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-tools me-2"></i> Process Treatment
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-water me-2"></i> Wastewater Treatment
                      </a>
                    </li>
                  </ul>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 aos-init" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-person-badge"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Personnel Highlights</h3>
                <p class="feature-text">
                  <ul class="list-unstyled mt-4">
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-person-circle me-2"></i> Rafi Islam, PhD
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-person-circle me-2"></i> Eric Sherb, CPA
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-person-circle me-2"></i> Iqbal Ali, PhD
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-person-circle me-2"></i> Marc Papageorge, MS
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-person-circle me-2"></i> Michel Francois, PhD
                      </a>
                    </li>
                  </ul>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-briefcase"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Business Landscape</h3>
                <p class="feature-text">
                  <ul class="list-unstyled mt-4">
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-rocket-takeoff me-2"></i> Space
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-lightning me-2"></i> Grid
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-shield-fill-check me-2"></i> Weapons
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-ev-front me-2"></i> EV
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-server me-2"></i> Data Centers
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-broadcast me-2"></i> Communications
                      </a>
                    </li>
                  </ul>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-cpu"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Tech Overview</h3>
                <p class="feature-text">
                  <ul class="list-unstyled mt-4">
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-rocket-takeoff me-2"></i> Space
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-lightning me-2"></i> Grid
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-shield-fill-check me-2"></i> Weapons
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-ev-front me-2"></i> EV
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-server me-2"></i> Data Centers
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-broadcast me-2"></i> Communications
                      </a>
                    </li>
                  </ul>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-file-earmark-pdf"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Scholarly Publications</h3>
                <p class="feature-text">
                  <ul class="list-unstyled mt-4">
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-file-earmark-bar-graph me-2"></i> Future of Quantum Materials in Space Exploration
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-water me-2"></i> Nanotechnology's Role in Next-Gen Water Purification
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-plug me-2"></i> Advancing Grid Resiliency with Smart Materials
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-cpu me-2"></i> AI-Driven Solutions for Sustainable Data Centers
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-battery-charging me-2"></i> High-Performance Materials for EV Battery Longevity
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-clipboard-data me-2"></i> Research Insights: Advanced Composites in Defense
                      </a>
                    </li>
                  </ul>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-file-earmark-pdf"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Scholarly Publications</h3>
                <p class="feature-text">
                  <ul class="list-unstyled mt-4">
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-file-earmark-bar-graph me-2"></i> Future of Quantum Materials in Space Exploration
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-water me-2"></i> Nanotechnology's Role in Next-Gen Water Purification
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-plug me-2"></i> Advancing Grid Resiliency with Smart Materials
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-cpu me-2"></i> AI-Driven Solutions for Sustainable Data Centers
                      </a>
                    </li>
                    <li class="mb-4">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-battery-charging me-2"></i> High-Performance Materials for EV Battery Longevity
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="text-decoration-none text-dark fw-medium">
                        <i class="bi bi-clipboard-data me-2"></i> Research Insights: Advanced Composites in Defense
                      </a>
                    </li>
                  </ul>
                </p>
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