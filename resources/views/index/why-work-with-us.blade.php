@extends('layouts.index')
@section('title') Why work with us @endsection

@section('third_party_stylesheets')

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
    <style>
    #map {
      height: 500px;  /* Required for Leaflet to display */
      width: 100%;
      border-radius: 10px; /* Optional: smooth edges */
    }
    </style>
  
@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <!-- <h1>Why Work With Us</h1>
        <p>Discover the unique advantages of collaborating with us</p> -->
        <nav class="breadcrumbs">
          <ol>
            <!-- <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Why Work With Us</li> -->
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

          {!! $wwwutop->content !!}

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


    <section id="global-presence" class="stats section light-background">

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
                padding-top: 50px; /* Adjusted padding for better spacing */
            }
            .infographic-arc, .connector-line {
                display: none; /* Hide the arc and lines on small screens */
            }
            .step {
                position: static;
                transform: none;
                margin-bottom: 2rem; /* Adjusted margin for better spacing */
                width: 90%; /* Adjusted width for better fit on mobile */
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

    <section id="global-presence" class="stats section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Connecting Across Continents</h2>
        <p>Global Presence</p>
      </div><!-- End Section Title -->


      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div id="map"></div>
          </div>
        </div>
      </div>
        {{-- <div class="row g-4 justify-content-center mb-4">
            
            <div class="col-12 col-md-12">
              <div id="map"></div>
              <img src="{{ asset('images/global-presence.png') }}" class="img-fluid rounded-4 mt-4" alt="Global Presence" style="width: 100%;">
            </div>
        </div> --}}

    </section>

    
    

@endsection

@section('third_party_scripts')

    <!-- Leaflet JS -->
      <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

      <script>
        // Initialize map
        var map = L.map('map').setView([20, 0], 2);

        // Load OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
          autoClose: false,
        }).addTo(map);

        // Define custom icon (blue pin)
        var customIcon = L.icon({
            iconUrl: 'https://cdn-icons-png.flaticon.com/512/684/684908.png', // pin image
            iconSize: [32, 32], // size of the icon
            iconAnchor: [16, 32], // point of the icon at marker's location
            popupAnchor: [0, -32] // position of popup relative to icon
        });

        // Add markers with custom icons
        L.marker([1.3521, 103.8198], {icon: customIcon}).addTo(map)
        .bindPopup('<b>Singapore</b>').bindTooltip('<b>Singapore</b>').openTooltip();

        L.marker([40.7128, -74.0060], {icon: customIcon}).addTo(map)
        .bindPopup('<b>New York, USA</b>').bindTooltip('<b>New York, USA</b>').openTooltip();

        L.marker([51.5074, -0.1278], {icon: customIcon}).addTo(map)
        .bindPopup('<b>London, UK</b>').bindTooltip('<b>London, UK</b>').openTooltip();

        var globalpresences = @json($globalpresences);

        globalpresences.forEach(function(globalpresence) {
            if (globalpresence.lat && globalpresence.lng) {
                L.marker([globalpresence.lat, globalpresence.lng])
                    .addTo(map)
                    .bindPopup("<b>" + globalpresence.placename + "</b>")
                    .bindTooltip("<b>" + globalpresence.placename + "</b>")
                    .openTooltip();
            }
        });
      </script>

@endsection