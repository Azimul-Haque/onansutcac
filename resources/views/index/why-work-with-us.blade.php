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

        <div class="row gy-4" data-aos="fade-up">
          <!-- Box 1: Slow, controlled release -->
          <div class="col-12 col-md-6"> <!-- Bootstrap column for responsive layout -->
              <div class="feature-box">
                  <i class="bi bi-lightbulb icon"></i>
                  <p class="text">Slow, controlled release of antimicrobial agents for long-lasting performance</p>
              </div>
          </div>

          <!-- Box 2: Initially developed for NASA -->
          <div class="col-12 col-md-6"> <!-- Bootstrap column for responsive layout -->
              <div class="feature-box">
                  <i class="bi bi-award icon"></i>
                  <p class="text">Initially developed for NASA, now available for mass market applications</p>
              </div>
          </div>

          <!-- Box 3: Customizable & easy integration -->
          <div class="col-12 col-md-6"> <!-- Bootstrap column for responsive layout -->
              <div class="feature-box">
                  <i class="bi bi-puzzle icon"></i>
                  <p class="text">Customizable & easy integration into a wide range of materials</p>
              </div>
          </div>

          <!-- Box 4: Expert technical and customer support -->
          <div class="col-12 col-md-6"> <!-- Bootstrap column for responsive layout -->
              <div class="feature-box">
                  <i class="bi bi-star icon"></i>
                  <p class="text">Expert technical and customer support to ensure customer satisfaction</p>
              </div>
          </div>
        </div>

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
        
          <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center" data-aos="fade-up">
            <!-- Box 1: Building Image -->
            <div class="col">
                <div class="image-container">
                    <img src="{{ asset('images/cactus-office.png') }}" alt="Company Building Placeholder">
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
            .capacity-card {
                background-color: #ffffff;
                border-radius: 0.75rem;
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
                padding: 1.5rem;
                margin-bottom: 0; /* Remove bottom margin as col-g-4 handles spacing */
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                transition: transform 0.3s ease-in-out;
                height: 100%; /* Ensure cards fill their column height */
            }
            .capacity-card:hover {
                transform: translateY(-5px);
            }
            .capacity-card h3 {
                font-size: 1.75rem;
                font-weight: 600;
                color: #007bff; /* Primary blue for titles */
                margin-bottom: 1rem;
            }
            .capacity-card ul {
                list-style: none;
                padding: 0;
                margin: 0;
                width: 100%;
            }
            .capacity-card ul li {
                font-size: 1.1rem;
                color: #495057;
                margin-bottom: 0.5rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0.5rem 0;
                border-bottom: 1px dashed #e9ecef;
            }
            .capacity-card ul li:last-child {
                border-bottom: none;
            }
            .capacity-card ul li .label {
                font-weight: 500;
                color: #212529;
            }
            .capacity-card ul li .value {
                font-weight: 600;
                color: #dc3545; /* Red for dollar values */
            }
            .image-container {
                border-radius: 0.75rem;
                overflow: hidden;
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
                height: 100%; /* Ensure image container fills its column height */
                display: flex; /* Use flex to center image if it doesn't fill */
                align-items: center;
                justify-content: center;
                background-color: #e0e0e0; /* Placeholder background */
            }
            .image-container img {
                width: 100%;
                height: 100%; /* Make image fill container */
                object-fit: cover; /* Cover the container without distortion */
                display: block;
            }
            .note {
                font-size: 0.95rem;
                color: #6c757d;
                text-align: center;
                margin-top: 2rem;
            }
          </style>

      </div>

    </section>

    <section id="global-presence" class="stats section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Key Challenges</h2>
        <p>What are the challenges of water treatment</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="infographic-wrapper">
        <div class="infographic-circle">
            <!-- Connectors - these are a visual guide only, not functional pointers -->
            <div class="connector-line top-to-center"></div>
            <div class="connector-line bottom-to-center"></div>
            <div class="connector-line left-to-center"></div>
            <!-- Center Circle -->
            <div class="center-circle">
                <span class="center-title">INFOGRAPHIC</span>
                <span class="center-subtitle">Water Treatment Challenges</span>
            </div>
        </div>

        <!-- Biofouling Block -->
        <div class="challenge-block biofouling">
            <div class="icon-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21.75c-3.141 0-5.94-1.272-7.942-3.308-2.001-2.035-3.003-4.78-3.003-7.617a9.006 9.006 0 011.83-5.462c1.037-1.325 2.585-2.052 4.316-2.052h.001a4.5 4.5 0 013.784 1.956c1.64 1.996 4.346 3.003 7.632 3.003h.001c3.286 0 5.992-1.007 7.632-3.003a4.5 4.5 0 013.784-1.956h.001c1.731 0 3.279.727 4.316 2.052a9.006 9.006 0 011.83 5.462c0 2.837-1.002 5.582-3.003 7.617C17.94 20.478 15.141 21.75 12 21.75zM12 21.75a9 9 0 005.15-2.484M12 21.75a9 9 0 01-5.15-2.484" />
                    <circle cx="12" cy="12" r="3" fill="#ffffff" />
                </svg>
            </div>
            <h2 class="challenge-title">Biofouling</h2>
            <p class="challenge-description">Microbial growth clogs filters and membranes, increasing energy use and maintenance.</p>
        </div>

        <!-- Corrosion Block -->
        <div class="challenge-block corrosion">
            <div class="icon-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 22.5c-3.103 0-5.756-1.125-7.585-3.131C2.585 17.581 1.5 15.161 1.5 12c0-3.161 1.085-5.581 2.915-7.369C6.244 2.125 8.897 1.5 12 1.5c3.103 0 5.756 1.125 7.585 3.131C21.415 6.419 22.5 8.839 22.5 12c0 3.161-1.085 5.581-2.915 7.369C17.756 21.375 15.103 22.5 12 22.5zM12 1.5v21" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 1.5l-3.375 1.5m-1.5 12.75l1.5-1.5m3.75 1.5l-1.5-1.5m-3.75-6.75l-1.5 1.5m-3.75-1.5l1.5-1.5" />
                </svg>
            </div>
            <h2 class="challenge-title">Corrosion</h2>
            <p class="challenge-description">Deterioration of pipes and systems leads to failure, costly repairs, and contamination risks.</p>
        </div>

        <!-- PFAS Block -->
        <div class="challenge-block pfas">
            <div class="icon-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5c-3.103 0-5.756-1.125-7.585-3.131C2.585 15.581 1.5 13.161 1.5 10c0-3.161 1.085-5.581 2.915-7.369C6.244 1.125 8.897.5 12 .5c3.103 0 5.756 1.125 7.585 3.131C21.415 5.581 22.5 8.161 22.5 10c0 3.161-1.085 5.581-2.915 7.369C17.756 18.375 15.103 19.5 12 19.5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v2m-3-12h6m-9 3h3" />
                </svg>
            </div>
            <h2 class="challenge-title">PFAS (Forever Chemicals)</h2>
            <p class="challenge-description">Toxic chemicals that are difficult to destroy, posing environmental and health risks.</p>
        </div>
    </div>
      </div>

    </section>

    <section id="global-presence" class="stats section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Connecting Across Continents</h2>
        <p>Global Presence</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 justify-content-center mb-4">
            <!-- Vision Statement Column -->
            <div class="col-12 col-md-12">
              <img src="{{ asset('images/global-presence.png') }}" class="img-fluid rounded-4 mt-4" alt="Global Presence" style="width: 100%;">
            </div>
        </div>
      </div>

    </section>

    
    

@endsection

@section('third_party_scripts')

@endsection