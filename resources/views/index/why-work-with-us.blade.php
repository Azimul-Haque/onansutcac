@extends('layouts.index')
@section('title') Why work with us @endsection

@section('third_party_stylesheets')
  
@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>Why Work With Us</h1>
        <p>Discover the unique advantages of collaborating with us</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Why Work With Us</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Discover the Difference</h2>
        <p>Why Work With Us</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
          <!-- Box 1: Building Image -->
          <div class="col">
              <div class="image-container">
                  <img src="https://placehold.co/800x450/e0e0e0/333333?text=Company+Building" alt="Company Building Placeholder">
              </div>
          </div>

          <!-- Box 2: CoreSil™ Nanomaterials Card -->
          <div class="col">
              <div class="capacity-card">
                  <h3>CoreSil™ Nanomaterials</h3>
                  <ul>
                      <li><span class="label">Current:</span> <span class="value">10 kg/month ($800k/y)</span></li>
                      <li><span class="label">2026:</span> <span class="value">100 kg/month ($8m/y)*</span></li>
                      <li><span class="label">2027:</span> <span class="value">1 ton/month ($80m/y)*</span></li>
                  </ul>
              </div>
          </div>

          <!-- Box 3: CoreSil™ Suspension Card -->
          <div class="col">
              <div class="capacity-card">
                  <h3>CoreSil™ Suspension</h3>
                  <ul>
                      <li><span class="label">Current:</span> <span class="value">50 L/month ($400k/y)</span></li>
                      <li><span class="label">2026:</span> <span class="value">500 L/month ($4m/y)*</span></li>
                      <li><span class="label">2027:</span> <span class="value">5 m³/month ($40m/y)*</span></li>
                  </ul>
              </div>
          </div>

          <!-- Box 4: CoreSil™ Membrane Card -->
          <div class="col">
              <div class="capacity-card">
                  <h3>CoreSil™ Membrane</h3>
                  <ul>
                      <li><span class="label">Current:</span> <span class="value">100 elements/month ($800k/y)</span></li>
                      <li><span class="label">2026:</span> <span class="value">500 elements/month ($4m/y)*</span></li>
                      <li><span class="label">2027:</span> <span class="value">2000 elements/month ($16m/y)*</span></li>
                  </ul>
              </div>
          </div>
      </div>

      <p class="note">* Production capacity can be scaled up immediately based on increased demand</p>

        <style>
            .feature-box {
                background-color: #fff;
                border-radius: 0.75rem; /* Rounded corners */
                padding: 1.5rem;
                display: flex;
                align-items: flex-start; /* Align icon and text at the top */
                gap: 1rem; /* Space between icon and text */
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); /* Subtle shadow */
            }
            .feature-box .icon {
                font-size: 2.5rem; /* Large icon size */
                color: #f97316; /* Orange color for icons */
                flex-shrink: 0; /* Prevent icon from shrinking */
            }
            .feature-box .text {
                font-size: 1.125rem; /* Slightly larger text */
                color: #374151; /* Darker gray text */
                line-height: 1.6;
            }
        </style>

      </div>

    </section><!-- /Starter Section Section -->

    <section id="product-capacity" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title aos-init" data-aos="fade-up">
        <h2>Robust Output, Consistent Quality</h2>
        <p>Product Capacity</p>
      </div><!-- End Section Title -->

      <div class="container">
        <h4 data-aos="fade-up">Founded in 2016 as part of Cactus Materials, Cactus Nano officially became a separate entity in 2023. It gained global recognition through projects with NASA, USTDA, and PFAS research supported by the US Department of Energy.</h4>
        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item-rifat position-relative">
              <div class="icon">
                <i class="bi bi-cash-stack" style="color: #0dcaf0;"></i>
              </div>
              <a href="#!" class="stretched-link">
                <h3>2016</h3>
              </a>
              <p>CactusNano was founded in 2016 under Cactus Materials and became a separate company in 2023.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item-rifat position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week" style="color: #fd7e14;"></i>
              </div>
              <a href="#!" class="stretched-link">
                <h3>2019</h3>
              </a>
              <p>Cactus Antimicrobial, a Delaware corp., began in R&D stealth mode, developing cutting-edge antimicrobial technologies.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item-rifat position-relative">
              <div class="icon">
                <i class="bi bi-chat-text" style="color: #20c997;"></i>
              </div>
              <a href="#!" class="stretched-link">
                <h3>2021</h3>
              </a>
              <p>NASA awarded the company a multi-million-dollar contract for next-gen antimicrobial materials, a major innovation milestone.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item-rifat position-relative">
              <div class="icon">
                <i class="bi bi-credit-card-2-front" style="color: #df1529;"></i>
              </div>
              <a href="#!" class="stretched-link">
                <h3>2023</h3>
              </a>
              <p>Cactus Antimicrobial, Inc. spun off from Cactus Materials, Inc. to independently focus on antimicrobial solutions.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item-rifat position-relative">
              <div class="icon">
                <i class="bi bi-globe" style="color: #6610f2;"></i>
              </div>
              <a href="#!" class="stretched-link">
                <h3>2024–2025</h3>
              </a>
              <p>Operating under the DBA (Doing Business As) name "Cactus Nano", the company took strategic steps to expand its operations.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item-rifat position-relative">
              <div class="icon">
                <i class="bi bi-clock" style="color: #f3268c;"></i>
              </div>
              <a href="#!" class="stretched-link">
                <h3>Key initiatives:</h3>
              </a>
              <p>Expanded operations with in-house CoreSil™ manufacturing, increased production, global outreach, and deeper customer & regulatory engagement.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>

    <section id="vission-mission" class="stats section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Vision & Mission Statements</h2>
        <p>Our Aspiration and Approach</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 justify-content-center mb-4">
            <!-- Vision Statement Column -->
            <div class="col-12 col-md-6">
                <div class="vision-card">
                    <h2>Vision</h2>
                    <p>Maximizing global health & water sustainability</p>
                </div>
            </div>

            <!-- Mission Statement Column -->
            <div class="col-12 col-md-6">
                <div class="mission-card">
                    <h2>Mission</h2>
                    <p>Globally solving the toughest water treatment problems by unique nano technology</p>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/vision-mission.jpg') }}" class="img-fluid rounded-4 mt-4" alt="Vision & Mission Statements">
      </div>

      <style>
          .vision-card, .mission-card {
              padding: 2rem;
              border-radius: 0.5rem;
              box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
              height: 100%; /* Ensure cards have equal height */
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              text-align: center;
          }
          .vision-card {
              background-color: #e0f7fa; /* Light blue */
              color: #00796b; /* Darker teal for text */
          }
          .mission-card {
              background-color: #e8f5e9; /* Light green */
              color: #2e7d32; /* Darker green for text */
          }
          .vision-card h2, .mission-card h2 {
              font-size: 2.5rem; /* Larger title */
              margin-bottom: 1rem;
              font-weight: 700;
          }
          .vision-card p, .mission-card p {
              font-size: 1.25rem; /* Larger paragraph text */
              line-height: 1.6;
          }
      </style>

    </section>
    

@endsection

@section('third_party_scripts')

@endsection