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
        <div class="infographic-container">
            <!-- The half arc -->
            <div class="infographic-arc"></div>

            <!-- Step 1 - Biofouling -->
            <div class="step biofouling">
                <div class="step-icon orange">
                    <i class="bi bi-bug"></i>
                </div>
                <div class="connector-line"></div>
                <h5 class="step-title text-warning">Biofouling</h5>
                <ul class="step-description">
                    <li>Microbial growth clogs filters and membranes.</li>
                    <li>Causes higher energy use and frequent cleaning.</li>
                    <li>Huge impact in desalination, wastewater, semiconductors.</li>
                </ul>
            </div>

            <!-- Step 2 - Corrosion -->
            <div class="step corrosion">
                <div class="step-icon blue">
                    <i class="bi bi-droplet-half"></i>
                </div>
                <div class="connector-line"></div>
                <h5 class="step-title text-primary">Corrosion</h5>
                <ul class="step-description">
                    <li>Deteriorates pipes, tanks, and water systems.</li>
                    <li>Leads to system failure and contamination risks.</li>
                    <li>Especially costly in industrial water infrastructure.</li>
                </ul>
            </div>

            <!-- Step 3 - PFAS -->
            <div class="step pfas">
                <div class="step-icon green">
                    <i class="bi bi-exclamation-triangle"></i>
                </div>
                <div class="connector-line"></div>
                <h5 class="step-title text-success">PFAS (Forever Chemicals)</h5>
                <ul class="step-description">
                    <li>Toxic and hazardous to environment, hard to destroy.</li>
                    <li>Found in drinking water, environment, industrial discharge.</li>
                    <li>Regulations are becoming more stringent worldwide.</li>
                </ul>
            </div>
        </div>
      </div>

      <style>
        .infographic-container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 600px;
            margin: auto;
            max-width: 1000px;
        }
        .infographic-arc {
            position: absolute;
            bottom: 100px;
            width: 80%;
            height: 100px;
            border-bottom: 5px solid #ddd;
            border-bottom-left-radius: 400px;
            border-bottom-right-radius: 400px;
        }
        .step {
            position: absolute;
            text-align: center;
            width: 250px;
        }
        .step-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .step-description {
            font-size: 0.9rem;
            line-height: 1.4;
            color: #555;
            list-style-type: none;
            padding: 0;
            text-align: left;
        }
        .step-description li {
            position: relative;
            padding-left: 1.5em;
        }
        .step-description li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #333;
            font-weight: bold;
        }
        .step-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 15px;
            font-size: 30px;
            color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .orange { background: #f39c12; }
        .blue { background: #3498db; }
        .green { background: #27ae60; }
        .connector-line {
            position: absolute;
            background-color: #777;
            width: 2px;
            left: 50%;
            transform: translateX(-50%);
        }
        /* Positioning the three steps along the arc and adding pointers */
        .step.biofouling {
            top: 25%;
            left: 10%;
        }
        .step.biofouling .connector-line {
            top: 100%;
            height: 80px;
        }
        .step.corrosion {
            top: 5%;
            left: 50%;
            transform: translateX(-50%);
        }
        .step.corrosion .connector-line {
            top: 100%;
            height: 140px;
        }
        .step.pfas {
            top: 25%;
            right: 10%;
        }
        .step.pfas .connector-line {
            top: 100%;
            height: 80px;
        }

        /* Responsive styling for smaller screens */
        @media (max-width: 768px) {
            .infographic-container {
                height: auto;
                flex-direction: column;
                padding-top: 100px;
            }
            .infographic-arc, .connector-line {
                display: none; /* Hide the arc and lines on small screens */
            }
            .step {
                position: static;
                transform: none;
                margin-bottom: 3rem;
                width: 100%;
            }
            .step-description {
                text-align: center;
            }
            .step-description li {
                padding-left: 0;
            }
            .step-description li:before {
                display: none;
            }
        }
      </style>

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